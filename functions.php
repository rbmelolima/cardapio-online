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


if (function_exists('acf_add_local_field_group')) :
  acf_add_local_field_group(array(
    'key' => 'group_6036e6f4af656',
    'title' => 'Produtos',
    'fields' => array(
      array(
        'key' => 'field_6036e757e7df2',
        'label' => 'Foto',
        'name' => 'custom_wp_image_product',
        'type' => 'image',
        'instructions' => 'Insira uma foto do produto',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_6036e733e7df1',
        'label' => 'Nome do produto',
        'name' => 'custom_wp_name_product',
        'type' => 'text',
        'instructions' => 'Digite o nome do produto',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_6036e7e4e7df3',
        'label' => 'Descrição do produto',
        'name' => 'custom_wp_description_product',
        'type' => 'text',
        'instructions' => 'Digite uma descrição rápida do produto, seja os ingredientes ou quantidade de líquido.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Por exemplo: Carne, pimenta biquinho, orégano',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_6036eaefe7df4',
        'label' => 'Preço',
        'name' => 'custom_wp_price_product',
        'type' => 'number',
        'instructions' => 'Digite o preço do seu produto. Não é necessário colocar o prefixo de dinheiro',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'products',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
      0 => 'permalink',
      1 => 'the_content',
      2 => 'excerpt',
      3 => 'discussion',
      4 => 'comments',
      5 => 'revisions',
      6 => 'slug',
      7 => 'author',
      8 => 'format',
      9 => 'page_attributes',
      10 => 'featured_image',
      11 => 'tags',
      12 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_6036e2f6d06d1',
    'title' => 'Sobre a pastelaria',
    'fields' => array(
      array(
        'key' => 'field_6036e30faa805',
        'label' => 'Capa',
        'name' => 'custom_wp_background',
        'type' => 'image',
        'instructions' => 'Insira uma imagem para utilizar como capa do site.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'large',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_6036e353aa806',
        'label' => 'Logo',
        'name' => 'custom_wp_logo',
        'type' => 'image',
        'instructions' => 'Insira o logo que você deseja mostrar no site. *(Qualquer logo será ligeiramente torto para a direita.)',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_6036e3a3aa807',
        'label' => 'Horário de funcionamento',
        'name' => 'custom_wp_opening_hours',
        'type' => 'textarea',
        'instructions' => 'Insira os horários em que seu estabelecimento estará funcionando',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Por exemplo: De segunda à sexta abrimos das 10h00 às 18h00. Aos final de semana, abrimos das 09h00 às 22h00.',
        'maxlength' => '',
        'rows' => 5,
        'new_lines' => 'wpautop',
      ),
      array(
        'key' => 'field_603ed98437a8f',
        'label' => 'Taxa de entrega para o Humaitá',
        'name' => 'custom_wp_delivery_humaita',
        'type' => 'number',
        'instructions' => 'Digite o preço da taxa de entrega para o Humaitá',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array(
        'key' => 'field_603ed9c237a90',
        'label' => 'Taxa de entrega para o Continental',
        'name' => 'custom_wp_delivery_continental',
        'type' => 'number',
        'instructions' => 'Digite o preço da taxa de entrega para o Humaitá',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array(
        'key' => 'field_6036e45aaa809',
        'label' => 'Formas de pagamento',
        'name' => 'custom_wp_payment_methods',
        'type' => 'textarea',
        'instructions' => 'Escreva suas formas de pagamento entre vírgulas.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Por exemplo: Pix, Visa, Mastercard, Dinheiro, Vale refeição',
        'maxlength' => '',
        'rows' => 5,
        'new_lines' => '',
      ),
      array(
        'key' => 'field_6036e51baa80a',
        'label' => 'Endereço',
        'name' => 'custom_wp_address',
        'type' => 'text',
        'instructions' => 'Insira o local do seu estabelecimento pelo Google Maps.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Insira aqui o código do iframe do Google Maps',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_6036e56eaa80b',
        'label' => 'Facebook',
        'name' => 'custom_wp_facebook',
        'type' => 'url',
        'instructions' => 'Digite o link da sua página no Facebook',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Por exemplo: https://pt-br.facebook.com/',
      ),
      array(
        'key' => 'field_6036e5a4aa80c',
        'label' => 'Instagram',
        'name' => 'custom_wp_instagram',
        'type' => 'url',
        'instructions' => 'Digite o link para sua página no Instagram',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Por exemplo: https://www.instagram.com/?hl=pt-br',
      ),
      array(
        'key' => 'field_6036e652aa80d',
        'label' => 'Whatsapp',
        'name' => 'custom_wp_whatsapp',
        'type' => 'number',
        'instructions' => 'Insira o seu número do Whatsapp',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Por exemplo: 5513988282878',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'information',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
      0 => 'permalink',
      1 => 'the_content',
      2 => 'excerpt',
      3 => 'discussion',
      4 => 'comments',
      5 => 'revisions',
      6 => 'slug',
      7 => 'author',
      8 => 'format',
      9 => 'page_attributes',
      10 => 'featured_image',
      11 => 'categories',
      12 => 'tags',
      13 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => '',
  ));

endif;
