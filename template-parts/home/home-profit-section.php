<?php
$isSection = $args['section'];
?>

<? if ($isSection): ?>
<section class="section home-profit-section hide-desktop">
    <div class="container">
<? endif; ?>
        <div class="section-content flex flex-col flex-gap-s <?php echo $isSection ? '' : 'hide-mobile'; ?>">
            <div class="home-profit-section__header">
                <h2 class="h2 text-second-dark text-shadow-desktop text-white-desktop">
                    <span>В салоне</span>
                    <?php get_logo('inline'); ?>
                    <span>мы совершили прорыв в индустрии красоты!<br>Запатентованная технология Diamond Hair позволяет:</span>
                </h2>
            </div>
            <div class="home-profit-section__body">
                <div class="home-profit-card text-m flex items-stretch justify-between">
                    <div class="home-profit-card__item text-center weight-500 flex-1 flex items-center justify-center flex-col flex-gap-xs">
                        <div><?php get_icon( 'profit-1', 'xl' ); ?></div>
                        <div>
                            <span>Наращивать волосы даже при длине от 2 см</span>
                        </div>
                    </div>
                    <div class="home-profit-card__item text-center weight-500 flex-1 flex items-center justify-center flex-col flex-gap-xs">
                        <div><?php get_icon( 'profit-2', 'xl' ); ?></div>
                        <div>
                            <span>Создавать объем до 300% без утяжеления</span>
                        </div>
                    </div>
                    <div class="home-profit-card__item text-center weight-500 flex-1 flex items-center justify-center flex-col flex-gap-xs">
                        <div><?php get_icon( 'profit-3', 'xl' ); ?></div>
                        <div>
                            <span>Гарантировать комфорт ношения 24/7</span>
                        </div>
                    </div>
                    <div class="home-profit-card__item text-center weight-500 flex-1 flex items-center justify-center flex-col flex-gap-xs">
                        <div><?php get_icon( 'profit-4', 'xl' ); ?></div>
                        <div>
                            <span>Менять цвет без окрашивания родных волос</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<? if ($isSection): ?>
    </div>
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 33.9965C0 33.9965 72.0736 10.5024 120.397 7.27122C157.716 4.77583 179.25 6.09769 216.079 12.0112C245.799 16.7832 258.932 19.0833 289.088 24.7309C310.75 28.7877 326.521 30.6014 347.133 23.4198C360.537 18.7496 379.568 8.94474 393.84 7.27123C422.976 3.85487 447.501 16.1797 480 18.2639" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="415" y="0.642029" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>
<? endif; ?>