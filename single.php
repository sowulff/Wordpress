<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>
        <?php the_post_thumbnail(); ?>
        <p> <?php the_date(); ?></p>


        <?php previous_post_link(); ?>
        <?php next_post_link(); ?>


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>