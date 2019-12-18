<?php get_header(); ?>
<div class="container">
    <div class="search">
        <?php get_search_form(); ?>
    </div>
    <div class="main">
        <?php comments_template(); ?>
    </div>

    <?php get_sidebar(); ?>
    <?php get_sidebar('secondary'); ?>
</div>
<?php get_footer(); ?>