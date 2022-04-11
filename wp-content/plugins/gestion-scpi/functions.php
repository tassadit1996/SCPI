<?php
// -----LA META BOX DE SOCIÉTÉ DE GESTION DANS SCPI--------//

add_action('add_meta_boxes', 'add_custom_meta_box');
  function add_custom_meta_box(){
    add_meta_box( 'taxonomy_box', __('Société de gestion'), 'fill_custom_meta_box_content', 'scpi' ,'normal');
  }

function fill_custom_meta_box_content( $post ) {
	$terms = get_terms( array(
		'taxonomy' => 'société',
		'hide_empty' => false 
	));
	$currentTaxonomyValue = get_the_terms($post->ID, 'société')[0];
?>
	<p>Choisir une société</p>
	<p>
		<?php foreach($terms as $term): ?>
			<input type="radio" name="société" id="taxonomy_term_<?php echo $term->term_id;?>" value="<?php echo $term->term_id;?>"<?php if($term->term_id==$currentTaxonomyValue->term_id) echo "checked"; ?>>
			<label for="taxonomy_term_<?php echo $term->term_id;?>"><?php echo $term->name; ?></label>
			</input><br/>
		<?php endforeach; ?>
	</p>
<?php
}
add_action('save_post', 'save_société');

function save_société($post_id){
	if ( isset( $_REQUEST['société'] ) ) 
		wp_set_object_terms($post_id, (int)sanitize_text_field( $_POST['société'] ), 'société');
}








// -----LA META BOX DE TYPE DE SCPI--------//

add_action('add_meta_boxes', 'add_custom_meta_box2');
  function add_custom_meta_box2(){
    add_meta_box( 'taxonomy_box2', __('Type de SCPI'), 'fill_custom_meta_box_content2', 'scpi' ,'normal');
  }

function fill_custom_meta_box_content2( $post ) {
	$terms = get_terms( array(
		'taxonomy' => 'scpi-type',
		'hide_empty' => false 
	));

	
	$currentTaxonomyValue = get_the_terms($post->ID, 'scpi-type')[0];
?>
	<p>Choisir un Type de SCPI</p>
	<p>
		<?php foreach($terms as $term): ?>
			<input type="radio" name="scpi-type" id="taxonomy_term_<?php echo $term->term_id;?>" value="<?php echo $term->term_id;?>"<?php if($term->term_id==$currentTaxonomyValue->term_id) echo "checked"; ?>>
			<label for="taxonomy_term_<?php echo $term->term_id;?>"><?php echo $term->name; ?></label>
			</input><br/>
		<?php endforeach; ?>
	</p>
<?php
}
add_action('save_post', 'save_scpi_type2');

function save_scpi_type2($post_id){
	if ( isset( $_REQUEST['scpi-type'] ) ) 
		wp_set_object_terms($post_id, (int)sanitize_text_field( $_POST['scpi-type'] ), 'scpi-type');
}







// -----LES META BOX DE SCPI--------//

add_action('add_meta_boxes','init_metabox');
function init_metabox(){
  add_meta_box('info_scpi', 'Informations sur la SCPI', 'info_scpi', 'scpi');
}

