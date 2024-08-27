<?php 
get_header();
/* Template Name: About Us */

 get_template_part('template-parts/common/banner-section') ?>

	<section class="about-section-4 section-padding"> 
		<div class="container-2">
			<div class="row align-items-center fade-wrapper">
				<div class="col-lg-5 col-md-12">
					<div class="about-img-3 img-reveal" style="visibility: visible;">
						<div class="img-overlay overlay-2" style="width: 0%;"></div>
						
						<?php if( has_post_thumbnail() ): ?>
						<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="about image" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
					<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-7 col-md-12">
					<div class="about-content-4">
						<div class="section-heading">
							<p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>About Us</p>
							<h1 class="section-title mb-0" data-text-animation data-split="word" data-duration="1"><?php echo get_bloginfo(); ?></h1>
						</div>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./ about-section -->

	<section class="team-details" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);">
		<div class="container-2-2">
			<div class="row">
				<div class="col-md-12">
					<div class="team-details-wrap section-padding">
						<div class="team-counter-area">
							<!-- <h2 class="title">Who Are We?</h2> -->
							<?php if( $wh_are = get_field('who_we_are_desc') ): ?>
							<?php echo $wh_are; ?>
						<?php endif; ?>
							<?php if( have_rows('who_we_are_details') ): ?>
							<div class="row gy-lg-0 gy-4 justify-content-center">
								<?php
								 while( have_rows('who_we_are_details') ):the_row();

								 	$wh_icon = get_sub_field('about_image');
								 	$wh_title = get_sub_field('who_title');
								 	$wh_desc = get_sub_field('who_description');
								 	if( $wh_title ):
								 ?>
								<div class="col-lg-4 col-md-6">
									<div class="team-counter hover-content">
										<?php if( $wh_icon ): ?>
										<div class="icon">
											<img src="<?php echo $wh_icon['url']; ?>" alt="<?php echo $wh_title; ?>">
										</div>
									<?php endif; ?>

										<div class="content">
											<h3><?php echo $wh_title; ?></h3>
											<?php if( $wh_desc ): ?>
											<p class="hover-text"><?php echo $wh_desc; ?></p>
										<?php endif; ?>
										</div>
									</div>
								</div>
								<?php
									endif;
								 endwhile;
								  ?>
								</div>
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ./ team-details -->

		<?php if( have_rows('our_promises') ): ?>
		<section class="service-process section-padding">
			<div class="container-2">
				<div class="section-heading text-center">
					<p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Commitment to Quality</p>
					<h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Our Promises</h2>
				</div>
				<div class="row gy-lg-0 gy-4 fade-wrapper">
					<?php
					 while( have_rows('our_promises') ):the_row();

					 		$promise_icon = get_sub_field('promise_image');
					 		$promise_desc = get_sub_field('promises_description');
					 ?>
					<div class="col-lg-3 col-md-6 fade-top d-flex">
						<div class="service-process-card">
							<?php if( $promise_icon ): ?>
							<img src="<?php echo $promise_icon['url']; ?>" alt="promise title" >
						<?php endif; ?>
						<?php if( $promise_desc ): ?>
							<p><?php echo $promise_desc; ?></p>
						<?php endif; ?>
						</div>
					</div>
					<?php endwhile; ?>
			
				</div>
			</div>
		</section>
	<?php endif; ?>

	  <!-- How We Work -->
<?php get_template_part('template-parts/common/how-we-work-section'); ?>

<!-- Consulting part -->
<?php get_template_part('template-parts/common/consulting-section');  ?>

		<?php 
		get_footer();