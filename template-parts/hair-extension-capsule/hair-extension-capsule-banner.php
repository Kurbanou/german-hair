<?php

/**
 * Displays extension-capsule banner
 */

$fon = get_field('fon');
function get_contacts_block_data()
{
  return [
    [
      'icon'  => 'adress-group',
      'title' => 'Адрес',
      'content' => [
        ['type' => 'text', 'value' => get_theme_mod('main_contact_address_setting', '')],
      ],
    ],
  ];
}

$contacts_block = get_contacts_block_data();
?>

<?php if ($fon): ?>
  <section class="capsule banner" style="
  background-image: 
    url('<?php echo esc_url($fon); ?>');
  background-size: cover;
  background-position: 75% 0%;
  background-repeat: no-repeat;
">

  <?php else: ?>
    <section class="capsule banner">
    <?php endif; ?>
    <div class="container">
      <div class="capsule-banner__content">

        <div class="banner_title">
          <h1 class="text-shadow">Капсульное наращивание волос в салоне</h1>
          <?php get_logo(); ?>
        </div>

        <h2>Ваши роскошные локоны за один визит</h2>
        <p class="banner-p">Мечтаете о длинных, густых волосах, которые выглядят на 100% естественно? <br />Капсульное наращивание в нашем салоне — это современное решение для мгновенного преображения. Всего за 2-3 часа вы получите идеальные волосы желаемой длины и объема, которые невозможно отличить от натуральных.</p>
        <!-- <div class="cat">
          <span>Запишитесь сейчас и получите бесплатную консультацию!</span>
        </div> -->

        <div class="discounts">
          <button class="btn btn-light btn-glowing">Записаться</button>
          <div class="discount">
            <!-- <div class="proc">- 10%</div> -->
            <div class="text">Горячее капсульное наращивание волос вы можете сделать <br />в нашем салоне <?php echo esc_html(wp_strip_all_tags($contacts_block[0]['content'][0]['value'])); ?>
            </div>
          </div>
          <!-- <?php get_icon('bant', 'discounts-icon') ?> -->
        </div>
      </div>
    </div>
    </section>