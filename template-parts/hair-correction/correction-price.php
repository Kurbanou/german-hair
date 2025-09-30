<?php
/**
 * Displays correction price
 */
$services = get_services_prices( true, true );

?>

<section class="correction price">         

    <div class="container price-contain">
        <?php
		while (have_posts()) : the_post();
			the_content();
		endwhile;
		?>
            <div class="btn-free-consultation">
                <div class="flex items-center justify-center flex-gap-thin">
                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4004 0.821486C5.7074 0.0517691 3.67556 0.692657 2.84569 2.43938C2.38894 3.40077 2.40565 4.50686 2.8185 5.44044H1.75781C0.787 5.44044 0 6.21818 0 7.17757V9.87977C0 10.8392 0.787 11.6169 1.75781 11.6169H8.75V5.44044H11.25V11.6169H18.2422C19.213 11.6169 20 10.8392 20 9.87977V7.17757C20 6.21818 19.213 5.44044 18.2422 5.44044H17.1807C17.5949 4.50688 17.6119 3.40045 17.1529 2.43798C16.3195 0.690681 14.2828 0.0533231 12.5881 0.820856C11.345 1.38387 10.5232 2.406 9.9895 3.36023C9.4579 2.4066 8.63927 1.38474 7.4004 0.821486ZM8.5959 5.40403H6.07449C5.75201 5.39373 5.52279 5.33587 5.35983 5.25088C4.74439 4.92991 4.42758 4.051 4.76923 3.33188C5.07794 2.68211 5.82506 2.41684 6.51225 2.72927C7.37819 3.12297 7.99796 4.00349 8.41306 4.94897C8.48156 5.10498 8.54229 5.25784 8.5959 5.40403ZM13.9161 5.40403H11.381C11.4348 5.25826 11.4955 5.10586 11.5641 4.95033C11.9805 4.00558 12.6026 3.12432 13.4735 2.72992C14.1681 2.41529 14.921 2.68408 15.2306 3.33328C15.5724 4.04978 15.2569 4.92796 14.6369 5.2501C14.4721 5.33566 14.2409 5.39372 13.9161 5.40403Z" fill="url(#paint0_linear_1458_7248)"/>
                    <path d="M8.75 12.853H1.25V18.7207C1.25 20.2558 2.5092 21.5001 4.0625 21.5001H8.75V12.853Z" fill="url(#paint1_linear_1458_7248)"/>
                    <path d="M11.25 21.5001H15.9375C17.4907 21.5001 18.75 20.2558 18.75 18.7207V12.853H11.25V21.5001Z" fill="url(#paint2_linear_1458_7248)"/>
                    <defs>
                    <linearGradient id="paint0_linear_1458_7248" x1="0" y1="0.5" x2="21.2379" y2="3.91245" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#DDBF6A"/>
                    <stop offset="0.497615" stop-color="#9B7700"/>
                    <stop offset="1" stop-color="#DDBF6A"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_1458_7248" x1="1.25" y1="12.853" x2="9.37111" y2="13.4821" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#DDBF6A"/>
                    <stop offset="0.497615" stop-color="#9B7700"/>
                    <stop offset="1" stop-color="#DDBF6A"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_1458_7248" x1="11.25" y1="12.853" x2="19.3711" y2="13.4821" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#DDBF6A"/>
                    <stop offset="0.497615" stop-color="#9B7700"/>
                    <stop offset="1" stop-color="#DDBF6A"/>
                    </linearGradient>
                    </defs>
                </svg>
                <span>Бесплатная консультация!</span>
                </div>
            </div>

    </div>
    
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 37" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.73959e-06 1.37704C2.73959e-06 1.37704 72.0736 27.7439 120.397 31.3702C157.716 34.1708 179.25 32.6873 216.079 26.0507C245.799 20.6952 258.932 18.1139 289.088 11.7757C310.75 7.22286 326.521 5.18741 347.133 13.2471C360.537 18.4884 379.568 29.4921 393.84 31.3703C422.976 35.2044 447.501 21.3725 480 19.0335" stroke="#967866" stroke-opacity="0.2"/>
        <rect width="16" height="16" rx="8" transform="matrix(1 8.74228e-08 8.74228e-08 -1 418 36.7144)" fill="#EAE4E0"/>
        </svg>
    </div>
</section>