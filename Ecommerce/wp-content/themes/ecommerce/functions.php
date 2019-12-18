<?php
    require_once('widgets/class-wp-widget-categories.php');

    // Theme Support
    function setup_theme() {
        // Featured Image Support
        add_theme_support('post-thumbnails');

        // Custom Logo
        add_theme_support('custom-logo');

        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'setup_theme');

    // Widget Locations
    function init_widgets($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="callout">',
            "after_widget" => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => 'Showcase',
            'id' => 'showcase',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));
    }

    add_action('widgets_init', 'init_widgets');

    // Register Widgets
    function register_widgets() {
        register_widget('WP_Widget_Categories_Custsom');
    }

    add_action('widgets_init', 'register_widgets');
?>
