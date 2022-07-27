<?php
  require_once('class-wp-bootstrap-navwalker.php');
  require_once('customizer/colors.php');
  require_once('customizer/banner.php');
  require_once('customizer/fonts.php');
  require_once('customizer/footer.php');
  require_once('customizer/logo.php');
  require_once('customizer/navigation.php');
  require_once('customizer/social-links.php');
  require_once('customizer/hero.php');

  // Bootstrap navigation
  
  function bootstrap_nav()
  {
    wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
  }

  function theme_assets() {
    wp_enqueue_style( 'bootstrap-styles',  get_stylesheet_directory_uri() . '/css/bootstrap.min.css' ); 
    
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.min.js', false, null);
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/js/popper.min.js', '' );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery', 'popper' ) );

    if (is_front_page()) {

      $homepage_banner_type = get_theme_mod( 'homepage_banner_type', 'hero' );
      if ($homepage_banner_type == 'slider') {
        wp_enqueue_script( 'jquery-ui', get_stylesheet_directory_uri() . '/js/jquery-ui.min.js', '' );

        wp_enqueue_style( 'jquery-ui-style', get_stylesheet_directory_uri() . '/css/jquery-ui.min.css' );  

        wp_enqueue_script( 'slider', get_stylesheet_directory_uri() . '/js/slider.js', '' );  

        // mobile slider background images
        $slider_mobile_css = load_slider_mobile_css();
        wp_add_inline_style( 'theme-styles', $slider_mobile_css );

        $slider_options = array(
          'transition_speed'  => get_theme_mod('slider_transition_speed', '7000'),
          'transition_type'   => get_theme_mod('slider_transition_type', 'fade')
        );

        wp_localize_script( 'slider', 'slider_options', $slider_options );
      }
    }
    // default styles
    wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/css/styles.css' );
    wp_enqueue_style( 'theme-fonts', get_stylesheet_directory_uri() . '/css/fonts.css' );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/fontawesome/all.min.css');
    wp_enqueue_style( 'custom-theme-styles', get_stylesheet_directory_uri() . '/css/theme.css' );

    // woocommerce styles
    if (check_for_woocommerce()) {
      wp_enqueue_style( 'theme-woocommerce-styles', get_stylesheet_directory_uri() . '/css/woocommerce.css' );
      wp_enqueue_script( 'theme-woocommerce-js', get_stylesheet_directory_uri() . '/js/woocommerce.js', '' );
    }

    // customizer banner options
    $customizer_banner_options = theme_get_customizer_banner_options();
    wp_add_inline_style( 'theme-styles', $customizer_banner_options );

    // customizer banner options
    $customizer_hero_options = theme_get_customizer_hero_options();
    wp_add_inline_style( 'theme-styles', $customizer_hero_options );

    // customizer fonts
    $customizer_fonts = theme_get_customizer_fonts();
    wp_add_inline_style( 'theme-styles', $customizer_fonts );

    // customizer footer css
    $footer_css = theme_get_customizer_footer_css();
    wp_add_inline_style( 'theme-styles', $footer_css );

    // navbar css
    $navbar_css = theme_get_customizer_navigation();
    wp_add_inline_style( 'theme-styles', $navbar_css );

    // customizer colors
    $customizer_colors = theme_get_customizer_colors();
    wp_add_inline_style( 'theme-styles', $customizer_colors );
    wp_enqueue_style( 'theme-customizer-colors', get_stylesheet_directory_uri() . '/css/customizer-colors.css' );

  }

  function load_slider_mobile_css() {

    $slides = get_posts(array(
      'posts_per_page'	=> -1,
      'post_type'			=> 'slides'
    ));
    
    $counter = 0;
    if ( $slides ) {
      foreach( $slides as $slide ) {
        setup_postdata( $GLOBALS['post'] =& $slide );
        ++$counter;
        ob_start();
        echo '
        @media (max-width: 575.98px) { 
          .slide-' . $counter . ' { background-image: url("' . get_field('mobile_featured_image') . '") !important }
        }
        ';
        $css = ob_get_clean();

      }
      wp_reset_postdata();
    }
    return $css;
  }

  function register_slides() {
    $labels = array(
      'name'                => __( 'Banner Slides', 'Post Type General Name', 'xniz' ),
      'singular_name'       => __( 'Slide', 'Post Type Singular Name', 'xniz' ),
      'menu_name'           => __( 'Banner Slides', 'xniz' ),
      'all_items'           => __( 'All Slides', 'xniz' ),
      'view_item'           => __( 'View Slide', 'xniz' ),
      'add_new_item'        => __( 'Add New Slide', 'xniz' ),
      'add_new'             => __( 'Add New', 'xniz' ),
      'edit_item'           => __( 'Edit Slide', 'xniz' ),
      'update_item'         => __( 'Update Slide', 'xniz' ),
      'search_items'        => __( 'Search Slide', 'xniz' ),
      'not_found'           => __( 'Not Found', 'xniz' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'xniz' ),
    );
   
   
    $args = array(
        'label'               => __( 'slides', 'xniz' ),
        'description'         => __( 'A list of home page slides', 'xniz' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('custom-fields', 'title'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'slides' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'menu_icon'                => 'dashicons-format-gallery',
        'capability_type'     => 'page',
    );
    register_post_type( 'slides', $args );
  
    if (class_exists('MultiPostThumbnails')) {
      MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
    }

  }

  function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
    );
  }

  function show_template() {
    global $template;
    return $template;
  }
  function register_my_sidebars() {
    $args = array(
      'name'          => sprintf( __( 'Right Sidebar 1' ), 1 ),
      'id'            => "sidebar-1",
      'description'   => '',
      'class'         => '',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => "</li>\n",
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => "</h2>\n",
    );
    register_sidebar( $args );

    $args = array(
      'name'          => sprintf( __( 'Right Sidebar 2' ), 2 ),
      'id'            => "sidebar-2",
      'description'   => '',
      'class'         => '',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => "</li>\n",
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => "</h2>\n",
    );
    register_sidebar( $args );
  }

  // theme support
  add_theme_support( 'post-thumbnails' ); 
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );
  add_post_type_support( 'page', 'excerpt' );
  
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' ); 

  // check if woocommerce is loaded
  function check_for_woocommerce() {
    if (!defined('WC_VERSION')) {
        return false;
    } else {
        return true;
    }
  }
  add_action('plugins_loaded', 'check_for_woocommerce');

  // remove [..] from excerpt
  function trim_excerpt($text) {
    return str_replace(' [...]', '...', $text);
  }
  add_filter('get_the_excerpt', 'trim_excerpt');
  
  // register main menu and sidebars
  add_action( 'init', 'register_my_menus' );
  add_action( 'init', 'register_my_sidebars' );
  add_action( 'init', 'register_slides' );

  add_action('wp_head', 'show_template');

  // load css and javascript
  add_action( 'wp_enqueue_scripts', 'theme_assets' );

  // customizer colors
  add_action( 'customize_register', 'theme_customizer_colors' );

  // customizer banner options
  add_action( 'customize_register', 'theme_customizer_banner_options' );

  // customizer hero
  add_action( 'customize_register', 'theme_customizer_hero_options' );

  // customizer banner fonts
  add_action( 'customize_register', 'theme_customizer_fonts' );

  // customizer footer config
  add_action( 'customize_register', 'theme_customizer_footer' );

  // customizer logo config
  add_action( 'customize_register', 'theme_customizer_logo' );

  // customizer navbar config
  add_action( 'customize_register', 'theme_customizer_navigation' );

  // customizer social
  add_action( 'customize_register', 'theme_customizer_social' );

  // Check if ACF is installed
  add_action( 'admin_notices', 'theme_dependencies' );

  function theme_js() {
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/theme.js', '' );
  }
  add_action('wp_footer','theme_js');

  function theme_dependencies() {
    if ( ! class_exists('ACF') ) {
      echo '<div class="error"><p>' . __( 'Warning: This theme needs the Advanced Custom Fields plugin to function.', 'my-theme' ) . '</p></div>';
    }
  }

?>