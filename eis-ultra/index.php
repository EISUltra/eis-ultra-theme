<?php get_header(); ?>
<section class="page-default">
  <div class="container">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    else :
      echo '<p>No content found.</p>';
    endif;
    ?>
  </div>
</section>
<?php get_footer(); ?>
