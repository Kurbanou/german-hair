<?php

/**
 * Common functions
 */

/**
 * Get assets url depending on constant SCRIPT_DEBUG.
 * If value of this constant is `true` then theme will load unminified assets
 */
function gh_get_assets_uri($filename, $filetype, $folder = 'assets/', $only_unminified = false)
{
	$assets_uri = '';

	// Directory and Extension.
	$file_prefix = (SCRIPT_DEBUG) ? '' : '.min';
	$dir_name    = (SCRIPT_DEBUG) ? 'unminified' : 'minified';

	if ($only_unminified) {
		$css_uri = GH_THEME_URI . $folder . 'css/';
		$js_uri  = GH_THEME_URI . $folder . 'js/';
	} else {
		$css_uri = GH_THEME_URI . $folder . 'css/' . $dir_name . '/';
		$js_uri  = GH_THEME_URI . $folder . 'js/' . $dir_name . '/';
	}

	if ('css' === $filetype) {
		$assets_uri = $css_uri . $filename . $file_prefix . '.' . $filetype;
	} elseif ('js' === $filetype) {
		$assets_uri = $js_uri . $filename . $file_prefix . '.' . $filetype;
	}

	return $assets_uri;
}

/**
 * Get assets version depending on constant DEV_MODE.
 */
function gh_get_version($filename, $filetype, $folder = 'assets/')
{
	if (!defined('DEV_MODE') || !DEV_MODE) return GH_THEME_VERSION;

	$assets_uri = '';

	// Directory and Extension.
	$file_prefix = (SCRIPT_DEBUG) ? '' : '.min';
	$dir_name    = (SCRIPT_DEBUG) ? 'unminified' : 'minified';

	$css_uri = $folder . 'css/' . $dir_name . '/';
	$js_uri  = $folder . 'js/' . $dir_name . '/';

	if ('css' === $filetype) {
		$assets_uri = $css_uri . $filename . $file_prefix . '.' . $filetype;
	} elseif ('js' === $filetype) {
		$assets_uri = $js_uri . $filename . $file_prefix . '.' . $filetype;
	}

	return filemtime(get_theme_file_path($assets_uri));
}

function gh_is_admin()
{
	$is_admin = current_user_can('manage_options');

	return $is_admin ? true : false;
}

function gh_sanitize_phone($input)
{
	$phone = preg_replace('/[^0-9]/', '', $input);
	$phone = '+' . (mb_substr($phone, 0, 1) === '8' ? '7' . mb_substr($phone, 1, strlen($phone)) : $phone);
	return strlen($phone) === 12 ? $phone : '';
}

function gh_sanitize_textarea($input)
{
	return wp_kses_post($input);
}

function gh_sanitize_number($input)
{
	return intval($input);
}

function gh_sanitize_text($text)
{
	return sanitize_text_field($text);
}


function plural_years($age)
{
	$age = (int) $age;
	$last_digit = $age % 10;
	$last_two = $age % 100;

	if ($last_digit == 1 && $last_two != 11) {
		return 'год';
	} elseif (in_array($last_digit, [2, 3, 4]) && !in_array($last_two, [12, 13, 14])) {
		return 'года';
	} else {
		return 'лет';
	}
}
