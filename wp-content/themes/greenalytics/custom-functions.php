<?php

/**
 * greenalytics custom style css adding
 *
 */
// Register Nav Walker class_alias
require_once('wp-bootstrap-navwalker.php');

 if (!function_exists('greenalytics_style_css')) {
	function greenalytics_style_css()
	{
		// bootstrap icons cdn
		wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/css/bootstrap-icons.css', array(), 'all');
		// bootstrap 5
		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all');
		// font family
		wp_enqueue_style('font-family', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), 'all');
		wp_enqueue_style('all-min', get_template_directory_uri() . '/assets/css/all.min.css', array(), 'all');
		wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), 'all');
		wp_enqueue_style('jquery-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), 'all');
		wp_enqueue_style('lity-css', get_template_directory_uri() . '/assets/css/lity.css', array(), 'all');
		wp_enqueue_style('swiper-min', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), 'all');
		// global style
		wp_enqueue_style('style-min', get_template_directory_uri() . '/assets/css/style.css', array(), 'all');
		// Font Awsome
		wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), 'all');
	}
	add_action('wp_head', 'greenalytics_style_css', 1);
}


if (!function_exists('greenalytics_script_js')) {
	function greenalytics_script_js()
	{
		wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array(), true);
		wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.min.js', array(), true);
		wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), true);
		wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), true);
		wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array(), true);
		wp_enqueue_script('lity-js', get_template_directory_uri() . '/assets/js/lity.js', array(), true);
		wp_enqueue_script('swiper-min', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), true);
		wp_enqueue_script('jquery-waypoints-min', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), true);
		wp_enqueue_script('jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.js', array(), true);
		wp_enqueue_script('pace-js', get_template_directory_uri() . '/assets/js/pace.js', array(), true);
		wp_enqueue_script('scrollIt-min', get_template_directory_uri() . '/assets/js/scrollIt.min.js', array(), true);
		wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), true); 
		?>

<script>
let text = document.getElementById('text');
let getqout = document.getElementById('getqout');
let hill1 = document.getElementById('hill1');
let hill4 = document.getElementById('hill4');
let hill5 = document.getElementById('hill5');
if (text) {
    window.addEventListener('scroll', () => {
        let value = window.scrollY;
        var body = document.body,
            html = document.documentElement;

        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);
        if (value < html.clientHeight) {
            text.style.marginTop = value * 2.5 + 'px';
            //   getqout.style.marginTop = value * 2.5 + 'px';
            hill5.style.left = value * 1.5 + 'px';
            hill4.style.left = value * -1.5 + 'px';
            hill1.style.top = value * 1 + 'px';
        }
    });
}
</script>


<?php }
	add_action('wp_footer', 'greenalytics_script_js');
}


// if (!function_exists('add_lang_item_to_nav_menu')) {
// 	add_filter('wp_nav_menu_items', 'add_lang_item_to_nav_menu', 10, 2);
// 	function add_lang_item_to_nav_menu($items, $args)
// 	{
// 		if ($args->theme_location == 'header-menu') {
// 			$items .= '<li class="languages">
// 							<select name="languages">
// 								<option value="en">EN</option>
// 								<option value="es">ES</option>
// 								<option value="pt">PT</option>
// 								<option value="fr">FR</option>
// 								<option value="zh">ZH</option>
// 							</select>
// 						</li>';
// 		}
// 		return $items;
// 	}
// }


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

	if (function_exists('acf_add_options_page')) {
		// Theme General Options
		$general_options   = array(
			'page_title' 	=> __('Theme General Options', 'greenalytics'),
			'menu_title'	=> __('Theme Options', 'greenalytics'),
			'menu_slug' 	=> 'theme-general-options',
			'capability'	=> 'edit_posts',
			'redirect'	=> true,
			'icon_url'      => 'dashicons-screenoptions',
			'position'      => 2
		);
		acf_add_options_page($general_options);

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'Theme Header',
			'parent_slug'	=> 'theme-general-options',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Theme Footer',
			'parent_slug'	=> 'theme-general-options',
		));
	}
}


