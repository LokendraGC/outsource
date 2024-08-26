<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package outsourcing
 */

get_header();
?>

<!-- Banner Section -->
<?php get_template_part('template-parts/common/banner-section') ?>

<section class="blog-details section-padding">
	<div class="container-2">
		<div class="row gy-5">
			<div class="col-lg-8 col-md-12">
				<div class="blog-details-wrap">
					<div class="blog-details-img mb-40">
						<?php if( has_post_thumbnail() ): ?>
							<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
						<?php endif; ?>
					</div>
					<ul class="post-meta">
						<li><i class="fa-regular fa-calendar"></i>
							<?php echo get_the_date('d M, Y'); ?>
						</li>
					</ul>
					<div class="blog-details-content">
						<?php the_content(); ?>
					</div>
					<div class="tags mt-30">
						<?php if( $tags = get_the_tags() ): ?>
							<div class="tag-left">
								<h4 class="follow">Tag :</h4>
								<ul class="tag-list">
									<?php foreach( $tags as $tag ): ?>
										<li><a href="#"><?php echo esc_html($tag->name); ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
						<div class="social-list-wrap">
							<h4 class="follow">Follow Us:</h4>
							<ul class="social-list">
								<li>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#" class="behance"><i class="fab fa-behance"></i></a>
								</li>
								<li>
									<a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
								</li>
								<li>
									<a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Sidebar Widgets -->

			<?php 
			$unique_ID = get_the_ID();

			$args = array(  
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'post__not_in' => array( $unique_ID )
			);
			$blogs_data = new WP_Query($args);

			if( $blogs_data->have_posts() ):
				?>
				<div class="col-lg-4">
					<div class="sidebar-widget sticky-widget">
						<h3 class="widget-title">Recent Posts</h3>
						
						<?php
						while( $blogs_data->have_posts() ):$blogs_data->the_post();
							?>
							<div class="sidebar-post">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1.jpg" alt="post">
								<div class="post-content">
									<ul class="post-meta">
										<li><i class="fa-regular fa-calendar"></i>
											<?php echo get_the_date('d M, Y'); ?>
										</li>
									</ul>
									<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
						
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ./ Blog Details -->	

<?php
get_footer();
