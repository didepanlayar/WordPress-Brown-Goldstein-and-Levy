<?php
    get_header();
    /**
     * Template Name: About
     */
?>
<main class="main-content">
    <!-- Hero -->
    <section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- Mission -->
    <?php
        $our_mission_background  = get_field('our_mission_background');
        $our_mission_title       = get_field('our_mission_title');
        $our_mission_description = get_field('our_mission_description');
    ?>
    <section class="mission" style="background-image: url(<?php echo $our_mission_background['url']; ?>">
        <div class="container">
            <div class="mission__content text-center">
                <h2 class="mission-title mission-title-sep"><?php echo $our_mission_title; ?><span></span></h2>
                <p class="mission-description"><?php echo $our_mission_description; ?></p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>