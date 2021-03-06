<?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <section class="title-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container page">
                <div class="row ">
                    <div class="col-md-8 animated fadeIn">
                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array(
                                    'class' => 'img-responsive'
                                )); ?>
                            <?php else : ?>
                                <img src="https://increasify.com.au/wp-content/uploads/2016/08/default-image.png" class="img-responsive"/>
                            <?php endif; ?>
                        </div>
                        <div class="meta">
                            Posted on <?php the_time('F j, Y g:i a'); ?> by
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <?php the_author() ?>
                            </a>
                        </div>
                        <?php the_content(); ?>

                        <?php comments_template(); ?>
                    </div>
                    <div class="col-md-4">
                        <?php if (is_active_sidebar('sidebar')) : ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
