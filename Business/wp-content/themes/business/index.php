<?php get_header(); ?>
    <div class="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo __('Blog'); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="marketing">
        <div class="container">
            <div class="row">
	            <?php if (is_active_sidebar('sidebar')) : ?>
                    <div class="col-md-8">
	            <?php else : ?>
                    <div class="col-md-12">
	            <?php endif; ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()): the_post(); ?>
                            <article class="post">
                                <div class="col-md-5">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="meta">
                                        <li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
                                        <li><?php the_time('F j, Y g:i a'); ?></li>
                                        <li>
                                            <?php
                                                $categories = get_the_category();
                                                $separator = ', ';
                                                $output = '';

                                                if ($categories) {
                                                    foreach($categories as $category) {
                                                        $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                                                    }
                                                }

                                                echo trim($output, $separator);
                                            ?>
                                        </li>
                                    </ul>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </article>
                            <div class="clr"></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if (is_active_sidebar('sidebar')) : ?>
                    <div class="col-md-4">
                        <?php dynamic_sidebar('sidebar'); ?>

                        <?php if (is_active_sidebar('sidebar2')) : ?>
                            <?php dynamic_sidebar('sidebar2'); ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
