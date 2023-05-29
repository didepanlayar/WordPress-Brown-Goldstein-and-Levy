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
                            <div class="swiper-slide featured-cases__slider_slide" style="background-image: url(<?php echo $image['url']; ?>)">
                                <div class="featured-cases__slide_content d-flex item-center">
                                    <div class="slide-content__content">
                                        <h5 class="slide__span"><?php echo $span; ?></h5>
                                        <h2 class="slide__title"><?php echo $title; ?></h2>
                                        <?php
                                            if($button){
                                        ?>
                                                <a href="<?php echo $button['url']; ?>" class="btn btn-outline-light btn-has-icon d-i-flex item-center justify-center slide__button" target="<?php echo $history_button['target']; ?>"><?php echo $button['title']; ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Light.svg' ?>" alt="Right Arrow Light"></a>
                                        <?php
                                            }
                                        ?>
                                    </div>
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
    <!-- Recent News -->
    <?php
        $news_status = get_field('news_status');
        $news_title  = get_field('news_title') ;
        $news_button = get_field('news_button');
    ?>
    <section class="recent-news">
        <div class="container">
            <div class="recent-news__content">
                <h2 class="recent-news__title text-center"><?php echo $news_title; ?></h2>
                <div class="recent-news__entries d-flex space-between">
                    <?php
                        $recent_news = new WP_Query([
                            'post_type'      => 'news',
                            'posts_per_page' => 2,
                            'order'          => 'DESC',
                            'orderby'        => 'date'
                        ]);
                        if($recent_news->have_posts()) {
                            while($recent_news->have_posts()) {
                                $recent_news->the_post();
                    ?>
                                <div class="recent-news__entry">
                                    <div class="news-entry__image-wrapper">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    </div>
                                    <div class="news-entry__meta d-flex justify-center">
                                        <span class="tags"><?php the_tags(); ?></span>
                                        <span class="date"><?php echo get_the_date(); ?></span>
                                    </div>
                                    <h3 class="news-entry__title text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                    <?php
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
                <?php
                    if($news_button) {
                ?>
                        <div class="recent-news__button-wrapper text-center">
                            <a href="<?php echo $news_button['url']; ?>" class="btn btn-outline-grey btn-has-icon d-i-flex item-center justify-center" target="<?php echo $news_button['target']; ?>"><?php echo $news_button['title']; ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Primary.svg' ?>" alt="Right Arrow Primary"></a>
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>