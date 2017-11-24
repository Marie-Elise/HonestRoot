<?php
function ajout_scripts() {

// ENREGISTREMENT SCRIPTS
// main.js
wp_register_script('main_script', JS_URL.'/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');
// recette.js
wp_register_script('recette_script', JS_URL.'/recette.js', array('jquery'),'1.1', true);
wp_enqueue_script('recette_script');
//bootstrap
wp_register_script('bootstrap_script', JS_URL.'/bootstrap.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('bootstrap_script');
// owl carousel
wp_register_script('jquery_script', JS_URL.'/jquery.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('jquery_script');
wp_register_script('owl_script', JS_URL.'/owl.carousel.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('owl_script');


// FONTS
wp_register_style( 'googlefont_style', 'https://fonts.googleapis.com/css?family=Nunito' );
wp_enqueue_style( 'googlefont_style' );

wp_register_style( 'googlefont_style', 'https://fonts.googleapis.com/css?family=Muli' );
wp_enqueue_style( 'googlefont_style' );


// ENREGISTREMENT STYLES
// main.css
wp_register_style( 'main_style', CSS_URL.'/main.css' );
wp_enqueue_style( 'main_style' );
// concept.css
wp_register_style( 'concept_style', CSS_URL.'/concept.css' );
wp_enqueue_style( 'concept_style' );
// produits.css
wp_register_style( 'produits_style', CSS_URL.'/produits.css' );
wp_enqueue_style( 'produits_style' );
// single.css
wp_register_style( 'single_style', CSS_URL.'/single.css' );
wp_enqueue_style( 'single_style' );
// contact.css
wp_register_style( 'contact_style', CSS_URL.'/contact.css' );
wp_enqueue_style( 'contact_style' );
// home.css
wp_register_style( 'home_style', CSS_URL.'/home.css' );
wp_enqueue_style( 'home_style' );
//bootstrap
wp_register_style( 'bootstrap_style', CSS_URL.'/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap_style' );
// owl carousel
wp_register_style( 'carousel_style', CSS_URL.'/owl.carousel.min.css' );
wp_enqueue_style( 'carousel_style' );
wp_register_style( 'theme_style', CSS_URL.'/owl.theme.default.min.css' );
wp_enqueue_style( 'theme_style' );

}
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
