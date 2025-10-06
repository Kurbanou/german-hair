<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part( 'template-parts/icons/sprite' ); ?>
<?php if ( is_front_page() ) get_template_part( 'template-parts/icons/home-sprite' ); ?>
	<div id="page" class="site">
		<header class="header header-floating">
			<?php //if ( is_front_page() ) get_template_part( 'template-parts/home/home', 'banner' );?>
			<?php get_template_part( 'template-parts/header/header', 'content' ); ?>
		</header>
		<main id="main" class="site-main <?php if ( !is_front_page() ) echo 'page-content'; ?>">