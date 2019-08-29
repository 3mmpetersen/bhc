<div class="image-gallery mt-5">
	<a class="anchor-link" id="photos"></a>
	<?php $images = get_field('gallery'); if( $images ): ?><h2>Photos</h2><?php endif; ?>
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