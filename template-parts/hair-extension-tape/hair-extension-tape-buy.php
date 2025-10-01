<?php

/**
 * Displays hair-extension-tape-buy
 */
$url = get_field('kupit_uslugu_lentochnoe_narashhivanie_volos');

?>
<section class="tape buy">
  <div class="section-bg ">
    <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M-374 1C-374 1 87.3928 128.603 396.743 146.153C635.648 159.706 773.505 178.271 1009.27 146.153C1199.53 120.235 1333.24 109.244 1531.5 109.244C1713.52 109.244 1956.05 148.995 2088 188" stroke="#967866" stroke-opacity="0.2" />
      <rect x="1666" y="107" width="18" height="18" rx="9" fill="#EAE4E0" />
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

        <p>Если вы мечтаете о роскошных волосах без долгого отращивания, ленточное наращивание – идеальный выбор. В отличие от других методов, наращивание на биоленты
          не требует сложного ухода и не вредит родным прядям.</p>
        <p>В нашем салоне используются премиальные биоленты
          и волосы высшего качества.</p>
        <p>Вы можете купить услугу «ленточное наращивание волос» с гарантией и профессиональным уходом.</p>
        <p>Хотите сделать ленточное наращивание? Запишитесь прямо сейчас и получите идеальную прическу без компромисов!</p>
        <button class="btn btn-light btn-glowing">Записаться</button>

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