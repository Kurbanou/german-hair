<?php
/**
 * Displays portfolio list section
 */

function get_portfolio_posts( string $cat ) {
    return get_posts( array(
        'numberposts'       => wp_is_mobile() ? 1 : 3,
        'category_name'     => $cat,
        'orderby'           => 'date',
        'order'             => 'DESC',
        'include'           => array(),
        'exclude'           => array(),
        'meta_key'          => '',
        'meta_value'        =>'',
        'post_type'         => 'post',
        'suppress_filters'  => true,
    ) );
}

$posts_1 = get_portfolio_posts( 'short-hair' ); 
$posts_2 = get_portfolio_posts( 'long-hair' ); 
$posts_3 = get_portfolio_posts( 'special-effects' );

if ( 
    (!$posts_1 || !isset( $posts_1 ) )
    && (!$posts_2 || !isset( $posts_2 ) )
    && (!$posts_3 || !isset( $posts_3 ) )
) return;
?>

<section class="section portfolio-main-section relative">
    <div class="section-bg portfolio-main-section-bg">
        <svg height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-314 1C-314 1 147.393 128.603 456.743 146.153C695.648 159.706 833.505 152.527 1069.27 120.409C1259.53 94.4909 1393.24 83.5 1591.5 83.5C1773.52 83.5 2016.05 148.995 2148 188" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="196" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="container">
        <div class="section-content flex flex-col">

            <div class="portfolio-main-section__header mb-sm">
                <h2 class="h2 text-second-dark">Наши работы говорят сами за себя</h2>
            </div>

            <div class="portfolio-main-section__body mb-xl mb-xl_responsive flex flex-col flex-gap-xl flex-gap-xl_responsive">
                <?php 
                    get_template_part( 'template-parts/common/list/list', '', [
                        'posts' => $posts_1,
                        'title' => 'Для коротких волос',
                        'card_name_label' => 'Название процедуры:',
                        'card_use_href' => false,
                        'limit_if_mobile' => true,
                    ] );
                    get_template_part( 'template-parts/common/list/list', '', [
                        'posts' => $posts_2,
                        'title' => 'Для длинных волос',
                        'card_name_label' => 'Название процедуры:',
                        'card_use_href' => false,
                        'limit_if_mobile' => true,
                    ] );
                    get_template_part( 'template-parts/common/list/list', '', [
                        'posts' => $posts_3,
                        'title' => 'Спецэффекты',
                        'card_name_label' => 'Название процедуры:',
                        'card_use_href' => false,
                        'limit_if_mobile' => true,
                    ] );
                ?>
            </div>

            <div class="portfolio-main-section__footer">
                <div class="flex flex-col items-center flex-gap-sm flex-gap-sm_responsive">
                    <p class="text-second-dark weight-600 mn-sm">Посмотреть 250+ примеров работ</p>
                    <a class="btn btn-light btn-glowing" href="/">
                        <span>открыть галерею</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 36.037C0 36.037 72.0736 9.67013 120.397 6.04383C157.716 3.24331 179.25 4.7268 216.079 11.3634C245.799 16.7188 258.932 19.3002 289.088 25.6384C310.75 30.1912 326.521 32.2267 347.133 24.167C360.537 18.9257 379.568 7.92197 393.84 6.04384C422.976 2.20973 447.501 16.0416 480 18.3807" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="418" y="0.699707" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>