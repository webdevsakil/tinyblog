<?php
if (site_url() == "http://localhost/alpha") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("version"));
}
function tiny_bootstrapping()
{
    load_theme_textdomain("tiny");
    add_theme_support("title-tag");
    add_theme_support("custom-header");
    register_nav_menu("primary", __("Primary Menu", "alpha"));
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "tiny_bootstrapping");

function tiny_enqueue_scripts()
{
    wp_enqueue_style("tiny", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", get_theme_file_uri("/assets/vendor/bootstrap/css/bootstrap.min.css"), null, VERSION);
    wp_enqueue_style("fontawesome", get_theme_file_uri("assets/vendor/fontawesome-free/css/all.min.css"), null, VERSION);
    wp_enqueue_style("Googlefonts", "//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic", null, VERSION);
    wp_enqueue_style("opan sans", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800", null, VERSION);
    wp_enqueue_style("tinyblog", get_theme_file_uri("assets/css/clean-blog.min.css"), null, VERSION);

    wp_enqueue_script("bootstrap", get_theme_file_uri("/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), array("jquery"), true);
    wp_enqueue_script("cleanblog", get_theme_file_uri("/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), array("jquery"), true);
    wp_enqueue_script("tiny", get_theme_file_uri("/assets/js/tiny.js"), null, true);
}
add_action("wp_enqueue_scripts", "tiny_enqueue_scripts");


function alpha_nav_menu_css_class($classes, $item)
{
    $classes[] = "list-inline-item";
    return $classes;
}
add_filter("nav_menu_css_class", "alpha_nav_menu_css_class", 10, 2);