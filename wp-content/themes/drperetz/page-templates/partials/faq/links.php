<div class="faq-links">
  <h1>Psoriasis FAQs</h1>
  <?php if( have_rows('links') ): ?>
    <?php while( have_rows('links') ): the_row(); ?>
    <div>
      <a href="#<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>