<?php

/**
 * Template Name: extension-tape
 * Description: Шаблон страницы "Ленточное наращивание"
 */

get_header();

$sections = [
	'banner',
	'benefits',
];
foreach ($sections as $section) {
	if (locate_template("template-parts/hair-extension-tape/hair-extension-tape-{$section}.php")) {
		get_template_part("template-parts/hair-extension-tape/hair-extension-tape", $section);
	}
}

get_template_part('template-parts/common/common', 'team-section');
get_template_part('template-parts/common/common', 'additional-services');

// Форма
get_template_part('template-parts/comments/comments-removal', 'form');

get_footer();
