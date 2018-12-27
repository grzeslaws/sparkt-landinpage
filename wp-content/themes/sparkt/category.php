<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
?>

<?php get_header(); ?>
<div class="c-category">
    <div class="c-category__wrapper">
        <?php get_template_part("components/sidebar") ?>
        <div class="c-category__wrapper-posts">
            <h1 class="c-category__headline"><span>Category:</span> <?php echo single_cat_title() ?></h1>
            <div class="c-category__wrapper-posts-list">
                <?php
                    $args = array( 'category_name' => single_cat_title("", false));
                    $recent_posts = wp_get_recent_posts( $args );
                    if ($recent_posts) {
                        foreach( $recent_posts as $recent ){
                            echo '<div class="c-category__wrapper-post">
                                        <div class="c-category__wrapper-meta">
                                            <div class="c-category__category">' . get_the_category_list( ' ', '', $recent["ID"] ) . '</div>
                                            <div class="c-category__date">' . date_i18n('d.m.Y', strtotime($recent['post_date'])) . '</div>
                                        </div>
                                        <a class="c-category__link" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"]. '</a>
                                        <a href="' . get_permalink($recent["ID"]) . '"><div class="c-category__img" style="background-image: url(' . get_the_post_thumbnail_url($recent["ID"]) . ')"></div></a>
                                        <div class="c-category__excertpt">' . wp_trim_words( $recent["post_content"], $num_words = 30, $more = null ) . '</div>
                                        <div class="c-category__meta-bottom">
                                            <div class="c-category__wrapper-author">
                                                <div class="c-category__avatar">' . get_avatar( $recent["ID"], 24 ) . '</div>
                                                <div class="c-category__author">' . get_the_author_meta( 'display_name', $recent['post_author'] ) . '</div>
                                            </div>
                                            <div class="c-category__time-to-read">5 min read</div>
                                        </div>
                                    </div>
                                ';
                        }
                        wp_reset_query();
                    } else {
                        echo '<div class="c-category__excertpt">No result</div>';
                    }
                    
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>