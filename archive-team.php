<?php get_header(); ?>
<main class="main-content">
    <!-- Hero -->
    <?php
        $hero_background = get_field('hero_background', 'option');
        $hero_title = get_field('hero_title', 'option');
    ?>
    <section class="hero" style="background-image: url(<?php echo $hero_background['url']; ?>)">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero-title text-center"><?php echo $hero_title; ?></h1>
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
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>