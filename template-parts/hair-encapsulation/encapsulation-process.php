<?php

/**
 * Displays encapsulation process
 */
$process_list = [
  [
    'title' => 'Подготовка',
    'text' => 'Волосы тщательно расчесываются и распределяются',
  ],
  [
    'title' => 'Формирование прядей',
    'text' => 'Согласно оговоренной технике наращивания',
  ],
  [
    'title' => 'Нанесение кератина',
    'text' => 'С помощью термо щипцов',
  ],
  [
    'title' => 'Формирование капсул',
    'text' => 'Плотное сжатие для надежной фиксации',
  ],
  [
    'title' => 'Обработка',
    'text' => 'Обрезка излишков и проверка качества',
  ],
];

?>
<section class="encapsulation process">
  <div class="section-bg rtl">
    <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="231" y="110" width="18" height="18" rx="9" fill="#EAE4E0"/>
    <path d="M-289 1C-289 1 172.393 128.603 481.743 146.153C720.648 159.706 858.505 178.271 1094.27 146.153C1284.53 120.235 1418.24 109.244 1616.5 109.244C1798.52 109.244 2041.05 148.995 2173 188" stroke="#967866" stroke-opacity="0.2"/>
    </svg>
  </div>
  <div class="container">
    <div class="encapsulation-process__content">
      <h2 class="h2 text-second-dark">Процесс капсуляции</h2>
      <div class="process__container">
        <?php foreach ($process_list as $key => $point): ?>
          <div class="color-card">
            <div class="encapsulation-process__content_number"><?php echo '0'.$key+1; ?></div>
            <div class="encapsulation-process__content_title weight-600"><?php echo $point['title']; ?></div>
            <div class="encapsulation-process__content_text weight-500"><?php echo $point['text']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>