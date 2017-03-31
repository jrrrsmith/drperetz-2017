<div class="consult-body__expect">
  <h2>What to expect when consulting with Dr. Peretz</h2>
  <?php if( have_rows('points') ): ?>
    <?php while( have_rows('points') ): the_row(); ?>
      <div class="consult-body__point"><?php the_sub_field('point')?></div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>