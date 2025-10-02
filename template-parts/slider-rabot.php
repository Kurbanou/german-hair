<?php

/**
 * Displays slider rabot
 */
$post_id = get_the_ID(); //  обязательно для data-post-id
// надо получить из страницы пары изображений до и после и вставить в слайдер 

$url = get_field('pochemu_klienty_vybirayut_nas2');


?>



<div class="slider-post raboty">
  <div class="slider-post_container" id="slider-posts">


    <div class="raboty-card ">Card 1</div>
    <div class="raboty-card ">Card 2</div>
    <div class="raboty-card ">Card 3</div>
    <div class="raboty-card ">Card 4</div>
    <div class="raboty-card ">Card 5</div>






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