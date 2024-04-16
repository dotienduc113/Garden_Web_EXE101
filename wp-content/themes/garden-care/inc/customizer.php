<?php
/**
 * Garden Care: Customizer
 *
 * @subpackage Garden Care
 * @since 1.0
 */

use WPTRT\Customize\Section\Garden_Care_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Garden_Care_Button::class );

	$manager->add_section(
		new Garden_Care_Button( $manager, 'garden_care_pro', [
			'title'      => __( 'Garden Care Pro', 'garden-care' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'garden-care' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/products/garden-wordpress-theme/', 'garden-care')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'garden-care-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'garden-care-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function garden_care_customize_register( $wp_customize ) {

	$wp_customize->add_setting('garden_care_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('garden_care_logo_padding',array(
		'label' => __('Logo Padding','garden-care'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('garden_care_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
	));
	$wp_customize->add_control('garden_care_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','garden-care'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('garden_care_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
	));
	$wp_customize->add_control('garden_care_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','garden-care'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('garden_care_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
	));
	$wp_customize->add_control('garden_care_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','garden-care'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('garden_care_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
	));
	$wp_customize->add_control('garden_care_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','garden-care'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('garden_care_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'garden_care_sanitize_checkbox'
	));
	$wp_customize->add_control('garden_care_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','garden-care'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('garden_care_show_site_title_color',array(
		'default' => '#0e3b00',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_show_site_title_color',array(
		'type' => 'color',
		'label' => __('Site Title Color','garden-care'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('garden_care_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
	));
	$wp_customize->add_control('garden_care_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','garden-care'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('garden_care_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'garden_care_sanitize_checkbox'
	));
	$wp_customize->add_control('garden_care_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','garden-care'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('garden_care_show_site_tagline_color',array(
		'default' => '#0e3b00',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_show_site_tagline_color',array(
		'type' => 'color',
		'label' => __('Site Tagline Color','garden-care'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('garden_care_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
	));
	$wp_customize->add_control('garden_care_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','garden-care'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'garden_care_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'garden-care' ),
		'description' => __( 'Description of what this panel does.', 'garden-care' ),
	) );

	$wp_customize->add_section( 'garden_care_theme_options_section', array(
    	'title'      => __( 'General Settings', 'garden-care' ),
		'priority'   => 30,
		'panel' => 'garden_care_panel_id'
	) );

	$wp_customize->add_setting('garden_care_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'garden_care_sanitize_choices'
	));
	$wp_customize->add_control('garden_care_theme_options',array(
		'type' => 'radio',
		'label' => __('Do you want this section','garden-care'),
		'section' => 'garden_care_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','garden-care'),
		   'Right Sidebar' => __('Right Sidebar','garden-care'),
		   'One Column' => __('One Column','garden-care'),
		   'Three Columns' => __('Three Columns','garden-care'),
		   'Four Columns' => __('Four Columns','garden-care'),
		   'Grid Layout' => __('Grid Layout','garden-care')
		),
	));

	//Top Header
	$wp_customize->add_section( 'garden_care_top_header_section' , array(
    	'title'    => __( 'Top Header', 'garden-care' ),
		'priority' => null,
		'panel' => 'garden_care_panel_id'
	) );

	$wp_customize->add_setting('garden_care_hide_show_topbar',array(
    	'default' => false,
    	'sanitize_callback'	=> 'garden_care_sanitize_checkbox'
	));
	$wp_customize->add_control('garden_care_hide_show_topbar',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Topbar','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_topheader_text',array(
   	'type' => 'text',
   	'label' => __('Add Text','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_mail',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('garden_care_topheader_mail',array(
   	'type' => 'text',
   	'label' => __('Add Email Address','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_location',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_topheader_location',array(
   	'type' => 'text',
   	'label' => __('Add Location','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('garden_care_topheader_facebook_url',array(
   	'type' => 'url',
   	'label' => __('Add Facebook URL','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('garden_care_topheader_twitter_url',array(
   	'type' => 'url',
   	'label' => __('Add Twitter URL','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_youtube_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('garden_care_topheader_youtube_url',array(
   	'type' => 'url',
   	'label' => __('Add Youtube URL','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('garden_care_topheader_instagram_url',array(
   	'type' => 'url',
   	'label' => __('Add Instagram URL','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_pinterest_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('garden_care_topheader_pinterest_url',array(
   	'type' => 'url',
   	'label' => __('Add Pinterest URL','garden-care'),
   	'section' => 'garden_care_top_header_section',
	));

	$wp_customize->add_setting( 'garden_care_toptext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_toptext_color', array(
		'label' => 'Text Color',
		'section' => 'garden_care_top_header_section',
	)));

	$wp_customize->add_setting( 'garden_care_topicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_topicon_color', array(
		'label' => 'Icons Color',
		'section' => 'garden_care_top_header_section',
	)));

	$wp_customize->add_setting( 'garden_care_topbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_topbg_color', array(
		'label' => 'Background Color',
		'section' => 'garden_care_top_header_section',
	)));

	//Bottom Header
	$wp_customize->add_section( 'garden_care_header_section' , array(
    	'title'    => __( 'Bottom Header', 'garden-care' ),
		'priority' => null,
		'panel' => 'garden_care_panel_id'
	) );

	$wp_customize->add_setting('garden_care_topheader_phone_no',array(
    	'default' => '',
    	'sanitize_callback' => 'garden_care_sanitize_phone_number'
	));
	$wp_customize->add_control('garden_care_topheader_phone_no',array(
   	'type' => 'text',
   	'label' => __('Add Phone Number','garden-care'),
   	'section' => 'garden_care_header_section',
	));

	$wp_customize->add_setting('garden_care_topheader_timing',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_topheader_timing',array(
   	'type' => 'text',
   	'label' => __('Add Timing','garden-care'),
   	'section' => 'garden_care_header_section',
	));

	$wp_customize->add_setting('garden_care_getstarted_btn_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_getstarted_btn_text',array(
   	'type' => 'text',
   	'label' => __('Add Get Started Button Text','garden-care'),
   	'section' => 'garden_care_header_section',
	));

	$wp_customize->add_setting('garden_care_getstarted_btn_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('garden_care_getstarted_btn_url',array(
   	'type' => 'url',
   	'label' => __('Add Get Started Button URL','garden-care'),
   	'section' => 'garden_care_header_section',
	));

	$wp_customize->add_setting( 'garden_care_headertext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_headertext_color', array(
		'label' => 'Text Color',
		'section' => 'garden_care_header_section',
	)));

	$wp_customize->add_setting( 'garden_care_headericon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_headericon_color', array(
		'label' => 'Icons Color',
		'section' => 'garden_care_header_section',
	)));

	$wp_customize->add_setting( 'garden_care_headerbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_headerbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'garden_care_header_section',
	)));

	//home page slider
	$wp_customize->add_section( 'garden_care_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'garden-care' ),
		'priority' => null,
		'panel' => 'garden_care_panel_id'
	) );

	$wp_customize->add_setting('garden_care_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'garden_care_sanitize_checkbox'
	));
	$wp_customize->add_control('garden_care_slider_hide_show',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Slider','garden-care'),
   	'section' => 'garden_care_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'garden_care_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'garden_care_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'garden_care_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'garden-care' ),
			'description' => __('Image Size (300px x 350px)', 'garden-care' ),
			'section' => 'garden_care_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	$wp_customize->add_setting('garden_care_slider_excerpt_length',array(
		'default' => '15',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
	));
	$wp_customize->add_control('garden_care_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Slider Excerpt Length','garden-care'),
		'section' => 'garden_care_slider_section',
	));

	$wp_customize->add_setting( 'garden_care_slidertitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_slidertitle_color', array(
		'label' => 'Title Color',
		'section' => 'garden_care_slider_section',
	)));

	$wp_customize->add_setting( 'garden_care_slidertext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_slidertext_color', array(
		'label' => 'Text Color',
		'section' => 'garden_care_slider_section',
	)));

	$wp_customize->add_setting( 'garden_care_sliderbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_sliderbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'garden_care_slider_section',
	)));

	$wp_customize->add_setting( 'garden_care_sliderbtnhvrtxt_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_sliderbtnhvrtxt_color', array(
		'label' => 'Button Hover Text Color',
		'section' => 'garden_care_slider_section',
	)));

	$wp_customize->add_setting( 'garden_care_sliderbtnhvrbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_sliderbtnhvrbg_color', array(
		'label' => 'Button Hover Bg Color',
		'section' => 'garden_care_slider_section',
	)));

	$wp_customize->add_setting( 'garden_care_slidernpbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_slidernpbtn_color', array(
		'label' => 'Next/Pre Button Icon Color',
		'section' => 'garden_care_slider_section',
	)));

	//Services Section
	$wp_customize->add_section('garden_care_services_section',array(
		'title'	=> __('Services Section','garden-care'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','garden-care'),
		'panel' => 'garden_care_panel_id',
	));

	$wp_customize->add_setting('garden_care_services_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_services_text',array(
   	'type' => 'text',
   	'label' => __('Add Section Text','garden-care'),
   	'section' => 'garden_care_services_section',
	));

	$wp_customize->add_setting( 'garden_care_servicestext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicestext_color', array(
		'label' => 'Color',
		'section' => 'garden_care_services_section',
	)));

	$wp_customize->add_setting('garden_care_services_section_title',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('garden_care_services_section_title',array(
   	'type' => 'text',
   	'label' => __('Add Section Title','garden-care'),
   	'section' => 'garden_care_services_section',
	));

	$wp_customize->add_setting( 'garden_care_servicestitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicestitle_color', array(
		'label' => 'Color',
		'section' => 'garden_care_services_section',
	)));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('garden_care_service_category',array(
		'default' => 'select',
		'sanitize_callback' => 'garden_care_sanitize_choices',
	));
	$wp_customize->add_control('garden_care_service_category',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','garden-care'),
		'section' => 'garden_care_services_section',
	));

	$wp_customize->add_setting('garden_care_service_section_padding',array(
      'default' => '',
      'sanitize_callback' => 'garden_care_sanitize_float'
   ));
   $wp_customize->add_control('garden_care_service_section_padding',array(
      'type' => 'number',
      'label' => __('Section Top Bottom Padding','garden-care'),
      'section' => 'garden_care_services_section',
   ));

   $wp_customize->add_setting( 'garden_care_servicesboxtitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicesboxtitle_color', array(
		'label' => 'Title Color',
		'section' => 'garden_care_services_section',
	)));

	$wp_customize->add_setting( 'garden_care_servicesboxtext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicesboxtext_color', array(
		'label' => 'Text Color',
		'section' => 'garden_care_services_section',
	)));

	$wp_customize->add_setting( 'garden_care_servicesbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicesbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'garden_care_services_section',
	)));

	$wp_customize->add_setting( 'garden_care_servicesbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicesbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'garden_care_services_section',
	)));

	$wp_customize->add_setting( 'garden_care_servicesbtnhvr_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicesbtnhvr_color', array(
		'label' => 'Button Hover Text Color',
		'section' => 'garden_care_services_section',
	)));

	$wp_customize->add_setting( 'garden_care_servicesbtnhvrbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_servicesbtnhvrbg_color', array(
		'label' => 'Button Hover Bg Color',
		'section' => 'garden_care_services_section',
	)));

	//Footer
   $wp_customize->add_section( 'garden_care_footer', array(
    	'title'  => __( 'Footer Settings', 'garden-care' ),
		'priority' => null,
		'panel' => 'garden_care_panel_id'
	) );

	$wp_customize->add_setting('garden_care_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'garden_care_sanitize_checkbox'
	));
	$wp_customize->add_control('garden_care_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','garden-care'),
   	'section' => 'garden_care_footer'
	));

   $wp_customize->add_setting('garden_care_footer_copy',array(
		'default' => 'Garden Care WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('garden_care_footer_copy',array(
		'label'	=> __('Copyright Text','garden-care'),
		'section' => 'garden_care_footer',
		'setting' => 'garden_care_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('garden_care_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'garden_care_sanitize_float'
 	));
 	$wp_customize->add_control('garden_care_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','garden-care'),
		'section' => 'garden_care_footer',
	));

	$wp_customize->add_setting( 'garden_care_copyright_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_copyright_color', array(
		'label' => 'Text Color',
		'section' => 'garden_care_footer',
	)));

	$wp_customize->add_setting( 'garden_care_copyrightbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_care_copyrightbg_color', array(
		'label' => 'Background Color',
		'section' => 'garden_care_footer',
	)));

	$wp_customize->register_section_type( Garden_Care_Button::class );

	$wp_customize->add_section(
		new Garden_Care_Button( $wp_customize, 'garden_care_pro_under_panel', [
			'title'      => __( 'Garden Care Pro', 'garden-care' ),
			'priority'    => null,
			'button_text' => __( 'Go Pro', 'garden-care' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/products/garden-wordpress-theme/', 'garden-care'),
			'panel' => 'garden_care_panel_id'
		] )
	);

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'garden_care_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'garden_care_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'garden_care_customize_register' );

function garden_care_customize_partial_blogname() {
	bloginfo( 'name' );
}

function garden_care_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function garden_care_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function garden_care_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}