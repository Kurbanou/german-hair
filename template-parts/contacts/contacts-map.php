<?php

/**
 * Displays contacts map
 */
$address = get_theme_mod('main_contact_address_setting', ''); // или получи из Carbon Fields
$map_url = 'https://www.google.com/maps?q=' . urlencode($address) . '&hl=ru&z=14&output=embed';
?>


<section class="contacts map">

    <div class="map_container">
        <iframe
            src="<?= esc_url($map_url); ?>"
            allowfullscreen
            loading="lazy"
            title="Карта с адресом">
        </iframe>
        <div class="map_overlay"></div>

    </div>
    <div class="section-bg-mobile rtl">
        <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M480 37.1267C480 37.1267 390.045 12.2488 329.733 8.82723C283.156 6.18485 256.279 7.58457 210.312 13.8464C173.219 18.8994 147.15 21.0423 108.497 21.0423C73.0095 21.0423 25.7257 8.27315 9.98378e-06 0.668579" stroke="#967866" stroke-opacity="0.2" />
            <rect x="385" y="21.2682" width="16" height="16" rx="8" transform="rotate(180 385 21.2682)" fill="#EAE4E0" />
        </svg>
    </div>
</section>