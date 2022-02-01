<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>
   <?php
    $args = array(
        'numberposts' => 2,
    );

    $latest_books = get_posts($args);

    ?>

<?php endif; ?>

<?php get_footer(); ?>