<?php get_header(); ?>
<h1>Welcome to our website</h1>

<!-- <h2><?php post_type_archive_title(); ?></h2> -->

<h4>I am archive</h4>
<title><?php wp_title(); ?></title>

<h2>Archive Title: <?php the_archive_title(); ?></h2>
<h2><?php wp_title(); ?></h2>

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
<br>

<p>Footer</p>