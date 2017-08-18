<div class="faq-links">
  <h1>Psoriasis FAQs</h1>
  <div class="faq-links__left">
    <?php if( have_rows('links') ): ?>
      <?php while( have_rows('links') ): the_row(); ?>
      <div>
        <a href="#<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="faq-links__right">
    <img src="<?php the_field('faq_img') ?>" />
    <p class="faq-img-title"><?php the_field('faq_img_title') ?></p>
  </div>
</div>