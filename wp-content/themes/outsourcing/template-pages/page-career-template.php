<?php 
get_header();
/* Template Name: Career */
?>

	<?php get_template_part('template-parts/common/banner-section') ?>

	<!-- ./ page-header -->

	<section class="about-section-4 section-padding" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);"> 
		<div class="container-2">
			<div class="fade-wrapper">
				<?php if( the_content() ): ?>
				<div>
					<div class="about-content-4">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- ./ about-section -->

	<section class="contact-section section-padding">
		<div class="container-2">
			<div class="blog-contact-form">
				<h2 class="title mb-0 text-center">Fill the form</h2>
				<p class="mb-30 mt-10 text-center">Fill-up The Form and Message us of your amazing question</p>
				<div class="request-form">
					<?php echo do_shortcode('[contact-form-7 id="a68ba3f" title="Career Form" html_id="ajax_contact" html_class="form-horizontal"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- ./ contact-section -->

	<?php 
	get_footer();