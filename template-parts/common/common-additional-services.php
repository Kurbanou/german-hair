<?php

/**
 * Displays additional services section
 */

$template_slug = basename(get_page_template(), '.php');

if ($template_slug === 'page-hair-extension-tape') {
    $additional_services_list = [
        [
            'name' => 'Капсульное наращивание',
            'desc' => '
            <p>Идеальный выбор для тех, кто ценит естественный результат</p>
            <ul>
                <li>Горячее наращивание с использованием кератиновых капсул</li>
                <li>Волосы выглядят как родные, подходят для любой укладки</li>
                <li>Подходит для окрашивания, укладки и активного образа жизни</li>
            </ul>',
            'image' => get_template_directory_uri() . '/assets/images/team/additional-services-1.jpg',
        ],
        [
            'name' => 'Окрашивание волос',
            'desc' => '
        <ul>
            <li>Выполняем в самых разных техниках</li>
            <li>Используем премиальные красители</li>
            <li>Подбираем оттенок индивидуально</li>
        </ul>',
            'image' => get_template_directory_uri() . '/assets/images/team/additional-services-2.jpg',
        ],
        [
            'name' => 'Процедуры восстановления волос',
            'desc' => '
        <ul>
            <li>Горячее и холодное восстановление</li>
            <li>Подбор состава индивидуально</li>
            <li>Для максимального здоровья и блеска</li>
        </ul>',
            'image' => get_template_directory_uri() . '/assets/images/team/additional-services-3.jpg',
        ],
    ];
} else {

    $additional_services_list = [
        [
            'name' => 'Ленточное наращивание (Tape-in)',
            'desc' => '
        <p>Идеально для тех, кто ценит скорость</p>
        <ul>
            <li>Процедура занимает<br> всего 30–60 минут</li>
            <li>Натуральный объем без утяжеления</li>
            <li>Стоимость от 25 000 ₽</li>
        </ul>',
            'image' => get_template_directory_uri() . '/assets/images/team/additional-services-1.jpg',
        ],
        [
            'name' => 'Окрашивание волос',
            'desc' => '
        <ul>
            <li>Выполняем в самых разных<br> техниках</li>
            <li>Используем премиальные<br> красители</li>
            <li>Подбираем оттенок индивидуально</li>
        </ul>',
            'image' => get_template_directory_uri() . '/assets/images/team/additional-services-2.jpg',
        ],
        [
            'name' => 'Процедуры восстановления волос',
            'desc' => '
        <ul>
            <li>Горячее и холодное<br> восстановление</li>
            <li>Подбор состава индивидуально</li>
            <li>Для максимального здоровья и&nbspблеска</li>
        </ul>',
            'image' => get_template_directory_uri() . '/assets/images/team/additional-services-3.jpg',
        ],
    ];
}


$special_offers_list = [
    [
        'text' => 'При заказе двух процедур — скидка 15% на домашний уход',
    ],
    [
        'text' => 'Подарочный сертификат <br>на услуги салона',
    ],
    [
        'text' => 'Бесплатная диагностика волос перед процедурой',
    ],
];
?>

<section class="section common-additional-services-section relative">
    <div class="section-bg common-additional-services-section-bg rtl">
        <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-207 1C-207 1 254.393 128.603 563.743 146.153C802.648 159.706 940.505 152.527 1176.27 120.409C1366.53 94.4909 1504.74 120.409 1703 120.409C1885.02 120.409 2123.05 148.995 2255 188" stroke="#967866" stroke-opacity="0.2" />
            <rect x="1643" y="111" width="18" height="18" rx="9" fill="#EAE4E0" />
        </svg>
    </div>
    <div class="section-bg common-additional-services-section-bg reverse">
        <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-318 1C-318 1 143.393 128.603 452.743 146.153C691.648 159.706 829.505 178.271 1065.27 146.153C1255.53 120.235 1389.24 109.244 1587.5 109.244C1769.52 109.244 2012.05 148.995 2144 188" stroke="#967866" stroke-opacity="0.2" />
            <rect x="1722" y="107" width="18" height="18" rx="9" fill="#EAE4E0" />
        </svg>
    </div>
    <div class="container">
        <div class="section-content">
            <h2 class="h2 mb-sm mb-s_responsive text-second-dark services-title">Другие наши услуги</h2>
            <div class="additional-services-list mb-sm">
                <?php foreach ($additional_services_list as $service): ?>
                    <div class="additional-services-item content_text">
                        <div class="additional-services-image-wrapper">
                            <img class="img-cover" src="<?php get_media_placeholder(); ?>" data-src="<?php echo $service['image']; ?>" alt="<?php echo $service['name']; ?>" title="<?php echo $service['name']; ?> (изображение)">
                        </div>
                        <div class="additional-services-item-wrapper flex flex-col w-full">
                            <div class="additional-services-item__title  weight-600"><?php echo $service['name']; ?></div>
                            <div class="additional-services-item__desc weight-500">
                                <?php echo $service['desc']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="special-offers">
                <div class="special-offers__title text-white weight-400">Специальные предложения</div>
                <div class="special-offers__items flex flex-wrap flex-gap-m">
                    <?php foreach ($special_offers_list as $proposal): ?>
                        <div class="special-offers__item weight-600 text-m text-white flex justify-center items-center">
                            <?php echo $proposal['text']; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 37.1437C0 37.1437 89.9547 12.2657 150.267 8.84419C196.844 6.20182 223.721 7.60154 269.688 13.8634C306.781 18.9164 332.85 21.0592 371.503 21.0592C406.99 21.0592 454.274 8.29012 480 0.685547" stroke="#967866" stroke-opacity="0.2" />
            <rect width="16" height="16" rx="8" transform="matrix(1 0 0 -1 95 21.2852)" fill="#EAE4E0" />
        </svg>
    </div>
    <div class="section-bg-mobile reverse">
        <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M480 37.4425C480 37.4425 390.045 12.5646 329.733 9.14302C283.156 6.50065 256.279 7.90037 210.312 14.1622C173.219 19.2152 147.15 21.3581 108.497 21.3581C73.0095 21.3581 25.7257 8.58895 9.98378e-06 0.984375" stroke="#967866" stroke-opacity="0.2"/>
        <rect x="385" y="21.5845" width="16" height="16" rx="8" transform="rotate(180 385 21.5845)" fill="#EAE4E0"/>
        </svg>
    </div>
</section>