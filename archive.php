<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoverNews
 */

get_header(); ?>
    <div class="section-block-upper row">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main aft-archive-post">

                        <?php
                        if (have_posts()) : ?>

                            <header class="header-title-wrapper1">
                                <?php
                                the_archive_title('<h1 class="page-title">', '</h1>');
                                the_archive_description('<div class="archive-description">', '</div>');
                                ?>
                            </header><!-- .header-title-wrapper -->
                            <div class="row">
                            <div id="aft-inner-row">
                            <?php
                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_format());

                            endwhile; ?>
                            </div>
                            <div class="col col-ten">
                                <div class="covernews-pagination">
                                    <?php covernews_numeric_pagination(); ?>
                                </div>
                            </div>
                        <?php

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif; ?>
                    </div>
                    </main><!-- #main -->
                </div><!-- #primary -->

                <?php
                get_sidebar();
                ?>
        </div>
<?php
get_footer();
