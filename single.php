<h1>Welcome to the website</h1>
<p>Single page</p>

<?php
// get_header(); 
// get_footer();
// echo get_search_form();
// wp_loginout();
// echo wp_login_url()."<br>";
// echo wp_logout_url();

//wp_login_form();
//echo wp_lostpassword_url();
wp_meta();

while (have_posts()) {
    the_post();
?>
    <h2><?php the_title(); ?></h2>
    <div class="content">
        <?php the_content(); ?>
        	<?php wp_link_pages(); ?>

    </div>
<?php
}
?>
Name: <?php bloginfo('name'); ?> <br>
Description: <?php bloginfo('description') ?> <br>
URL: <?php bloginfo('url'); ?> <br>
Version: <?php bloginfo('version'); ?> <br>
blog Id: <?php echo get_current_blog_id(); ?> <br>
Single page post: <?php echo single_post_title(); ?> <br>
category:  <?php single_cat_title('',false); ?> <br>
tag: <?php single_tag_title(); ?> <br>
Month: <?php single_month_title(); ?> <br>
Author: <?php the_author(); ?> <br>
Link: <?php echo get_the_author(); ?> <br>
author link: <?php echo get_the_author_link(); ?> <br>
author meta: <?php the_author_meta('description'); ?> <br>
author posts: <?php the_author_posts(); ?> <br>
author post link: <?php the_author_posts_link(); ?> <br>
users: <?php wp_dropdown_users(); ?> <br>
authors: <?php echo wp_list_authors(); ?> <br>
category: <?php echo single_cat_title(); ?>
<?php

// previous_post_link();
// next_post_link();
?>
<p>Footer</p>