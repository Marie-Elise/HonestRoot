<?php
function ajout_scripts() {

// ENREGISTREMENT SCRIPTS
// main.js
wp_register_script('main_script', JS_URL.'/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');
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
