<?php

/**
 * Displays top navigation
 */
$customizer_header_contact_phone = get_theme_mod('main_contact_phone_setting', '+71234567890');

$customizer_header_contact_whatsapp = get_theme_mod('main_contact_whatsapp_setting', '/');
$customizer_header_contact_whatsapp_label = get_theme_mod('main_contact_whatsapp_label_setting', '');

$customizer_header_contact_instagram = get_theme_mod('main_contact_instagram_setting', '/');
$customizer_header_contact_instagram_label = get_theme_mod('main_contact_instagram_label_setting', '');

$customizer_header_contact_address = get_theme_mod('main_contact_address_setting', '');

$header_contacts = [
	[
		'label' => 'Instagram',
		'isset' => isset($customizer_header_contact_instagram) && !!$customizer_header_contact_instagram,
		'icon' => 'social-instagram',
		'href' => $customizer_header_contact_instagram,
	],
	[
		'label' => 'WhatsApp',
		'isset' => isset($customizer_header_contact_whatsapp) && !!$customizer_header_contact_whatsapp,
		'icon' => 'social-whatsapp',
		'href' => $customizer_header_contact_whatsapp,
	],
	[
		'label' => get_phone_formated($customizer_header_contact_phone),
		'isset' => isset($customizer_header_contact_phone) && !!$customizer_header_contact_phone,
		'icon' => '',
		'href' => 'tel:' . $customizer_header_contact_phone,
	],
];

$nav_list_left = [
	[
		'label' => 'Услуги и цены',
		'href' => '/',
		'sub_nav_list' => [
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
		],
	],
	[
		'label' => 'Наши работы',
		'href' => '/',
	],
	[
		'label' => 'Обучение',
		'href' => '/',
	]
];

$nav_list_right = [
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
	]
];

$nav_list_mobile = [
	[
		'label' => 'Услуги и цены',
		'href' => '/',
		'sub_nav_list' => [
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
		],
	],
	[
		'label' => 'Наши работы',
		'href' => '/',
	],
	[
		'label' => 'Обучение',
		'href' => '/',
	],
	[
		'label' => 'О нас',
		'href' => '/about',
	],
	[
		'label' => 'Вопросы и ответы',
		'href' => '/',
	],
	[
		'label' => 'Контакты',
		'href' => '/contacts',
	]
];

$header_contacts_mobile = [
	[
		'label' => $customizer_header_contact_instagram_label,
		'isset' => isset($customizer_header_contact_instagram) && !!$customizer_header_contact_instagram,
		'icon' => 'social-instagram',
		'href' => $customizer_header_contact_instagram,
	],
	[
		'label' => $customizer_header_contact_whatsapp_label,
		'isset' => isset($customizer_header_contact_whatsapp) && !!$customizer_header_contact_whatsapp,
		'icon' => 'social-whatsapp',
		'href' => $customizer_header_contact_whatsapp,
	],
	[
		'label' => $customizer_header_contact_address,
		'isset' => isset($customizer_header_contact_address) && !!$customizer_header_contact_address,
		'icon' => 'contacts-address',
		'href' => '',
	],
];
?>
<div class="header-content header-desktop">
	<div class="container">

		<div class="header__contacts flex items-center justify-between mb-s text-s">
			<div class="flex">
				<ul class="flex flex-gap-xs items-center text-second">
					<?php foreach ($header_contacts as $contact): ?>
						<? if ($contact['isset']): ?>
							<li>
								<a class="text-second <?php echo $contact['icon'] ? ' text-second-ico' : ''; ?>" href="<?php echo esc_html($contact['href']); ?>"
									<?php if ($contact['icon']) {
										echo ' title="' . esc_html($contact['label']) . '"';
									} ?>>
									<? if ($contact['icon']): ?>
										<? get_icon($contact['icon'], 'l'); ?>
									<? else: ?>
										<?php echo esc_html($contact['label']); ?>
									<? endif; ?>
								</a>
							</li>
						<? endif; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<button class="btn btn-light btn-glowing">
				<span>Связаться</span>
			</button>
		</div>

		<nav class="header__nav weight-700 text-uppercase flex justify-between items-center flex-gap-l w-full" role="navigation">
			<?php if (is_array($nav_list_left) && !empty($nav_list_left)): ?>
				<ul class="header__nav-menu flex justify-between items-center flex-gap-l flex-1">
					<?php foreach ($nav_list_left as $nav): ?>
						<?php $has_sub_menu = isset($nav['sub_nav_list']) && !empty($nav['sub_nav_list']); ?>
						<li><a class="text-second relative" href="<?php echo $nav['href']; ?>"><?php echo $nav['label']; ?>
								<?php if ($has_sub_menu): ?><span class="absolute header__nav-arrow"><? get_icon('arrow-down', 'm'); ?></span><? endif; ?>
							</a>
							<?php if ($has_sub_menu): ?>
								<ul class="header__sub-nav-menu">
									<?php foreach ($nav['sub_nav_list'] as $sub_nav): ?>
										<li><a class="text-second" href="<?php echo esc_html($sub_nav['href']); ?>"><?php echo esc_html($sub_nav['label']); ?></a></li>
									<?php endforeach; ?>
								</ul>
							<? endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<? endif; ?>

			<div class="header__logo">
				<?php get_logo(); ?>
			</div>

			<?php if (is_array($nav_list_right) && !empty($nav_list_right)): ?>
				<ul class="header__nav-menu flex justify-between items-center flex-gap-l flex-1">
					<?php foreach ($nav_list_right as $nav): ?>
						<?php $has_sub_menu = isset($nav['sub_nav_list']) && !empty($nav['sub_nav_list']); ?>
						<li><a class="text-second relative" href="<?php echo $nav['href']; ?>"><?php echo $nav['label']; ?>
								<?php if ($has_sub_menu): ?><span class="absolute header__nav-arrow"><? get_icon('arrow-down', 'm'); ?></span><? endif; ?>
							</a>
							<?php if ($has_sub_menu): ?>
								<ul class="header__sub-nav-menu">
									<?php foreach ($nav['sub_nav_list'] as $sub_nav): ?>
										<li><a class="text-second" href="<?php echo esc_html($sub_nav['href']); ?>"><?php echo esc_html($sub_nav['label']); ?></a></li>
									<?php endforeach; ?>
								</ul>
							<? endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<? endif; ?>
		</nav>

		<nav class="header__nav-mobile weight-700 text-uppercase flex justify-between items-center flex-gap-l w-full" role="navigation">
			<a class="text-second  text-second-ico" href="javascript:void(0);" data-action="header-open">
				<?php get_icon('burger'); ?>
			</a>

			<div class="header__logo">
				<?php get_logo(); ?>
			</div>
		</nav>

	</div>
