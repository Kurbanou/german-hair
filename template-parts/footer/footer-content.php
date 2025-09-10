<?php

/**
 * Displays footer site info
 */
$customizer_footer_contact_whatsapp = get_theme_mod('main_contact_whatsapp_setting', '/');
$customizer_footer_contact_whatsapp_label = get_theme_mod('main_contact_whatsapp_label_setting', '');

$customizer_footer_contact_instagram = get_theme_mod('main_contact_instagram_setting', '/');
$customizer_footer_contact_instagram_label = get_theme_mod('main_contact_instagram_label_setting', '');

$customizer_footer_contact_address = get_theme_mod('main_contact_address_setting', '');

$footer_contacts = [
	[
		'label' => $customizer_footer_contact_instagram_label,
		'isset' => isset($customizer_footer_contact_instagram) && !!$customizer_footer_contact_instagram,
		'icon' => 'social-instagram',
		'href' => $customizer_footer_contact_instagram,
	],
	[
		'label' => $customizer_footer_contact_whatsapp_label,
		'isset' => isset($customizer_footer_contact_whatsapp) && !!$customizer_footer_contact_whatsapp,
		'icon' => 'social-whatsapp',
		'href' => $customizer_footer_contact_whatsapp,
	],
	[
		'label' => $customizer_footer_contact_address,
		'isset' => isset($customizer_footer_contact_address) && !!$customizer_footer_contact_address,
		'icon' => 'contacts-address',
		'href' => '',
	],
];

$nav_list_left = [
	[
		'label' => 'Наши работы',
		'href' => '/',
	],
	[
		'label' => 'Обучение',
		'href' => '/',
	],
	[
		'label' => 'Вопросы и ответы',
		'href' => '/',
	],
	[
		'label' => 'Контакты',
		'href' => '/contacts',
	],
	[
		'label' => 'О нас',
		'href' => '/about',
	],
	[
		'label' => 'Полезные статьи',
		'href' => '/',
	]
];

$nav_list_right = [
	[
		'label' => 'Капсульное наращивание',
		'href' => '/',
	],
	[
		'label' => 'Ленточное наращивание',
		'href' => '/',
	],
	[
		'label' => 'Снятие волос',
		'href' => '/',
	],
	[
		'label' => 'Коррекция волос',
		'href' => '/',
	],
	[
		'label' => 'Капсуляция волос',
		'href' => '/',
	]
];
?>

