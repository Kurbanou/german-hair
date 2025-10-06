<?php
/**
 * Template Name: Home
 * Description: Шаблон страницы "Главная страница"
 */
get_header(); ?>

<?php
    get_template_part( 'template-parts/home/home', 'main-section' );
    get_template_part( 'template-parts/home/home', 'profit-section', ['section' => true]);
    get_template_part( 'template-parts/home/home', 'for-those-who-section' );
    get_template_part( 'template-parts/home/home', 'reasons-to-chose-section' );
    get_template_part( 'template-parts/porfolio/porfolio', 'main-section' );

    get_template_part( 'template-parts/services/services', 'main-info-section' );
    get_template_part( 'template-parts/common/common', 'beauty-transformation-section' );
    get_template_part( 'template-parts/common/common', 'team-section' );
    get_template_part( 'template-parts/common/common', 'end-section' );
?>

<?php get_footer();