function info_scpi($post){
  $taux  = get_post_meta($post->ID,'_taux',true);
  $cap  = get_post_meta($post->ID,'_capital',true);
  $prix  = get_post_meta($post->ID,'_prix',true);
  $val  = get_post_meta($post->ID,'_val',true);
  $occup  = get_post_meta($post->ID,'_occup',true);

 ?>
 <label style=" font-weight:bolder;" for="taux">Taux de Distribution<span style="color:red;"> *</span> :</label></br>
 <input id="taux" required="required" style=" margin-top:10px; width:100%" type="text" name="taux" value="<?php echo $taux; ?>" /></br></br>
 <label style=" font-weight:bolder;" for="cap">Capitalisation<span style="color:red;"> *</span> :</label></br>
 <input id="cap" required="required" style=" margin-top:10px; width:100%" type="text" name="cap" value="<?php echo $cap; ?>" /></br></br>
 <label style=" font-weight:bolder;" for="prix">Prix de la part<span style="color:red;"> *</span> :</label></br>
 <input id="prix" required="required" style=" margin-top:10px; width:100%" type="text" name="prix" value="<?php echo $prix; ?>" /></br></br>
 <label style=" font-weight:bolder;" for="val">Valeur de retrait<span style="color:red;"> *</span> :</label></br>
 <input id="val" required="required" style=" margin-top:10px; width:100%" type="text" name="val" value="<?php echo $val; ?>" /></br></br>
 <label style=" font-weight:bolder;" for="occup">Taux d'occupation financier<span style="color:red;"> *</span> :</label></br>
 <input id="occup" required="required" style=" margin-top:10px; width:100%" type="text" name="occup" value="<?php echo $occup; ?>" />
 <?php 
 }

 add_action('save_post','save_metabox');
  function save_metabox($post_id){
    if(isset($_POST['taux'])){
    update_post_meta($post_id, '_taux', sanitize_text_field($_POST['taux']));
    }
    if(isset($_POST['cap'])){
     update_post_meta($post_id, '_capital', sanitize_text_field($_POST['cap']));
    }
    if(isset($_POST['prix'])){
     update_post_meta($post_id, '_prix', sanitize_text_field($_POST['prix']));
    }
    if(isset($_POST['val'])){
     update_post_meta($post_id, '_val', sanitize_text_field($_POST['val']));
    }
    if(isset($_POST['occup'])){
     update_post_meta($post_id, '_occup', sanitize_text_field($_POST['occup']));
    }
  }






// -----LES META BOX DES INFOS DE SOCIÉTÉ DE GESTION--------//


  add_action( 'admin_footer', 'remove_société_fields');

  function remove_société_fields() {
      global $current_screen;
      if( 'edit-société' === $current_screen->id ) {
          ?>
          <script type="text/javascript">
              jQuery(document).ready(function($){
                  $('#tag-description').parent().remove();
                  $('.term-description-wrap').remove();
                 
              });
          </script>
          <?php
      }
  }
  add_filter( 'manage_edit-société_columns', 'remove_société_columns' );
  
  function remove_société_columns( $columns ) {
      if( $columns['description'] ) {
          unset($columns['description']);
          
  
          $columns['creation'] = 'Creation';
          $columns['fond'] = 'Fond';
          $columns['encours'] = 'Encours';
          $columns['effectif'] = 'Effectif';
          $columns['actionnaire'] = 'Actionnaire';
          
          
      }
      
      return $columns;
  }
add_action( 'société_add_form_fields', 'techiepress_add_société_fields' );

function techiepress_add_société_fields() {
    ?>
        <div class="form-field">
            <label for="société-crea">Création</label>
            <input type="text" name="société-crea" id="société-crea">
        </div>
        <div class="form-field">
            <label for="société-fond">Nombre de Fonds</label>
            <input type="text" name="société-fond" id="société-fond">
        </div>
        <div class="form-field">
            <label for="société-encours">Encours global</label>
            <input type="text" name="société-encours" id="société-encours">
        </div>
        <div class="form-field">
            <label for="société-effectif">Effectif</label>
            <input type="text" name="société-effectif" id="société-effectif">
        </div>
        <div class="form-field">
            <label for="société-actionnaire">Actionnaire majoritaire</label>
            <input type="text" name="société-actionnaire" id="société-actionnaire">
        </div>
        <div class="form-field term-group">
        <label for="">Ajouter une image</label>
        <input type="text"  id="txt_upload_image" value="" style="width: 77%"><br><br>
        <input type="button" name="txt_upload_image" id="upload_image_btn" class="button" value="Téléverser une image" />
    </div>
            
        
    <?php
}
add_action( 'manage_société_custom_column', 'techiepress_manage_société_custom_columns', 10, 3 );

function techiepress_manage_société_custom_columns( $string, $columns, $term_id ) {
    switch ( $columns ) {
        case 'creation':
            echo get_term_meta( $term_id, 'société-crea', true );
        break;
        case 'fond':
          echo get_term_meta( $term_id, 'société-fond', true );
        break;
        case 'encours':
          echo get_term_meta( $term_id, 'société-encours', true );
        break;
        case 'effectif':
          echo get_term_meta( $term_id, 'société-effectif', true );
        break;
        case 'actionnaire':
          echo get_term_meta( $term_id, 'société-actionnaire', true );
        break;
        
    }
}
add_action( 'société_edit_form_fields', 'edit_société_fields', 10, 2 );

