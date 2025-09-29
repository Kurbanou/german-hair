<?php
/**
 * Displays correction necessity
 */
$list_necessities = [
  [
    'icon' => 'correction-eye',
    'text' => 'Устраняет видимость капсул',
  ],
  [
    'icon' => 'correction-volume',
    'text' => 'Восстанавливает равномерный объем',
  ],
  [
    'icon' => 'correction-stopwatch',
    'text' => 'Продлевает срок носки наращивания еще на 2–3 месяца',
  ],
];

?>
<section class="correction necessities">
  <div class="container">
    <div class="correction-necessities__content">
      <h2 class="h2 text-second-dark">Наращивание волос и коррекция — две стороны одной монеты.<br> Почему же это необходимо?</h2>
      <p class="weight-500">Со временем ваши натуральные волосы отрастают, и капсулы смещаются в среднем на 1,5–2 см, из-за чего прическа теряет аккуратность.
        Коррекция нарощенных волос возвращает первоначальную ухоженность, а также:</p>
      <div class="necessities__container">
        <?php foreach ($list_necessities as $necessity): ?>
          <div class="color-card">
            <div class="color-card__container">
                <div class="correction-necessities__content_icon"><? get_icon($necessity['icon'], 'xl'); ?></div>
                <div class="correction-necessities__content_text"><?php echo $necessity['text']; ?></div>
            </div>
         </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>