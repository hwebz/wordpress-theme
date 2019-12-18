            </div>

            <?php if (!is_front_page()) : ?>
                <div class="side">
                    <?php if (is_active_sidebar('sidebar')) : ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <footer class="main-footer">
            <div class="container">
                <div class="f_left">
                    <p>&copy; 2019 - Wordpress Dev Theme</p>
                </div>
                <div class="f_right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
