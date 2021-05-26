<head>
  <meta charset="UTF-8">
  <meta name="author" content="@rbmelolima" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="<?php bloginfo('tags'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/css/style.css" rel="preload" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/swiper/swiper-bundle.min.css" />

  <title>Netto Pastelaria</title>
</head>

<?php
$wp_background = "";
$wp_opening_hours = "";
$wp_delivery_humaita = 0;
$wp_delivery_continental = 0;
$wp_payment_methods = "";
$wp_address = "";
$wp_facebook = "";
$wp_instagram = "";
$wp_whatsapp = "";

$loop = new WP_Query(array(
  'post_type' => 'information',
  'posts_per_page' => 1,
  'order' => 'ASC',
));
while ($loop->have_posts()) :  $loop->the_post();
  $wp_background = get_field('custom_wp_background');
  $wp_opening_hours = get_field('custom_wp_opening_hours');
  $wp_delivery_humaita = get_field('custom_wp_delivery_humaita');
  $wp_delivery_continental = get_field('custom_wp_delivery_continental');
  $wp_payment_methods = get_field('custom_wp_payment_methods');
  $wp_address = get_field('custom_wp_address');
  $wp_facebook = get_field('custom_wp_facebook');
  $wp_instagram = get_field('custom_wp_instagram');
  $wp_whatsapp = get_field('custom_wp_whatsapp');
endwhile;

$price_delivery_humaita = number_format($wp_delivery_humaita, 2, ',', '');
$price_delivery_continental = number_format($wp_delivery_continental, 2, ',', '');

wp_reset_query();
?>