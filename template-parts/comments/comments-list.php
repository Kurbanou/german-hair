<?php

/**
 * Шаблон: Вывод одобренных комментариев с пагинацией и датой "n дней назад"
 */



// Получение данных
$post_id = get_query_var('post_id') ?: get_the_ID();
$cpage = get_query_var('cpage') ?: 1;
$comments_per_page = 2;

$comment_count = get_comments([
    'post_id' => $post_id,
    'status'  => 'approve',
    'count'   => true,
]);

$total_pages = ceil($comment_count / $comments_per_page);

// Вывод комментариев
echo '<ul class="comment-list">';

wp_list_comments([
    'type'         => 'comment',
    'status'       => 'approve',
    'style'        => 'ul',
    'avatar_size'  => 40,
    'callback'     => 'custom_comment_renderer',
    'per_page'     => $comments_per_page,
    'page'         => $cpage,
    'reverse_top_level' => false,
]);

echo '</ul>';

// Пагинация
if ($total_pages > 1) {
    echo '<div class="comment-pagination">';
    echo paginate_links([
        'base'      => trailingslashit(get_permalink($post_id)) . 'comment-page-%#%/',
        'format'    => '',
        'current'   => max(1, $cpage),
        'total'     => $total_pages,
        'prev_text' => '← Назад',
        'next_text' => 'Вперёд →',
        'mid_size'  => 2,
        'end_size'  => 1,
        'type'      => 'plain',
    ]);
    echo '</div>';
}
