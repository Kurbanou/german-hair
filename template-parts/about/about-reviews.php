<?php

/**
 * Displays about reviews section
 */

?>

<section class="about-reviews">
    <div class="container">
        <h2 class="h2 text-second-dark">Отзывы клиентов</h2>
        <?php

        $reviews = carbon_get_post_meta(get_queried_object_id(), 'page_reviews');
        if (!empty($reviews)) {
            echo "<script>console.log('Отзывы:', " . json_encode($reviews, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . ");</script>";

            get_template_part('template-parts/reviews'); // подключаем reviews.php
        }
        ?>
        <button class="btn btn-light btn-glowing">Читать все отзывы</button>
    </div>
    <div class="section-bg-mobile">
        <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0.786099C0 0.786099 89.9547 25.6641 150.267 29.0856C196.844 31.728 223.721 30.3283 269.688 24.0665C306.781 19.0134 332.85 16.8706 371.503 16.8706C406.99 16.8706 454.274 29.6397 480 37.2443" stroke="#967866" stroke-opacity="0.2" />
            <rect x="95" y="16.6447" width="16" height="16" rx="8" fill="#EAE4E0" />
        </svg>
    </div>
</section>