<?php
/**
 * Displays encapsulation update
 */
$list_updates = [
  [
    'icon' => 'new',
    'title' => 'Перед первым наращиванием',
    'text' => 'Подготовка новых прядей',
  ],
  [
    'icon' => 'correction',
    'title' => 'При коррекции',
    'text' => 'Замена старых капсул на новые',
  ],
];

?>
<section class="encapsulation updates">
    <div class="section-bg rtl">
        <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-281 1C-281 1 180.393 128.603 489.743 146.153C728.648 159.706 866.505 152.527 1102.27 120.409C1292.53 94.4909 1426.24 83.5 1624.5 83.5C1806.52 83.5 2049.05 148.995 2181 188" stroke="#967866" stroke-opacity="0.2"/>
        <rect x="229" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="container">
        <h2 class="h2 text-second-dark">Когда нужна капсуляция?</h2>
        <div class="encapsulation-updates__content weight-500">
        <div class="updates__container">
            <?php foreach ($list_updates as $update): ?>
                <div class="color-card">
                    <div class="color-card__container">
                    <div class="encapsulation-update__content_icon"><? get_icon($update['icon'], 'xl'); ?></div>
                    <div class="encapsulation-update__content">
                        <div class="encapsulation-update__content_title weight-600"><?php echo $update['title']; ?></div>
                        <div class="encapsulation-update__content_text"><?php echo $update['text']; ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
        <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 38.2401C0 38.2401 93.7182 9.05676 156.553 5.04311C205.08 1.94344 233.081 3.5854 280.971 10.9309C319.616 16.8584 343.957 25.8372 383.746 27.9334C420.678 29.879 453.198 9.72921 480 0.808594" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="51" y="13.7285" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>