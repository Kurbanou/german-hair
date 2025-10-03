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

?>

<section class="section common-team-section relative">
    <div class="section-bg common-team-section-bg">
        <svg height="201" viewBox="0 0 1920 201" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2294.25 1.26318C2294.25 1.26318 1800.86 156.413 1470.06 177.751C1214.59 194.23 1067.17 185.501 815.056 146.449C611.606 114.936 416 58 210 69C15.5707 79.3821 -91.649 152.838 -232.75 200.263" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="1700" y="161" width="22" height="22" rx="11" transform="rotate(180 1700 161)" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="section-bg common-team-section-bg reverse">
        <svg width="1920" height="189" viewBox="0 0 1920 189" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-272 1C-272 1 189.393 128.603 498.743 146.153C737.648 159.706 875.505 152.527 1111.27 120.409C1301.53 94.4909 1435.24 83.5 1633.5 83.5C1815.52 83.5 2058.05 148.995 2190 188" stroke="#967866" stroke-opacity="0.2"/>
        <rect x="238" y="107" width="18" height="18" rx="9" fill="#EAE4E0"/>
        </svg>
    </div>

    <div class="container">
        <div class="section-content">
            <h2 class="h2 mb-sm mb-s_responsive text-second-dark"><?= $team_title;?></h2>
            <?php if($template_slug != 'page-hair-encapsulation'):?>
            <p class="text-l weight-600">
                У нас есть три категории мастеров, для разных видов процедуры, и каждый мастер по наращиванию волос:
            </p>
            <ul class="list-disk list-disk_size-xs mb-sm list-padding-left-xs text-l weight-600">
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
                            <div class="text-xs text-uppercase weight-600 mb-sm">
                                <div><?php echo $hero['role'];?></div>
                                <div><?php echo $hero['experience'];?></div>
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
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M480 37.1803C480 37.1803 390.045 12.3023 329.733 8.88082C283.156 6.23844 256.279 7.63816 210.312 13.9C173.219 18.953 147.15 21.0958 108.497 21.0958C73.0095 21.0958 25.7257 8.32674 9.98378e-06 0.722168" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="385" y="21.3218" width="16" height="16" rx="8" transform="rotate(180 385 21.3218)" fill="#EAE4E0"/>
        </svg>
    </div>
    <div class="section-bg-mobile reverse">
        <svg width="100%" height="100%" viewBox="0 0 480 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M480 35.3774C480 35.3774 407.926 9.01046 359.603 5.38416C322.284 2.58364 300.75 4.06713 263.921 10.7037C234.201 16.0592 221.068 18.6405 190.912 24.9787C169.25 29.5316 153.479 31.567 132.867 23.5073C119.463 18.266 100.432 7.26231 86.1597 5.38417C57.0241 1.55007 32.4988 15.3819 -5.126e-06 17.721" stroke="#967866" stroke-opacity="0.2"/>
        <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 62 0.0400391)" fill="#EAE4E0"/>
        </svg>
    </div>
</section>