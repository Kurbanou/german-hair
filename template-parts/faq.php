<?php
$faq_title = carbon_get_post_meta(get_the_ID(), 'faq_title');
$faq_items = carbon_get_post_meta(get_the_ID(), 'faq_items');

if (!$faq_items) return;
?>

<section class="faq-section">
    <?php if ($faq_title): ?>
        <h2 class="faq-title"><?= esc_html($faq_title); ?></h2>
    <?php endif; ?>

    <div class="faq-list">
        <?php foreach ($faq_items as $index => $item): ?>
            <div class="faq-item">
                <button class="faq-question" data-index="<?= $index; ?>">
                    <?= esc_html($item['question']); ?>
                </button>
                <div class="faq-answer" hidden>
                    <?= apply_filters('the_content', $item['answer']); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const answer = btn.nextElementSibling;
            answer.hidden = !answer.hidden;
        });
    });
</script>