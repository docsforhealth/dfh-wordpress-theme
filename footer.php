
        </div> <!-- #content -->
    </div> <!-- .root__contents -->

    <footer class="footer root__footer">
        <div class="footer__content">
            <div class="footer__logo-container">
                <?php get_template_part("src/php/partials/home-link") ?>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => DFH_MENU_FOOTER,
                'menu_class'     => 'footer__links',
                // better to be explicit about the container element
                // specifying `ul` supports both `wp_nav_menu` and fallback `wp_page_menu`
                // but we've turned the `fallback_cb` off for this menu
                'container'      => 'ul',
                'depth'          => 1,
                'fallback_cb'    => false,
            ));
            ?>
        </div>
        <div id="footer-content-container" class="footer__content">
            <?php
            // Need to sanitize output using `wp_kses_post` because content is from TinyMCE editor
            // see https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-2/#tinymceeditor
            // see https://developer.wordpress.org/reference/functions/get_theme_mod/
            echo wp_kses_post(get_theme_mod(DFH_THEME_MOD_FOOTER_CONTENT, DFH_THEME_MOD_FOOTER_CONTENT_DEFAULT));
            ?>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
