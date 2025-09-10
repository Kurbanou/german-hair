<?php

/**
 * Displays contacts promo
 */

$contacts_block = [
    [
        'icon'  => 'adress-group',
        'title' => 'Адрес',
        'content'

    ],
    [
        'icon'  => 'phone-group',
        'title' => 'Телефоны',
        'content'

    ],
    [
        'icon'  => 'time-group',
        'title' => 'График работы',
        'content'

    ],
    [
        'icon'  => 'social-group',
        'title' => 'Социальные сети',
        'content'

    ],
    [
        'icon'  => 'mail-group',
        'title' => 'Почта',
        'content'

    ],
    [
        'icon'  => 'rekv-group',
        'title' => 'Реквизиты',
        'content'

    ],

];

?>

<section class="contacts promo">
    <div class="section-bg rtl">
        <svg width="1920" height="201" viewBox="0 0 1920 201" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2521 200C2521 200 2044.18 144.04 1723 62C1539 15 1327.62 -0.0513229 1075.5 39C872.05 70.513 649.5 103.5 443.5 92.5C249.071 82.1179 135.101 48.4253 -6 1" stroke="#967866" stroke-opacity="0.2" />
            <rect width="22" height="22" rx="11" transform="matrix(-1 0 0 1 1698 44)" fill="#EAE4E0" />
        </svg>
    </div>
    <div class="container">
        <h2 class="h2 text-second-dark">Приходите за идеальными волосами в наш салон!</h2>
        <p>Наши контакты: </p>
        <div class="contacts_block_container">
            <?php foreach ($contacts_block as $contact): ?>
                <div class="contacts_block_item">
                    <? if ($contact['icon']): ?>
                        <div class="contacts_block_item_icon">
                            <? get_icon($contact['icon'], '60'); ?>
                        </div>
                    <? endif; ?>
                    <div class="contacts_block_item_content">
                        <? if ($contact['title']): ?>
                            <div class="contacts_block_item_title"><?php echo $contact['title']; ?></div>
                        <? endif; ?>
                        <? if ($contact['title']): ?>
                            <div class="contacts_block_item_content"><?php echo $contact['content']; ?></div>
                        <? endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>