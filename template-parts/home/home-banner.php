<?php
/**
 * Displays home banner
 */
$customizer_home_banner_file= get_theme_mod( 'home_banner_file_setting', '' );

if ( !isset($customizer_home_banner_file) || !$customizer_home_banner_file ) return;

$home_banner_src = wp_get_attachment_url($customizer_home_banner_file);
$mimeType = wp_check_filetype($home_banner_src)['type'];

$home_banner_poster = get_post_meta( $customizer_home_banner_file, '_kgflashmediaplayer-poster', true );

$isVideo = null;
$lasy = true;

if (strpos($mimeType, 'video') !== false) {
    $isVideo = true;
} elseif (strpos($mimeType, 'image') !== false) {
    $isVideo = false;
} else {
    return;
}
?>

<div class="home-banner">
    <div class="home-banner-wrapper">
        <?php if ($isVideo): ?>
            <?php if ( $lasy ): ?>
                <video id="bannerVideo" class="lazy video-cover" loop playsinline muted>
                    <data-src src="<?php echo $home_banner_src ?>" type="<?php echo $mimeType; ?>"></data-src>
                    Your browser does not support the video tag.
                </video>
            <?php else: ?>
                <video id="bannerVideo" class="video-cover" loop playsinline muted>
                    <source src="<?php echo $home_banner_src ?>" width="100" type="<?php echo $mimeType; ?>">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
            <? if ($home_banner_poster): ?>
                <img class="img-cover home-banner__video-poster" src="<?php echo $home_banner_poster; ?>" alt="Видео-постер" title="Видео-постер">
            <?php endif; ?>
        <?php else: ?>
            <img class="img-cover" src="<?php get_media_placeholder(); ?>" data-src="<?php echo $home_banner_src ?>" alt="Баннер на главной странице" title="Баннер на главной странице (изображение)">
        <?php endif; ?>
    </div>
</div>

<script>
    jQuery('#bannerVideo').get(0)
        .play()
        .then(() => {})
        .catch((error) => {
            // jQuery('#bannerVideo').css('display', 'none');
        });
</script>