<?php
$page_id = get_the_ID();
$reviews = carbon_get_post_meta($page_id, 'page_reviews');

if (empty($reviews)) {
    $reviews = carbon_get_theme_option('client_reviews');
}

usort($reviews, function ($a, $b) {
    return strtotime($b['created_at']) - strtotime($a['created_at']);
});

if ($reviews): ?>
    <section class="comments-page">
        <h1>
            <?= esc_html(
                carbon_get_post_meta($page_id, 'reviews_title') ?: 'Отзывы клиентов'
            ); ?>
        </h1>
        <div class="reviews-list">
            <?php foreach ($reviews as $review): ?>
                <div class="review-card">
                    <?php if (!empty($review['photo'])): ?>
                        <img src="<?= wp_get_attachment_image_url($review['photo'], 'medium'); ?>" alt="<?= esc_attr($review['name']); ?>">
                    <?php endif; ?>
                    <p class="review-text"><?= esc_html($review['text']); ?></p>
                    <p class="review-author"><?= esc_html($review['name']) . ', ' . esc_html($review['age']) . ' лет'; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>