<?php

/**
 * Breadcrumbs template
 * Usage: get_template_part('template-parts/breadcrumbs');
 */


if (is_front_page()) {
    return;
}

$object = get_queried_object();
$title = '';

if (is_home()) {
    $page_for_posts_id = get_option('page_for_posts');
    $title = $page_for_posts_id ? get_the_title($page_for_posts_id) : 'Блог';
} elseif (is_singular()) {
    $title = isset($object->post_title) ? $object->post_title : '';
} elseif (is_category() || is_tag() || is_tax()) {
    $title = isset($object->name) ? $object->name : '';
} elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
} elseif (is_author()) {
    $title = get_the_author_meta('display_name', $object->ID);
} elseif (is_search()) {
    $title = 'Результаты поиска: ' . get_search_query();
} elseif (is_404()) {
    $title = 'Страница не найдена';
} elseif (is_archive()) {
    $title = get_the_archive_title();
}
?>

<div class="container">
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="<?= esc_url(home_url('/')); ?>">Главная</a> &gt;
        <span><?= esc_html($title); ?></span>
    </nav>
</div>