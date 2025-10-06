<?php
/**
 * Displays removal price
 */
$services = get_services_prices( true, true );

?>

<section class="removal price">
    <div class="section-bg rtl">
        <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2241 1C2241 1 1779.61 128.603 1470.26 146.153C1231.35 159.706 1093.5 152.527 857.726 120.409C667.469 94.4909 533.757 83.5 335.5 83.5C153.478 83.5 -89.0489 148.995 -221 188" stroke="#967866" stroke-opacity="0.2"/>
            <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 1731 107)" fill="#EAE4E0"/>
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
        <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0.786221C0 0.786221 89.9547 25.6642 150.267 29.0857C196.844 31.7281 223.721 30.3284 269.688 24.0666C306.781 19.0135 332.85 16.8707 371.503 16.8707C406.99 16.8707 454.274 29.6398 480 37.2444" stroke="#967866" stroke-opacity="0.2"/>
        <rect x="95" y="16.6445" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>