// add css file in admin for acf
function acf_admin_theme_style()
{
	wp_enqueue_style('acf-admin', get_template_directory_uri() . '/assets/css/acf-admin.css');
}
add_action('admin_enqueue_scripts', 'acf_admin_theme_style');
add_action('login_enqueue_scripts', 'acf_admin_theme_style');


// solution post type register
/**
 * Post Type: Solutions.
 */
// function register_greenalytics_solutions() {
// 	$labels = [
// 		"name" => __( "Solutions", "greenalytics" ),
// 		"singular_name" => __( "Solutions", "greenalytics" ),
// 	];
// 	$args = [
// 		"label" => __( "Solutions", "greenalytics" ),
// 		"labels" => $labels,
// 		"description" => "",
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"show_ui" => true,
// 		"show_in_rest" => true,
// 		"rest_base" => "",
// 		"rest_controller_class" => "WP_REST_Posts_Controller",
// 		"has_archive" => true,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"delete_with_user" => false,
// 		"exclude_from_search" => false,
// 		"capability_type" => "post",
// 		"map_meta_cap" => true,
// 		"hierarchical" => true,
// 		"rewrite" => [ "slug" => "solutions", "with_front" => true ],
// 		"query_var" => true,
// 		"menu_icon" => "dashicons-grid-view",
// 		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
// 		"show_in_graphql" => false,
// 	];
// 	register_post_type( "solutions", $args );
// }
// add_action( 'init', 'register_greenalytics_solutions' );


/**
 * Taxonomy: Solution Category.
 */
// function register_greenalytics_solution_category()
// {
// 	$labels = [
// 		"name" => __("Solution Categories", "greenalytics"),
// 		"singular_name" => __("Category", "greenalytics"),
// 	];
// 	$args = [
// 		"label" => __("Categories", "greenalytics"),
// 		"labels" => $labels,
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"hierarchical" => true,
// 		"show_ui" => true,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"query_var" => true,
// 		"rewrite" => ['slug' => 'solution_category', 'with_front' => true,  'hierarchical' => true,],
// 		"show_admin_column" => true,
// 		"show_in_rest" => true,
// 		"show_tagcloud" => false,
// 		"rest_base" => "solution_category",
// 		"rest_controller_class" => "WP_REST_Terms_Controller",
// 		"show_in_quick_edit" => true,
// 		"show_in_graphql" => false,
// 	];
// 	register_taxonomy("solution_category", ["solutions"], $args);
// }
// add_action('init', 'register_greenalytics_solution_category');





// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}
	$filetype = wp_check_filetype($filename, $mimes);
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




// Function to get the client IP address
function get_client_ip()
{
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_X_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if (isset($_SERVER['REMOTE_ADDR']))
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress;
}
add_shortcode('client_ip', 'get_client_ip');


// contact form 7 validation
add_filter('wpcf7_before_send_mail', function ($contact_form, &$abort) {
	$submission = WPCF7_Submission::get_instance();
	$data = $submission->get_posted_data();
	$email = sanitize_text_field($data['email']);

	if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['fullname']))) {
		$abort = true;
		$submission->set_response("Invalid Your Name. Please try again.");
	} else if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['subject']))) {
		$abort = true;
		$submission->set_response("Invalid Your Subject. Please try again later.");
	} else if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['message']))) {
		$abort = true;
		$submission->set_response("There was an error trying to send your message. Please try again later.");
	}
}, 10, 2);


// remove archive prefix "Archives"
add_filter('get_the_archive_title_prefix', '__return_false');



// logo link site url
function custom_login_logo_url()
{
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'custom_login_logo_url');

// add a new logo to the login page
function wptutsplus_login_logo()
{
	$logoImage = wp_get_attachment_url(get_theme_mod('custom_logo'), 'full'); ?>
<style type="text/css">
.login #login h1 a {
    background-image: url('<?php echo $logoImage; ?>');
    background-size: 200px auto;
    height: 50px;
    width: 100%;
    margin-bottom: 10px;
}

.login #nav a,
.login #backtoblog a {
    color: #fc810a !important;
}

