<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
    wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array() );
	wp_enqueue_script( 'jquery.throttle', get_template_directory_uri() . '/js/jquery.ba-throttle-debounce.min.js');
	wp_enqueue_script( 'jquery.fluid', get_template_directory_uri() . '/js/jquery.fluidbox.min.js');	

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'fluidbox', get_template_directory_uri() . '/css/fluidbox.min.css' );
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.css' );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.min.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );

	wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '', true);
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '', true);

	wp_enqueue_script( 'ammap', 'https://www.amcharts.com/lib/3/ammap.js', array(), '', true);
	wp_enqueue_script( 'worldhigh', 'https://www.amcharts.com/lib/3/maps/js/worldHigh.js', array(), '', true);
	wp_enqueue_script( 'darkmap', 'https://www.amcharts.com/lib/3/themes/dark.js', array(), '', true);
	wp_enqueue_script( 'scripts.etc', get_template_directory_uri() . '/js/scripts.js', array(), '', true);
	wp_enqueue_script( 'navbar', get_template_directory_uri() . '/js/navbar.js', array(), '', true);

	wp_enqueue_style( 'owl', get_template_directory_uri() . '/vendors/owlcarousel/owl.carousel.min.css');
	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/vendors/owlcarousel/owl.theme.default.min.css');
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/vendors/owlcarousel/owl.carousel.min.js', array(), '', true);

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
	remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function startwordpress_google_fonts() {
    wp_register_style('Allura', 'https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura');
    wp_enqueue_style( 'Allura');
}
add_action('wp_print_styles', 'startwordpress_google_fonts');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 

// Dynamically load projects using project.php template
function load_project(){
	check_ajax_referer('load_project', 'security');
    $paged = $_POST['page'];
    $args = array(
		'post_type' => 'projects',
        'p' => $_POST['project']
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) {
		while ( $my_posts->have_posts() ){
			$my_posts->the_post();
			require_once(get_template_directory() . '/project.php');
		}
    }
 
    wp_die();
}
add_action("wp_ajax_load_project", "load_project");
add_action( "wp_ajax_nopriv_load_project", 'load_project' );


// Project Post Type
function create_project_post() {
	register_post_type( 'projects',
			array(
			'labels' => array(
					'name' => __( 'Projects' ),
					'singular_name' => __( 'Project' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
                    'thumbnail'),
			'taxonomies'  => array( 'category' ),
			'query_var' => true,
            'rewrite' => TRUE,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false
	));
}
add_action( 'init', 'create_project_post' );

// Project Post Type
function create_jobs_post() {
	register_post_type( 'jobs',
			array(
			'labels' => array(
					'name' => __( 'Jobs' ),
					'singular_name' => __( 'Job' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'custom-fields')
			)
	);
}
add_action( 'init', 'create_jobs_post' );

// Custom settings
function custom_settings_add_menu() {
	add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
  }
  add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
	  <h1>Custom Settings</h1>
	  <form method="post" action="options.php">
		 <?php
			 settings_fields( 'section' );
			 do_settings_sections( 'theme-options' );      
			 submit_button(); 
		 ?>          
	  </form>
	</div>
  <?php }

// Facebook
function setting_facebook() { ?>
	<input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
<?php }

// Github
function setting_github() { ?>
	<input type="text" name="github" id="github" value="<?php echo get_option( 'github' ); ?>" />
<?php }

// Instagram
function setting_instagram() { ?>
	<input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

// Linkedin
function setting_linkedin() { ?>
	<input type="text" name="linkedin" id="linkedin" value="<?php echo get_option( 'linkedin' ); ?>" />
<?php }

// Title Role
function setting_titlerole() { ?>
	<input type="text" name="titlerole" id="titlerole" value="<?php echo get_option( 'titlerole' ); ?>" />
<?php }

// Email
function setting_email() { ?>
	<input type="text" name="email" id="email" value="<?php echo get_option( 'email' ); ?>" />
<?php }

function setting_bio(){ ?>
	<textarea name="bio" id="bio"><?= get_option('bio')?></textarea>
<?php }

function custom_settings_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
	add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
	add_settings_field( 'github', 'Github URL', 'setting_github', 'theme-options', 'section' );
	add_settings_field( 'linkedin', 'Linkedin URL', 'setting_linkedin', 'theme-options', 'section' );
	add_settings_field( 'titlerole', 'Title Role', 'setting_titlerole', 'theme-options', 'section' );
	add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
	add_settings_field( 'email', 'Email', 'setting_email', 'theme-options', 'section' );
	add_settings_field('bio', 'Biography', 'setting_bio', 'theme-options', 'section');

	register_setting('section', 'github');
	register_setting('section', 'facebook');
	register_setting('section', 'linkedin');
	register_setting('section', 'titlerole');
	register_setting('section', 'instagram');
	register_setting('section', 'email');
	register_setting('section', 'bio');
}
add_action( 'admin_init', 'custom_settings_page_setup' );