window.onload = function() {
    setTimeout(function() {
        var featuredCasesSlider = new Swiper(".featured-cases__slider", {
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".featured-cases__slider_pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".featured-cases__slider_next",
                prevEl: ".featured-cases__slider_prev",
            },
        });
        var recentAwards = new Swiper(".recent-awards__slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            navigation: {
              nextEl: ".recent-awards__slider-next",
              prevEl: ".recent-awards__slider-prev",
            },
          });
    }, 100)
}