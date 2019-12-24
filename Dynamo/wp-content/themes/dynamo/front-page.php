<?php get_header(); ?>
    <?php
    $slideshow_query = new WP_Query(array(
        'category_name'     => 'slideshow',
        'orderby'           => 'date',
        'order'             => 'ASC'
    ));

    $title_count = 0;
    $content_count = 0;

    if ($slideshow_query->have_posts()) :
        ?>
        <section class="showcase">
            <div class="my-slider">
                <ul>
                    <?php while ($slideshow_query->have_posts()) : $slideshow_query->the_post(); ?>
                        <li>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php bloginfo('template_directory'); ?>/images/pic1.jpg">
                            <?php endif; ?>
                            <div class="caption">
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile ?>
                </ul>
            </div>
        </section>

        <section>
            <div class="wrap wider">
                <div class="grid">
                    <div id="tabs">
                        <ul>
                            <?php while ($slideshow_query->have_posts()) : $slideshow_query->the_post(); ?>
                                <li><a href="#tabs-<?php echo ++$title_count ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php while ($slideshow_query->have_posts()) : $slideshow_query->the_post(); ?>
                            <div id="tabs-<?php echo ++$content_count; ?>">
                                <h3><?php the_title(); ?></h3>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $latest_query = new WP_Query(array(
        'cat' => '-3'
    ));

    if ($latest_query->have_posts()) :
        ?>
        <section>
            <div class="wrap wider">
                <div class="grid">
                    <div class="post-wrap">
                        <?php while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                            <article class="post">
                                <?php if (has_post_thumbnail()) : ?>
                                <div class="unit one-third">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="unit two-thirds">
                                    <?php else : ?>
                                    <div class="unit">
                                        <?php endif; ?>
                                        <h3><?php the_title(); ?></h3>
                                        <div class="content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                                    </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer(); ?>
