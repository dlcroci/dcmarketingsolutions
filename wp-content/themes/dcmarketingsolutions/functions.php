<?php

require get_theme_file_path('/inc/like-route.php');
require get_theme_file_path('/inc/search-route.php');

function university_custom_rest() {
	register_rest_field('post', 'authorName', array(
	  'get_callback' => function() {return get_the_author();}
	));
  
	register_rest_field('note', 'userNoteCount', array(
	  'get_callback' => function() {return count_user_posts(get_current_user_id(), 'note');}
	));
  }
  
  add_action('rest_api_init', 'university_custom_rest');
  
  function pageBanner($args = NULL) {
	
	if (!$args['title']) {
	  $args['title'] = get_the_title();
	}
  
	if (!$args['subtitle']) {
	  $args['subtitle'] = get_field('page_banner_subtitle');
	}
  
	if (!$args['photo']) {
	  if (get_field('page_banner_background_image')) {
		$args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
	  } else {
		$args['photo'] = get_theme_file_uri('/img/ocean.jpg');
	  }
	}
  
	?>
	<div class="page-banner">
	  <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
	  <div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
		<div class="page-banner__intro">
		  <p><?php echo $args['subtitle']; ?></p>
		</div>
	  </div>  
	</div>
  <?php }

function dcms_files() {
  wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Rubik&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  if (strstr($_SERVER['SERVER_NAME'], 'localhost/dcmarketingsolutions')) {
    wp_enqueue_script('main-dcms-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.697ed90fd66784ef9605.js'), NULL, '1.0', true);
    wp_enqueue_script('main-dcms-js', get_theme_file_uri('/bundled-assets/scripts.fae94b919217f48594ea.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.fae94b919217f48594ea.css'));
  }

  wp_localize_script('main-dcms-js', 'dcmsData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
}

add_action('wp_enqueue_scripts', 'dcms_files');


