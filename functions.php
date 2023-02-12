<?php
 
// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'jazzicons_ha_setup' ) ) :
  
   function jazzicons_ha_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );

    register_nav_menus( 
      array(
        "main_menu" => "Main Menu",
        "footer_menu" => "Footer Menu"
      ) 
    );
   }
  
endif;
  
add_action('after_setup_theme', 'jazzicons_ha_setup');
  
function jazzicons_ha_scripts_styles(){
   // only good for development mode
   wp_enqueue_style('jazzicons_ha_style', get_stylesheet_uri(), array(), time());

  // Importing Sample Google Fonts
  wp_enqueue_style("jazzicons_ha_google_font_newsreader", "https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora:ital,wght@0,400;0,700;1,400&display=swap", array(), null);
}
  
add_action('wp_enqueue_scripts', 'jazzicons_ha_scripts_styles');
