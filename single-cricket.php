<h1>Welcome to the single cricket page</h1>
<?php

while (have_posts()) {
    the_post();
?>
    <h2><?php the_title(); ?></h2>
     <?php echo wp_link_pages(); ?>
    <div class="content">
        <?php the_content(); ?>
        	<?php wp_link_pages(); 
            ?>
    </div>
<?php
}
//posts_nav_link();
?>

<p>Footer</p>