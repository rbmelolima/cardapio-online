<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once('includes/head.php'); ?>

<body>
  <div id="snackbar" class="invisible"></div>

  <?php require_once('includes/bottom_navigation.php'); ?>

  <?php require_once('includes/modal.php'); ?>

  <?php require_once('includes/header.php'); ?>

  <?php require_once('includes/categories_products.php'); ?>

  <main class="app-width">
    <?php
    function returnProductCorrectLoop($category_slug)
    {
      //Criando um loop para cada produto de acordo com sua categoria
      $loop = new WP_Query(array(
        'post_type' => 'products',
        'category_name' => $category_slug,
        'posts_per_page' => 9999,
      ));
      return $loop;
    }

    try {
      //Pegando todas as categorias
      $args = array(
        'echo' => false,
        'taxonomy' => 'category',
        'orderby' => 'ASC'
      );

      $menu = get_categories($args);

      foreach ($menu as $item_menu) {
        if ($item_menu->slug == 'sem-categoria') continue;

        //Criando as seções de produtos
        echo "<section id='" . $item_menu->slug . "' class='section-products'>";
        echo "<h3>" . $item_menu->name . "</h3>";
    ?>

        <?php
        //Renderizando os produtos da categoria atual do array
        $loop_product = returnProductCorrectLoop($item_menu->slug);
        if (have_posts()) : while ($loop_product->have_posts()) : $loop_product->the_post();
            //Criando chaves únicas para os produtos e seus inputs
            $random = substr(md5(uniqid("")), 0, 8);

            $_nameProduct = str_replace(" ", "", get_field('custom_wp_name_product'));
            $_product_key = "product-key-" . $_nameProduct;
            $_input_key = "input-key-" . $random;
        ?>
            <div class="container-product" id="<?= $_product_key ?>">
              <div class="row">
                <div class="image-product" onclick="openImage('<?= the_field('custom_wp_image_product') ?>', '<?= the_field('custom_wp_name_product') ?>')" style="background-image: url('<?= the_field('custom_wp_image_product') ?>');">
                </div>

                <div class="content-product">
                  <div class="description">
                    <strong class="name-product"><?= the_field('custom_wp_name_product') ?></strong>
                    <p class="description-product"><?= the_field('custom_wp_description_product') ?></p>
                  </div>
                </div>

                <div class="information">
                  <p class="price">
                    <?php
                    $value = get_field('custom_wp_price_product');
                    echo 'R$ ' . number_format($value, 2, ',', '.');
                    ?>
                  </p>
                </div>
              </div>
              <div class="row controls">
                <div class="button-quantity-container">
                  <button onclick="decrementQuantityProduct('<?= $_input_key ?>')">-</button>
                  <input class="quantity" type="text" disabled value="1" id="<?= $_input_key ?>">
                  <button onclick="incrementQuantityProduct('<?= $_input_key ?>')">+</button>
                </div>
                <button class="button-add" onclick="addCart('<?= $_product_key ?>'); toggleSnackbar('<?= the_field('custom_wp_name_product') ?>');">
                  Adicionar
                </button>
              </div>
            </div>

            <?php wp_reset_query(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
    <?php
        echo "</section>";
      }

      unset($index);
      unset($menu);
      unset($item_menu);
    } catch (Exception $e) {
      echo "<p> Falha ao carregar os produtos, recarregue a página! </p>";
    }
    ?>

    <?php require_once('includes/footer.php'); ?>

  </main>
</body>

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/src/swiper/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/src/js/index.js"></script>
<script src="<?php bloginfo('template_url'); ?>/src/js/page_products.js"></script>

</html>