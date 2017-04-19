<div class="about-intro">
  <div class="about-intro__left">
    <img src="<?php the_field('about_img'); ?>" alt="about_img_alt"/>
  </div>
  <div class="about-intro__right">
    <div class="about-intro__text"><?php the_field('intro'); ?></div>
    <div class="about-details">
      <div class="about-details__top">
        <?php the_field('details'); ?>
      </div>
      <div class="about-details__bottom">
        <h2>Education and Training</h2>
        <?php the_field('education'); ?>
      </div>
    </div>
  </div>
</div>