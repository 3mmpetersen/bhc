<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="footer-wrapper">
						<div class="footer-branding">
							<a href="/">
								<img src="/wp-content/themes/understrap-child/images/bulldog-hose-stacked-logo.png" align="BullDog Hose Company">
								<p class="tagline" style="color: white; font-weight: 900; font-style: italic; margin-top: 20px; text-align: center;">American Made Tough.</p>
							</a>
						</div>
						<div class="contact-info">
							<ul>
								<li class="nav-col parent-link"><a href="/contact-us/" class="null-link">Contact Us</a>
									<ul>
										<li class="mb-3"><a class="ftr-location" href="<?php the_field('address_link', 'option'); ?>" target="_blank" ><?php the_field('address_line_1', 'option'); ?> <br><?php the_field('address_line_2', 'option'); ?></a></li>
										<li class="mb-3"><a class="ftr-email" href="mailto:<?php the_field('company_email', 'option'); ?>"><?php the_field('company_email', 'option'); ?></a></li>
										<li class="mb-3">
											<a class="ftr-main-phone" href="tel:+1<?php the_field('main_phone_link', 'option'); ?>"><strong>P</strong>&nbsp;&nbsp;&nbsp;<?php the_field('main_phone_number', 'option'); ?></a><br>
											<a class="ftr-toll-free" href="tel:+1<?php the_field('toll_free_phone_link', 'option'); ?>"><strong>TF</strong>&nbsp;<?php the_field('toll_free_phone_number', 'option'); ?></a></a>
										</li>
									</ul>
								</li>
								
							</ul>
							<?php my_social_icons_output(); ?>
						</div>
						<div class="footer-nav">
							
							<!-- Footer Menu -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container_class' => '',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'footer-menu',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						</div>
					</div>
					
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	
	<div class="site-info">
		<div class="container">
			<div class="col">
				<p>&copy;<?php echo date("Y"); ?> BullDog Hose Company<sup>&trade;</sup>, a proud product of <a class="ftr-puck" href="https://puck.com/" target="_blank"><img src="/wp-content/themes/understrap-child/images/puck-enterprises-logo.png" alt="Puck Enterprise" class="info-logo"></a>. All Rights Reserved. | branding & website development by <a class="ftr-blue" href="https://bluespacecreative.com/" target="_blank"><strong>blue</strong>space creative, inc.</a></p>							
			</div>
		</div>
	</div><!-- .site-info -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- Hotjar Tracking Code for http://bulldoghose.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:875705,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</body>

</html>

