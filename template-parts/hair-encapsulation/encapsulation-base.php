<?php
/**
 * Displays encapsulation base
 */
$list_bases = [
  [
    'icon' => 'encapsulation-eye',
    'text' => 'Устраняет видимость капсул',
  ],
  [
    'icon' => 'encapsulation-volume',
    'text' => 'Восстанавливает равномерный объем',
  ],
  [
    'icon' => 'encapsulation-stopwatch',
    'text' => 'Продлевает срок носки наращивания еще на 2–3 месяца',
  ],
];

?>
<section class="encapsulation bases">
  <div class="container">
    <div class="encapsulation-bases__content">
      <h2 class="h2 text-second-dark">Капсуляция волос кератином – основа безупречного наращивания.</h2>
      <p class="weight-500">Это процесс обработки прядей специальным кератином для их последующего крепления к вашим натуральным волосам.</p>
      <p class="weight-500">В салоне German Hair мы предлагаем:</p>
      <div class="bases__container">
        <?php foreach ($list_bases as $base): ?>
          <div class="color-card">
            <div class="color-card__container">
                <div class="encapsulation-base__content_icon"><? get_icon($base['icon'], 'xl'); ?></div>
                <div class="encapsulation-base__content_text"><?php echo $base['text']; ?></div>
            </div>
         </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
    <div class="section-bg-mobile">
    <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none">
    <path d="M0 38.4315C0 38.4315 93.7182 9.24817 156.553 5.23451C205.08 2.13485 233.081 3.7768 280.971 11.1223C319.616 17.0498 343.957 26.0286 383.746 28.1248C420.678 30.0705 453.198 9.92061 480 1" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="50" y="14" width="16" height="16" rx="8" fill="#EAE4E0"/>
    </svg>
  </div>
</section>