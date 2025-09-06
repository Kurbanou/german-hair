<?php

/**
 * Displays about banner
 */

$fon = get_field('fon');
?>

<?php if ($fon): ?>
    <section class="about-banner" style="
  background-image: 
    linear-gradient(
      180deg,
      rgba(0, 0, 0, 0.75) 0%,
      rgba(0, 0, 0, 0.25) 50%,
      rgba(0, 0, 0, 0.4) 99.91%
    ),
    url('<?php echo esc_url($fon); ?>');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
">

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
                    <div class="discounts">
                        <div class="discount">                            
                            <div class="proc">- 50%</div>  
                            <div class="text">на первое наращивание</div>                            
                        </div>
                        <button class="btn btn-light btn-glowing">узнать стоимость со скидкой</button>
                    </div>
                </div>
            </div>
        </div>
        </section>