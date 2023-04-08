<?php
/**
 * Template for entry content
 *
 * To be used inside WordPress The Loop.
 *
 * @package purpleWeb
 */
?>
<div class="entry-content">
    <?php
    if (is_single()) {
        the_content(
            sprintf(
                wp_kses(
                    __('Continue reading %s <span class="meta-nav">$rarr;</span>', 'purpleweb'),
                    [
                        'span' => [
                            'class' => []
                        ]
                    ]
                ),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            )
        );

        wp_link_pages(
            [
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'purpleweb'),
                'after' => '</div>'
            ]
        );
    } else {
        purpleweb_the_excerpt(200);
        echo purpleweb_excerpt_more();
    }
    ?>
</div>
