<?php

function learnwp_customizer( $wp_customize ){

  // Copyright
  $wp_customize-> add_section( "sec_copyright", array(
    "title" => __( "Copyright", "learnwp"),
    "description" => __( "Please, type here your copyright", "learnwp")
  ));

  $wp_customize-> add_setting( "set_copyright", array(
    "type" => "theme_mod",
    "default" => __("Copyright X - All Rights Reserved", "learnwp"),
    "sanitize_callback" => "esc_attr"
  ));
  $wp_customize-> add_control( "ctrl_copyright", array(
    "label" => __( "Copyright Information", "learnwp" ),
    "description" => __( "Please, type your copyright here.", "learnwp"),
    "section" => "sec_copyright",
    "settings" => "set_copyright",
    "type" => "text"
  ));

  // Map
  $wp_customize-> add_section( "sec_map", array(
    "title" => __( "Map", "learnwp" ),
    "description" => __( "The Map Section", "learnwp")
  ));

  // API Key
  $wp_customize-> add_setting( "set_map_apikey", array(
    "type" => "theme_mod",
    "default" => "",
    "sanitize_callback" => "esc_attr"
  ));

  $wp_customize-> add_control( "ctrl_map_apikey", array(
    "label" => __( "Google Maps API Key", "learnwp" ),
    "description" => sprintf(
      __('Get your API Key. <a target="_blank" href="%s">here</a>', 'learnwp'),
      'https://developers.google.com/maps/documentation/embed/get-started'
    ),
    "section" => "sec_map",
    "settings" => "set_map_apikey",
    "type" => "text"
  ));


  // Map address
  $wp_customize-> add_setting( "set_map_address", array(
    "type" => "theme_mod",
    "default" => "",
    "sanitize_callback" => "esc_textarea"
  ));

  $wp_customize-> add_control( "ctrl_map_address", array(
    "label" => __( "Type your address here", "learnwp" ),
    "description" => __( "No special characters allowed", "learnwp"),
    "section" => "sec_map",
    "settings" => "set_map_address",
    "type" => "textarea"
  ));

}

add_action( "customize_register", "learnwp_customizer" );