<?php

// Add scripts and stylesheets
function allesvdk_scripts() {
  wp_enqueue_style( 'uikit_css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css' );
  wp_enqueue_style( 'roboto_mono', 'https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700&display=swap' );
  wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css');
  wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array(), 1.1, true);
  wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/js/uikit.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'uikit_icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/js/uikit-icons.min.js' );
  wp_enqueue_script( 'uikit_parallax', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/js/components/parallax.min.js' );
}
add_action( 'wp_enqueue_scripts', 'allesvdk_scripts' );

/********************************************************************************
excerpt length
********************************************************************************/
function allesvdk_excerpt_length( $length ) {
  return 48;
}
add_filter( 'excerpt_length', 'allesvdk_excerpt_length', 999 );


// Custom menu's
function rjk_allesvdk_menu() {
  register_nav_menu( 'allesvdk-menu', __('Alles voor de Kunsten menu') );
}
add_action( 'init', 'rjk_allesvdk_menu' );

// function rjk_allesvdk_productions_menu() {
//   register_nav_menu( 'allesvdk-productions-menu', __('Producties') );
// }
// add_action( 'init', 'rjk_allesvdk_productions_menu' );
//
// function rjk_allesvdk_groepen_menu() {
//   register_nav_menu( 'allesvdk-groepen-menu', __('Groepen') );
// }
// add_action( 'init', 'rjk_allesvdk_groepen_menu' );


// FILTER ADSS A 'BS-ACTIVE' CLASS TO CURRENT-MENU-ITEM
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'bs-active ';
    }
    return $classes;
}


add_image_size( 'square-small', 150, 150, true );
add_image_size( 'square', 250, 250, true );
add_image_size( 'square-medium', 400, 400, true );
add_image_size( 'square-big', 500, 500, true );
add_image_size( 'widescreen', 320, 180, true );
add_image_size( 'hvrbox', 250, 300, true );


// Create widgets
// function allesvdk_create_widget( $description ) {
//
// 	register_sidebar(array(
// 		'name' => __( 'Page sidebar 1' ),
// 		'id' => 'sidebar-1',
// 		'description' => __( $description ),
// 		'before_widget' => '<div>',
// 		'after_widget' => '</div>',
// 		'before_title' => '<h3 style="font-variant:all-small-caps;">',
// 		'after_title' => '</h3>'
// 	));
//
//   register_sidebar(array(
// 		'name' => __( 'Page sidebar 2' ),
// 		'id' => 'sidebar-2',
// 		'description' => __( $description ),
// 		'before_widget' => '<div>',
// 		'after_widget' => '</div>',
//     'before_title' => '<h3 style="font-variant:all-small-caps;">',
// 		'after_title' => '</h3>'
// 	));
//
//   register_sidebar(array(
// 		'name' => __( 'Page sidebar 3' ),
// 		'id' => 'sidebar-3',
// 		'description' => __( $description ),
// 		'before_widget' => '<div>',
// 		'after_widget' => '</div>',
//     'before_title' => '<h3 style="font-variant:all-small-caps;">',
// 		'after_title' => '</h3>'
// 	));
//
// }
// allesvdk_create_widget( 'Page Sidebar', 'page', 'Displays on the bottom of pages with a sidebar' );

/**********************************************************************************
allesvdk_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function allesvdk_theme_support() {

  /* post formats */
  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

  /* post thumbnails */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'producties', 'groepen' ) );

  /* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );

  // Wordpress titles
  add_theme_support( 'title-tag' );

  /* Logo support */
  add_theme_support( 'custom-logo', array(
  	'height'      => 240, // set to your dimensions
  	'width'       => 240,
  	'flex-height' => true,
  	'flex-width'  => true,
  ) );

}
add_action( 'after_setup_theme', 'allesvdk_theme_support' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
