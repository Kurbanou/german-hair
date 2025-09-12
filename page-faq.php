<?php

/**
 * Template Name: faq
 * Description: Шаблон страницы "Вопросы и ответы"
 */

get_header();

$post_id = get_the_ID(); // ✅ обязательно для data-post-id

// Секции FAQ
$sections = ['title', 'content'];
foreach ($sections as $section) {
    if (locate_template("template-parts/faq/faq-{$section}.php")) {
        get_template_part("template-parts/faq/faq", $section);
    }
}

// Вывод FAQ-блоков
$faq_items = carbon_get_post_meta($post_id, 'faq_items');
if (!empty($faq_items)) {
    get_template_part('template-parts/faq');
}

// Контейнер комментариев
echo '<div id="faq-comments-container" data-post-id="' . esc_attr($post_id) . '">';

// Вывод комментариев
$approved_comments = get_comments([
    'post_id' => $post_id,
    'status'  => 'approve',
]);

if (!empty($approved_comments)) {
    get_template_part('template-parts/comments/comments', 'list');
} else {
    echo '<p>Пока нет комментариев. Будьте первым!</p>';
}

echo '</div>';

// Форма комментария
get_template_part('template-parts/comments/comment', 'form');

get_footer();
