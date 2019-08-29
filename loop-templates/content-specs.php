<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- 7 Columns 50/15 -->
<?php if( get_field('specification_table') == '7-col-50-15' ): ?>
	<?php if( have_rows('7-col-50-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
				    <th scope="col" colspan="2">Size</th>
				    <th scope="col" colspan="6" style="padding-left: 0; padding-right: 0; padding-bottom: 0; line-height: 2em;">Pressure
					    	<table>
						    	<thead>
							    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
								      <th scope="col" colspan="2">Service</th>
								      <th scope="col" colspan="2">Proof</th>
								      <th scope="col" colspan="2">Burst</th>
							    	</tr>
						    	</thead>
					    	</table>
				    </th>
			      
			      <th scope="col" colspan="2">Bowl Size</th>
			      <th scope="col" colspan="2">Weight<br>(50'/15M)</th>
			      <th scope="col" colspan="2">Coil Diameter<br>(50'/15M)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="center" colspan="2">inch</td>
			      <td align="right">lbs</td>
			      <td align="left">kg</td>
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			    </tr>
			    <?php while( have_rows('7-col-50-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$pp = get_sub_field('pressure_proof');	
						$burst = get_sub_field('burst');	
						$bowlsize = get_sub_field('bowl_size');	
						$weight = get_sub_field('weight');	
						$coildiameter = get_sub_field('coil_diameter');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $pp['psi']; ?></td>
				      <td align="left"><?php echo $pp['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="center" colspan="2"><?php echo $bowlsize['inch']; ?></td>
							<td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
				      <td align="right"><?php echo $coildiameter['inch']; ?></td>
				      <td align="left"><?php echo $coildiameter['mm']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 7 Columns 100/30 -->
<?php if( get_field('specification_table') == '7-col-100-30' ): ?>
	<?php if( have_rows('7-col-100-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="6" style="padding-left: 0; padding-right: 0; padding-bottom: 0; line-height: 2em;">Pressure
					    	<table>
						    	<thead>
							    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
								      <th scope="col" colspan="2">Service</th>
								      <th scope="col" colspan="2">Proof</th>
								      <th scope="col" colspan="2">Burst</th>
							    	</tr>
						    	</thead>
					    	</table>
				    </th>
			      <th scope="col" colspan="2">Bowl Size</th>
			      <th scope="col" colspan="2">Weight<br>(100'/30M)</th>
			      <th scope="col" colspan="2">Coil Diameter<br>(100'/30M)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="center" colspan="2">inch</td>
			      <td align="right">lbs</td>
			      <td align="left">kg</td>
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			    </tr>
			    <?php while( have_rows('7-col-100-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$pp = get_sub_field('pressure_proof');	
						$burst = get_sub_field('burst');	
						$bowlsize = get_sub_field('bowl_size');	
						$weight = get_sub_field('weight');	
						$coildiameter = get_sub_field('coil_diameter');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $pp['psi']; ?></td>
				      <td align="left"><?php echo $pp['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="center" colspan="2"><?php echo $bowlsize['inch']; ?></td>
							<td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
				      <td align="right"><?php echo $coildiameter['inch']; ?></td>
				      <td align="left"><?php echo $coildiameter['mm']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 6 Columns -->
<?php if( get_field('specification_table') == '6-col' ): ?>
	<?php if( have_rows('6-col-50-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="6" style="padding-left: 0; padding-right: 0; padding-bottom: 0; line-height: 2em;">Pressure
				    	<table>
					    	<thead>
						    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
							      <th scope="col" colspan="2">Service</th>
							      <th scope="col" colspan="2">Proof</th>
							      <th scope="col" colspan="2">Burst</th>
						    	</tr>
					    	</thead>
				    	</table>
				    </th>
			      
			      <th scope="col" colspan="2">Bowl Size</th>
			      <th scope="col" colspan="2">Weight<br>(50'/15M)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="center" colspan="2">inch</td>
			      <td align="right">lbs</td>
			      <td align="left">kg</td>
			    </tr>
			    <?php while( have_rows('6-col-50-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$pp = get_sub_field('pressure_proof');	
						$burst = get_sub_field('burst');	
						$bowlsize = get_sub_field('bowl_size');	
						$weight = get_sub_field('weight');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $pp['psi']; ?></td>
				      <td align="left"><?php echo $pp['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="center" colspan="2"><?php echo $bowlsize['inch']; ?></td>
							<td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 5 Columns with Comments -->
<?php if( get_field('specification_table') == '5-col-com' ): ?>
	<?php if( have_rows('5-col-com-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="4" style="padding-left: 0; padding-right: 0;">Pressure
				    	<table>
					    	<thead>
						    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
							      <th scope="col" colspan="2">Working</th>
										<th scope="col" colspan="2">Burst<sup>*</sup></th>
						    	</tr>
					    	</thead>
				    	</table>
				    </th>
			      
			      <th scope="col" colspan="2">Wall Thickness</th>
			      <th scope="col" colspan="2">Weight<sup>**</sup></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">lbs/ft</td>
			      <td align="left">kg</td>
			    </tr>
			    <?php while( have_rows('5-col-com-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$minBurst = get_sub_field('min_burst_pressure');	
						$maxPres = get_sub_field('max_work_pressure');	
						$wallThick = get_sub_field('wall_thick');	
						$weight = get_sub_field('weight');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $minBurst['psi']; ?></td>
				      <td align="left"><?php echo $minBurst['kpa']; ?></td>
				      <td align="right"><?php echo $maxPres['psi']; ?></td>
				      <td align="left"><?php echo $maxPres['kpa']; ?></td>
				      <td align="right"><?php echo $wallThick['inch']; ?></td>
				      <td align="left"><?php echo $wallThick['mm']; ?></td>
							<td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
			<div class="table-comments">
				<p>
					<sup>*</sup> Or maximum working pressure of attached coupling, whichever is the lower<br>
					<sup>**</sup> Excluding couplings
				</p>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 5 Columns -->
<?php if( get_field('specification_table') == '5-col' ): ?>
	<?php if( have_rows('5-col-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="4" style="padding-left: 0; padding-right: 0;">Pressure
				    	<table>
					    	<thead>
						    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
							      <th scope="col" colspan="2">Service</th>
										<th scope="col" colspan="2">Burst</th>
						    	</tr>
					    	</thead>
				    	</table>
				    </th>
			      <th scope="col" colspan="2">Weight</th>
			      <th scope="col" colspan="2">Lay Flat Width</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">lbs.</td>
			      <td align="left">kg</td>
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			    </tr>
			    <?php while( have_rows('5-col-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$burst = get_sub_field('burst');	
						$weight = get_sub_field('weight');	
						$lay_flat_width = get_sub_field('lay_flat_width');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
							<td align="right"><?php echo $lay_flat_width['inch']; ?></td>
				      <td align="left"><?php echo $lay_flat_width['mm']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 4 Columns 1 -->
<?php if( get_field('specification_table') == '4-col-1' ): ?>
	<?php if( have_rows('5-col-2-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="4" style="padding-left: 0; padding-right: 0;">Pressure
				    	<table>
					    	<thead>
						    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
							      <th scope="col" colspan="2">Service</th>
										<th scope="col" colspan="2">Burst</th>
						    	</tr>
					    	</thead>
				    	</table>
				    </th>
			      <th scope="col" colspan="2">End Tensile Strength</th>
			      <th scope="col" colspan="2">Weight</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">lbs</td>
			      <td align="left">kg</td>
			      <td align="right">lbs/ft</td>
			      <td align="left">kg</td>
			    </tr>
			    <?php while( have_rows('5-col-2-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$burst = get_sub_field('burst');	
						$endStrength = get_sub_field('end_tensile_strength');	
						$weight = get_sub_field('weight');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="right"><?php echo $endStrength['lbs']; ?></td>
				      <td align="left"><?php echo $endStrength['kg']; ?></td>
				      <td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
		</div>
	<?php endif; ?>
<?php endif; ?>


<!-- 5 Columns Bowl -->
<?php if( get_field('specification_table') == '5-col-bowl' ): ?>
	<?php if( have_rows('5-col-bowl-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="6" style="padding-left: 0; padding-right: 0;">Pressure
				    	<table style="width: 100%;">
					    	<thead>
						    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
							      <th scope="col" colspan="2">Service</th>
							      <th scope="col" colspan="2">Proof</th>
										<th scope="col" colspan="2">Burst</th>
						    	</tr>
					    	</thead>
				    	</table>
				    </th>
			      <th scope="col" colspan="2">Bowl Size</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td colspan="2" align="center">inch</td>
			    </tr>
			    <?php while( have_rows('5-col-bowl-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$burst = get_sub_field('burst');	
						$proof = get_sub_field('proof');	
						$bowl = get_sub_field('bowl_size');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="right"><?php echo $proof['psi']; ?></td>
				      <td align="left"><?php echo $proof['kpa']; ?></td>
				      <td colspan="2" align="center"><?php echo $bowl['inch']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 4 Columns 2 -->
<?php if( get_field('specification_table') == '4-col-2' ): ?>
	<?php if( have_rows('4-col-2-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="4" style="padding-left: 0; padding-right: 0;">Pressure
				    	<table>
					    	<thead>
						    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
							      <th scope="col" colspan="2">Service</th>
										<th scope="col" colspan="2">Burst</th>
						    	</tr>
					    	</thead>
				    	</table>
				    </th>
			      
			      <th scope="col" colspan="2">Weight</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">lbs/ft</td>
			      <td align="left">kg</td>
			    </tr>
			    <?php while( have_rows('4-col-2-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$burst = get_sub_field('burst');	
						$weight = get_sub_field('weight');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 6 Columns 2 -->
<?php if( get_field('specification_table') == '6-col-2' ): ?>
	<?php if( have_rows('6-col-2-specifications') ): ?>
		<div class="mb-5">
			<h6><?php the_title(); ?> Specifications:</h6>
			<table class="table table-sm table-striped">
			  <thead>
			    <tr align="center" valign="bottom">
			      <th scope="col" colspan="2">Size</th>
			      <th scope="col" colspan="4" style="padding-left: 0; padding-right: 0;">Pressure
				    	<table>
					    	<thead>
						    	<tr align="center" style="border-top: 1px solid rgba(0,0,0,.5);">
							      <th scope="col" colspan="2">Service</th>
										<th scope="col" colspan="2">Burst<sup>*</sup></th>
						    	</tr>
					    	</thead>
				    	</table>
				    </th>
			      <th scope="col" colspan="2">End Tensile Strength</th>
			      <th scope="col" colspan="2">Wall Thickness</th>
			      <th scope="col" colspan="2">Weight<sup>**</sup></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr align="center" valign="bottom">
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">psi</td>
			      <td align="left">kpa</td>
			      <td align="right">lbs</td>
			      <td align="left">kg</td>
			      <td align="right">inch</td>
			      <td align="left">mm</td>
			      <td align="right">lbs/ft</td>
			      <td align="left">kg</td>
			    </tr>
			    <?php while( have_rows('6-col-2-specifications') ): the_row(); 
						// vars
						$size = get_sub_field('size');	
						$service = get_sub_field('service');	
						$burst = get_sub_field('burst');	
						$endStrength = get_sub_field('end_tensile_strength');	
						$wall = get_sub_field('wall_thickness');
						$weight = get_sub_field('weight');	
					?>
			    <tr align="center" valign="bottom">
				      <td align="right"><?php echo $size['inch']; ?></td>
				      <td align="left"><?php echo $size['mm']; ?></td>
				      <td align="right"><?php echo $service['psi']; ?></td>
				      <td align="left"><?php echo $service['kpa']; ?></td>
				      <td align="right"><?php echo $burst['psi']; ?></td>
				      <td align="left"><?php echo $burst['kpa']; ?></td>
				      <td align="right"><?php echo $endStrength['lbs']; ?></td>
				      <td align="left"><?php echo $endStrength['kg']; ?></td>
				      <td align="right"><?php echo $wall['inch']; ?></td>
				      <td align="left"><?php echo $wall['mm']; ?></td>
				      <td align="right"><?php echo $weight['lbs']; ?></td>
				      <td align="left"><?php echo $weight['kg']; ?></td>
			    </tr>
			    <?php endwhile; ?>
			  </tbody>
			</table>
			<div class="table-comments">
				<p>
					<sup>*</sup> Or maximum working pressure of attached coupling, whichever is the lower<br>
					<sup>**</sup> Excluding couplings
				</p>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>

