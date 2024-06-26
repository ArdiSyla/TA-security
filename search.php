<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CoverNews
 */

get_header(); ?>
    <div class="section-block-upper row">
        
                <section id="primary" class="content-area">
                    <main id="main" class="site-main aft-archive-post">

                        <?php
                        if (have_posts()) : ?>

                            <header class="header-title-wrapper">
                                <h1 class="page-title"><?php
                                    /* translators: %s: search query. */
                                    printf(esc_html__('Search Results for: %s', 'covernews'), '<span>' . get_search_query() . '</span>');
                                    ?></h1>
                            </header><!-- .header-title-wrapper -->
                            <div class="row">
                            <div id="aft-inner-row">
                            <?php
                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part('template-parts/content', 'search');

                            endwhile; ?>
                            </div>
                            <div class="col col-ten">
                                <div class="covernews-pagination">
                                    <?php covernews_numeric_pagination(); ?>
                                </div>
                            </div>
                            </div>
                        <?php

                        else : ?>
                            <div class="row">
                            <?php

                            get_template_part('template-parts/content', 'none'); ?>
                            </div>
                            <?php

                        endif; ?>
                        
                    </main><!-- #main -->
                </section><!-- #primary -->

                <?php
                get_sidebar();
                ?>
            
    </div>
<?php
get_footer();
