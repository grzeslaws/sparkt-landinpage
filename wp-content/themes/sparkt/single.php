
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <h2><?php the_title(); ?></h2>
    <div><?php the_time("F jS, Y"); ?>, <?php the_author(); ?>, <?php the_category(', '); ?></div>
    <?php if (has_post_thumbnail()) : ?>
        <div style="background-image: url('<?php the_post_thumbnail_url() ?>')">image</div>
    <?php endif; ?>
    <div><?php the_excerpt(); ?></div>
<?php endwhile;
else : ?> 
    <p><?php __("No post found!") ?></p>
<?php endif; ?>

<?php get_footer(); ?>