<?php
/**
 * Template Name: About Page
 */
?>
<div class="about-info-row">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>

  <!-- <img src="http://localhost/idovintage/wp-content/uploads/2017/08/jai-about-2.jpg"> -->

</div>

<div class="clearfix"></div>

<div class="about-gallery-container">
<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '317' ); } ?>
</div>

<?php get_template_part('templates/contact', 'section'); ?>
