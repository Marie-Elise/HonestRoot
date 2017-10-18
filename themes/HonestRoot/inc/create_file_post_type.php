<?php
function ajout_custom_type_smoothie() {
  $post_type = "smoothie";
$labels = array(
        'name'               => 'Smoothies',
        'singular_name'      => 'Smoothie',
        'all_items'          => 'Tous les smoothies',
        'add_new'            => 'Ajouter un smoothie',
        'add_new_item'       => 'Ajouter un nouveau smoothie',
        'edit_item'          => "Modifier le smoothie",
        'new_item'           => 'Nouveau smoothie',
        'view_item'          => "Voir le smoothie",
        'search_items'       => 'Chercher un smoothie',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Smoothie parent :',
        'menu_name'          => 'Smoothies',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt',  'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-video-alt2',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type($post_type, $args );

    $taxonomy = "genre";
    $object_type = array("smoothie");
    $args = array(
          'label' => __( 'Genre' ),
          'rewrite' => array( 'slug' => 'genre' ),
          'hierarchical' => true,
      );
      register_taxonomy( $taxonomy, $object_type, $args );



}
add_action( 'init', 'ajout_custom_type_smoothie' );
