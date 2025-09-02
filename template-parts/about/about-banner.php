<?php
/**
 * Displays about banner
 */

$fon = get_field('fon');
?>

<?php if ($fon): ?>
<section class="about-banner" style="background-image: url('<?php echo esc_url($fon); ?>');">
<?php else: ?>
<section class="about-banner">
<?php endif; ?>
    <div class="container">
        <div class="about-banner__content">
            <div class="about-banner__content_item">
                <h1 class="h1 mb-m mb-me_responsive text-shadow">German Hair</h1>
                <div class="about-logo">            
                    <?php get_logo(); ?>           
                </div>
                <p class="banner-p">Это не просто студия наращивания волос, а место, где рождаются идеальные образы.</p>
                <p>С 2015 года мы помогаем клиентам обрести густые, длинные и здоровые волосы, используя инновационные технологии и премиальные материалы.</p>
            </div>
            <div class="about-banner__content_item">
                <div class="home-main-section__body">
                    <div class="flex flex-wrap items-center flex-gap-xs mb-s mb-s_responsive">
                        <div class="text-h-xl text-shadow weight-700">
                            <span>- 50%</span>
                        </div>
                        <div class="text-l leading-2 weight-600 text-shadow">
                            <span>на первое наращивание</span>
                        </div>
                    </div>            
                    <button class="btn btn-light btn-glowing">узнать стоимость со скидкой</button>    
                </div>
            </div>   
        </div>
    </div>
</section>
