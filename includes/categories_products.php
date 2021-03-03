<div class="categories-products-sticky">
  <div class="content app-width">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
        function returnLink($slug, $name, $active)
        {
          if ($active == true) {
            echo "<a href='#" . $slug . "'class='active'>" . $name . "</a>";
          } else {
            echo "<a href=#" . $slug . ">" . $name . "</a>";
          }
        }

        try {
          $args = array(
            'echo' => false,
            'taxonomy' => 'category',
            'orderby' => 'ASC'
          );

          $menu = get_categories($args);
          $index = 0;

          foreach ($menu as $item_menu) {
            $index++;

            if ($item_menu->slug == 'sem-categoria') {
              continue;
            }
            echo "<div class='swiper-slide'>";
            if ($index == 1) {
              returnLink($item_menu->slug, $item_menu->name, true);
            } else {
              returnLink($item_menu->slug, $item_menu->name, false);
            }
            echo "</div>";
          }
          unset($index);
          unset($menu);
          unset($item_menu);
        } catch (Exception $e) {
          echo "<p> Falha ao carregar as categorias, recarregue a página! </p>";
        }
        ?>
      </div>
    </div>
  </div>
</div>