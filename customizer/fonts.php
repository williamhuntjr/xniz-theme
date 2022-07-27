<?php
function theme_customizer_fonts( $wp_customize ) {


  $wp_customize->add_section( 'theme_fonts' , array(
    'title'      => __( 'Theme Fonts', 'xniz' ),
  ));

  $wp_customize->add_setting( 'body_font', array(
    'capability' => 'edit_theme_options',
    'default' => 'Open Sans',
  ));

  $wp_customize->add_control( 'body_font', array(
    'type' => 'select',
    'section' => 'theme_fonts', // Add a default or your own section
    'label' => esc_html__( 'Body' ),
    'choices' => array(
      'Raleway' => __( 'Raleway' ),
      'Roboto' => __( 'Roboto' ),
      'Open Sans' => __( 'Open Sans' ),
      'Montserrat' => __('Montserrat'),
      'Poppins' => __('Poppins')
    ),
  ));

  $wp_customize->add_setting( 'button_font', array(
    'capability' => 'edit_theme_options',
    'default' => 'Open Sans',
  ));

  $wp_customize->add_control( 'button_font', array(
    'type' => 'select',
    'section' => 'theme_fonts', // Add a default or your own section
    'label' => esc_html__( 'Buttons' ),
    'choices' => array(
      'Raleway' => __( 'Raleway' ),
      'Roboto' => __( 'Roboto' ),
      'Open Sans' => __( 'Open Sans' ),
      'Montserrat' => __('Montserrat'),
      'Poppins' => __('Poppins')
    ),
  ));

  $wp_customize->add_setting( 'headline_font', array(
    'capability' => 'edit_theme_options',
    'default' => 'Roboto',
  ));

  $wp_customize->add_control( 'headline_font', array(
    'type' => 'select',
    'section' => 'theme_fonts', // Add a default or your own section
    'label' => esc_html__( 'Headlines' ),
    'choices' => array(
      'Raleway' => __( 'Raleway' ),
      'Roboto' => __( 'Roboto' ),
      'Open Sans' => __( 'Open Sans' ),
      'Montserrat' => __('Montserrat'),
      'Poppins' => __('Poppins')
    ),
  ));

  $wp_customize->add_setting( 'footer_font', array(
    'capability' => 'edit_theme_options',
    'default' => 'Open Sans',
  ));

  $wp_customize->add_control( 'footer_font', array(
    'type' => 'select',
    'section' => 'theme_fonts', // Add a default or your own section
    'label' => esc_html__( 'Footer' ),
    'choices' => array(
      'Raleway' => __( 'Raleway' ),
      'Roboto' => __( 'Roboto' ),
      'Open Sans' => __( 'Open Sans' ),
      'Montserrat' => __('Montserrat'),
      'Poppins' => __('Poppins')
    ),
  ));

  $wp_customize->add_setting( 'footer_font_weight', array(
    'capability' => 'edit_theme_options',
    'default' => '400',
  ));

  $wp_customize->add_control( 'footer_font_weight', array(
    'type' => 'select',
    'section' => 'theme_fonts', // Add a default or your own section
    'label' => esc_html__( 'Footer Font Weight' ),
    'choices' => array(
      'normal' => __( 'Normal' ),
      'bold' => __( 'Bold' ),
      '100' => __( '100' ),
      '200' => __( '200' ),
      '300' => __( '300' ),
      '400' => __( '400' ),
      '500' => __( '500' ),
      '600' => __( '600' ),
      '700' => __( '700' ),
      '800' => __( '800' ),
      '900' => __( '900' ),
    ),
  ));
}

function theme_get_customizer_fonts() {
  ob_start();

  $body_font = get_theme_mod( 'body_font', 'Open Sans' );
  if ( ! empty( $body_font ) ) :?> 
    body { 
      font-family: "<?php echo $body_font; ?>", sans-serif !important;
    }
  <?php endif;?>
  <?php

  $headline_font = get_theme_mod( 'headline_font', 'Roboto' );
  if ( ! empty( $headline_font ) ) :?> 
    h1, h2, h3, h4, h5, h6 { 
      font-family: "<?php echo $headline_font; ?>";
    }
  <?php endif;?>
  <?php

  $button_font = get_theme_mod( 'button_font', 'Open Sans' );
  if ( ! empty( $button_font ) ) :?> 
    .btn, button { 
      font-family: "<?php echo $button_font; ?>", sans-serif;
    }
  <?php endif;?>
  <?php

  $footer_font = get_theme_mod( 'footer_font', 'Open Sans' );
  if ( ! empty( $footer_font ) ) :?> 
    #footer { 
      font-family: "<?php echo $footer_font; ?>";
    }
  <?php endif;?>
  <?php

  $footer_font_weight = get_theme_mod( 'footer_font_weight', '400' );
  if ( ! empty( $footer_font ) ) :?> 
    #footer p, #footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6 { 
      font-weight: <?php echo $footer_font_weight; ?>;
    }
  <?php endif;?>
  <?php

  $css = ob_get_clean();
  return $css;
}

?>