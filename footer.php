    <footer class="site-footer">
        <?php
            $cta_background = get_field('cta_background', 'option');
            $cta_title      = get_field('cta_title', 'option');
            $cta_button     = get_field('cta_button', 'option');
        ?>
        <section class="footer-cta" style="background-image: url(<?php echo $cta_background['url']; ?>)">
            <div class="container">
                <div class="footer-cta__content">
                    <h3 class="footer-cta__title text-center"><?php echo $cta_title; ?></h3>
                    <?php
                        if($cta_button) {
                    ?>
                            <div class="footer-cta__button-wrapper text-center">
                                <a href="<?php echo $cta_button['url']; ?>" class="btn btn-outline-light btn-has-icon d-i-flex item-center justify-center" target="<?php echo $cta_button['target']; ?>"><?php echo $cta_button['title']; ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/Right-Arrow-Light.svg' ?>" alt="Right Arrow Light"></a>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>