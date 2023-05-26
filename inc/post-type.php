<?php

function custom_post_type() {
    // News
	register_post_type('news', [
        'labels'             => [
            'name'                  => _x('News', 'browngoldsteinlevy'),
            'singular_name'         => _x('News', 'browngoldsteinlevy'),
            'menu_name'             => _x('News', 'browngoldsteinlevy'),
            'name_admin_bar'        => _x('News', 'browngoldsteinlevy'),
            'add_new'               => __('Add New', 'browngoldsteinlevy'),
            'add_new_item'          => __('Add New News', 'browngoldsteinlevy'),
            'new_item'              => __('New News', 'browngoldsteinlevy'),
            'edit_item'             => __('Edit News', 'browngoldsteinlevy'),
            'view_item'             => __('View News', 'browngoldsteinlevy'),
            'view_items'            => __('View News', 'browngoldsteinlevy'),
            'all_items'             => __('All News', 'browngoldsteinlevy'),
        ],
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => ['slug' => 'news'],
		'capability_type'    => 'post',
        'taxonomies'         => ['post_tag'],
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-media-document',
		'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments']
    ]);
}