<?php

function get_enqueue() {
    // Stylesheets
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Open+Sans&display=swap', [], false);
    wp_enqueue_style('swiper', get_template_directory() . '/assets/css/swiper-bundle.min.css', [], '9.3.2');
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], false);
    // Scripts
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', [], '9.3.2', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', [], false, true);
}