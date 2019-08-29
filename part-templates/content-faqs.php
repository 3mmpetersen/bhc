<div>
	<a class="anchor-link" id="faqs"></a>
	
	<?php if( have_rows('overview_faqs') ) : ?> 
	<h2>FAQs</h2>
	<?php while ( have_rows('overview_faqs') ) : the_row(); ?>
		<div class="faq-content">			
			<p class="faq-question">						
			  <a class="" data-toggle="collapse" href="#<?php the_sub_field('category'); ?>-<?php echo get_row_index(); ?>" role="button" aria-expanded="false" aria-controls="<?php the_sub_field('category'); ?>-<?php echo get_row_index(); ?>">
			  	<i class="far fa-plus"></i> <i class="far fa-minus"></i> <?php the_sub_field('question'); ?>
			  </a>
			</p>
			<div class="collapse faq-answer" id="<?php the_sub_field('category'); ?>-<?php echo get_row_index(); ?>">
			  <div class="card card-body">
			    <?php the_sub_field('answer'); ?>
			  </div>
			</div>
		</div>
	<?php endwhile; else : endif; ?>
</div>