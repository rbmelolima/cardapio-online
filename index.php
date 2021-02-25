<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once('includes/head.php'); ?>

<body>
  <?php require_once('includes/whatsapp_button.php'); ?>

  <?php require_once('includes/bottom_navigation.php'); ?>

  <?php require_once('includes/header.php'); ?>

  <main class="app-width">
    <section>
      <h3>Horário de funcionamento</h3>
      <?= $wp_opening_hours ?>
    </section>

    <section>
      <h3>Taxa de entrega</h3>
      <?= $wp_delivery_fee ?>
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d911.5712489781821!2d-46.45730337077462!3d-23.950360273398342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1972f97ffc8f%3A0xd7c44877459ef1df!2sR.%20Quarenta%20e%20Seis%2C%2013%20-%20Conjunto%20Residencial%20Humait%C3%A1%2C%20S%C3%A3o%20Vicente%20-%20SP%2C%2011349-330!5e0!3m2!1spt-BR!2sbr!4v1613091747824!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
      </div>
    </section>
  </main>

  <footer></footer>
</body>

</html>