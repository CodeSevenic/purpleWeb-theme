<?php
/**
 * Register menus
 *
 * @package purpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;

class Menus {
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus(): void {
        register_nav_menus([
            'purpleweb-header-menu' => esc_html__('Header Menu', 'purpleweb'),
            'purpleweb-footer-menu' => esc_html__('Footer Menu', 'purpleweb')
        ]);
    }
}