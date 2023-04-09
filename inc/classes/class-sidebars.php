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
        register_sidebar([
            'name' => __('Sidebar', 'purpleWeb'),
            'id' => 'sidebar-1',
            'description' => __('Main sidebar', 'purpleWeb'),
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ]);
        register_sidebar([
            'name' => __('Footer', 'purpleWeb'),
            'id' => 'sidebar-1',
            'description' => __('Footer sidebar', 'purpleWeb'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ]);
    }
}