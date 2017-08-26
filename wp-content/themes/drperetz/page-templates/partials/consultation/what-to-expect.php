<div class="consult-body__expect">
  <h2><?php the_field('points_title')?></h2>
  <?php if( have_rows('points') ): ?>
    <?php while( have_rows('points') ): the_row(); ?>
      <div class="consult-body__point"><?php the_sub_field('point')?></div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>