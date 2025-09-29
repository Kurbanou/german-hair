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
    <div class="section-bg-mobile">
    <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 38.4315C0 38.4315 93.7182 9.24817 156.553 5.23451C205.08 2.13485 233.081 3.7768 280.971 11.1223C319.616 17.0498 343.957 26.0286 383.746 28.1248C420.678 30.0705 453.198 9.92061 480 1" stroke="#967866" stroke-opacity="0.2"/>
        <rect x="50" y="14" width="16" height="16" rx="8" fill="#EAE4E0"/>
    </svg>
  </div>
</section>