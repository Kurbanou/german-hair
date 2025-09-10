<?php

/**
 * Displays slider posts
 */

$posts = get_posts([
  'numberposts' => -1,
  'post_type'   => 'post',
  'orderby'     => 'date',
  'order'       => 'DESC',
]);

$data = array_map(function ($post) {
  return [
    'title'       => get_the_title($post),
    'image'       => wp_get_attachment_url(get_field('preview_image', $post)),
    'description' => get_field('preview_description', $post),
    'link'        => get_permalink($post),
  ];
}, $posts);

wp_localize_script('portfolio-slider', 'sliderData', [
  'posts' => $data,
  'totalCount' => count($posts),
]);
?>

<div class="slider-post">
  <div class="slider-post_container" id="slider-posts">
    <?php foreach ($posts as $post): ?>
      <?php get_template_part('template-parts/common//list/list-card', null, [
        'post' => $post,
        'add_class' => 'slider-card',
        'name_label' => 'Процедура',
        'desc_label' => 'Описание',
        'use_href' => true,
      ]); ?>
    <?php endforeach; ?>
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