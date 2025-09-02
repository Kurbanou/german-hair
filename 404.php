<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="container error-container">
	<div class="error-404 not-found">
		<h1>Не удалось найти страницу</h1>
	</div>
</div>

<?php

get_template_part( 'template-parts/article/article', 'list' );
get_footer();
