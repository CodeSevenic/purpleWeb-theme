<?php

/**
 * Theme functions
 * 
 * @package purpleWeb
 */

if(!defined('PURPLEWEB_DIR_PATH')) {
    define('PURPLEWEB_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('PURPLEWEB_DIR_URI')) {
    define('PURPLEWEB_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if(!defined('PURPLEWEB_BUILD_URI')) {
    define('PURPLEWEB_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
}
// JS URI Path
if(!defined('PURPLEWEB_BUILD_JS_URI')) {
    define('PURPLEWEB_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}
// JS Directory path
if(!defined('PURPLEWEB_BUILD_JS_DIR_PATH')) {
    define('PURPLEWEB_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}
// IMG URI Path
if(!defined('PURPLEWEB_BUILD_IMG_URI')) {
    define('PURPLEWEB_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}
// CSS URI Path
if(!defined('PURPLEWEB_BUILD_CSS_URI')) {
    define('PURPLEWEB_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}
// CSS Directory path
if(!defined('PURPLEWEB_BUILD_CSS_DIR_PATH')) {
    define('PURPLEWEB_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}
require_once PURPLEWEB_DIR_PATH . '/inc/helpers/autoloader.php';
require_once PURPLEWEB_DIR_PATH . '/inc/helpers/template-tags.php';

function purpleweb_get_theme_instance() {
    \PURPLEWEB_THEME\Inc\PURPLEWEB_THEME::get_instance();
}

purpleweb_get_theme_instance();


//Remove Gutenberg Block Library CSS from loading on the frontend
function purpleweb_remove_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}
//add_action('wp_enqueue_scripts', 'purpleweb_remove_block_styles', 100);

