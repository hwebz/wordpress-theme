<?php get_header(); ?>
    <section class="title-section">
        <div class="row">
            <div class="large-12 columns">
                <p class="welcome-text">Welcome To</p>
                <h1>Blog</h1>
                <p class="sub-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequuntur cupiditate deserunt dolor
                </p>
            </div>
        </div>
    </section>

    <?php
        $no_featured_query = new WP_Query(array(
            'cat' =>  '-11'
        ));
    ?>

    <?php if ($no_featured_query->have_posts()) : while ($no_featured_query->have_posts()) : $no_featured_query->the_post(); ?>
        <article class="blog-post">
            <div class="row">
                <div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                        <img src="<?php bloginfo('template_directory'); ?>/images/pic2.jpg">
                    <?php endif; ?>
                </div>

                <div class="meta">
                    <ul>
                        <li><i class="fa fa-user"></i> <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <?php the_author(); ?>
                            </a></li>
                        <li><i class="fa fa-calendar"></i> <?php the_time('F j, Y g:i a'); ?></li>
                        <li><i class="fa fa-folder"></i>
                            <?php
                                $categories = get_the_category();
                                $separator = ", ";
                                $output = "";

                                if ($categories) {
                                    foreach($categories as $category) {
                                        $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                                    }
                                }

                                echo trim($output, $separator);
                            ?>
                        </li>
                    </ul>
                </div>

                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
