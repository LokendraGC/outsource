<?php 

get_header();  

$post_id = get_the_ID(); 
$taxonomy = 'service-category'; 

$terms = get_the_terms($post_id, $taxonomy);


$banner_image = get_field('banner_image');
if( $banner_image ){
	$banner_img = $banner_image['url'];
}else{
	$banner_img = get_template_directory_uri() . "/assets/img/banner/banner-breadcrumb.jpg";
}
?>

<section class="page-header">
	<div class="bg-img" data-background="<?php echo $banner_img; ?>"></div>
	<div class="overlay"></div>
	<div class="shapes">
		<div class="shape shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/pager-header-shape-2.png" alt="shape"></div>
	</div>
	<div class="container-2">
		<div class="page-header-content">
			<h1 class="title"><?php the_title(); ?></h1>
			<ul class="breadcrumb">
				<li><a href="<?php echo site_url('/'); ?>">Home</a></li>
				<?php 
				if( $terms ){
					foreach ($terms as $term) {
						?>

						<li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
						<?php	
					}
				}
				?>
				<li class="active"><?php the_title(); ?></li>
			</ul>
		</div>
	</section>


<section class="faq-section section-padding">
	<div class="container-2">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-content-4">
						<div class="section-heading mb-30">
							<h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span><?php echo get_bloginfo(); ?></h4>
							<?php the_content(); ?>
						</div>
				</div>
				</div>
					<?php if( has_post_thumbnail() ): ?>
				<div class="col-lg-6">
					<div class="faq-img img-reveal">
						<div class="img-overlay"></div>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Service Image">
					</div>
				</div>
			<?php endif; ?>
			</div>
		
	</section>
	<!-- ./ request-section -->


	<?php if( $skills = get_field('ob_skill_content') ): ?>
	<section class="team-details" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);">
		<div class="container-2">
			<div class="row">
				<div class="col-md-12">
					<div class="team-details-wrap section-padding">
						<div class="team-counter-area">
							<?php echo $skills; ?>
								<?php if( have_rows('skill_and_experties') ): ?>
							<div class="row gy-lg-0 gy-4 justify-content-center">

								<?php
								 while( have_rows('skill_and_experties') ):the_row();

								 	$skill_icon = get_sub_field('ob_skill_icon');
								 	$skill_title = get_sub_field('ob_title');
								 ?>
								<div class="col-lg-4 col-md-6">
									<div class="team-counter">
										<?php if( $skill_icon ): ?>
										<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/bill.png" alt="icon"></div>
									<?php endif; ?>
									<?php if( $skill_title ): ?>
										<div class="content">
											<h3><?php echo $skill_title; ?></h3>
										</div>
									<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
	<!-- ./ team-details -->

	<?php if( $data_entry = get_field('data_entry_details') ): ?>
	<section class="team-details section-padding">
		<div class="container-2">
			<div class="team-counter-area">
				<h2>Data Entry Services</h2>
				<?php echo $data_entry; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

	<?php if( have_rows('faq_details') ): ?>
	<section class="faq-section section-padding" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);">
		<div class="container-2">
			<div class="faq-content">
				<div class="team-counter-area">
					<h2>Frequently Asked Questions</h2>
				</div>
				<div class="faq-accordion fade-wrapper">
					<div class="accordion" id="accordionExample">
						
						<?php
						$count = 1;
						 while( have_rows('faq_details') ):the_row();

						 	$qsn = get_sub_field('ob_question');
						 	$ans = get_sub_field('ob_answer');
						 ?>
						<div class="accordion-item fade-top">
							<?php if( $qsn ): ?>
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button <?php echo $count== 1 ? '':'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $count; ?>" aria-expanded="<?php echo $count== 1 ? 'true':''; ?>" aria-controls="collapseOne<?php echo $count; ?>">
									<?php echo $qsn; ?>
								</button>
							</h2>
						<?php endif; ?>
						<?php if( $ans ): ?>
							<div id="collapseOne<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $count == 1 ? 'show' : ''; ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<?php echo $ans; ?>
								</div>
							</div>
						<?php endif; ?>
						</div>
					<?php
					$count++;
					 endwhile;
					  ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
	<!-- ./ request-section -->

	<?php if( $desc_section = get_field('ob_describe') ): ?>
	<section class="team-details">
		<div class="container-2">
			<div class="row">
				<div class="col-md-12">
					<div class="team-details-wrap section-padding">
						<div class="team-counter-area">
							<h2 class="title"><?php echo get_bloginfo(); ?></h2>
							<?php echo $desc_section; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
	<!-- ./ team-details -->

<?php
get_template_part('template-parts/common/consulting-section');

get_footer();