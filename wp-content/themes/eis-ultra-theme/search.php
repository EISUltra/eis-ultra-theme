<?php
/**
 * The template for displaying search results
 *
 * @package EIS_Ultra_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="content-wrapper">
            <div class="content-area">
                <?php if (have_posts()) : ?>
                    
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                            printf(
                                esc_html__('Search Results for: %s', 'eis-ultra-theme'),
                                '<span>' . get_search_query() . '</span>'
                            );
                            ?>
                        </h1>
                    </header>
                    
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/content', 'search');
                    endwhile;
                    
                    eis_ultra_theme_pagination();
                    
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
