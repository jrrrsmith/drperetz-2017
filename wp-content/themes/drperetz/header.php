<?php include 'page-templates/partials/head.php'  ?>
<header class="header">
  <div class="header__top">
    <div class="header__inner wrap">
      <div class="header__top__form">
        
        <a class="button button--blue" href="#">Schedule a Consultation</a>
        <a class="button button--transparent" href="#">Login</a>
      </div>
    </div>
  </div>
  <div class="header__bottom">
    <div class="header__inner wrap">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-wrap">
        <img src="<?php bloginfo('template_url');?>/assets/images/logo.png" class="logo" />
      </a>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'primary-menu',
          'menu'           => 'Primary'
         ) );
      ?>
    </div>
  </div>
</header>
<div id="page">