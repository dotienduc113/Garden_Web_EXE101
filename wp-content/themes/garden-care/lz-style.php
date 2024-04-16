<?php 

	$garden_care_custom_style = '';

	// Logo Size
	$garden_care_logo_top_padding = get_theme_mod('garden_care_logo_top_padding');
	$garden_care_logo_bottom_padding = get_theme_mod('garden_care_logo_bottom_padding');
	$garden_care_logo_left_padding = get_theme_mod('garden_care_logo_left_padding');
	$garden_care_logo_right_padding = get_theme_mod('garden_care_logo_right_padding');

	if( $garden_care_logo_top_padding != '' || $garden_care_logo_bottom_padding != '' || $garden_care_logo_left_padding != '' || $garden_care_logo_right_padding != ''){
		$garden_care_custom_style .=' .logo {';
			$garden_care_custom_style .=' padding-top: '.esc_attr($garden_care_logo_top_padding).'px ;
			padding-bottom: '.esc_attr($garden_care_logo_bottom_padding).'px ;
			padding-left: '.esc_attr($garden_care_logo_left_padding).'px ;
			padding-right: '.esc_attr($garden_care_logo_right_padding).'px ;';
		$garden_care_custom_style .=' }';
	}

	// Service Section padding
	$garden_care_service_section_padding = get_theme_mod('garden_care_service_section_padding');

	if( $garden_care_service_section_padding != '' ){
		$garden_care_custom_style .=' section#services-section {';
			$garden_care_custom_style .=' padding-top: '.esc_attr($garden_care_service_section_padding).'px ;
			padding-bottom: '.esc_attr($garden_care_service_section_padding).'px ;';
		$garden_care_custom_style .=' }';
	}

	// Site Title Font Size
	$garden_care_site_title_font_size = get_theme_mod('garden_care_site_title_font_size');
	if( $garden_care_site_title_font_size != ''){
		$garden_care_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$garden_care_custom_style .=' font-size: '.esc_attr($garden_care_site_title_font_size).'px;';
		$garden_care_custom_style .=' }';
	}

	// Site Tagline Font Size
	$garden_care_site_tagline_font_size = get_theme_mod('garden_care_site_tagline_font_size');
	if( $garden_care_site_tagline_font_size != ''){
		$garden_care_custom_style .=' .logo p.site-description {';
			$garden_care_custom_style .=' font-size: '.esc_attr($garden_care_site_tagline_font_size).'px;';
		$garden_care_custom_style .=' }';
	}

	// Copyright padding
	$garden_care_copyright_padding = get_theme_mod('garden_care_copyright_padding');

	if( $garden_care_copyright_padding != ''){
		$garden_care_custom_style .=' .site-info {';
			$garden_care_custom_style .=' padding-top: '.esc_attr($garden_care_copyright_padding).'px; padding-bottom: '.esc_attr($garden_care_copyright_padding).'px;';
		$garden_care_custom_style .=' }';
	}

	$garden_care_copyright_color = get_theme_mod('garden_care_copyright_color');
	if ( $garden_care_copyright_color != '') {
		$garden_care_custom_style .=' .site-footer .site-info a {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_copyright_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_copyrightbg_color = get_theme_mod('garden_care_copyrightbg_color');
	if ( $garden_care_copyrightbg_color != '') {
		$garden_care_custom_style .=' .copyright {';
			$garden_care_custom_style .=' background-color:'.esc_attr($garden_care_copyrightbg_color).';';
		$garden_care_custom_style .=' }';
	}

	// Header Image
	$header_image_url = garden_care_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$garden_care_custom_style .=' #inner-pages-header {';
			$garden_care_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$garden_care_custom_style .=' }';
		$garden_care_custom_style .=' .header-overlay {';
			$garden_care_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$garden_care_custom_style .=' }';
	} else {
		$garden_care_custom_style .=' #inner-pages-header {';
			$garden_care_custom_style .=' background: linear-gradient(0deg,#6a951f,#4c7815 80%) no-repeat; ';
		$garden_care_custom_style .=' }';
	}

	$garden_care_slider_hide_show = get_theme_mod('garden_care_slider_hide_show',false);
	if( $garden_care_slider_hide_show == true){
		$garden_care_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$garden_care_custom_style .=' display:none;';
		$garden_care_custom_style .=' }';
	} else {
		$garden_care_custom_style .=' #services-section {';
			$garden_care_custom_style .=' padding-top:50px;';
		$garden_care_custom_style .=' }';
	}

	//Topbar color
	$garden_care_toptext_color = get_theme_mod('garden_care_toptext_color');
	if ( $garden_care_toptext_color != '') {
		$garden_care_custom_style .='.top-header p, .mail span, .location span {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_toptext_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_topicon_color = get_theme_mod('garden_care_topicon_color');
	if ( $garden_care_topicon_color != '') {
		$garden_care_custom_style .=' .social-icons i, .mail i, .location i {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_topicon_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_topbg_color = get_theme_mod('garden_care_topbg_color');
	if ( $garden_care_topbg_color != '') {
		$garden_care_custom_style .=' .top-header {';
			$garden_care_custom_style .=' background-color:'.esc_attr($garden_care_topbg_color).';';
		$garden_care_custom_style .=' }';
	}

	//Header color
	$garden_care_headertext_color = get_theme_mod('garden_care_headertext_color');
	if ( $garden_care_headertext_color != '') {
		$garden_care_custom_style .=' .nav-menu ul li a, .bottom-header .phone p {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_headertext_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_headericon_color = get_theme_mod('garden_care_headericon_color');
	if ( $garden_care_headericon_color != '') {
		$garden_care_custom_style .=' .bottom-header .phone i, .search-box i {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_headericon_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_headerbtn_color = get_theme_mod('garden_care_headerbtn_color');
	if ( $garden_care_headerbtn_color != '') {
		$garden_care_custom_style .=' span.getstarted-btn a {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_headerbtn_color).';';
		$garden_care_custom_style .=' }';
	}

	//Slider color
	$garden_care_slidertitle_color = get_theme_mod('garden_care_slidertitle_color');
	if ( $garden_care_slidertitle_color != '') {
		$garden_care_custom_style .=' #slider h2 {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_slidertitle_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_slidertext_color = get_theme_mod('garden_care_slidertext_color');
	if ( $garden_care_slidertext_color != '') {
		$garden_care_custom_style .=' #slider p {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_slidertext_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_sliderbtn_color = get_theme_mod('garden_care_sliderbtn_color');
	if ( $garden_care_sliderbtn_color != '') {
		$garden_care_custom_style .=' #slider a.read-btn {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_sliderbtn_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_sliderbtnhvrtxt_color = get_theme_mod('garden_care_sliderbtnhvrtxt_color');
	$garden_care_sliderbtnhvrbg_color = get_theme_mod('garden_care_sliderbtnhvrbg_color');
	if ( $garden_care_sliderbtnhvrtxt_color != '') {
		$garden_care_custom_style .=' #slider a.read-btn:hover {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_sliderbtnhvrtxt_color).'; background-color:'.esc_attr($garden_care_sliderbtnhvrbg_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_slidernpbtn_color = get_theme_mod('garden_care_slidernpbtn_color');
	if ( $garden_care_slidernpbtn_color != '') {
		$garden_care_custom_style .=' #slider .carousel-control-prev-icon i, #slider .carousel-control-next-icon i {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_slidernpbtn_color).';';
		$garden_care_custom_style .=' }';
	}

	//service color
	$garden_care_servicestext_color = get_theme_mod('garden_care_servicestext_color');
	if ( $garden_care_servicestext_color != '') {
		$garden_care_custom_style .=' #services-section p.section-text {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_servicestext_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_servicestitle_color = get_theme_mod('garden_care_servicestitle_color');
	if ( $garden_care_servicestitle_color != '') {
		$garden_care_custom_style .=' #services-section h3 {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_servicestitle_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_servicesboxtitle_color = get_theme_mod('garden_care_servicesboxtitle_color');
	if ( $garden_care_servicesboxtitle_color != '') {
		$garden_care_custom_style .=' #services-section .service-box h4 {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_servicesboxtitle_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_servicesboxtext_color = get_theme_mod('garden_care_servicesboxtext_color');
	if ( $garden_care_servicesboxtext_color != '') {
		$garden_care_custom_style .=' #services-section .service-box p {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_servicesboxtext_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_servicesbtn_color = get_theme_mod('garden_care_servicesbtn_color');
	$garden_care_servicesbtnbg_color = get_theme_mod('garden_care_servicesbtnbg_color');

	if ( $garden_care_servicesbtn_color != '') {
		$garden_care_custom_style .=' #services-section .service-box .read-btn a {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_servicesbtn_color).'; background-color:'.esc_attr($garden_care_servicesbtnbg_color).';';
		$garden_care_custom_style .=' }';
	}

	$garden_care_servicesbtnhvr_color = get_theme_mod('garden_care_servicesbtnhvr_color');
	$garden_care_servicesbtnhvrbg_color = get_theme_mod('garden_care_servicesbtnhvrbg_color');

	if ( $garden_care_servicesbtnhvr_color != '') {
		$garden_care_custom_style .=' #services-section .service-box .read-btn a:hover {';
			$garden_care_custom_style .=' color:'.esc_attr($garden_care_servicesbtnhvr_color).'; background-color:'.esc_attr($garden_care_servicesbtnhvrbg_color).';';
		$garden_care_custom_style .=' }';
	}