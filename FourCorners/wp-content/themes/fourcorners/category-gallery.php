<?php get_header(); ?>
    <section class="title-section">
        <div class="row">
            <div class="large-12 columns">
                <p class="welcome-text">Welcome To</p>
                <h1>Gallery</h1>
            </div>
        </div>
    </section>

    <?php
        $gallery_query = new WP_Query(array(
           'category_name'  => 'gallery'
        ));
        if ($gallery_query->have_posts()) :
    ?>
        <section class="gallery">
            <div class="row">
                <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
                    <div class="large-4 small-12 columns">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array(
                                    'class' => 'hrv-grow'
                                )); ?>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer(); ?>
