<?php

/**
 * Template Name: obuchenie
 * Description: Шаблон страницы "Обучение"
 */

get_header();


$sections = [
	'banner',
	'benefits',
	'author',
	'location',
	'choice',
	'junior',
	'program',
	'hand',
	'pricing',
	'certificate',
	'date',

];
foreach ($sections as $section) {
	if (locate_template("template-parts/obuchenie/obuchenie-{$section}.php")) {
		get_template_part("template-parts/obuchenie/obuchenie", $section);
	}
}


$post_id = get_the_ID(); //  обязательно для data-post-id
// Вывод FAQ-блоков
$faq_items = carbon_get_post_meta($post_id, 'faq_items');
if (!empty($faq_items)) {
	get_template_part('template-parts/faq');
}

// Комментарии
get_template_part('template-parts/comments/comments', 'container');


// Форма комментария
get_template_part('template-parts/comments/comments-obuchenie', 'form');

get_footer();
