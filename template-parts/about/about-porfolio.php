<?php

/**
 * Displays about-porfolio section
 */

?>

<section class="about-porfolio">
    <div class="section-bg">
       <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-318 1C-318 1 143.393 128.603 452.743 146.153C691.648 159.706 829.505 152.527 1065.27 120.409C1255.53 94.4909 1393.74 120.409 1592 120.409C1774.02 120.409 2012.05 148.995 2144 188" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="192" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="container">
        <h2 class="h2 text-second-dark">Наши работы говорят сами за себя</h2>
        <?php
        get_template_part('template-parts/common/list/list', 'slider-all');
        ?>
    </div>
    <div class="section-bg-mobile">
        <svg width="480" height="38" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0.786099C0 0.786099 89.9547 25.6641 150.267 29.0856C196.844 31.728 223.721 30.3283 269.688 24.0665C306.781 19.0134 332.85 16.8706 371.503 16.8706C406.99 16.8706 454.274 29.6397 480 37.2443" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="95" y="16.6447" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>