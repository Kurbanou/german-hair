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
  <div class="section-bg rtl">
    <svg width="1920" height="201" viewBox="0 0 1920 201" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M-373 200C-373 200 120.387 44.8504 451.189 23.5123C706.66 7.03329 854.076 15.7625 1106.19 54.8139C1309.64 86.3269 1505.25 143.263 1711.25 132.263C1905.68 121.881 2012.9 48.4253 2154 1" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="1588" y="123" width="18" height="18" rx="9" fill="#EAE4E0"/>
    </svg>
  </div>
  <div class="container">
    <div class="correction-process__content">
      <h2 class="h2 text-second-dark">Как проходит коррекция волос на капсулах?</h2>
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
    <svg width="480" height="39" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 1.24399C0 1.24399 89.9547 26.122 150.267 29.5435C196.844 32.1859 223.721 30.7862 269.688 24.5243C306.781 19.4713 332.85 17.3285 371.503 17.3285C406.99 17.3285 454.274 30.0976 480 37.7021" stroke="#967866" stroke-opacity="0.2"/>
    <rect x="99" y="16.6443" width="16" height="16" rx="8" fill="#EAE4E0"/>
    </svg>
  </div>

</section>