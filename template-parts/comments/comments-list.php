<?php
/**
 * Шаблон: Комментарии с пагинацией и датой "n дней назад"
 */

$post_id = get_query_var('post_id') ?: get_the_ID();
$comments_per_page = 2;

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

// Рекурсивная функция для плоской структуры: родитель → ответы
function flatten_comments($grouped, $parent_id = 0, $now = null) {
    $result = [];
    $now = $now ?: time();

    foreach ($grouped[$parent_id] ?? [] as $comment) {
        $user = get_userdata($comment->user_id);
        $comment_data = [
            'id'             => $comment->comment_ID,
            'parent_id'      => $comment->comment_parent,
            'author'         => get_comment_author($comment),
            'author_role'    => $user?->roles[0] ?? '',
            'content'        => $comment->comment_content,
            'raw_date'       => $comment->comment_date,
            'days_ago'       => floor(($now - strtotime($comment->comment_date)) / 86400),
            'formatted_date' => human_time_diff(strtotime($comment->comment_date), $now) . ' назад',
            'is_reply'       => $comment->comment_parent != 0,
        ];

        $result[] = $comment_data;
        $result = array_merge($result, flatten_comments($grouped, $comment->comment_ID, $now));
    }

    return $result;
}

$ordered_comments = flatten_comments($grouped);

// Вывод контейнеров
echo '<ul id="comment-list" class="comment-list"></ul>';
echo '<nav class="comment-pagination"><ul id="pagination-list" class="pagination-list"></ul></nav>';

// Передаём данные в JS
echo '<script>';
echo 'const allComments = ' . wp_json_encode($ordered_comments) . ';';
echo 'const commentsPerPage = ' . $comments_per_page . ';';
echo 'console.log(allComments);';
echo 'console.log(commentsPerPage);';

echo '</script>';


