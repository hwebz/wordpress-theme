<?php get_header(); ?>
<div class="ink-grid vertical-space">
    <div class="panel">
        <div class="column-group">
            <div class="all-100 post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

