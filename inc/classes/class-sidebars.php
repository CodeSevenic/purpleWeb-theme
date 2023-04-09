<?php

/**
 * Theme Sidebars
 *
 * @package purpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;

class Sidebars
{
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
        add_action('widgets_init', [$this, 'register_sidebars']);
    }

    public function register_sidebars(): void
    {
        register_sidebar(array(
            'name' => __('Primary Sidebar', 'purpleWeb'),
            'id' => 'sidebar-1'
        ))
    }
}