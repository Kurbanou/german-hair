<?php

/**
 * Template Name: about
 * Description: Шаблон страницы "О нас"
 */

get_header();


$sections = [
	'sprite',
	'banner',
	'mission',
	'reasons',
	'benefits',
	'porfolio',
	'prices',
	'reviews',
	'palette',
	'consultation',
];
foreach ($sections as $section) {
	if (locate_template("template-parts/about/about-{$section}.php")) {
		get_template_part("template-parts/about/about", $section);
	}
}

get_footer();
