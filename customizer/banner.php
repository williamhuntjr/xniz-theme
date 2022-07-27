<?php
function theme_customizer_banner_options( $wp_customize ) {

  $wp_customize->add_section( 'static_banner_config' , array(
    'title'      => __( 'Static Hero Configuration', 'xniz' ),
  ));

  $wp_customize->add_section( 'slider_banner_config' , array(
    'title'      => __( 'Slider Configuration', 'xniz' ),
  ));

  // Slider transition time
  $wp_customize->add_setting('slider_transition_speed', array(
    'capability' => 'edit_theme_options',
    'default' => '7000',
  ));

  $wp_customize->add_control( 'slider_transition_speed', array(
    'type' => 'number',
    'section' => 'slider_banner_config', // Add a default or your own section
    'label' => esc_html__( 'Slider Transition Speed' ),
    'description' => __( 'Enter the transition speed in milliseconds' ),
  ));

  // Slider transition type
  $wp_customize->add_setting('slider_transition_type', array(
    'capability' => 'edit_theme_options',
    'default' => 'fade',
  ));

  $wp_customize->add_control( 'slider_transition_type', array(
    'type' => 'radio',
    'section' => 'slider_banner_config', // Add a default or your own section
    'label' => esc_html__( 'Slider Transition Type' ),
    'description' => __( 'Choose the transition effect of the slides' ),
    'choices' => array(
      'fade' => __( 'Fade In/Fade Out' ),
      'slide' => __( 'Slide In/Slide Out' ),
    ),
  ));
  
  // Homepage banner configuration
  $wp_customize->add_setting('static_banner_image', array(
    'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'static_banner_image',
      array(
          'label'      => __( 'Upload a background image', 'xniz' ),
          'section'    => 'static_banner_config',
          'settings'   => 'static_banner_image',
      )
    )
  );

  // Hero Headline Text
  $wp_customize->add_setting( 'hero_headline_text', array(
    'default'   => 'Headline lorem ipsum',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control('hero_headline_text', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Headline Text', 'xniz' ),
  ));

  // Hero Body Text
  $wp_customize->add_setting( 'hero_body_text', array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control('hero_body_text', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Body Text', 'xniz' ),
  ));

  // Hero Button Text
  $wp_customize->add_setting( 'hero_button_text', array(
    'default'   => 'More Details',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control('hero_button_text', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Button Text', 'xniz' ),
  ));

  // Hero Button Link
  $wp_customize->add_setting( 'hero_button_link', array(
    'default'   => get_site_url(),
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control('hero_button_link', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Button Link', 'xniz' ),
  ));

  // Hero Text color
  $wp_customize->add_setting( 'hero_overlay_text_color', array(
    'default'   => '#fff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_overlay_text_color', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Text Color', 'xniz' ),
  ) ) );

  // Hero button bg color
  $wp_customize->add_setting( 'hero_overlay_button_bg_color', array(
    'default'   => '#d82dc4',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_overlay_button_bg_color', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Button Background Color', 'xniz' ),
  ) ) );

  // Hero button fg color
  $wp_customize->add_setting( 'hero_overlay_button_fg_color', array(
    'default'   => '#fff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_overlay_button_fg_color', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Button Text Color', 'xniz' ),
  ) ) );

  // Hero button hover bg color
  $wp_customize->add_setting( 'hero_overlay_button_hover_bg_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_overlay_button_hover_bg_color', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Button Hover Background Color', 'xniz' ),
  ) ) );

  // Hero button hover fg color
  $wp_customize->add_setting( 'hero_overlay_button_hover_fg_color', array(
    'default'   => '#fff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_overlay_button_hover_fg_color', array(
    'section' => 'static_banner_config',
    'label'   => esc_html__( 'Button Hover Text Color', 'xniz' ),
  ) ) );


  // Homepage banner configuration
  $wp_customize->add_setting('homepage_banner_type', array(
    'capability' => 'edit_theme_options',
    'default' => 'hero',
  ));

  $wp_customize->add_control( 'homepage_banner_type', array(
    'type' => 'radio',
    'section' => 'static_front_page', // Add a default or your own section
    'label' => esc_html__( 'Home Page Banner Type' ),
    'description' => __( 'Choose what type of banner you wish to use.' ),
    'choices' => array(
      'hero' => __( 'Static Hero Image' ),
      'slider' => __( 'Transitional Slider' ),
    ),
  ));

  // Homepage desktop banner size
  $wp_customize->add_setting('homepage_banner_desktop_height', array(
    'capability' => 'edit_theme_options',
    'default' => '540',
  ));

  $wp_customize->add_control( 'homepage_banner_desktop_height', array(
    'type' => 'number',
    'section' => 'static_front_page', // Add a default or your own section
    'label' => esc_html__( 'Home Page Banner Desktop Height' ),
    'description' => __( 'Enter the size in height of your banner' ),
  ));

  // Homepage mobile banner size
  $wp_customize->add_setting('homepage_banner_mobile_height', array(
    'capability' => 'edit_theme_options',
    'default' => '320',
  ));

  $wp_customize->add_control( 'homepage_banner_mobile_height', array(
    'type' => 'number',
    'section' => 'static_front_page', // Add a default or your own section
    'label' => esc_html__( 'Home Page Banner Mobile Height' ),
    'description' => __( 'Enter the size in height of your banner' ),
  ));

}


