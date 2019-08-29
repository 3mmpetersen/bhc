<div>
	<a class="anchor-link" id="videos"></a>
	<?php if( have_rows('video_gallery') ) : ?>
		<h2>Videos</h2>
		<div class="row mb-3">
			<div class="col-md-10">
			<?php while( have_rows('video_gallery') ): the_row(); 
				$vidTitle = get_sub_field('video_title');
				$vidLink = get_sub_field('video_link');
			?>
				<div class="embed-responsive embed-responsive-16by9 mb-3" style="margin-right: 50px;">
				  <iframe class="embed-responsive-item" src="<?php echo $vidLink; ?>" allowfullscreen></iframe>
				</div>
			<?php endwhile; ?> 
			</div>
		</div>
	<?php endif; ?>
</div>