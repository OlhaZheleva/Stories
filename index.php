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
                <h4><?php echo $bl3_image['text']; ?></h4>
                <?php $img_pc = $bl3_image['img_pc'];
                        if (!empty($img_pc)): ?>
                        <img class="desck" src="<?php echo esc_url($img_pc['url']); ?>" alt="<?php echo esc_attr($img_pc['alt']); ?>" />
                        <?php endif; ?>
                        
                        <?php $img_mob = $bl3_image['img_mob'];
                        if (!empty($img_mob)): ?>
                        <img class="mobile" src="<?php echo esc_url($img_mob['url']); ?>" alt="<?php echo esc_attr($img_mob['alt']); ?>" />
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


