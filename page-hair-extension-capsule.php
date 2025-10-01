<?php

/**
 * Template Name: extension-capsule
 * Description: Шаблон страницы "Капсульное наращивание"
 */

get_header();

$sections = [
	'banner',
	'benefits',
	'process',

];
foreach ($sections as $section) {
	if (locate_template("template-parts/hair-extension-capsule/hair-extension-capsule-{$section}.php")) {
		get_template_part("template-parts/hair-extension-capsule/hair-extension-capsule", $section);
	}
}

get_template_part('template-parts/common/common', 'team-section');
get_template_part('template-parts/common/common', 'additional-services');

// Форма
get_template_part('template-parts/comments/comments-removal', 'form');

get_footer();
