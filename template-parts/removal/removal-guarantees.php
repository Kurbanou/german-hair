<?php

/**
 * Displays removal guarantees
 */
$card_list = [
  [
    'icon' => 'removal-shield',
    'text' => 'Безопасное снятие капсул нарощенных волос без<br> повреждения ваших натуральных',
  ],
  [
    'icon' => 'removal-weave',
    'text' => 'Сохранение прядей <br>для возможного повторного использования',
  ],
  [
    'icon' => 'removal-charity',
    'text' => 'Комфортную процедуру <br>без боли и дискомфорта',
  ],
];

?>
<section class="removal guarantees">
  <div class="container">
    <div class="removal-guarantees__content">
      <h2 class="h2 text-second-dark">Мы гарантируем:</h2>
      <div class="guarantees__container">
        <?php foreach ($card_list as $card): ?>
          <div class="color-card">
            <div class="removal-guarantee__content_icon"><? get_icon($card['icon'], 'xl'); ?></div>
            <div class="removal-guarantee__content_text"><?php echo $card['text']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
  <div class="section-bg-mobile ">
    <svg width="480" height="39" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 38.4315C0 38.4315 93.7182 9.24817 156.553 5.23451C205.08 2.13485 233.081 3.7768 280.971 11.1223C319.616 17.0498 343.957 26.0286 383.746 28.1248C420.678 30.0705 453.198 9.92061 480 1" stroke="#967866" stroke-opacity="0.2" />
      <rect x="50" y="14" width="16" height="16" rx="8" fill="#EAE4E0" />
    </svg>
  </div>

</section>