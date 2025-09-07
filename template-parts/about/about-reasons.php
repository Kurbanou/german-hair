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



<section class="about-reasons">  
    <div class="container">
        <div class="about-mission__content_item reasons">
            <h2 class="h2 text-second-dark ">Почему нас выбирают?</h2>            
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
    <div class="section-bg-mobile rtl">
       <svg width="480" height="35" viewBox="0 0 480 35" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 33.786C0 33.786 72.0736 10.2919 120.397 7.06071C157.716 4.56532 179.25 5.88718 216.079 11.8007C245.799 16.5726 258.932 18.8727 289.088 24.5204C310.75 28.5772 326.521 30.3908 347.133 23.2093C360.537 18.5391 379.568 8.73423 393.84 7.06072C422.976 3.64436 447.501 15.9692 480 18.0534" stroke="#967866" stroke-opacity="0.2"/>
        <rect x="415" y="0.431519" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>     
</section>