<?php
function eis_ultra_enqueue_assets() {
  wp_enqueue_style('eis-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0', 'all');
  wp_enqueue_script('eis-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'eis_ultra_enqueue_assets');

// Theme supports
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('responsive-embeds');

// Register menus
function eis_ultra_register_menus() {
  register_nav_menus(['primary' => __('Primary Menu', 'eis-ultra')]);
}
add_action('init', 'eis_ultra_register_menus');

// Include SEO components
require get_template_directory() . '/seo/meta-tags.php';
require get_template_directory() . '/seo/schema-org.php';
require get_template_directory() . '/seo/og-twitter.php';
?>