<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function bald_attach_theme_options() {
  Container::make( 'theme_options', __( 'Theme Options' ) )
    ->set_page_menu_title( 'Theme Options' )
    ->add_fields( array(
      Field::make( 'html', 'bald_opt_header_gutenberg' )
        ->set_html( '<h2>Disable Gutenberg Block Editor</h2>' ),
      Field::make( 'checkbox', 'gutenberg_disable_homepage', __( 'Disable Gutenberg on Homepage' ) )
        ->set_classes( 'toggle' ),
      Field::make( 'checkbox', 'gutenberg_disable_posts_page', __( 'Disable Gutenberg on Posts Page' ) )
        ->set_classes( 'toggle' ),
      Field::make( 'multiselect', 'gutenberg_disabled_templates', __( 'Disable Gutenberg by Template' ) )
        ->add_options( 'template_options' ) 
    ));
}
add_action( 'carbon_fields_register_fields', 'bald_attach_theme_options' );

function template_options() {
  $templates = wp_get_theme()->get_page_templates();
  $options = array();

  foreach ( $templates as $file => $name ) {
    $options[$file] = $name;
  }
  return $options;
}