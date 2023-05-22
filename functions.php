<?php

// Include
include ( get_template_directory() . '/inc/acf.php' );
include ( get_template_directory() . '/inc/enqueue.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'get_enqueue' );