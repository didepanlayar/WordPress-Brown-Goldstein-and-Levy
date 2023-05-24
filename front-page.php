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
</main>
<?php get_footer(); ?>