<?php
/**
 * Bootstraps the Theme
 *
 * @package PurpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB\Inc\Traits\Singleton;

class PURPLEWEB_THEME {
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->set_hooks();
    }

    protected function set_hooks() {
        // action and filters
    }
}
