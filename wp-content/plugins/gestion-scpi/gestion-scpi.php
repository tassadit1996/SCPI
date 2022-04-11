<?php
/**
 * Plugin Name: Gestion SCPI Plugin
 */
add_action('init', function() {


    register_post_type('scpi', [
        'label' => 'SCPI',
        'menu_icon' => 'dashicons-chart-bar',
        'labels' => [
        'name'                     => 'SCPI', 'gestion-scpi',
        'singular_name'            => 'SCPI', 'gestion-scpi',
        'add_new'                  => 'Ajouter','SCPI', 'gestion-scpi',
        'add_new_item'             => 'Ajouter nouvelle SCPI', 'gestion-scpi',
        'edit_item'                => 'Editer SCPI', 'gestion-scpi',
        'new_item'                 => 'Nouvelle SCPI', 'gestion-scpi',
        'view_item'                => 'Voir SCPI', 'gestion-scpi',
        'view_items'               => 'Voir toutes SCPI', 'gestion-scpi',
        'search_items'             => 'Recherche SCPI', 'gestion-scpi',
        'not_found'                => 'Pas SCPI trouvée', 'gestion-scpi',
        'not_found_in_trash'       => 'Pas SCPI trouvée dans corbeille', 'gestion-scpi',
        'all_items'                => 'Toutes les SCPI', 'gestion-scpi',
        'archives'                 => 'SCPI archive', 'gestion-scpi',
        'attributes'               => 'SCPI attribus', 'gestion-scpi',
        'insert_into_item'         => 'Inserer dans SCPI', 'gestion-scpi',
        'uploaded_to_this_item'    => 'Téléverser à cette SCPI', 'gestion-scpi',
        'filter_items_list'        => 'Filtrer liste SCPI ', 'gestion-scpi',
        'items_list_navigation'    => 'navigation de la liste SCPI  ', 'gestion-scpi',
        'items_list'               => 'liste de SCPI ', 'gestion-scpi',
        'item_published'           => 'SCPI publiée', 'gestion-scpi',
        'item_published_privately' => 'SCPI publiée en privé', 'gestion-scpi',
        'item_reverted_to_draft'   => 'SCPI est revenu au brouillon', 'gestion-scpi',
        'item_scheduled'           => 'SCPI programmée', 'gestion-scpi',
        'item_updated'             => 'SCPI mise à jour', 'gestion-scpi',
        ],
        'has_archive'=> true,
        'public' => true,
        'hierarchical' => false,
        'taxonomies'=>['catégorie', 'localisation'],
        'exclude_from_search' => false,
        'supports' => ['title'],
        
    ]);
    



    register_taxonomy('société', 'scpi', [
  
      'show_in_quick_edit' => false,
	    'meta_box_cb' => false,
      'labels'=> [
      'name'                       => 'Sociétés de gestion', 'gestion-scpi',
      'singular_name'              => 'société', 'gestion-scpi',
      'search_items'               => 'Recherche Sociétés de gestion', 'gestion-scpi',
      'popular_items'              => 'Sociétés de gestion populaires', 'gestion-scpi',
      'all_items'                  => 'Toutes les Sociétés de gestion', 'gestion-scpi',
      'parent_item'                => 'société de gestion parente', 'gestion-scpi',
      'parent_item_colon'          => 'société de gestion parente', 'gestion-scpi',
      'edit_item'                  => 'Editer société de gestion', 'gestion-scpi',
      'view_item'                  => 'Voir société de gestion', 'gestion-scpi',
      'update_item'                => 'Mettre à jour société de gestion', 'gestion-scpi',
      'add_new_item'               => 'Ajouter une nouvelle société de gestion', 'gestion-scpi',
      'new_item_name'              => 'Nouveau Nom de société de gestion', 'gestion-scpi',
      'separate_items_with_commas' => 'Séparer les Sociétés de gestion avec une virgule', 'gestion-scpi',
      'add_or_remove_items'        => 'Ajouter or supprimer des Sociétés de gestion', 'gestion-scpi',
      'choose_from_most_used'      => 'Choisir parmi les Sociétés de gestion les plus utilisées', 'gestion-scpi',
      'not_found'                  => 'Pas de Sociétés de gestion trouvées', 'gestion-scpi',
      'no_terms'                   => 'Pas de Sociétés de gestion', 'gestion-scpi',
      'items_list_navigation'      => 'navigation de la liste des Sociétés de gestion', 'gestion-scpi',
      'items_list'                 => 'liste des Sociétés de gestion', 'gestion-scpi',
      'back_to_items'              => '&larr; Retour aux Sociétés de gestion', 'gestion-scpi',
      ],
  ]);
    
    

    register_taxonomy('catégorie', 'scpi', [
        'meta_box_cb'=> 'post_categories_meta_box',
        'labels'=> [
        'name'                       => 'Catégories', 'gestion-scpi',
        'singular_name'              => 'Catégorie', 'gestion-scpi',
        'search_items'               => 'Recherche Catégories', 'gestion-scpi',
        'popular_items'              => 'Catégories populaires', 'gestion-scpi',
        'all_items'                  => 'Toutes les Catégories', 'gestion-scpi',
        'parent_item'                => 'Catégorie parente', 'gestion-scpi',
        'parent_item_colon'          => 'Catégorie parente', 'gestion-scpi',
        'edit_item'                  => 'Editer Catégorie', 'gestion-scpi',
        'view_item'                  => 'Voir Catégorie', 'gestion-scpi',
        'update_item'                => 'Mettre à jour Catégorie', 'gestion-scpi',
        'add_new_item'               => 'Ajouter une nouvelle Catégorie', 'gestion-scpi',
        'new_item_name'              => 'Nouveau Nom de Catégorie', 'gestion-scpi',
        'separate_items_with_commas' => 'Séparer les Catégories avec une virgule', 'gestion-scpi',
        'add_or_remove_items'        => 'Ajouter or supprimer des Catégories', 'gestion-scpi',
        'choose_from_most_used'      => 'Choisir parmi les Catégories les plus utilisées', 'gestion-scpi',
        'not_found'                  => 'Pas de Catégories trouvées', 'gestion-scpi',
        'no_terms'                   => 'Pas de Catégories', 'gestion-scpi',
        'items_list_navigation'      => 'navigation de la liste des Catégories', 'gestion-scpi',
        'items_list'                 => 'liste des Catégories', 'gestion-scpi',
        'back_to_items'              => '&larr; Retour aux Catégories', 'gestion-scpi',
        ]
    ]);




    register_taxonomy('localisation', 'scpi', [
        'meta_box_cb'=> 'post_categories_meta_box',
        'labels'=> [
        'name'                       => 'Localisations', 'gestion-scpi',
        'singular_name'              => 'localisation', 'gestion-scpi',
        'search_items'               => 'Recherche Localisations', 'gestion-scpi',
        'popular_items'              => 'Localisations populaires', 'gestion-scpi',
        'all_items'                  => 'Toutes les Localisations', 'gestion-scpi',
        'parent_item'                => 'localisation parente', 'gestion-scpi',
        'parent_item_colon'          => 'localisation parente', 'gestion-scpi',
        'edit_item'                  => 'Editer localisation', 'gestion-scpi',
        'view_item'                  => 'Voir localisation', 'gestion-scpi',
        'update_item'                => 'Mettre à jour localisation', 'gestion-scpi',
        'add_new_item'               => 'Ajouter une nouvelle localisation', 'gestion-scpi',
        'new_item_name'              => 'Nouveau Nom de localisation', 'gestion-scpi',
        'separate_items_with_commas' => 'Séparer les Localisations avec une virgule', 'gestion-scpi',
        'add_or_remove_items'        => 'Ajouter or supprimer des Localisations', 'gestion-scpi',
        'choose_from_most_used'      => 'Choisir parmi les Localisations les plus utilisées', 'gestion-scpi',
        'not_found'                  => 'Pas de Localisations trouvées', 'gestion-scpi',
        'no_terms'                   => 'Pas de Localisations', 'gestion-scpi',
        'items_list_navigation'      => 'navigation de la liste des Localisations', 'gestion-scpi',
        'items_list'                 => 'liste des Localisations', 'gestion-scpi',
        'back_to_items'              => '&larr; Retour aux Localisations', 'gestion-scpi',
        ],
        
    ]);
 



  register_taxonomy('scpi-type', 'scpi', [
    'show_in_quick_edit' => false,
	  'meta_box_cb' => false,
    'labels'=> [
    'name'                       => 'Types', 'gestion-scpi',
    'singular_name'              => 'type', 'gestion-scpi',
    'search_items'               => 'Recherche Types', 'gestion-scpi',
    'popular_items'              => 'Types populaires', 'gestion-scpi',
    'all_items'                  => 'Toutes les Types', 'gestion-scpi',
    'parent_item'                => 'type parente', 'gestion-scpi',
    'parent_item_colon'          => 'type parente', 'gestion-scpi',
    'edit_item'                  => 'Editer type', 'gestion-scpi',
    'view_item'                  => 'Voir type', 'gestion-scpi',
    'update_item'                => 'Mettre à jour type', 'gestion-scpi',
    'add_new_item'               => 'Ajouter une nouvelle type', 'gestion-scpi',
    'new_item_name'              => 'Nouveau Nom de type', 'gestion-scpi',
    'separate_items_with_commas' => 'Séparer les Types avec une virgule', 'gestion-scpi',
    'add_or_remove_items'        => 'Ajouter or supprimer des Types', 'gestion-scpi',
    'choose_from_most_used'      => 'Choisir parmi les Types les plus utilisées', 'gestion-scpi',
    'not_found'                  => 'Pas de Types trouvées', 'gestion-scpi',
    'no_terms'                   => 'Pas de Types', 'gestion-scpi',
    'items_list_navigation'      => 'navigation de la liste des Types', 'gestion-scpi',
    'items_list'                 => 'liste des Types', 'gestion-scpi',
    'back_to_items'              => '&larr; Retour aux Types', 'gestion-scpi',
    ],
]); 

require('functions.php');
require('query.php');

});

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');