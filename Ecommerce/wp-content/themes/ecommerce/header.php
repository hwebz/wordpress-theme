<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foundation for Sites</title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="grid-container">
            <header class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <?php if (function_exists('the_custom_logo')) : ?>
                        <?php the_custom_logo(); ?>
                    <?php endif; ?>
                </div>
                <div class="large-6 cell">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container_class' => 'menu simple main-nav'
                    )); ?>
                </div>
            </header>
            <?php if (is_active_sidebar('showcase') && is_home()) : ?>
                <div class="grid-x grid-padding-x showcase">
                    <div class="large-12 cell">
                        <div class="callout secondary">
                            <?php dynamic_sidebar('showcase'); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
