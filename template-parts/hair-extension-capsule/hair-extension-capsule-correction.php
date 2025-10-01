<?php

/**
 * Displays hair-extension-capsule-correction
 */
$url = get_field('lentochnoe_narashhivanie_volos_chto_eto');

?>
<section class="capsule correction">
  <div class="section-bg ">
    <svg width="1920" height="299" viewBox="0 0 1920 299" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2468 297.883C2468 297.883 1991.18 241.923 1670 159.883C1486 112.883 1274.62 97.8315 1022.5 136.883C819.05 168.396 598 147.883 392 136.883C197.571 126.501 11.101 48.8081 -130 1.38281" stroke="#967866" stroke-opacity="0.2" />
      <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 1623 139.383)" fill="#EAE4E0" />
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
          <h2 class="h2 text-second-dark">Ленточное наращивание волос: что это?</h2>
        </div>
        <p>Наращивание волос на лентах – это метод, при котором пряди крепятся с помощью специальных биолент. </p>
        <p>Они:</p>
        <ul class="ul-disk">
          <li>Гипоаллергенны</li>
          <li>Не повреждают свои волосы</li>
          <li>Обеспечивают надежное сцепление</li>
        </ul>
        <p>Такой способ подходит даже если волосы тонкие и ослабленные.</p>
      </div>
    </div>
  </div>
  <div class="section-bg-mobile rtl">
    <svg width="480" height="36" viewBox="0 0 480 36" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M480 35.3769C480 35.3769 407.926 9.00997 359.603 5.38367C322.284 2.58316 300.75 4.06664 263.921 10.7032C234.201 16.0587 221.068 18.64 190.912 24.9782C169.25 29.5311 153.479 31.5665 132.867 23.5068C119.463 18.2656 100.432 7.26182 86.1597 5.38368C57.0241 1.54958 32.4988 15.3814 -5.126e-06 17.7205" stroke="#967866" stroke-opacity="0.2" />
      <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 62 0.0395508)" fill="#EAE4E0" />
    </svg>

  </div>
</section>