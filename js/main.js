("use strict");

// mobile menu
let iconMenu = document.querySelector(".menu-btn");
let header = document.querySelector(".header");
let navLinks = document.querySelectorAll(".nav-link");
let navLogo = document.querySelector(".header-logo");
let menuWord = document.querySelector(".word");

iconMenu.addEventListener("click", function (event) {
  event.preventDefault();
  document.body.classList.toggle("_lock");
  header.classList.toggle("_active");
  menuWord.classList.toggle("_hidden");
  iconMenu.classList.toggle("rotate");
});

if (navLinks) {
  navLinks.forEach((navLink) => {
    navLink.addEventListener("click", function () {
      document.body.classList.remove("_lock");
      header.classList.remove("_active");
      menuWord.classList.remove("_hidden");
      iconMenu.classList.remove("rotate");
    });
  });
}

// accordion
let accItem = document.getElementsByClassName("accordion-item");
let accHD = document.getElementsByClassName("accordion-heading");
console.log(accItem);
console.log(accHD);
for (i = 0; i < accHD.length; i++) {
  accHD[i].addEventListener("click", toggleItem, false);
}

function toggleItem() {
  let itemClass = this.parentNode.className;
  for (i = 0; i < accItem.length; i++) {
    accItem[i].className = "accordion-item close";
  }
  if (itemClass == "accordion-item close") {
    this.parentNode.className = "accordion-item open";
  }
}


$(document).ready(function () {
  // materials slider
  $(".slider-training").slick({
    variableWidth: true,
    autoplaySpeed: 2000,
    pauseOnHover: true,
    slidesToScroll: 1,
    autoplay: false,
    infinite: false,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToScroll: 1,
        },
      },
    ],
  });

  // reviews slider
  $(".reviews-slider").slick({
    variableWidth: true,
    lazyLoad: "ondemand",
    autoplaySpeed: 2000,
    pauseOnHover: true,
    slidesToScroll: 1,
    autoplay: false,
    infinite: true,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".speakers-slider").slick({
    variableWidth: true,
    autoplaySpeed: 2000,
    pauseOnHover: true,
    slidesToScroll: 1,
    autoplay: false,
    infinite: false,
    arrows: true,

    responsive: [
      {
        breakpoint: 1040,
        settings: {
          slidesToScroll: 1,
          arrows: true,
          draggable: true,
        },
      },
    ],
  });
});


// animation

let callback = (entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      console.log("The element is intersecting >");

      entry.target.style.animation = entry.target.dataset.animate;
    } else {
      //entry.target.style.animation="none";
    }
  });
};
let observer = new IntersectionObserver(callback);
const animationItems = document.querySelectorAll(".animate");
animationItems.forEach((item) => {
  observer.observe(item);
});
