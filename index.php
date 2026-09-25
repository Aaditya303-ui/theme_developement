<?php get_header(); ?>

<h1>Welcome to the website</h1>
<h4>I am index page</h4>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="content">
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php
    }
}
?>

<?php get_footer(); ?>