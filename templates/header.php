<?php
  // For use with Sagextras (https://github.com/storm2k/sagextras)
?>


<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="logo-banner">
    <a href="https://www.facebook.com/idovintagehire/"><img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/social-icons/facebook-logo.png" alt=""></a>
    <a href="//localhost:3000/idovintage/wp-content/themes/idovintage/assets/images/social-icons/instagram-orange.png"><img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/social-icons/instgram-logo.png" alt=""></a>
    <!-- <a href="#"><img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/social-icons/twitter-logo.png" alt=""></a> -->
    <!-- <p class="header-phone">01865 881341</p> -->
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
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
