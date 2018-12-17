<?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><h2 class="t"><?php the_title(); ?></h2></a>
    <?php if (has_post_thumbnail()) : ?>
        <div style="background-image: url('<?php the_post_thumbnail_url() ?>')">image</div>
    <?php endif; ?>
    <div><?php the_time("F jS, Y"); ?>, <?php the_author(); ?>, <?php the_category(", "); ?></div>
    <div><?php the_excerpt(); ?></div>
<?php endwhile; ?>

<div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
    <p><?php __("No post found!") ?></p>
<?php endif; ?>