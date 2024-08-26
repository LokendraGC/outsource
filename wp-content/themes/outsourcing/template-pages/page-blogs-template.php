<?php 
get_header();
/* Template Name: Blogs and News */
?>

<?php get_template_part('template-parts/common/banner-section') ?>


<?php 
$unique_ID = get_the_ID();

$args = array(  
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => -1, 
);
$blogs_data = new WP_Query($args);

if( $blogs_data->have_posts() ):
	?>
	<section class="blog-section section-padding">
		<div class="container">
			<div class="row gy-4 justify-content-center">
				
				<?php
				while( $blogs_data->have_posts() ):$blogs_data->the_post();
					?>
					<div class="col-lg-4 col-md-6">
						<div class="post-card fade-top">
							<?php if( has_post_thumbnail() ): ?>
								<div class="post-thumb">
									<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
								</div>
							<?php endif; ?>
							<div class="post-content-wrap">
								<div class="post-content">
									<ul class="post-meta">
										<li><i class="fa-regular fa-calendar"></i><?php echo get_the_date('d M,Y'); ?></li>
									</ul>
									<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</div>
								<div class="post-bottom">
									<a class="read-more" href="<?php the_permalink(); ?>">Read More<i class="fa-solid fa-chevrons-right"></i></a>
								</div>
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
	<!-- ./ blog-section -->

	<?php 
endif;
get_footer();