<?php

/**
 * Template Name: container comments
 * Description: Шаблон страницы "Вопросы и ответы"
 */



// Контейнер комментариев
echo '<section id="faq-comments-container" data-post-id="' . esc_attr($post_id) . '">';

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

echo '</section>';
