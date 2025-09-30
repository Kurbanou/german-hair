<?php

/**
 * Displays correction process
 */
$process_list = [
  [
    'title' => 'Диагностика',
    'text' => 'Мастер оценит состояние волос и капсул',
  ],
  [
    'title' => 'Снятие',
    'text' => 'Аккуратно удаляем старые капсулы без повреждений',
  ],
  [
    'title' => 'Очищение',
    'text' => 'Глубокое мытье специальным шампунем',
  ],
  [
    'title' => 'Наращивание',
    'text' => 'Фиксация прядей с обновленными капсулами',
  ],
  [
    'title' => 'Укладка',
    'text' => 'Завершающая стрижка и уходовые процедуры',
  ],
];

?>
<section class="correction process">
  <div class="section-bg rtl" bis_skin_checked="1">
    <svg width="1920" height="298" viewBox="0 0 1920 298" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2514 297.5C2514 297.5 2037.18 241.54 1716 159.5C1532 112.5 1320.62 97.4487 1068.5 136.5C865.05 168.013 644 147.5 438 136.5C243.571 126.118 57.101 48.4253 -84 1" stroke="#967866" stroke-opacity="0.2"/>
        <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 263 98)" fill="#EAE4E0"/>
    </svg>
  </div>
  <div class="container">
    <div class="correction-process__content">
      <h2 class="h2 text-second-dark">Как проходит профессиональное снятие волос</h2>
      <div class="process__container">
        <?php foreach ($process_list as $key => $point): ?>
          <div class="color-card">
            <div class="correction-process__content_number"><?php echo '0'.$key+1; ?></div>
            <div class="correction-process__content_title weight-600"><?php echo $point['title']; ?></div>
            <div class="correction-process__content_text weight-500"><?php echo $point['text']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
  <div class="section-bg-mobile ">
    <svg width="100%" height="100%" viewBox="0 0 480 35" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 33.786C0 33.786 72.0736 10.2919 120.397 7.06071C157.716 4.56532 179.25 5.88718 216.079 11.8007C245.799 16.5726 258.932 18.8727 289.088 24.5204C310.75 28.5772 326.521 30.3908 347.133 23.2093C360.537 18.5391 379.568 8.73423 393.84 7.06072C422.976 3.64436 447.501 15.9692 480 18.0534" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="415" y="0.431519" width="16" height="16" rx="8" fill="#EAE4E0"/>
    </svg>
  </div>

</section>