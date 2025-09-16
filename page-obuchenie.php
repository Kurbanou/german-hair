<?php

/**
 * Template Name: obuchenie
 * Description: Шаблон страницы "Обучение"
 */

get_header();


$sections = [
	
];
foreach ($sections as $section) {
	if (locate_template("template-parts/obuchenie/obuchenie-{$section}.php")) {
		get_template_part("template-parts/obuchenie/obuchenie", $section);
	}
}


$faq_items = carbon_get_post_meta(get_the_ID(), 'faq_items');

if (!empty($faq_items)) {
	get_template_part('template-parts/faq'); // подключаем faq.php
}




get_footer();
