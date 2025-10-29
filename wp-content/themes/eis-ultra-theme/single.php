<?php
/**
 * The template for displaying single posts
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
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'single');
                    
                    the_post_navigation(array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'eis-ultra-theme') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'eis-ultra-theme') . '</span> <span class="nav-title">%title</span>',
                    ));
                    
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    
                endwhile;
                ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
