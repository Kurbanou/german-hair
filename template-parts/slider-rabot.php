<?php

/**
 * Displays slider rabot
 */


use Carbon_Fields\Carbon_Fields;

$raboty = carbon_get_post_meta(get_the_ID(), 'raboty_pairs');
?>



<div class="slider-post raboty">
  <div class="slider-post_container" id="slider-posts">

    <?php foreach ($raboty as $pair): ?>
      <?php if (!empty($pair['do']) && !empty($pair['posle'])): ?>
        <div class="raboty-card">
          <div class="twentytwenty-container">
            <img src="<?php echo wp_get_attachment_image_url($pair['do'], 'large'); ?>" alt="До">
            <img src="<?php echo wp_get_attachment_image_url($pair['posle'], 'large'); ?>" alt="После">
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>

  </div>
  <div class="slider-post_pag">
    <div class="rab-left">
      <?php echo get_icon('arrow-left', 'l'); ?>
    </div>
    <div class="rab-right">
      <?php echo get_icon('arrow-right', 'l'); ?>
    </div>
  </div>
</div>