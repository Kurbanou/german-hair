<?php
/**
 * Displays portfolio list section
 */

?>

<section class="section portfolio-main-section relative">
    <div class="section-bg portfolio-main-section-bg">
        <svg height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-314 1C-314 1 147.393 128.603 456.743 146.153C695.648 159.706 833.505 152.527 1069.27 120.409C1259.53 94.4909 1393.24 83.5 1591.5 83.5C1773.52 83.5 2016.05 148.995 2148 188" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="196" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="container">
        <div class="section-content flex flex-col">

            <div class="portfolio-main-section__header mb-sm">
                <h2 class="h2 text-second-dark">Наши работы говорят сами за себя</h2>
            </div>

            <?php
            get_template_part( 'template-parts/common/list/list', 'slider-all' );
            ?>

          

         
        </div>
    </div>
 
</section>