<?php
function theme_customizer_colors( $wp_customize ) {

  // Main color
  $wp_customize->add_setting( 'main_color', array(
    'default'   => '#d82dc4',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Main color', 'xniz' ),
  ) ) );

  // Dark color
  $wp_customize->add_setting( 'dark_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Dark color', 'xniz' ),
  ) ) );

  // Main color Foreground
  $wp_customize->add_setting( 'main_color_fg', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color_fg', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Main color foreground', 'xniz' ),
  ) ) );

  // Secondary color
  $wp_customize->add_setting( 'secondary_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Secondary color', 'xniz' ),
  ) ) );

  // Dark background color
  $wp_customize->add_setting( 'bg_dark_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_dark_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Dark background color', 'xniz' ),
  ) ) );

  // Light background color
  $wp_customize->add_setting( 'bg_light_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_light_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Light background color', 'xniz' ),
  ) ) );

  // Hamburger icon color
  $wp_customize->add_setting( 'hamburger_icon_color', array(
    'default'   => '#d82dc4',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hamburger_icon_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Hamburger icon color', 'xniz' ),
  ) ) );

      
  // Text color
  $wp_customize->add_setting( 'text_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Text color', 'xniz' ),
  ) ) );

  // Link color
  $wp_customize->add_setting( 'link_color', array(
    'default'   => '#d82dc4',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Link color', 'xniz' ),
  ) ) );

  // Link hover color
  $wp_customize->add_setting( 'link_hover_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Link hover color', 'xniz' ),
  ) ) );
  
  // Primary button
  $wp_customize->add_setting( 'primary_button_color', array(
    'default'   => '#d82dc4',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Primary button color', 'xniz' ),
  ) ) );

  // Primary button text
  $wp_customize->add_setting( 'primary_button_text_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_text_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Primary button text color', 'xniz' ),
  ) ) );

  // Primary button hover
  $wp_customize->add_setting( 'primary_button_hover_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_hover_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Primary button hover color', 'xniz' ),
  ) ) );

  // Primary button hover text
  $wp_customize->add_setting( 'primary_button_hover_text_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_hover_text_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Primary button hover text color', 'xniz' ),
  ) ) );

  // secondary button
  $wp_customize->add_setting( 'secondary_button_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Secondary button color', 'xniz' ),
  ) ) );

  // secondary button text
  $wp_customize->add_setting( 'secondary_button_text_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_text_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Secondary button text color', 'xniz' ),
  ) ) );

  // secondary button hover
  $wp_customize->add_setting( 'secondary_button_hover_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_hover_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Secondary button hover color', 'xniz' ),
  ) ) );

  // secondary button hover text
  $wp_customize->add_setting( 'secondary_button_hover_text_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_hover_text_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Secondary button hover text color', 'xniz' ),
  ) ) );

  // Navigation link background color
  $wp_customize->add_setting( 'nav_link_bg_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_bg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation link background color', 'xniz' ),
  ) ) );


  // Navigation link foreground color
  $wp_customize->add_setting( 'nav_link_fg_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_fg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation link foreground color', 'xniz' ),
  ) ) );

  // Navigation link hover background color
  $wp_customize->add_setting( 'nav_link_hover_bg_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_hover_bg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation link hover background color', 'xniz' ),
  ) ) );

  // Navigation link hover foreground color
  $wp_customize->add_setting( 'nav_link_hover_fg_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_hover_fg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation link hover foreground color', 'xniz' ),
  ) ) );

  // Navigation active link background color
  $wp_customize->add_setting( 'nav_active_bg_color', array(
    'default'   => '#d82dc4',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_bg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation active link background color', 'xniz' ),
  ) ) );

  // Navigation active link foreground color
  $wp_customize->add_setting( 'nav_active_fg_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_fg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation active link foreground color', 'xniz' ),
  ) ) );

  // Navigation active parent background
  $wp_customize->add_setting( 'nav_active_parent_bg_color', array(
    'default'   => '#1a1917',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_parent_bg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation active parent background color', 'xniz' ),
  ) ) );
  
  // Navigation active parent foreground
  $wp_customize->add_setting( 'nav_active_parent_fg_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_parent_fg_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Navigation active parent foreground color', 'xniz' ),
  ) ) );

}
function theme_get_customizer_colors() {
  ob_start();
  echo '
  :root {
  ';

  $dark_color = get_theme_mod( 'dark_color', '#1a1917' );
  if ( ! empty( $dark_color ) ) :?>
    --dark-color: <?php echo sanitize_hex_color($dark_color);?>;
  <?php endif;?>
  <?php

  $main_color = get_theme_mod( 'main_color', '#d82dc4' );
  if ( ! empty( $main_color ) ) :?>
    --primary-color: <?php echo sanitize_hex_color($main_color);?>;
  <?php endif;?>
  <?php

  $main_color_fg = get_theme_mod( 'main_color_fg', '#ffffff' );
  if ( ! empty( $main_color_fg ) ) :?>
    --primary-color-fg: <?php echo sanitize_hex_color($main_color_fg);?>;
  <?php endif;?>
  <?php

  $secondary_color = get_theme_mod( 'secondary_color', '#1a1917' );
  if ( ! empty( $secondary_color ) ) :?>
    --secondary-color: <?php echo sanitize_hex_color($secondary_color);?>;
  <?php endif;?>
  <?php

  $bg_dark_color = get_theme_mod( 'bg_dark_color', '#1a1917' );
  if ( ! empty( $bg_dark_color ) ) :?>
    --bg-dark-color: <?php echo sanitize_hex_color($bg_dark_color);?>;
  <?php endif;?>
  <?php

  $bg_light_color = get_theme_mod( 'bg_light_color', '#ffffff' );
  if ( ! empty( $bg_light_color ) ) :?>
    --bg-light-color: <?php echo sanitize_hex_color($bg_light_color);?>;
  <?php endif;?>
  <?php

  $hamburger_icon_color = get_theme_mod( 'hamburger_icon_color', '#d82dc4' );
  if ( ! empty( $hamburger_icon_color ) ) :?> 
    --hamburger-color: <?php echo sanitize_hex_color($hamburger_icon_color);?>;
  <?php endif;?>
  <?php

  $text_color = get_theme_mod( 'text_color', '#1a1917' );
  if ( ! empty( $text_color ) ) :?> 
    --text-color: <?php echo sanitize_hex_color($text_color);?>;
  <?php endif;?>
  <?php

  $link_color = get_theme_mod( 'link_color', '#d82dc4' );
  if ( ! empty( $link_color ) ) :?>
    --link-color: <?php echo sanitize_hex_color($link_color);?>;
  <?php endif;?>
  <?php

  $link_hover_color = get_theme_mod( 'link_hover_color', '#1a1917' );
  if ( ! empty( $link_hover_color ) ) : ?>
    --link-color-hover: <?php echo sanitize_hex_color($link_hover_color);?>;
  <?php endif;?>
  <?php

  $primary_button_color = get_theme_mod( 'primary_button_color', '#d82dc4' );
  if ( ! empty( $primary_button_color ) ) : ?>
    --primary-button-color: <?php echo sanitize_hex_color($primary_button_color);?>;
  <?php endif;?>
  <?php

  $primary_button_text_color = get_theme_mod( 'primary_button_text_color', '#ffffff' );
  if ( ! empty( $primary_button_text_color ) ) : ?>
    --primary-button-text-color: <?php echo sanitize_hex_color($primary_button_text_color);?>;
  <?php endif;?>
  <?php

  $primary_button_hover_color = get_theme_mod( 'primary_button_hover_color', '#1a1917' );
  if ( ! empty( $primary_button_hover_color ) ) : ?>
    --primary-button-hover-color: <?php echo sanitize_hex_color($primary_button_hover_color);?>;
  <?php endif;?>
  <?php

  $primary_button_hover_text_color = get_theme_mod( 'primary_button_hover_text_color', '#ffffff' );
  if ( ! empty( $primary_button_hover_text_color ) ) : ?>
    --primary-button-hover-text-color: <?php echo sanitize_hex_color($primary_button_hover_text_color);?>;
  <?php endif;?>
  <?php


  $secondary_button_color = get_theme_mod( 'secondary_button_color', '#1a1917' );
  if ( ! empty( $secondary_button_color ) ) : ?>
    --secondary-button-color: <?php echo sanitize_hex_color($secondary_button_color);?>;
  <?php endif;?>
  <?php

  $secondary_button_text_color = get_theme_mod( 'secondary_button_text_color', '#ffffff' );
  if ( ! empty( $secondary_button_text_color ) ) : ?>
    --secondary-button-text-color: <?php echo sanitize_hex_color($secondary_button_text_color);?>;
  <?php endif;?>
  <?php

  $secondary_button_hover_color = get_theme_mod( 'secondary_button_hover_color', '#1a1917' );
  if ( ! empty( $secondary_button_hover_color ) ) : ?>
    --secondary-button-hover-color: <?php echo sanitize_hex_color($secondary_button_hover_color);?>;
  <?php endif;?>
  <?php

  $secondary_button_hover_text_color = get_theme_mod( 'secondary_button_hover_text_color', '#ffffff' );
  if ( ! empty( $secondary_button_hover_text_color ) ) : ?>
    --secondary-button-hover-text-color: <?php echo sanitize_hex_color($secondary_button_hover_text_color);?>;
  <?php endif;?>
  <?php

  $nav_link_bg_color = get_theme_mod( 'nav_link_bg_color', '#ffffff' );
  if ( ! empty( $nav_link_bg_color ) ) : ?>
    --nav-link-bg-color: <?php echo sanitize_hex_color($nav_link_bg_color);?>;
  <?php endif;?>
  <?php

  $nav_link_fg_color = get_theme_mod( 'nav_link_fg_color', '#1a1917' );
  if ( ! empty( $nav_link_fg_color ) ) : ?>
    --nav-link-fg-color: <?php echo sanitize_hex_color($nav_link_fg_color);?>;
  <?php endif;?>
  <?php

  $nav_link_hover_bg_color = get_theme_mod( 'nav_link_hover_bg_color', '#1a1917' );
  if ( ! empty( $nav_link_hover_bg_color ) ) : ?>
    --nav-link-hover-bg-color: <?php echo sanitize_hex_color($nav_link_hover_bg_color);?>;
  <?php endif;?>
  <?php

  $nav_link_hover_fg_color = get_theme_mod( 'nav_link_hover_fg_color', '#ffffff' );
  if ( ! empty( $nav_link_hover_fg_color ) ) : ?>
    --nav-link-hover-fg-color: <?php echo sanitize_hex_color($nav_link_hover_fg_color);?>;
  <?php endif;?>
  <?php

  $nav_active_bg_color = get_theme_mod( 'nav_active_bg_color', '#d82dc4' );
  if ( ! empty( $nav_active_bg_color ) ) : ?>
    --nav-active-bg-color: <?php echo sanitize_hex_color($nav_active_bg_color);?>;
  <?php endif;?>
  <?php

  $nav_active_fg_color = get_theme_mod( 'nav_active_fg_color', '#ffffff' );
  if ( ! empty( $nav_active_fg_color ) ) : ?>
    --nav-active-fg-color: <?php echo sanitize_hex_color($nav_active_fg_color);?>;
  <?php endif;?>
  <?php

  $nav_active_parent_fg_color = get_theme_mod( 'nav_active_parent_fg_color', '#ffffff' );
  if ( ! empty( $nav_active_parent_fg_color ) ) : ?>
    --nav-active-parent-fg-color: <?php echo sanitize_hex_color($nav_active_parent_fg_color);?>;
  <?php endif;?>
  <?php

  $nav_active_parent_bg_color = get_theme_mod( 'nav_active_parent_bg_color', '#1a1917' );
  if ( ! empty( $nav_active_parent_bg_color ) ) : ?>
    --nav-active-parent-bg-color: <?php echo sanitize_hex_color($nav_active_parent_bg_color);?>;
  <?php endif;?>
  <?php
  echo '
  }
  ';

  $css = ob_get_clean();
  return $css;
}