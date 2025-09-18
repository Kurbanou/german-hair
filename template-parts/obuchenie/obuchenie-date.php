<?php

/**
 * Displays obuchenie date
 */
$url = get_field('blizhajshie_daty_fon');
$date = get_field('blizhajshie_daty');

?>
<section class="obuchenie date">
  <div class="section-bg ">
    <svg width="2464" height="189" viewBox="0 0 2464 189" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1C1 1 462.393 128.603 771.743 146.153C1010.65 159.706 1148.5 152.527 1384.27 120.409C1574.53 94.4909 1708.24 83.5 1906.5 83.5C2088.52 83.5 2331.05 148.995 2463 188" stroke="#967866" stroke-opacity="0.2" />
      <rect x="456" y="97" width="18" height="18" rx="9" fill="#EAE4E0" />
    </svg>
  </div>
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
        <?php if ($date): ?>
          <div class="obuchenie_date">
            <?php echo ($date); ?>
            <span>Осталось 3 места</span>
          </div>
        <?php endif; ?>
      </div>

      <div class="content-text">
        <div class="section-header">
          <h2 class="h2 text-second-dark">Ближайшие даты</h2>
        </div>
        <p class="weight-600">Набор открыт!</p>
        <p>Успейте записаться — количество мест ограничено.</p>
        <p>И помните, что наращивание волос - это не только наши курсы и ваш сертификат, это старт новой профессии
          и возможность инвестировать в себя и свое будущее.</p>
      </div>

    </div>
  </div>
  <div class="section-bg-mobile rtl">
    <svg width="480" height="37" viewBox="0 0 480 37" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 36.0893C0 36.0893 72.0736 9.72238 120.397 6.09607C157.716 3.29556 179.25 4.77905 216.079 11.4156C245.799 16.7711 258.932 19.3524 289.088 25.6906C310.75 30.2435 326.521 32.2789 347.133 24.2192C360.537 18.978 379.568 7.97422 393.84 6.09608C422.976 2.26198 447.501 16.0938 480 18.4329" stroke="#967866" stroke-opacity="0.2" />
      <rect x="418" y="0.751953" width="16" height="16" rx="8" fill="#EAE4E0" />
    </svg>
  </div>

</section>