document.addEventListener("click", function (event) {
  const toggleButton = document.querySelector(".navbar-toggler");
  const navbarMenu = document.querySelector("#navbarSupportedContent");

  if (
    !toggleButton.contains(event.target) &&
    !navbarMenu.contains(event.target)
  ) {
    navbarMenu.classList.remove("show");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".swiper-container", {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    grabCursor: true,
    breakpoints: {
      576: { slidesPerView: 2 },
      768: { slidesPerView: 3 },
      1024: { slidesPerView: 4 },
    },
    on: {
      init: function (swiper) {
        if (swiper.slides.length <= swiper.params.slidesPerView) {
          swiper.params.loop = false;
        }
      },
    },
  });
});
