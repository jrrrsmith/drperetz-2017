<div class="post-nav">
  <?php $prevPost = get_previous_post(true);
    if($prevPost) {
      $args = array(
      'posts_per_page' => 1,
      'include' => $prevPost->ID
      );
      $prevPost = get_posts($args);
    foreach ($prevPost as $post) {
      setup_postdata($post);
  ?>
  <div class="post-nav__item post-previous">
    <a class="post-nav__link" href="<?php the_permalink(); ?>"><span>&lt;</span> previous entry</a>

    <a class="post-nav__img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <div class="post-nav__info">
      <span><?php the_date('l, F jS, Y'); ?></span>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
  </div>

  <?php
    wp_reset_postdata();
      } //end foreach
      } // end if

    $nextPost = get_next_post(true);
    if($nextPost) {
      $args = array(
      'posts_per_page' => 1,
      'include' => $nextPost->ID
      );
      $nextPost = get_posts($args);
    foreach ($nextPost as $post) {
      setup_postdata($post);
  ?>
  <div class="post-nav__item post-next">
    <a class="post-nav__link" href="<?php the_permalink(); ?>">next entry <span>&gt;</span></a>
    <a class="post-nav__img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <div class="post-nav__info">
      <span><?php the_date('l, F jS, Y'); ?></span>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
    
  </div>
  <?php
  wp_reset_postdata();
  } //end foreach
  } // end if
  ?>
</div>