<?php

/**
 * Displays about banner
 */

$reason_list = [
    [
        'icon_name' => 'reason-to-chose-1a',
        'title' => '9 лет',
        'text' => 'на рынке beauty-индустрии',
    ],
    [
        'icon_name' => 'reason-to-chose-2a',
        'title' => 'ТОП-мастера',
        'text' => 'с международными сертификатами',
    ],
    [
        'icon_name' => 'reason-to-chose-3a',
        'title' => '5,700+',
        'text' => 'довольных клиентов',
    ],

];
?>



<section class="about-mission">
    
        <div class="about-mission__content">
            <div class="about-mission__content_item text">
                <h2 class="h2 text-second-dark ">Наша миссия</h2>
                <p>Сделать наращивание волос максимально безопасным, естественным и комфортным.</p>
                <p>Мы работаем с любыми типами волос – короткими, тонкими, вьющимися, а также предлагаем решения для мужчин и детей.</p>
            </div>
            <div class="about-mission__content_item img">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/about/mission.jpg'; ?>" alt="img">
            </div>
            <div class="about-mission__content_item reasons">
                <h2 class="h2 text-second-dark ">Почему нас выбирают?</h2>
                <div class="about-reasons">
                    <ul class="reason-list">
                        <?php foreach ($reason_list as $item): ?>
                            <li>
                                <div class="reason-list_icon"><?php get_icon($item['icon_name'], 'xl'); ?></div>
                                <div>
                                    <div class="reason-list_title"><?php echo $item['title']; ?></div>
                                    <div class="reason-list_text"><?php echo $item['text']; ?></div>
                                </div>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    
</section>