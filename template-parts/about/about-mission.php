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
    <div class="container">
        <div class="about-mission__content">
            <div class="about-mission__content_item">
                <div class="about-mission__content_item text">
                    <h2 class="h2 text-second-dark ">Наша миссия</h2>
                    <p>Сделать наращивание волос максимально безопасным, естественным и комфортным.</p>
                    <p>Мы работаем с любыми типами волос – короткими, тонкими, вьющимися, а также предлагаем решения для мужчин и детей.</p>
                </div>
                <div class="about-mission__content_item img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/about/mission.jpg'; ?>" alt="img">
                </div>
                <div class="about-mission__content_item text">
                    <div class="home-reasons-to-chose-section__header mb-sm">
                        <h2 class="h2 text-second-dark ">Почему нас выбирают?</h2>
                    </div>
                    <div class="home-reasons-to-chose-section__body">
                        <ul class="reason-list flex flex-wrap flex-gap-m justify-between">
                            <?php foreach ($reason_list as $item): ?>
                                <li class="reason-item overflow-hidden text-break-word flex-03 flex-03-02 weight-600 text-l">
                                    <div class="flex flex-col flex-gap-thin">
                                        <span><?php get_icon($item['icon_name'], 'xl'); ?></span>
                                        <div class="flex flex-col flex-gap-thin">
                                            <span><?php echo $item['title']; ?></span>
                                            <span><?php echo $item['text']; ?></span>
                                        </div>
                                    </div>
                                </li>
                            <? endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>