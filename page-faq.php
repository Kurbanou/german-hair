<?php

/**
 * Template Name: faq
 * Description: Шаблон страницы "Вопросы и ответы"
 */

get_header();

$sections = [
    'title',
    'content'
];
foreach ($sections as $section) {
    if (locate_template("template-parts/faq/faq-{$section}.php")) {
        get_template_part("template-parts/faq/faq", $section);
    }
}

$faq_items = carbon_get_post_meta(get_the_ID(), 'faq_items');

if (!empty($faq_items)) {
    get_template_part('template-parts/faq'); // подключаем faq.php
}

// вывод коментов
$approved_comments = get_comments([
    'post_id' => get_the_ID(),
    'status'  => 'approve',
]);

if (!empty($approved_comments)) {
    get_template_part('template-parts/comments/comments', 'list');
}

// вывод формы
get_template_part('template-parts/comments/comment', 'form');


get_footer();
