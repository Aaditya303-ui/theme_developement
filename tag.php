<?php get_header(); ?>

<main class="category-container">
    <header class="category-header">
        <h3>I will show by tag Name by slug(tag.php)</h3>
        <h1 class="category-title">
            Category: <?php single_cat_title(); ?>
        </h1>
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