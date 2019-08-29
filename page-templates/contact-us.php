<?php
/**
 * Template Name: Contact Us Template
 *
 * This template can be used to override the default template
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>

<header class="entry-header page-header">
	<div class="feat-image" style="background: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.15) 100%), url('<?php echo esc_url($featured_img_url); ?>') no-repeat;">
		<div class="container">
			<div class="col-sm-12">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</header><!-- .entry-header -->

<div class="wrapper secondary-page contact-us-page" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div id="ad-sidebar" class="col-md-2 vert">
				<?php get_template_part( 'loop-templates/content', 'ads-vert' ); ?>
			</div>
			
			<main class="site-main col-sm-10" id="main">
				
				<div class="row">
					<div class="col-md-5">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.3889031188173!2d-78.74033308474556!3d35.51938598023247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac867d19faf66b%3A0x7af8b13b468c6ff5!2s141+Junny+Rd%2C+Angier%2C+NC+27501!5e0!3m2!1sen!2sus!4v1544650025611" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-3">
						<div class="location">
							<h3><strong>BullDog Hose <br>Company</strong></h3>
							<p><a href="<?php the_field('address_link', 'option'); ?>" target="_blank" ><?php the_field('address_line_1', 'option'); ?><br><?php the_field('address_line_2', 'option'); ?></a></p>
							<p><a href="mailto:<?php the_field('company_email', 'option'); ?>"><?php the_field('company_email', 'option'); ?></a></p>
							<p>
								<a href="tel:+1<?php the_field('main_phone_link', 'option'); ?>"><strong>P</strong>&nbsp;&nbsp;&nbsp;<?php the_field('main_phone_number', 'option'); ?></a><br>
								<a href="tel:+1<?php the_field('toll_free_phone_link', 'option'); ?>"><strong>TF</strong>&nbsp;<?php the_field('toll_free_phone_number', 'option'); ?></a>
							</p>
							<div class="p-2 bd-highlight socials"><?php my_social_icons_output(); ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'loop-templates/content', 'page' ); ?>
		
							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
		
						<?php endwhile; // end of the loop. ?>
					</div>
				</div>

			</main><!-- #main -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
