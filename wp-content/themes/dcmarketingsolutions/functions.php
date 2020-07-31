<?php

function dcms_files() {
  // if ( is_front_page() ) {
  // wp_enqueue_script ('dcms1-js', get_theme_file_uri('js/app.js'),NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Rubik&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('dcms_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'dcms_files');

function dcms_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'dcms_features');

function codigoPHP ($atts){ 
  include (TEMPLATEPATH .”/scripts/enviar.php”); 
  }
  add_shortcode (‘enviar’, ‘codigoPHP’);

?>






