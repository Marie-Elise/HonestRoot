<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'create_image_size' );

function create_image_size(){
    add_image_size( 'hub_article_thumbnail', 350, 140, true );
    add_image_size( 'hub_smoothie_thumbnail', 350 );
    add_image_size( 'hub_concept_thumbnail', 650 );
    add_image_size( "hub_recettes_thumbnail", 150, 150, true );
    add_image_size( "hub_detail_recette_thumbnail", 370, 370, true );
}

?>
