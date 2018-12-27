<div class="c-sidebar">
    <form action="/" method="get">
    <div class="o-form__wrapper-search">
        <input class="o-form__input  o-form__input--search" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search..."/>
    </div>
    </form>
    <h2 class="c-sidebar__headline">Categories</h2>
    <ul class="c-sidebar__categories">
        <?php
            $args = array(
                'parent' => 0,
                "orderby" => "",
                "current_category" => true,
                "echo" => true,
                "show_count" => true,
                "show_option_all" => false,
                "style" => "li",
                "title_li" => "",
            );
            foreach (get_categories($args) as $category) {
                echo '<li class="c-sidebar__category-item">
                    <a class="c-sidebar__category-item-link" href="' . get_category_link($category->term_id) . '" rel="bookmark">' . $category->name . '</a>
                </li>';
            }
        ?>
    </ul>
</div>