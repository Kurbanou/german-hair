<?php

/**
 * Additional features to allow styling of the templates
 */

function is_front_page_not_home()
{
	return (is_front_page() && ! is_home());
}

function get_body_classes($classes)
{
	global $paged;

	if (is_front_page() && is_home()) {
		$classes[] = 'home-page';
	}

	return $classes;
}
add_filter('body_class', 'get_body_classes');

function get_phone_formated(string $phone)
{
	return preg_replace('/^\+?\d(\d{3})(\d{3})(\d{2})(\d{2})$/', '+7 ($1) $2-$3-$4', $phone);
}

function get_phone_href(string $phone): string
{
	// Очищаем номер от всего, кроме цифр и плюса
	$clean = preg_replace('/[^\d+]/', '', $phone);
	return 'tel:' . $clean;
}

function get_icon(string $id, string $size = 'l')
{
	echo "<svg class=\"svg-container icon-size-$size\" xmlns=\"http://www.w3.org/2000/svg\"><use xlink:href=\"#icon-$id\"></use></svg>";
}

function get_icon_none_class(string $id)
{
	echo "<svg> <use xlink:href=\"#icon-$id\"></use></svg>";
}

function get_footer_content(string $content)
{

	$replacements = array(
		'{copyright}'    => '&copy;',
		'{current-year}' => date('Y'),
		'{site-title}'   => get_bloginfo('name'),
		'{copyright-text}'   => 'All rights reserved',
	);

	return str_replace(array_keys($replacements), array_values($replacements), $content);
}

function get_logo(string $type = '')
{
	$defaultLogo = GH_THEME_DIR . 'assets/icons/logo.svg';
	$logoUri = get_theme_mod('header_svg_logo_setting', $defaultLogo);
	if (file_exists($logoUri)) {
		if ($type === 'inline') {
			printf('<span class="i-logo inline-logo">%1$s</span>', file_get_contents($logoUri), esc_html(GH_THEME_NAME));
		} else if ($type === 'inline-small') {
			printf('<span class="i-logo inline-logo inline-logo_size-s">%1$s</span>', file_get_contents($logoUri), esc_html(GH_THEME_NAME));
		} else if ($type === 'large') {
			printf('<span class="i-logo large-logo">%1$s</span>', file_get_contents($logoUri), esc_html(GH_THEME_NAME));
		} else if (is_home()) {
			printf('<div class="i-logo flex">%1$s</div>', file_get_contents($logoUri), esc_html(GH_THEME_NAME));
		} else {
			printf('<a href="%1$s" title="%2$s" class="i-logo flex logo-href">%3$s</a>', esc_url(home_url()), esc_html(GH_THEME_NAME), file_get_contents($logoUri));
		}
	} else {
		printf('<a href="%1$s" title="%2$s" class="i-logo custom-logo-text">%2$s</a>', esc_url(home_url()), esc_html(GH_THEME_NAME));
	}
}

function get_services_prices($format_names = false, $format_prices = false, $cur = 'руб')
{
	$customizer_services = get_theme_mod('services_prices', '');
	$c_services = json_decode($customizer_services, true);
	$services = [];

	if (!is_services_set($c_services)) return [];


	foreach ($c_services as $c_service) {
		if (!$c_service['name'] || !$c_service['price']) continue;
		$services[] = [
			'name' => $format_names
				? '▸ ' . $c_service['name']
				: $c_service['name'],
			'desc' => $c_service['desc'],
			'price' => $format_prices
				? ('от ' . number_format($c_service['price'] ?: 0, 0, '.', ' ') . ' ' . $cur)
				: $c_service['price']
		];
	}

	return $services;
}

function is_services_set($services)
{
	return $services && isset($services) && is_array($services) && !empty($services);
}

function get_media_placeholder()
{
	echo "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP88OHjfwAJewPSoCFtSwAAAABJRU5ErkJggg==";
}


// Рекурсивная функция для плоской структуры: родитель → ответы
function plural_form($number, $forms)
{
	$number = abs($number) % 100;
	$n1 = $number % 10;

	if ($number > 10 && $number < 20) return $forms[2];
	if ($n1 > 1 && $n1 < 5) return $forms[1];
	if ($n1 == 1) return $forms[0];
	return $forms[2];
}

function format_human_date($raw_date, $now = null)
{
	$timestamp = strtotime($raw_date);
	if (!$timestamp) return '';

	$now = $now ?: time();
	$diff = $now - $timestamp;
	$time = date('H:i', $timestamp);

	if ($diff < 60) {
		$label = 'только что';
	} elseif ($diff < 3600) {
		$minutes = floor($diff / 60);
		$label = "{$minutes} " . plural_form($minutes, ['минута', 'минуты', 'минут']) . " назад";
	} elseif ($diff < 86400) {
		$hours = floor($diff / 3600);
		$label = "{$hours} " . plural_form($hours, ['час', 'часа', 'часов']) . " назад";
	} else {
		$days = floor($diff / 86400);
		$label = $days === 1
			? 'вчера'
			: "{$days} " . plural_form($days, ['день', 'дня', 'дней']) . " назад";
	}

	return "{$label}, {$time}";
}



function flatten_comments($grouped, $parent_id = 0, $now = null)
{
	$result = [];
	$now = $now ?: time();

	foreach ($grouped[$parent_id] ?? [] as $comment) {
		$user = get_userdata($comment->user_id);
		$timestamp = strtotime($comment->comment_date);
		$days = $timestamp ? floor(($now - $timestamp) / 86400) : null;

		$comment_data = [
			'id'             => $comment->comment_ID,
			'parent_id'      => $comment->comment_parent,
			'author'         => get_comment_author($comment),
			'author_role'    => $user?->roles[0] ?? '',
			'content'        => $comment->comment_content,
			'raw_date'       => $comment->comment_date,
			'days_ago'       => $days,
			'formatted_date' => format_human_date($comment->comment_date, $now),
			'is_reply'       => $comment->comment_parent != 0,
		];

		$result[] = $comment_data;
		$result = array_merge($result, flatten_comments($grouped, $comment->comment_ID, $now));
	}

	return $result;
}

// Функция для форматирования номера в ссылку WhatsApp
function get_whatsapp_link($phone)
{
	$clean_number = preg_replace('/\D+/', '', $phone); // убираем всё кроме цифр
	return 'https://wa.me/' . $clean_number;
}
