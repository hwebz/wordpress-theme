        <?php if (is_active_sidebar('content-region-1')) : ?>
            <?php dynamic_sidebar('content-region-1'); ?>
        <?php endif; ?>

        <?php if (is_active_sidebar('content-region-2')) : ?>
            <?php dynamic_sidebar('content-region-2'); ?>
        <?php endif; ?>

        <footer class="footer content-region-3 pt30 pb40">
            <div class="container">
                <div class="col-lg-4">
	                <?php if (is_active_sidebar('footer-1')) : ?>
		                <?php dynamic_sidebar('footer-1'); ?>
	                <?php endif; ?>
                </div>
                <div class="col-lg-4">
	                <?php if (is_active_sidebar('footer-2')) : ?>
		                <?php dynamic_sidebar('footer-2'); ?>
	                <?php endif; ?>
                </div>
                <div class="col-lg-4">
	                <?php if (is_active_sidebar('footer-3')) : ?>
		                <?php dynamic_sidebar('footer-3'); ?>
	                <?php endif; ?>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    </body>
</html>
