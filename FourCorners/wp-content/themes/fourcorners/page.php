<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="title-section">
        <div class="row">
            <div class="large-12 columns">
                <p class="welcome-text">Welcome To</p>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="large-12 columns">
            <article class="single-page">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </div>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
