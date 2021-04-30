    <footer class="page-footer elizama-footer">
        <div class="container">
            <div class="links">

                <nav class="navbar navbar-light navbar-expand-lg fixed-botton colort">
                	<!-- Brand and toggle get grouped for better mobile display -->
                		<?php
                		wp_nav_menu( array(
                			'theme_location'    => 'secondary',
                			'depth'             => 2,
                			'menu_class'        => 'nav navbar-nav',
                			'fallback_cb'       => 'Elizama_Walker_Nav_Menu::fallback',
                			'walker'            => new WP_Bootstrap_Navwalker(),
                		) );
                		?>

                </nav>

            </div>  
                <p class="text-center"><?php esc_html_e('Copyright ', 'elizama'). esc_html( date_i18n( 'Y' ) . esc_html(get_theme_mod( 'copyright_text')) ); ?></p>
                <div class="footer-credits-text text-center">
                    <?php
                    /* translators: %s: WordPress name with wordpress.org URL */
                    printf(esc_html__('Proudly powered by %s', 'elizama'), '<a href="' . esc_url(__('https://wordpress.org/', 'elizama')) . '">' . esc_html__('WordPress', 'elizama') . '</a>');
                    ?>
                    <span class="sep"> | </span>
                    <?php
                    /* translators: %1$s: Envo Storefront theme name (do not translate) with envothemes.com URL */
                    printf(esc_html__('Theme: %1$s', 'elizama'), '<a href="' . esc_url('https://marciozebedeu.com/') . '">' . esc_html_x('Elizama', 'Theme name, do not translate', 'elizama') . '</a>');
                    ?>
                </div> 

            </div>
        </footer>
    </section>
</main>
    <?php wp_footer();?>

</body>
</html>