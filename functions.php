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

require_once PURPLEWEB_DIR_PATH . '/inc/helpers/autoloader.php';

function purpleweb_get_theme_instance() {
    \PURPLEWEB_THEME\Inc\PURPLEWEB_THEME::get_instance();
}

purpleweb_get_theme_instance();


function purpleweb_enqueue_scripts() {

}

