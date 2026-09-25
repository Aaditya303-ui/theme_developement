<h1>Welcome to the website</h1>

<?php

while (have_posts()) {
    the_post();
?>
    <h2><?php the_title(); ?></h2>
    <div class="content">
        <?php the_content(); ?>
    </div>
<?php
}
?>

<p>Footer</p>