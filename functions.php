<?php

/**
 * Bald Parent Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @since 1.0.0
 * 
 * @package Bald_Parent
 */

if ( ! defined( 'BALD_PARENT_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'BALD_PARENT_VERSION', '1.0.1' );
}

function bald_parent_setup() {

  require_once( get_template_directory() . '/vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();

	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
	load_theme_textdomain( 'bald-parent', get_template_directory() . '/languages' );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support( 'html5' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Fires after the theme setup has finished.
	 * 
	 * @since 1.0.0
	 */
	do_action( 'bald_parent_setup' );

}
add_action( 'after_setup_theme', 'bald_parent_setup');

/**
 * Enqueue scripts and styles.
 * 
 * @since 1.0.0
 */
function bald_parent_admin_style() {
  wp_register_style( 'bald-parent-admin', get_template_directory_uri() . '/styles/admin.css', false, null );
  wp_enqueue_style( 'bald-parent-admin' );
}
add_action( 'admin_enqueue_scripts', 'bald_parent_admin_style' );

/**
 * Theme Options
 * 
 * @since 1.0.0
 */
require_once( get_template_directory() . '/includes/admin-options.php' );
require_once( get_template_directory() . '/includes/disable-gutenberg.php' );