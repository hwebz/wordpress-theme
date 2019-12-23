<?php get_header(); ?>
    <div class="jumbotron">
        <div class="container">
            <h1><?php echo get_theme_mod('banner_heading', 'Banner Heading'); ?></h1>
            <p class="lead"><?php echo get_theme_mod('banner_text', 'Welcome to the Wordpress Business Theme. This theme uses the Twitter Bootstrap 3 framework and can be customized to your own liking'); ?></p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php echo get_theme_mod('banner_btn_text', 'Sign Up'); ?></a></p>
        </div>
    </div>

    <div class="container">
        <div class="row marketing">
            <div class="col-lg-4">
                <div class="block">
                    <i class="glyphicon glyphicon-<?php echo get_theme_mod('box1_icon', 'stats'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box1_heading', 'Box 1 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box1_text', 'Box 1 Text'); ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="block">
                    <i class="glyphicon glyphicon-<?php echo get_theme_mod('box2_icon', 'fire'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box2_heading', 'Box 2 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box2_text', 'Box 2 Text'); ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="block">
                    <i class="glyphicon glyphicon-<?php echo get_theme_mod('box3_icon', 'blackboard'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box3_heading', 'Box 3 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box3_text', 'Box 3 Text'); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