function theme_get_customizer_banner_options() {
  ob_start();

  $desktop_banner_height = get_theme_mod( 'homepage_banner_desktop_height', '540' );
  if ( ! empty( $desktop_banner_height ) ) :?> 
    #hero, #hero .hero-overlay, #slider, #slider .slider-overlay { min-height: <?php echo $desktop_banner_height; ?>px; }
  <?php endif;?>
  <?php

  $mobile_banner_height = get_theme_mod( 'homepage_banner_mobile_height', '320' );
  if ( ! empty( $mobile_banner_height ) ) :?> 
  @media (max-width: 991.98px) { 
    #hero, #hero .hero-overlay, #slider, #slider .slider-overlay { min-height: <?php echo $mobile_banner_height; ?>px; }
  }
  <?php endif;?>
  <?php

  // hero text color
  $hero_text_color = get_theme_mod( 'hero_overlay_text_color', '#ffffff' );
  if ( ! empty( $hero_text_color ) ) :?> 
    .hero-overlay { color: <?php echo sanitize_hex_color( $hero_text_color );?>;  }
  <?php endif;?>
  <?php

  // hero button colors
  $hero_button_bg_color = get_theme_mod( 'hero_overlay_button_bg_color', '#d82dc4' );
  if ( ! empty( $hero_button_bg_color ) ) :?> 
    .btn-hero { 
      background-color: <?php echo sanitize_hex_color( $hero_button_bg_color );?>;
      border-color: <?php echo sanitize_hex_color( $hero_button_bg_color );?>;  
    }
  <?php endif;?>
  <?php

  // hero button text color
  $hero_button_fg_color = get_theme_mod( 'hero_overlay_button_fg_color', '#ffffff' );
  if ( ! empty( $hero_button_fg_color ) ) :?> 
    .btn-hero { 
      color: <?php echo sanitize_hex_color( $hero_button_fg_color );?>;
    }
  <?php endif;?>
  <?php

  // hero button hover colors
  $hero_button_hover_bg_color = get_theme_mod( 'hero_overlay_button_hover_bg_color', '#1a1917' );
  if ( ! empty( $hero_button_hover_bg_color ) ) :?> 
    .btn-hero:hover, .btn-hero:focus { 
      background-color: <?php echo sanitize_hex_color( $hero_button_hover_bg_color );?>;
      border-color: <?php echo sanitize_hex_color( $hero_button_hover_bg_color );?>;  
    }
  <?php endif;?>
  <?php

  $hero_button_hover_fg_color = get_theme_mod( 'hero_overlay_button_hover_fg_color', '#ffffff' );
  if ( ! empty( $hero_button_hover_fg_color ) ) :?> 
    .btn-hero:hover, .btn-hero:focus { 
      color: <?php echo sanitize_hex_color( $hero_button_hover_fg_color );?>;  
    }
  <?php endif;?>
  <?php

  // static hero image
  $hero_image = get_theme_mod( 'static_banner_image', '' );
  if ( ! empty( $hero_image ) ) :?> 
    #hero { 
      background-image: url('<?php echo $hero_image;?>'); 
    }
  <?php endif;?>
  <?php

  $css = ob_get_clean();
  return $css;
}

?>