<?php get_header(); ?>
    <section class="showcase animated fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="showcase-content">
                        <h1><?php echo get_theme_mod('showcase_heading', 'CleanCut Theme'); ?></h1>
                        <p class="lead"><?php echo get_theme_mod('showcase_text', 'Custom Wordpress Theme By You'); ?></p>
                        <?php if (get_theme_mod('facebook_url', 'https://facebook.com') != '') : ?>
                            <a href="<?php echo get_theme_mod('facebook_url', 'https://facebook.com'); ?>" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-info-sign"></i>Facebook</a>
                        <?php endif; ?>
	                    <?php if (get_theme_mod('twitter_url', 'https://twitter.com') != '') : ?>
                            <a href="<?php echo get_theme_mod('twitter_url', 'https://twitter.com'); ?>" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-ok-sign"></i>Twitter</a>
	                    <?php endif; ?>
	                    <?php if (get_theme_mod('linkedin_url', 'https://linkedin.com') != '') : ?>
                            <a href="<?php echo get_theme_mod('linkedin_url', 'https://linkedin.com'); ?>" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-question-sign"></i>LinkedIn</a>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $latest_blog_posts = new WP_Query(array(
            'posts_per_page'        => 3,
            'tax_query' => array(
                array(
	                'taxonomy'  => 'post_format',
	                'field'     => 'slug',
	                'terms'     => array(
		                'post-format-aside',
		                'post-format-gallery'
	                ),
	                'operator'  => 'NOT IN'
                )
            )
        ));

        $i = 0;
        $section_class = 'section-a';
        $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
        $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
        $img_class = 'img-responsive img-circle animated fadeInLeft';
    ?>

    <?php if($latest_blog_posts->have_posts()) :  ?>
        <?php while($latest_blog_posts->have_posts()) : $latest_blog_posts->the_post(); ?>
            <?php
                $i++;

                if ($i % 2 != 0) {
	                $section_class = 'section-a';
	                $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
	                $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
	                $img_class = 'img-responsive img-circle animated fadeInRight';
                } else {
                    $section_class = 'section-b';
	                $left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6 animated fadeInRight';
	                $right_class = 'col-lg-5 col-sm-pull-6 col-sm-6';
	                $img_class = 'img-responsive img-circle animated fadeInLeft';
                }
            ?>
            <div class="<?php echo $section_class ?>">
                <div class="container">
                    <div class="row">
                        <div class="<?php echo $left_class; ?>">
                            <hr class="section-heading-spacer">
                            <div class="clearfix"></div>
                            <h2 class="section heading">
                                <?php the_title(); ?>
                            </h2>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                        </div>
                        <div class="<?php echo $right_class; ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array(
                                    'class'     => $img_class
                                )); ?>
                            <?php else : ?>
                                <img src="https://increasify.com.au/wp-content/uploads/2016/08/default-image.png" class="<?php echo $img_class; ?>"/>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
