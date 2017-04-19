<?php if( have_rows('faq_section') ): ?>
  <?php while( have_rows('faq_section') ): the_row(); ?>
    <div class="faq-section" id="<?php the_sub_field('link_anchor'); ?>">
      <h1><?php the_sub_field('section_title'); ?></h1>
      <?php the_sub_field('section_body'); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>