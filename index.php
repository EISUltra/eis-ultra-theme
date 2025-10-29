<?php
/**
 * EIS Ultra Theme – Hybrid Preview / WordPress Compatible
 *
 * Works both:
 *  - In WordPress (loads real header/footer)
 *  - Standalone in Replit (renders fallback HTML)
 */

// Detect if WordPress is loaded
$is_wp = function_exists('get_header');
?>

<?php if ($is_wp): ?>
  <?php get_header(); ?>

  <main class="site-content">
    <section class="hero">
      <div class="container">
        <h1><?php bloginfo('name'); ?> | EIS Ultra Theme</h1>
        <p><?php bloginfo('description'); ?></p>
      </div>
    </section>

    <section class="features">
      <div class="container">
        <h2>Performance Goals</h2>
        <ul>
          <li>✅ LCP ≤ 2.0s</li>
          <li>✅ CLS ≤ 0.1</li>
          <li>✅ INP ≤ 100ms</li>
          <li>✅ Page weight ≤ 1MB</li>
        </ul>
      </div>
    </section>

    <section class="seo-demo">
      <div class="container">
        <h2>SEO Schema Test</h2>
        <p>This section includes Schema and Open Graph data.</p>

        <?php
        // Only include SEO files if they exist in the theme
        $seo_files = [
          'eis-ultra/seo/schema-org.php',
          'eis-ultra/seo/meta-tags.php',
          'eis-ultra/seo/og-twitter.php'
        ];
        foreach ($seo_files as $file) {
          $path = get_template_directory() . '/' . $file;
          if (file_exists($path)) include $path;
        }
        ?>
      </div>
    </section>

    <div class="theme-version">🩺 EIS Ultra Theme v<?php echo wp_get_theme()->get('Version'); ?></div>
  </main>

  <?php get_footer(); ?>

<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UrgentMed | EIS Ultra Theme Preview</title>
  <link rel="stylesheet" href="eis-ultra/assets/css/main.css" />
</head>
<body>

  <!-- 🔧 Preview Mode Banner -->
  <div style="background:#ffcc00;color:#000;padding:8px;text-align:center;font-size:13px;font-weight:600;">
    ⚠️ Preview Mode: Running outside WordPress environment
  </div>

  <header class="site-header">
    <div class="container">
      <h1 class="site-title">UrgentMed | EIS Ultra Theme Preview</h1>
      <p class="site-description">Ultra-fast modular WordPress theme optimized for SEO and Core Web Vitals.</p>
    </div>
  </header>

  <main class="site-content">
    <section class="hero">
      <div class="container">
        <h2>Performance Goals</h2>
        <ul>
          <li>✅ LCP ≤ 2.0s</li>
          <li>✅ CLS ≤ 0.1</li>
          <li>✅ INP ≤ 100ms</li>
          <li>✅ Page weight ≤ 1MB</li>
        </ul>
      </div>
    </section>

    <section class="seo-demo">
      <div class="container">
        <h2>SEO Schema Test (Preview Mode)</h2>
        <p>This section includes static example schema data for demo purposes.</p>

        <!-- Static Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "UrgentMed",
          "url": "https://www.urgentmed.us",
          "logo": "https://www.urgentmed.us/wp-content/uploads/logo.png"
        }
        </script>

        <meta property="og:title" content="UrgentMed | EIS Ultra Theme Preview" />
        <meta property="og:description" content="Ultra-fast modular WordPress theme optimized for SEO and Core Web Vitals." />
        <meta property="og:type" content="website" />
      </div>
    </section>

    <div class="theme-version">🩺 EIS Ultra Theme v1.0.0 (Preview Mode)</div>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> UrgentMed. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
<?php endif; ?>
