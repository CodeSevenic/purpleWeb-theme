<?php

function get_the_post_custom_thumbnail($post_id, $size = 'featured-image', $additional_attributes = []) {
    $custom_thumbnail = '';

    if (null === $post_id) {
        $post_id = get_the_ID();
    }

    if (has_post_thumbnail($post_id)) {
        $default_attributes = [
                'loading' => 'lazy'
        ];
    }
}