<?php
/*
    Template Name: Company Layout
*/
?>

<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <article class="page">
            <h2><?php the_title(); ?></h2>
            <p class="phone">1-800-555-5555</p>
            <p><?php the_content(); ?></p>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <?php echo apautop('Sorry, no posts were found'); ?>
<?php endif; ?>
<?php get_footer() ?>
