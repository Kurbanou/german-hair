
<div class="container">
    <?php
if (post_password_required()) return;

echo '<div class="faq-comments">';

if (have_comments()) {
    echo '<h3>' . get_comments_number() . ' отзывов</h3>';
    wp_list_comments([
        'style' => 'ul',
        'avatar_size' => 40,
        'callback' => null, // можно заменить на свою функцию
    ]);
}

comment_form([
    'title_reply' => 'Оставьте отзыв',
    'label_submit' => 'Отправить',
]);

echo '</div>';
?>

</div>


