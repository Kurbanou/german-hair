<?php

/**
 * Displays obuchenie hand
 */
$url = get_field('garantirovannaya_postanovka_ruki');

?>
<section class="obuchenie hand">
  <div class="section-bg rtl">
    <svg width="2464" height="189" viewBox="0 0 2464 189" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2463 1C2463 1 2001.61 128.603 1692.26 146.153C1453.35 159.706 1315.5 152.527 1079.73 120.409C889.469 94.4909 755.757 83.5 557.5 83.5C375.478 83.5 132.951 148.995 1 188" stroke="#967866" stroke-opacity="0.2" />
      <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 2008 97)" fill="#EAE4E0" />
    </svg>
  </div>
  <div class="container">
    <div class="content">
      <div class="photo-block">
        <?php if ($url): ?>
          <img src="<?php echo esc_url($url); ?>" alt="Фото" loading="lazy">
        <?php endif; ?>
      </div>
      <div class="content-text">
        <div class="section-header">
          <h2 class="h2 text-second-dark">Гарантированная постановка руки</h2>
        </div>
        <p>В отличие от многих обучающих программ, где теория занимает львиную долю, у нас упор идет именно на практику.
          Благодаря чему выпускники курса уходят с поставленной рукой
          и готовностью работать с клиентами. </p>
        <p>Все процедуры на моделях проходят под внимательным контролем преподавателя, чтобы каждый результат приносил удовлетворение всем.</p>
      </div>
    </div>
  </div>
  <div class="section-bg-mobile ">
    <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0.618985C0 0.618985 89.9547 25.497 150.267 28.9185C196.844 31.5609 223.721 30.1612 269.688 23.8993C306.781 18.8463 332.85 16.7035 371.503 16.7035C406.99 16.7035 454.274 29.4726 480 37.0771" stroke="#967866" stroke-opacity="0.2" />
      <rect x="99" y="16.0195" width="16" height="16" rx="8" fill="#EAE4E0" />
    </svg>
  </div>
</section>