<?php get_header(); ?>
<main class="main-content">
    <!-- Hero -->
    <?php
        $hero_background = get_field('hero_background');
        $hero_title      = get_field('hero_title');
    ?>
    <section class="hero" style="background-image: url(<?php echo $hero_background['url']; ?>)">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $hero_title; ?></h1>
            </div>
        </div>
    </section>
    <!-- History Content -->
    <?php
        $history_description = get_field('history_description');
        $history_button      = get_field('history_button');
    ?>
    <section class="history-content">
        <div class="container">
            <div class="history-content__content text-center">
                <p><?php echo $history_description; ?></p>
                <?php
                    if($history_button){
                ?>
                        <a href="<?php echo $history_button['url']; ?>" class="btn btn-outline-grey btn-has-icon d-i-flex item-center justify-center" target="<?php echo $history_button['target']; ?>"><?php echo $history_button['title']; ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Primary.svg' ?>" alt="Right Arrow Primary"></a>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Featured Cases -->
    <section class="featured-cases">
        <div class="swiper featured-cases__slider">
            <div class="swiper-wrapper">
                <?php
                    if(have_rows('featured_cases')) {
                        while(have_rows('featured_cases')) {
                            the_row();
                            $image  = get_sub_field('image');
                            $span   = get_sub_field('span');
                            $title  = get_sub_field('title');
                            $button = get_sub_field('button');
                ?>
                            <div class="swiper-slid featured-cases__slider_slide" style="background-image: url(<?php echo $image['url']; ?>)">
                                <div class="featured-cases__slide_content">
                                    <h5 class="slide__span"><?php echo $span; ?></h5>
                                    <h2 class="slide__title"><?php echo $title; ?></h2>
                                    <?php
                                        if($button){
                                    ?>
                                            <a href="<?php echo $button['url']; ?>" class="btn btn-outline-light btn-has-icon d-i-flex item-center justify-center" target="<?php echo $history_button['target']; ?>"><?php echo $button['title']; ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Light.svg' ?>" alt="Right Arrow Light"></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="swiper-button-next featured-cases__slider_next"></div>
            <div class="swiper-button-prev featured-cases__slider_prev"></div>
            <div class="swiper-pagination featured-cases__slider_pagination"></div>
        </div>
    </section>
</main>
<?php get_footer(); ?>