<?php
/**
 * Bootstraps the Theme
 *
 * @package PurpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;

class PURPLEWEB_THEME
{

    use Singleton;

    protected function __construct()
    {
        // Load class.
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        Sidebars::get_instance();
        Block_Patterns::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */
        
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme(): void
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true
        ]);
        add_theme_support('custom-background', [
            'default-color' => '#fff',
            'default-image' => '',
            'default-repeat' => 'no-repeat'
        ]);

        add_theme_support('post-thumbnails');

        add_image_size('featured-thumbnail', 350, 233, true);

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style'
            ]
        );

        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        /**
         * Loads the editor styles in the Gutenberg editor.
         */
        add_theme_support('editor-styles');
        /**
         * It allows you to link a custom stylesheet file to TinyMCE editor within the edit screen
         */
        add_editor_style('assets/build/css/editor.css');

        // Remove the core block patterns
        remove_theme_support('core-block-patterns');

        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }
    }

}
