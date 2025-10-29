<?php
function eis_ultra_social_tags() {
  if (is_single() || is_page()) {
    global $post;
    $title = get_the_title($post);
    $url = get_permalink($post);
    $img = get_the_post_thumbnail_url($post) ?: get_template_directory_uri() . '/assets/images/og-default.jpg';
    echo "
    <meta property='og:title' content='$title' />
    <meta property='og:url' content='$url' />
    <meta property='og:image' content='$img' />
    <meta property='og:type' content='website' />
    <meta name='twitter:card' content='summary_large_image' />
    ";
  }
}
add_action('wp_head', 'eis_ultra_social_tags', 5);
?>
