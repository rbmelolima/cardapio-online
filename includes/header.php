<?php
$theme_custom_logo_id = get_theme_mod('custom_logo');
$theme_image = wp_get_attachment_image_src($theme_custom_logo_id, 'full');
$theme_logo_url = $theme_image[0];
?>
<header>
  <div class="image" style="background-image: url(<?= $wp_background ?>);">
    <div class="overlay-black">
      <div class="content">
        <img src="<?= $theme_logo_url ?>" alt="">
        <h1>Netto Pastelaria</h1>
      </div>
    </div>
  </div>
</header>