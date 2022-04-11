<?php get_header(); ?>
 <?php
 
 $taxonomy = 'société';
 $terms = get_terms('société' );?>
 <div class="container page-societe">
<header class="societe-single__header"><?php
 foreach ($terms as $term) { ?>
 
 
 <div class="societe-single__meta">
<div class="societe-info" >
  <div class="societe-info__place">
   <div class="societe-info__body">
    <div class="societe-info__nom"><?= $term->name ?> </div>
    <div class="societe-info__année"><span>Création</span><br><?= get_term_meta($term->term_id, 'société-crea', true )?></div>
    <div class="societe-info__nombre"><span>Nombre de fonds</span><br><?= get_term_meta($term->term_id, 'société-fond', true )?></div>
    
    <div class="societe-info__action"><span>Actionnaire majoritaire</span><br><?= get_term_meta($term->term_id, 'société-actionnaire', true )?></div>
   </div>   
    </div></div></div>
    <?php
 };?>

 