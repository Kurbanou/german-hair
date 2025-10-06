<?php
/**
 * Displays our team section
 */
$template_slug = basename(get_page_template(), '.php');

if ($template_slug === 'page-hair-encapsulation') { 
    $team_title = 'Наши мастера';
} else {
    $team_title = 'Команда профессионалов';
}

$team_hero_list = [
    [
        'name' => 'Алина',
        'role' => 'Мастер',
        'experience' => '6 лет опыта',
        'image' => get_template_directory_uri() . '/assets/images/team/team-hero-1.jpg',
    ],
    [
        'name' => 'Александра',
        'role' => 'Мастер',
        'experience' => '6 лет опыта',
        'image' => get_template_directory_uri() . '/assets/images/team/team-hero-2.jpg',
    ],
    [
        'name' => 'Михаил',
        'role' => 'Мастер',
        'experience' => '6 лет опыта',
        'image' => get_template_directory_uri() . '/assets/images/team/team-hero-3.jpg',
    ],
    [
        'name' => 'Милана',
        'role' => 'Мастер',
        'experience' => '6 лет опыта',
        'image' => get_template_directory_uri() . '/assets/images/team/team-hero-4.jpg',
    ],
    [
        'name' => 'Светлана',
        'role' => 'Мастер',
        'experience' => '6 лет опыта',
        'image' => get_template_directory_uri() . '/assets/images/team/team-hero-5.jpg',
    ]
];


/* Фон для десктопа */
function render_bg_desktop__team($template_slug) {
    if ($template_slug === 'page-hair-extension-capsule') { ?>
            <div class="section-bg common-team-section-bg extension-capsule">
                <svg width="1920" height="298" viewBox="0 0 1920 298" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2432 297.5C2432 297.5 1955.18 241.54 1634 159.5C1450 112.5 1238.62 97.4487 986.5 136.5C783.05 168.013 562 147.5 356 136.5C161.571 126.118 -24.899 48.4253 -166 1" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 1617 145)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-removal') { ?>
            <div class="section-bg common-team-section-bg hair-removal">
                <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2241 1C2241 1 1779.61 128.603 1470.26 146.153C1231.35 159.706 1093.5 152.527 857.726 120.409C667.469 94.4909 533.757 83.5 335.5 83.5C153.478 83.5 -89.0489 148.995 -221 188" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="18" height="18" rx="9" transform="matrix(-1 0 0 1 1731 107)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-correction') { ?>
            <div class="section-bg common-team-section-bg hair-correction">
                <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-272 1C-272 1 189.393 128.603 498.743 146.153C737.648 159.706 875.505 152.527 1111.27 120.409C1301.53 94.4909 1435.24 83.5 1633.5 83.5C1815.52 83.5 2058.05 148.995 2190 188" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="238" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-encapsulation') { ?>
            <div class="section-bg common-team-section-bg hair-encapsulation">
                <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-281 1C-281 1 180.393 128.603 489.743 146.153C728.648 159.706 866.505 178.271 1102.27 146.153C1292.53 120.235 1426.24 109.244 1624.5 109.244C1806.52 109.244 2049.05 148.995 2181 188" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="229" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } else { ?> 
            <div class="section-bg common-team-section-bg extension-tape">
                <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-369 1C-369 1 92.3928 128.603 401.743 146.153C640.648 159.706 778.505 152.527 1014.27 120.409C1204.53 94.4909 1338.24 83.5 1536.5 83.5C1718.52 83.5 1961.05 148.995 2093 188" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="141" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php }
}

/* Фон для мобильной версии */
function render_bg_mobile__team($template_slug) {
        if ($template_slug === 'page-hair-extension-capsule') { ?>
            <div class="section-bg-mobile mob-extension-capsule">
                <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M480 1.21957C480 1.21957 390.045 26.0975 329.733 29.5191C283.156 32.1614 256.279 30.7617 210.312 24.4999C173.219 19.4468 147.15 17.304 108.497 17.304C73.0095 17.304 25.7257 30.0731 9.98378e-06 37.6777" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="16" height="16" rx="8" transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 63 15.9434)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-removal') { ?>
            <div class="section-bg-mobile mob-hair-removal">
                <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-3.18727e-06 37.1593C-3.18727e-06 37.1593 89.9547 12.2814 150.267 8.85983C196.844 6.21746 223.721 7.61718 269.688 13.879C306.781 18.9321 332.85 21.0749 371.503 21.0749C406.99 21.0749 454.274 8.30578 480 0.701214" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="16" height="16" rx="8" transform="matrix(1 8.74228e-08 8.74228e-08 -1 95 21.3008)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-correction') { ?>
            <div class="section-bg-mobile mob-hair-correction">
                <svg width="100%" height="100%" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M480 37.6847C480 37.6847 390.045 12.8067 329.733 9.38521C283.156 6.74284 256.279 8.14255 210.312 14.4044C173.219 19.4574 147.15 21.6002 108.497 21.6002C73.0095 21.6002 25.7257 8.83113 9.98378e-06 1.22656" stroke="#967866" stroke-opacity="0.2"/>
                <rect x="385" y="21.8262" width="16" height="16" rx="8" transform="rotate(180 385 21.8262)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } elseif ($template_slug === 'page-hair-encapsulation') { ?>
            <div class="section-bg-mobile mob-hair-encapsulation">
                <svg width="100%" height="100%" viewBox="0 0 480 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M480 35.3764C480 35.3764 407.926 9.00949 359.603 5.38318C322.284 2.58267 300.75 4.06616 263.921 10.7027C234.201 16.0582 221.068 18.6395 190.912 24.9777C169.25 29.5306 153.479 31.566 132.867 23.5063C119.463 18.2651 100.432 7.26133 86.1597 5.38319C57.0241 1.54909 32.4988 15.3809 -5.126e-06 17.72" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 62 0.0390625)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php } else { ?> 
            <div class="section-bg-mobile mob-extension-tape">
                <svg width="100%" height="100%" viewBox="0 0 480 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M480 31.8354C480 31.8354 407.926 5.46847 359.603 1.84217C322.284 -0.958347 300.75 0.525141 263.921 7.16171C234.201 12.5172 221.068 15.0985 190.912 21.4367C169.25 25.9896 153.479 28.025 132.867 19.9653C119.463 14.724 100.432 3.72031 86.1597 1.84218C57.0241 -1.99193 32.4988 11.8399 -5.126e-06 14.179" stroke="#967866" stroke-opacity="0.2"/>
                <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 434 6)" fill="#EAE4E0"/>
                </svg>
            </div>
        <?php }
    }
