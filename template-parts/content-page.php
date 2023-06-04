<?php
/**
 * Content Page template
 *
 * @package purpleWeb
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
    <?php
    if (! is_home()) { ?>
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>
  <?php  }
    ?>

</article>
