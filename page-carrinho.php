<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once('includes/head.php'); ?>

<body>
  <?php require_once('includes/bottom_navigation.php'); ?>

  <?php require_once('includes/header.php'); ?>

  <main class="app-width">
    <section class="cart-products-section">
      <h4>Carrinho</h4>
      <div class="cart-products-container" id="cart-products-container"></div>
    </section>

    <section class="total-value-section">
      <h4>Valor total</h4>
      <div class="total-value-container">
        <input type="text" id="total-value-input" disabled>
      </div>
    </section>

    <section class="payment-forms-section">
      <h4>Formas de pagamento</h4>
      <select name="payment-forms-select" class="payment-forms-select" id="payment-forms-select">
        <?php
        try {
          $wp_payment_methods_array = explode(",", $wp_payment_methods);

          foreach ($wp_payment_methods_array as $method) {
            echo  "<option value=" . $method . ">" . $method . "</option>";
          }
        } catch (Exception $e) {
          echo "<option value=\"Dinheiro\">Dinheiro</option>";
        }
        ?>
      </select>
    </section>

    <section class="delivery-away-section">
      <h4>Como você quer receber seu pedido?</h4>
      <div class="wrapper-radio">
        <input type="radio" id="delivery-way-retirada" name="delivery-way-radio" value="retirada" checked>
        <label for="retirada">Vou até o local retirar.</label>
      </div>
      <div class="wrapper-radio">
        <input type="radio" id="delivery-way-entrega" name="delivery-way-radio" value="entrega">
        <label for="entrega">Quero receber via delivery!</label>
      </div>
    </section>

    <section class="delivery-address-section hidden" id="delivery-address-section">
      <h4>Endereço de entrega</h4>
      <textarea class="delivery-address-textarea textarea" id="delivery-address-textarea" placeholder="Escreva seu endereço para que possamos fazer a entrega."></textarea>
    </section>

    <section class="observation-section">
      <h4>Observações</h4>
      <textarea class="observation-textarea textarea" id="observation-textarea" placeholder="Você tem alguma observação? Algo relacionado ao pedido ou forma de pagamento..."></textarea>
    </section>

    <section>
      <button class="btn-delivery" id="btn-delivery">Pedir via Whatsapp</button>
    </section>
  </main>

  <footer></footer>
</body>

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/src/js/index.js"></script>
<script src="<?php bloginfo('template_url'); ?>/src/js/cart.js"></script>

</html>