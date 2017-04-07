<?php get_header();?>
<div class="blog-page wrap">
  <h1 class="blog-page__title">Welcome to the Doctor's Blog</h1>
  <div class="blog-index has-sidebar">
    <?php while(have_posts()) : the_post(); ?>
      <div class="blog-index-item">
        <a href="<?php the_permalink(); ?>" class='blog-index-item__thumb'><?php the_post_thumbnail('thumbnail'); ?></a>
        <div class="blog-index-item__info">
          <span class="blog-index-item__date"><?php the_date('l, F jS, Y'); ?></span>
          <a href="<?php the_permalink(); ?>"><h3 class='blog-index-item__title'><?php the_title(); ?></h3></a>
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; ?>
    <?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer();?>