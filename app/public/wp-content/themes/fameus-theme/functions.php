<?php
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, "all");
    wp_enqueue_style("bootstrap");

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, "all");
    wp_enqueue_style("main");
}

function enqueue_theme_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . "style.css");
}

function load_js()
{
    wp_enqueue_script("jquery");
    wp_register_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", ["jquery"], false, true);
    wp_enqueue_script("bootstrap");
}



add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
add_action("wp_enqueue_scripts", "load_css");
add_action('wp_enqueue_scripts', 'load_js');