<?php get_header();?>
<div class="blog-page wrap">
  <div class="blog-index">
    <?php while(have_posts()) : the_post(); ?>
      <div class="blog-index-item">
        <a href="<?php the_permalink(); ?>" class='blog-index-item__thumb'><?php the_post_thumbnail('thumbnail'); ?></a>
        <div class="blog-index-item__info">
          <span class="blog-index-item__date"><?php the_date('l, F jS, Y'); ?></span>
          <a href="<?php the_permalink(); ?>"><h3 class='blog-index-item__title'><?php the_title(); ?></h3></a>
          <p class="blog-index-item__excerpt"><?php the_excerpt(); ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer();?>