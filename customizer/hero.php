<?php
function theme_customizer_hero_options( $wp_customize ) {
  $wp_customize->add_section( 'hero_template_config' , array(
    'title'      => __( 'Hero Template Configuration', 'xniz' ),
  ));

  // Hero Template desktop banner size
  $wp_customize->add_setting('hero_template_desktop_height', array(
    'capability' => 'edit_theme_options',
    'default' => '320',
  ));

  $wp_customize->add_control( 'hero_template_desktop_height', array(
    'type' => 'number',
    'section' => 'hero_template_config', // Add a default or your own section
    'label' => esc_html__( 'Hereo Template Banner Desktop Height' ),
    'description' => __( 'Enter the size in height of your banner' ),
  ));

  // Hero Template mobile banner size
  $wp_customize->add_setting('hero_template_mobile_height', array(
    'capability' => 'edit_theme_options',
    'default' => '280',
  ));

  $wp_customize->add_control( 'hero_template_mobile_height', array(
    'type' => 'number',
    'section' => 'hero_template_config', // Add a default or your own section
    'label' => esc_html__( 'Hero Template Banner Mobile Height' ),
    'description' => __( 'Enter the size in height of your banner' ),
  ));

}

function theme_get_customizer_hero_options() {
  ob_start();

  $desktop_banner_height = get_theme_mod( 'hero_template_desktop_height', '540' );
  if ( ! empty( $desktop_banner_height ) ) :?> 
    #hero-template, #hero-template .hero-overlay { min-height: <?php echo $desktop_banner_height; ?>px; }
  <?php endif;?>
  <?php

  $mobile_banner_height = get_theme_mod( 'hero_template_mobile_height', '320' );
  if ( ! empty( $mobile_banner_height ) ) :?> 
  @media (max-width: 991.98px) { 
    #hero-template, #hero-template .hero-overlay { min-height: <?php echo $mobile_banner_height; ?>px; }
  }
  <?php endif;?>
  <?php

  $css = ob_get_clean();
  return $css;
}
?>