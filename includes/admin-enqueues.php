<?php

/**
 * Register and enqueue Bald stylesheet in the WordPress admin.
 */
function bald_enqueue_admin_style() {
  wp_register_style( 'bald_wp_admin_css', get_template_directory_uri() . '/styles/admin.css', false, null );
  wp_enqueue_style( 'bald_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'bald_enqueue_admin_style' );