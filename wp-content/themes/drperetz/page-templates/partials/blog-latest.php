<div class="footer__top">
  <div class="wrap">
    <div class="footer__top__left">
      <h2>the latest from the doctor's <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">blog</a>:</h2>
      <?php
        $args = array( "showposts" => 1 );                  
        query_posts($args);

        $content = "";

        if( have_posts() ) : 
          while( have_posts() ) :

            the_post();
            $link = get_permalink();
            $title = get_the_title();
            $thumb = get_the_post_thumbnail( $post_id, 'thumbnail' );  
            $date = get_the_time('l, F jS, Y');                       

            $content .= "<div class='blog-index-item'>";
            $content .= "<a href='$link' class='blog-index-item__thumb'>$thumb</a>\n";
            $content .= "<div class='blog-index-item__info'>";
            $content .= "<span class='blog-index-item__date'>" . get_the_time('l, F jS, Y') . "</span>";
            $content .= "<a href='$link' target='_top'><h3 class='blog-index-item__title'>$title</h3></a>\n";
            $content .= "<p class='blog-index-item__excerpt'>" . get_the_excerpt() . "</p>";
            $content .= "</div>";
            $content .= "</div>";
          endwhile;
        wp_reset_query();
        endif;
        echo $content; 
      ?>
    </div>
    <div class="footer__top__right">
      <h2>stay in the know:</h2>
      <a href="#" class="button button--transparent">subscribe to newsletter</a>
      <a href="#" class="button button--blue">schedule a consultation</a>
      <div class="social-icons">
        <a href="#" class="icon-facebook"></a>
        <a href="#" class="icon-instagram"></a>
      </div>
      <a href="mailto:connect@drchristinaperetz.com" class="email-link">connect@drchristinaperetz.com</a>
    </div>
  </div>
</div>