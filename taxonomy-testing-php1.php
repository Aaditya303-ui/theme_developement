<?php get_header(); ?>

<main>

    <h1 style="color: red;">
        TAXONOMY-TESTING-PHP1.PHP IS WORKING
    </h1>

    <h2>
        Taxonomy:
        <?php echo esc_html( get_query_var( 'taxonomy' ) ); ?>
    </h2>

    <h2>
        Term:
        <?php single_term_title(); ?>
    </h2>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article>

                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <?php the_excerpt(); ?>

            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>No posts found.</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>