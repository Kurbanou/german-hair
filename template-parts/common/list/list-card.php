<?php
/**
 * Displays portfolio card
 */
$post = isset($args['post']) ? $args['post'] : null;
$add_class = isset($args['add_class']) ? $args['add_class'] : '';
$card_name_label = isset($args['name_label']) ? $args['name_label'] : 'Название';
$card_desc_label = isset($args['desc_label']) ? $args['desc_label'] : 'Описание';
$use_href = isset($args['use_href']) ? $args['use_href'] : true;

if (!isset($post) || !$post || empty($post)) return;

$image = get_field('preview_image', $post);
$image_src = $image ? wp_get_attachment_url($image) : '';
$description = get_field('preview_description', $post);
$href = $use_href ? (get_permalink($post) ?: '') : '';
?>

<div class="common-list-card card card-rounded <?php echo esc_html($add_class); ?>">
    <?php if ($href): ?>
        <a href="<?php echo esc_url($href); ?>" class="link-card" title="<?php echo esc_attr(get_the_title($post)); ?>"></a>
    <?php endif; ?>
    <div class="flex flex-col flex-gap-s">
        <div class="common-list-card__image-wrapper <?php echo $image_src ? '' : '_empty'; ?>">
            <?php if ($image_src): ?>
                <img class="img-cover"
                     src="<?php echo esc_url($image_src); ?>"
                     loading="lazy"
                     alt="<?php echo esc_attr(get_the_title($post)); ?>"
                     title="<?php echo esc_attr(get_the_title($post)); ?> (изображение)">
            <?php endif; ?>
        </div>
        <div class="common-list-card__name">
            <div class="_label flex items-center flex-gap-extra-thin text-xs weight-500 text-uppercase">
                <span><?php get_icon('card-sample-ico', 'm'); ?></span>
                <span><?php echo esc_html($card_name_label); ?></span>
            </div>
            <div class="_value flex weight-500 text-line-clamp-1">
                <span><?php echo esc_html(get_the_title($post)); ?></span>
            </div>
        </div>
        <?php if ($description): ?>
            <div class="common-list-card__desc">
                <div class="_label flex items-center flex-gap-extra-thin text-xs weight-500 text-uppercase">
                    <span><?php get_icon('card-sample-ico', 'm'); ?></span>
                    <span><?php echo esc_html($card_desc_label); ?></span>
                </div>
                <div class="_value flex weight-500 text-line-clamp-3">
                    <?php echo wp_kses_post($description); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
