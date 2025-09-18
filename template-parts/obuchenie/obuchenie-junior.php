<?php

/**
 * Displays obuchenie junior
 */
$url = get_field('obuchenie_s_nulya');

?>
<section class="obuchenie junior">
  <div class="section-bg rtl">
    <svg width="2529" height="189" viewBox="0 0 2529 189" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="1938" y="130" width="18" height="18" rx="9" transform="rotate(180 1938 130)" fill="#EAE4E0" />
      <path d="M2528 0.999252C2528 0.999252 2034.61 125.161 1703.81 146.499C1448.34 162.978 1261.67 212.011 1009.56 172.96C806.106 141.447 610.5 115.499 404.5 126.499C210.071 136.881 142.101 132.574 1 179.999" stroke="#967866" stroke-opacity="0.2" />
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
          <h2 class="h2 text-second-dark">Обучение с нуля</h2>
        </div>
        <p>Подойдет как начинающим мастерам, так и тем,
          у кого уже есть небольшой опыт.</p>
        <p>Группа: 4-6 человек
          Длительность курса: 2 дня</p>
      </div>
    </div>
  </div>

  <div class="section-bg-mobile rtl">
    <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M480 37.1608C480 37.1608 390.045 12.2828 329.733 8.8613C283.156 6.21893 256.279 7.61865 210.312 13.8805C173.219 18.9335 147.15 21.0763 108.497 21.0763C73.0095 21.0764 25.7257 8.30725 9.98378e-06 0.702679" stroke="#967866" stroke-opacity="0.2" />
      <rect x="385" y="21.3025" width="16" height="16" rx="8" transform="rotate(180 385 21.3025)" fill="#EAE4E0" />
    </svg>
  </div>
</section>