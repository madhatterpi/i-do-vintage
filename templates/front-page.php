<?php
/**
 * Template Name: Front Page
 */
?>
<style>

</style>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="hero">
  <picture>
    <source srcset="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/hero-front-page/hero-lgx3.jpg" media="(min-width: 1600px)">
    <source srcset="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/hero-front-page/hero-lgx2.jpg" media="(min-width: 1480px)">
    <source srcset="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/hero-front-page/hero-lg.jpg" media="(min-width: 960px)">
    <source srcset="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/hero-front-page/hero-tab.jpg" media="(min-width: 640px)">

    <img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/hero-front-page/hero-sm.jpg" alt="tea cup">

  </picture>

  <div class="hero-text">
    <p>We have a wonderful range</p>
    <p>of vintage china. All lovingly</p>
    <p>refound and reused.</p>
    <a href="http://localhost:3000/idovintage/gallery/" type="button" class="btn btn-collection text-uppercase">Our collection</a>
  </div>
</div>

<div class="row-std about-text-container">
  <div class="about-text">
    <p class="section-header">I Do Vintage Story</p>
    <p>Pie macaroon cheesecake muffin toffee tootsie roll brownie. Caramels ice cream gingerbread. Lollipop candy croissant wafer tart carrot cake croissant. Cookie ice cream lollipop dragée marshmallow cake. Oat cake icing cheesecake. Lollipop biscuit sugar plum.</p>
  </div>
</div>

<div class="info-columns-wrapper">
  <div class="info-columns-header">
    <p class="section-header info-header">Lets Make your event special</p>
  </div>
<div class="row-std row-centered info-row-padding text-center info-columns">
  <div class="col-sm-4 col-md-4 col-lg 4 info-column">
    <div class="thumbnail">
      <img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/info-columns/cups-pricing-sm.jpg" alt="">
    </div>
    <div class="caption">
      <h2 class="caption-header">Pricing</h2>
      <p class="caption-text">Caramels pastry soufflé brownie. Marzipan chupa chups dessert jelly-o croissant chocolate bar. Ice cream candy canes cake. Gummi bears tootsie roll chocolate cake tiramisu chocolate. </p>
      <p class="read-more"><a href="http://localhost:3000/idovintage/prices/">Read More</a></p>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg 4 info-column">
    <div class="thumbnail">
      <img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/info-columns/cups-delivery-sm.jpg" alt="">
    </div>
    <div class="caption">
      <h2 class="caption-header">Collection</h2>
      <p class="caption-text">Chocolate bar pie dessert dragée caramels. Icing pie ice cream jelly-o halvah marshmallow marzipan jelly. Biscuit carrot cake chocolate cake tootsie roll sweet roll. Fruitcake. </p>
      <p class="read-more"><a href="http://localhost:3000/idovintage/gallery/">Read More</a></p>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg 4 info-column">
    <div class="thumbnail">
      <img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/info-columns/cups-contact-sm.jpg" alt="">
    </div>
    <div class="caption">
      <h2>Contact</h2>
      <p>Cookie liquorice bear claw croissant halvah cupcake. Halvah toffee sugar plum brownie jelly jelly icing. Tiramisu tootsie roll pie cupcake gummies. Donut jelly-o pudding dessert. </p>
      <p class="read-more"><a href="http://localhost:3000/idovintage/contact/">Read More</a></p>
    </div>
  </div>
</div>
</div>

<div class="row-std row-padding text-center flexbox-center cups">
  <p class="section-header">A few of our favourite cups</p>
  <div class="flexbox-cups">
    <div><img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/cups-front-page/cup1.jpg" alt=""></div>
    <div><img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/cups-front-page/cup3.jpg" alt=""></div>
    <div><img src="http://localhost/idovintage/wp-content/themes/idovintage/assets/images/cups-front-page/cup2.jpg" alt=""></div>
  </div>
</div>

<div class="my-row">
  <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '285' ); } ?>
</div>

  <div class="row-std break bottom-break">
    <p class="section-header">Follow us on social media</p>
    <hr class="hr-front">
    <div class="front-social-links-bottom">
      <a class="hideme" href="https://www.facebook.com/idovintagehire/"><i class="fa fa-facebook-square fa-front-page" aria-hidden="true"></i></a>
      <a class="hideme" href="https://www.instagram.com/idovintagehire/"><i class="fa fa-instagram fa-front-page" aria-hidden="true"></i></a>
    </div>
  </div>


</div>
