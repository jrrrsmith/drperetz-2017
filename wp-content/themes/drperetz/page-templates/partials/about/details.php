<div class="about-details">
  <div class="about-details__top">
    <?php the_field('details'); ?>
  </div>
  <div class="about-details__bottom">
    <h2>Education and Training</h2>
      <ul>
        <?php if( have_rows('education') ): ?>
        <?php while( have_rows('education') ): the_row(); ?>
        <li class="education-item">
          <span class="italic"><?php the_sub_field('degree'); ?></span>: <?php the_sub_field('school'); ?></a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <div class="about-details__buttons">
        <a href="#" class="button button--green--solid">Schedule a Consultation</a>
        <a href="#" class="button button--green--solid">Sign Up for Newsletter</a>
        <a href="#" class="button button--green--solid">Sign Up to Watch Videos</a>
      </div>
  </div>
</div>