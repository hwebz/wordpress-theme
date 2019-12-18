<?php
    require_once('widgets/class-wp-widget-categories.php');

    // Theme Support
    function theme_support() {
        // Featured Image Support
        add_theme_support('post-thumbnails');

        set_post_thumbnail_size(1920, 1080);

        // Post Format Support
        add_theme_support('post-formats', array('gallery'));
    }

    add_action('after_setup_theme', 'theme_support');

    // Widget Locations
    function init_widgets($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar'
        ));
    }

    add_action('widgets_init', 'init_widgets');

    // Register Widgets
    function custom_register_widgets() {
        register_widget('WP_Widget_Categories_Custom');
    }

    add_action('widgets_init', 'custom_register_widgets');

    function gallery_only($query) {
        $query->set('post_format', 'post-format-gallery');
        $query->set('meta_query', array(
            array(
                'key' => '_thumbnail_id'
            )
        ));
    }

    add_action('pre_get_posts', 'gallery_only');
?>
