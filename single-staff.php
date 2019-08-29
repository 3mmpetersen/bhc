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
?>

<header class="entry-header page-header">
	<div class="feat-image" style="background: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.15) 100%), url('/wp-content/uploads/2018/12/header-our-team-hoses.jpg') no-repeat;">
		<div class="container">
			<div class="col-sm-12">
				<h1 class="entry-title">Our Team</h1>
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

				<section class="team-members">
					<div class="row">
					<div class="col-md-4 mb-3">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="Team Image" style="width: 100%;">
					</div>
					<div class="col-md-6 mt-2 mb-2">
						<h4><?php the_title(); ?></h4>
						<p><em><?php the_field('title'); ?></em></p>
						<p><?php the_field('location'); ?></p>
						
						<?php get_template_part( 'loop-templates/content', 'page' ); ?>
						
						<p><?php if( get_field('tollfree') ): ?><strong>Toll Free</strong> <?php the_field('tollfree'); ?><br><?php endif; ?><?php if( get_field('number') ): ?><strong>Office</strong> <?php the_field('number'); ?><br><?php endif; ?><?php if( get_field('cell') ): ?><strong>Cell</strong> <?php the_field('cell'); ?><?php endif; ?></p>
						<a href="/our-team/" class="btn btn-primary mr-2 mb-3">See Other Team Members <i class="fas fa-chevron-circle-right ml-1"></i></a>
					</div>					
					
					</div>
				</section>
				
						
					
				
						
				

			</main><!-- #main -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
