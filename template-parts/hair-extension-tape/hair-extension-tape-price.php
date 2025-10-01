<?php

/**
 * Displays hair-extension-tape-price */


?>
<section class="tape price">
  <div class="container">
    <h2 class="h2 text-second-dark text-center">Цена на ленточное наращивание волос</h2>
    <div class="price_content">
      <?php
      while (have_posts()) : the_post();
        the_content();
      endwhile;
      ?>

    </div>
  </div>
  <div class="section-bg-mobile rtl">
    <svg width="480" height="37" viewBox="0 0 480 37" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 36.0397C0 36.0397 72.0736 9.67282 120.397 6.04651C157.716 3.246 179.25 4.72949 216.079 11.3661C245.799 16.7215 258.932 19.3029 289.088 25.6411C310.75 30.1939 326.521 32.2294 347.133 24.1697C360.537 18.9284 379.568 7.92466 393.84 6.04652C422.976 2.21242 447.501 16.0442 480 18.3833" stroke="#967866" stroke-opacity="0.2" />
      <rect x="418" y="0.702393" width="16" height="16" rx="8" fill="#EAE4E0" />
    </svg>
  </div>
</section>