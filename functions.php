<?php

// Include
include ( get_template_directory() . '/inc/acf.php' );
include ( get_template_directory() . '/inc/enqueue.php' );
include ( get_template_directory() . '/inc/setup.php' );
include ( get_template_directory() . '/inc/post-type.php' );
include ( get_template_directory() . '/inc/misc.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'get_enqueue' );
add_action( 'after_setup_theme', 'start_setup' );
add_action( 'init', 'custom_post_type' );
add_action( 'pre_get_posts', 'news_pagination' );
add_action( 'pre_get_posts', 'portfolio_pagination' );