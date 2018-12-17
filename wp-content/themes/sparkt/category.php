<?php get_header(); ?>
<h2>Category: <?php single_cat_title(); ?></h2>
<?php get_template_part("template_parts/posts-list") ?>
<?php get_footer(); ?>