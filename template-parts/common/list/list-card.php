<?php
/**
 * Displays portfolio card
 */
$post = isset($args['post']) ? $args['post'] : null;
$add_class = isset($args['add_class']) ? $args['add_class'] : '';
$card_name_label = isset($args['name_label']) ? $args['name_label'] : 'Название';
$card_desc_label = isset($args['desc_label']) ? $args['desc_label'] : 'Описание';
$use_href = isset($args['use_href']) ? $args['use_href'] : true;

if ( !isset( $post ) || !$post || empty( $post ) ) return;

$image = get_field( 'preview_image' );
$image_src = $image ? wp_get_attachment_url( $image ) : '';
$description = get_field( 'preview_description' );
$href = $use_href ? ( get_permalink() ?: '' ) : '';
?>

<div class="common-list-card card card-rounded <?php echo esc_html( $add_class ); ?>">
    <?php if ( $href ): ?>
        <a href="<?php echo $href; ?>" class="link-card" title="<?php echo esc_html( the_title() ); ?>"></a>
    <?php endif; ?>
    <div class="flex flex-col flex-gap-s">
        <div class="common-list-card__image-wrapper <?php echo isset($image_src) && $image_src ? '' :' _empty' ?>">
            <? if ( isset($image_src) && $image_src ): ?>
                <img class="img-cover" src="<?php get_media_placeholder(); ?>" data-src="<?php echo esc_html( $image_src ); ?>" alt="<?php echo esc_html( the_title() ); ?>" title="<?php echo esc_html( the_title() ); ?> (изображение)">
            <? endif; ?>
        </div>
        <div class="common-list-card__name">
            <div class="_label flex items-center flex-gap-extra-thin text-xs weight-600 text-uppercase">
                <span><?php get_icon('card-sample-ico', 'm'); ?></span>
                <span><?php echo esc_html( $card_name_label ); ?></span>
            </div>
            <div class="_value flex weight-600 text-line-clamp-1">
                <span><?php echo esc_html( the_title() ); ?></span>
            </div>
        </div>
        <? if ( isset( $description ) && $description ): ?>
        <div class="common-list-card__desc">
            <div class="_label flex items-center flex-gap-extra-thin text-xs weight-600 text-uppercase">
                <span><?php get_icon('card-sample-ico', 'm'); ?></span>
                <span><?php echo esc_html( $card_desc_label ); ?></span>
            </div>
            <div class="_value flex weight-600 text-line-clamp-3">
                <span><?php echo esc_html( $description ); ?></span>
            </div>
        </div>
        <? endif; ?>
    </div>
</div>