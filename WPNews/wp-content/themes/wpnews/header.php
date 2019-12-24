<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="stylesheet" type="text/css" href="https://ink.global.ssl.fastly.net/3.1.10/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="https://ink.global.ssl.fastly.net/3.1.10/css/font-awesome.min.css">
        <!--[if lt IE 9 ]>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load({
                test: Modernizr.flexbox,
                nope : '<?php bloginfo("template_directory"); ?>/css/ink-legacy.min.css'
            });
        </script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/holder.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ink-all.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/autoload.js"></script>
        <style>
            body {
                background: #ededed;
            }

            .panel {
                border-radius: 2px;
                -webkit-box-shadow: #dddddd 0 1px 1px 0;
                -moz-box-shadow: #dddddd 0 1px 1px 0;
                box-shadow: #dddddd 0 1px 1px 0;
                padding: 1em;
                border: 1px solid #BBB;
                background-color: #FFF;
            }
        </style>

        <?php wp_head(); ?>
    </head>
    <body>
        <header class="ink-grid">
            <div class="vertical-space">
                <div class="panel">
                    <h1>WPNews <small>Another Wordpress Website</small></h1>
                    <nav class="ink-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'     => 'primary',
                            'menu_class'         => 'menu horizontal black'
                        ));
                        ?>
                    </nav>
                </div>
            </div>
        </header>
        <form class="ink-form" method="GET" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="ink-grid">
                <div class="panel">
                    <div class="control-group append-button">
                        <div class="control all-100">
                            <input type="text" name="s" placeholder="Search..." />
                        </div>
                    </div>
                </div>
            </div>
        </form>
