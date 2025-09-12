<?php

/**
 * Шаблон: Комментарии с пагинацией и датой "n дней назад"
 */

$post_id = get_query_var('post_id') ?: get_the_ID();
$comments_per_page = 5;

// Получаем все одобренные комментарии
$all_comments = get_comments([
    'post_id' => $post_id,
    'status'  => 'approve',
    'orderby' => 'comment_date',
    'order'   => 'ASC',
]);

// Группируем: родитель → ответы
$ordered_comments = [];

foreach ($all_comments as $comment) {
    $comment->author = get_comment_author($comment);
    $comment->author_role = get_userdata($comment->user_id)?->roles[0] ?? '';
    $comment->comment_content = $comment->comment_content;
    $comment->comment_date = $comment->comment_date;

    if ($comment->comment_parent == 0) {
        $ordered_comments[] = $comment;

        foreach ($all_comments as $reply) {
            if ($reply->comment_parent == $comment->comment_ID) {
                $reply->author = get_comment_author($reply);
                $reply->author_role = get_userdata($reply->user_id)?->roles[0] ?? '';
                $reply->comment_content = $reply->comment_content;
                $reply->comment_date = $reply->comment_date;
                $ordered_comments[] = $reply;
            }
        }
    }
}

// Вывод контейнеров
echo '<ul id="comment-list" class="comment-list"></ul>';
echo '<nav class="comment-pagination"><ul id="pagination-list" class="pagination-list"></ul></nav>';

// Передаём данные в JS
echo '<script>';
echo 'const allComments = ' . wp_json_encode($ordered_comments) . ';';
echo 'const commentsPerPage = ' . $comments_per_page . ';';
echo '</script>';
