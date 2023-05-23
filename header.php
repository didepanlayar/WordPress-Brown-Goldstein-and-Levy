<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charshet'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="d-flex">
                <div class="logo-wrapper">
                    <?php $header_logo = get_field('header_logo', 'option'); ?>
                    <a href="<?php esc_url(home_url()); ?>" class="logo-link">
                        <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['title']; ?>">
                    </a>
                </div>
            </div>
        </div>
    </header>