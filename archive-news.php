<?php get_header(); ?>
<main class="main-content">
    <!-- Hero -->
    <?php
        $news_background = get_field('news_background', 'option');
        $news_title      = get_field('news_title', 'option');
        $news_content    = get_field('news_content', 'option');
    ?>
    <section class="hero" style="background-image: url(<?php echo $news_background['url']; ?>)">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $news_title; ?></h1>
            </div>
        </div>
    </section>
    <!-- News -->
    <section class="news">
        <div class="container">
            <div class="news__content d-flex justify-center flex-wrap">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                ?>
                            <div class="news-entry">
                                <div class="news-entry__thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="news-entry__content text-center">
                                    <div class="news-entry__meta d-flex justify-center">
                                        <span><?php the_tags(); ?></span>
                                        <span class="news-entry__meta-sep">|</span>
                                        <span><?php echo get_the_date(); ?></span>
                                    </div>
                                    <h2 class="news-entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="the-pagination text-center">
                <?php echo paginate_links(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>