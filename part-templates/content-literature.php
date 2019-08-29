<div>
	<a class="anchor-link" id="literature"></a>
	
	<?php if( have_rows('literature') ) : ?>
	<h2>Literature</h2>
	<?php while( have_rows('literature') ): the_row(); 
		$file = get_sub_field('file');
	?>
		<p class="mb-0"><a href="<?php echo $file['url']; ?>" target="_blank" class="download-pdf <?php echo $file['title'] ?>"><i class="far fa-arrow-to-bottom orangeg"></i> &nbsp; <?php echo $file['title'] ?></a></p>
	<?php endwhile; endif; ?> 
</div>