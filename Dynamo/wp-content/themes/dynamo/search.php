<?php get_header(); ?>
    <section class="bar">
        <div class="wrap wider">
            <div class="grid">
                <h1>
                    Search Results
                </h1>
            </div>
        </div>
    </section>

    <section>
        <div class="wrap wider">
            <div class="grid">
                <?php if (have_posts()) : ?>
                    <div class="post-wrap">
                        <?php while (have_posts()) : the_post(); ?>
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
                                        <div class="meta">
                                            Posted on <?php the_time('F j, Y g:i a'); ?> by
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <?php the_author(); ?>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                                    </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <p>No posts found with <strong>"<?php echo get_search_query(); ?>"</strong></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>


