<?php get_header();?>
<section class="wrap blog-single">
<?php while(have_posts()) : the_post(); ?>

  <div class="blog-single__post has-sidebar">
    <span class="blog-single__date"><?php the_date('l, F jS, Y'); ?></span>
    <h1 class='blog-single__title'><?php the_title(); ?></h1>
    <div class="blog-single__img"><?php the_post_thumbnail('full'); ?></div>
    <span class="blog-single__caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></span>
    <div class="blog-single__content"><?php the_content(); ?></div>
  </div>
  <?php get_sidebar(); ?>
  <?php include('page-templates/partials/post-nav.php'); ?>
<?php endwhile; ?>
</section>
<?php get_footer();?>