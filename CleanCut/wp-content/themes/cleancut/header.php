<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
		<?php if (get_theme_mod('animation', '1') != '') : ?>
            <link href="<?php bloginfo('template_directory'); ?>/css/anime.css" rel="stylesheet">
        <?php endif; ?>
		<link href="<?php bloginfo('template_directory'); ?>/css/jumbotron-narrow.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<?php wp_head(); ?>

        <style>
            .showcase {
                height: <?php echo get_theme_mod('showcase_height', 700); ?>px;
                background: transparent url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/images/pic1.jpg'); ?>) no-repeat center center;
                background-size: cover;
            }

            .banner {
                background: transparent url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url') . '/images/pic3.jpg'); ?>) no-repeat center center;
                background-size: cover;
            }
        </style>
	</head>
	<body>
		<nav class="navbar navbar-default sticky-nav">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php
						wp_nav_menu(array(
							'theme_location'        => 'primary',
							'depth'                 => 2,
							'container'             => false,
							'menu_class'            => 'nav navbar-nav navbar-right',
							'fallback_cb'           => 'WP_Bootstrap_Navwalker::fallback',
							'walker'                => new WP_Bootstrap_Navwalker()
						));
					?>
				</div>
			</div>
		</nav>
