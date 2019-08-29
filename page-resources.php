<?php
/**
 * Page Name: Our Team Template
 *
 * This template can be used to override the default template
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
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

<div class="wrapper secondary-page product-overview" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div id="ad-sidebar" class="vert col-md-2 col">
				<?php get_template_part( 'loop-templates/content', 'ads-vert' ); ?>
			</div>
			
			<main class="site-main col-md-10" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'page' ); ?>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				<?php endwhile; // end of the loop. ?>
				
				<div class="row mt-5">
					<div class="col-md-6 mb-5">
						<?php get_template_part( 'part-templates/content', 'videos' ); ?>						
						<?php get_template_part( 'part-templates/content', 'photos' ); ?>
					</div>
					
					<div class="col-md-6 mb-5">
						<h2>Submit your question!</h2>
						<?php echo do_shortcode("[contact-form-7 id='593' title='Question Inquiry']"); ?>
						<br><br><br><br>
						<?php get_template_part( 'part-templates/content', 'literature' ); ?>
					</div>

					<div class="col-md-6 mb-5">
						<?php get_template_part( 'part-templates/content', 'faqs' ); ?>
					</div>
					
					<div class="col-md-6 mb-5">

					</div>
				</div>
				
				<div class="row mt-5">
					
				</div>
				
						
					
				
						
				

			</main><!-- #main -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
