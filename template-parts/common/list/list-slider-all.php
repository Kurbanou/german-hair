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
if (empty($posts)) return;

wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/assets/css/unminified/slider-posts.css', [], '1.0');
wp_enqueue_script('portfolio-slider', get_template_directory_uri() . '/assets/js/unminified/slider-posts.js', [''], '1.0', true);

?>


<div class="slider-post">
  <div class="slider-post_container">
    <?php foreach ($posts as $post): setup_postdata($post); ?>
      <?php
      $title       = get_the_title($post);
      $image_id    = get_field('preview_image', $post);
      $image_src   = $image_id ? wp_get_attachment_url($image_id) : '';
      $description = get_field('preview_description', $post);
      $link        = get_permalink($post);
      ?>
      <a href="<?php echo esc_url($link); ?>">
        <div class="post-card">
          <?php if (!$image_src): ?>
            <div class="post-card_img" style="background-color: rgba(242, 242, 242, 1);"></div>
          <?php else: ?>
            <div class="post-card_img" style="background-image: url('<?php echo esc_url($image_src); ?>');"></div>
          <?php endif; ?>

          <div class="post-title">
            <div class="post-card_head">
              <?php echo get_icon('card', 'm'); ?>
              процедура
            </div>
            <?php echo esc_html($title); ?>
          </div>
          <div class="post-desc">
            <div class="post-card_head">
             <?php echo get_icon('card', 'm'); ?>
              Описание
            </div>
            <div class="text-line-clamp-2">
              <?php echo esc_html($description); ?>
            </div>

          </div>
        </div>
      </a>

    <?php endforeach;
    wp_reset_postdata(); ?>

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

<script>
  document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('slider-posts');
  const posts = sliderData.posts;
  const chunkSize = 3;
  let index = 0;

  function render() {
    container.innerHTML = '';
    for (let i = 0; i < chunkSize; i++) {
      const post = posts[(index + i) % posts.length];
      container.innerHTML += `
        <a href="${post.link}">
          <div class="post-card">
            <div class="post-card_img" style="background-image: url('${post.image || ''}');"></div>
            <div class="post-title">
              <div class="post-card_head">${getIconHTML('card', 'm')} процедура</div>
              ${post.title}
            </div>
            <div class="post-desc">
              <div class="post-card_head">${getIconHTML('card', 'm')} Описание</div>
              <div class="text-line-clamp-2">${post.description}</div>
            </div>
          </div>
        </a>
      `;
    }
  }

  function getIconHTML(id, size) {
    return `<svg class="icon icon-${id} icon-${size}"><use xlink:href="#icon-${id}"></use></svg>`;
  }

  document.getElementById('slider-next').addEventListener('click', () => {
    index = (index + chunkSize) % posts.length;
    render();
  });

  document.getElementById('slider-prev').addEventListener('click', () => {
    index = (index - chunkSize + posts.length) % posts.length;
    render();
  });

  render();
});
</script>