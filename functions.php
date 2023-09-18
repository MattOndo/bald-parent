<?php

/**
 * Theme Setup
 * 
 * @since 1.0
 */
function bald_theme_setup() {

  require_once( get_template_directory() . '/vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();

	// Set text domain.
	load_theme_textdomain( 'bald', get_template_directory() . '/languages' );

	// Add theme support.
	add_theme_support( 'html5' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Fires after the theme setup has finished.
	 * 
	 * @since 1.0
	 */
	do_action( 'bald_theme_setup' );

}
add_action( 'after_setup_theme', 'bald_theme_setup', 10, 0 );

/**
 * Enqueue scripts and styles.
 * 
 * @since 1.0
 */
require_once( get_template_directory() . '/includes/admin-enqueues.php' );

/**
 * Theme Options
 * 
 * @since 1.0
 */
require_once( get_template_directory() . '/includes/admin-options.php' );
require_once( get_template_directory() . '/includes/disable-gutenberg.php' );