?>

<section class="section common-team-section relative">
    <?php render_bg_desktop__team($template_slug); ?>
    <div class="container">
        <div class="section-content">
            <h2 class="h2 mb-sm mb-s_responsive text-second-dark"><?= $team_title;?></h2>
            <?php if($template_slug != 'page-hair-encapsulation'):?>
            <p class="text-l weight-600">
                У нас есть три категории мастеров, для разных видов процедуры, и каждый мастер по наращиванию волос:
            </p>
            <ul class="list-disk list-disk_size-xs mb-sm list-padding-left-xs text-l weight-500">
                <li>эксперт в своем деле</li>
                <li>прошел 500+ часов практики</li>
                <li>имеет международные сертификаты</li>
            </ul>
            <?php endif; ?>
            <ul class="team-hero-list flex flex-gap-l flex-gap-l_responsive items-center justify-center flex-wrap">
                <?php foreach( $team_hero_list as $hero ): ?>
                    <li class="team-hero-item flex flex-col text-center items-center">
                        <div class="team-hero-item-wrapper w-full flex flex-col flex-1">
                            <div class="text-xxl mb-s font-family-second"><?php echo $hero['name'];?></div>
                            <div class="text-xs text-uppercase weight-600 mb-m">
                                <div><?php echo $hero['role'];?></div>
                                <div class="team-hero-experience"><?php echo $hero['experience'];?></div>
                            </div>
                            <div class="flex-1 team-hero-image-wrapper">
                                <img class="img-cover" src="<?php get_media_placeholder(); ?>" data-src="<?php echo $hero['image'];?>" alt="<?php echo $hero['name'];?>" title="<?php echo $hero['name'];?> (изображение)">
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php render_bg_mobile__team($template_slug); ?>
</section>