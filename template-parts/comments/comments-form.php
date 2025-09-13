<?php
/**
 * Подшаблон: Форма добавления комментария 
 */
?>
<section class="comment-form"> 
  <div class="container">
    <div class="comment-form_content">
      <h3 class="h3 text-second-dark mb-sm">Не нашли то, что искали?</h3>
      <p class="weight-500 sub">У вас остались вопросы? Задайте их прямо тут, и наши менеджеры ответят вам в рабочее время!</p>
      <form  class="comment-form_form" method="post" action="<?php echo site_url('/wp-comments-post.php'); ?>">
        
        <div class="form-group">
          <div>
            <input type="text" name="author" required placeholder="Ваше имя">
            <span class="error-message" data-for="author"></span>
          </div>
         
          <div>
            <input type="tel" name="phone" required placeholder="Телефон">
            <span class="error-message" data-for="tel"></span>
          </div>
          
        </div>

        <!-- Скрытое поле email с фиктивным значением -->
        <input type="hidden" name="email" value="no@email.local">

        <div class="form-line">
          <textarea name="comment" required placeholder="Ваш вопрос"></textarea>
          <span class="error-message" data-for="comment"></span>
        </div>

        <!-- reCAPTCHA v3 -->
        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

        <!-- ID поста -->
        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>">

        <!-- Обязательное согласие -->
        <div class="form-consent">         
          <input type="checkbox" name="consent" required>
          <p class="weight-400 ">Я ознакомлен и согласен с <a class="weight-600" href="#">политикой обработки персональных данных</a> и даю <a class="weight-600" href="#">согласие на обработку моих персональных данных</a>.</p>          
        </div>

        <button class="btn btn-light btn-glowing submit" type="submit">Отправить</button>
      </form>
    </div>
  </div>
  
</section>

<script src="https://www.google.com/recaptcha/api.js?render=6LcAJcMrAAAAAFanbR4i1YaBunnXmzUZhT1orJ4e"></script>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6LcAJcMrAAAAAFanbR4i1YaBunnXmzUZhT1orJ4e', {action: 'submit'}).then(function(token) {
      document.getElementById('g-recaptcha-response').value = token;
    });
  });
</script>
