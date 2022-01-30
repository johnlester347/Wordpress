<?php

// Load Stylesheets
function load_css() {


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');

// Load Javascriot
function load_Js() {
    wp_enqueue_script('jquery'); // Para ma-include yung jquery sa project
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    // true = eto yung mag sshow sya sa bottom pero pag false mag sshow sya sa heeader
    // false = eto yung versionssss
    // jquery = dependencies
    wp_enqueue_script('bootstrapjs');

}

add_action('wp_enqueue_scripts', 'load_Js');

// Theme Options
add_theme_support('menus');

// Theme Options(This is to activate upload image)
add_theme_support('post-thumbnails');

// Theme Options
add_theme_support('widgets');


// Menus
register_nav_menus(

    array(
        'top-menu' => 'Top menu location',
        'mobile-menu' => 'Mobile menu location',
        'footer-menu' => 'Footer menu location'
    )

    );


// Custom Image Sizes
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, false);


// Register Sidebars
function my_sidebars() {

    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
        );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
        );
}

add_action('widgets_init', 'my_sidebars');

?>