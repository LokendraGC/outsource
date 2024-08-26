	<section class="cta-color" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);">
		<div class="about-cta-wrap text-center fade-top section-padding">
			
			<?php if( $consult_title = get_field('consulting_section','options') ): ?>
			<div class="section-heading white-content mb-40">
				<h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span><?php echo get_bloginfo(); ?></h4>
				<h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1"><?php echo $consult_title; ?></h2>
			</div>
		<?php endif; ?>

			<?php if( $phone_no = get_field('wtn_phone_number','options') ): ?>
			<div class="cta-btn">
				<a href="tel:<?php echo $phone_no; ?>" class="bz-primary-btn" 
					>Arange Call<i class="fa-regular fa-arrow-right"></i></a>
				<a href="#" class="bz-primary-btn">Live Chat<i class="fa-regular fa-arrow-right"></i></a>
			</div>
		<?php endif; ?>
		</div>
	</section>
	<!-- ./ about-cta -->