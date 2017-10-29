<?php
//Ajout post concept
function ajout_custom_type_concept() {
  $post_type = "concept";
$labels = array(
        'name'               => 'Concepts',
        'singular_name'      => 'Concept',
        'all_items'          => 'Tous les concepts',
        'add_new'            => 'Ajouter un concept',
        'add_new_item'       => 'Ajouter un nouveau concept',
        'edit_item'          => "Modifier le concept",
        'new_item'           => 'Nouveau concept',
        'view_item'          => "Voir le concept",
        'search_items'       => 'Chercher un concept',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Concept parent :',
        'menu_name'          => 'Concept',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt',  'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-lightbulb',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type($post_type, $args );

    $taxonomy = "gamme";
    $object_type = array("concept");
    $args = array(
          'label' => __( 'Gamme' ),
          'rewrite' => array( 'slug' => 'gamme' ),
          'hierarchical' => true,
      );
      register_taxonomy( $taxonomy, $object_type, $args );



}
add_action( 'init', 'ajout_custom_type_concept' );
