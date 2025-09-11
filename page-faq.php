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

get_footer();
