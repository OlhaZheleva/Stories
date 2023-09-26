<!DOCTYPE html>
<html lang="ua">

<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/smm-visual/css/main.css?ver=<?= time(); ?>">

    <?php wp_head();
    /*Template Name: smm-visual Figma template */
    ?>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MDRPB96F');</script>
    <!-- End Google Tag Manager -->



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php the_title(); ?>
    </title>

    <!-- leeloo init code -->
    <script>
        window.LEELOO = function () {
            window.LEELOO_INIT = { id: '64d4d1a222078b5fdd656ddd' };
            var js = document.createElement('script');
            js.src = 'https://app.leeloo.ai/init.js';
            js.async = true;
            document.getElementsByTagName('head')[0].appendChild(js);
        }; LEELOO();
    </script>
    <!-- end leeloo init code -->

    <script>window.LEELOO_LEADGENTOOLS = (window.LEELOO_LEADGENTOOLS || []).concat('znv1gl');</script>



</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDRPB96F" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!---------- HEADER ---------->
    <header class="header animate" data-animate="animTitle 2s">
        <div class="container">
            <a class="logo" href="">kukurudza</a>

            <?php $navigation = get_field('navigation');
            if (!empty($navigation)) { ?>
                <ul class="nav">
                    <?php foreach ($navigation as $item) { ?>
                        <li class="nav-item">
                            <a href="<?php echo $item['link']; ?>" class="nav-link"><?php echo $item['name']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <a href="#bl-7" class="button">Зайняти місце</a>
            <div class="header-menu">
                <p class="word">меню</p>
                <button class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="menu">
                    <div class="menu-body">
                        <?php $navigation = get_field('navigation');
                        if (!empty($navigation)) { ?>
                            <ul class="menu-nav  nav">
                                <?php foreach ($navigation as $item) { ?>
                                    <li class="nav-item">
                                        <a href="<?php echo $item['link']; ?>" class="nav-link"><?php echo $item['name']; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        <?php $social = get_field('social');
                        if (!empty($social)) { ?>
                            <div class="social">
                                <?php foreach ($social as $item) { ?>
                                    <a href="<?php echo $item['link']; ?>">
                                        <?php
                                        $icon = $item['icon'];
                                        if (!empty($icon)): ?>
                                            <img src="<?php echo esc_url($icon['url']); ?>"
                                                alt="<?php echo esc_attr($icon['alt']); ?>" />
                                        <?php endif; ?> </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="right">
                            <?php $privacy = get_field('privacy');
                            if (!empty($privacy)) { ?>
                                <a href="<?php echo $privacy['url']; ?>" target="<?php echo $privacy['target']; ?>"><?php echo $privacy['title']; ?></a>
                            <?php } ?>
                            <?php $contract = get_field('contract');
                            if (!empty($contract)) { ?>
                                <a href="<?php echo $contract['url']; ?>" target="<?php echo $contract['target']; ?>"> <?php echo $contract['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-----------MAIN BLOCK------->
    <?php if (get_field('bl1_title')): ?>
    <section class="main animate" data-animate="animTitle 2s" id="bl-1">
        <div class="container">
            <h1 class="title">
                <?php the_field('bl1_title'); ?>
            </h1>
            <?php
            $image_pc = get_field('bl1_img_pc');
            if (!empty($image_pc)): ?>
            <img class="img-desck" src="<?php echo esc_url($image_pc['url']); ?>"
                alt="<?php echo esc_attr($image_pc['alt']); ?>" />
            <?php endif; ?>
            <?php
            $image_mob = get_field('bl1_img_mob');
            if (!empty($image_mob)): ?>
            <img class="img-mobile" src="<?php echo esc_url($image_mob['url']); ?>"
                alt="<?php echo esc_attr($image_mob['alt']); ?>" />
            <?php endif; ?>
            <?php $bl1_list = get_field('bl1_list');
            if (!empty($bl1_list)) { ?>
            <ul class="list">
                <?php foreach ($bl1_list as $li) { ?>
                <li class="list-item">
                    <?php
                    $icon = $li['icon'];
                    if (!empty($icon)): ?>
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                    <?php endif; ?> </a>
                    <p>
                        <?php echo $li['text']; ?>
                    </p>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
            <div class="main-buttons">
                <?php $bl1_btn_left = get_field('bl1_btn_left');
                if (!empty($bl1_btn_left)) { ?>
                <a href="<?php echo $bl1_btn_left['url']; ?>" target="<?php echo $bl1_btn_left['target']; ?>"
                    class="button "><?php echo $bl1_btn_left['title']; ?><span></span></a>
                <?php } ?>
                <?php $bl1_btn_right = get_field('bl1_btn_right');
                if (!empty($bl1_btn_right)) { ?>
                <a href="<?php echo $bl1_btn_right['url']; ?>" target="<?php echo $bl1_btn_right['target']; ?>"
                    class="button button-white"><?php echo $bl1_btn_right['title']; ?></a>
                <?php } ?>
                <p>
                    <?php the_field('bl1_text_left'); ?>
                </p>
                <p>
                    <?php the_field('bl1_text_right'); ?>
                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!----------FOR------------->
    <?php if (get_field('bl2_title')): ?>
    <section class="for animate" data-animate="animTitle 2s" id="bl-2">
        <div class="container">
            <h2>
                <?php the_field('bl2_title'); ?>
            </h2>
            <p class="sub-title">
                <?php the_field('bl2_subtitle'); ?>
            </p>
            <?php $bl2_carts = get_field('bl2_carts');
            if (!empty($bl2_carts)) { ?>
            <div class="for-items">
                <?php foreach ($bl2_carts as $item) { ?>
                <div class="for-item">
                    <div class="header">
                        <div class="icon">
                            <?php
                            $icon = $item['icon'];
                            if (!empty($icon)): ?>
                            <img src="<?php echo esc_url($icon['url']); ?>"
                                alt="<?php echo esc_attr($icon['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <h4>
                            <?php echo $item['title']; ?>
                        </h4>
                    </div>
                    <div class="body">
                        <?php $list = $item['list'];
                        if (!empty($list)) { ?>
                        <ul>
                            <?php foreach ($list as $li) { ?>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/fire-1.svg" alt="">
                                <p>
                                    <?php echo $li['li']; ?>
                                </p>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <p class="text">
                            <?php echo $item['text']; ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
            <?php $bl2_link = get_field('bl2_link');
            if (!empty($bl2_link)) { ?>
            <a href="<?php echo $bl2_link['url']; ?>" target="<?php echo $bl2_link['target']; ?>"
                class="button button-black"><?php echo $bl2_link['title']; ?><span></span></a>
            <?php } ?>
        </div>
    </section>
    <?php endif; ?>

    <!-----------VIDEO BLOCK------->
    <?php $video = get_field('bl12_title');
    if (!empty($video)) { ?>
    <section class="video-block animate" data-animate="animTitle 2s" id="bl-12">
        <div class="container">
            <h2>
                <?php the_field('bl12_title'); ?>
            </h2>
            <p>
                <?php the_field('bl12_sub-title'); ?>
            </p>
            <div class="video">
                <video src="<?php the_field('video'); ?>" controls poster="<?php the_field('video_cover'); ?>">
                </video>
            </div>
        </div>
    </section>
    <?php } ?>

    <!----------DESIGN------------->
    <?php if (get_field('bl3_title')): ?>
    <section class="design animate" data-animate="animTitle 2s" id="bl-3">
        <div class="container">
            <div class="content">
                <h2>
                    <?php the_field('bl3_title'); ?>
                </h2>
                <p class="sub-title">
                    <?php the_field('bl3_subtitle'); ?>
                </p>
                <?php $bl3_list = get_field('bl3_list');
                if (!empty($bl3_list)) { ?>
                <div class="items">
                    <?php foreach ($bl3_list as $li) { ?>
                    <div class="item">
                        <?php
                        $icon = $li['icon'];
                        if (!empty($icon)): ?>
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        <?php endif; ?> </a>
                        <p>
                            <?php echo $li['text']; ?>
                        </p>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <?php $bl3_image = get_field('bl3_image');
            if (!empty($bl3_image)): ?>
            <div class="image">
                <h4>
                    <?php echo $bl3_image['text']; ?>
                </h4>
                <?php $img_pc = $bl3_image['img_pc'];
                if (!empty($img_pc)): ?>
                <img class="desck" src="<?php echo esc_url($img_pc['url']); ?>"
                    alt="<?php echo esc_attr($img_pc['alt']); ?>" />
                <?php endif; ?>

                <?php $img_mob = $bl3_image['img_mob'];
                if (!empty($img_mob)): ?>
                <img class="mobile" src="<?php echo esc_url($img_mob['url']); ?>"
                    alt="<?php echo esc_attr($img_mob['alt']); ?>" />
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php $bl3_btn = get_field('bl3_btn');
        if (!empty($bl3_btn)) { ?>
        <div class="container">
            <a href="<?php echo $bl3_btn['url']; ?>" target="<?php echo $bl3_btn['target']; ?>"
                class="button button-white"><?php echo $bl3_btn['title']; ?><span></span></a>
        </div>
        <?php } ?>
    </section>
    <?php endif; ?>

    <!----------PROGRAM------------->
    <?php if (get_field('bl4_title')): ?>
    <section class="program animate" data-animate="animTitle 2s" id="bl-4">
        <div class="container">
            <div class="program-title">
                <h2>
                    <?php the_field('bl4_title'); ?>
                </h2>
                <img class="program-icon"
                    src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/program-icon.svg" alt="kukurudza">
            </div>
            <?php $modules = get_field('modules');
            if (!empty($modules)) { ?>
            <div class="program__items accordion">
                <?php foreach ($modules as $modul) { ?>
                <div class="accordion-item  <?php echo $modul['open']; ?>">
                    <label class="accordion-heading">
                        <span>
                            <?php echo $modul['number']; ?>
                        </span>
                        <p>
                            <?php echo $modul['theme']; ?>
                            <span class="accordion-icon"></span>
                        </p>
                    </label>
                    <article class="accordion-content">
                        <?php $lessons = $modul['lessons'];
                        if (!empty($lessons)) { ?>
                        <ul class="lessons">
                            <?php foreach ($lessons as $lesson) { ?>
                            <li>
                                <?php echo $lesson['lesson']; ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <p class="bold">
                            <?php echo $modul['text']; ?>
                        </p>
                        <div class="lists">
                            <?php $materials = $modul['materials'];
                            if (!empty($materials)) { ?>
                            <ul class="materials">
                                <p class="blue">Матеріали:</p>
                                <?php foreach ($materials as $li) { ?>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/materials.svg"
                                        alt="">
                                    <p>
                                        <?php echo $li['li']; ?>
                                    </p>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php $study = $modul['study'];
                            if (!empty($study)) { ?>
                            <ul class="study">
                                <p class=" orange">Результат:</p>
                                <?php foreach ($study as $li) { ?>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/relusts.svg"
                                        alt="">
                                    <p>
                                        <?php echo $li['li']; ?>
                                    </p>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </div>
                    </article>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </section>
    <?php endif; ?>
    <!----------TRAINING------------->
    <?php if (get_field('bl5_title')): ?>
    <section class="training animate" data-animate="animTitle 2s" id="bl-5">
        <div class="container">
            <h2>
                <?php the_field('bl5_title'); ?>
            </h2>
            <?php $items = get_field('items');
            if (!empty($items)) { ?>
            <div class="items slider-training">
                <?php foreach ($items as $item) { ?>
                <div class="slide">
                    <div class="header">
                        <div class="icon">
                            <?php echo $item['number']; ?>
                        </div>
                        <h5>
                            <?php echo $item['text']; ?>
                        </h5>
                    </div>
                    <div class="body">
                        <?php
                        $img = $item['img'];
                        if (!empty($img)): ?>
                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </section>
    <?php endif; ?>

    <!-----------SKILLS BLOCK------->
    <?php if (get_field('bl6_title')): ?>
    <section class="skills animate" data-animate="animTitle 2s" id="bl-6">
        <div class="container">
            <h2>
                <?php the_field('bl6_title'); ?>
            </h2>
            <div class="content">
                <?php $image = get_field('image');
                if (!empty($image)): ?>
                <div class="left">
                    <div class="image">
                        <p>
                            <?php echo $image['text']; ?>
                        </p>
                        <?php $img = $image['img'];
                        if (!empty($img)): ?>
                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php $skills = get_field('skills');
                if (!empty($skills)) { ?>
                <div class="items">
                    <?php foreach ($skills as $skill) { ?>
                    <div class="skill">
                        <div class="icon">
                            <p>
                                <?php echo $skill['number']; ?>
                            </p>
                        </div>
                        <div class="">
                            <h4>
                                <?php echo $skill['name']; ?>
                            </h4>
                            <p>
                            <p>
                                <?php echo $skill['text']; ?>
                            </p>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <?php $bl6_link = get_field('bl6_link');
            if (!empty($bl6_link)) { ?>
            <a href="<?php echo $bl6_link['url']; ?>" target="<?php echo $bl6_link['target']; ?>"
                class="button button-black"><?php echo $bl6_link['title']; ?><span></span></a>
            <?php } ?>
        </div>
    </section>
    <?php endif; ?>
    <!-----------RATES BLOCK------->
    <?php if (get_field('bl7_title')): ?>
    <section class="rates animate" data-animate="animTitle 2s" id="bl-7">
        <div class="container">
            <div class="content">
                <h2>
                    <?php the_field('bl7_title'); ?>
                </h2>
                <p class="sub-title">
                    <?php the_field('bl7_sub-title'); ?>
                </p>
                <?php $rates = get_field('rates');
                if (!empty($rates)) { ?>
                <div class="items">
                    <?php foreach ($rates as $item) { ?>
                    <div class="rate">
                        <?php echo $item['script']; ?>
                        <div class="header">
                            <h4>
                                <?php echo $item['name']; ?>
                            </h4>
                        </div>
                        <div class="body">
                            <?php $active = $item['active'];
                            if (!empty($active)) { ?>
                            <ul class="active">
                                <?php foreach ($active as $li) { ?>
                                <li>
                                    <span></span>
                                    <p>
                                        <?php echo $li['li']; ?>
                                    </p>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php $bonus = $item['bonus'];
                            if (!empty($bonus)) { ?>
                            <ul class="bonus">
                                <?php foreach ($bonus as $li) { ?>
                                <li>
                                    <span></span>
                                    <p>
                                        <?php echo $li['li']; ?>
                                    </p>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php $noactive = $item['noactive'];
                            if (!empty($noactive)) { ?>
                            <ul class="no-active">
                                <?php foreach ($vip as $li) { ?>
                                <li>
                                    <span></span>
                                    <p>
                                        <?php echo $li['li']; ?>
                                    </p>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php $vip = $item['vip'];
                            if (!empty($vip)) { ?>
                            <ul class="vip">
                                <?php foreach ($vip as $li) { ?>
                                <li>
                                    <span></span>
                                    <p>
                                        <?php echo $li['li']; ?>
                                    </p>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <div class="cost">
                                <?php
                                $full_cost = $item['full'];
                                if (!empty($full_cost)): ?>
                                <div class="cost-full"><span></span>
                                    <p>
                                        <?php echo $item['full']; ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                                <?php
                                $sale_cost = $item['sale'];
                                if (!empty($sale_cost)): ?>
                                <div class="cost-sale">
                                    <p>
                                        <?php echo $item['sale']; ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="line">
                                <p>
                                    <?php echo $item['text']; ?>
                                    <span> • </span>
                                    <?php echo $item['text']; ?><span> • </span>
                                </p>
                            </div>
                        </div>
                    
                        <?php $link = $item['link'];
                        if (!empty($link)) { ?>
                        <a href="<?php echo $link['url']; ?>"  target="<?php echo $link['target']; ?>" data-widget-handler="<?php echo $item['data']; ?>"
                            class="button"><?php echo $link['title']; ?>
                            <span></span></a>
                        <?php } ?>
                        <?php $booking = $item['booking'];
                        if (!empty($booking)) { ?>
                        <a href="<?php echo $booking['url']; ?>" target="<?php echo $booking['target']; ?>"
                            class="button button-booking"><?php echo $booking['title']; ?> </a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-----------SPEAKER BLOCK------->
    <?php if (get_field('bl8_title')): ?>
    <section class="speakers animate" data-animate="animTitle 2s" id="bl-8">
        <div class="container">
            <h2>
                <?php the_field('bl8_title'); ?>
                <img class="desck" src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/microphone-pc.svg"
                    alt="">
                <img class="mobile" src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/microphone-mob.svg"
                    alt="">
            </h2>

            <?php $speakers = get_field('speakers');
            if (!empty($speakers)) { ?>
            <div class="items speakers-slider">
                <?php foreach ($speakers as $speaker) { ?>
                <div class="speaker">
                    <div class="head">
                        <div class="avatar">
                            <?php
                            $avatar = $speaker['avatar'];
                            if (!empty($avatar)): ?>
                            <img src="<?php echo esc_url($avatar['url']); ?>"
                                alt="<?php echo esc_attr($avatar['alt']); ?>" />
                            <?php endif; ?>
                            <?php
                            $link = $speaker['link'];
                            if (!empty($link)): ?>
                            <a target="_blank" href="<?php echo $speaker['link']; ?>"></a>
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <p>
                                <?php echo $speaker['position']; ?>
                            </p>
                            <p>
                                <?php echo $speaker['name']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="about">
                        <p class="descriprion">
                            <?php echo $speaker['description']; ?>
                        </p>
                        <h6><span><img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/photo.svg"
                                    alt=""></span>
                            <?php echo $speaker['gender']; ?>
                        </h6>
                        <p>
                            <?php echo $speaker['experience']; ?>
                        </p>
                        <h6><span><img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/star.svg"
                                    alt=""></span>досягнення:</h6>
                        <p>
                            <?php echo $speaker['achievement']; ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
            <?php $bl8_link = get_field('bl8_link');
            if (!empty($bl8_link)) { ?>
            <a href="<?php echo $bl8_link['url']; ?>" target="<?php echo $bl8_link['target']; ?>"
                class="button button-black"><?php echo $bl8_link['title']; ?><span></span></a>
            <?php } ?>
        </div>
    </section>
    <?php endif; ?>
    <!-----------REVIEWS BLOCK------->
    <?php if (get_field('bl9_title')): ?>
    <section class="reviews animate" data-animate="animTitle 2s" id="bl-9">
        <div class="container">
            <h2>
                <?php the_field('bl9_title'); ?>
            </h2>
            <?php if (have_rows('reviews')): ?>
            <div class="reviews-slider">
                <?php while (have_rows('reviews')):
                    the_row();
                    $image = get_sub_field('image');
                    if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
    <!------------FAQ BLOCK----------->
    <?php if (get_field('bl10_title')): ?>
    <section class="faq animate" data-animate="animTitle 2s" id="bl-10">
        <div class="container">
            <h2>
                <?php the_field('bl10_title'); ?>
            </h2>
            <?php $questions = get_field('questions');
            if (!empty($questions)) { ?>
            <div class="faq-items accordion">
                <?php foreach ($questions as $question) { ?>
                <div class="accordion-item <?php echo $question['open']; ?>">
                    <label class="accordion-heading">
                        <span>
                            <?php echo $question['number']; ?>
                        </span>
                        <p>
                            <?php echo $question['question']; ?>
                            <span class="accordion-icon"></span>
                        </p>
                    </label>
                    <article class="accordion-content">
                        <p>
                            <?php echo $question['text']; ?>
                        </p>
                    </article>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
            <?php $bl10_link = get_field('bl10_link');
            if (!empty($bl10_link)) { ?>
            <a href="<?php echo $bl10_link['url']; ?>" target="<?php echo $bl10_link['target']; ?>"
                class=" button"><?php echo $bl10_link['title']; ?><span></span></a>
            <?php } ?>
        </div>
    </section>
    <?php endif; ?>
    <!------------SUPPORT BLOCK------>
    <?php if (get_field('bl11_title')): ?>
        <section class="support animate" data-animate="animTitle 2s" id="bl-11">
            <div class="container">
                <div class="inner">
                    <h3>
                        <?php the_field('bl11_title'); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/!!.svg" alt="">
                    </h3>
                    <div class="">
                        <div class="avatar">
                            <?php $image = get_field('bl11_avatar');
                            if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <p>
                            <?php the_field('bl11_text'); ?>
                        </p>
                    </div>
                </div>
                <?php $bl11_link = get_field('bl11_link');
                if (!empty($bl11_link)) { ?>
                    <a href="<?php echo $bl11_link['url']; ?>" target="<?php echo $bl11_link['target']; ?>"
                        class="button "><?php echo $bl11_link['title']; ?></a>
                <?php } ?>
            </div>
        </section>
    <?php endif; ?>
    <!------------FOOTER BLOCK------>
    <footer class="footer">
        <div class="container">
            <div class="left">
                <p>kukurudza</p>
                <p>Курс з смм-візуалу</p>
                <?php $social = get_field('social');
                if (!empty($social)) { ?>
                    <div class="social">
                        <?php foreach ($social as $item) { ?>
                            <a href="<?php echo $item['link']; ?>">
                                <?php
                                $icon = $item['icon'];
                                if (!empty($icon)): ?>
                                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                                <?php endif; ?> </a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php $navigation = get_field('navigation');
                if (!empty($navigation)) { ?>
                    <ul class="nav">
                        <?php foreach ($navigation as $item) { ?>
                            <li class="nav-item">
                                <a href="<?php echo $item['link']; ?>" class="nav-link"><?php echo $item['name']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="right">
                <?php $privacy = get_field('privacy');
                if (!empty($privacy)) { ?>
                    <a href="<?php echo $privacy['url']; ?>" target="<?php echo $privacy['target']; ?>"><?php echo $privacy['title']; ?></a>
                <?php } ?>
                <?php $contract = get_field('contract');
                if (!empty($contract)) { ?>
                    <a href="<?php echo $contract['url']; ?>" target="<?php echo $contract['target']; ?>"> <?php echo $contract['title']; ?></a>
                <?php } ?>
            </div>
            <div class="carts">
                <img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/mastercart.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/smm-visual/img/visa.png" alt="">
            </div>
        </div>
    </footer>
    <script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/smm-visual/js/jquery.min.js?ver=<?= time(); ?>"></script>
    <script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/smm-visual/js/slick.min.js?ver=<?= time(); ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/smm-visual/js/main.js?ver=<?= time(); ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/smm-visual/js/test.js?ver=<?= time(); ?>"></script>
</body>

</html>