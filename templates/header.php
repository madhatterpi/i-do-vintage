<?php
  // For use with Sagextras (https://github.com/storm2k/sagextras)
?>


<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="logo-banner">
    <a href="https://www.facebook.com/idovintagehire/"><i class="fa fa-facebook-square fa-top-header fa-grey" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/idovintagehire/"><i class="fa fa-instagram fa-top-header fa-grey" aria-hidden="true"></i></a>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/logo/Idologo.png" alt="I Do Vintage Logo"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
