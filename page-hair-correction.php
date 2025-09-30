<?php

/**
 * Template Name: hair-correction
 * Description: Шаблон страницы "Коррекция волос"
 */

get_header();


$sections = [
	'banner',
	'necessity',
	'how-many',
	'advantages',
	'process',
	'price', 
	// 'advantages',
];
foreach ($sections as $section) {
	if (locate_template("template-parts/hair-correction/correction-{$section}.php")) {
		get_template_part("template-parts/hair-correction/correction", $section);
	}
}

get_template_part( 'template-parts/common/common', 'team-section' );
get_template_part( 'template-parts/common/common', 'additional-services' );

// Форма
get_template_part('template-parts/comments/comments-removal', 'form');

get_footer();
