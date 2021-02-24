<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once('includes/head.php'); ?>

<body>
  <?php require_once('includes/bottom_navigation.php'); ?>

  <?php require_once('includes/modal.php'); ?>

  <?php require_once('includes/header.php'); ?>

  <div class="categories-products-sticky">
    <div class="content app-width">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="#pastel" class="active">Pastel</a></div>
          <div class="swiper-slide"><a href="#bebidas">Bebidas</a></div>
        </div>
      </div>
    </div>
  </div>

  <main class="app-width">
    <section id="pastel" class="section-products">
      <h3>Pastel</h3>

      <div class="container-product" id="product-key-x-salada">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'X-Salada')" style="background-image: url('https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">X-Salada</strong>
              <p class="description-product">Hambúrguer, alface, tomate, cheddar</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 7,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-87897897')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-87897897">
            <button onclick="incrementQuantityProduct('input-key-hash-87897897')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-x-salada')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>
    </section>

    <section id="bebidas" class="section-products">
      <h3>Bebidas</h3>

      <div class="container-product" id="product-key-x-salada">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'X-Salada')" style="background-image: url('https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">X-Salada</strong>
              <p class="description-product">Hambúrguer, alface, tomate, cheddar</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 7,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-87897897')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-87897897">
            <button onclick="incrementQuantityProduct('input-key-hash-87897897')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-x-salada')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>

      <div class="container-product" id="product-key-pizza-mussarela">
        <div class="row">
          <div class="image-product" onclick="openImage('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80', 'Pizza de mussarela')" style="background-image: url('https://images.unsplash.com/photo-1539451652256-f485173cab9b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80');">
          </div>

          <div class="content-product">
            <div class="description">
              <strong class="name-product">Pizza de mussarela</strong>
              <p class="description-product">Mussarela, tomate, orégano</p>
            </div>
          </div>

          <div class="information">
            <p class="price">R$ 22,00</p>
          </div>
        </div>
        <div class="row controls">
          <div class="button-quantity-container">
            <button onclick="decrementQuantityProduct('input-key-hash-5614')">-</button>
            <input class="quantity" type="text" disabled value="1" id="input-key-hash-5614">
            <button onclick="incrementQuantityProduct('input-key-hash-5614')">+</button>
          </div>
          <button class="button-add" onclick="addCart('product-key-pizza-mussarela')">Adicionar</button>
        </div>
      </div>
    </section>
  </main>

  <footer></footer>

  <!-- Scripts -->
  <script src="<?php bloginfo('template_url'); ?>/src/js/index.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/src/swiper/swiper-bundle.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/src/js/products.js"></script>

</body>

</html>