</div>

<div id="headerMenuModal" class="header-mobile">
	<div class="header-mobile-wrapper flex flex-col">
		<div class="header-mobile-head flex justify-between items-center">
			<?php get_logo(); ?>
			<a class="text-second text-second-ico" href="javascript:void(0);" data-action="header-close">
				<?php get_icon('close'); ?>
			</a>
		</div>

		<div class="header-mobile-menu flex-1">
			<?php if (is_array($nav_list_mobile) && !empty($nav_list_mobile)): ?>
				<ul class="header__nav-menu flex flex-col weight-700 text-uppercase">
					<?php foreach ($nav_list_mobile as $nav): ?>
						<?php $has_sub_menu = isset($nav['sub_nav_list']) && !empty($nav['sub_nav_list']); ?>
						<li <?php echo $has_sub_menu ? ' class="slide-toggle-item _show" ' : ''; ?>>
							<? if ($has_sub_menu): ?>
								<div class="slide-toggle-item-head flex items-center justify-between cursor-pointer" <?php echo $has_sub_menu ? ' data-action="slide-toggle" ' : ''; ?>>
									<a href="<?php echo $nav['href']; ?>"><?php echo $nav['label']; ?></a>
									<span class="header__nav-arrow"><? get_icon('arrow-down', 'm'); ?></span>
								</div>
								<ul class="slide-toggle-item-body header__sub-nav-menu">
									<?php foreach ($nav['sub_nav_list'] as $sub_nav): ?>
										<li><a href="<?php echo esc_html($sub_nav['href']); ?>"><?php echo esc_html($sub_nav['label']); ?></a></li>
									<?php endforeach; ?>
								</ul>
							<? else: ?>
								<a class="flex items-center justify-between" href="<?php echo $nav['href']; ?>">
									<span><?php echo $nav['label']; ?></span>
								</a>
							<? endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<? endif; ?>

			<?php if (is_array($header_contacts_mobile) && !empty($header_contacts_mobile)): ?>
				<ul class="flex flex-col weight-700 flex-gap-xs items-start">
					<?php foreach ($header_contacts_mobile as $contact): ?>
						<? if ($contact['isset']): ?>
							<li>
								<? if ($contact['href']): ?>
									<a class="flex items-center flex-gap-xs" href="<?php echo $contact['href']; ?>">
										<? if ($contact['icon']): ?>
											<span class="icon-size-l ico-primary"><? get_icon($contact['icon'], 'l'); ?></span>
											<?php echo $contact['label']; ?>
										<? else: ?>
											<?php echo $contact['label']; ?>
										<? endif; ?>
									</a>
								<? else: ?>
									<span class="flex items-center flex-gap-xs">
										<? if ($contact['icon']): ?>
											<span class="icon-size-l ico-primary"><? get_icon($contact['icon'], 'l'); ?></span>
											<?php echo $contact['label']; ?>
										<? else: ?>
											<?php echo $contact['label']; ?>
										<? endif; ?>
									</span>
								<? endif; ?>
							</li>
						<? endif; ?>
					<?php endforeach; ?>
				</ul>
			<? endif; ?>
		</div>
	</div>
</div>

<div class="header-fade-wrapper fade-wrapper"></div>