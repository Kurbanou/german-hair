<?php
wp_enqueue_style('reviews-style', get_template_directory_uri() . '/assets/css/unminified/reviews.css', [], '1.0');

$page_id = get_the_ID();
$reviews = carbon_get_post_meta($page_id, 'page_reviews');

if (empty($reviews)) {
    $reviews = carbon_get_theme_option('client_reviews');
}

usort($reviews, function ($a, $b) {
    return strtotime($b['created_at']) - strtotime($a['created_at']);
});

if (!empty($reviews)): ?>
    
    <div class="reviews-list">
        <?php foreach ($reviews as $review): ?>
            <div class="review-card">
                <div class="review-head">
                    <div class="review-img"
                        style="
                            <?php if (!empty($review['photo'])): ?>
                                background-image: url('<?= wp_get_attachment_image_url($review['photo'], 'thumbnail'); ?>');
                                background-size: cover;
                                background-position: center;
                            <?php else: ?>
                                background-color: rgba(242, 242, 242, 1);
                            <?php endif; ?>
                            border-radius: 50%;
                            width: 70px;
                            height: 70px;
                        ">
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