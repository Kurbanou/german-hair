<?php

/**
 * Breadcrumbs template
 * Usage: get_template_part('template-parts/breadcrumbs');
 */

if (is_front_page()) {
    return; // не выводим на главной
}
?>
<div class="container">
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="<?= esc_url(home_url('/')); ?>">Главная</a> &gt;

        <?php if (is_singular('post')) : ?>
            <span><?= esc_html(get_the_title()); ?></span>

        <?php elseif (is_page()) : ?>
            <span><?= esc_html(get_the_title()); ?></span>

        <?php elseif (is_category()) : ?>
            <span><?= single_cat_title('', false); ?></span>

        <?php elseif (is_tag()) : ?>
            <span><?= single_tag_title('', false); ?></span>

        <?php elseif (is_search()) : ?>
            <span>Результаты поиска: <?= esc_html(get_search_query()); ?></span>

        <?php elseif (is_archive()) : ?>
            <span><?= post_type_archive_title('', false); ?></span>

        <?php elseif (is_404()) : ?>
            <span>Страница не найдена</span>

        <?php else : ?>
            <span><?= esc_html(get_the_title()); ?></span>
        <?php endif; ?>
    </nav>

</div>