function dcms_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('photoLandscape', 800, 500, true);
  add_image_size('photoPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
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


//Sidebar
function registrar_sidebar(){
	register_sidebar(array(
	 'name' => 'Sidebar Principal',
	 'id' => 'sidebar-principal',
	 'description' => 'Descripción principal',
	 'class' => 'sidebar',
	 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	 'after_widget' => '</aside>',
	 'before_title' => '<h2 class="widget-title">',
	 'after_title' => '</h2>',
	));
  }
add_action( 'widgets_init', 'registrar_sidebar');



/*Display custom meta description or the post excerpt */
function add_custom_meta_des(){

	#Homepage Meta Description
	if( is_home() || is_front_page() || is_archive() ){
		$meta_des = "DC Marketing Solutions es una agencia especializada en Marketing Digital, Social Media Marketing, Inbound Marketing, SEO, Ecommerce y Diseño de Páginas Web."; #Edit here
		echo '<meta name="description" content="' . $meta_des . '" />';
	}
	
	#Single Page Meta Description
	if( is_single() ||  is_page() ){
		$des = get_post_meta( get_the_id(), 'description', true);
		if( ! empty( $des )  ){
			$meta_des = esc_html($des);
			echo '<meta name="description" content="' . $meta_des . '" />';
		}
		else {
			$meta_des = "DC Marketing Solutions es una agencia especializada en Marketing Digital, Social Media Marketing, Inbound Marketing, SEO, Ecommerce y Diseño de Páginas Web."; #Edit here
			echo '<meta name="description" content="' . $meta_des . '" />';
		}
	}
}
add_action( 'wp_head', 'add_custom_meta_des', 4 );


/*Display custom meta keywords or the post excerpt */
function add_custom_meta_keywords(){

	#Homepage Meta Keywords
	if( is_home() || is_front_page() || is_archive() ){
		$meta_keywords = "marketing, marketing digital, SEO, inbound marketing, social media marketing, community manager, ecommerce, diseño de páginas web, Panamá, Buenos Aires, Barcelona, Argentina, España, Cataluña, agencia digital Panamá, agencia, digital"; #Edit here
		echo '<meta name="keywords" content="' . $meta_keywords . '" />';
	}
	
	#Single Page Meta Keywords
	if( is_single() ||  is_page() ){
		$keywords = get_post_meta( get_the_id(), 'keywords', true);
		if( ! empty( $keywords )  ){
			$meta_keywords = esc_html($keywords);
			echo '<meta name="keywords" content="' . $meta_keywords . '" />';
		}
		else { 
			$meta_keywords = "marketing, marketing digital, SEO, inbound marketing, social media marketing, community manager, ecommerce, diseño de páginas web, Panamá, Buenos Aires, Barcelona, Argentina, España, Cataluña, agencia digital Panamá, agencia, digital"; #Edit here
		echo '<meta name="keywords" content="' . $meta_keywords . '" />';
		}
	}
}
add_action( 'wp_head', 'add_custom_meta_keywords', 4 );


// Shortcodes

function shortcode_suma() {
	$a = 100;
	$b = 200;
	$c = $a + $b;
	return $c;
	}
	add_shortcode('suma', 'shortcode_suma');


	function shortcode_mostrar() {
		$mostrar = get_post_meta( get_the_id() );
		$largo = count( $mostrar);
		echo is_array ($mostrar);
		echo $largo;
		}
	add_shortcode('mostrar', 'shortcode_mostrar');


	function university_adjust_queries($query) {
		if (!is_admin() AND is_post_type_archive('campus') AND is_main_query()) {
		  $query->set('posts_per_page', -1);
		}
	  
		if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
		  $query->set('orderby', 'title');
		  $query->set('order', 'ASC');
		  $query->set('posts_per_page', -1);
		}
	  
		if (!is_admin() AND is_post_type_archive('event') AND is_main_query()) {
		  $today = date('Ymd');
		  $query->set('meta_key', 'event_date');
		  $query->set('orderby', 'meta_value_num');
		  $query->set('order', 'ASC');
		  $query->set('meta_query', array(
					array(
					  'key' => 'event_date',
					  'compare' => '>=',
					  'value' => $today,
					  'type' => 'numeric'
					)
				  ));
		}
	  }
	  
	  add_action('pre_get_posts', 'university_adjust_queries');
	  
	  function universityMapKey($api) {
		$api['key'] = 'AIzaSyBh9b1rNCp6kOi5JeMHiRP4klDymBeoEWk';
		return $api;
	  }
	  
	  add_filter('acf/fields/google_map/api', 'universityMapKey');
	  
	  
	  // Redirect subscriber accounts out of admin and onto homepage
	  add_action('admin_init', 'redirectSubsToFrontend');
	  
	  function redirectSubsToFrontend() {
		$ourCurrentUser = wp_get_current_user();
	  
		if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
		  wp_redirect(site_url('/'));
		  exit;
		}
	  }
	  
	  add_action('wp_loaded', 'noSubsAdminBar');
	  
	  function noSubsAdminBar() {
		$ourCurrentUser = wp_get_current_user();
	  
		if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
		  show_admin_bar(false);
		}
	  }
	  
	  // Customize Login Screen
	  add_filter('login_headerurl', 'ourHeaderUrl');
	  
	  function ourHeaderUrl() {
		return esc_url(site_url('/'));
	  }
	  
	  add_action('login_enqueue_scripts', 'ourLoginCSS');
	  
	  function ourLoginCSS() {
		wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.fae94b919217f48594ea.css'));
	  }
	  
	  add_filter('login_headertitle', 'ourLoginTitle');
	  
	  function ourLoginTitle() {
		return get_bloginfo('name');
	  }
	  
	  // Force note posts to be private
	  add_filter('wp_insert_post_data', 'makeNotePrivate', 10, 2);
	  
	  function makeNotePrivate($data, $postarr) {
		if ($data['post_type'] == 'note') {
		  if(count_user_posts(get_current_user_id(), 'note') > 4 AND !$postarr['ID']) {
			die("You have reached your note limit.");
		  }
	  
		  $data['post_content'] = sanitize_textarea_field($data['post_content']);
		  $data['post_title'] = sanitize_text_field($data['post_title']);
		}
	  
		if($data['post_type'] == 'note' AND $data['post_status'] != 'trash') {
		  $data['post_status'] = "private";
		}
		
		return $data;
	  }
	
	







