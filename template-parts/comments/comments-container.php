<?php

/** 
 * Description: контейнер для страницы "Вопросы и ответы"
 */

$post_id = get_the_ID();

// Получаем одобренные комментарии
$approved_comments = get_comments([
    'post_id' => $post_id,
    'status'  => 'approve',
]);

// Показываем секцию только если есть комментарии
if (!empty($approved_comments)) {
    echo '<section class="faq-comments" id="faq-comments-container" data-post-id="' . esc_attr($post_id) . '">';
    echo '<div class="container">';
    echo '<h3 class="h3 text-second-dark mb-sm">Ваши вопросы</h3>';
    get_template_part('template-parts/comments/comments', 'list');
    echo '</div>';
    echo '</section>';
}
