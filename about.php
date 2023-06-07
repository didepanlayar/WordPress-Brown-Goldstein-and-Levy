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
                <h2 class="section-title section-title-sep"><?php echo $our_mission_title; ?><span></span></h2>
                <p class="mission-description"><?php echo $our_mission_description; ?></p>
            </div>
        </div>
    </section>
    <!-- History -->
    <?php
        $our_history_title       = get_field('our_history_title');
        $our_history_description = get_field('our_history_description');
        $our_history_blockquote  = get_field('our_history_blockquote');
        $our_history_button      = get_field('our_history_button');
    ?>
    <section class="history">
        <div class="container">
            <div class="history__content">
                <h2 class="section-title section-title-sep"><?php echo $our_history_title; ?><span></span></h2>
                <div class="history__content-wrapper d-flex space-between">
                    <div class="history__content-description">
                        <p><?php echo $our_history_description; ?></p>
                    </div>
                    <div class="history__content-blockquote">
                        <blockquote><?php echo $our_history_blockquote; ?></blockquote>
                    </div>
                </div>
                <?php
                    if($our_history_button) {
                ?>
                        <a href="<?php echo $our_history_button['url']; ?>" class="btn btn-outline-grey btn-has-icon d-i-flex item-center justify-center" target="<?php echo $our_history_button['target']; ?>"><?php echo $our_history_button['title']; ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Primary.svg' ?>" alt="Right Arrow Primary"></a>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Content -->
    <?php
        $content_background  = get_field('content_background');
        $content_title       = get_field('content_title');
        $content_description = get_field('content_description');
    ?>
    <section class="about-content" style="background-image: url(<?php echo $content_background['url']; ?>">
        <div class="container">
            <div class="about-content__content">
                <h2 class="section-title section-title-sep-primary"><?php echo $content_title; ?><span></span></h2>
                <div class="about-content-description"><?php echo $content_description; ?></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>