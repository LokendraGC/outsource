<?php 
get_header();
/* Template Name: Why Choose Us */
?>


<?php get_template_part('template-parts/common/banner-section') ?>


	<section class="service-details section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="service-details-content service-thumb-wrap">
					<?php the_content(); ?>
					</div>
				</div>

				<?php 
				$args = array(	
					'post_type' => 'service',
					'post_status' => 'publish',
					'posts_per_page' => -1 
				);
				$service_data = new WP_Query($args);
				if( $service_data->have_posts() ):
					?>
				<div class="col-lg-4">
					<div class="sidebar-widget sticky-widget">
						<h3 class="widget-title">Services</h3>
						<ul class="category-list">
							<?php
							while( $service_data->have_posts() ):$service_data->the_post();
								$service_icon = get_field('ob_service_icon');
								?>
								<li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><i class="fa-sharp fa-regular fa-arrow-right"></i></a></li>
							<?php endwhile; ?>
							
						</ul>
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- ./ footer-section -->

	<?php 
	get_footer();