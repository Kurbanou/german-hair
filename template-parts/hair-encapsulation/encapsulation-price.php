<?php
/**
 * Displays encapsulation price
 */
$services = get_services_prices( true, true );

?>

<section class="encapsulation price">
    <div class="section-bg rtl">
        <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2121 1C2121 1 1659.61 128.603 1350.26 146.153C1111.35 159.706 973.495 152.527 737.726 120.409C547.469 94.4909 413.757 83.5 215.5 83.5C33.4779 83.5 -209.049 148.995 -341 188" stroke="#967866" stroke-opacity="0.2"/>
        <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 1611 107)" fill="#EAE4E0"/>
        </svg>
    </div>

    <div class="container">
        <?php
		while (have_posts()) : the_post();
			the_content();
		endwhile;
		?>
    </div>
    
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M480 38.8085C480 38.8085 386.282 9.62512 323.447 5.61146C274.92 2.5118 246.919 4.15376 199.029 11.4992C160.384 17.4268 136.043 26.4056 96.2539 28.5017C59.3219 30.4474 26.8019 10.2976 -1.32248e-05 1.37695" stroke="#967866" stroke-opacity="0.2"/>
        <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 429 14.2969)" fill="#EAE4E0"/>
        </svg>
    </div>
</section>