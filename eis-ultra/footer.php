<?php
/**
 * EIS Ultra Theme – Unified Footer
 * Uses shared version utility for WordPress + Replit environments.
 */

$is_wp = function_exists('wp_footer');

// Load shared version helper
require_once __DIR__ . '/includes/version-utils.php';
$theme_version = eis_ultra_get_version();
?>

<footer class="site-footer" style="text-align:center;padding:2rem 1rem;background:#0b172a;color:#fff;">
  <div class="container">
    <p style="margin:0;font-size:14px;opacity:0.8;">
      &copy; <?php echo date('Y'); ?> <strong>UrgentMed | EIS Ultra Theme</strong>
    </p>
    <p class="theme-version" style="font-size:12px;opacity:0.6;margin-top:8px;">
      🩺 EIS Ultra Theme v<?php echo htmlspecialchars($theme_version); ?>
    </p>
  </div>
</footer>

<?php if ($is_wp): ?>
  <?php wp_footer(); ?>
<?php endif; ?>

</body>
</html>
