<?php get_header(); ?>
	<section class="container title-bar">
		<div class="row">
			<div class="col-md-4">
				<h1>
					<?php
						if (is_category()) {
							single_cat_title();
						} else if (is_author()) {
							the_post();
							echo 'Archives By Author: ' . get_the_author();
							rewind_posts();
						} else if (is_tag()) {
							single_tag_title();
						} else if (is_day()) {
							echo 'Archives By Day: ' . get_the_date();
						} else if (is_month()) {
							echo 'Archives By Month: ' . get_the_date('F Y');
						} else if (is_year()) {
							echo 'Archives By Year: ' . get_the_date('Y');
						} else {
							echo 'Archives';
						}
					?>
				</h1>
			</div>
            <div class="col-md-8">
                <?php if (is_active_sidebar('subnav')) : ?>
                    <?php dynamic_sidebar('subnav'); ?>
                <?php endif; ?>
            </div>
		</div>
	</section>

	<?php
	$i = 0;
	$section_class = 'section-a';
	$left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
	$right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
	$img_class = 'img-responsive img-circle animated fadeInLeft';
	?>

	<?php if(have_posts()) :  ?>
		<?php while(have_posts()) : the_post(); ?>
			<?php
			$i++;

			if ($i % 2 != 0) {
				$section_class = 'section-a';
				$left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
				$right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
				$img_class = 'img-responsive img-circle animated fadeInRight';
			} else {
				$section_class = 'section-b';
				$left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6 animated fadeInRight';
				$right_class = 'col-lg-5 col-sm-pull-6 col-sm-6';
				$img_class = 'img-responsive img-circle animated fadeInLeft';
			}
			?>
			<div class="<?php echo $section_class ?>">
				<div class="container">
					<div class="row">
						<div class="<?php echo $left_class; ?>">
							<hr class="section-heading-spacer">
							<div class="clearfix"></div>
							<h2 class="section heading">
								<?php the_title(); ?>
							</h2>
							<div class="meta">
								Posted on <?php the_time('F j, Y g:i a'); ?> by
								<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
									<?php the_author(); ?>
								</a>
								in
								<?php
								$categories = get_the_category();
								$separator = ", ";
								$output = "";

								if ($categories) {
									foreach($categories as $category) {
										$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
									}
								}

								echo trim($output, $separator);
								?>
							</div>
							<p class="lead"><?php the_excerpt(); ?></p>
							<a href=<?php the_permalink(); ?> class="btn btn-primary btn-lg">Read More</a>
						</div>
						<div class="<?php echo $right_class; ?>">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('full', array(
									'class'     => $img_class
								)); ?>
							<?php else : ?>
								<img src="https://increasify.com.au/wp-content/uploads/2016/08/default-image.png" class="<?php echo $img_class; ?>"/>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
