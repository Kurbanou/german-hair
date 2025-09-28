<?php

/**
 * Template Name: extension-tape
 * Description: Шаблон страницы "Ленточное наращивание"
 */

get_header();


$sections = [
	'banner',
	'guarantees',
	'mistakes',
	'withdrawal',
	'price',
	'advantages',
];
foreach ($sections as $section) {
	if (locate_template("template-parts/removal/removal-{$section}.php")) {
		get_template_part("template-parts/removal/removal", $section);
	}
}

get_template_part('template-parts/common/common', 'team-section');
get_template_part('template-parts/common/common', 'additional-services');

// Форма
get_template_part('template-parts/comments/comments-removal', 'form');

get_footer();
