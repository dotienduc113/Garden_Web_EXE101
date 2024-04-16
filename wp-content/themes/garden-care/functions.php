<?php
/**
 * Garden Care functions and definitions
 *
 * @subpackage Garden Care
 * @since 1.0
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Garden_Care_Loader.php' );

$garden_care_loader = new \WPTRT\Autoload\Garden_Care_Loader();

$garden_care_loader->garden_care_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$garden_care_loader->garden_care_register();

function garden_care_setup() {
	
	load_theme_textdomain( 'garden-care', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
	    'default-color'          => '',
	    'default-image'          => '',
	    'default-repeat'         => '',
	    'default-position-x'     => '',
	    'default-attachment'     => '',
	    'wp-head-callback'       => '_custom_background_cb',
	    'admin-head-callback'    => '',
	    'admin-preview-callback' => ''
	));

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'garden-care' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', garden_care_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'garden_care_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'garden_care_setup' );

// Notice after Theme Activation
function garden_care_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
		echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'garden-care' ) .'</h3>';
		echo '<p>'. esc_html__( 'Thank you for choosing Garden Care theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'garden-care' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=garden_care_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'garden-care' ) .'</a></p>';
	echo '</div>';
}

function garden_care_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'garden-care' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'garden-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'garden-care' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'garden-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'garden-care' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'garden-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'garden-care' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'garden-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'garden-care' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'garden-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'garden-care' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'garden-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'garden-care' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'garden-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'garden_care_widgets_init' );

function garden_care_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Josefin Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function garden_care_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'garden-care-fonts', garden_care_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', esc_url( get_template_directory_uri() ).'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'garden-care-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'garden-care-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'garden-care-style' ), '1.0' );
		wp_style_add_data( 'garden-care-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'garden-care-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'garden-care-style' ), '1.0' );
	wp_style_add_data( 'garden-care-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-css', esc_url( get_template_directory_uri() ).'/assets/css/fontawesome-all.css' );

	require get_parent_theme_file_path( '/lz-style.php' );
	wp_add_inline_style( 'garden-care-basic-style',$garden_care_custom_style );

	wp_enqueue_script( 'garden-care-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-js', esc_url( get_template_directory_uri() ). '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url( get_template_directory_uri() ). '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'garden_care_scripts' );

define('GARDEN_CARE_LIVE_DEMO',__('https://www.luzukdemo.com/demo/garden-care/','garden-care'));
define('GARDEN_CARE_PRO_DOCS',__('https://www.luzukdemo.com/docs/garden-care/documentation/','garden-care'));
define('GARDEN_CARE_BUY_NOW',__('https://www.luzuk.com/product/garden-wordpress-theme/','garden-care'));
define('GARDEN_CARE_SUPPORT',__('https://wordpress.org/support/theme/garden-care/','garden-care'));
define('GARDEN_CARE_CREDIT',__('https://www.luzuk.com/themes/free-garden-wordpress-theme/','garden-care'));

if ( ! function_exists( 'garden_care_credit' ) ) {
	function garden_care_credit(){
		echo "<a href=".esc_url(GARDEN_CARE_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('garden_care_footer_copy_credit',__('Garden Care WordPress Theme By Luzuk','garden-care')))."</a>";
	}
}

function garden_care_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'garden_care_front_page_template' );

function garden_care_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function garden_care_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function garden_care_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function garden_care_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function garden_care_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Excerpt Limit Begin */
function garden_care_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, (int)($word_limit) + 1);
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'garden_care_loop_columns');
	if (!function_exists('garden_care_loop_columns')) {
		function garden_care_loop_columns() {
	return 3; // 3 products per row
	}
}

/* Breadcrumb Begin */
function garden_care_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			echo "&nbsp;&#187;&nbsp;";
			the_category(', ');
			if (is_single()) {
				echo "&nbsp;&#187;&nbsp;";
				echo "<span> ";
					the_title();
				echo "</span>";
			}
		} elseif (is_page()) {
			echo "&nbsp;&#187;&nbsp;";
			echo "<span>";
				the_title();
			echo "</span> ";
		}
	}
}

function garden_care_banner_image( $image_url ){
    global $post;

    if( is_singular() ){
        $image_url      = get_the_post_thumbnail_url( $post->ID, 'full' );
    }
    return $image_url;
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );