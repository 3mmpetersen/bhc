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
			
			<main class="site-main col-md-7" id="main">
				<div class="archive-news mb-5">
					<h1>Latest News</h1>
<!-- 					<p><a href="#" class="btn btn-link p-0">News Archives <i class="fas fa-chevron-circle-right ml-1"></i></a></p> -->
				</div>
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>
						
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
							<div class="entry-content">
								<h3><?php the_title(); ?></h3>
								<?php
								the_excerpt();
								?>
						
							</div><!-- .entry-content -->
						
						</article><!-- #post-## -->

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<div class="col-md-3">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
			</div>
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
