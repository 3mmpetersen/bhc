<?php 
	$args = array(
	  'post_type' => 'callout_ads', 
	  'posts_per_page' => 1,
		'orderby' => 'rand',
		'meta_key'		=> 'orientation',
		'meta_value'	=> 'vert'
	  );
	$query = new WP_query( $args );
?>
<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); 
	$image = get_field('image');
	$link = get_field('link');
?>
	<a href="<?php echo $link['url']; ?>">
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</a>
<?php endwhile; endif; wp_reset_postdata(); ?>