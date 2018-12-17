<?php get_header(); ?>
<h2><?php the_title(); ?></h2>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
	<div><?php the_content(); ?></div>
<?php endwhile;
else : ?>
	<p><?php __("No page found!") ?></p>
<?php endif; ?>

<?php get_footer(); ?>