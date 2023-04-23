<?php
/**
 * Block Patterns
 *
 * @package purpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;

class Block_Patterns
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
        add_action('init', [$this, 'register_block_patterns']);
        add_action('init', [$this, 'register_block_pattern_categories']);
    }

    public function register_block_patterns()
    {
        if (function_exists('register_block_pattern')) {
            register_block_pattern(
                'purpleweb/cover',
                [
                    'title' => __('PurpleWeb Cover', 'purpleweb'),
                    'description' => __('PurpleWeb Cover with Image and Text'),
                    'categories' => ['cover'],
                    'content' => ''
                ]
            );
        }
    }

    public function register_block_pattern_categories()
    {
        $pattern_categories = [
            'cover' => __('Cover', 'purpleweb'),
            'carousel' => __('Carousel', 'purpleweb')
        ];

        if (!empty($pattern_categories) && is_array($pattern_categories)) {
            foreach ($pattern_categories as $pattern_category => $pattern_category_label) {
                register_block_pattern_category(
                    $pattern_category,
                    ['label' => $pattern_category_label]
                );
            }
        }
    }

}