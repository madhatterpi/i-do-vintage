<footer class="content-info footer">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <div class="row text-center footer-nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </div>
    <div class="row text-center footer-contact">
      <p class="footer-address">Cassington, Whitney, Oxfordshire, OX29</p>

    </div>
    <div class="row text-center">
      <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
      <p class="footer-copyright">&copy <?php echo date("Y")?>- Web Design by <a href="www.peterbateman.co.uk">Peter Bateman</a></p>
    </div>
  </div>
</footer>
