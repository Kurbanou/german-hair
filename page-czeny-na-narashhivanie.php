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
?>
<div class="container">
	<section class="czeny content">
		<?php
		while (have_posts()) : the_post();
			the_content();
		endwhile;
		?>
	</section>
</div>
<?php
get_footer();
?>