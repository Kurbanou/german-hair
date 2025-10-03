<?php

/**
 * Displays encapsulation result
 */

$results_list = [
  [
    'icon' => 'correction-strands',
    'text' => 'Готовые к наращиванию пряди',
  ],
  [
    'icon' => 'molecule',
    'text' => 'Равномерное распределение кератина',
  ],
  [
    'icon' => 'endurance',
    'text' => 'Максимальная прочность крепления',
  ],
];

?>
<section class="encapsulation results">
  <div class="section-bg rtl">
    <svg width="1920" height="201" viewBox="0 0 1920 201" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M-354 1C-354 1 139.387 156.15 470.189 177.488C725.66 193.967 873.076 185.237 1125.19 146.186C1328.64 114.673 1563.5 151 1769.5 162C1963.93 172.382 2031.9 152.575 2173 200" stroke="#967866" stroke-opacity="0.2"/>
    <rect width="18" height="18" rx="9" transform="matrix(1 0 0 -1 1565 159)" fill="#EAE4E0"/>
    </svg>
  </div>
  <div class="container">
    <div class="encapsulation-results__content">
      <h2 class="h2 text-second-dark text-center">После процедуры вы получите</h2>
      <div class="results__container flex flex-gap-l justify-center flex-wrap">
        <?php foreach ($results_list as $key => $result): ?>
          <div class="result__container flex items-center flex-gap-thin">
            <div class="encapsulation-result__content_icon"><? get_icon($result['icon'], 'xl'); ?></div>
            <div class="encapsulation-result__content_text weight-500"><?php echo $result['text']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
  <div class="section-bg-mobile ">
    <svg width="100%" height="100%" viewBox="0 0 480 37" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 36.0397C0 36.0397 72.0736 9.67282 120.397 6.04651C157.716 3.246 179.25 4.72949 216.079 11.3661C245.799 16.7215 258.932 19.3029 289.088 25.6411C310.75 30.1939 326.521 32.2294 347.133 24.1697C360.537 18.9284 379.568 7.92466 393.84 6.04652C422.976 2.21242 447.501 16.0442 480 18.3833" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="418" y="0.702393" width="16" height="16" rx="8" fill="#EAE4E0"/>
    </svg>
  </div>

</section>