<?php get_header(); ?>
<h1>Welcome to our website</h1>
<h4>I am archive</h4>
<h2><?php the_archive_title(); ?></h2>

<?php
while (have_posts()) {
    the_post();
?>
    <div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="content">
            <?php the_excerpt(); ?>
        </div>
    </div>
<?php
}
?>

<p>Footer</p>