        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo get_theme_mod('banner_heading', 'Follow us on social media'); ?></h2>
                        <div class="banner-social-buttons">
                            <?php if (get_theme_mod('facebook_url', 'https://facebook.com') != '') : ?>
                                <a href="<?php echo get_theme_mod('facebook_url', 'https://facebook.com'); ?>" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-info-sign"></i>Facebook</a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('twitter_url', 'https://twitter.com') != '') : ?>
                                <a href="<?php echo get_theme_mod('twitter_url', 'https://twitter.com'); ?>" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-ok-sign"></i>Twitter</a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('linkedin_url', 'https://linkedin.com') != '') : ?>
                                <a href="<?php echo get_theme_mod('linkedin_url', 'https://linkedin.com'); ?>" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-question-sign"></i>LinkedIn</a>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php
						wp_nav_menu(array(
							'theme_location'        => 'footer',
							'depth'                 => 2,
							'container'             => false,
							'menu_class'            => 'list-inline',
							'fallback_cb'           => 'WP_Bootstrap_Navwalker::fallback',
							'walker'                => new WP_Bootstrap_Navwalker()
						));
						?>
						<p class="copyright text-muted small">Copyright &copy; ClceanCut Theme 2019. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	</body>
</html>
