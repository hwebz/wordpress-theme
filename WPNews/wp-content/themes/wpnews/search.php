<?php get_header(); ?>
<div class="ink-grid vertical-space">
    <div class="panel">
        <div class="column-group">
            <div class="all-70 post">
                <h2>Search Results</h2>

                <ul class="unstyled">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="column-group half-gutters">
                            <div class="all-40 small-50 tiny-50">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('news-archive', array(
                                        'class'     => 'archive-thumbnail'
                                    )); ?>
                                <?php endif; ?>
                            </div>
                            <div class="all-60 small-50 tiny-50">
                                <h4>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <p style="margin: -10px 0 0 0;font-size: 12px;"><i class="fa fa-comment"></i> <?php comments_number(false, '1 comment', '% comments'); ?></p>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </li>
                    <?php endwhile; else : ?>
                        <p>No posts found with keyword <strong>"<?php echo get_search_query(); ?>"</strong></p>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="all-30">
                <div class="sidebar">
                    <?php if (is_active_sidebar('sidebar')) : ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


