
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <?php if (has_post_thumbnail()) : ?>
        <div class="c-image" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
            <div class="c-image__wrapper">
                <div class="c-image__category"><?php the_category(', '); ?></div>
                <h1 class="c-image__headline"><?php the_title(); ?></h1>
            </div>
        </div>
    <?php endif; ?>
    <div class="c-content">
        <div class="c-content__wrapper">
            <div class="c-content__wrapper-meta">
                <div class="c-content__wrapper-author">
                    <?php echo get_avatar( get_the_author_meta( 'user_email' ), 24 ) ?>
                    <?php the_author(); ?>
                </div>
                <div class="c-content__date"><?php the_time("d.m.Y"); ?></div>
            </div>
            <div class="c-content__text"><?php the_content(); ?></div>
            <div class="c-content__author-wrapper">
                <div class="c-content__avatar"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 50 ) ?></div>
                <div class="c-content__author-details">
                    <div class="c-content__author-name"><?php echo get_the_author_meta( 'first_name' ) ?> <?php echo get_the_author_meta( 'last_name' ) ?></div>
                    <div class="c-content__author-role"><?php echo get_the_author_meta( 'nickname' ) ?></div>
                    <div class="c-content__author-description"><?php echo get_the_author_meta( 'description' ) ?></div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;
else : ?> 
    <p><?php __("No post found!") ?></p>
<?php endif; ?>

<?php get_footer(); ?>