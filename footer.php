<?php

/**
 * The template for displaying the footer
 */
?>
</main>
<?php
get_template_part('template-parts/breadcrumbs');
?>
<footer class="footer">
	<div class="footer-bg-1 hide-mobile">
		<svg width="1920" height="100%" viewBox="0 0 1920 324" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1910.19 511.827C1910.19 511.827 1484.61 586.223 1213.15 558.413C1003.5 536.937 885.594 507.408 687.988 434.241C528.527 375.198 458.273 347.919 297.365 283.011C181.781 236.386 96.3665 209.513 -25.8562 233.66C-105.338 249.362 -221.708 291.351 -302.68 287.6C-467.979 279.943 -590.272 179.18 -768.118 134.062" stroke="#967866" stroke-opacity="0.2" />
			<rect x="78.2734" y="237.53" width="22" height="22" rx="11" transform="rotate(-169.871 78.2734 237.53)" fill="#EAD9C9" />
		</svg>
	</div>
	<div class="footer-bg-2 hide-mobile">
		<svg width="795" height="100%" viewBox="0 0 795 324" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M2187.98 1190.02C2187.98 1190.02 1928.92 894.866 1720.8 759.917C1560.07 655.699 1459.72 609.445 1278.07 548.703C1131.48 499.685 1066.18 478.986 915.224 433.3C806.791 400.482 730.98 370.859 658.164 284.124C610.811 227.719 552.307 131.679 492.816 88.2066C371.368 -0.538972 227.339 1.17298 75.6619 -68.1823" stroke="#967866" stroke-opacity="0.2" />
			<rect width="22" height="22" rx="11" transform="matrix(-0.877323 -0.4799 -0.4799 0.877323 681.379 291.559)" fill="#EAD9C9" />
		</svg>
	</div>

	<?php
	get_template_part('template-parts/footer/footer', 'content');
	?>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

<!-- Yandex.Metrika counter --> 
<script type="text/javascript">     
(function(m,e,t,r,i,k,a){         
	m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};         
	m[i].l=1*new Date();         
	for (var j = 0; j < document.scripts.length; j++) 
	{if (document.scripts[j].src === r) { return; }}         
	k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)     
	})(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=104371796', 'ym');      
	ym(104371796, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true}); 
</script> 
<noscript>
	<div>
		<img src="https://mc.yandex.ru/watch/104371796" style="position:absolute; left:-9999px;" alt="" />
	</div>
</noscript> 
<!-- /Yandex.Metrika counter -->


</body>

</html>