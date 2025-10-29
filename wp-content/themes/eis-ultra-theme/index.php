<?php
/**
 * The main template file
 *
 * @package EIS_Ultra_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="content-wrapper">
            <div class="content-area">
                <?php
                if (have_posts()) :
                    
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
