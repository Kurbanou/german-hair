<?php

/**
 * Displays obuchenie location
 */
$url = get_field('mesto_obucheniya');

?>
<section class="obuchenie location">
  <div class="section-bg">
    <svg width="2464" height="189" viewBox="0 0 2464 189" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1C1 1 462.393 128.603 771.743 146.153C1010.65 159.706 1148.5 152.527 1384.27 120.409C1574.53 94.4909 1712.74 120.409 1911 120.409C2093.02 120.409 2331.05 148.995 2463 188" stroke="#967866" stroke-opacity="0.2" />
      <rect x="1917" y="111" width="18" height="18" rx="9" fill="#EAE4E0" />
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
          <h2 class="h2 text-second-dark">Место обучения</h2>
        </div>
        <p>Обучение наращиванию волос проходит в Москве,<br>
          в уютной студии German Hair — идеальная атмосфера<br>
          для комфортного обучения.</p>
        <ul class="ul-disk">
          <li>Студия оборудована профессиональными инструментами для горячего наращивания</li>
          <li>Удобное расположение</li>
          <li>Возможность выбрать индивидуальный формат и время</li>
        </ul>


      </div>

    </div>
  </div>

  <div class="section-bg-mobile">
    <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0.786221C0 0.786221 89.9547 25.6642 150.267 29.0857C196.844 31.7281 223.721 30.3284 269.688 24.0666C306.781 19.0135 332.85 16.8707 371.503 16.8707C406.99 16.8707 454.274 29.6398 480 37.2444" stroke="#967866" stroke-opacity="0.2" />
      <rect x="95" y="16.6448" width="16" height="16" rx="8" fill="#EAE4E0" />
    </svg>

  </div>

</section>