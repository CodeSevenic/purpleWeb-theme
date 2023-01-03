<?php

/**
 * Theme functions
 * 
 * @package purpleWeb
 */

if(!defined('PURPLEWEB_DIR_PATH')) {
    define('PURPLEWEB_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once PURPLEWEB_DIR_PATH . '/inc/helpers/autoloader.php';

function purpleweb_get_theme_instance() {
    \PURPLEWEB_THEME\Inc\PURPLEWEB_THEME::get_instance();
}

purpleweb_get_theme_instance();


function purpleweb_enqueue_scripts() {
    // Register styles
    wp_register_style('style-css', get_stylesheet_uri(),[], filemtime
    (get_template_directory() . '/style.css'), 'all');

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css',[],false, 'all');

    // Register scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js',
        [],
        filemtime
    (get_template_directory() . '/assets/main.js'), true);

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js',
        ['jquery'],false, true);

    // Enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // Enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

