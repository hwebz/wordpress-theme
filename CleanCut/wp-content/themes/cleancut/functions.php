<?php
	require_once('class-wp-bootstrap-navwalker.php');

	// Theme Support
	function setup_theme() {
		// Post Thumbnails
		add_theme_support('post-thumbnails');

		// Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu')
		));

		// Post Format Support
		add_theme_support('post-formats', array('aside', 'gallery'));
	}

	add_action('after_setup_theme', 'setup_theme');

	// Widget Locations
	function init_widgets() {
		register_sidebar(array(
			'name'  => 'Sidebar',
			'id'    => 'sidebar',
			'before_widget' => '<div class="well animated fadeInRight sidebar-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name'  => 'Subnav',
			'id'    => 'subnav',
			'before_widget' => '<div class="subnav">',
			'after_widget' => '</div>',
			'before_title' => '<div class="hide">',
			'after_title' => '</div>',
		));

		register_sidebar(array(
			'name'  => 'Bottom',
			'id'    => 'bottom',
			'before_widget' => '<div class="section-a animated fadeInUp"><div class="container">',
			'after_widget' => '</div></div>',
			'before_title' => '<div class="hide">',
			'after_title' => '</div>',
		));
	}

	add_action('widgets_init', 'init_widgets');

	// Get Top Parent Page
	function get_top_parent() {
		global $post;
		if ($post->post_parent) {
			$ancestors = array_reverse(get_post_ancestors($post->ID));

			// 42 - Services
			// 44 - Our Team
			// 46 - FAQs
			// All those pages is the child of 40 - About Page
			// return $ancestors[0] = 40
			return $ancestors[0];
		}

		// 40 is About Page
		return $post->ID;
	}

	// Add Customizer Functionality
	require get_template_directory() . '/inc/customizer.php';
?>
