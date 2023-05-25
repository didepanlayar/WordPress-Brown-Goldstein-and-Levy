window.onload = function() {
    setTimeout(function() {
        var featuredCasesSlider = new Swiper(".featured-cases__slider", {
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".featured-cases__slider_pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".featured-cases__slider_next",
                prevEl: ".featured-cases__slider_prev",
            },
        });
    }, 100)
}