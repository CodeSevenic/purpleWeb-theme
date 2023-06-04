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

    /**
     * Function to register block patterns
     */
    public function register_block_patterns()
    {
        if (function_exists('register_block_pattern')) {
            /**
             * Cover pattern
             */
            $cover_content = $this->get_pattern_content('template-parts/patterns/cover');

            register_block_pattern(
                'purpleweb/cover',
                [
                    'title' => __('PurpleWeb Cover', 'purpleweb'),
                    'description' => __('PurpleWeb Cover with Image and Text'),
                    'categories' => ['cover'],
                    'content' => $cover_content,
                ]
            );
            /**
             * Two Columns pattern
             */
            $two_columns_content = $this->get_pattern_content('template-parts/patterns/two-columns');

            register_block_pattern(
                'purpleweb/two-columns',
                [
                    'title' => __('PurpleWeb Two Columns', 'purpleweb'),
                    'description' => __('PurpleWeb two columns with heading and text'),
                    'categories' => ['columns'],
                    'content' => $two_columns_content,
                ]
            );
        }
    }


    /**
     * Function to return pattern content
     *
     * @param string $template_path
     * @return bool|string
     */
    public function get_pattern_content(string $template_path): bool|string
    {
        ob_start();

        get_template_part($template_path);

        $pattern_content = ob_get_contents();

        ob_end_clean();

        return $pattern_content;
    }

    /**
     * Function to register block pattern categories
     */
    public function register_block_pattern_categories(): void
    {
        $pattern_categories = [
            'cover' => __('Cover', 'purpleweb'),
            'columns' => __('Columns', 'purpleweb'),
        ];

        if (!empty($pattern_categories)) {
            foreach ($pattern_categories as $pattern_category => $pattern_category_label) {
                register_block_pattern_category(
                    $pattern_category,
                    ['label' => $pattern_category_label]
                );
            }
        }
    }


}