<?php
/**
 * Template part for displaying single posts
 *
 * @package EIS_Ultra_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        
        <div class="entry-meta">
            <time class="entry-date published" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date()); ?>
            </time>
            <?php if (get_the_modified_date() !== get_the_date()) : ?>
                <time class="updated" datetime="<?php echo esc_attr(get_the_modified_date('c')); ?>">
                    <?php printf(esc_html__('Updated: %s', 'eis-ultra-theme'), esc_html(get_the_modified_date())); ?>
                </time>
            <?php endif; ?>
            <span class="byline">
                <?php esc_html_e('by', 'eis-ultra-theme'); ?>
                <span class="author vcard">
                    <a class="url fn n" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <?php echo esc_html(get_the_author()); ?>
                    </a>
                </span>
            </span>
        </div>
    </header>

    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('eis-ultra-featured'); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'eis-ultra-theme'),
            'after'  => '</div>',
        ));
        ?>
    </div>

    <footer class="entry-footer">
        <?php
        $categories_list = get_the_category_list(esc_html__(', ', 'eis-ultra-theme'));
        if ($categories_list) {
            printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'eis-ultra-theme') . '</span>', $categories_list);
        }

        $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'eis-ultra-theme'));
        if ($tags_list) {
            printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'eis-ultra-theme') . '</span>', $tags_list);
        }
        ?>
    </footer>
</article>
