<?php get_header(); ?>
<div class="page-scpi">
<header class="scpi-single__header">      
    <?php while(have_posts()):the_post() ?><div class="scpi-single__meta">  
      <a class="scpi-info" href="<?= get_permalink($postId)  ?>" >
  <div class="scpi-info__place">
   <div class="scpi-info__body">
    <div class="scpi-info__nom"><?php the_title(); ?></div>
    <div class="scpi-info__taux">TDVM<br><?= get_post_meta($post->ID,'_taux',true)?> %</div>
    <div class="scpi-info__prix">Prix de la part<br><?= get_post_meta($post->ID,'_prix',true)?> €</div>
  </div>   
  </div>
</a></div>
<?php endwhile; ?>

</header>
<?php
$types = get_terms([
'taxonomy'=> 'scpi-type']);
$currentType = get_query_var('scpi-type');

$societes = get_terms([
  'taxonomy'=> 'société']);
$currentSociete = get_query_var('société');

$categories = get_terms([
  'taxonomy'=> 'catégorie']);
$currentCategorie = get_query_var('catégorie');

$localisations = get_terms([
  'taxonomy'=> 'localisation']);
$currentLocalisation = get_query_var('localisation');
    
 ?>
 <aside class="filtre">
  <div class="filtre__aside">
    <div class="filtre__title">Filtrer les SCPI</div>
    
    <form action="" class="search-form__form">
    <div class="heading2">La société de gestion</div>
    <div>
      <select name="société" id="société" class="form-control">
      <option value="<?php selected($societe->slug, $societes) ?>">Sélectionner une société</option>
        <?php foreach($societes as $societe): ?>
      <option value="<?= $societe->slug ?>" <?php selected($societe->slug, $currentSociete) ?>><?= $societe->name ?></option>
      <?php endforeach; ?>
      </select> 
    </div>
    <div class="heading">Type de SCPI</div>
    <div >
      <?php foreach($types as $type): ?>
      <div >
        <input  <?php checked($type->slug, $currentType) ?> type="checkbox" name="scpi-type" id="scpi-type" value="<?= $type->slug ?>">
        <label  for="scpi-type"><?= $type->name ?></label>
      </div>
      <?php endforeach; ?> 
    </div>
    <div class="heading">La Catégorie</div>
    <div >
      <?php foreach($categories as $categorie): ?>
      <div >
        <input  <?php checked($categorie->slug, $currentCategorie) ?> type="checkbox" name="catégorie" id="catégorie" value="<?= $categorie->slug ?>">
        <label  for="catégorie"><?= $categorie->name ?></label>
      </div>
      <?php endforeach; ?> 
    </div>
    
    <div class="heading">La Localisation</div>
    <div >
      <?php foreach($localisations as $localisation): ?>
      <div >
        <input  <?php checked($localisation->slug, $currentCategorie) ?> type="checkbox" name="localisation" id="localisation" value="<?= $localisation->slug ?>">
        <label  for="localisation"><?= $localisation->name ?></label>
      </div>
      <?php endforeach; ?> 
    </div>
    <button type="submit" class="bouton ">Filtrer</button>
  </form>
</aside>
  