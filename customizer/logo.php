<?php
function theme_customizer_logo( $wp_customize ) {


  $wp_customize->add_section( 'logo_configuration' , array(
    'title'      => __( 'Logo Configuration', 'xniz' ),
  ));

  // Logo type
  $wp_customize->add_setting('logo_type', array(
    'capability' => 'edit_theme_options',
    'default' => 'text',
  ));

  $wp_customize->add_control( 'logo_type', array(
    'type' => 'radio',
    'section' => 'logo_configuration', // Add a default or your own section
    'label' => esc_html__( 'Logo Display' ),
    'description' => __( 'Choose your logo type below' ),
    'choices' => array(
      'text' => __( 'Text' ),
      'image' => __( 'Image' ),
    ),
  ));

  // Logo Text
  $wp_customize->add_setting( 'logo_text', array(
    'capability' => 'edit_theme_options',
    'default' => 'Xniz Theme',
  ));

  $wp_customize->add_control( 'logo_text', array(
    'type' => 'text',
    'section' => 'logo_configuration', // Add a default or your own section
    'label' => esc_html__( 'Logo Text' ),
  ));

  // Logo image
  $wp_customize->add_setting('logo_image', array(
    'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'logo_image',
      array(
          'label'      => __( 'Upload a logo image', 'xniz' ),
          'section'    => 'logo_configuration',
          'settings'   => 'logo_image',
      )
    )
  );

  // Logo Height
  $wp_customize->add_setting('logo_width', array(
    'capability' => 'edit_theme_options',
    'default' => '25',
  ));

  $wp_customize->add_control( 'logo_width', array(
    'type' => 'number',
    'section' => 'logo_configuration', // Add a default or your own section
    'label' => esc_html__( 'Logo width' )
  ));

  // Logo Height
  $wp_customize->add_setting('logo_height', array(
    'capability' => 'edit_theme_options',
    'default' => '25',
  ));

  $wp_customize->add_control( 'logo_height', array(
    'type' => 'number',
    'section' => 'logo_configuration', // Add a default or your own section
    'label' => esc_html__( 'Logo Height' )
  ));

}
?>