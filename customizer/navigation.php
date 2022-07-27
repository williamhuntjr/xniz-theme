<?php
function theme_customizer_navigation( $wp_customize ) {


  $wp_customize->add_section( 'navbar_configuration' , array(
    'title'      => __( 'Primary Navbar Configuration', 'xniz' ),
  ));

  // Logo size
  $wp_customize->add_setting('navbar_padding', array(
    'capability' => 'edit_theme_options',
    'default' => '0',
  ));

  $wp_customize->add_control( 'navbar_padding', array(
    'type' => 'number',
    'section' => 'navbar_configuration', // Add a default or your own section
    'label' => esc_html__( 'Padding' )
  ));

  // Navbar Background Color 
  $wp_customize->add_setting('navbar_bg_color', array(
    'capability' => 'edit_theme_options',
    'default' => 'bg-light',
  ));

  $wp_customize->add_control( 'navbar_bg_color', array(
    'type' => 'radio',
    'section' => 'navbar_configuration', // Add a default or your own section
    'label' => esc_html__( 'Navigation Background Color' ),
    'description' => __( 'Choose your background color' ),
    'choices' => array(
      'bg-light' => __( 'Light' ),
      'bg-dark' => __( 'Dark' ),
    ),
  ));

  // Navbar Background Color 
  $wp_customize->add_setting('navbar_button_align', array(
    'capability' => 'edit_theme_options',
    'default' => 'justify-content-center',
  ));

  $wp_customize->add_control( 'navbar_button_align', array(
    'type' => 'radio',
    'section' => 'navbar_configuration', // Add a default or your own section
    'label' => esc_html__( 'Navigation Button Alignment' ),
    'description' => __( 'Choose your button position' ),
    'choices' => array(
      'justify-content-center' => __( 'Center Aligned' ),
      'justify-content-end' => __( 'Right Aligned' ),
    ),
  ));

}

function theme_get_customizer_navigation() {
  ob_start();

  $navbar_padding = get_theme_mod( 'navbar_padding', '0' );
  if ( ! empty( $navbar_padding ) ) :?> 
    #primary-nav { padding: <?php echo $navbar_padding; ?>px; }
  <?php endif;?>
  <?php

  $css = ob_get_clean();
  return $css;
}


?>