<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>
<section class="home-body">
  <?php include 'partials/hero.php'  ?>
  <div class="wrap">
    <?php include 'partials/home/intro.php'  ?>
    <?php include 'partials/home/elements.php'  ?>
  </div>
  <?php include 'partials/home/video.php' ?>
</section>
<?php get_footer(); ?>