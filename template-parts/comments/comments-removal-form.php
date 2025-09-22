<?php

/**
 * Подшаблон: Форма услуги
 */
?>
<section class="comment-form removal">
  <div class="container">
    <div class="comment-form_content">
      <div class="bg-form">
        <svg width="346" height="443" viewBox="0 0 346 443" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.6845 -242.884C36.2586 -177.273 101.928 -39.7471 192.011 -14.534C418.499 48.8569 540.931 260.915 572.2 326.325" stroke="#B88466" stroke-opacity="0.2" />
          <rect x="303.242" y="15.7119" width="18" height="18" rx="9" transform="rotate(64.4503 303.242 15.7119)" fill="#F1DBC9" />
        </svg>
      </div>

      <h3 class="h3 text-second-dark mb-sm text-center">Если у вас еще остались вопросы,
        оставьте заявку - мы ответим на всё!</h3>

      <form novalidate class="comment-form_form" method="post" action="<?php echo site_url('/wp-comments-post.php'); ?>">

        <div class="form-group">
          <div>
            <input type="text" name="author" required placeholder="Имя">
            <span class="error-message" data-for="author"></span>
          </div>

          <div>
            <input type="tel" name="phone" required placeholder="Телефон">
            <span class="error-message" data-for="phone"></span>
          </div>

        </div>

        <!-- Скрытое поле email с фиктивным значением -->
        <input type="hidden" name="email" value="no@email.local">

        <div class="form-line">
          <textarea name="comment" required placeholder="Ваш вопрос..."></textarea>
          <span class="error-message" data-for="comment"></span>
        </div>

        <!-- reCAPTCHA v3 -->
        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

        <!-- ID поста -->
        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>">

        <!-- Обязательное согласие -->
        <div class="form-consent">
          <div class="checkbox">
            <input type="checkbox" name="consent" required>
            <svg class="galka" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.29396 14.6305C4.85896 14.6305 4.44697 14.4275 4.18297 14.0775L0.609965 9.35653C0.499243 9.21083 0.41838 9.04471 0.372015 8.86768C0.325651 8.69066 0.314697 8.50622 0.339783 8.32496C0.364868 8.14369 0.425499 7.96916 0.518197 7.81138C0.610896 7.6536 0.733836 7.51568 0.879965 7.40553C1.02572 7.2945 1.19199 7.21338 1.36922 7.16684C1.54644 7.1203 1.73111 7.10926 1.91262 7.13435C2.09412 7.15945 2.26888 7.22018 2.42682 7.31305C2.58477 7.40593 2.7228 7.52912 2.83297 7.67553L5.18396 10.7795L11.095 1.28753C11.291 0.97413 11.6033 0.751277 11.9635 0.667854C12.3236 0.584431 12.7021 0.647249 13.016 0.84253C13.669 1.24853 13.87 2.10853 13.462 2.76253L6.47796 13.9725C6.35874 14.1648 6.19441 14.325 5.99924 14.4393C5.80406 14.5536 5.58394 14.6186 5.35796 14.6285L5.29396 14.6305Z" fill="white" />
            </svg>
          </div>
          <p class="weight-400 ">Я ознакомлен и согласен с <a class="weight-600" href="#">политикой обработки персональных данных</a> и даю <a class="weight-600" href="#">согласие на обработку моих персональных данных</a>.</p>
        </div>

        <button class="btn btn-light btn-glowing submit" type="submit">Отправить</button>
      </form>

      <div class="comment-form_contact">
         
      </div>
    </div>
  </div> 
  <div class="section-bg-mobile rtl">
    <svg width="480" height="39" viewBox="0 0 480 39" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M480 37.9794C480 37.9794 386.282 8.79602 323.447 4.78236C274.92 1.6827 246.919 3.32466 199.029 10.6701C160.384 16.5977 136.043 25.5765 96.2539 27.6726C59.3219 29.6183 26.8019 9.46846 -1.32248e-05 0.547852" stroke="#967866" stroke-opacity="0.2" />
      <rect width="16" height="16" rx="8" transform="matrix(-1 0 0 1 429 13.4678)" fill="#EAE4E0" />
    </svg>
  </div>

</section>

<script src="https://www.google.com/recaptcha/api.js?render=6LcAJcMrAAAAAFanbR4i1YaBunnXmzUZhT1orJ4e"></script>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6LcAJcMrAAAAAFanbR4i1YaBunnXmzUZhT1orJ4e', {
      action: 'submit'
    }).then(function(token) {
      document.getElementById('g-recaptcha-response').value = token;
    });
  });
</script>