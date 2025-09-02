<?php
/**
 * Displays portfolio list section
 */

$title = isset($args['title']) ? $args['title'] : '';
$posts = isset($args['posts']) ? $args['posts'] : [];

$limit_if_mobile = isset($args['limit_if_mobile']) ? $args['limit_if_mobile'] : false;

$card_name_label = isset($args['card_name_label']) ? $args['card_name_label'] : 'Название';
$card_desc_label = isset($args['card_desc_label']) ? $args['card_desc_label'] : 'Описание';

$use_href = isset($args['card_use_href']) ? $args['card_use_href'] : true;

if (empty($posts)) return;
?>

<div class="common-list<?php echo $limit_if_mobile ? ' common-list_limit_mobile' : ' '; ?>">
    <div class="common-list__header mb-m mb-m_responsive">
        <?php if ( $title ): ?>
            <h3 class="common-list__title h3 text-second-dark"><?php echo esc_html( $title ); ?> :</h3>
        <? endif; ?>
    </div>
    <div class="common-list__body">
        <div class="common-list__items flex flex-gap-l flex-gap-l_responsive flex-wrap flex-max-3">
            <?php foreach ( $posts as $post ): ?>
                <? get_template_part( 'template-parts/common/list/list', 'card', [
                    'post'          => $post,
                    'add_class'     => $limit_if_mobile && wp_is_mobile() ? 'flex-1' : 'flex-03',
                    'name_label'    => $card_name_label,
                    'desc_label'    => $card_desc_label,
                    'use_href'      => $use_href,
                ] ); ?>
            <?php endforeach; ?>
            <? wp_reset_postdata(); ?>
        </div>
    </div>
</div>