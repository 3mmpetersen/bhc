<?php
/**
 * Page Name: Careers Template
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
			
			<main class="site-main col-md-5" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'page' ); ?>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				<?php endwhile; // end of the loop. ?>
				
				
				<?php 
				$args = array(
				  'post_type' => 'job_postings', 
				  'posts_per_page' => -1
				  );
				$query = new WP_query( $args );
			
				if($query->have_posts()) : ?> 
					
					<section class="job-postings mt-5">
						<h2>Current Job Openings</h2>
						<?php while($query->have_posts()) : $query->the_post(); ?>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php endwhile; ?>
					</section>
				<?php endif; wp_reset_postdata(); ?>

			</main><!-- #main -->
			
			<div class="form col-md-5">
				<h2>Apply Below</h2>
<!--
				<h2>Don't See what you're looking for?</h2>
				<p>Apply for a position below.</p>
-->
				<?php echo do_shortcode("[contact-form-7 id='642' title='Careers']"); ?>
			</div>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