function edit_société_fields( $term, $taxonomy ) {
    $value = get_term_meta($term->term_id, 'société-crea', true );
    $value2 = get_term_meta($term->term_id, 'société-fond', true );
    $value3 = get_term_meta($term->term_id, 'société-encours', true );
    $value4 = get_term_meta($term->term_id, 'société-effectif', true );
    $value5 = get_term_meta($term->term_id, 'société-actionnaire', true );
    $txt_upload_image = get_term_meta($term->term_id, 'term_image', true);
    ?>
    <tr class="form-field">
			<th scope="row"><label for="société-crea">Création</label></th>
			<td><input type="text" name="société-crea" id="société-crea" value="<?php echo esc_attr( $value ); ?>" size="40">
		</tr>
    <tr class="form-field">
			<th scope="row"><label for="société-fond">Nombre de Fonds</label></th>
			<td><input type="text" name="société-fond" id="société-fond" value="<?php echo esc_attr( $value2 ); ?>" size="40">
		</tr>
    <tr class="form-field">
			<th scope="row"><label for="société-encours">Encours global</label></th>
			<td><input type="text" name="société-encours" id="société-encours" value="<?php echo esc_attr( $value3 ); ?>" size="40">
		</tr>
    <tr class="form-field">
			<th scope="row"><label for="société-effectif">Effectif</label></th>
			<td><input type="text" name="société-effectif" id="société-effectif" value="<?php echo esc_attr( $value4 ); ?>" size="40">
		</tr>
    <tr class="form-field">
			<th scope="row"><label for="société-actionnaire">Actionnaire majoritaire</label></th>
			<td><input type="text" name="société-actionnaire" id="société-actionnaire" value="<?php echo esc_attr( $value5 ); ?>" size="40">
		</tr>
    <tr class="form-field">
    <th scope="row"><label for="">Ajouter une image</label></th>
    <td><input type="text" name="txt_upload_image" id="txt_upload_image" value="<?php echo $txt_upload_image ?>" style="width: 77%">
    <td><input type="button" id="upload_image_btn" class="button" value="Téléverser une image" size="40">
    </tr>
    <?php
}
add_action('created_société', 'save_term_image', 10, 2);
function save_term_image($term_id, $tt_id) {
    if (isset($_POST['txt_upload_image']) && '' !== $_POST['txt_upload_image']){
        $group = '#' . sanitize_title($_POST['txt_upload_image']);
        add_term_meta($term_id, 'term_image', $group, true);
    }
}

add_action( 'created_société', 'created_société_fields' );
add_action( 'edited_société', 'created_société_fields' );

function created_société_fields( $term_id ) {
    update_term_meta( $term_id, 'société-crea', sanitize_text_field( $_POST['société-crea'] ) );
    update_term_meta( $term_id, 'société-fond', sanitize_text_field( $_POST['société-fond'] ) );
    update_term_meta( $term_id, 'société-encours', sanitize_text_field( $_POST['société-encours'] ) );
    update_term_meta( $term_id, 'société-effectif', sanitize_text_field( $_POST['société-effectif'] ) );
    update_term_meta( $term_id, 'société-actionnaire', sanitize_text_field( $_POST['société-actionnaire'] ) );
}
add_action('edited_société', 'update_image_upload', 10, 2);
function update_image_upload($term_id, $tt_id) {
    if (isset($_POST['txt_upload_image']) && '' !== $_POST['txt_upload_image']){
        $group = '#' . sanitize_title($_POST['txt_upload_image']);
        update_term_meta($term_id, 'term_image', $group);
    }}

    function image_uploader_enqueue() {
        global $typenow;
        if( ($typenow == 'scpi') ) {
            wp_enqueue_media();
    
            wp_register_script( 'meta-image', get_template_directory_uri() . '/js/media-uploader.js', array( 'jquery' ) );
            wp_localize_script( 'meta-image', 'meta_image',
                array(
                    'title' => 'Téléverser une image',
                    'button' => 'Utiliser cette image',
                )
            );
            wp_enqueue_script( 'meta-image' );
        }
    }
    add_action( 'admin_enqueue_scripts', 'image_uploader_enqueue' ); 