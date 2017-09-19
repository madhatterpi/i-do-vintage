<?php
/**
 * Template Name: Prices Page
 */
?>

<div class="padded-container">
<div class="top-page-text">Cake biscuit jujubes gummi bears candy canes chocolate cake caramels carrot cake. Donut dessert lemon drops gummies soufflé chocolate bar liquorice. Croissant jujubes tiramisu. Tootsie roll liquorice liquorice.</div>

<hr class="hr-gallery">

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<?php get_template_part('templates/contact', 'section'); ?>
