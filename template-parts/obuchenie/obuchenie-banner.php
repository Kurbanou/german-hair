<?php

/**
 * Displays obuchenie banner
 */

$fon = get_field('fon');
?>

<?php if ($fon): ?>
  <section class="obuchenie banner" style="
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
    <section class="obuchenie banner">
    <?php endif; ?>
    <div class="container">
      <div class="obuchenie-banner__content">
        <h1 class="h1 mb-m mb-me_responsive text-shadow">Курсы по наращиванию волос в Москве</h1>
        <p class="banner-p">Всего за 2 дня вы освоите технику, получите сертификат и сможете начать зарабатывать!</p>
        <button class="btn btn-light btn-glowing">Хочу на курс</button>
      </div>
    </div>
    </section>