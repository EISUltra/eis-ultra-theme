<?php
function eis_ultra_schema() {
  $schema = [
    "@context" => "https://schema.org",
    "@type" => "Organization",
    "name" => "UrgentMed",
    "url" => home_url(),
    "logo" => get_template_directory_uri() . '/assets/images/logo.png',
    "sameAs" => ["https://www.facebook.com/UrgentMed", "https://www.linkedin.com/company/urgentmed"]
  ];
  echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}
add_action('wp_footer', 'eis_ultra_schema', 5);
?>
