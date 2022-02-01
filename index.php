<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        <?php endif; ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>