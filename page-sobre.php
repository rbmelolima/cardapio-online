<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once('includes/head.php'); ?>

<body>
  <?php require_once('includes/bottom_navigation.php'); ?>

  <?php require_once('includes/header.php'); ?>

  <main class="app-width">
    <section>
      <h3>Horário de funcionamento</h3>
      <?= $wp_opening_hours ?>
    </section>

    <section>
      <h3>Taxa de entrega</h3>
      <p><strong>Humaitá: </strong>R$ <?= $price_delivery_humaita ?></p>

      <p><strong>Continental: </strong>R$ <?= $price_delivery_continental ?></p>
    </section>

    <section>
      <h3>Formas de pagamento</h3>
      <div class="payment-container">
        <?php
        try {
          $wp_payment_methods_array = explode(",", $wp_payment_methods);

          foreach ($wp_payment_methods_array as $method) {
            echo  "<span class=\"payment-chip\">" . $method . "</span>";
          }
        } catch (Exception $e) {
          echo "<span class=\"payment-chip\"> Dinheiro</span>";
        }
        ?>
      </div>
    </section>

    <section>
      <h3>Endereço</h3>
      <?= $wp_address ?>
    </section>

    <section>
      <h3>Redes sociais</h3>
      <div class="social-media-container">
        <a class="social-media-facebook" href="<?= $wp_facebook ?>">
          <img src="<?php bloginfo('template_url'); ?>/src/images/facebook.svg" alt="Facebook">
        </a>
        <a class="social-media-instagram" href="<?= $wp_instagram ?>">
          <img src="<?php bloginfo('template_url'); ?>/src/images/instagram.svg" alt="Instagram">
        </a>
        <a class="social-media-whatsapp" href="https://api.whatsapp.com/send?phone=<?= $wp_whatsapp ?>" title="<?= $wp_whatsapp ?>">
          <img src="<?php bloginfo('template_url'); ?>/src/images/whatsapp.svg" alt="Whatsapp" />
        </a>
      </div>
    </section>

    <?php require_once('includes/footer.php'); ?>
  </main>
</body>

</html>