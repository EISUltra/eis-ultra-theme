<?php
/**
 * EIS Ultra Theme Functions
 *
 * @package EIS_Ultra_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function eis_ultra_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 630, true);
    
    // Add custom image sizes
    add_image_size('eis-ultra-featured', 1200, 630, true);
    add_image_size('eis-ultra-thumbnail', 400, 300, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'eis-ultra-theme'),
        'footer' => esc_html__('Footer Menu', 'eis-ultra-theme'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'eis_ultra_theme_setup');

/**
 * Set the content width in pixels
 */
function eis_ultra_theme_content_width() {
    $GLOBALS['content_width'] = apply_filters('eis_ultra_theme_content_width', 1200);
}
add_action('after_setup_theme', 'eis_ultra_theme_content_width', 0);

/**
 * Register widget areas
 */
function eis_ultra_theme_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'eis-ultra-theme'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'eis-ultra-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Area', 'eis-ultra-theme'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'eis-ultra-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'eis_ultra_theme_widgets_init');

/**
 * Enqueue scripts and styles
 */
function eis_ultra_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('eis-ultra-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    // Enqueue navigation script
    wp_enqueue_script('eis-ultra-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), wp_get_theme()->get('Version'), true);
    
    // Enqueue comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'eis_ultra_theme_scripts');

/**
 * Add custom meta tags for SEO
 */
function eis_ultra_theme_add_meta_tags() {
    if (is_singular()) {
        global $post;
        ?>
        <meta name="description" content="<?php echo esc_attr(wp_trim_words(strip_tags($post->post_content), 20, '...')); ?>">
        <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
        <meta property="og:description" content="<?php echo esc_attr(wp_trim_words(strip_tags($post->post_content), 20, '...')); ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
        <?php if (has_post_thumbnail()) : ?>
        <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>">
        <?php endif; ?>
        <meta name="twitter:card" content="summary_large_image">
        <?php
    }
}
add_action('wp_head', 'eis_ultra_theme_add_meta_tags');

/**
 * Custom excerpt length
 */
function eis_ultra_theme_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'eis_ultra_theme_excerpt_length');

/**
 * Custom excerpt more
 */
function eis_ultra_theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'eis_ultra_theme_excerpt_more');

/**
 * Add structured data (Schema.org) for better SEO
 */
function eis_ultra_theme_structured_data() {
    if (is_singular('post')) {
        global $post;
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => get_the_title(),
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'author' => array(
                '@type' => 'Person',
                'name' => get_the_author()
            ),
        );
        
        if (has_post_thumbnail()) {
            $schema['image'] = get_the_post_thumbnail_url(null, 'full');
        }
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
    }
}
add_action('wp_footer', 'eis_ultra_theme_structured_data');

/**
 * Disable emoji scripts for performance
 */
function eis_ultra_theme_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'eis_ultra_theme_disable_emojis');

/**
 * Remove unnecessary WordPress meta tags
 */
function eis_ultra_theme_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
}
add_action('init', 'eis_ultra_theme_cleanup_head');

/**
 * Pagination
 */
function eis_ultra_theme_pagination() {
    if ($GLOBALS['wp_query']->max_num_pages > 1) {
        echo '<nav class="pagination" role="navigation">';
        echo paginate_links(array(
            'mid_size' => 2,
            'prev_text' => __('&laquo; Previous', 'eis-ultra-theme'),
            'next_text' => __('Next &raquo;', 'eis-ultra-theme'),
        ));
        echo '</nav>';
    }
}
