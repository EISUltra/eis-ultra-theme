<?php
/**
 * Template part for displaying results in search pages
 *
 * @package EIS_Ultra_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
        
        <div class="entry-meta">
            <time class="entry-date published" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date()); ?>
            </time>
        </div>
    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>
