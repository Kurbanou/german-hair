<?php

/**
 * Displays obuchenie certificate
 */
$url = get_field('sertifikat');

?>
<section class="obuchenie certificate">
  <div class="section-bg rtl">
    <svg width="2464" height="189" viewBox="0 0 2464 189" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2463 1C2463 1 2001.61 128.603 1692.26 146.153C1453.35 159.706 1315.5 152.527 1079.73 120.409C889.469 94.4909 755.757 83.5 557.5 83.5C375.478 83.5 132.951 148.995 1 188" stroke="#967866" stroke-opacity="0.2" />
      <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 2008 97)" fill="#EAE4E0" />
    </svg>
  </div>
  <div class="container">
    <div class="content">

      <div class="content-text">
        <div class="section-header">
          <h2 class="h2 text-second-dark">Сертификат</h2>
        </div>
        <p>После прохождения курса — официальный сертификат мастера по наращиванию волос.</p>
        <p>Подходит для салонов, платформ и клиентского доверия.</p>
      </div>
      <div class="photo-block">
        <?php if ($url): ?>
          <img src="<?php echo esc_url($url); ?>" alt="Фото" loading="lazy">
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="section-bg-mobile ">
    <svg width="480" height="37" viewBox="0 0 480 37" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M480 35.7519C480 35.7519 407.926 9.38497 359.603 5.75867C322.284 2.95816 300.75 4.44164 263.921 11.0782C234.201 16.4337 221.068 19.015 190.912 25.3532C169.25 29.9061 153.479 31.9415 132.867 23.8818C119.463 18.6406 100.432 7.63682 86.1597 5.75868C57.0241 1.92458 32.4988 15.7564 -5.126e-06 18.0955" stroke="#967866" stroke-opacity="0.2" />
      <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 62 0.414551)" fill="#EAE4E0" />
    </svg>

  </div>
</section>