<?php

/**
 * Displays slider posts
 */
wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/assets/css/unminified/slider-posts.css', [], '1.0');
wp_enqueue_script('portfolio-slider', get_template_directory_uri() . '/assets/js/unminified/slider-posts.js', [], '1.0', true);
$posts = get_posts([
  'numberposts' => -1,
  'post_type'   => 'post',
  'orderby'     => 'date',
  'order'       => 'DESC',
]);

$data = array_map(function($post) {
  return [
    'title'       => get_the_title($post),
    'image'       => wp_get_attachment_url(get_field('preview_image', $post)),
    'description' => get_field('preview_description', $post),
    'link'        => get_permalink($post),
  ];
}, $posts);

wp_localize_script('portfolio-slider', 'sliderData', [
  'posts' => $data,
]);
?>

<div class="slider-post">
  <div class="slider-post_container" id="slider-posts">
    <!--  -->
  </div>

  <div class="slider-post_pag">
    <div class="slider-post_pag-left">
     <?php echo get_icon('arrow-left', 'l'); ?>
    </div>
    <div class="slider-post_pag-right">
    <?php echo get_icon('arrow-right', 'l'); ?>
    </div>
  </div>
</div>