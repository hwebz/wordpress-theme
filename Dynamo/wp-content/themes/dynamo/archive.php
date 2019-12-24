<?php get_header(); ?>
    <section class="bar">
        <div class="wrap wider">
            <div class="grid">
                <h1>
                    <?php
                        if (is_category()) {
                            single_cat_title();
                        } else if (is_author()) {
                            the_post();
                            echo 'Archives By Author: '.get_the_author();
                            rewind_posts();
                        } else if (is_tag()) {
                            single_tag_title();
                        } else if (is_day()) {
                            echo 'Archives By Day: '.get_the_date();
                        } else if (is_month()) {
                            echo 'Archives By Month: '.get_the_date('F Y');
                        } else if (is_year()) {
                            echo 'Archives By Year: '.get_the_date('Y');
                        } else {
                            echo 'Archives';
                        }
                    ?>
                </h1>
            </div>
        </div>
    </section>

    <?php if (have_posts()) : ?>
        <section>
            <div class="wrap wider">
                <div class="grid">
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
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer(); ?>


