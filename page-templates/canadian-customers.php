<?php
/**
 * Template Name: Canadian Customers Template
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

$featured_img_url = get_the_post_thumbnail_url($post,'full');

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

			<div id="ad-sidebar" class="vert col-md-2">
				<?php get_template_part( 'loop-templates/content', 'ads-vert' ); ?>
			</div>
			
			<main class="site-main col-md-10" id="main">
				
				<div class="row">
					<div class="col-xl-4 col-lg-6">
						<?php 
							$args = array(
							  'post_type' => 'staff', 
							  'posts_per_page' => -1,
							  'tag'            => 'canadian-dealer'
							  );
							$query = new WP_query( $args );
						
							if($query->have_posts()) : ?> 
								
								<section class="team-members">
									<?php while($query->have_posts()) : $query->the_post(); 
										$jobTitle = get_field('title');
										$location = get_field('location');
										$tfnumber = get_field('tollfree');
										$number = get_field('number');
										$cell = get_field ('cell');
										$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
									?>
											<div class="row">
												<div class="col-5 mb-4">
													<img src="<?php echo $featured_img_url; ?>" alt="Team Image" style="width: 100%;">
												</div>
												<div class="col-7">
													<h4><?php the_title(); ?></h4>
													<p><em><?php echo $jobTitle; ?></em><br><?php echo $location; ?></p>
													<p><?php if( $tfnumber ): ?><strong>Toll Free</strong> <?php echo $tfnumber; ?><br><?php endif; ?><?php if( $number ): ?><strong>Office</strong> <?php echo $number; ?><?php endif; ?><br><?php if( $cell ): ?><strong>Cell</strong> <?php echo $cell; ?><?php endif; ?></p>
													<a href="<?php echo get_permalink( $post->ID ); ?>" class="btn btn-primary mr-2 mb-3">Connect <i class="fas fa-chevron-circle-right ml-1"></i></a>
												</div>
											</div>
									<?php endwhile; ?>
									
								</section>
							<?php endif; wp_reset_postdata(); ?>
					</div>
					<div class="col-xl-8 col-lg-6 mb-4">
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

				
				<hr>
				
				<?php if( have_rows('products') ): ?>
					<section class="product-archive">
						<div class="row row-eq-height">
						<?php while( have_rows('products') ): the_row(); 
							// vars
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$excerpt = get_sub_field('excerpt');
							$btn = get_sub_field('button_text');
							$link = get_sub_field('button_link');
							?>
							<div class="col-md-4 col-sm-6">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
								<h3><?php echo $title; ?></h3>
								<div class="excerpt">
									<?php echo $excerpt; ?>
								</div>
								<a href="<?php echo $link['url']; ?>" class="btn btn-primary mr-2 mt-3"><?php echo $btn; ?>	<i class="fas fa-chevron-circle-right ml-1"></i></a>
							</div>				
						<?php endwhile; ?>
						</div>
					</section>
				<?php endif; ?>
				
						
				

			</main><!-- #main -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
