<?php get_header(); ?>
    <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            <div class="grid-x grid-padding-x products">
                <?php if (have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="large-4 medium-4 small-12 cell product end">
                            <h3><?php the_title(); ?></h3>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            <a class="button" href="<?php the_permalink(); ?>">Details</a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="large-4 medium-4 cell">
            <?php if (is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
