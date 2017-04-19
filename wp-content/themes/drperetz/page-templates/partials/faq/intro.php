<div class="faq-section" id="<?php the_field('faq_section_one'); ?>">
  <h1><?php the_field('intro_title_one'); ?></h1>
  <?php the_field('intro_text_one'); ?>
</div>
<div class="faq-section" id="<?php the_field('faq_section_two'); ?>">
  <h1><?php the_field('intro_title_two'); ?></h1>
  <?php the_field('intro_text_two'); ?>
  <?php if( have_rows('physical') ): ?>
    <?php while( have_rows('physical') ): the_row(); ?>
      <div class="physical-item">
        <p class="physical-item__left"><?php the_sub_field('item_left'); ?></p>
        <p class="physical-item__right"><?php the_sub_field('item_right'); ?></p>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>