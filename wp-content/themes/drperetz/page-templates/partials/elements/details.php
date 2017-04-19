<div class="elements-details">
  <div class="element-of-care">
    <div class="element-of-care__top" style="background-image: url(<?php the_field('nourish_image'); ?>);">
      <div class="wrap">
        <h1>1.<br>nourish</h1>
      </div>
    </div>
    <div class="element-of-care__info wrap">
      
      <div class="element-of-care__quote">
        <span class="quote-text">"<?php the_field('nourish_quote'); ?>"</span>
        <span class="quote-source">- <?php the_field('nourish_quote_source'); ?></span>
      </div>
      <?php the_field('info_one'); ?>
    </div>
  </div>
  <div class="element-of-care">
    <div class="element-of-care__top" style="background-image: url(<?php the_field('energize_image'); ?>);">
      <div class="wrap">
        <h1>2.<br>energize</h1>
      </div>
    </div>
    <div class="element-of-care__info wrap">
      <div class="element-of-care__quote">
        <span class="quote-text">"<?php the_field('energize_quote'); ?>"</span>
        <span class="quote-source">- <?php the_field('energize_quote_source'); ?></span>
      </div>
      <?php the_field('info_two'); ?>
    </div>
  </div>
  <div class="element-of-care">
    <div class="element-of-care__top" style="background-image: url(<?php the_field('restore_image'); ?>);">
      <div class="wrap">
        <h1>3.<br>restore</h1>
      </div>
    </div>
    <div class="element-of-care__info wrap">
      <div class="element-of-care__quote">
        <span class="quote-text">"<?php the_field('restore_quote'); ?>"</span>
        <span class="quote-source">- <?php the_field('restore_quote_source'); ?></span>
      </div>
      <?php the_field('info_three'); ?>
    </div>
  </div>
  <div class="wrap element-cta">
    <h2>want to learn more?</h2>
    <a class="button button--blue" href="<?php echo esc_url( home_url( '/' ) ); ?>consultation">Schedule a Consultation</a>
  </div>


</div>