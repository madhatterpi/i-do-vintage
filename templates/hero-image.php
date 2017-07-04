<div class="featured-image-wrapper">
  <?php the_post_thumbnail(); ?>
  <div class="caption-banner-wrapper">
    <p class="caption-banner"><?php echo get_the_title(); ?></p>
    <p class="caption-banner-description"><?php echo get_post(get_post_thumbnail_id())->post_content; ?></p>
  </div>
</div>
