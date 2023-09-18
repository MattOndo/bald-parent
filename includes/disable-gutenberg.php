<?php
/**
 * Disable Editor
 *
**/

/**
 * Templates and Page IDs without editor
 *
 */
function ea_disable_editor( $id = false ) {

  $exclude_homepage = carbon_get_theme_option( 'gutenberg_disable_homepage' );
  $exclude_posts_page = carbon_get_theme_option( 'gutenberg_disable_posts_page' );
  $excluded_templates = carbon_get_theme_option( 'gutenberg_disabled_templates' );

  $excluded_ids = array();

  if ( $exclude_homepage ) {
    array_push( $excluded_ids, get_option( 'page_on_front' ) ); // Front Page
  }

  if ( $exclude_posts_page ) {
    array_push( $excluded_ids, get_option( 'page_for_posts' ) ); // Posts Page
  }

	if( empty( $id ) )
		return false;

	$id = intval( $id );
	$template = get_page_template_slug( $id );

	return in_array( $id, $excluded_ids ) || in_array( $template, $excluded_templates );
}

/**
 * Disable Gutenberg by template
 *
 */
function ea_disable_gutenberg( $can_edit, $post_type ) {

	if( ! ( is_admin() && !empty( $_GET['post'] ) ) )
		return $can_edit;

	if( ea_disable_editor( $_GET['post'] ) )
		$can_edit = false;

	return $can_edit;

}
add_filter( 'gutenberg_can_edit_post_type', 'ea_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'ea_disable_gutenberg', 10, 2 );

/**
 * Disable Classic Editor by template
 *
 */
function ea_disable_classic_editor() {

	$screen = get_current_screen();
	if( 'page' !== $screen->id || ! isset( $_GET['post']) )
		return;

	if( ea_disable_editor( $_GET['post'] ) ) {
		remove_post_type_support( 'page', 'editor' );
	}

}
add_action( 'admin_head', 'ea_disable_classic_editor' );