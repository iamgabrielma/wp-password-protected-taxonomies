<?php
/*
Plugin Name: Password Protected Taxonomies -> change taxonomies, too technical for marketing
example 3 categories: free subscriber, basic subscriber, premium subscriber content
*/

// add meta field in categories and another one in edit categories
/**
*term object is a wp object that contains all the info
* @see wp-admin/edit-tags.php?taxonomy=category
*/
function awp_gma_add_term_password_field( $term ){
	// check for existing taxonomy meta for term ID
	$term_id = $term->term_id;
	$term_meta = get_option( $option, $default );
	// echoes out html
}
add_action( 'category_add_form_fields', 'awp_gma_add_term_password_field'); // we're working with the default post categories
//add_action( 'post_tag_add_form_fields', 'awp_gma_add_term_password_field');

// add meta field to category add new page
function awp_gma_edit_term_password_field( $term ){

}
add_action( 'category_add_form_fields', 'awp_gma_edit_term_password_field');

// save values of both meta fields clicking "save"
function awp_gma_save_term_password( $term_id ){
	// runs check to check if there is data, otherwise don't do anything
	if (condition) {
		$term_meta = get_option( $option, $default );
	}
}
add_action( 'edited_category', 'awp_gma_save_term_password', 10 );
add_action( 'create_category', 'awp_gma_save_term_password', 10 );

function awp_gma_in_term_with_password( $post_id = NULL ){
	if (condition) {
		$post_id = get_the_ID();
	}
	if (condition) {
		# code...
	}

}
