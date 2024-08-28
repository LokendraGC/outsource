<?php 

get_header();  

$post_id = get_the_ID(); 
$taxonomy = 'software-category'; 

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



<section class="team-details" data-background="assets/img/bg-img/service-bg.png" style="background-image: url(assets/img/bg-img/service-bg.png);">
	<div class="container-2">
		<div class="row">
			<div class="col-md-12">
				<div class="team-details-wrap section-padding">
					<div class="team-counter-area">
						<?php 
						if( $content_desc = get_field('ob_content_description') ):
							echo $content_desc;
						endif;	
						?>
						<?php if( have_rows('ob_fact__detailss') ): ?>
							<div class="row gy-lg-0 gy-4 justify-content-center">
								<?php
								while( have_rows('ob_fact__detailss') ):the_row();

									$fact_image = get_sub_field('ob_reason_image');
									$fact_title = get_sub_field('ob_reason_title');
									?>
									<div class="col-lg-4 col-md-6">
										<div class="team-counter">
											<?php if( $fact_image ): ?>
												<div class="icon">
													<img src="<?php echo $fact_image['url']; ?>" alt="<?php echo $fact_title; ?>">
												</div>
												<?php 
											endif;
											if( $fact_title ): ?>
												<div class="content">
													<h3><?php echo $fact_title; ?></h3>
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
<!-- ./ team-details -->

<?php if( have_rows('ob_pricing_details') ): ?>
	<section class="pricing-section section-padding">
		<div class="container-2">
			<div class="row gy-lg-0 gy-4 fade-wrapper justify-content-center">
				
				<?php
				while( have_rows('ob_pricing_details') ):the_row();

					$price_icon = get_sub_field('pricing_icon');
					$price_title = get_sub_field('ob_pricing_title');
					$price_desc = get_sub_field('ob_pricing_description');
					if( $price_title ):
						?>
						<div class="col-lg-4 col-md-6 fade-top">
							<div class="pricing-item">
								<?php if( $price_icon ): ?>
									<div class="icon"><img src="<?php echo $price_icon['url']; ?>" alt="<?php echo esc_attr( $price_title ); ?>"></div>
								<?php endif; ?>
								<h3 class="title"><?php echo $price_title; ?></h3>
								<?php if( $price_desc ): ?>

									<?php echo $price_desc; ?>

								<?php endif; ?>
								<a href="#" class="bz-primary-btn pricing-btn">Get A Quote<i class="fa-regular fa-arrow-right"></i></a>
							</div>
						</div>
						<?php 
					endif;
				endwhile;
				?>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- ./ pricing-section -->


<?php if( have_rows('ob_faq_details') ): ?>
	<section class="faq-section section-padding" data-background="assets/img/bg-img/service-bg.png" style="background-image: url(assets/img/bg-img/service-bg.png);">
		<div class="container-2">
			<div class="faq-content">
				<div class="team-counter-area">
					<h2>Frequently Asked Questions</h2>
				</div>
				<div class="faq-accordion fade-wrapper">
					<div class="accordion" id="accordionExample">
						
						<?php
						$count = 1;
						while( have_rows('ob_faq_details') ):the_row();

							$qsn = get_sub_field('obi_faq_question');
							$ans = get_sub_field('obi_faq_answer');
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

<?php if( $why_outsource = get_field('ob_why_outsource') ): ?>
<section class="service-details section-padding">
	<div class="container-2">
		<div class="service-details-content team-counter-area">
		<?php echo $why_outsource; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<!-- ./ footer-section -->

<!-- Consulting part -->
<?php get_template_part('template-parts/common/consulting-section');  ?>

<?php 
get_footer();