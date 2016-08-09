<?php
/*
Plugin Name: WP Password Protected Cascade
Plugin URI: http://almondwp.com
Description: Lock down different content of your website to different kind of subscribers.
Version: 0.1
Author: Gabriel Maldonado Almendra
Author URI: http://almondwp.com
*/

/**
* Debugging function, just for development purposes.
*/
function awp_debugging($term){
	//global $term;
	//$term_id = $term->term_id;
	// All term options are prefixed with “taxonomy_”, followed by the ID number of the term
	$term_meta = get_option( '$term' );
	var_dump($term_meta); //false
}
add_action( 'wp_head', 'awp_debugging' );
		
/**
* Adds PPC metafield Posts > Categories
* @see wp-admin/edit-tags.php?taxonomy=category
*/
function awp_gma_ppc_add_term_password_field( $term ){
	
	?>

	<div class="form-field">
		<label for="term_pass"><?php _e( 'Password Protected Cascade','awp' ); ?></label>
		<input type="text" name="term-meta" id="" value="">
		<p class="description"><?php _e( 'Enter a password to restrict this category','awp' ); ?></p>		
	</div>

	<?php

}
add_action( 'category_add_form_fields', 'awp_gma_ppc_add_term_password_field'); 

/**
* Adds PPC metafield to Post > Categories > Edit
* @see wp-adminedit-tags.php?action=edit&taxonomy=category
*/ 
function awp_gma_ppc_edit_term_password_field( $term ){

	?>

	<tr class="form-field">
		<th scope="row" valign="top"><label for="term_pass"><?php _e( 'Password Protected Cascade','awp' ); ?></label></th>
		<td>
			<input type="text" name="term-meta" id="" value="">
			<p class="description"><?php _e( 'Enter a password to restrict this term','awp' ); ?></p>
		</td>
	</tr>

	<?php

}
add_action( 'category_edit_form_fields', 'awp_gma_ppc_edit_term_password_field');

/**
* Saves data we put into the metafields when are created or edited
*/ 
function awp_gma_ppc_save_term_password( $term_id ){

	if (isset($POST['term_meta'])) {
		echo 'something in term-meta!';
	} else {
		echo 'nothing in term-meta!';
	}

}
add_action( 'edited_category', 'awp_gma_ppc_save_term_password', 10);  
add_action( 'create_category', 'awp_gma_ppc_save_term_password', 10);