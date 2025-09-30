<?php

/**
 * Displays hair-extension-tape-benefits
 */
$card_list = [
  [
    'icon' => 'correction-stopwatch',
    'title' => 'Быстрота',
    'text' => 'Установка за 30 минут',
  ],
  [
    'icon' => 'correction-safe-withdrawal',
    'title' => 'Безопасность',
    'text' => 'Грамотное распределение объема',
  ],
  [
    'icon' => 'volosy',
    'title' => 'Естественность',
    'text' => 'Волосы выглядят максимально натурально',
  ],
  [
    'icon' => 'volosy-2',
    'title' => 'Комфорт',
    'text' => 'Можно укладывать и мыть',
  ],
  [
    'icon' => 'volosy-3',
    'title' => 'Долговечность',
    'text' => 'Держится до 2 месяцев при правильном уходе',
  ],
];

?>
<section class="tape benefits">
  <div class="container">
    <h2 class="h2 text-second-dark">Преимущества ленточного наращивания</h2>
    <div class="cards_container">
      <?php foreach ($card_list as $card): ?>
        <div class="cards_container-card">
          <div class="card_icon"><? get_icon($card['icon'], 'xl'); ?></div>
          <div class="card_content">
            <div class="card_title"><?php echo $card['title']; ?></div>
            <div class="card_text"><?php echo $card['text']; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="section-bg-mobile">
    <svg width="480" height="39" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 38.4315C0 38.4315 93.7182 9.24817 156.553 5.23451C205.08 2.13485 233.081 3.7768 280.971 11.1223C319.616 17.0498 343.957 26.0286 383.746 28.1248C420.678 30.0705 453.198 9.92061 480 1" stroke="#967866" stroke-opacity="0.2" />
      <rect x="50" y="14" width="16" height="16" rx="8" fill="#EAE4E0" />
    </svg>
  </div>
</section>