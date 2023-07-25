<?php

$news_post_per_page     = get_field('news_post_per_page', 'option');
$news_post_per_page_int = (int)$news_post_per_page;

$portfolio_post_per_page     = get_field('portfolio_post_per_page', 'option');
$portfolio_post_per_page_int = (int)$portfolio_post_per_page;

function news_pagination($query) {
    if(!is_admin() && is_post_type_archive('news') && $query->is_main_query()) {
        global $news_post_per_page_int;
        $query->set('posts_per_page', $news_post_per_page_int);
    }
}

function portfolio_pagination($query) {
    if(!is_admin() && is_post_type_archive('portfolio') && $query->is_main_query()) {
        global $portfolio_post_per_page_int;
        $query->set('posts_per_page', $portfolio_post_per_page_int);
    }
}