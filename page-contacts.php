<?php

/**
 * Template Name: contacts
 * Description: Шаблон страницы "Контакты"
 */

get_header();

$sections = [
	'title',
];
foreach ($sections as $section) {
	if (locate_template("template-parts/contacts/contacts-{$section}.php")) {
		get_template_part("template-parts/contacts/contacts", $section);
	}
}

get_footer();
