<?php
/**
 * Bootstraps the Theme
 *
 * @package PurpleWeb
 */

namespace PURPLEWEB_THEME\Inc;



use PurpleWeb_Theme\Inc\Traits\Singleton;

class PURPLEWEB_THEME {

    use Singleton;

    protected function __construct() {
        wp_die('Hello World');
        // load class.
        $this->set_hooks();
    }

    protected function set_hooks() {
        // action and filters
    }
}
