<?php
/**
 * The template for displaying archive pages
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
                        <?php
                        the_archive_title('<h1 class="page-title">', '</h1>');
                        the_archive_description('<div class="archive-description">', '</div>');
                        ?>
                    </header>
                    
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/content', get_post_type());
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
