<?php

/**
 * Displays benefits section
 */

$card_list = [
    [
        'title' => 'Комфорт',
        'list' => [
            'Процедура занимает 1-2 часа',
            'Можно мыть голову сразу после наращивания',
            'Никакого дискомфорта при сне или укладке',
        ]
    ],
    [
        'title' => 'Безопасность',
        'list' => [
            'Гипоаллергенные материалы',
            'Микрокапсулы 2,5 мм (не травмируют волосы)',
            'Гарантия 1 месяц',
        ]
    ],
    [
        'title' => 'Естественность',
        'list' => [
            'Подбор цвета по системе Pantone',
            'Незаметные переходы даже на коротких волосах',
            'Текстура, идентичная натуральным волосам',
        ]
    ],

    [
        'title' => 'Долговечность',
        'list' => [
            'Волосы носятся до тех пор, пока устраивает длина в среднем 12-16 месяцев',
            'Возможность многократной коррекции',
            'Специальный уход для продления срока службы',
        ]
    ],
];
?>

<section class="about-benefits">
    <div class="section-bg rtl">
        <svg width="1920" height="165" viewBox="0 0 1920 165" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-123 164.527C-123 164.527 283.014 37.0338 555.235 19.4993C765.465 5.95782 886.776 13.131 1094.25 45.2212C1261.67 71.1168 1367.12 110.342 1539.5 119.5C1699.5 128 1840.39 39.9715 1956.5 1" stroke="#967866" stroke-opacity="0.2" />
            <rect x="1762" y="66" width="18" height="18" rx="9" fill="#EAE4E0" />
        </svg>
    </div>
    <div class="container">
        <div class="section-content">
            <h2 class="h2 text-second-dark">Наши преимущества</h2>
            <div class="about-transformation-list">
                <?php foreach ($card_list as $card): ?>
                    <div class="about-transformation-card">
                        <div class="h3 text-second-dark"><?php echo $card['title']; ?></div>
                        <? if (isset($card['list']) && is_array($card['list']) && !empty($card['list'])): ?>
                            <ul class="about__list-disk">
                                <?php foreach ($card['list'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <? endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="section-bg-mobile">
        <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0.786099C0 0.786099 89.9547 25.6641 150.267 29.0856C196.844 31.728 223.721 30.3283 269.688 24.0665C306.781 19.0134 332.85 16.8706 371.503 16.8706C406.99 16.8706 454.274 29.6397 480 37.2443" stroke="#967866" stroke-opacity="0.2" />
            <rect x="95" y="16.6447" width="16" height="16" rx="8" fill="#EAE4E0" />
        </svg>
    </div>
</section>