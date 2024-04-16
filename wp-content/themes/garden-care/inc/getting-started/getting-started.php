<?php
//about theme info
add_action( 'admin_menu', 'garden_care_gettingstarted' );
function garden_care_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'garden-care'), esc_html__('About Theme', 'garden-care'), 'edit_theme_options', 'garden_care_guide', 'garden_care_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function garden_care_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'garden_care_admin_theme_style');

//guidline for about theme
function garden_care_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'garden-care' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Garden Care WordPress Theme', 'garden-care' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'garden-care' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'garden-care' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'garden-care' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'garden-care' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'garden-care' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'garden-care' ); ?> <a href="<?php echo esc_url( GARDEN_CARE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'garden-care' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Garden Care WordPress Theme comes with a contemporary design suitable for gardeners, landscaping business owners and landscape agencies, and lawn care services who want to take their business to new heights. Without complicating things, this beautiful and professional theme allows you to create your own webspace without having any coding skills or development experience. Being a purpose-oriented theme, it bears a design that is easy to customize by making use of one-click customization options and this makes the theme more user-friendly. Designed using the needs of modern landscaping and gardening businesses in mind, its layout has all the things that you want your gardening website to have. It has an impressive banner along with Call To Action Button (CTA) making the overall website more interactive. Your audience will be blown away by the stunning CSS animation effects included in the theme. You get SEO-friendly and highly optimized codes that take care of your SERP ranks and make your webpages load at a fast speed. Moreover, this Garden WordPress Theme is retina-ready and translation ready making it easy for any of your visitors to understand your content by translating it into their language. You can also include info about your team and show the client testimonials in the testimonial section.', 'garden-care')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Garden Care Theme', 'garden-care' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'garden-care'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( GARDEN_CARE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'garden-care'); ?></a>
			<a href="<?php echo esc_url( GARDEN_CARE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'garden-care'); ?></a>
			<a href="<?php echo esc_url( GARDEN_CARE_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'garden-care'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/garden-care.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'garden-care'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'garden-care'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'garden-care'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>