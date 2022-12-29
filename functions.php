<?php

/**
 * Theme functions
 * 
 * @package purpleWeb
 */

function purpleweb_enqueue_scripts() {
    // Register styles
    wp_register_style('style-css', get_stylesheet_uri(),[], filemtime
    (get_template_directory() . '/style.css'), 'all');

    wp_register_style('bootstrap-css', get_stylesheet_uri() . './assets/library/css/bootstrap.min.css',[],false, 'all');

    // Register scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js',
        [],
        filemtime
    (get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . './assets/library/js/bootstrap.bundle.js',
        [],
        filemtime
    (get_template_directory() . '/assets/main.js'), true);

    // Enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // Enqueue scripts
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'purpleweb_enqueue_scripts');
