<?php
/**
 * Theme functions.
 *
 * @package Postali Child
 * @author Postali LLC
 */
	require_once dirname( __FILE__ ) . '/includes/admin.php';
	require_once dirname( __FILE__ ) . '/includes/utility.php';
	require_once dirname( __FILE__ ) . '/includes/case-results-cpt.php'; // Custom Post Type Case Results
	require_once dirname( __FILE__ ) . '/includes/testimonials-cpt.php'; // Custom Post Type Testimonials
	require_once dirname( __FILE__ ) . '/includes/in-the-news-cpt.php'; // Custom Post Type Recent News Stories
	require_once dirname( __FILE__ ) . '/includes/attorneys-cpt.php'; // Custom Post Type Attorneys
	//require_once dirname( __FILE__ ) . '/includes/social-share.php'; // Social Media Sharing


	add_action('wp_enqueue_scripts', 'postali_parent');
	function postali_parent() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/styles.css' ); // Enqueue parent theme styles
	
	}  

	add_action('wp_enqueue_scripts', 'postali_child');
	function postali_child() {

		wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/style.css' ); // Enqueue Child theme style sheet (theme info)
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/styles.css'); // Enqueue child theme styles.css
		wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css'); // Enqueue child theme styles.css
		wp_enqueue_style( 'icon-styles', 'https://cdn.icomoon.io/152819/OFT/style-cf.css?iuzks3' ); // Enqueue styles for svg icons
		wp_register_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap', array() );
		wp_enqueue_style('google-fonts');

		// Compiled .js using Grunt.js
		wp_register_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js',array('jquery'), null, true); 
		wp_enqueue_script('custom-scripts');
		wp_register_script('slick-min', get_stylesheet_directory_uri() . '/assets/js/slick.min.js',array('jquery'), null, true); 
		wp_enqueue_script('slick-min');
		wp_register_script('slick-custom-min', get_stylesheet_directory_uri() . '/assets/js/slick-custom.min.js',array('jquery'), null, true); 
		wp_enqueue_script('slick-custom-min');

        wp_register_script('modernizr-webp', get_stylesheet_directory_uri() . '/assets/js/modernizr-webp.min.js',array('jquery'), null, true); 
		wp_enqueue_script('modernizr-webp');

		if ( is_front_page() ) {
			wp_register_script('counter-scripts', get_stylesheet_directory_uri() . '/assets/js/counter-scroll.min.js',array('jquery'), null, true); 
			wp_enqueue_script('counter-scripts');
		}
		
        if ( is_page_template('page-practiceareas.php') ) {
			wp_register_script('smooth-scroll', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js',array('jquery'), null, true); 
			wp_enqueue_script('smooth-scroll');
            wp_register_script('smooth-scroll-settings', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll-settings.min.js',array('jquery'), null, true); 
			wp_enqueue_script('smooth-scroll-settings');
		}
	}


    //Remove Gutenberg Block Library CSS from loading on the frontend
    function smartwp_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
        } 
    add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

	// Register Site Navigations
	function postali_child_register_nav_menus() {
		register_nav_menus(
			array(
				'header-nav' => __( 'Header Navigation', 'postali' ),
				'footer-nav' => __( 'Footer Navigation', 'postali' ),
				'mobile-nav' => __( 'Mobile Navigation', 'postali' ),
			)
		);
	}
	add_action( 'init', 'postali_child_register_nav_menus' );

	// ACF Options Pages
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title'    => 'Instructions',
			'menu_title'    => 'Instructions',
			'menu_slug'     => 'theme-instructions',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-smiley', // Add this line and replace the second inverted commas with class of the icon you like
			'redirect'      => false
		));

		acf_add_options_page(array(
			'page_title'    => 'Customizations',
			'menu_title'    => 'Customizations',
			'menu_slug'     => 'customizations',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-admin-customizer', // Add this line and replace the second inverted commas with class of the icon you like
			'redirect'      => false
		));

		acf_add_options_page(array(
			'page_title'    => 'Awards',
			'menu_title'    => 'Awards',
			'menu_slug'     => 'awards',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-awards', // Add this line and replace the second inverted commas with class of the icon you like
			'redirect'      => false
		));

        acf_add_options_page(array(
			'page_title'    => 'Global Schema',
			'menu_title'    => 'Global Schema',
			'menu_slug'     => 'global_schema',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-media-code',
			'redirect'      => false
		));

	}

	// Save newly created fields to child theme
	add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
	function my_acf_json_save_point( $path ) {
		
		// update path
		$path = get_stylesheet_directory() . '/acf-json';
		
		// return
		return $path;
		
	}
	
	// Add ability to add SVG to Wordpress Media Library
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
	
	//add SVG to allowed file uploads
	function add_file_types_to_uploads($file_types){

		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );

		return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');


	// Widget Logic Conditionals
	function is_child($parent) {
		global $post;
			return $post->post_parent == $parent;
		}
		
		// Widget Logic Conditionals (ancestor) 
		function is_tree( $pid ) {
		global $post;
		
		if ( is_page($pid) )
		return true;
		
		$anc = get_post_ancestors( $post->ID );
		foreach ( $anc as $ancestor ) {
			if( is_page() && $ancestor == $pid ) {
				return true;
				}
		}
		return false;
	}
	
	// WP Backend Menu area taller
	add_action('admin_head', 'taller_menus');

	function taller_menus() {
	echo '<style>
		.posttypediv div.tabs-panel {
			max-height:500px !important;
		}
	</style>';
	}

	// Customize the logo on the wp-login.php page
	function my_login_logo() { ?>
		<style type="text/css">
			#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);
			height:45px;
			width:204px;
			background-size: 204px 45px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );

	// add custom post types to sitemap.php
	add_filter( 'getarchives_where' , 'ucc_getarchives_where_filter' , 10 , 2 );
	function ucc_getarchives_where_filter( $where , $r ) {
	$args = array(
	'public' => true ,
	'_builtin' => false
	);
	$output = 'names';
	$operator = 'and';

	$post_types = get_post_types( $args , $output , $operator );
	$post_types = array_merge( $post_types , array( 'post' ) );
	$post_types = "'" . implode( "' , '" , $post_types ) . "'";

	return str_replace( "post_type = 'post'" , "post_type IN ( $post_types )" , $where );
	}

	function add_categories_to_pages() {
		register_taxonomy_for_object_type( 'category', 'page' );
		}
	add_action( 'init', 'add_categories_to_pages' );

	function add_link_atts($atts) {
		$atts['tabindex'] = "0";
		return $atts;
	  }
	add_filter( 'nav_menu_link_attributes', 'add_link_atts');

    // Add Search Bar to Top Nav
	function mainmenu_navsearch($items, $args) {
		if ($args->theme_location == 'header-nav' || $args->theme_location == 'mobile-nav') {
			ob_start();
			?>

			<li class="menu-item menu-item-search search-holder">
				<form class="navbar-form-search" role="search" method="get" action="/">
					<div class="search-form-container hdn" id="search-input-container">
						<div class="search-input-group">
							<div class="form-group">
							<input type="text" name="s" placeholder="Search for..." id="search-input-5cab7fd94d469" value="" class="form-control">
							</div>
						</div>
					</div>
					<button type="submit" class="btn-search" id="search-button"><span class="icon-search-icon" aria-hidden="true"></span></button>
				</form>	
			</li>

			<?php
			$new_items = ob_get_clean();

			$items .= $new_items;
		}
		return $items;
	}
	add_filter('wp_nav_menu_items', 'mainmenu_navsearch', 10, 2);

    function retrieve_latest_gform_submissions() {
    $site_url = get_site_url();
    $search_criteria = [
        'status' => 'active'
    ];
    $form_ids = 2; //search all forms
    $sorting = [
        'key' => 'date_created',
        'direction' => 'DESC'
    ];
    $paging = [
        'offset' => 0,
        'page_size' => 5
    ];
    
    $submissions = GFAPI::get_entries($form_ids, null, $sorting, $paging);
    $start_date = date('Y-m-d H:i:s', strtotime('-5 day'));
    $end_date = date('Y-m-d H:i:s');
    $entry_in_last_5_days = false;
    
    foreach ($submissions as $submission) {
        if( $submission['date_created'] > $start_date  && $submission['date_created'] <= $end_date ) {
            $entry_in_last_5_days = true;
        } 
    }
    if( !$entry_in_last_5_days ) {
        wp_mail('webdev@postali.com', 'Submission Status', "No submissions in last 5 days on $site_url");
    }
}
add_action('check_form_entries', 'retrieve_latest_gform_submissions');

?>