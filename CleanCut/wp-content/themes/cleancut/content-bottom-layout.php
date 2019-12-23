<?php
	/*
	 * Template Name: Bottom Content Layout
	 */
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="title-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="col-md-6">
						<div class="sub-nav">
							<ul>
								<?php
								$args = array(
									'child_of'  => get_top_parent(),
									'title_li'  => ''
								);

								wp_list_pages($args);
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container page">
			<div class="row">
				<div class="col-md-8 animated fadeInLeft">
					<?php the_content(); ?>
				</div>
				<div class="col-md-4 animated fadeInRight">
					<?php if (is_active_sidebar('sidebar')) : ?>
						<?php dynamic_sidebar('sidebar'); ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>
	<?php if (is_active_sidebar('bottom')) : ?>
		<?php dynamic_sidebar('bottom'); ?>
	<?php endif; ?>
<?php get_footer(); ?>
