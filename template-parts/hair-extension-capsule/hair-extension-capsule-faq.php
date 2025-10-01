<?php

/**
 * Displays hair-extension-capsule-faq*/

$post_id = get_the_ID(); //  обязательно для data-post-id


?>

<?php
// Вывод FAQ-блоков
$faq_items = carbon_get_post_meta($post_id, 'faq_items');
if (!empty($faq_items)) {
  get_template_part('template-parts/faq');
}
?>