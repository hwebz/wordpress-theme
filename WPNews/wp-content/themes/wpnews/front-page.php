<?php get_header(); ?>
    <div class="ink-grid vertical-space">
        <div class="panel">
            <h2>Recent News</h2>
            <div id="car1" class="ink-carousel" data-space-after-last-slide="false" data-autoload="false">
                <ul class="stage column-group half-gutters">
                    <?php
                        $latest_blog_posts = new WP_Query(array(
                            'posts_per_page'   => get_option( 'posts_per_page' ),
                            'post_type'        => 'post'
                        ));
                    ?>
                    <?php if ($latest_blog_posts->have_posts()) : while ($latest_blog_posts->have_posts()) : $latest_blog_posts->the_post(); ?>
                        <li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('news-thumb', array(
                                    'class' => 'half-bottom-space'
                                )); ?>
                            <?php endif; ?>
                            <div class="description">
                                <h4 class="no-margin">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <h5 class="slab" style="margin-top: 15px; font-size: 12px;"><i class="fa fa-calendar"></i> <?php the_time('F j, Y g:i a'); ?></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>

            <nav id="p1" class="ink-navigation">
                <ul class="pagination black">
                </ul>
            </nav>

        </div>

        <div class="panel ink-grid">
            <div class="column-group">
                <div class="all-50">
                    <h2>Featured Story</h2>
                    <div id="car3" class="ink-carousel" data-autoload="false">
                        <ul class="stage column-group half-gutters unstyled">
                            <?php
                            $fearuted_query = new WP_Query(array(
                                'category_name' => 'featured'
                            ));
                            ?>

                            <?php if ($fearuted_query->have_posts()) : while ($fearuted_query->have_posts()) : $fearuted_query->the_post(); ?>
                                <li class="slide xlarge-100 large-100 medium-100 small-100 tiny-100">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('news-large', array(
                                            'class' => 'half-bottom-space'
                                        )); ?>
                                    <?php endif; ?>
                                    <h4 class="no-margin">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    <h5 class="slab" style="margin-top: 15px; font-size: 12px;"><i class="fa fa-calendar"></i> <?php the_time('F j, Y g:i a'); ?></h5>
                                    <p><?php the_excerpt(); ?></p>
                                </li>
                            <?php endwhile; endif; ?>
                        </ul>
                        <nav id="p3" class="ink-navigation" data-previous-label="" data-next-label="">
                            <ul class="pagination chevron">
                            </ul>
                        </nav>
                    </div>

                    <script>
                        Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
                            new InkCarousel('#car3', { pagination: '#p3', nextLabel: '', previousLabel: ''});
                        });
                    </script>
                </div>
                <div class="all-50">
                    <h2>Popular Posts</h2>
                    <ul class="unstyled">
                        <?php
                        $args = array(
                            'orderby'   => 'comment_count',
                            'posts_per_page' => 3
                        );

                        $popular_query = new WP_Query($args);
                        ?>

                        <?php if ($popular_query->have_posts()) : while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
                            <li class="column-group half-gutters">
                                <div class="all-40 small-50 tiny-50">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('news-popular'); ?>
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
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
                new InkCarousel('#car1', {pagination: '#p1'});
            });
        </script>

        <div class="panel vertical-space">
            <h2>News in Business</h2>
            <div id="car2" class="ink-carousel" data-autoload="false">
                <ul class="stage column-group half-gutters unstyled">
                    <?php
                    $business_query = new WP_Query(array(
                        'category_name' => 'business'
                    ));
                    ?>
                    <?php if ($business_query->have_posts()) : while ($business_query->have_posts()) : $business_query->the_post(); ?>
                        <li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('news-thumb', array(
                                    'class' => 'half-bottom-space'
                                )); ?>
                            <?php endif; ?>
                            <div class="description">
                                <h4 class="no-margin">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <h5 class="slab" style="margin-top: 15px; font-size: 12px;"><i class="fa fa-calendar"></i> <?php the_time('F j, Y g:i a'); ?></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>

                <nav id="p2" class="ink-navigation" data-next-label="" data-previous-label="">
                    <ul class="pagination dotted">
                    </ul>
                </nav>
            </div>

        </div>
        <script>
            Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
                new InkCarousel('#car2', {pagination: '#p2'})
            });
        </script>
    </div>
<?php get_footer(); ?>

