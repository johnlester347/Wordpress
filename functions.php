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

// Theme Options (To Activate the menu from Appearance>Menus)
add_theme_support('menus');

// Theme Options(This is to activate upload image dun sa post, pwede kana mag upload featured image)
add_theme_support('post-thumbnails');

// Theme Options (To Activate the widget from Appearance>Widgets)
add_theme_support('widgets');


// Menus
register_nav_menus(

    array(
        'top-menu' => 'Top menu location',
        'mobile-menu' => 'Mobile menu location',
        'footer-menu' => 'Footer menu location'
    )

    );


// Custom Image Sizes(Eto yung mga sizes na pwede mo gamitin sa POST image, need mo lang ilagay sa argument/parameter sample the_post_thumbnail_url('blog-large') and yung false pala is para hindi ma crop yung image kasi pag naka true yan at nag upload ka ng 1000x1000 is ma ccrop sya into 800x400 gets? and download ka din pala ng Force Regenerate Thumbnail for loading image everytime na mag upload ka located at Tools>Force Regenerate
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