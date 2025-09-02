<?php
/**
 * Displays beauty transformation section
 */

$card_list = [
    [
        'title' => 'День 1:',
        'list' => [
            'Консультация + диагностика (30 мин)',
            'Создание цифрового эскиза',
            'Подбор прядей по 10 параметрам',
        ]
    ],
    [
        'title' => 'День 2:',
        'list' => [
            'Процедура наращивания (1-2 часа)',
            'Адаптационная стрижка',
            'Обучение уходу',
        ]
    ],
    [
        'title' => 'Через 2 месяца:',
        'list' => [
            'Коррекция волос',
            'Профессиональная чистка',
            'Обновление укладки',
        ]
    ],
];
?>

<section class="section common-beauty-transformation-section relative">
    <div class="section-bg common-beauty-transformation-section-bg">
        <svg height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-262 1C-262 1 199.393 128.603 508.743 146.153C747.648 159.706 885.505 152.527 1121.27 120.409C1311.53 94.4909 1445.24 83.5 1643.5 83.5C1825.52 83.5 2068.05 148.995 2200 188" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="248" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="container">
        <div class="section-content">
            <h2 class="h2 mb-sm text-second-dark">Как проходит ваше преображение?</h2>
            
            <div class="beauty-transformation-list text-m flex flex-wrap flex-gap-m">
                <?php foreach( $card_list as $card ): ?>
                    <div class="beauty-transformation-card text-break-word card card-color-shifted card-rounded flex-03 flex flex-col justify-between">
                        <div class="h3 text-second-dark"><?php echo $card['title']; ?></div>
                        <? if( isset($card['list']) && is_array ($card['list']) && !empty($card['list']) ): ?>
                            <ol class="list-numeric weight-600 leading-2">
                                <?php foreach( $card['list'] as $item ): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ol>
                        <? endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 38.722C0 38.722 93.7182 9.5387 156.553 5.52504C205.08 2.42538 233.081 4.06733 280.971 11.4128C319.616 17.3403 343.957 26.3191 383.746 28.4153C420.678 30.361 453.198 10.2111 480 1.29053" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="51" y="14.2104" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>