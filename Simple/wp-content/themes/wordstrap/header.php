<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wordstrap</title>
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url('/blog'); ?>">Wordstrap</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 3,
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                    <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="form-group">
                            <label for="navbar-search" class="sr-only"><?php _e('Search', 'textdomain'); ?></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="s" id="navbar-search" />
                            </div>
                            <button type="submit" class="btn btn-default"><?php _e('Search', 'textdomain'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
