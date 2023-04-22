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
                    'content' => '<!-- wp:cover {"url":"http://localhost:10011/wp-content/uploads/2023/03/What-the-amended-bee-preferential-procurement-regulations-really-mean-02.png","id":59,"dimRatio":50,"isDark":false} -->
                                    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-59" alt="" src="http://localhost:10011/wp-content/uploads/2023/03/What-the-amended-bee-preferential-procurement-regulations-really-mean-02.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"white","fontSize":"large"} -->
                                    <p class="has-text-align-center has-white-color has-text-color has-large-font-size"><strong>Purple Web Cover Block</strong></p>
                                    <!-- /wp:paragraph -->
                                    
                                    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
                                    <p class="has-text-align-center has-white-color has-text-color">We all have days when we feel like we’re not getting anything done. Whether it’s due to distractions, lack of motivation, or simply feeling overwhelmed, productivity can be a real challenge</p>
                                    <!-- /wp:paragraph -->
                                    
                                    <!-- wp:paragraph -->
                                    <p></p>
                                    <!-- /wp:paragraph -->
                                    
                                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"vivid-cyan-blue","style":{"border":{"radius":"3px"}},"fontSize":"medium"} -->
                                    <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-vivid-cyan-blue-background-color has-background has-text-align-center wp-element-button" style="border-radius:3px">Blog</a></div>
                                    <!-- /wp:button --></div>
                                    <!-- /wp:buttons --></div></div>
                                    <!-- /wp:cover -->'
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