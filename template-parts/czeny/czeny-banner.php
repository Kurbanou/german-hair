<?php

/**
 * Displays czeny banner
 */

$fon = get_field('fon');
?>

<?php if ($fon): ?>
  <section class="czeny banner" style="
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
    <section class="czeny banner">
    <?php endif; ?>
    <div class="container">
      <div class="czeny-banner__content">
        <h1 class="h1 mb-m mb-me_responsive text-shadow">Цены на наращивание</h1>
        <p>В студии German Hair прозрачные цены без скрытых платежей. Мы предлагаем несколько вариантов цен на наращивание, чтобы каждый клиент мог выбрать для себя оптимальное решение.</p>
        <p>Сколько стоит наращивание волос: микрокапсульное и итальянское, или какова цена капсуляции волос — цены в прайс-листах.</p>
        <div class="banner-p">
          И зависят они от:
          <div class="cat">
            <span>Категорий</span>
            <span>Длины волос</span>
            <span>Квалификации мастера</span>
          </div>
        </div>
        <button class="btn btn-light btn-glowing">Получить консультацию стилиста</button>
      </div>
    </div>
    </section>