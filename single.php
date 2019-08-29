<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
	<div class="feat-image" style="background: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.15) 100%), url('/wp-content/uploads/2018/12/header-news.jpg') no-repeat;">
		<div class="container">
			<div class="col-sm-12">
				<h1 class="entry-title">News & Events</h1>
			</div>
		</div>
	</div>
</header><!-- .entry-header -->

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div id="ad-sidebar" class="vert col-md-2 col">
				<?php get_template_part( 'loop-templates/content', 'ads-vert' ); ?>
			</div>
			
			<main class="site-main col-md-10" id="main">
				<?php while ( have_posts() ) : the_post(); ?>
				

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<header class="entry-header">
					
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					
							<div class="entry-meta">
					
								<?php understrap_posted_on(); ?>
					
							</div><!-- .entry-meta -->
					
						</header><!-- .entry-header -->
					
						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
						<div class="entry-content">
					
							<?php the_content(); ?>
					
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
								'after'  => '</div>',
							) );
							?>
					
						</div><!-- .entry-content -->
						
						<hr>
					
						<footer class="entry-footer">
					
							<?php understrap_entry_footer(); ?>
					
						</footer><!-- .entry-footer -->
					
					</article><!-- #post-## -->

						<?php understrap_post_nav(); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
	
					<?php endwhile; // end of the loop. ?>
	
				</main><!-- #main -->

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
