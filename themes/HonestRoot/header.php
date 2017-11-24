<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <!-- Appel du fichier style.css de notre thème -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <!-- Execution de la fonction wp_head() obligatoire ! -->
  <?php wp_head(); ?>

</head>
   <header id="header">
     <div id="wptime-plugin-preloader"></div>
         <!-- menu -->
         <header class="menu-honest-root">
         <a href="<?php bloginfo("url"); ?>"> <img src="<?= IMAGES_URL; ?>/logo.png" alt="<?php bloginfo("title"); ?>" class="logo"/></a>
         <input class="menu-btn" type="checkbox" id="menu-btn" />
         <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
         <?php
         $args=array(
           'theme_location' => 'header', // nom du slug
           'container' => "nav",
           'menu' => 'header_fr', // nom à donner cette occurence du menu
           'menu_class' => 'menu_header', // class à attribuer au menu
           'menu_id' => 'menu_id' // id à attribuer au menu
         );
         wp_nav_menu($args);
         ?>
         </header>
   </header>
   <body>
