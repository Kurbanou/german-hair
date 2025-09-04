<?php
/**
 * Displays about consultation
 */

$about_contacts = [
  [
    'label' => get_theme_mod('main_contact_phone_setting', ''),
    'href'  => get_theme_mod('main_contact_phone_setting', ''),
    'icon'  => 'phone',
  ],
  [
    'label' => get_theme_mod('main_contact_whatsapp_label_setting', ''),
    'href'  => get_theme_mod('main_contact_whatsapp_setting', ''),
    'icon'  => 'whats',
  ],
  [
    'label' => get_theme_mod('main_contact_address_setting', ''),
    'href'  => '',
    'icon'  => 'map',
  ],
];
?>

<section class="about-consultation">
    <div class="container">       
        <h2 class="h2 text-second-dark">Записаться на консультацию</h2>

        <div >
		<div class="about-contacts">
            <?php foreach ($about_contacts as $contact): ?>
                <?php if (!empty($contact['label'])): ?>
                <div class="about-contacts-item">
                    <?php if (!empty($contact['href'])): ?>
                    <a href="<?= esc_url($contact['href']); ?>" >
                        <?php if (!empty($contact['icon'])): ?>
                        <div class="icon icon-size-l text-white"><?php get_icon($contact['icon'], 'l'); ?></div>
                        <?php endif; ?>
                        <div class="name" ><?= esc_html($contact['label']); ?></div>
                    </a>
                    <?php else: ?>
                    <span >
                        <?php if (!empty($contact['icon'])): ?>
                        <span><?php get_icon($contact['icon'], 'l'); ?></span>
                        <?php endif; ?>
                        <span ><?= esc_html($contact['label']); ?></span>
                    </span>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
		</div>            
    </div>    
</section>