<?php
function theme_customizer_social( $wp_customize ) {
  $wp_customize->add_section( 'social_links' , array(
    'title'      => __( 'Social Media Links', 'xniz' ),
  ));

  // Enable/Disable
  $wp_customize->add_setting('show_social_icon_bar', array(
    'capability' => 'edit_theme_options',
    'default' => 'true',
  ));

  $wp_customize->add_control('show_social_icon_bar', array(
    'type' => 'radio',
    'section' => 'social_links', // Add a default or your own section
    'label' => esc_html__( 'Social Icon Bar' ),
    'description' => __( 'Enable or disable social icon bar.' ),
    'choices' => array(
      'true' => __( 'True' ),
      'false' => __( 'False' ),
    ),
  ));

  // Facebook
  $wp_customize->add_setting('facebook_url', array(
    'capability' => 'edit_theme_options',
    'default' => 'https://facebook.com',
  ));

  $wp_customize->add_control( 'facebook_url', array(
    'type' => 'text',
    'section' => 'social_links', // Add a default or your own section
    'label' => esc_html__( 'Facebook' )
  ));

  // Instagram URL
  $wp_customize->add_setting('instagram_url', array(
    'capability' => 'edit_theme_options',
    'default' => 'https://instagram.com',
  ));

  $wp_customize->add_control( 'instagram_url', array(
    'type' => 'text',
    'section' => 'social_links', // Add a default or your own section
    'label' => esc_html__( 'Instagram' )
  ));

  // Twitter
  $wp_customize->add_setting('twitter_url', array(
    'capability' => 'edit_theme_options',
    'default' => 'https://twitter.com',
  ));

  $wp_customize->add_control( 'twitter_url', array(
    'type' => 'text',
    'section' => 'social_links', // Add a default or your own section
    'label' => esc_html__( 'Twitter' )
  ));
  // Phone Number
  $wp_customize->add_setting('phone_number', array(
    'capability' => 'edit_theme_options',
    'default' => '222-333-4444',
  ));

  $wp_customize->add_control( 'phone_number', array(
    'type' => 'text',
    'section' => 'social_links', // Add a default or your own section
    'label' => esc_html__( 'Phone Number' )
  ));
}
?>