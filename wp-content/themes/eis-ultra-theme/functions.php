<?php
/**
 * EIS Ultra Theme – Unified Functions (UrgentMed Edition)
 * Works in both WordPress and Replit standalone preview mode.
 *
 * @package EIS_Ultra_Theme
 */

// Allow direct execution safely in non-WP environments
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__);
}

// Detect if WordPress functions are available
$is_wp = function_exists('add_action');

/**
 * ------------------------------
 * 🔢 LOAD SHARED VERSION HELPER
 * ------------------------------
 */
require_once dirname(__FILE__) . '/../../includes/version-utils.php';
$theme_version = eis_ultra_get_version();

/**
 * ------------------------------
 * 🩺 THEME SETUP (WordPress only)
 * ------------------------------
 */
if ($is_wp && !function_exists('eis_ultra_theme_setup')) {

    function eis_ultra_theme_setup() {
        // RSS feeds & title tag
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');

        // Featured images
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 630, true);
        add_image_size('eis-ultra-featured', 1200, 630, true);
        add_image_size('eis-ultra-thumbnail', 400, 300, true);

        // Navigation menus
        register_nav_menus([
            'primary' => esc_html__('Primary Menu', 'eis-ultra-theme'),
            'footer'  => esc_html__('Footer Menu', 'eis-ultra-theme'),
        ]);

        // Valid HTML5 markup
        add_theme_support('html5', [
            'search-form', 'comment-form', 'comment-list',
            'gallery', 'caption', 'script', 'style',
        ]);

        // Custom logo & background
        add_theme_support('custom-logo', [
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ]);
        add_theme_support('custom-background', ['default-color' => 'ffffff']);

        // Widgets & editor styles
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');
        add_theme_support('editor-styles');
        add_editor_style('style.css');
    }
    add_action('after_setup_theme', 'eis_ultra_theme_setup');

    /**
     * ------------------------------
     * 📏 CONTENT WIDTH
     * ------------------------------
     */
    function eis_ultra_theme_content_width() {
        $GLOBALS['content_width'] = apply_filters('eis_ultra_theme_content_width', 1200);
    }
    add_action('after_setup_theme', 'eis_ultra_theme_content_width', 0);

    /**
     * ------------------------------
     * 🧱 WIDGET AREAS
     * ------------------------------
     */
    function eis_ultra_theme_widgets_init() {
        register_sidebar([
            'name'          => esc_html__('Sidebar', 'eis-ultra-theme'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Main sidebar widgets', 'eis-ultra-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]);

        register_sidebar([
            'name'          => esc_html__('Footer Area', 'eis-ultra-theme'),
            'id'            => 'footer-1',
            'description'   => esc_html__('Widgets for footer area', 'eis-ultra-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ]);
    }
    add_action('widgets_init', 'eis_ultra_theme_widgets_init');

    /**
     * ------------------------------
     * ⚙️ ENQUEUE SCRIPTS & STYLES
     * ------------------------------
     */
    function eis_ultra_theme_scripts() {
        $theme_version = eis_ultra_get_version();

        // --- CSS: Variables → Critical → Main ---
        $styles = [
            'assets/css/_variables.css' => 'eis-ultra-vars',
            'assets/css/critical.css'   => 'eis-ultra-critical-css',
            'assets/css/main.css'       => 'eis-ultra-main-css',
        ];

        foreach ($styles as $path => $handle) {
            $file = get_template_directory() . '/' . $path;
            if (file_exists($file)) {
                wp_enqueue_style(
                    $handle,
                    get_template_directory_uri() . '/' . $path,
                    [],
                    $theme_version
                );
            }
        }

        // --- JS Files ---
        $scripts = [
            'assets/js/main.js'     => 'eis-ultra-main-js',
            'assets/js/lazyload.js' => 'eis-ultra-lazyload',
            'js/navigation.js'      => 'eis-ultra-navigation',
        ];
        foreach ($scripts as $path => $handle) {
            $file = get_template_directory() . '/' . $path;
            if (file_exists($file)) {
                wp_enqueue_script(
                    $handle,
                    get_template_directory_uri() . '/' . $path,
                    [],
                    $theme_version,
                    true
                );
            }
        }

        // Comments reply
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
    add_action('wp_enqueue_scripts', 'eis_ultra_theme_scripts');

    /**
     * ------------------------------
     * 🔍 SEO META TAGS
     * ------------------------------
     */
    function eis_ultra_theme_add_meta_tags() {
        if (is_singular()) {
            global $post; ?>
            <meta name="description" content="<?php echo esc_attr(wp_trim_words(strip_tags($post->post_content), 20, '...')); ?>">
            <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
            <meta property="og:description" content="<?php echo esc_attr(wp_trim_words(strip_tags($post->post_content), 20, '...')); ?>">
            <meta property="og:type" content="article">
            <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>">
            <?php endif; ?>
            <meta name="twitter:card" content="summary_large_image">
        <?php }
    }
    add_action('wp_head', 'eis_ultra_theme_add_meta_tags');

    /**
     * ------------------------------
     * 🧠 STRUCTURED DATA (Schema.org)
     * ------------------------------
     */
    function eis_ultra_theme_structured_data() {
        if (is_singular('post')) {
            global $post;
            $schema = [
                '@context' => 'https://schema.org',
                '@type'    => 'Article',
                'headline' => get_the_title(),
                'datePublished' => get_the_date('c'),
                'dateModified'  => get_the_modified_date('c'),
                'author'   => [
                    '@type' => 'Person',
                    'name'  => get_the_author(),
                ],
            ];
            if (has_post_thumbnail()) {
                $schema['image'] = get_the_post_thumbnail_url(null, 'full');
            }
            echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
        }
    }
    add_action('wp_footer', 'eis_ultra_theme_structured_data');

    /**
     * ------------------------------
     * ✂️ CLEANUP + PERFORMANCE
     * ------------------------------
     */
    add_action('init', function () {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'rsd_link');
    });

    /**
     * ------------------------------
     * 📰 EXCERPT & PAGINATION
     * ------------------------------
     */
    add_filter('excerpt_length', function () { return 30; });
    add_filter('excerpt_more', function () { return '...'; });

    function eis_ultra_theme_pagination() {
        if ($GLOBALS['wp_query']->max_num_pages > 1) {
            echo '<nav class="pagination" role="navigation">';
            echo paginate_links([
                'mid_size'  => 2,
                'prev_text' => __('&laquo; Previous', 'eis-ultra-theme'),
                'next_text' => __('Next &raquo;', 'eis-ultra-theme'),
            ]);
            echo '</nav>';
        }
    }

    /**
     * ------------------------------
     * 🧾 FOOTER VERSION DISPLAY
     * ------------------------------
     */
    function eis_ultra_theme_display_version() {
        $theme_version = eis_ultra_get_version();
        echo '<div class="theme-version" style="text-align:center;font-size:12px;opacity:0.6;margin-top:20px;">';
        echo '🩺 EIS Ultra Theme v' . esc_html($theme_version);
        echo '</div>';
    }
    add_action('wp_footer', 'eis_ultra_theme_display_version', 100);
}

/**
 * ------------------------------
 * 💻 REPLIT PREVIEW MODE (Non-WP)
 * ------------------------------
 */
if (!$is_wp && php_sapi_name() !== 'cli') {
    // Auto-load CSS in order: variables → critical → main
    $css_dir = 'eis-ultra/assets/css';
    $styles = ['_variables.css', 'critical.css', 'main.css'];

    foreach ($styles as $file) {
        if (file_exists(__DIR__ . "/assets/css/{$file}")) {
            echo "<link rel='stylesheet' href='{$css_dir}/{$file}?v={$theme_version}'>";
        }
    }

    error_log("🧩 EIS Ultra Theme loaded in Replit Preview Mode – version {$theme_version}");
}
