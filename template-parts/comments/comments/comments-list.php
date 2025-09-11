<?php
/**
 * Шаблон: Вывод одобренных комментариев с пагинацией и датой "n дней назад"
 */

// Функция форматирования даты
function human_time_diff_custom($comment_date) {
    $timestamp = strtotime($comment_date);
    $now = current_time('timestamp');
    $diff = $now - $timestamp;

    if ($diff < 60) {
        return 'только что';
    } elseif ($diff < 3600) {
        return floor($diff / 60) . ' мин назад';
    } elseif ($diff < 86400) {
        return floor($diff / 3600) . ' ч назад';
    } elseif ($diff < 604800) {
        return floor($diff / 86400) . ' дн назад';
    } else {
        return date('d.m.Y', $timestamp);
    }
}

// Кастомный вывод комментария
function custom_comment_renderer($comment, $args, $depth) {
    $user_id = $comment->user_id;
    $author = get_comment_author($comment);
    $role_class = 'comment-user';

    if ($user_id) {
        $user = get_userdata($user_id);
        if ($user && in_array('administrator', $user->roles)) {
            $role_class = 'comment-manager';
            $author = 'Менеджер ' . $user->display_name;
        }
    }

    $content = get_comment_text($comment);
    $date = human_time_diff_custom($comment->comment_date);

    echo '<li class="' . esc_attr($role_class) . '">';
    echo '<div class="comment-date">' . esc_html($date) . '</div>';
    echo '<div class="comment-body">';  
    echo '<span class="coment-name">' . esc_html($author) . ': </span>';
    echo '<span class="comment-content">' . esc_html($content) . '</span>';    
    echo '</div>';
    echo '</li>';
}

// Вывод комментариев с пагинацией
echo '<section class="faq-comments">';
echo '<div class="container">';
echo '<h3 class="h3 text-second-dark mb-sm">Ваши вопросы</h3>';
echo '<ul class="comment-list">';

wp_list_comments([
    'type'         => 'comment',
    'status'       => 'approve',
    'style'        => 'ul',
    'avatar_size'  => 40,
    'callback'     => 'custom_comment_renderer',
    'per_page'     => 5,
    'reverse_top_level' => false,
]);

echo '</ul>';

// Пагинация
paginate_comments_links([
    'prev_text' => '← Назад',
    'next_text' => 'Вперёд →',
]);

echo '</div>';
echo '</section>';
?>
