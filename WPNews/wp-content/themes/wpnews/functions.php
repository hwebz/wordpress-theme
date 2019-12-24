<?php
    // Theme Support
    function setup_theme() {
        // Post Thumbnails
        add_theme_support('post-thumbnails');
        add_image_size('news-thumb', 400, 200);
        add_image_size('news-large', 790, 380);
        add_image_size('news-popular', 300, 200);
        add_image_size('news-archive', 400, 200);

        // Nav Menus
        register_nav_menus(array(
            'primary'       => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'setup_theme');

    // Exerpt Length
    function excerpt_length() {
        return 20;
    }

    add_filter('excerpt_length', 'excerpt_length');

    // Widget Locations
    function init_widgets() {
        register_sidebar(array(
            'name'      => 'Sidebar',
            'id'        => 'sidebar',
            'before_widget'     => '<div class="side-widget">',
            'after_widget'     => '</div>',
            'before_title'     => '<h3>',
            'after_title'     => '</h3>',
        ));
    }
    add_action('widgets_init', 'init_widgets');
?>
