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
</section>