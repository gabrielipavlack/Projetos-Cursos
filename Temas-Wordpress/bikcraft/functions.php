<?php 

// Funções do Wordpress para Limpar o código do Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus do Wordpress
add_theme_support('menus');


function my_custom_sizes(){
// nomes dos tamanhos de imagens já existentens no wordpress: large, medium e thumb.

  // função do Wordpress:
  add_image_size('large', 1400, 380, true);
  add_image_size('medium', 768, 380, true); 
}

//função wordpress: qnd acontecer x, add meu Y.
add_action('after_setup_theme', 'my_custom_sizes');

?>