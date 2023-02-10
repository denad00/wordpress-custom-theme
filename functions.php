<?php

// Change all instances of pedalmania_de to your theme name.
if ( ! function_exists( 'pedalmania_de_setup' ) ) :
 
   function pedalmania_de_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumnails' );
     add_theme_support( 'html5' );


     register_nav_menus( array(
      'main-menu'       =>         'Main Menu',
      'main-social'     =>         'Social Menu',
      'main-footer'     =>         'Footer Menu',
     ));

   }
 
endif;
 
add_action('after_setup_theme', 'pedalmania_de_setup');
 
function pedalmania_de_scripts_styles(){
   wp_enqueue_style('pedalmania_de_style', get_stylesheet_uri(), array(), time());
   wp_enqueue_style('pedalmania_de_google_fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400', array(), null);
   wp_enqueue_style( 'pedalmani_de_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

   wp_enqueue_script( 'pedalmania_de_nav_js', get_template_directory_uri() ."/js/navigation.js", array(), null, true );
}
 
add_action('wp_enqueue_scripts', 'pedalmania_de_scripts_styles');