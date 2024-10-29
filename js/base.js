// Toggle menu

const toggleButton = document.querySelector(".header__toggle-menu");

const header = document.querySelector(".header");

toggleButton.addEventListener("click", () => {
  header.classList.toggle("toggle");
});

// Header scrolling

window.addEventListener("scroll", () => {
  const header = document.querySelector("header");
  if (window.scrollY > 0) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// Init swiper

const swiper = new Swiper(".projects-section__gallery", {
  slidesPerView: "auto",
  spaceBetween: 30,
  grabCursor: true,
  navigation: {
    nextEl: ".projects-section__btn-next",
    prevEl: ".projects-section__btn-prev",
  },
});

// Init animations

wow = new WOW({
  animateClass: "animate__animated",
});

wow.init();
