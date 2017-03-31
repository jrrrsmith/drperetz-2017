<div class="consult-body__pricing">
  <div class="wrap">
    <h1>Pricing</h1>
    <div class="consult-body__pricing__item-list">
      <?php if( have_rows('pricing_list') ): ?>
        <?php while( have_rows('pricing_list') ): the_row(); ?>
          <div class="price-item">
            <span class="price-item__title"><?php the_sub_field('item_title')?></span>
            <span class="price-item__cost"><?php the_sub_field('item_cost')?></span>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <h2>Packages</h2>
    <div class="consult-body__pricing__packages-list">
      <?php if( have_rows('packages_list') ): ?>
        <?php while( have_rows('packages_list') ): the_row(); ?>
          <div class="package-item">
            <span class="package-item__title"><?php the_sub_field('package_title')?></span>
            <span class="package-item__cost"><?php the_sub_field('package_cost')?></span>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <span class="pricing-disclaimer"><?php the_field('disclaimer'); ?></span>
  </div>
</div>