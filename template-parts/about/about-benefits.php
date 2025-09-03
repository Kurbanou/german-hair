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
            'Волосы носятся до тех пор, пока устраивает длина (12-16 месяцев)',
            'Возможность многократной коррекции',
            'Специальный уход для продления срока службы',
        ]
    ],
];
?>

<section class="about-benefits">
    <div class="container">
        <div class="section-content">
            <h2 class="h2 text-second-dark">Наши преимущества</h2>            
            <div class="about-transformation-list">
                <?php foreach( $card_list as $card ): ?>
                    <div class="about-transformation-card">
                        <div class="h3 text-second-dark"><?php echo $card['title']; ?></div>
                        <? if( isset($card['list']) && is_array ($card['list']) && !empty($card['list']) ): ?>
                            <ul class="about__list-disk">
                                <?php foreach( $card['list'] as $item ): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <? endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div> 
</section>