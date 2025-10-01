<?php

/**
 * Displays hair-extension-tape-buy
 */
$url = get_field('kupit_uslugu_lentochnoe_narashhivanie_volos');

?>
<section class="tape buy">
  <div class="section-bg ">
    <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M-375 1C-375 1 86.3928 128.603 395.743 146.153C634.648 159.706 772.505 152.527 1008.27 120.409C1198.53 94.4909 1332.24 83.5 1530.5 83.5C1712.52 83.5 1955.05 148.995 2087 188" stroke="#967866" stroke-opacity="0.2" />
      <rect x="135" y="107" width="18" height="18" rx="9" fill="#EAE4E0" />
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
    <svg width="480" height="35" viewBox="0 0 480 35" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 33.786C0 33.786 72.0736 10.2919 120.397 7.06071C157.716 4.56532 179.25 5.88718 216.079 11.8007C245.799 16.5726 258.932 18.8727 289.088 24.5204C310.75 28.5772 326.521 30.3908 347.133 23.2093C360.537 18.5391 379.568 8.73423 393.84 7.06072C422.976 3.64436 447.501 15.9692 480 18.0534" stroke="#967866" stroke-opacity="0.2" />
      <rect x="415" y="0.431519" width="16" height="16" rx="8" fill="#EAE4E0" />
    </svg>
  </div>
</section>