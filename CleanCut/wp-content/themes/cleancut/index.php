<?php get_header(); ?>
    <section class="container title-bar">
        <div class="row">
            <div class="col-md-4">
                <h1>Blog</h1>
            </div>
            <div class="col-md-8">
	            <?php if (is_active_sidebar('subnav')) : ?>
                    <?php dynamic_sidebar('subnav'); ?>
	            <?php endif; ?>
            </div>
        </div>
    </section>

    <?php
        $i = 0;
        $section_class = 'section-a';
        $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
        $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
        $img_class = 'img-responsive img-circle animated fadeInLeft';
    ?>

    <?php if(have_posts()) :  ?>
        <?php while(have_posts()) : the_post(); ?>
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
            <?php if (has_post_format($format, $post_id) && get_post_format($post_id) == 'aside') : ?>
                <!-- Aside Format -->
                <?php require get_template_directory() . '/aside.php'; ?>
            <?php elseif (has_post_format($formatm, $post_id) && get_post_format($post_id) == 'gallery') : ?>
                <!-- Gallery Format -->
                <?php require get_template_directory() . '/gallery.php' ?>
            <?php else : ?>
                <!-- Standard Format -->
                <?php require get_template_directory() . '/content.php'; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
