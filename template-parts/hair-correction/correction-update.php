<?php
/**
 * Displays correction update
 */
$list_updates = [
  [
    'icon' => 'correction-loop',
    'text' => 'Капсулы начинают просвечиваться',
  ],
  [
    'icon' => 'removal-tangles',
    'text' => 'Волосы выглядят неоднородно',
  ],
  [
    'icon' => 'correction-rascheska',
    'text' => 'Появились трудности 
        с&nbsp;расчесыванием,
        чувствуется дискомфорт',
  ],
];

?>
<section class="correction updates">
  <div class="section-bg rtl">
    <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M-301 1C-301 1 160.393 128.603 469.743 146.153C708.648 159.706 846.505 152.527 1082.27 120.409C1272.53 94.4909 1406.24 83.5 1604.5 83.5C1786.52 83.5 2029.05 148.995 2161 188" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="209" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
    </svg>
  </div>
  <div class="container">
    <div class="correction-updates">
      <h2 class="h2 text-second-dark">Когда нужна коррекция?</h2>
      <p class="correction-updates_subtitle weight-600">Обычно процедуру проводят раз в 2–3 месяца, но стоит записаться, если:</p>
      <div class="updates__container">
        <?php foreach ($list_updates as $update): ?>
          <div class="color-card">
            <div class="color-card__container">
                <div class="correction-update_icon"><? get_icon($update['icon'], 'xl'); ?></div>
                <div class="correction-update_text weight-500"><?php echo $update['text']; ?></div>
            </div>
         </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
    <div class="section-bg-mobile">
    <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 38.1459C0 38.1459 93.7182 8.96252 156.553 4.94887C205.08 1.84921 233.081 3.49116 280.971 10.8366C319.616 16.7642 343.957 25.743 383.746 27.8391C420.678 29.7848 453.198 9.63497 480 0.714355" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="51" y="13.6343" width="16" height="16" rx="8" fill="#EAE4E0"/>
    </svg>
  </div>
</section>