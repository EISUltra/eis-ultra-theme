<section class="hero">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p><?php echo get_post_meta(get_the_ID(), 'subtitle', true); ?></p>
  </div>
</section>
