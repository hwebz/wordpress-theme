<?php get_header(); ?>
    <?php
        $featured_query = new WP_Query(array(
            'category_name'     => 'featured'
        ));

        $i = 0;
    ?>

    <?php if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
        <?php $i++; ?>
        <article class="post">
            <div class="post-desc <?php echo $i % 2 ? 'float-right' : 'float-left'; ?>">
                <span><?php the_time('F j, Y g:i a'); ?></span>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <h3>
                    <a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out">Read More</a>
                </h3>
            </div>
            <div class="post-img">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg">
                <?php endif; ?>
            </div>
        </article>
    <?php endwhile; endif;  ?>
<?php get_footer(); ?>
