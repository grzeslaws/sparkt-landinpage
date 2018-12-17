<?php get_header(); ?>
<h2><?php the_title(); ?> Front page</h2>
<div class="c-carousel">
    <div class="c-carousel__navigation">
        <button class="prev">Prev</button>
        <button class="next">Next</button>
    </div>
    <div class="c-carousel__wrapper">
        <div class="c-carousel__img" style='background-image: url(<?php echo get_template_directory_uri() ?>/public/images/img1.jpg)'></div>
        <div class="c-carousel__img" style='background-image: url(<?php echo get_template_directory_uri() ?>/public/images/img2.jpg)'></div>
        <div class="c-carousel__img" style='background-image: url(<?php echo get_template_directory_uri() ?>/public/images/img3.jpg)'></div>
    </div>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <div><?php the_content(); ?></div>
<?php endwhile;
else : ?>
    <p><?php __("No page found!") ?></p>
<?php endif; ?>

<?php get_footer(); ?>