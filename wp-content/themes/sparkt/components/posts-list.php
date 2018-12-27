<?php foreach( $recent_posts as $recent ){
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
                        <div class="c-news-recent__author">' . get_the_author_meta( 'display_name', $recent['post_author'] ) . '</div>
                    </div>
                    <div class="c-news-recent__time-to-read">5 min read</div>
                </div>
            </div>
            ';
}
?>