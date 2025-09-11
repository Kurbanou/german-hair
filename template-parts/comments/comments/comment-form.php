<?php
/**
 * Подшаблон: Форма добавления комментария
 * Путь: template-parts/comments/comment-form.php
 */

if (comments_open()) :
?>
  <form class="comment-form" method="post" action="<?php echo site_url('/wp-comments-post.php'); ?>">
    <div class="form-group">
      <input type="text" name="author" required placeholder="Ваше имя">
    </div>

    <div class="form-group">
      <input type="email" name="email" required placeholder="Email">
    </div>

    <div class="form-group">
      <textarea name="comment" required placeholder="Ваш вопрос"></textarea>
    </div>

    <!-- reCAPTCHA v3 -->
    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

    <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>">
    <button type="submit">Отправить</button>
  </form>

  <script src="https://www.google.com/recaptcha/api.js?render='ВАШ_КЛЮЧ_САЙТА'"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('ВАШ_КЛЮЧ_САЙТА', {action: 'submit'}).then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
      });
    });
  </script>
<?php
else :
  echo '<p class="comment-closed">Комментирование закрыто.</p>';
endif;
?>
