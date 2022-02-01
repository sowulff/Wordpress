<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>
    <?php
    $args = [
        'numberposts' => 3,
        'order' => 'desc',
    ];

    $latest_posts = get_posts($args);

    foreach ($latest_posts as $post) :
        if (has_post_thumbnail()) : ?>
            <h4><?php echo the_title() ?></h4>
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_permalink(); ?>">Go to post</a>
    <?php endif;
    endforeach;
    ?>
    <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">Visit blog</a>
<?php endif; ?>

<?php get_footer(); ?>