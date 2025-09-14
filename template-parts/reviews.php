<?php
/**   
 * Description: блок 2 коментария для страницы "О нас" через carbon
 */

$reviews = carbon_get_post_meta(get_queried_object_id(), 'page_reviews');

if (empty($reviews)) {
    $reviews = carbon_get_theme_option('client_reviews');
}

// Сортируем по дате (сначала новые)
usort($reviews, function ($a, $b) {
    return strtotime($b['created_at']) - strtotime($a['created_at']);
});

// Оставляем только 2 последних
$reviews = array_slice($reviews, 0, 2);



if (!empty($reviews)): ?>

    <div class="reviews-list">
        <?php foreach ($reviews as $review): ?>
            <div class="review-card">
                <div class="review-head">
                    <div class="review-img">
                        <?php if (!empty($review['photo'])): ?>
                            <img
                                src="<?= esc_url(wp_get_attachment_image_url($review['photo'], 'thumbnail')); ?>"
                                alt="<?= esc_attr($review['name']); ?>"
                                loading="lazy" />
                        <?php endif; ?>
                    </div>

                    <div class="review-author">
                        <?= esc_html($review['name']); ?>
                        <?php if (!empty($review['age'])): ?>
                            , <?= esc_html($review['age']) . ' ' . plural_years($review['age']); ?>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="review-text">
                    <?php if (!empty($review['text'])): ?>
                        <?= esc_html($review['text']); ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>