<?php
/**
 * function wpfep_register_shortcode()
 * register the a shortcode to display on front end
 */
function wpfep_register_shortcode() {
	return wpfep_show_profile();
}
add_shortcode( 'wpfep', 'wpfep_register_shortcode' );

function wpfep_disable_block_editor_for_post( $use_block_editor, $post ) {
	// Enable Block Editor for post with ID 123.
	if ( 665 === $post->ID ) {
		return false;
	}
	return $use_block_editor;
}
add_filter( 'use_block_editor_for_post', 'wpfep_disable_block_editor_for_post', 10, 2 );
