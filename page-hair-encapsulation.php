<?php

/**
 * Template Name: hair-encapsulation
 * Description: Шаблон страницы "Капсуляция волос"
 */

get_header();


$sections = [
	'banner',
	'necessity',
	'how-many',
	'advantages',
	'process',
	'result', 
	'price', 
	'update', 
	'choose-up',
];
foreach ($sections as $section) {
	if (locate_template("template-parts/hair-encapsulation/encapsulation-{$section}.php")) {
		get_template_part("template-parts/hair-encapsulation/encapsulation", $section);
	}
}

get_template_part( 'template-parts/common/common', 'team-section' );
get_template_part( 'template-parts/common/common', 'additional-services' );

// Форма
get_template_part('template-parts/comments/comments-removal', 'form');

get_footer();
