<div class="consult-body__cta">
  <div class="consult-body__cta__section">
    <div class="wrap">
      <h1><?php the_field('cta_top_title'); ?></h1>
      <?php the_field('cta_top'); ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>scheduler" class="button button--blue">Proceed to Scheduler</a>
    </div>
  </div>
  <div class="consult-body__cta__section">
    <div class="wrap">
      <h1><?php the_field('cta_bottom_title'); ?></h1>
      <?php the_field('cta_bottom'); ?>
      <a href="http://www.wholefamilymd.org" class="button button--green">Go to Whole Family MD</a>
    </div>
  </div>
</div>