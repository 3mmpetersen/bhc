<?php
/**
 * The template for Front Page.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="slider-wrapper">
	<div class="homepage-slider owl-carousel">
		<?php if( have_rows('slider') ): while ( have_rows('slider') ) : the_row(); 
			$background = get_sub_field('background_image');
			$txt_image = get_sub_field('text_image');
			$slide_link = get_sub_field('slider_link');
		?>
			<a href="<?php echo $slide_link['url']; ?>" target="<?php echo $slide_link['target'] ?>" class="click-<?php echo $slide_link['title'] ?>">
			<div class="slider-img" style="background-image: url('<?php echo $background['url']; ?>');">
				<?php if( $txt_image ): ?>
					<div class="slider-text">
						<img src="<?php echo $txt_image['url']; ?>" alt="<?php echo $txt_image['alt'] ?>" />
					</div>
					<?php endif; ?>
			</div>
			</a>
		<?php endwhile; else : endif;?>
	</div>
	<div class="next">
		
		<a href="#home-callouts-link"><i class="far fa-chevron-circle-down"></i></a>
	</div>
</div>
<div class="wrapper" id="index-wrapper">
	
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<a class="anchor-link" id="home-callouts-link"></a>
		<div class="home-callouts ">
			
			<div class="row">
				<?php if( have_rows('callouts') ): ?>
					<div class="owl-carousel product-carousel">
						<?php  while ( have_rows('callouts') ) : the_row(); 
							$title = get_sub_field('title');
							$image = get_sub_field('background-image');
							$link_title = get_sub_field('text');
							$link_url = get_sub_field('link');
						?>
						<div class="callout col mb-30px">
							<a href="<?php echo $link_url; ?>" class="<?php echo $image['title']; ?>">
								<div class="background" style="background-image: url('<?php echo $image['url']; ?>');">
									<div class="co-link">
										<?php echo $link_title; ?><i class="fas fa-chevron-circle-right ml-1"></i>
									</div>
									<div class="co-title">
										<h2><?php echo $title; ?></h2>
									</div>
								</div>
							</a>
						</div>
						<?php endwhile; else : ?>
					</div>
				<?php endif;?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 mb-30px location ">
						<?php if( have_rows('location') ): while( have_rows('location') ): the_row(); 
							$title = get_sub_field('title');
							$copy = get_sub_field('copy');
						?>
							<div class="location-wrapper match">
								<div class="location-copy">
									<h2><?php echo $title; ?></h2>
									<h4><?php echo $copy; ?></h4>
									<div class="p-2 bd-highlight socials"><?php my_social_icons_output(); ?></div>
								</div>
								<div class="location-info">
									<div class="d-flex flex-row bd-highlight">
										<div class="p-2 bd-highlight"><a class="hp-toll-free" href="tel:+1<?php the_field('toll_free_phone_link', 'option'); ?>"><i class="far fa-mobile"></i> <?php the_field('toll_free_phone_number', 'option'); ?></a></div>
										<div class="p-2 bd-highlight"><a class="hp-address" href="<?php the_field('address_link', 'option'); ?>" target="_blank" ><i class="far fa-map-marker-alt"></i> <?php the_field('address_line_1', 'option'); ?>, <?php the_field('address_line_2', 'option'); ?></a></div>
									</div>
									<div class="d-flex flex-row bd-highlight">
										<div class="p-2 bd-highlight"><a class="hp-info-email" href="mailto:<?php the_field('company_email', 'option'); ?>"><i class="far fa-envelope"></i> <?php the_field('company_email', 'option'); ?></a></div>
										
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
					</div>
					<div class="col-md-6 mb-30px news">
						<div class="news-wrapper match">
							<h2>Latest News</h2>
							<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<h4><?php the_title(); ?></h4>
								<?php the_excerpt(__('')); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			$args = array(
				'post_type' => 'testimonial',
				'post_per_page' => 1
			);
			$query = new WP_query( $args );
		?>
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
			<div class="testimonial mt-4 mb-2">
				<div class="row justify-content-md-center">
					<div class="col-md-10">
						<div class="float-left testimonial-image">
							<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
						</div>
						<div class="testimonial-content">
							<?php the_content(); ?>
							<p><strong><?php the_title(); ?></strong><?php if( get_field('area') ): ?>, <?php the_field('area'); ?><?php endif; ?></p>
							<p class="mb-0"><a href="/testimonials/submit-testimonial/" class="txt-link hp-testimonials">Submit Your Testimonial <i class="fas fa-chevron-circle-right ml-1"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div><!-- Container end -->
</div><!-- Wrapper end -->
<div class="homepage-carousel gallery owl-carousel">
	<?php 
		$images = get_field('gallery');
		$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
	if( $images ): ?>
        <?php foreach( $images as $image ): ?>
          <div class="gallery-item">
	          <a href="<?php echo $image['url']; ?>">
          		<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
          		<div class="img-description">
	          		<div class="icon">
									<i class="fal fa-plus-circle"></i>
	          		</div>
	          		<div class="description">
	          			<?php echo $image['description']; ?>
	          		</div>
          		</div>
          	</a>
          </div>
        <?php endforeach; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>