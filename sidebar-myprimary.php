<?php get_sidebar(); ?>
<aside>

    <h2>Extra Links</h2>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'extra-menu',
            'fallback_cb'    => false,
        )
    );
    ?>

</aside>