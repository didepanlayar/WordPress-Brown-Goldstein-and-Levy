<?php get_header(); ?>
<main class="main-content">
    <!-- Hero -->
    <?php
        $team_background = get_field('team_background', 'option');
        $team_title = get_field('team_title', 'option');
    ?>
    <section class="hero" style="background-image: url(<?php echo $team_background['url']; ?>)">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $team_title; ?></h1>
            </div>
        </div>
    </section>
    <!-- Team Member -->
    <section class="team">
        <div class="container">
            <div class="team__content d-flex justify-center flex-wrap">
                <?php
                    $team_query = new WP_Query([
                        'post_type'     => 'team',
                        'posts_per_page' => -1,
                        'order'         => 'DESC',
                        'order'         => 'date'
                    ]);
                    if($team_query->have_posts()) {
                        while($team_query->have_posts()) {
                            $team_query->the_post();
                ?>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <h3 class="team-member-name text-center">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="team-member-name-sep"></div>
                                </h3>
                            </div>
                <?php
                        }
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <!-- Fellowship -->
    <?php
        $fellowship_title       = get_field('fellowship_title', 'option');
        $fellowship_description = get_field('fellowship_description', 'option');
        $fellowship_button      = get_field('fellowship_button', 'option');
        $fellowship_subtitle    = get_field('fellowship_subtitle', 'option');
        $fellowship_name        = get_field('fellowship_name', 'option');
        $fellowship_thumbnail   = get_field('fellowship_thumbnail', 'option');
    ?>
    <section class="fellowship">
        <div class="container">
            <div class="fellowship-content d-flex space-between">
                <div class="fellowship-content-title">
                    <h2 class="fellowship-content-title-text"><?php echo $fellowship_title; ?></h2>
                    <p class="fellowship-content-description"><?php echo $fellowship_description; ?></p>
                    <a href="<?php echo $fellowship_button['url']; ?>" class="fellowship-btn btn-text btn-has-icon d-i-flex item-center" target="<?php echo $fellowship_button['target']; ?>"><?php echo $fellowship_button['title']; ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Primary.svg' ?>" alt="Right Arrow Primary"></a>
                </div>
                <div class="fellowship-content-subtitle d-flex space-between item-center text-center">
                    <div class="fellowship-content-subtitle-text">
                        <h3 class="fellowship-content-subtitle-title d-flex dir-column item-center section-title-sep"><?php echo $fellowship_subtitle; ?><span></span></h3>
                        <p class="fellowship-content-subtitle-name"><?php echo $fellowship_name; ?></p>
                    </div>
                    <div class="fellowship-content-subtitle-image">
                        <img src="<?php echo $fellowship_thumbnail['url']; ?>" alt="<?php echo $fellowship_thumbnail['title']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>