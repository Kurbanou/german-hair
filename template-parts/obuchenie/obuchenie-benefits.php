<?php

/**
 * Displays obuchenie benefits
 */
$card_list = [
  [
    'icon' => 'obuchenie-money',
    'text' => 'Высокий доход <br>уже после первых клиентов',
  ],
  [
    'icon' => 'obuchenie-bag',
    'text' => 'Постановка руки и возможность открыть свою студию',
  ],
  [
    'icon' => 'obuchenie-cap',
    'text' => 'Обучение наращиванию волос в Москве — для новичков и мастеров',
  ],
  [
    'icon' => 'obuchenie-cert',
    'text' => 'Сертификат, признанный <br>в бьюти-индустрии',
  ],
  [
    'icon' => 'obuchenie-hair',
    'text' => 'Практика на моделях <br>под контролем преподавателя',
  ],

];

?>
<section class="obuchenie benefits">
  <div class="container">
    <div class="obuchenie-benefits__content">
      <h2 class="h2 text-second-dark">Почему стоит пройти курсы?</h2>
      <div class="benefits__container">
        <?php foreach ($card_list as $card): ?>
          <div class="color-card">
            <div class="obuchenie-benefits__content_icon"><? get_icon($card['icon'], 'xl'); ?></div>
            <div class="obuchenie-benefits__content_text"><?php echo $card['text']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>