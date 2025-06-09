<?php 

function custom_ocultar_menus_para_outros_usuarios() {
    $usuario_completo_login = 'ddinizg'; 
    $current_user = wp_get_current_user();

    if ($current_user->user_login !== $usuario_completo_login) {

        // Remover menus para os demais usuários
        //remove_menu_page('index.php');                  // Painel (Dashboard)
        //remove_menu_page('edit.php');                  // Posts
        //remove_menu_page('upload.php');                // Mídia
        //remove_menu_page('edit.php?post_type=page');   // Páginas
        remove_menu_page('edit-comments.php');         // Comentários
        remove_menu_page('themes.php');                // Aparência
        remove_menu_page('plugins.php');               // Plugins
        remove_menu_page('users.php');                 // Usuários
        remove_menu_page('tools.php');                 // Ferramentas
        remove_menu_page('options-general.php');       // Configurações
        remove_menu_page('woocommerce');               // WooCommerce
    }
}
add_action('admin_menu', 'custom_ocultar_menus_para_outros_usuarios', 999);


//Enfileira todos os estilos e scripts
function enqueue_site_assets() {

  wp_enqueue_script('jquery');
  wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
  wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['jquery'], null, true);
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.min.css');
  wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
  wp_localize_script('theme-scripts', 'ajaxurl', array(
    'url' => admin_url('admin-ajax.php')
  ));
}
add_action('wp_enqueue_scripts', 'enqueue_site_assets');


//Ativa suporte a imagens destacadas
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 200, true);


//Desativa o editor Gutenberg
add_filter('use_block_editor_for_post_type', 'desativar_gutenberg_para_todos', 10, 2);
function desativar_gutenberg_para_todos($can_edit, $post_type) {
  return false;
}

//Importa os arquivos dos CPTs
//require_once get_template_directory() . '/custom-post/cpt-produtos.php';