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

/* Фон для десктопа */
function render_bg_desktop__additional($template_slug) {
    if ($template_slug === 'page-hair-extension-capsule') { ?>
            <div class="section-bg common-additional-services-section-bg rtl extension-capsule">
                <svg width="1920" height="165" viewBox="0 0 1920 165" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-119 164.527C-119 164.527 287.014 37.0338 559.235 19.4993C769.465 5.95782 890.776 13.131 1098.25 45.2212C1265.67 71.1168 1382.12 36.0636 1554.5 45.2212C1714.5 53.7212 1844.39 39.9715 1960.5 1" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="256" y="54" width="18" height="18" rx="9" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-removal') { ?>
            <div class="section-bg common-additional-services-section-bg rtl hair-removal">
                <svg width="1920" height="298" viewBox="0 0 1920 298" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2562 297.5C2562 297.5 2085.18 241.54 1764 159.5C1580 112.5 1368.62 97.4487 1116.5 136.5C913.05 168.013 692 147.5 486 136.5C291.571 126.118 105.101 48.4253 -36 1" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 313 100)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-correction') { ?>
            <div class="section-bg common-additional-services-section-bg rtl hair-correction">
                <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-207 1C-207 1 254.393 128.603 563.743 146.153C802.648 159.706 940.505 152.527 1176.27 120.409C1366.53 94.4909 1504.74 120.409 1703 120.409C1885.02 120.409 2123.05 148.995 2255 188" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="1643" y="111" width="18" height="18" rx="9" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-encapsulation') { ?>
            <div class="section-bg common-additional-services-section-bg rtl hair-encapsulation">
                <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2121 1C2121 1 1659.61 128.603 1350.26 146.153C1111.35 159.706 973.495 152.527 737.726 120.409C547.469 94.4909 413.757 83.5 215.5 83.5C33.4779 83.5 -209.049 148.995 -341 188" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 1611 107)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } else { ?> 
            <div class="section-bg common-additional-services-section-bg rtl extension-tape">
                <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-318 1C-318 1 143.393 128.603 452.743 146.153C691.648 159.706 829.505 178.271 1065.27 146.153C1255.53 120.235 1389.24 109.244 1587.5 109.244C1769.52 109.244 2012.05 148.995 2144 188" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="1722" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php }
}

/* Фон для мобильной версии */
function render_bg_mobile__additional($template_slug) {
        if ($template_slug === 'page-hair-extension-capsule') { ?>
            <div class="section-bg-mobile mob-extension-capsule">
                <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-3.18727e-06 0.676602C-3.18727e-06 0.676602 89.9547 25.5546 150.267 28.9761C196.844 31.6185 223.721 30.2188 269.688 23.9569C306.781 18.9039 332.85 16.7611 371.503 16.7611C406.99 16.7611 454.274 29.5302 480 37.1347" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="417" y="15.4004" width="16" height="16" rx="8" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-removal') { ?>
            <div class="section-bg-mobile mob-hair-removal">
                <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M480 1.16098C480 1.16098 390.045 26.0389 329.733 29.4605C283.156 32.1028 256.279 30.7031 210.312 24.4413C173.219 19.3882 147.15 17.2454 108.497 17.2454C73.0095 17.2454 25.7257 30.0145 9.98378e-06 37.6191" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="16" height="16" rx="8" transform="matrix(-1 -1.74846e-07 -1.74846e-07 1 385 17.0195)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-correction') { ?>
            <div class="section-bg-mobile mob-hair-correction">
                <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 37.1437C0 37.1437 89.9547 12.2657 150.267 8.84419C196.844 6.20182 223.721 7.60154 269.688 13.8634C306.781 18.9164 332.85 21.0592 371.503 21.0592C406.99 21.0592 454.274 8.29012 480 0.685547" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="16" height="16" rx="8" transform="matrix(1 0 0 -1 95 21.2852)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-encapsulation') { ?>
            <div class="section-bg-mobile mob-hair-encapsulation">
                <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M480 37.4445C480 37.4445 390.045 12.5665 329.733 9.14498C283.156 6.5026 256.279 7.90232 210.312 14.1641C173.219 19.2172 147.15 21.36 108.497 21.36C73.0095 21.36 25.7257 8.5909 9.98378e-06 0.986328" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="385" y="21.5859" width="16" height="16" rx="8" transform="rotate(180 385 21.5859)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } else { ?> 
            <div class="section-bg-mobile mob-extension-tape">
                <svg width="100%" height="100%"  viewBox="0 0 480 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 32.1728C0 32.1728 72.0736 5.80587 120.397 2.17957C157.716 -0.620945 179.25 0.862543 216.079 7.49912C245.799 12.8546 258.932 15.4359 289.088 21.7741C310.75 26.327 326.521 28.3624 347.133 20.3027C360.537 15.0615 379.568 4.05772 393.84 2.17958C422.976 -1.65452 447.501 12.1773 480 14.5164" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="46" y="6.3374" width="16" height="16" rx="8" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php }
    }
?>

<section class="section common-additional-services-section relative">

    <?php render_bg_desktop__additional($template_slug); ?>
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
    <?php render_bg_mobile__additional($template_slug); ?>

</section>