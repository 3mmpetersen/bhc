<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sul-theme
 */

get_header();
?>

<header class="entry-header page-header">
	<div class="feat-image" style="background: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.15) 100%), url('/wp-content/uploads/2018/12/header-flag.jpg') no-repeat;">
		<div class="container">
			<div class="col-sm-12">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</header><!-- .entry-header -->

	<div id="primary" class="content-area secondary-page error-wrapper">
		<main id="main" class="site-main">
			<div class="container">
				<section class="error-404 not-found">
					<header class="page-header">
						
					</header><!-- .page-header -->

							<div class="entry-content">
								<div class="row">
									<div class="col-md-6">
										<h1 class="page-title">Looks like the page you are looking for can't be found here.</h1>
										<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try to search for the page or product you are looking for.', 'sul-theme' ); ?></p>
										<p><a href="/" class="btn btn-primary">Go Home</a></p>
									</div>
								</div>
							</div><!-- .entry-content -->

					<div class="page-content">
						
		
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();