<?php

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page([
        'page_title'    => 'Brown Goldstein and Levy',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-hammer',
        'redirect'      => false
    ]);
    
}