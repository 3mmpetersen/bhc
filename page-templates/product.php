<?php
/**
 * Template Name: Product Template
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

$current = $post->ID;
$parent = $post->post_parent;
$grandparent_get = get_post($parent);
$grandparent = $grandparent_get->post_parent;
$category_post = get_post($grandparent);

$grand_slug = $category_post->post_name;
$grand_name = get_the_title($grandparent);

$parent_slug = $grandparent_get->post_name;
$parent_name = get_the_title($parent);

$current_slug = $post->post_name;
$current_name = get_the_title($post);

$featured_img_url = get_the_post_thumbnail_url($parent,'full');

?>

<header class="entry-header page-header">
	<div class="feat-image" style="background: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.15) 100%), url('<?php echo esc_url($featured_img_url); ?>') no-repeat;">
	</div>
</header><!-- .entry-header -->

<div class="wrapper secondary-page products" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> product-header" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-4 main-image-area">
				<?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
				
				<div class="image-gallery equipment-gallery">
					<div class="image-gallery-single">
						<?php $images = get_field('gallery'); if( $images ): ?>
					    <?php foreach( $images as $image ): ?>
		            <div class="item">
	                <a href="<?php echo $image['url']; ?>">
	                  <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </a>
		            </div>
					    <?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				
			</div>
						
			<main class="site-main col-md-8" id="main">
				
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>
				
				<div class="button-area">
<!-- 					<a href="#" class="btn btn-primary mr-2 mb-3">Purchase Now <i class="fas fa-chevron-circle-right ml-1"></i></a> -->
					<a href="/our-team" class="btn btn-primary mr-2 mb-3">Find A Distributor <i class="fas fa-chevron-circle-right ml-1"></i></a>
					<?php if( get_field('american_made') ): ?>
						<a href="#" class=""><img class="amt-logo mb-3" src="/wp-content/themes/understrap-child/images/american-made-tough-logo.png" alt="American Made Tough."></a>
					<?php endif; ?>
					
				</div>

			</main><!-- #main -->
			
			<div class="col-md-12 breadcrumbs">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			</div>

	</div><!-- .row -->

</div><!-- Container end -->

<div class="product-information">
	
	<div class="container">
		<div class="row row-eq-height">
			<div class="col-lg-4 features-wrapper">
				<div class="features ">
					<h6>Features</h6>
					<?php the_field('features'); ?>
					<div class="cert-tags">
						<?php $tags = get_field('certification_tags'); 
						if( $tags && in_array('ul-listed', $tags) ): ?>
							<img src="/wp-content/themes/understrap-child/images/certifications/ul-listed.png" align="UL Listed">
						<?php endif; ?>
						<?php if( $tags && in_array('ulc-listed', $tags) ): ?>
							<img src="/wp-content/themes/understrap-child/images/certifications/ulc-listed.png" align="ULC Listed">
						<?php endif; ?>
						<?php if( $tags && in_array('fm-approved', $tags) ): ?>
							<img src="/wp-content/themes/understrap-child/images/certifications/fm-approved.png" align="ULC Listed">
						<?php endif; ?>
					</div>
					
				</div>
			</div>
			
			<div class="col-lg-8 specs-wrapper">
				<div class="specs">
					
					<?php get_template_part( 'loop-templates/content', 'specs' ); ?>
					
					<?php if( have_rows('technical_data') ): ?>
					<div class="mb-5 tech-data">
						<h6>Technical Data:</h6>
						<table class="table table-sm table-striped">
							  <tbody>
								  <?php while( have_rows('technical_data') ): the_row(); 
										// vars
										$outhose = get_sub_field('outer_hose');	
										$outhosetreat = get_sub_field('outer_hose_treatment');	
										$inhosecover = get_sub_field('inner_hose_cover_&_liner');
										$inhosereinforce = get_sub_field('inner_hose_reinforcement');
										$lengths = get_sub_field('lengths');
										$lengthsuncoupled = get_sub_field('lengths_uncoupled');
										$factinstallcouplings = get_sub_field('factory_installed_couplings');
										$temprange = get_sub_field('temperature_range');
										$approvals = get_sub_field('approvals');
									?>
										<?php if( $outhose ): ?>
									    <tr align="left">
									      <td width="40%">Outer</td>
									      <td width="60%"><?php echo $outhose ?></td>
									    </tr>
								    <?php endif; ?>
								    <?php if( $outhosetreat ): ?>
									    <tr align="left">
									      <td width="40%">Outer Hose Treatment</td>
									      <td width="60%"><?php echo $outhosetreat ?></td>
									    </tr>
								    <?php endif; ?>
								    <?php if( $inhosecover ): ?>
									    <tr align="left">
									      <td width="40%"><span class="liner-only">Inner Hose Cover & </span>Liner</td>
									      <td width="60%"><?php echo $inhosecover ?></td>
									    </tr>
								    <?php endif; ?>
								    <?php if( $inhosereinforce ): ?>
									    <tr align="left">
									      <td width="40%">Inner Hose Reinforcement</td>
									      <td width="60%"><?php echo $inhosereinforce ?></td>
									    </tr>
								    <?php endif; ?>
										<?php if( $lengths ): ?>
									    <tr align="left">
									      <td width="40%">Lengths</td>
									      <td width="60%"><?php echo $lengths ?></td>
									    </tr>
								    <?php endif; ?>
								    <?php if( $lengthsuncoupled ): ?>
									    <tr align="left">
									      <td width="40%">Lengths Uncoupled</td>
									      <td width="60%"><?php echo $lengthsuncoupled ?></td>
									    </tr>
								    <?php endif; ?>
								    <?php if( $factinstallcouplings ): ?>
									    <tr align="left">
									      <td width="40%">Factory Installed Couplings</td>
									      <td width="60%"><?php echo $factinstallcouplings ?></td>
									    </tr>
								    <?php endif; ?>
								    <?php if( $temprange ): ?>
									    <tr align="left">
									      <td width="40%">Temperature Range</td>
									      <td width="60%"><?php echo $temprange ?></td>
									    </tr>
								    <?php endif; ?>
								    <?php if( $approvals ): ?>
									    <tr align="left">
									      <td width="40%">Approvals</td>
									      <td width="60%"><?php echo $approvals ?></td>
									    </tr>
								    <?php endif; ?>
							    <?php endwhile; ?>
							  </tbody>
							</table>
					</div>
					<?php endif; ?>
					<div class="button-area mb-5">
						<a href="/<?php echo $grand_slug; ?>" class="btn btn-primary mr-2">See Our Other <?php echo $grand_name; ?> <i class="fas fa-chevron-circle-right ml-1"></i></a>
					</div>
					<div id="ad-sidebar" class="horz mb-5">
						<?php get_template_part( 'loop-templates/content', 'ads-horz' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
