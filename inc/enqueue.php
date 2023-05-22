<?php

function get_enqueue() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Open+Sans&display=swap', [], false);
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], false);
}