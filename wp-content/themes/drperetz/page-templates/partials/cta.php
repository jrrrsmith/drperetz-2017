<div class="cta">
  <div class="cta__inner wrap">
    <div class="cta__half">
      <div class="cta__title">Schedule a <span>FREE <em>15 minute discussion</em></span></span></div>
      <div class="cta__info">
        <?php the_field('consultation_text', 'option'); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>consultation" class="button button--white caps">GO!</a>
      </div>
    </div>
    <div class="cta__half">
      <div class="cta__title">Get a <span>FREE</span> copy of the Doctor's <span>e-Book</span></div>
      <div class="cta__info">
        <?php the_field('e_book_text', 'option'); ?>
        <a href="#" class="button button--white">subscribe to newsletter</a>
      </div>
    </div>
  </div>
</div>