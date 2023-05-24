<?php get_header(); ?>
<main class="main-content">
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
</main>
<?php get_footer(); ?>