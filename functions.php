<?php
//  Setup theme
// ####################
// Ajoute une action qui sera déclenchée après que le thème soit initialisé
add_action('after_setup_theme','mdc_setup');
// La fonction mdc_setup sera appelée lors de l'action 'after_setup_theme'
function mdc_setup(){
  // Ajoute le support des images mises en avant (thumbnails) pour les articles
  add_theme_support('post-thumbnails');
  // Ajoute le support des menus dans le thème
  add_theme_support('menus');
  // Ajoute le support pour la balise <title> dans l'en-tête HTML
  add_theme_support('title-tag');
  // Enregistre un emplacement de menu appelé 'menu' avec le label 'Menu principal'
  register_nav_menus(array(
    'menu' => 'Menu principale'
  ));
  // Ajoute une taille personnalisée pour les images appelée 'article' avec une largeur de 705 pixels, une hauteur de 512 pixels, et en mode de recadrage automatique (true)
//   add_image_size('article', 705, 512, true);
}