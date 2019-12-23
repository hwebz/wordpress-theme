<?php
    /*
     * Plugin Name: Categories Widget
     * Description: Simple categories area
     * Version: 1.0
     * Author: hwebz
     */

    // Include class
    include( 'class.categories-widget.php' );

    // Register Widget
    function register_categories_widget() {
        register_widget('WP_Widget_Categories_Custom');
    }

    add_action('widgets_init', 'register_categories_widget');
?>
