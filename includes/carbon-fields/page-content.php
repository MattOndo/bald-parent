<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'bald_page_content' );
function bald_page_content() {
  Container::make( 'post_meta', __( 'Page Content', 'bald' ) )
    ->where( 'post_type', '=', 'page' )
    ->add_fields( array(
        Field::make( 'complex', 'page_content', 'Sections' )
          ->set_duplicate_groups_allowed( true )

          ->add_fields( 'text_image', 'Text/Image', array(
            Field::make( 'complex', 'text_image', 'Text/Image' )
              ->set_layout('tabbed-horizontal')
              ->set_duplicate_groups_allowed( false )
              ->set_collapsed( false )
              ->set_classes( 'text_image' )
              ->add_fields( 'text_image_content', 'Content', array(
                Field::make( 'text', 'headline', 'Headline' ),
                Field::make( 'rich_text', 'text', 'Text' )
                  ->set_required( true ),
                Field::make( 'image', 'image', 'Image' )
                  ->set_required( true ),
              ) )
              ->add_fields( 'text_image_options', 'Options', array(
                Field::make( 'radio', 'layout', 'Layout' )
                  ->set_help_text( 'Layout for screen sizes medium and up.' )
                  ->set_required( true )
                  ->add_options( array(
                      'md:flex-row' => __( 'Image Left' ),
                      'md:flex-row-revers' => __( 'Image Right' ),
                ) ) 
              ) )
              ->set_default_value( 
                array(
                    array(
                      '_type' => 'text_image_content',
                    ),
                    array(
                      '_type' => 'text_image_options',
                    ),
              ) ),
            ) )

            ->add_fields( 'cta', 'Call to Action', array(
              Field::make( 'complex', 'cta', 'Call to Action' )
                ->set_layout('tabbed-horizontal')
                ->set_duplicate_groups_allowed( false )
                ->set_collapsed( false )
                ->set_classes( 'cta' )
                ->add_fields( 'cta_content', 'Content', array(
                  Field::make( 'text', 'headline', 'Headline' )
                    ->set_classes( 'field-headline' ),
                  Field::make( 'rich_text', 'text', 'Text' )
                    ->set_required( true )
                    ->set_classes( 'field-text' ),
                  Field::make( 'text', 'button_text', 'Button Text' )
                    ->set_required( true )
                    ->set_classes( 'field-btn_text' ),
                  Field::make( 'text', 'button_href', 'Button Link' )
                    ->set_required( true )
                    ->set_classes( 'field-btn_href' ),
                ) )
                ->add_fields( 'cta_options', 'Options', array(
                  Field::make( 'radio', 'layout', 'Layout' )
                    ->set_help_text( 'Layout for screen sizes medium and up.' )
                    ->set_required( true )
                    ->add_options( array(
                        'text_center' => __( 'Text Centered' ),
                        'text_right' => __( 'Text Left' )
                    ) ),
                    Field::make( 'checkbox', 'show_bg_image', 'Use Background Image' )
                      ->set_classes( 'field-show_bg toggle' ),
                    Field::make( 'image', 'bg_image', 'Background Image' )
                      ->set_required( true )
                      ->set_classes( 'field-image' )
                      ->set_conditional_logic( array(
                        array(
                          'field' => 'show_bg_image',
                          'value' => true,
                        )
                      ) ),
                ) )
                ->set_default_value( 
                  array(
                      array(
                        '_type' => 'cta_content',
                      ),
                      array(
                        '_type' => 'cta_options',
                      ),
                ) ),
              ) )

      ) );
}