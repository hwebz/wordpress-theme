<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.css">
        <?php if (get_theme_mod('preset', 'dark') == 'dark') : ?>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/themes/ui-darkness/jquery-ui.min.css">
        <?php endif; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/gridism.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider-dots.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>

        <style>
            <?php if (get_theme_mod('preset', 'dark') == 'dark') : ?>
                body {
                    background: #232323;
                    color: #fff;
                }
                .main-nav {
                    background: #333;
                    color: #fff;
                }
                .caption {
                    background: #333;
                    color: #fff;
                }
                .post-wrap {
                    border: 1px solid #666;
                }

                .post {
                    border-bottom: 1px solid #333;
                }

                .footer {
                    background: #333;
                    color: #fff;
                }
            <?php else : ?>
                body {
                    background: #fff;
                    color: #333;
                }

                .main-nav {
                    background: #fff;
                    color: #333;
                    border-top: 1px solid #ccc;
                }

                .main-nav li a {
                    color: #333;
                }

                .caption {
                    background: #fff;
                    color: #333;
                    border: 1px solid #ccc;
                }
                .post-wrap {
                    border: 1px solid #ccc;
                }
                .post {
                    border-bottom: 1px solid #ccc;
                }

                .footer {
                    background: #fff;
                    color: #333;
                }
            <?php endif; ?>

            <?php
                $theme_color = get_theme_mod('color', '#f9992b');
            ?>

            a {
                color: <?php echo $theme_color ?>;
            }

            .main-nav li a:hover {
                background: <?php echo $theme_color ?>;
            }

            .meta {
                border-bottom: 4px double <?php echo $theme_color ?>;
            }

            .button:hover {
                background: <?php echo $theme_color ?>;
            }

            .bar {
                background: <?php echo $theme_color ?>;
            }

            .current-page-item a {
                background-color: <?php echo $theme_color ?>;
            }
        </style>
    </head>
    <body <?php body_class(); ?>>
        <header>
                <div class="wrap wider">
                    <div class="grid">
                        <div class="unit half">
                            <h1 class="logo">Dynamo</h1>
                            <p class="tagline">Another Wordpress Theme</p>
                        </div>
                        <div class="unit half">
                            <div class="header_r">
                                <form class="search" action="<?php echo esc_url(home_url('/')); ?>" method="GET">
                                    <input type="text" name="s" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <nav class="main-nav">
                <div class="wrap wider">
                    <div class="grid">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary'
                        )); ?>
                    </div>
                </div>
            </nav>
