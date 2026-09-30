<?php wp_footer(); ?>
<h2>Footer</h2>
<p><?php echo get_theme_mod('test_setting_fn','© 2026 My Website') ?></p>
<?php
wp_nav_menu(
    array(
        'theme_location' => 'footer-menu',
        'fallback_cb'    => false,
    )
);
?>
</body>

</html>