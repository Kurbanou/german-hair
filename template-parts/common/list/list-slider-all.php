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

<div class="container">
    <div class="slider-post">
  
    
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
               <?php if (!$has_image): ?>
                <div class="post-card_img" style="background-color: rgba(242, 242, 242, 1);"></div>
                <?php else: ?>
                <div class="post-card_img" style="background-image: url('<?php echo esc_url($image_src); ?>');"></div>
                <?php endif; ?>

                <div class="post-title"><?php echo esc_html($title); ?></div>
                <div class="post-desc"><?php echo esc_html($description); ?></div>
            </div>  
          </a>
       
      <?php endforeach; wp_reset_postdata(); ?>
    

  </div>
</div>


