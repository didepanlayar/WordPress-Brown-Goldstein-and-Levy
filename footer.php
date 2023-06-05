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
        <section class="footer-top">
            <?php
                $footer_top_column_one = get_field('footer_top_column_one', 'option');
                $footer_top_one_title  = get_field('footer_top_one_title', 'option');
                $footer_top_one_number = get_field('footer_top_one_number', 'option');
                $footer_top_two_title  = get_field('footer_top_two_title', 'option');
                $footer_top_two_number = get_field('footer_top_two_number', 'option');
                $footer_email          = get_field('footer_email', 'option');
                $footer_fax            = get_field('footer_fax', 'option');
            ?>
            <div class="container">
                <div class="footer-top__content">
                    <div class="d-flex space-between">
                        <div class="footer-column">
                            <div class="d-flex space-between">
                                <div class="footer-column-inside">
                                    <div class="footer-content">
                                        <?php echo $footer_top_column_one; ?>
                                    </div>
                                </div>
                                <div class="footer-column-inside">
                                    <div class="footer-contact">
                                        <div class="d-flex item-center">
                                            <div class="footer-contact__image">
                                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Phone.svg' ?>" alt="Phone Image">
                                            </div>
                                            <div class="footer-contact__content">
                                                <p><span><?php echo $footer_top_one_title; ?></span> <a href="tel:<?php echo $footer_top_one_number; ?>"><?php echo $footer_top_one_number; ?></a></p>
                                                <?php
                                                    if($footer_top_two_title || $footer_top_two_number) {
                                                ?>
                                                        <p><span><?php echo $footer_top_two_title; ?></span> <a href="tel:<?php echo $footer_top_two_number; ?>"><?php echo $footer_top_two_number; ?></a></p>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-contact">
                                        <div class="d-flex item-center">
                                            <div class="footer-contact__image">
                                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Email.svg' ?>" alt="Email Image">
                                            </div>
                                            <div class="footer-contact__content">
                                                <p><a href="mailto:<?php echo $footer_email; ?>"><?php echo $footer_email; ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-contact">
                                        <div class="d-flex item-center">
                                            <div class="footer-contact__image">
                                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Fax.svg' ?>" alt="Fax Image">
                                            </div>
                                            <div class="footer-contact__content">
                                                <p><?php echo $footer_fax; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column">
                            <div class="d-flex space-between">
                                <div class="footer-column-inside">
                                    <?php
                                        wp_nav_menu([
                                            'theme_location'    => 'footer-col-one-menu',
                                            'container'         => false,
                                            'menu_class'        => 'footer-menu',
                                        ]);
                                    ?>
                                </div>
                                <div class="footer-column-inside">
                                    <?php
                                        wp_nav_menu([
                                            'theme_location'    => 'footer-col-two-menu',
                                            'container'         => false,
                                            'menu_class'        => 'footer-menu',
                                        ]);
                                    ?>
                                </div>
                                <div class="footer-column-inside">
                                    <?php
                                        wp_nav_menu([
                                            'theme_location'    => 'footer-col-three-menu',
                                            'container'         => false,
                                            'menu_class'        => 'footer-menu',
                                        ]);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-bottom">
            <?php
                $footer_credits = get_field('footer_credits', 'option');
                $facebook       = get_field('facebook', 'option');
                $instagram      = get_field('instagram', 'option');
                $twitter        = get_field('twitter', 'option');
            ?>
            <div class="container">
                <div class="footer-bottom__content">
                    <div class="d-flex space-between">
                        <div class="footer-column">
                            <p class="footer-credit">&copy; <?php echo date("Y"); ?> <?php echo $footer_credits; ?></p>
                        </div>
                        <div class="footer-column">
                            <div class="footer-nav">
                                <ul class="social-menu d-flex">
                                    <?php
                                        if($facebook) {
                                    ?>
                                            <li><a href="<?php echo $facebook; ?>" class="social-menu-item"><img src="<?php echo get_template_directory_uri() . '/assets/images/Facebook.svg' ?>" alt="Facebook Image"></a></li>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($instagram) {
                                    ?>
                                            <li><a href="<?php echo $instagram; ?>" class="social-menu-item"><img src="<?php echo get_template_directory_uri() . '/assets/images/Instagram.svg' ?>" alt="Instagram Image"></a></li>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($twitter) {
                                    ?>
                                            <li><a href="<?php echo $twitter; ?>" class="social-menu-item"><img src="<?php echo get_template_directory_uri() . '/assets/images/Twitter.svg' ?>" alt="Twitter Image"></a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>