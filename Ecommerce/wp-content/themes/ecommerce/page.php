<?php get_header(); ?>
<div class="grid-x grid-padding-x">
    <div class="large-8 medium-8 cell">
        <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="large-4 medium-4 cell">
        <?php if (is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
