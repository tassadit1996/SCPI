<?php


defined('ABSPATH') or die('rien à voir');

add_filter('query_vars', function (array $params): array{
    $params[] = 'scpi-type';
    $params[] = 'société';
    $params[] = 'catégorie';
    $params[] = 'localisation';
    return $params;

});
add_action('pre_get_posts', function (WP_Query $query):void{
    if (is_admin() || !$query->is_main_query() || !is_post_type_archive('scpi')){
        return;
    }
    

    $type = get_query_var('scpi-type');
    if (get_query_var('scpi-type')){
        $tax_query = $query->get('tax_query', []);
        $tax_query[] = [
            'taxonomy'=>'scpi-type',
            'terms' => $type,
            'field'=>'slug'
        ];
        $query->set('tax_query', $tax_query);
    }

    $societe = get_query_var('société');
    if (get_query_var('société')){
        $tax_query = $query->get('tax_query', []);
        $tax_query[] = [
            'taxonomy'=>'société',
            'terms' => $societe,
            'field'=>'slug'
        ];
        $query->set('tax_query', $tax_query);
    }

    $categorie = get_query_var('catégorie');
    if (get_query_var('catégorie')){
        $tax_query = $query->get('tax_query', []);
        $tax_query[] = [
            'taxonomy'=>'catégorie',
            'terms' => $categorie,
            'field'=>'slug'
        ];
        $query->set('tax_query', $tax_query);
    }

    $localisation = get_query_var('localisation');
    if (get_query_var('localisation')){
        $tax_query = $query->get('tax_query', []);
        $tax_query[] = [
            'taxonomy'=>'localisation',
            'terms' => $localisation,
            'field'=>'slug'
        ];
        $query->set('tax_query', $tax_query);
    }

    
});
