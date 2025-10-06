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

// Добавляем класс если нет банера
add_filter('body_class', function ($classes) {
    if (is_page() && empty(get_field('fon'))) {
        $classes[] = 'header-dark';
    }
    return $classes;
});

// Включи поддержку комментариев для страниц
add_action('init', function () {
    add_post_type_support('page', 'comments');
});

// проверку токена перед сохранением комментария
add_filter('preprocess_comment', function ($commentdata) {
    if (is_admin()) {
        return $commentdata; // не проверяем капчу в админке
    }

    $token = $_POST['g-recaptcha-response'] ?? '';
    $secret = defined('RECAPTCHA_SECRET_KEY') ? RECAPTCHA_SECRET_KEY : '';

    if (empty($secret)) {
        wp_die('reCAPTCHA не настроена. Обратитесь к администратору.');
    }

    $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
        'body' => [
            'secret'   => $secret,
            'response' => $token,
            'remoteip' => $_SERVER['REMOTE_ADDR'],
        ],
    ]);

    $result = json_decode(wp_remote_retrieve_body($response), true);

    if (empty($result['success'])) {
        wp_die('Ошибка reCAPTCHA. Попробуйте ещё раз.');
    }

    return $commentdata;
});


add_action('wp_enqueue_scripts', function () {
    if (is_singular()) {
        wp_enqueue_script(
            'faq',
            gh_get_assets_uri('faq', 'js'),
            [],
            gh_get_version('faq', 'js'),
            true
        );

        global $post;
        $comments = get_comments([
            'post_id' => $post->ID,
            'status'  => 'approve',
            'orderby' => 'comment_date',
            'order'   => 'ASC',
        ]);

        $prepared = array_map(function ($comment) {
            return [
                'comment_ID'      => $comment->comment_ID,
                'comment_date'    => $comment->comment_date,
                'comment_content' => $comment->comment_content,
                'comment_parent'  => $comment->comment_parent,
                'user_id'         => $comment->user_id,
                'author'          => get_comment_author($comment),
                'author_role'     => get_userdata($comment->user_id)?->roles[0] ?? '',
            ];
        }, $comments);

        wp_localize_script('faq', 'CommentData', [
            'allComments'     => $prepared,
            'commentsPerPage' => 5,
        ]);
    }
});

add_filter('tablepress_table_output', 'wrap_only_table_in_scroll', 10, 2);

function wrap_only_table_in_scroll($output, $table)
{
    // Найдём сам <table>...</table> внутри $output
    if (preg_match('/(<table.*?>.*?<\/table>)/is', $output, $matches)) {
        $table_html = $matches[1];
        $wrapped_table = '<div class="tablepress-scroll">' . $table_html . '</div>';
        // Заменим оригинальный <table> на обёрнутый
        $output = str_replace($table_html, $wrapped_table, $output);
    }
    return $output;
}

// Сохраняем номер телефона как мета-данные комментария
add_action('comment_post', 'save_comment_phone_meta', 10, 3);
function save_comment_phone_meta($comment_ID, $comment_approved, $commentdata)
{
    if (isset($_POST['phone'])) {
        $phone = sanitize_text_field($_POST['phone']);
        add_comment_meta($comment_ID, 'phone', $phone);
    }
}

// Добавляем колонку "Телефон" в админку комментариев
add_filter('manage_edit-comments_columns', 'add_phone_column');
function add_phone_column($columns)
{
    $columns['phone'] = 'Телефон';
    return $columns;
}

add_action('manage_comments_custom_column', 'show_phone_column', 10, 2);
function show_phone_column($column, $comment_ID)
{
    if ($column === 'phone') {
        $phone = get_comment_meta($comment_ID, 'phone', true);
        echo esc_html($phone);
    }
}

// Проверяем, что поле "Телефон" заполнено
add_filter('preprocess_comment', 'validate_phone_field');
function validate_phone_field($commentdata)
{
    if (empty($_POST['phone'])) {
        wp_die('Пожалуйста, укажите номер телефона.');
    }
    return $commentdata;
}

//подключить twentytwenty.js для слайдера до после
function enqueue_twentytwenty_assets()
{
    wp_enqueue_style('twentytwenty-css', 'https://cdn.jsdelivr.net/gh/zurb/twentytwenty@master/css/twentytwenty.css');
    wp_enqueue_script('jquery-event-move', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.event.move/2.0.0/jquery.event.move.min.js', ['jquery'], null, true);
    wp_enqueue_script('twentytwenty-js', 'https://cdn.jsdelivr.net/gh/zurb/twentytwenty@master/js/jquery.twentytwenty.js', ['jquery', 'jquery-event-move'], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_twentytwenty_assets');

// SEO Tags
require_once __DIR__ . '/Kama_SEO_Tags.php';
Kama_SEO_Tags::init();

# Отключение провайдера карт сайтов: пользователи и таксономии
add_filter( 'wp_sitemaps_add_provider', 'kama_remove_sitemap_provider', 10, 2 );

function kama_remove_sitemap_provider( $provider, $name ){

	$remove_providers = [ 'users', 'taxonomies' ];

	// отключаем архивы пользователей
	if( in_array( $name, $remove_providers ) ){
		return false;
	}

	return $provider;
}

