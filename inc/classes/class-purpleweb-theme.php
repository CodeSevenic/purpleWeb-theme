<?php
/**
 * Bootstraps the Theme
 *
 * @package PurpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;

class PURPLEWEB_THEME {

    use Singleton;

    protected function __construct() {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);

    }

    public function register_styles() {
        // Register styles
        wp_register_style('style-css', get_stylesheet_uri(),[], filemtime
        (PURPLEWEB_DIR_PATH . '/style.css'), 'all');

        wp_register_style('bootstrap-css', PURPLEWEB_DIR_URI . '/assets/src/library/css/bootstrap.min.css',[],false, 'all');
        // Enqueue styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');

    }

    public function register_scripts() {
        // Register scripts
        wp_register_script('main-js', PURPLEWEB_DIR_URI . '/assets/main.js',
            [],
            filemtime
            (PURPLEWEB_DIR_PATH . '/assets/main.js'), true);

        wp_register_script('bootstrap-js', PURPLEWEB_DIR_URI . '/assets/src/library/js/bootstrap.bundle.min.js',
            ['jquery'],false, true);
        // Enqueue scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}
