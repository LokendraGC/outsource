<?php 
get_header();
/* Template Name: Our Team */

get_template_part('template-parts/common/banner-section');


$args = array(  
	'post_type' => 'team',
	'post_status' => 'publish',
	'posts_per_page' => -1, 
);
$team_details = new WP_Query($args);

if( $team_details->have_posts() ):
	?>

<section class="team-section-4 section-padding">
	<div class="container">
		<div class="row gy-4 justify-content-center fade-wrapper">
			<?php
			while( $team_details->have_posts() ):$team_details->the_post();
				$designation = get_field('brm_designation');
				?>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="team-card fade-top inner-team">
					<div class="overlay"></div>
					<div class="overlay-2"></div>
					<?php if( has_post_thumbnail() ): ?>
					<div class="team-member">
						<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(the_title()); ?>">
					</div>
				<?php endif; ?>
					<div class="team-content">
						<h4 class="title"><?php the_title(); ?></h4>
						<span><?php echo $designation; ?></span>
					</div>
					<div class="hover-content-wrap">
						<div class="hover-content">
							<h4 class="title"><?php the_title(); ?></h4>
							<span><?php echo $designation; ?></span>
							<?php the_content(); ?>
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
<!-- ./ team-section-4 -->
<?php 
endif;
get_footer();