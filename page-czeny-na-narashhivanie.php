<?php

/**
 * Template Name: czeny-na-narashhivanie
 * Description: Шаблон страницы "Цены на наращивание"
 */

get_header();


$sections = [
	'banner',

];
foreach ($sections as $section) {
	if (locate_template("template-parts/czeny/czeny-{$section}.php")) {
		get_template_part("template-parts/czeny/czeny", $section);
	}
}



get_footer();
