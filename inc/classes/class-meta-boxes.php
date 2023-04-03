<?php

/**
 * Register Meta Boxes
 *
 * @package purpleWeb
 */

namespace PURPLEWEB_THEME\Inc;

use PURPLEWEB_THEME\Inc\Traits\Singleton;

class Meta_Boxes
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
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
    }

    public function add_custom_meta_box()
    {
        $screens = ['post'];

        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title', // Unique ID
                __('Hide page title', 'purbleweb'), // Box title
                [$this, 'custom_meta_box_html'], // Content callback, must be type callback
                $screen, // Post Type
                'side' // Context
            );
        }
    }

    public function custom_meta_box_html($post){
        $value = get_post_meta($post->ID, '_hide_page_title', true);
        ?>
        <label for="purbleweb-field"><?php esc_html_e('Hide the page title', 'purpleweb'); ?></label>
        <select name="purbleweb_field" id="purbleweb-field" class="postbox">
            <option value=""><?php esc_html_e('Please select', 'purpleweb'); ?></option>
            <option value="yes" <?php selected($value, 'yes'); ?>>
                <?php esc_html_e('Yes', 'purpleweb'); ?>
            </option>
            <option value="no" <?php selected($value, 'no'); ?>>
                <?php esc_html_e('No', 'purpleweb'); ?>
            </option>
        </select>
<?php
    }
}