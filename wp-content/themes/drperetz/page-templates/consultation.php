<?php

/**
 * Template Name: Consultation Page
 */

get_header(); 

?>
<section class="consult-body">
  <div class="wrap">
    <?php include 'partials/consultation/intro.php'  ?>
    <?php include 'partials/consultation/what-to-expect.php'  ?>
  </div>
  <?php include 'partials/consultation/pricing.php'  ?>
  <?php include 'partials/consultation/cta.php' ?>
</section>
<?php get_footer(); ?>