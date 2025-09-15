<?php

/**
 * Displays contacts promo
 */

function get_contacts_block_data()
{
    return [
        [
            'icon'  => 'adress-group',
            'title' => 'Адрес',
            'content' => [
                ['type' => 'text', 'value' => get_theme_mod('main_contact_address_setting', '')],
            ],
        ],
        [
            'icon'  => 'phone-group',
            'title' => 'Телефоны',
            'content' => [
                ['type' => 'phone', 'value' => get_phone_formated(get_theme_mod('main_contact_phone_setting', ''))],
                ['type' => 'phone', 'value' => get_phone_formated(get_theme_mod('second_contact_phone_setting', ''))],
            ],
        ],
        [
            'icon'  => 'time-group',
            'title' => 'График работы',
            'content' => [
                ['type' => 'text', 'value' => get_theme_mod('main_contact_time_setting', '')],
                ['type' => 'text', 'value' =>  'Ежедневно'],
            ],
        ],
        [
            'icon'  => 'social-group',
            'title' => 'Социальные сети',
            'content' => [
                ['type' => 'link', 'value' => get_theme_mod('main_contact_instagram_setting', ''), 'icon' => ''],
                ['type' => 'phone', 'value' => get_phone_formated(get_theme_mod('main_contact_whatsapp_setting', '')), 'icon' => 'whats'],
            ],
        ],
        [
            'icon'  => 'mail-group',
            'title' => 'Почта',
            'content' => [
                ['type' => 'mail', 'value' => get_theme_mod('main_contact_mail_setting', '')],
            ],
        ],
        [
            'icon'  => 'rekv-group',
            'title' => 'Реквизиты',
            'content' => [
                ['type' => 'text', 'value' => get_theme_mod('main_contact_ogrnip_setting', '')],
                ['type' => 'text', 'value' => get_theme_mod('main_contact_inn_setting', '')],
            ],
        ],
    ];
}

$contacts_block = get_contacts_block_data();
?>


<section class="contacts promo">
    <div class="section-bg rtl">
        <!-- SVG background -->
        <svg width="1920" height="201" viewBox="0 0 1920 201" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2521 200C2521 200 2044.18 144.04 1723 62C1539 15 1327.62 -0.0513229 1075.5 39C872.05 70.513 649.5 103.5 443.5 92.5C249.071 82.1179 135.101 48.4253 -6 1" stroke="#967866" stroke-opacity="0.2" />
            <rect width="22" height="22" rx="11" transform="matrix(-1 0 0 1 1698 44)" fill="#EAE4E0" />
        </svg>
    </div>
    <div class="container">
        <h2 class="h2 text-second-dark">Приходите за идеальными волосами в наш салон!</h2>
        <p>Наши контакты:</p>
        <div class="contacts_block_container">
            <?php foreach ($contacts_block as $contact): ?>
                <div class="contacts_block_item">
                    <?php if (!empty($contact['icon'])): ?>
                        <div class="contacts_block_item_icon">
                            <?php get_icon($contact['icon'], '60'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="contacts_block_item_content">
                        <?php if (!empty($contact['title'])): ?>
                            <div class="contacts_block_item_title"><?php echo esc_html($contact['title']); ?></div>
                        <?php endif; ?>
                        <?php
                            foreach ($contact['content'] as $item) {
                                $value = trim($item['value']);
                                if (empty($value)) continue;

                                echo '<div class="contacts_block_item_line">';
                                if (!empty($item['icon'])) {
                                    echo '<span class="contact-item-icon">';
                                    get_icon($item['icon'], 'm');
                                    echo '</span>';
                                }

                                switch ($item['type']) {
                                    case 'phone':
                                        echo '<a href="' . esc_attr(get_phone_href($value)) . '">' . esc_html(get_phone_formated($value)) . '</a>';
                                        break;
                                    case 'link':
                                        echo '<a href="' . esc_url($value) . '" target="_blank" rel="noopener">' . esc_html($value) . '</a>';
                                        break;
                                    case 'mail':
                                        echo '<a href="mailto:' . esc_attr($value) . '">' . esc_html($value) . '</a>';
                                        break;
                                    default:
                                        echo wp_kses_post(html_entity_decode($value));
                                        break;
                                }

                                echo '</div>';
                            }

                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="section-bg-mobile ">
        <svg width="480" height="39" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1.21051C0 1.21051 89.9547 26.0885 150.267 29.51C196.844 32.1524 223.721 30.7527 269.688 24.4909C306.781 19.4378 332.85 17.295 371.503 17.295C406.99 17.295 454.274 30.0641 480 37.6687" stroke="#967866" stroke-opacity="0.2" />
            <rect x="95" y="17.069" width="16" height="16" rx="8" fill="#EAE4E0" />
        </svg>
    </div>
</section>