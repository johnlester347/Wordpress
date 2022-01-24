<?php

// Load Stylesheets
function load_css() {


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), false, 'all');
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
    // false = eto yung versions
    // jquery = dependencies
    wp_enqueue_script('bootstrapjs');

}

add_action('wp_enqueue_scripts', 'load_Js');







?>