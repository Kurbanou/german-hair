<?php

/**
 * Displays about reviews section
 */

?>

<section class="about-reviews">
    <div class="container">
        <h2 class="h2 text-second-dark">Отзывы клиентов</h2>

        <?php
        $reviews = carbon_get_post_meta(get_the_ID(), 'page_reviews');

        if (!empty($reviews)) {
            get_template_part('template-parts/reviews'); // подключаем reviews.php
        }
        ?>




    </div>
</section>