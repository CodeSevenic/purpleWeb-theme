<?php
/**
 *  Front page template
 *
 * @package purbleWeb
 */

get_header();
?>

    <div id="primary">
        <main id="main" class="site-main mt-5">
            <div class="container">
                <?php
                if (have_posts()) { ?>
                    <div class="post-wrap">
                        <?php
                        while (have_posts()) : the_post();

                            get_template_part('template-parts/content');

                        endwhile;
                        ?>
                    </div>
                <?php } else {
                    get_template_part('template-parts/content-none');
                }
                ?>
            </div>
        </main>
    </div>
<?php
get_footer();
