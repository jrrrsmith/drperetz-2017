<?php

/**
 * Template Name: Scheduler Page
 */

get_header(); 

?>
<section class="scheduler-body">
  <div class="wrap">
    <h1>Schedule a consult in 3 easy steps:</h1>
    <?php while(have_posts()) : the_post(); ?>
      <div class="form-body">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>