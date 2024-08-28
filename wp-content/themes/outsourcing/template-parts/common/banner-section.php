<?php 
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
			<?php echo raithaane_breadcrumb(); ?>

			<!-- <ul class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">About</li>
			</ul> -->
		</div>
	</section>