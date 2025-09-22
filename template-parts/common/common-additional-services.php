<?php
/**
 * Displays additional services section
 */

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
    <div class="section-bg common-additional-services-section-bg">
        <svg width="1920" height="298" viewBox="0 0 1920 298" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2562 297.5C2562 297.5 2085.18 241.54 1764 159.5C1580 112.5 1368.62 97.4487 1116.5 136.5C913.05 168.013 692 147.5 486 136.5C291.571 126.118 105.101 48.4253 -36 1" stroke="#967866" stroke-opacity="0.2"/>
            <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 313 100)" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="container">
        <div class="section-content">
            <h2 class="h2 mb-sm mb-s_responsive text-second-dark">Другие наши услуги</h2>
            <div class="additional-services-list mb-sm">
                <?php foreach( $additional_services_list as $service ): ?>
                    <div class="additional-services-item content_text">
                        <div class="additional-services-image-wrapper">
                            <img class="img-cover" src="<?php get_media_placeholder(); ?>" data-src="<?php echo $service['image'];?>" alt="<?php echo $service['name'];?>" title="<?php echo $service['name'];?> (изображение)">
                        </div>
                        <div class="additional-services-item-wrapper text-l flex flex-col w-full">
                            <div class="additional-services-item__title  weight-600"><?php echo $service['name'];?></div>
                            <div class="additional-services-item__desc weight-500">
                                <?php echo $service['desc'];?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="special-offers">
                <div class="special-offers__title text-white weight-400">Специальные предложения</div>
                <div class="special-offers__items flex flex-wrap flex-gap-m">
                <?php foreach( $special_offers_list as $proposal ): ?>
                    <div class="special-offers__item weight-600 text-m text-white flex justify-center items-center">
                        <?php echo $proposal['text'];?>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M480 37.1803C480 37.1803 390.045 12.3023 329.733 8.88082C283.156 6.23844 256.279 7.63816 210.312 13.9C173.219 18.953 147.15 21.0958 108.497 21.0958C73.0095 21.0958 25.7257 8.32674 9.98378e-06 0.722168" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="385" y="21.3218" width="16" height="16" rx="8" transform="rotate(180 385 21.3218)" fill="#EAE4E0"/>
        </svg>
    </div>
</section>