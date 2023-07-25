<?php

function start_setup() {
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    // Menus
    register_nav_menus([
        'header-menu'           => __('Header Menu', 'browngoldsteinlevy'),
        'footer-col-one-menu'   => __('Footer Column 1', 'browngoldsteinlevy'),
        'footer-col-two-menu'   => __('Footer Column 2', 'browngoldsteinlevy'),
        'footer-col-three-menu' => __('Footer Column 3', 'browngoldsteinlevy'),
        'privacy-menu'          => __('Privacy Menu', 'browngoldsteinlevy')
    ]);
}