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
        // action and filters
        add_action('wp_enqueue_scripts', 'purpleweb_enqueue_scripts');

    }

    public function register_styles() {

    }

    public function register_scripts() {

    }
}
