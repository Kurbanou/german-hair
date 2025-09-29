<?php

/**
 * Displays extension-tape banner
 */

$fon = get_field('fon');
?>

<?php if ($fon): ?>
  <section class="tape banner" style="
  background-image: 
    linear-gradient(
      180deg,
      rgba(0, 0, 0, 0.75) 0%,
      rgba(0, 0, 0, 0.25) 50%,
      rgba(0, 0, 0, 0.4) 99.91%
    ),
    url('<?php echo esc_url($fon); ?>');
  background-size: cover;
  background-position: 75% 0%;
  background-repeat: no-repeat;
">

  <?php else: ?>
    <section class="tape banner">
    <?php endif; ?>
    <div class="container">
      <div class="tape-banner__content">

        <div class="banner_title">
          <h1 class="text-shadow">Ленточное наращивание волос в салоне </h1>
          <?php get_logo(); ?>
        </div>

        <h2>Объем и естественность за 30 минут</h2>
        <p class="banner-p">Хотите густые и длинные волосы без вреда для своих? <br />Ленточное наращивание – это быстрый и безопасный способ добавить объем и длину. <br />Всего за 30 минут вы получите идеальный результат с эффектом натуральных волос.</p>
        <div class="cat">
          <span>Запишитесь сейчас и получите бесплатную консультацию!</span>
        </div>

        <div class="discounts">
          <button class="btn btn-light btn-glowing">Записаться</button>
          <div class="discount">
            <div class="proc">- 10%</div>
            <div class="text">при первом посещении</div>
          </div>
          <?php get_icon('bant', 'discounts-icon') ?>
        </div>
      </div>
    </div>
    </section>