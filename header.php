<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WJF98QL');</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115028008-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-115028008-1');
	</script>
	<!-- END Global site tag (gtag.js) - Google Analytics -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJF98QL"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<div class="hfeed site" id="page">

<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar two-nav-menu" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md clear-header">

			<header class="header-wrapper container">
				<a href="/">
					<div class="brand-wrapper">
						<div class="logo">
							<img src="/wp-content/themes/understrap-child/images/bulldog-hose-logo-color.jpg" alt="BullDog Hose Company">
						</div>
					</div>
				</a>
				<div class="nav-wrapper">
					<div class="two-nav-group">
						<div class="secondary-wrapper">
							<!-- Secondary Menu -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'secondary-menu',
									'container_class' => '',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'secondary-menu',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
							<?php my_social_icons_output(); ?>
							<div class="google-translate">
								<div id="google_translate_element"></div><script type="text/javascript">
								function googleTranslateElementInit() {
								  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
								}
								</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
							</div>
						</div>
						<div class="main-wrapper">
							<!-- Main Menu -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						</div>
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<i class="fas fa-bars"></i><i class="fas fa-times"></i>
				</button>
			</header>

		</nav><!-- .site-navigation -->
		
		<div class="mobile-group" id="navbarNavDropdown">
			<div class="mobile-wrapper">
				<div class="main-nav">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'mobile-menu',
							'container_class' => '',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'mobile-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div>
				<div class="sec-nav">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'secondary-menu',
							'container_class' => '',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'secondary-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
					<?php my_social_icons_output(); ?>
				</div>
			</div>
		</div>

	</div><!-- .wrapper-navbar end -->