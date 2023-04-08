<?php
/**
 * Template for entry footer.
 *
 * to be used inside of WordPress The Loop.
 *
 * @package purpleWeb
 */

$the_post_id = get_the_ID();
$article_terms = wp_get_post_terms($the_post_id, ['category','post_tag']);

if (empty($article_terms) || ! is_array($article_terms)) {
    return;
}
?>

<div class="entry-footer mt-4">
    <?php

    ?>
</div>
