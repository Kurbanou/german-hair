<?php
/**
 * Displays reasons to chose out techs section
 */

$reason_list = [
    [
        'icon_name' => 'reason-to-chose-1',
        'text' => 'Микроскопические капсулы (3 мм) – невидимы даже на самых коротких волосах',
    ],
    [
        'icon_name' => 'reason-to-chose-2',
        'text' => 'Гипоаллергенные материалы – подходят для чувствительной кожи',
    ],
    [
        'icon_name' => 'reason-to-chose-3',
        'text' => 'Экспресс-процедура – от 60 минут для полного преображения',
    ],
    [
        'icon_name' => 'reason-to-chose-4',
        'text' => 'Естественное крепление – пряди двигаются как родные',
    ],
    [
        'icon_name' => 'reason-to-chose-5',
        'text' => 'Долговечность – ношение до 3 месяцев без коррекции',
    ],
    [
        'icon_name' => 'reason-to-chose-6',
        'text' => 'VIP-сервис – выезд на дом, работа двух мастеров',
    ]
];

?>

<section class="section home-reasons-to-chose-section relative">
    <div class="section-bg home-bg-2">
        <svg height="140" viewBox="0 0 1920 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-67 139.438C-67 139.438 250.874 22.9576 464 6.93776C628.592 -5.43399 723.568 1.11957 886 30.4378C1017.08 54.0965 1075 65.5 1208 93.5C1303.54 113.613 1373.09 122.605 1464 86.9999C1523.12 63.8456 1607.05 15.2348 1670 6.9378C1798.5 -10 1906.67 51.1044 2050 61.4378" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="1775" y="1" width="18" height="18" rx="9" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="container">
        <div class="section-content">
            <div class="home-reasons-to-chose-section__header mb-sm">
                <h2 class="h2 text-second-dark heading-w-limited">6 причин выбрать технологию Diamond Hair:</h2>
            </div>
            <div class="home-reasons-to-chose-section__body">
                <ul class="reason-list flex flex-wrap flex-gap-m justify-between">
                    <?php foreach( $reason_list as $item ): ?>
                        <li class="reason-item overflow-hidden text-break-word flex-03 flex-03-02 weight-600 text-l">
                            <div class="flex flex-col flex-gap-thin">
                                <span><?php get_icon( $item['icon_name'], 'xl' ); ?></span>
                                <span><?php echo $item['text']; ?></span>
                            </div>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1.24179C0 1.24179 89.9547 26.1198 150.267 29.5413C196.844 32.1837 223.721 30.784 269.688 24.5221C306.781 19.4691 332.85 17.3263 371.503 17.3263C406.99 17.3263 454.274 30.0954 480 37.7" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="99" y="16.6421" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>