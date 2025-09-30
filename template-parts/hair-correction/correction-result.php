<?php

/**
 * Displays correction result
 */

$results_list = [
  [
    'icon' => 'correction-volume',
    'text' => 'Ровный объем без проплешин',
  ],
  [
    'icon' => 'correction-eye',
    'text' => 'Невидимые капсулы',
  ],
  [
    'icon' => 'correction-shine',
    'text' => 'Ухоженные и блестящие волосы',
  ],
];

?>
<section class="correction results">
  <div class="section-bg rtl" bis_skin_checked="1">
    <svg width="1920" height="201" viewBox="0 0 1920 201" fill="none">
        <path d="M2254 1C2254 1 1760.61 156.15 1429.81 177.488C1174.34 193.967 1026.92 185.237 774.806 146.186C571.356 114.673 336.5 151 130.5 162C-63.9293 172.382 -131.899 152.575 -273 200" stroke="#967866" stroke-opacity="0.2"/>
        <rect x="1660" y="159" width="18" height="18" rx="9" transform="rotate(180 1660 159)" fill="#EAE4E0"/>
    </svg>
  </div>
  <div class="container">
    <div class="correction-results__content">
      <h2 class="h2 text-second-dark text-center">После процедуры вы получите</h2>
      <div class="results__container flex flex-gap-l justify-center flex-wrap">
        <?php foreach ($results_list as $key => $result): ?>
          <div class="result__container flex items-center flex-gap-thin">
            <div class="correction-result__content_icon"><? get_icon($result['icon'], 'xl'); ?></div>
            <div class="correction-result__content_text weight-500"><?php echo $result['text']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
  <div class="section-bg-mobile ">
    <svg width="100%" height="100%" viewBox="0 0 480 36" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M480 35.3774C480 35.3774 407.926 9.01046 359.603 5.38416C322.284 2.58364 300.75 4.06713 263.921 10.7037C234.201 16.0592 221.068 18.6405 190.912 24.9787C169.25 29.5316 153.479 31.567 132.867 23.5073C119.463 18.266 100.432 7.26231 86.1597 5.38417C57.0241 1.55007 32.4988 15.3819 -5.126e-06 17.721" stroke="#967866" stroke-opacity="0.2"/>
    <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 62 0.0400391)" fill="#EAE4E0"/>
    </svg>
  </div>

</section>