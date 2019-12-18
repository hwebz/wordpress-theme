<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <h1 class="page-header">
        <?php
            if (is_category()) {
                single_cat_title();
            } else if (is_author()) {
                the_post();
                echo 'Archives By Author: '.get_the_author();
            } else if (is_tag()) {
                single_tag_title();
            } else if (is_day()) {
                echo 'Archives By Day: '.get_the_date();
            } elseif (is_month()) {
                echo 'Archives By Month: '.get_the_date('F Y');
            } else if (is_year()) {
                echo 'Archives By Year: '.get_the_date('Y');
            } else {
                echo 'Archives';
            }
        ?>
    </h1>
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php echo apautop('Sorry, no posts were found'); ?>
<?php endif; ?>
<?php get_footer() ?>
