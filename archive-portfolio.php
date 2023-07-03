<?php get_header(); ?>
<main class="main-content">
    <!-- Hero -->
    <?php
        $portfolio_background = get_field('portfolio_background', 'option');
        $portfolio_title      = get_field('portfolio_title', 'option');
        $portfolio_content    = get_field('portfolio_content', 'option');
    ?>
    <section class="hero" style="background-image: url(<?php echo $portfolio_background['url']; ?>)">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $portfolio_title; ?></h1>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio">
        <div class="container">
            <div class="portfolio__content">
                <div class="portfolio__content_content">
                    <p class="text-center"><?php echo $portfolio_content; ?></php></p>
                </div>
                <div class="portfolio__content_entries d-flex justify-center flex-wrap">
                    <?php
                        $portfolio_query = new WP_Query([
                            'post_type'     => 'portfolio',
                            'posts_per_page' => -1,
                            'order'         => 'ASC',
                            'order'         => 'date'
                        ]);
                        if($portfolio_query->have_posts()) {
                            while($portfolio_query->have_posts()) {
                                $portfolio_query->the_post();
                    ?>
                                <div class="portfolio-item__container d-flex item-center">
                                    <div class="portfolio-item__text d-flex justify-center text-center">
                                        <div class="portfolio-item__text_content">
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <div class="portfolio-item__text_text">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="portfolio-btn btn-text btn-has-icon d-i-flex item-center">Read More <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Primary.svg' ?>" alt="Right Arrow Primary"></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-item__image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>