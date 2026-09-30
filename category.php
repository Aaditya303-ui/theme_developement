<?php get_header(); ?>

<main class="category-container">
    <header class="category-header">
        <h3>I will show category.php</h3>
        <h1 class="category-title">
            Category: <?php single_cat_title(); ?>
        </h1>
        <p>Description: <?php echo category_description(); ?></p>
        <p>Category: <?php the_category(); ?></p>
        <!-- <p>Category RSS: <?php the_category_rss(); ?></p> -->
        <p>Category dropdown: <?php wp_dropdown_categories(); ?></p>
        <p>Category listing: <?php wp_list_categories(); ?></p>
        <p>Single tags: <?php single_tag_title(); ?></p>
        <p>Tag Description: <?php echo tag_description(); ?></p>
        <p><?php the_tags(); ?></p>
        <p>Term description: <?php term_description(); ?></p>
        <p>Single term title: <?php single_term_title(); ?></p>
        <p>Taxonomy list: <?php the_taxonomies(); ?></p>

        <p>Admin Url: <?php echo get_admin_url(); ?></p>
        <p>Home Url: <?php echo get_home_url(); ?></p>
        <p>Site Url: <?php echo get_site_url(); ?></p>
        <p>Page link: <?php echo get_page_link() ?></p>
        <p>Attachment link <?php echo get_attachment_link(); ?></p>
        <p>Edit post link: <?php edit_post_link(); ?></p>
        <p>Get Search Link: <?php echo get_search_link() ?></p>

        <p>Next image link: <?php next_image_link(); ?></p>
        <p>Next Nav link: <?php posts_nav_link(); ?></p>

        <!-- <p>List: <?php // get_the_term_list(); 
                        ?></p> <br> -->
        <?php if (category_description()) : ?>
            <div class="category-description">
                <?php echo category_description(); ?>
            </div>
        <?php endif; ?>
    </header>

    <section class="category-posts">
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p>No posts found in this category.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>