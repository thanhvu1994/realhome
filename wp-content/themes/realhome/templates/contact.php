<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage realhome
 * @since realhome 1.0
 */
?>
<!--//head-->
<?php get_template_part( 'head'); ?>

<!--//header-->
<?php get_header(); ?>

<div class="contact">
	<div class="container">
		<h3><?php echo get_the_title($post) ?></h3>
	 	<div class="contact-top">
			<div class="col-md-6 contact-top1">
			  	<h4> Info</h4>
	          	<p class="text-contact"><?php echo $post->post_content; ?></p>
	          	<?php $info = get_posts(['posts_per_page' => 1, 'post_type' => 'info', 'post_status' => 'publish', 'suppress_filters' => true]);
	          	if (isset($info[0])): ?>
			  	<div class="contact-address">
				  	<div class="col-md-6 contact-address1">
					  	<h5>Address</h5>
					  	<p><b><?php echo get_field('company_name', $info[0]->ID) ?></b></p>
					  	<?php 
					  		$address = get_field('address', $info[0]->ID);
					  		$address = explode(';', $address);
					  		if (!empty($address)) {
					  			foreach ($address as $addr) {
					  				echo '<p>'.trim($addr).'</p>';
					  			}
					  		}
					  	?>
				  	</div>
				  	<div class="col-md-6 contact-address1">
					  	<h5>Email Address</h5>
					  	<p>General :<a href="malito:<?php echo get_field('email_general', $info[0]->ID) ?>"><?php echo get_field('email_general', $info[0]->ID) ?></a></p>
					  	<p>Office :<a href="malito:<?php echo get_field('email_office', $info[0]->ID) ?>"><?php echo get_field('email_office', $info[0]->ID) ?></a></p>
				  	</div>
				  	<div class="clearfix"></div>
			  	</div>
			  	<div class="contact-address">
				  	<div class="col-md-6 contact-address1">
					  	<h5>Phone</h5>
					  	<?php 
					  		$phone_number = get_field('phone_number', $info[0]->ID);
					  		$phone_number = explode(';', $phone_number);
					  		if (!empty($phone_number)) {
					  			foreach ($phone_number as $phone) {
					  				echo '<p>'.trim($phone).'</p>';
					  			}
					  		}
					  	?>
			        </div>
			  		<div class="clearfix"></div>
			  	</div>
			  <?php endif; ?>
			</div>
			<div class="col-md-6 contact-right">
	            <?php echo get_post_field('form', $post->ID) ?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="map">
     	<!-- <iframe src="<?php //echo get_field('map', $info->ID) ?>"> </iframe> -->
     	<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>

<!--//footer-->
<?php get_footer(); ?>