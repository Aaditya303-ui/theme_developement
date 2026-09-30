<?php 
?>

<h1>
    <?php 
    // echo esc_html(
    //     get_theme_mod(
    //         'my_custom_heading',
    //         '© 2026 My Website'
    //     )
    // ); 
    ?>
</h1>
<h4>I am index page</h4>

<div class="content-wrapper">

    <main class="main-content">

        <h1>My Posts</h1>
        
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article>
                    <h2>
                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </h2>

                    <?php the_excerpt(); ?>
                </article>

            <?php endwhile; ?>
             <?php   echo wp_pagenavi(); ?>
            <?php
            // echo paginate_links();
            //  next_post_link();
            //  posts_nav_link(); 
            //    the_posts_pagination();?>
            
        <?php endif; ?>

    </main>

    <?php get_sidebar('myprimary'); ?>

</div>

<?php

?>

<?php get_footer(); ?>