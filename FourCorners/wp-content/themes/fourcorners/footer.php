        <div class="clearfix"></div>

        <footer class="main-footer">
            <div class="row">
                <?php if (is_active_sidebar('footer1')) : ?>
                    <div class="large-3 columns">
                        <?php dynamic_sidebar('footer1'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer2')) : ?>
                    <div class="large-3 columns">
                        <?php dynamic_sidebar('footer2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer3')) : ?>
                    <div class="large-3 columns">
                        <?php dynamic_sidebar('footer3'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer4')) : ?>
                    <div class="large-3 columns">
                        <?php dynamic_sidebar('footer4'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </footer>

        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
