<?php

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define('GH_THEME_VERSION', '1.0.0');
define('GH_THEME_NAME', 'German Hair');
define('GH_THEME_DIR', trailingslashit(get_template_directory()));
define('GH_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
define('GH_THEME_ASSETS_URI', GH_THEME_URI . 'dist');

/**
 * Setup helper functions.
 */
require GH_THEME_DIR . 'inc/common-functions.php';

/**
 * Enqueues scripts and styles
 */
require GH_THEME_DIR . 'inc/classes/class-enqueue-scripts.php';

/**
 * Additional features to allow styling of the templates.
 */
require GH_THEME_DIR . 'inc/template-functions.php';

/**
 * Customizer.
 */
require GH_THEME_DIR . 'inc/customizer/customizer.php';

add_theme_support('title-tag');

add_filter('show_admin_bar', '__return_false');

/**
 * Инициализация Carbon Fields (если включено и доступно)
 */

use Carbon_Fields\Carbon_Fields;

add_action('after_setup_theme', function () {
	if (class_exists('\Carbon_Fields\Carbon_Fields')) {
		Carbon_Fields::boot();
	}
});

// Подключаем регистрацию полей после boot
add_action('carbon_fields_register_fields', function () {
	require_once GH_THEME_DIR . 'inc/carbon-fields.php';
});
