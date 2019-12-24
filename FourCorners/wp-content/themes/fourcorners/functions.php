<?php
    // Theme Support
    function theme_support() {
        // Add Featured Image Support
        add_theme_support('post-thumbnails');

        // Post Formats Support
//        add_theme_support('post-formats', array('gallery'));

        // Nav Menus
        register_nav_menus(array(
            'primary'   => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'theme_support');

    // Widgets Location
    function init_widgets() {
        register_sidebar(array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Footer 1',
            'id'            => 'footer1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Footer 2',
            'id'            => 'footer2',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Footer 3',
            'id'            => 'footer3',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Footer 4',
            'id'            => 'footer4',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
    }

    add_action('widgets_init', 'init_widgets');

    function custom_excerpt_more( $excerpt ) {
        return '';
    }

    add_filter( 'excerpt_more', 'custom_excerpt_more' );

    require get_template_directory() . '/inc/customizer.php';
?>
