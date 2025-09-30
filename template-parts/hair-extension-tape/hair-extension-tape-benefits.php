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
    <h2 class="h2 text-second-dark">Мы гарантируем:</h2>
    <div class="cards_container">
      <?php foreach ($card_list as $card): ?>
        <div class="cards_container-card">
          <div class="card_icon"><? get_icon($card['icon'], 'xl'); ?></div>
          <div class="card_title"><?php echo $card['title']; ?></div>
          <div class="card_text"><?php echo $card['text']; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>