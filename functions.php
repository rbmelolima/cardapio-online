<?php
// Recursos no site
function netto_pastelaria_add_resources()
{
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
}

// Informações da pastelaria
function netto_pastelaria_register_information()
{
  register_post_type(
    'information',
    array(
      'labels' => array(
        'name' => __('Sobre'),
        'add_new' => __('Adicionar informações'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-info',
      'supports' => array('title', 'page-attributes'),
    )
  );
}

// Produtos
function netto_pastelaria_register_products()
{
  register_post_type(
    'products',
    array(
      'labels' => array(
        'name' => __('Cardápio'),
        'add_new' => __('Adicionar produtos'),
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-food',
      'supports' => array('title', 'page-attributes'),
      'taxonomies' => array('category'),
    )
  );
}

// Limpando o painel administrativo
function netto_pastelaria_remove_menu_pages()
{
  remove_menu_page('edit.php'); //Posts
  remove_menu_page('edit-comments.php'); //Comments 
};

// Customizar o Footer do WordPress
function netto_pastelaria_custom_footer_admin()
{
  echo 'Criado por <a href="https://rbmelolima.com.br/">@rbmelolima</a>';
}

//Registrando as funções
add_action('init', 'netto_pastelaria_add_resources');
add_action('init', 'netto_pastelaria_register_information');
add_action('init', 'netto_pastelaria_register_products');
add_action('admin_menu', 'netto_pastelaria_remove_menu_pages');
add_filter('admin_footer_text', 'netto_pastelaria_custom_footer_admin');
