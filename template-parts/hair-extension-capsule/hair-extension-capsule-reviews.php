<?php

/**
 * Displays hair-extension-capsule-reviews
 */

$post_id = get_the_ID(); //  обязательно для data-post-id


?>

<section class="capsule about-reviews">
  <div class="section-bg">
    <svg width="1920" height="165" viewBox="0 0 1920 165" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M-134 164.527C-134 164.527 272.014 37.0338 544.235 19.4993C754.465 5.95782 875.776 13.131 1083.25 45.2212C1250.67 71.1168 1356.12 110.342 1528.5 119.5C1688.5 128 1829.39 39.9715 1945.5 1" stroke="#967866" stroke-opacity="0.2" />
      <rect x="241" y="54" width="18" height="18" rx="9" fill="#EAE4E0" />
    </svg>

    <div class="container">
      <h2 class="h2 text-second-dark">Отзывы клиентов</h2>
      <?php

      $reviews = carbon_get_post_meta(get_queried_object_id(), 'page_reviews');
      if (!empty($reviews)) {
        echo "<script>console.log('Отзывы:', " . json_encode($reviews, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . ");</script>";

        get_template_part('template-parts/reviews'); // подключаем reviews.php
      }
      ?>
      <button class="btn btn-light btn-glowing">Читать все отзывы</button>
    </div>
    <div class="section-bg-mobile">
      <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 37.5197C0 37.5197 89.9547 12.6417 150.267 9.22017C196.844 6.5778 223.721 7.97752 269.688 14.2393C306.781 19.2924 332.85 21.4352 371.503 21.4352C406.99 21.4352 454.274 8.66609 480 1.06152" stroke="#967866" stroke-opacity="0.2" />
        <rect width="16" height="16" rx="8" transform="matrix(1 0 0 -1 417 22.7949)" fill="#EAE4E0" />
      </svg>
    </div>
</section>