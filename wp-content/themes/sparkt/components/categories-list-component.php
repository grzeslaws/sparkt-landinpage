<ul class="c-categories">
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
    echo '
    <li class="c-categories__item">
        <a class="c-categories__item-link" href="' . get_category_link($category->term_id) . '" rel="bookmark">' . $category->name . '</a>
        <span class="c-categories__item-count">' . $category->count . '</span>
    </li>';
}
?>
</ul>