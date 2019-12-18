            <div class="sidebar">
                <?php if (is_active_sidebar('sidebar')) : ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div>

            <div class="clr"></div>
        </div>
		<footer>
			<div class="container">
				Copyright &copy; in <?php the_date('Y'); ?> - <?php bloginfo('name'); ?>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
