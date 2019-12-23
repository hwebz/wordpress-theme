<?php
    require_once('class-wp-bootstrap-navwalker.php');

    // Theme Support
    function setup_theme() {
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));

        // Logo Support
        add_theme_support('custom-logo');

        // Featured Image
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'setup_theme');

    // Customizer File
    require get_template_directory() . '/inc/customizer.php';

    // Widget Locations
    function init_widgets($id) {
        register_sidebar(array(
            'name'              => 'Content Region 1',
            'id'                => 'content-region-1',
            'before_widget'     => '<div class="content-region-1 pt50 pb50"><div class="container"><div class="row "><div class="col-md-12">',
            'after_widget'      => '</div></div></div></div>',
            'before_title'      => '<h1>',
            'after_title'       => '</h1>'
        ));

        register_sidebar(array(
            'name'              => 'Content Region 2',
            'id'                => 'content-region-2',
            'before_widget'     => '<div class="content-region-2 pt40 pb40"><div class="container"><div class="row">',
            'after_widget'      => '</div></div></div>',
            'before_title'      => '<h1>',
            'after_title'       => '</h1>'
        ));

        register_sidebar(array(
            'name'              => 'Footer 1',
            'id'                => 'footer-1',
            'before_widget'     => '',
            'after_widget'      => '',
            'before_title'      => '<h4>',
            'after_title'       => '</h4>'
        ));

        register_sidebar(array(
            'name'              => 'Footer 2',
            'id'                => 'footer-2',
            'before_widget'     => '',
            'after_widget'      => '',
            'before_title'      => '<h4>',
            'after_title'       => '</h4>'
        ));

        register_sidebar(array(
            'name'              => 'Footer 3',
            'id'                => 'footer-3',
            'before_widget'     => '',
            'after_widget'      => '',
            'before_title'      => '<h4>',
            'after_title'       => '</h4>'
        ));

        register_sidebar(array(
            'name'              => 'Sidebar',
            'id'                => 'sidebar',
            'before_widget'     => '<div class="panel panel-default sidebar-widget">',
            'after_widget'      => '</div></div>',
            'before_title'      => '<div class="panel-heading"><h3 class="panel-title">',
            'after_title'       => '</h3></div><div class="panel-body">'
        ));

        register_sidebar(array(
            'name'              => 'Sidebar 2',
            'id'                => 'sidebar2',
            'before_widget'     => '<div class="sidebar">',
            'after_widget'      => '</div>',
            'before_title'      => '<h3 class="side-widget">',
            'after_title'       => '</h3>'
        ));
    }

    add_action('widgets_init', 'init_widgets');

    // Add 'list-group-item' to categories li
    function add_new_class_list_categories($list) {
        $list = str_replace('cat-item', 'cat-item list-group-item', $list);
        return $list;
    }

    add_filter('wp_list_categories', 'add_new_class_list_categories');
?>
