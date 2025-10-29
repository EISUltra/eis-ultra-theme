    <footer id="colophon" class="site-footer">
        <div class="container">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
            
            <div class="site-info">
                <p>
                    &copy; <?php echo date('Y'); ?> 
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                    <?php esc_html_e('All rights reserved.', 'eis-ultra-theme'); ?>
                </p>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => 'nav',
                    'container_class' => 'footer-navigation',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ));
                ?>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
