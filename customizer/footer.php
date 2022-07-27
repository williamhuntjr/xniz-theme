<?php
function theme_customizer_footer( $wp_customize ) {

  $wp_customize->add_section( 'footer_config' , array(
    'title'      => __( 'Footer Configuration', 'xniz' ),
  ));

  // HTML
  $wp_customize->add_setting( 'footer_html', array(
    'capability' => 'edit_theme_options',
    'default' => '<p class="mb-0">© <strong>Xniz Theme</strong>. All rights reserved.</p>',
  ));

  $wp_customize->add_control( 'footer_html', array(
    'type' => 'textarea',
    'section' => 'footer_config', // Add a default or your own section
    'label' => esc_html__( 'HTML' ),
  ));

  // Background color
  $wp_customize->add_setting( 'footer_bg_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
    'section' => 'footer_config',
    'label'   => esc_html__( 'Background color', 'xniz' ),
  )));

  // Foreground color
  $wp_customize->add_setting( 'footer_fg_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_fg_color', array(
    'section' => 'footer_config',
    'label'   => esc_html__( 'Foreground color', 'xniz' ),
  )));

  // Padding
  $wp_customize->add_setting( 'footer_padding', array(
    'default'   => '10',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control( 'footer_padding', array(
    'section' => 'footer_config',
    'type'    => 'number',
    'label'   => esc_html__( 'Padding', 'xniz' ),
  ));
}

function theme_get_customizer_footer_css() {
  ob_start();

  $footer_bg_color = get_theme_mod( 'footer_bg_color', '#1a1917' );
  if ( ! empty( $footer_bg_color ) ) :?> 
    #footer { background-color: <?php echo sanitize_hex_color( $footer_bg_color ); ?>; }
  <?php endif;?>
  <?php

  $footer_fg_color = get_theme_mod( 'footer_fg_color', '#ffffff' );
  if ( ! empty( $footer_fg_color ) ) :?> 
    #footer { color: <?php echo sanitize_hex_color( $footer_fg_color ); ?>; }
  <?php endif;?>
  <?php

  $footer_padding = get_theme_mod( 'footer_padding', '10' );
  if ( ! empty( $footer_padding ) ) :?> 
    #footer { padding: <?php echo $footer_padding; ?>px; }
  <?php endif;?>
  <?php

  $css = ob_get_clean();
  return $css;
}

?>