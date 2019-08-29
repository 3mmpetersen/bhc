<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'fontawesome-styles', get_stylesheet_directory_uri() . '/src/sass/fontawesome/all.min.css', array(), $the_theme->get( 'Version' ) ); //Font Awesome 5 CSS
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800', array() ); //Google Fonts
    
    wp_enqueue_script( 'jquery');
// 		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
		wp_enqueue_script( 'fontawesome-scripts', get_stylesheet_directory_uri() . '/src/sass/fontawesome/all.min.js', array(), false); //Font Awesome 5 JS
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'add-scripts', get_stylesheet_directory_uri() . '/js/add-scripts.js', array(), $the_theme->get( 'Version' ), true );
    
    if ( is_front_page() )
    {
	    wp_enqueue_style( 'owlcarousel-styles', get_stylesheet_directory_uri() . '/src/owlcarousel/assets/owl.carousel.min.css', array(), $the_theme->get( 'Version' ) );
			wp_enqueue_style( 'owlcarousel-styles', get_stylesheet_directory_uri() . '/src/owlcarousel/assets/owl.theme.default.min.css', array(), $the_theme->get( 'Version' ) );
      wp_enqueue_script( 'owlcarousel-scripts', get_stylesheet_directory_uri() . '/src/owlcarousel/owl.carousel.min.js', array(), true);
      wp_enqueue_script( 'add-match-height', get_stylesheet_directory_uri() . '/js/jquery.matchHeight-min.js', array(), true);
      wp_enqueue_script( 'homepage-scripts', get_stylesheet_directory_uri() . '/js/add-homepage-scripts.js', array(), true);
    }
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/** Add Social Media Icons **/
function ct_bluestrap_social_array() {

	$social_sites = array(
		'facebook-f'    => 'bluestrap_facebook_profile',
		'twitter'       => 'bluestrap_twitter_profile',
		'youtube'       => 'bluestrap_youtube_profile',
		'instagram'     => 'bluestrap_instagram_profile',
		'pinterest'     => 'bluestrap_pinterest_profile',
		'vimeo-v'       => 'bluestrap_vimeo_profile',
		'google-plus'   => 'bluestrap_googleplus_profile',
		'linkedin'      => 'bluestrap_linkedin_profile',
		'yelp'    			=> 'bluestrap_yelp_profile',
		'tumblr'        => 'bluestrap_tumblr_profile',
		'flickr'        => 'bluestrap_flickr_profile',
		'dribbble'      => 'bluestrap_dribbble_profile',
		'rss'           => 'bluestrap_rss_profile',
		'reddit'        => 'bluestrap_reddit_profile',
		'soundcloud'    => 'bluestrap_soundcloud_profile',
		'spotify'       => 'bluestrap_spotify_profile',
		'vine'          => 'bluestrap_vine_profile',
		'yahoo'         => 'bluestrap_yahoo_profile',
		'behance'       => 'bluestrap_behance_profile',
		'codepen'       => 'bluestrap_codepen_profile',
		'delicious'     => 'bluestrap_delicious_profile',
		'stumbleupon'   => 'bluestrap_stumbleupon_profile',
		'deviantart'    => 'bluestrap_deviantart_profile',
		'digg'          => 'bluestrap_digg_profile',
		'github'        => 'bluestrap_github_profile',
		'hacker-news'   => 'bluestrap_hacker-news_profile',
		'steam'         => 'bluestrap_steam_profile',
		'vk'            => 'bluestrap_vk_profile',
		'weibo'         => 'bluestrap_weibo_profile',
		'tencent-weibo' => 'bluestrap_tencent_weibo_profile',
		'500px'         => 'bluestrap_500px_profile',
		'foursquare'    => 'bluestrap_foursquare_profile',
		'slack'         => 'bluestrap_slack_profile',
		'slideshare'    => 'bluestrap_slideshare_profile',
		'qq'            => 'bluestrap_qq_profile',
		'whatsapp'      => 'bluestrap_whatsapp_profile',
		'skype'         => 'bluestrap_skype_profile',
		'wechat'        => 'bluestrap_wechat_profile',
		'xing'          => 'bluestrap_xing_profile',
		'paypal'        => 'bluestrap_paypal_profile',
		'email-form'    => 'bluestrap_email_form_profile'
	);

	return apply_filters( 'ct_bluestrap_social_array_filter', $social_sites );
}


function my_add_customizer_sections( $wp_customize ) {

	$social_sites = ct_bluestrap_social_array();

	// set a priority used to order the social sites
	$priority = 5;

	// section
	$wp_customize->add_section( 'ct_bluestrap_social_media_icons', array(
		'title'       => __( 'Social Media Icons', 'sul-theme' ),
		'priority'    => 25,
		'description' => __( 'Add the URL for each of your social profiles.', 'sul-theme' )
	) );

	// create a setting and control for each social site
	foreach ( $social_sites as $social_site => $value ) {

		$label = ucfirst( $social_site );

		$wp_customize->add_setting( $social_site, array(
			'sanitize_callback' => 'esc_url_raw'
		) );
		// control
		$wp_customize->add_control( $social_site, array(
			'type'     => 'url',
			'label'    => $label,
			'section'  => 'ct_bluestrap_social_media_icons',
			'priority' => $priority
		) );
		// increment the priority for next site
		$priority = $priority + 5;
	}
}
add_action( 'customize_register', 'my_add_customizer_sections' );

function my_social_icons_output() {

	$social_sites = ct_bluestrap_social_array();

	foreach ( $social_sites as $social_site => $profile ) {

		if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
			$active_sites[ $social_site ] = $social_site;
		}
	}

	if ( ! empty( $active_sites ) ) {

		echo '<ul class="social-media-icons">';
		foreach ( $active_sites as $key => $active_site ) {
        	$class = 'fab fa-' . $active_site; ?>
		 	<li>
				<a class="<?php echo esc_attr( $active_site ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
					<i class="<?php echo esc_attr( $class ); ?>" title="<?php echo esc_attr( $active_site ); ?>"></i>
				</a>
			</li>
		<?php }
		echo "</ul>";
	}
}
	
/** Add Menus **/
register_nav_menus( array(
	'mobile-menu' => esc_html__( 'Mobile Menu' ),
	'secondary-menu' => esc_html__( 'Secondary Menu' ),
	'footer-menu' => esc_html__( 'Footer Menu' ),
	'news-events-menu' => esc_html__( 'News and Events Menu' )
  )
);

/*****************************************************************
Page Slug Body Class
*****************************************************************/
//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/*****************************************************************
Add Page Options
*****************************************************************/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Company Information',
		'menu_title'	=> 'Company Information',
		'menu_slug' 	=> 'company-information',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}