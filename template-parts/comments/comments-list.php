<?php
/**
 * Шаблон: Комментарии с пагинацией и датой "n дней назад"
 */

$post_id = get_query_var('post_id') ?: get_the_ID();
$comments_per_page = 4;

// Получаем все одобренные комментарии
$all_comments = get_comments([
    'post_id' => $post_id,
    'status'  => 'approve',
    'type'    => 'comment', // исключаем pingback/trackback
    'orderby' => 'comment_date',
    'order'   => 'ASC',
]);

// Группируем по parent_id
$grouped = [];
foreach ($all_comments as $comment) {
    $grouped[$comment->comment_parent][] = $comment;
}

$ordered_comments = flatten_comments($grouped);

// Вывод контейнеров
echo '<ul id="comment-list" class="comment-list"></ul>';
echo '<nav class="comment-pagination"><ul id="pagination-list" class="pagination-list"></ul></nav>';

// Передаём данные в JS
echo '<script>';
echo 'window.allComments = ' . wp_json_encode($ordered_comments) . ';';
echo 'window.commentsPerPage = ' . $comments_per_page . ';';
echo 'console.log("allComments:", window.allComments);';
echo 'console.log("commentsPerPage:", window.commentsPerPage);';
echo '</script>';
