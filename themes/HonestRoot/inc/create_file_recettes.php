<?php

function ajout_custom_type_recettes() {
    $post_type = "recettes";
    $labels = array(
        'name'               => 'Les recettes',
        'singular_name'      => 'La recette',
        'all_items'          => 'Toutes les recettes',
        'add_new'            => 'Ajouter une recette',
        'add_new_item'       => 'Ajouter une recette',
        'edit_item'          => "Modifier une recette",
        'new_item'           => 'Nouvelle recette',
        'view_item'          => "Voir la recette",
        'search_items'       => 'Chercher une recette',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat dans la corbeille',
        'parent_item_colon'  => 'Votre recette appartient à la catégorie :',
        'menu_name'          => 'Recettes',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt',  'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-book',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    $taxonomy = "type";
    $object_type = array("recettes");
    $args = array(
          'label' => __( 'Type' ),
          'rewrite' => array( 'slug' => 'type' ),
          'hierarchical' => true,
      );
    register_taxonomy( $taxonomy, $object_type, $args );

    $taxonomy = "ingredients";
    $object_type = array("recettes");
    $args = array(
          'label' => __( 'Ingrédients' ),
          'rewrite' => array( 'slug' => 'ingredients' ),
          'hierarchical' => false,
      );
    register_taxonomy( $taxonomy, $object_type, $args );


}
add_action( 'init', 'ajout_custom_type_recettes' );
