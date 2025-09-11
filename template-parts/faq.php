<?php

$faq_title = carbon_get_post_meta(get_the_ID(), 'faq_title');
$faq_items = carbon_get_post_meta(get_the_ID(), 'faq_items');

if (!$faq_items) return;
?>

<section class="faq-section">
    <div class="container">
        <?php if ($faq_title): ?>
            <h2 class="faq-title"><?= esc_html($faq_title); ?></h2>
        <?php endif; ?>

        <div class="faq-list">
            <?php foreach ($faq_items as $index => $item): ?>
                <div class="faq-item">
                    <div class="faq-question" data-index="<?= $index; ?>">
                        <?= esc_html($item['question']); ?>
                        <?php get_icon('faq-arrow', 'm'); ?>
                    </div>
                    <div class="faq-answer">
                        <?= apply_filters('the_content', $item['answer']); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="section-bg-mobile rtl">
        <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M480 37.1269C480 37.1269 390.045 12.2489 329.733 8.82738C283.156 6.18501 256.279 7.58472 210.312 13.8465C173.219 18.8996 147.15 21.0424 108.497 21.0424C73.0095 21.0424 25.7257 8.2733 9.98378e-06 0.668732" stroke="#967866" stroke-opacity="0.2" />
            <rect x="385" y="21.2684" width="16" height="16" rx="8" transform="rotate(180 385 21.2684)" fill="#EAE4E0" />
        </svg>

    </div>
</section>