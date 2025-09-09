<?php

/**
 * Displays about prices section
 */

?>

<section class="about-prices">
    <div class="section-bg rtl">
        <svg width="1914" height="137" viewBox="0 0 1914 137" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-936 136C-936 136 -512.318 44.5237 -225.5 23.0001C-3.99629 6.3779 113.404 -16.391 332 22.9998C508.399 54.7868 600.872 36.66 779.86 74.2797C908.43 101.303 1000.66 132.338 1123 84.5C1202.56 53.3908 1338.36 15.789 1423.5 23C1606.5 38.5 1723.5 144.5 1913 31.2021" stroke="#967866" stroke-opacity="0.2" />
            <rect x="1437" y="16" width="18" height="18" rx="9" fill="#EAE4E0" />
        </svg>
    </div>
    <div class="container">
        <h2 class="h2 text-second-dark">Стоимость услуг</h2>
        <?php
        $services = get_posts([
            'post_type' => 'service',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'tax_query' => [
                [
                    'taxonomy' => 'service-tag',
                    'field' => 'slug',
                    'terms' => 'about', //метка
                ],
            ],
            'meta_key' => 'sort',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
        ]);

        ?>

        <div class="price-container">
            <div class="price-head">
                <div class="price-head_item">Услуга</div>
                <div class="price-head_item">Описание</div>
                <div class="price-head_item">Цена</div>
            </div>

            <?php foreach ($services as $service): ?>
                <?php
                $title       = get_the_title($service->ID);
                $description = get_field('description', $service->ID);
                $price_type  = get_field('price_type', $service->ID);
                $measure     = get_field('measure', $service->ID);

                if ($price_type === 'single') {
                    $price = get_field('price', $service->ID);
                    $price_display = "от {$price} ₽";
                } else {
                    $price_from = get_field('price_from', $service->ID);
                    $price_to   = get_field('price_to', $service->ID);
                    $price_display = "от {$price_from} – {$price_to} ₽";
                }
                ?>
                <div class="price-card">
                    <div class="price-card_item"><?= esc_html($title); ?></div>
                    <div class="price-card_item"><?= esc_html($description); ?></div>
                    <div class="price-card_item"><?= esc_html($price_display); ?></div>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
    <div class="section-bg-mobile rtl">
        <svg width="480" height="37" viewBox="0 0 480 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 36.0395C0 36.0395 72.0736 9.67257 120.397 6.04627C157.716 3.24575 179.25 4.72924 216.079 11.3658C245.799 16.7213 258.932 19.3026 289.088 25.6408C310.75 30.1937 326.521 32.2291 347.133 24.1694C360.537 18.9281 379.568 7.92442 393.84 6.04628C422.976 2.21218 447.501 16.044 480 18.3831" stroke="#967866" stroke-opacity="0.2" />
            <rect x="418" y="0.702148" width="16" height="16" rx="8" fill="#EAE4E0" />
        </svg>
    </div>
</section>