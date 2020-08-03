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

// Envio Formulario Correo
// Hooks admin-post
add_action( 'admin_post_nopriv_process_form', 'send_mail_data' );
add_action( 'admin_post_process_form', 'send_mail_data' );

// Funcion callback
function send_mail_data() {

	$name = sanitize_text_field($_POST['nombre']);
	$email = sanitize_email($_POST['email']);
	$message = sanitize_textarea_field($_POST['mensaje']);

	$adminmail = "dlcroci@hotmail.com"; //email destino
	$subject = 'Formulario de Contacto'; //asunto
	$headers = "Reply-to: " . $name . " <" . $email . ">";

	//Cuerpo del mensaje
	$msg = "Nombre: " . $name . "\n";
	$msg .= "E-mail: " . $email . "\n\n";
	$msg .= "Mensaje: \n\n" . $message . "\n";

	$sendmail = wp_mail( $adminmail, $subject, $msg, $headers);

	wp_redirect( home_url("/contacto/")."?sent=".$sendmail ); //asumiendo que existe esta url
}

add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
function new_mail_from($old) {
return 'info@dcmarketingsolutions.net';
}
function new_mail_from_name($old){
return 'DC Marketing Solutions';
}

// Creador de Sitemap
// add_action( 'publish_post', 'itsg_create_sitemap' );
// add_action( 'publish_page', 'itsg_create_sitemap' );
// function itsg_create_sitemap() {
//     $postsForSitemap = get_posts(array(
//         'numberposts' => -1,
//         'orderby' => 'modified',
//         'post_type'  => array( 'post', 'page' ),
//         'order'    => 'DESC'
//     ));
//     $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
//     $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
//         xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
//     foreach( $postsForSitemap as $post ) {
//         setup_postdata( $post );
//         $postdate = explode( " ", $post->post_modified );
//         $sitemap .= '<url>'.
//           '<loc>' . get_permalink( $post->ID ) . '</loc>' .
//           '<lastmod>' . $postdate[0] . '</lastmod>' .          
//          '</url>';
//       }
//     $sitemap .= '</urlset>';
//     $fp = fopen( ABSPATH . 'sitemap.xml', 'w' );
//     fwrite( $fp, $sitemap );
//     fclose( $fp );
// }

?>






