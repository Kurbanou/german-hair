<?php
/**
 * Customizer
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'CUSTOMIZER_DIR', GH_THEME_DIR . '/inc/customizer' );

/**
 * Enqueue scripts for our Customizer preview
 *
 * @return void
 */
if ( ! function_exists( 'gh_customizer_preview_scripts' ) ) {
	function gh_customizer_preview_scripts() {
		wp_enqueue_script( 'gh-customizer-preview', gh_get_assets_uri( 'customizer-preview', 'js', 'inc/customizer/', true ), array( 'customize-preview', 'jquery' ) );
	}
}
add_action( 'customize_preview_init', 'gh_customizer_preview_scripts' );

// phpcs:disable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require CUSTOMIZER_DIR . '/settings/contacts/class-contacts-customizer.php';
require CUSTOMIZER_DIR . '/settings/home/class-home-customizer.php';
require CUSTOMIZER_DIR . '/settings/services/class-services-customizer.php';
// phpcs:enable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

/**
 * Load all our Customizer Custom Controls
 */
require CUSTOMIZER_DIR . '/custom-controls.php';