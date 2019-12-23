<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="title-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php the_title(); ?></h1>
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
                            <article class="post">
	                            <?php if (has_post_thumbnail()) : ?>
		                            <?php the_post_thumbnail(); ?>
	                            <?php endif; ?>
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
                                <p><?php the_content(); ?></p>
                            </article>
                            <div class="clr"></div>

                            <?php comments_template(); ?>
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
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
