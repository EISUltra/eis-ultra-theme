<?php
function eis_ultra_meta_tags() {
  if (is_single() || is_page()) {
    global $post;
    $description = get_the_excerpt($post);
    echo '<meta name="description" content="' . esc_attr($description) . '">';
    echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">';
  }
}
add_action('wp_head', 'eis_ultra_meta_tags', 1);
?>
