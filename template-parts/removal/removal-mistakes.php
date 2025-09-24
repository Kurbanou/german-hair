<?php

/**
 * Displays removal warning
 */
$card_list = [
  [
    'icon' => 'removal-damage',
    'text' => 'Повреждению 
и выпадению натуральных волос',
  ],
  [
    'icon' => 'removal-tangles',
    'text' => 'Образованию колтунов',
  ],
  [
    'icon' => 'removal-painfully',
    'text' => 'Болезненным ощущениям',
  ],
  [
    'icon' => 'removal-supplement',
    'text' => 'Необходимости дорогостоящего восстановления',
  ],
];

?>
<section class="removal mistakes">
  <div class="section-bg rtl" bis_skin_checked="1">
  <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M2241 1C2241 1 1779.61 128.603 1470.26 146.153C1231.35 159.706 1093.5 152.527 857.726 120.409C667.469 94.4909 533.757 83.5 335.5 83.5C153.478 83.5 -89.0489 148.995 -221 188" stroke="#967866" stroke-opacity="0.2"/>
    <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 1731 107)" fill="#EAE4E0"/>
  </svg>

  </div>
  <div class="container">
    <div class="removal-mistakes__content">
      <h2 class="h2 text-second-dark">Почему нельзя снимать волосы дома</h2>
      <p class="removal-mistakes__content_text">Многие пытаются сэкономить, снимая нарощенные волосы самостоятельно, но это может привести к:</p>
      <div class="mistakes__container">
        <?php foreach ($card_list as $card): ?>
          <div class="color-card">
            <div class="removal-mistake__content_icon"><? get_icon($card['icon'], 'xl'); ?></div>
            <div class="removal-mistake__content_text"><?php echo $card['text']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
  <div class="section-bg-mobile">
    <svg width="480" height="39" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 38.4315C0 38.4315 93.7182 9.24817 156.553 5.23451C205.08 2.13485 233.081 3.7768 280.971 11.1223C319.616 17.0498 343.957 26.0286 383.746 28.1248C420.678 30.0705 453.198 9.92061 480 1" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="50" y="14" width="16" height="16" rx="8" fill="#EAE4E0"/>
    </svg>
  </div>

</section>