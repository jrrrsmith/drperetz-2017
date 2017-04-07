</div> <!-- END OF PAGE -->
<footer class="footer">
  <?php include 'page-templates/partials/cta.php' ?>
  <?php include 'page-templates/partials/blog-latest.php' ?>
  <div class="footer__bottom">
    <div class="wrap">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__bottom__left">
        <img src="<?php bloginfo('template_url');?>/assets/images/logo.png" class="logo" />
      </a>
      <div class="footer__bottom__center">
        <a href="mailto:connect@drchristinaperetz.com" class="email-link">connect@drchristinaperetz.com/a>
        <div class="social-icons">
          <a href="#" class="icon-facebook"></a>
          <a href="#" class="icon-instagram"></a>
        </div>
      </div>
      <div class="footer__bottom__right">
        <span>website by <a href="http://www.hippobraindesign.com" target="_blank">HippoBrain</a>
      </div>
    </div>
  </div>
  <div class="disclaimer">
    <div class="wrap">
      <span class="disclaimer__title">Disclaimer</span>
      <p><?php the_field('disclaimer_txt', 'option'); ?></p>
    </div>
  </div>
</footer>
<?php include 'page-templates/partials/foot.php'  ?>
