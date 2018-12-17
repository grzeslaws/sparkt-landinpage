<?php

function themeslug_enqueue_style()
{
    wp_enqueue_style("style-name", get_template_directory_uri() . "/public/css/main.css");
}

function themeslug_enqueue_script()
{
    wp_enqueue_script("main", get_template_directory_uri() . "/public/js/main.js", array(), "1.0.0", true);
}

function register_my_menu()
{
    register_nav_menu("main-menu", __("Main menu"));
}

function theme_setup()
{
    add_theme_support("post-thumbnails");
}

function set_excerpt_length()
{
    return 20;
}


add_action("wp_enqueue_scripts", "themeslug_enqueue_style");
add_action("wp_enqueue_scripts", "themeslug_enqueue_script");
add_action("init", "register_my_menu");
add_action("after_setup_theme", "theme_setup");


add_filter("excertpt_length", "set_excerpt_length");
