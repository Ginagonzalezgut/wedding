<?php

function wedding_setup()
{
    add_theme_support("post-thumbnails");
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
    ));
}
add_action("after_setup_theme", "wedding_setup");

function wedding_menus()
{
    register_nav_menus(array(
        "menu-principal" => "Menú Principal",
        "menu-footer" => "Menú Footer",
    ));
}
add_action("init", "wedding_menus");

function wedding_styles()
{
    // CSS
    wp_enqueue_style('owl.carousel-css', esc_url(get_template_directory_uri()) . "/css/owl.carousel.min.css", array(), "2.3.4");
    wp_enqueue_style('owl.theme.default-css', esc_url(get_template_directory_uri()) . "/css/owl.theme.default.min.css", array("owl.carousel-css"), "2.3.4");
    wp_enqueue_style("reset", "https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css", array(), "1.0.0");
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.5');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), "6.5.1");
    wp_enqueue_style('style', get_stylesheet_uri(), array("reset", "font-awesome"), "1.0.0");

    // JavaScript
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), "2.11.5", true);
    wp_enqueue_script('owl.carousel-js', esc_url(get_template_directory_uri()) . '/js/owl.carousel.min.js', array('jquery'), "2.3.4", true);
}
add_action("wp_enqueue_scripts", "wedding_styles");
