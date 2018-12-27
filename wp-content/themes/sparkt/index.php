<?php get_header(); ?>
<div class="c-news-latest__wrapper c-news-latest__wrapper--half">
    <h1 class="c-news-latest__headline">New article</h1>
</div>
<?php
    $args = array( 'numberposts' => '1' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
                echo '<div class="c-news-latest">
                        <div class="c-news-latest__img" style="background-image: url(' . get_the_post_thumbnail_url($recent["ID"]) . ')"></div>
                        <div class="c-news-latest__wrapper c-news-latest__wrapper--half">
                            <div class="c-news-latest__wrapper-meta">
                                <div class="c-news-latest__category">' . get_the_category_list( ' ', '', $recent["ID"] ) . '</div>
                                <div class="c-news-latest__date">' . date_i18n('d.m.Y', strtotime($recent['post_date'])) . '</div>
                            </div>
                            <a class="c-news-latest__link" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"]. '</a>
                            <div class="c-news-latest__excertpt">' . wp_trim_words( $recent["post_content"], $num_words = 26, $more = null ) . '</div>
                            <div class="c-news-latest__meta-bottom">
                                <div class="c-news-latest__wrapper-author">
                                    <div class="c-news-latest__avatar">' . get_avatar( $recent["ID"], 24 ) . '</div>
                                    <div class="c-news-latest__author">
                                        ' . get_the_author_meta( 'first_name', $recent['post_author'] ) . '
                                        ' . get_the_author_meta( 'last_name', $recent['post_author'] ) . '
                                    </div>
                                </div>
                                <div class="c-news-latest__time-to-read">5 min read</div>
                            </div>
                            <a href="' . get_permalink($recent["ID"]) . '" class="o-btn o-btn--no-shadow"><div class="o-btn__mask">Continue reading</div></a>
                        </div>
                    </div> ';
	}
	wp_reset_query();
?>

<div class="c-news-recent__wrapper">
    <div class="c-sidebar">
        <?php get_template_part("components/sidebar") ?>
    </div>
    <div class="c-news-recent__wrapper-posts">
        <h1 class="c-news-recent__headline">Recent articles</h1>
        <div class="c-news-recent__wrapper-posts-list">
            <?php
                $args = array( 'numberposts' => '',
                                'offset' => 1,
                                's' => $s, );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                            echo '<div class="c-news-recent__wrapper-post">
                                        <div class="c-news-recent__wrapper-meta">
                                            <div class="c-news-recent__category">' . get_the_category_list( ' ', '', $recent["ID"] ) . '</div>
                                            <div class="c-news-recent__date">' . date_i18n('d.m.Y', strtotime($recent['post_date'])) . '</div>
                                        </div>
                                        <a class="c-news-recent__link" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"]. '</a>
                                        <a href="' . get_permalink($recent["ID"]) . '"><div class="c-news-recent__img" style="background-image: url(' . get_the_post_thumbnail_url($recent["ID"]) . ')"></div></a>
                                        <div class="c-news-recent__excertpt">' . wp_trim_words( $recent["post_content"], $num_words = 30, $more = null ) . '</div>
                                        <div class="c-news-recent__meta-bottom">
                                            <div class="c-news-recent__wrapper-author">
                                                <div class="c-news-recent__avatar">' . get_avatar( $recent["ID"], 24 ) . '</div>
                                                <div class="c-news-recent__author">
                                                    ' . get_the_author_meta( 'first_name', $recent['post_author'] ) . '
                                                    ' . get_the_author_meta( 'last_name', $recent['post_author'] ) . '
                                                </div>
                                            </div>
                                            <div class="c-news-recent__time-to-read">5 min read</div>
                                        </div>
                                    </div>
                                 ';
                }
                wp_reset_query();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>