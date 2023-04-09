<?php

/**
 * Main template  file.
 * @package purpleWeb
 */
get_header();
?>

    <div id="primary">
        <main id="main" class="site-main mt-5">
            <?php
            if (have_posts()) { ?>
                <div class="container">
                    <?php
                    if (is_home() && !is_front_page()) { ?>
                        <header class="mb-5">
                            <h1 class="page-title screen-reader-text">
                                <?php single_post_title(); ?>
                            </h1>
                        </header>
                    <?php }
                    // Start the loop
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content');

                    endwhile;
                    ?>
                </div>
            <?php } else {
                get_template_part('template-parts/content-none');
            }
            purpleweb_pagination();
            ?>
        </main>
    </div>
<?php
get_footer();