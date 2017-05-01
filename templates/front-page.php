<?php
/**
 * Template Name: Front Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="row hero">
  <picture>
    <source srcset="http://localhost/idovintage/wp-content/uploads/2017/04/hero-lgx2.jpg" media="(min-width: 1480px)">
    <source srcset="http://localhost/idovintage/wp-content/uploads/2017/04/hero-lg.jpg" media="(min-width: 960px)">
    <source srcset="http://localhost/idovintage/wp-content/uploads/2017/04/hero-tab.jpg" media="(min-width: 640px)">

    <img src="http://localhost/idovintage/wp-content/uploads/2017/04/hero-sm-1.jpg" alt="tea cup">

  </picture>

  <div class="hero-text">
    <p>We have a wonderful range</p>
    <p>of vintage china. All lovingly</p>
    <p>refound and reused.</p>
    <button type="button" class="btn btn-collection text-uppercase">Our collection</button>
  </div>
</div>

<div class="row row-padding text-center flexbox-center cups">
  <p class="section-header">A few of our favourite cups...</p>
  <div class="flexbox-cups">
    <div><img src="http://localhost/idovintage/wp-content/uploads/2017/04/cup1.jpg" alt=""></div>
    <div><img src="http://localhost/idovintage/wp-content/uploads/2017/04/cup-3.jpg" alt=""></div>
    <div><img src="http://localhost/idovintage/wp-content/uploads/2017/04/cup-2.jpg" alt=""></div>
  </div>
</div>

<div class="info-columns-wrapper">
  <div class="info-columns-header">
    <p class="section-header info-header">Any occassion can be vintage-ified</p>
  </div>
<div class="row info-row-padding text-center info-columns">
  <div class="col-sm-4 col-md-4 no-padding info-column-max-width">
    <div class="thumbnail">
      <img src="http://localhost/idovintage/wp-content/uploads/2017/04/cups-pricing-sm.jpg" alt="">
    </div>
    <div class="caption">
      <h2 class="caption-header">Pricing</h2>
      <p class="caption-text">We have a variety of packages on offer. There  are all sorts of different things you can get. There is a  minimum orderof £40. If you wish to do such and such you must accept this policy or wewill not give you our lovely china, sothere, okay! </p>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 no-padding info-column-max-width">
    <div class="thumbnail">
      <img src="http://localhost/idovintage/wp-content/uploads/2017/04/cups-delivery-sm.jpg" alt="">
    </div>
    <div class="caption">
      <h2 class="caption-header">Delivery</h2>
      <p class="caption-text">We have a variety of packages on offer. There  are all sorts of different things you can get. There is a  minimum orderof £40. If you wish to do such and such you must accept this policy or wewill not give you our lovely china, sothere, okay! </p>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 no-padding info-column-max-width">
    <div class="thumbnail">
      <img src="http://localhost/idovintage/wp-content/uploads/2017/04/cups-contact-sm.jpg" alt="">
    </div>
    <div class="caption">
      <h2>Contact</h2>
      <p>We have a variety of packages on offer. There  are all sorts of different things you can get. There is a  minimum orderof £40. If you wish to do such and such you must accept this policy or wewill not give you our lovely china, sothere, okay! </p>
    </div>
  </div>
</div>
</div>

<div class="row break top-break">

</div>

<div class="row my-row">
  <div class="another">
    <div class="testamonial text-center">
        <div class="testamonial-text">
          <p>"Everybody loved the tea with vintage china. The service was very proffessional and
        we will definitely use them again"</p>
          <p class="testamonial-name">Sarah Lorrie</p>
        </div>
      </div>
  </div>
</div>

  <div class="row break bottom-break">

  </div>


</div>
