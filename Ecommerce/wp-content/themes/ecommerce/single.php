<?php get_header(); ?>
<div class="grid-x grid-padding-x">
    <div class="large-8 medium-8 cell">
        <div class="grid-x grid-padding-x products">
            <?php if (have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="large-12 medium-12 small-12 cell product end">
                        <div class="grid-x grid-padding-x single-product">
                            <div class="large-5 medium-5 small-5 cell">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="large-7 medium-7 small-7">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                                <hr>
                                <?php if (the_tags()) : ?>
                                    <?php if (function_exists('the_tags')) : ?>
                                        <p class="tags">
                                            <strong>Tags:</strong>
                                            <?php the_tags('', ', ', ''); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php comments_template(); ?>
    </div>

    <div class="large-4 medium-4 cell">
        <?php if (is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
