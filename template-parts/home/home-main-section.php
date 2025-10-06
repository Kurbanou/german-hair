<section class="section home-main-section text-white relative">
    <?php if ( is_front_page() ) get_template_part( 'template-parts/home/home', 'banner' ); ?>
    <div class="container">
        <div class="section-content flex flex-col flex-gap-xl flex-gap-xl_responsive">
            <div class="home-main-section__header">
                <h1 class="h1 mb-m mb-me_responsive text-shadow">Diamond Hair</h1>
                <h2 class="h2 text-shadow">Наращивание волос с революционной технологией.<br>Обретите волосы своей мечты за 2 часа без повреждений и дискомфорта!</h2>
            </div>
            <div class="home-main-section__body">
                <div class="flex flex-wrap items-center flex-gap-xs mb-s mb-s_responsive">
                    <div class="text-h-xl text-shadow weight-700">
                        <span>- 50%</span>
                    </div>
                    <div class="text-l leading-2 weight-600 text-shadow">
                        <span>на первое наращивание</span>
                    </div>
                </div>
                <div class="tag-card-list flex flex-wrap flex-gap-s items-stretch">
                    <div class="tag-card"><span>Бесплатная диагностика волос</span></div>
                    <div class="tag-card"><span>Рассрочка 0% на 3 месяца</span></div>
                </div>
            </div>
            <div class="home-main-section__footer">
                <button class="btn w-full-mobile btn-light btn-glowing">
                    <span>Получить консультацию стилиста</span>
                </button>
            </div>
        </div>
        <?php get_template_part( 'template-parts/home/home', 'profit-section', ['section' => false]); ?>
    </div>
    <div class="section-bg-mobile">
        <svg width="100%" height="100%" viewBox="0 0 480 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 38.722C0 38.722 93.7182 9.5387 156.553 5.52504C205.08 2.42538 233.081 4.06733 280.971 11.4128C319.616 17.3403 343.957 26.3191 383.746 28.4153C420.678 30.361 453.198 10.2111 480 1.29053" stroke="#967866" stroke-opacity="0.2"/>
            <rect x="51" y="14.2104" width="16" height="16" rx="8" fill="#EAE4E0"/>
        </svg>
    </div>
</section>