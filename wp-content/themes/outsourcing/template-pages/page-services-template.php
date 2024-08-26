<?php
get_header(); 
/* Template Name: Services */
?>

<!-- Banner Section -->
<?php get_template_part('template-parts/common/banner-section') ?>


<!-- ./ page-header -->
<?php 
$args = array(	
	'post_type' => 'service',
	'post_status' => 'publish',
	'posts_per_page' => -1 
);
$service_data = new WP_Query($args);
if( $service_data->have_posts() ):
	?>

	<section class="service-section-4 section-padding">
		<div class="container">
			<div class="row gy-4 fade-wrapper">
				<?php
				while( $service_data->have_posts() ):$service_data->the_post();
						$service_icon = get_field('ob_service_icon');
					?>
					<div class="col-lg-4 col-md-6 d-flex">
						<div class="service-item-4 fade-top">
							<div class="service-thumb">
								<?php if( has_post_thumbnail() ): ?>
									<img class="main-img" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
								<?php endif; ?>

								<?php if( $service_icon ): ?>
								<div class="icon">
									<img src="<?php echo $service_icon['url']; ?>" alt="<?php the_title(); ?>">
								</div>
								<?php endif; ?>
						</div>
						<div class="service-content">
							<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php echo wp_trim_words( get_the_content(),15 ); ?></p>
							<a href="<?php the_permalink(); ?>" class="read-more">Read Details <i class="fa-regular fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php
			 endwhile;
			 wp_reset_postdata();
			 ?>

			</div>
		</div>
	</section>
	<!-- ./ service-section -->


	<?php
	endif;
	 get_footer();
