<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/jumbotron-narrow.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>

        <style>
            .jumbotron {
                background: url('<?php echo get_theme_mod('banner_image', get_bloginfo('template_directory').'/images/pic1.jpg'); ?>') no-repeat center center;
            }
        </style>
    </head>
    <body>
        <div class="header clearfix">
            <div class="container">
                <?php
                wp_nav_menu(array(
                    'them_location' => 'primary',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav nav-pills pull-right',
                    'fallback' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
                ?>
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h3 class="text-muted"><strong><?php bloginfo('name') ?></strong></h3>
                <?php endif; ?>
            </div>
        </div>
