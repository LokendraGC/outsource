<?php 
get_header();
/* Template Name: Contact Us */
?>

<?php get_template_part('template-parts/common/banner-section') ?>

	<!-- ./ page-header -->

	<section class="contact-section section-padding">
		<div class="container">
			<div class="row gy-lg-0 gy-5">
				<div class="col-lg-7">
					<div class="blog-contact-form">
						<h2 class="title mb-0">Message Us</h2>
						<p class="mb-30 mt-10">Fill-up The Form and Message us of your amazing question</p>
						<div class="request-form">
							<?php 
							echo do_shortcode('[contact-form-7 id="a15c850" title="Contact form" html_class="form-horizontal" html_id="ajax_contact"]'); 
							?>

						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12">
					<div class="contact-content">
						<?php if( the_content() ): ?>
						<div class="contact-top">
							<?php the_content(); ?>
						</div>
					<?php endif; ?>
						<div class="contact-list">
							<?php if( $phone_num = get_field('wtn_phone_number','options') ): ?>
							<div class="list-item">
								<div class="icon">
									<i class="fa-sharp fa-solid fa-phone"></i>
								</div>
								<div class="content">
									<h4 class="title">Phone Number</h4>
									<span><a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a></span>
								</div>
							</div>
						<?php endif; ?>
						<?php if( $address = get_field('wtn_address','options') ): ?>
							<div class="list-item">
								<div class="icon">
									<i class="fa-sharp fa-solid fa-location-dot"></i>
								</div>
								<div class="content">
									<h4 class="title">Our Address</h4>
									<p><?php echo $address; ?></p>
								</div>
							</div>
						<?php endif; ?>

						<?php if( $mail = get_field('wtn_email_address','options') ): ?>
							<div class="list-item">
								<div class="icon">
									<i class="fa-sharp fa-solid fa-clock"></i>
								</div>
								<div class="content">
									<h4 class="title">Mail For Support</h4>
									<span><a
										href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></span>
								</div>
							</div>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./ contact-section -->

	<?php if( $map_iframe = get_field('wtn_map_iframe_url','options') ): ?>
	<section class="">
			<?php echo $map_iframe; ?>
	</section>

	<?php 
endif;
	get_footer();