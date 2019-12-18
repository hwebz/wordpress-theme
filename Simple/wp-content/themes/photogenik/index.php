<?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <div class="w3-row">
            <?php while (have_posts()): the_post(); ?>
                <?php if (get_post_format() == 'gallery' && has_post_thumbnail()) : ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <?php echo wpautop('Sorry, there are no posts'); ?>
    <?php endif; ?>
<?php get_footer(); ?>