.login #nav a:hover,
.login #backtoblog a:hover {
    color: #fc810a !important;
}

.login #login_error,
.login .message,
.login .success {
    margin-bottom: 10px;
}

.login form {
    margin-top: 10px;
}

.login.wp-core-ui .button.button-primary {
    background: #fc810a !important;
    border-color: #fc810a !important;
    color: #fff !important;
}

.login.wp-core-ui .button-primary.focus,
.login.wp-core-ui .button-primary.hover,
.login.wp-core-ui .button-primary:focus,
.login.wp-core-ui .button-primary:hover {
    background: #3f3f41 !important;
    border-color: #3f3f41 !important;
}

.login.wp-core-ui .button,
.login.wp-core-ui .button-secondary {
    color: #3f3f41 !important;
}

.login .button.wp-hide-pw:focus {
    border-color: #3f3f41 !important;
    box-shadow: 0 0 0 1px #3f3f41 !important;
}

.login #loginform input[type="checkbox"]:focus,
.login #loginform input[type="password"]:focus,
.login #loginform input[type="radio"]:focus,
.login #loginform input[type="text"]:focus,
.login #loginform select:focus,
.login #loginform textarea:focus {
    border-color: #3f3f41 !important;
    box-shadow: 0 0 0 1px #3f3f41 !important;
    outline: 2px solid transparent;
}

.login #loginform input[type="checkbox"]:checked::before {
    content: "" !important;
    mask-image: url("data:image/svg+xml;utf8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 20 20'%3E%3Cpath d%3D'M14.83 4.89l1.34.94-5.81 8.38H9.02L5.78 9.67l1.34-1.25 2.57 2.4z' fill%3D'%233582c4'%2F%3E%3C%2Fsvg%3E");
    mask-origin: border-box;
    background: #3f3f41;
}
</style>
<?php }
add_action('login_enqueue_scripts', 'wptutsplus_login_logo');




// function mailFun(){
// 	mail('pavan0001@gmail.com', 'subject', 'hello world!');
// }


// add_action( 'transition_post_status', 'send_mails_on_publish', 10, 3 );

// function send_mails_on_publish( $new_status, $old_status, $post )
// {
//     if ( 'publish' !== $new_status or 'publish' === $old_status or 'post' !== get_post_type( $post ) )
//         return;

//     $subscribers = get_users( array ( 'role' => 'administrator' ) );
//     $emails      = array ();

//     foreach ( $subscribers as $subscriber )
//         $emails[] = $subscriber->user_email;

//     $body = sprintf( 'Hey there is a new entry!
//         See <%s>',
//         get_permalink( $post )
//     );
//     wp_mail($emails, 'New entry!', $body);
// }



// add_action( 'phpmailer_init', 'set_phpmailer_details' );
// function set_phpmailer_details( $phpmailer ) {
// 	$email = 'pavan@glasier.in';
// 	$name = 'pv';
//     $phpmailer->isSMTP();
//     $phpmailer->Host = 'smtp.gmail.com';
//     $phpmailer->SMTPAuth = true;
//     $phpmailer->Port = 465;
//     $phpmailer->Username = 'pavanvish001@gmail.com';
//     $phpmailer->Password = 'mdkkffjszuztlzig';
//     $phpmailer->SMTPSecure = 'ssl';
// 	// $phpmailer->AddAddress($email,"Greenalytics Solar");
// 	// $phpmailer->SetFrom($email,$name);
// 	// $phpmailer->Subject = 'subject';
// 	// // $phpmailer->AddAttachment($_FILES['formFile']['tmp_name'], $_FILES['formFile']['name']);
// 	// $phpmailer->Body = 'message';
// 	// if($phpmailer->Send()){
// 	// 	echo json_encode(array('message' => 'Thanks for contacting us! We will be in touch with you shortly.', 'status' => true));
// 	// 	exit;
// 	// }else{
// 	// 	echo json_encode(array('message' => 'mail sent failed.', 'status' => false));
// 	// 	exit;
// 	// }
// }




// 
// 