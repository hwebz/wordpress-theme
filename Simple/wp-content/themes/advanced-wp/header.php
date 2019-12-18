<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <h1>
            <a href="/"><?php bloginfo('name'); ?></a>
            <small><?php bloginfo('description'); ?></small>
        </h1>
        <div class="h_right">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="GET">
                <input type="text" name="s" placeholder="Search..." />
            </form>
        </div>
    </div>
</header>

<nav class="nav main-nav">
    <div class="container">
        <?php
        $args = array(
            'theme_location' => 'primary'
        );

        wp_nav_menu($args);
        ?>
    </div>
</nav>

<div class="container content">
    <div class="<?php echo is_front_page() ? '' : 'main'; ?> block">
