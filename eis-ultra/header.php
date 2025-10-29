<?php
/**
 * EIS Ultra Theme – Unified Header
 * Uses shared version utility for WordPress + Replit environments.
 */

$is_wp = function_exists('language_attributes');

// Load shared version helper
require_once __DIR__ . '/includes/version-utils.php';
$theme_version = eis_ultra_get_version();
?>

<?php if ($is_wp): ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
    <p class="site-description"><?php bloginfo('description'); ?></p>

    <?php if (has_nav_menu('primary')): ?>
      <nav class="main-navigation">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'menu',
        ));
        ?>
      </nav>
    <?php endif; ?>

    <p class="theme-version" style="font-size:12px;opacity:0.6;margin-top:8px;">
      🩺 EIS Ultra Theme v<?php echo esc_html($theme_version); ?>
    </p>
  </div>
</header>

<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EIS Ultra Theme Preview</title>
  <link rel="stylesheet" href="eis-ultra/assets/css/main.css">
</head>
<body>

  <div style="background:#ffcc00;color:#000;padding:8px;text-align:center;font-size:13px;font-weight:600;">
    ⚠️ Preview Mode: Running outside WordPress environment
  </div>

  <header class="site-header">
    <div class="container">
      <h1 class="site-title">UrgentMed | EIS Ultra Theme</h1>
      <p class="site-description">Ultra-fast modular WordPress theme optimized for SEO and Core Web Vitals.</p>
      <p class="theme-version">🩺 EIS Ultra Theme v<?php echo htmlspecialchars($theme_version); ?></p>
    </div>
  </header>
<?php endif; ?>
