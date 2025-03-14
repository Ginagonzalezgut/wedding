<?php

function wedding_setup()
{
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "wedding_setup");

function wedding_menus()
{
    register_nav_menus(array(
        "menu-principal" => "Menú Principal"
    ));
}
add_action("init", "wedding_menus");

function wedding_styles()
{
    wp_enqueue_style("reset", "https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css", array(), "1.0.0");
    wp_enqueue_style("style", get_stylesheet_uri(), array("reset"), "1.0.0");
}
add_action("wp_enqueue_scripts", "wedding_styles");