<div class="footer-content">
	<div class="container footer-container">
		<div class="footer-content__top flex items-start">
			<div class="footer-copyright flex flex-col flex-gap-xl">
				<div class="flex-1 flex flex-col flex-gap-thin text-primary">
					<?php get_logo(); ?>
					<div class="hide-mobile">Ваш путь к безупречным волосам без компромиссов!</div>
					<div class="hide-desktop font-family-second text-xl">Ваш путь к безупречным волосам без компромиссов!</div>
				</div>
				<ul class="footer-copyright-list flex flex-col flex-gap-thin flex-1 text-primary weight-300 hide-mobile">
					<li>
						<?php echo get_footer_content('© {current-year} {site-title} | {copyright-text}'); ?>
					</li>
					<li>
						<span>
							© Разработка сайта <a class="text-primary text-decoration-underline" href="<?php echo 'https://german-web.org/'; ?>" target="_blank" rel="nofollow">German Web</a>
						</span>
					</li>
					<li>
						<a class="text-primary text-decoration-underline" href="">Политика конфиденциальности</a>
					</li>
				</ul>
			</div>
			<div class="footer-content-main flex flex-gap-xl flex-1 relative">
				<div class="footer-content-main-figure hide-desktop">
					<svg width="100%" height="100%" viewBox="0 0 480 43" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M-76.4463 0.646754C-76.4463 0.646754 18.5848 35.3239 82.3003 40.0931C131.506 43.7763 159.9 41.8252 208.461 33.0969C247.647 26.0536 264.964 22.6586 304.725 14.3228C333.286 8.33499 354.081 5.65802 381.258 16.2579C398.932 23.1511 424.025 37.623 442.844 40.0931C481.26 45.1356 513.597 26.9443 556.447 23.868" stroke="#967866" stroke-opacity="0.2" />
						<rect width="16" height="16" rx="8" transform="matrix(1 0 0 -1 327.111 17.5425)" fill="#EAD9C9" />
					</svg>
				</div>
				<nav class="footer-group weight-700 text-uppercase flex flex-1" role="navigation">
					<?php if (is_array($nav_list_left) && !empty($nav_list_left)): ?>
						<ul class="footer__nav-menu flex flex-col flex-gap-m flex-1">
							<?php foreach ($nav_list_left as $nav): ?>
								<li><a href="<?php echo $nav['href']; ?>"><?php echo $nav['label']; ?></a></li>
							<?php endforeach; ?>
						</ul>
					<? endif; ?>

					<?php if (is_array($nav_list_right) && !empty($nav_list_right)): ?>
						<ul class="footer__nav-menu flex flex-col flex-gap-m flex-1 hide-tablet">
							<?php foreach ($nav_list_right as $nav): ?>
								<li><a href="<?php echo $nav['href']; ?>"><?php echo $nav['label']; ?></a></li>
							<?php endforeach; ?>
						</ul>
					<? endif; ?>
				</nav>
				<div class="footer-content-main-figure hide-desktop">
					<svg width="100%" height="100%" viewBox="0 0 480 34" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M481.031 1.90715C481.031 1.90715 408.599 28.149 360.067 31.6706C322.586 34.3902 300.966 32.8555 263.999 26.1251C234.168 20.694 220.986 18.0789 190.719 11.6626C168.978 7.05362 153.147 4.97922 132.431 13.0039C118.959 18.2225 99.8238 29.1992 85.4882 31.0476C56.223 34.821 31.6274 20.9127 -1.001 18.4961" stroke="#967866" stroke-opacity="0.2" />
						<rect x="139.785" y="21.7773" width="16" height="16" rx="8" transform="rotate(-169.871 139.785 21.7773)" fill="#EAD9C9" />
					</svg>
				</div>
			</div>
			<div class="footer-content-contacts _no-border flex-1">
				<ul class="flex flex-col flex-gap-xs items-start">
					<?php foreach ($footer_contacts as $contact): ?>
						<? if ($contact['isset']): ?>
							<li>
								<? if ($contact['href']): ?>
									<a class="flex items-center flex-gap-xs" href="<?php echo $contact['href']; ?>">
										<? if ($contact['icon']): ?>
											<span class="icon-size-l text-white"><? get_icon($contact['icon'], 'l'); ?></span>
											<span class="hide-mobile"><?php echo $contact['label']; ?></span>
										<? else: ?>
											<?php echo $contact['label']; ?>
										<? endif; ?>
									</a>
								<? else: ?>
									<span class="flex items-center flex-gap-xs">
										<? if ($contact['icon']): ?>
											<span class="icon-size-l text-white"><? get_icon($contact['icon'], 'l'); ?></span>
											<span class="hide-mobile"><?php echo $contact['label']; ?></span>
										<? else: ?>
											<?php echo $contact['label']; ?>
										<? endif; ?>
									</span>
								<? endif; ?>
							</li>
						<? endif; ?>
					<?php endforeach; ?>
				</ul>
			</div>
			<div>
				<ul class="footer-copyright-list flex flex-col flex-gap-thin flex-1 text-primary weight-300 hide-desktop">
					<li>
						<?php echo get_footer_content('© {current-year} {site-title} | {copyright-text}'); ?>
					</li>
					<li>
						<span>
							© Разработка сайта <a class="text-primary text-decoration-underline" href="<?php echo 'https://german-web.org/'; ?>" target="_blank" rel="nofollow">German Web</a>
						</span>
					</li>
					<li>
						<a class="text-primary text-decoration-underline" href="">Политика конфиденциальности</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>