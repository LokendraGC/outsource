<?php 

get_header(); 

if( have_rows('r_slider_details') ): ?>
    <div class="slider-section">
        <div class="bizan-slider swiper-container">
            <div class="swiper-wrapper">

             <?php
             while( have_rows('r_slider_details') ):the_row();

                $desc = get_sub_field('slider_description');
                $image = get_sub_field('slider_image');
                $link_url = get_sub_field('contact_button')['url'];
                $link_title = get_sub_field('contact_button')['title'];
                ?>
                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="shapes">
                            <div class="shape shape-1" data-animation="bizan-fadeInLeft" data-delay="1000ms"
                            data-duration="1200ms"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/hero-bg-shape-1.png" alt="shape"></div>
                            <div class="shape shape-2" data-animation="bizan-fadeInUp" data-delay="1200ms"
                            data-duration="1400ms"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/hero-shape-5.png" alt="shape"></div>
                            <div class="color-shape" data-animation="bizan-fadeInUp" data-delay="1200ms"
                            data-duration="1400ms"></div>
                            <div class="color-shape-2"></div>
                        </div>
                        <?php if( $image ): ?>
                            <div class="slide-img-wrap">
                                <img decoding="async" src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>"
                                class="slide-img kenburns kenburns-top">
                            </div>
                        <?php endif; ?>
                        <div class="slider-content-wrap">
                            <div class="container-2">
                                <div class="hero-content-2">
                                    <div class="section-heading white-content mb-30">

                                        <p class="sub-heading" data-animation="bizan-fadeInUp" data-delay="1000ms"
                                        data-duration="1200ms"><span class="left-shape"></span><?php echo get_bloginfo(); ?></p>
                                        
                                        <?php if( $title = get_sub_field('slider_title') ): ?>
                                            <p class="section-title" data-animation="bizan-fadeInUp" data-delay="1200ms"
                                            data-duration="1400ms"><?php echo $title; ?></p>
                                        <?php endif; ?>

                                    </div>

                                    <?php if( $desc ): ?>
                                        <p data-animation="bizan-fadeInUp" data-delay="1400ms" data-duration="1600ms"><?php echo $desc; ?></p>
                                    <?php endif; ?>
                                    <?php if( $link_url || $link_title ): ?>
                                        <a href="<?php echo $link_url; ?>" class="bz-primary-btn about-btn" data-animation="bizan-fadeInUp"
                                            data-delay="1600ms" data-duration="1800ms"><?php echo $link_title; ?> <i
                                            class="fa-regular fa-arrow-right"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>
            <div class="bizan-swiper-pagination"></div>
        </div>
    </div>
<?php endif; ?>
<!-- ./ slider-section -->

<section class="about-section-4 section-padding">
    <div class="container">
        <div class="row align-items-center fade-wrapper">
            <div class="col-lg-6 col-md-12">
                <?php if( has_post_thumbnail() ): ?>
                    <div class="about-img-3 img-reveal" style="visibility: visible;">
                        <div class="img-overlay overlay-2" style="width: 0%;"></div>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="about image"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content-4">
                    <?php if( the_content() ): ?>
                        <div class="section-heading">
                            <p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span
                                class="left-shape"></span>About Us</p>

                                <?php the_content(); ?>
                                <div class="about-btn-wrap fade-top">
                                    <a href="<?php echo site_url('about-us'); ?>" class="bz-primary-btn about-btn">Read Details <i
                                        class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ./ about-section -->

            <section class="section-padding" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);">
                <div class="about-wrap-2">
                    <div class="container-2">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <div class="about-content-2 fade-wrapper">
                                    <div class="section-heading mb-40">
                                        <p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span
                                            class="left-shape"></span>Why Choose Us?</p>
                                            <?php if( $why_us_content = get_field('wcu_description') ): ?>
                                                <?php echo $why_us_content; ?>
                                            <?php endif; ?>
                                        </div>

                                        <?php if( have_rows('objectives') ): ?>
                                            <div class="about-items">
                                                
                                                <?php
                                                while( have_rows('objectives') ):the_row();

                                                    $wh_icon = get_sub_field('obj_image');
                                                    $wh_title = get_sub_field('obj_title');
                                                    $wh_desc = get_sub_field('obj_detail');
                                                    ?>
                                                    <div class="about-item fade-top">
                                                        <?php if( $wh_icon ): ?>
                                                            <div class="icon">
                                                                <img src="<?php echo $wh_icon['url']; ?>"
                                                                alt="<?php echo $wh_title; ?>">
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if( $wh_desc || $wh_title ): ?>
                                                            <div class="content">
                                                                <p class="title"><?php echo $wh_title; ?></p>
                                                                <p><?php echo $wh_desc; ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <div class="about-img-wrap-2">
                                        <div class="about-counter text-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/process-arrow-1.png" alt="outsourcebookkeeping">
                                        </div>
                                        <div class="about-images">
                                            <?php if( $first_img = get_field('second_image') ): ?>
                                                <img class="about-img img-1" 
                                                src="<?php echo $first_img['url']; ?>" alt="about">
                                            <?php endif; ?>

                                            <?php if( $second_img = get_field('first_image') ): ?>
                                                <img class="about-img img-2" 
                                                src="<?php echo $second_img['url']; ?>" alt="about">
                                            <?php endif; ?>

                                            <?php if( $vdo_banner = get_field('video_banner') ): ?>
                                                <div class="about-img-overlay">
                                                    <img class="about-img img-3" src="<?php echo $vdo_banner['url']; ?>" alt="video banner image">
                                                    <div class="overlay"></div>
                                                    <?php if( $vdo_url = get_field('video_url') ): ?>
                                                        <div class="video-btn">
                                                            <a class="video-popup venobox" data-autoplay="true" data-vbtype="video"
                                                            href="<?php echo $vdo_url; ?>">
                                                            <div class="play-btn">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/about-video-btn.png" alt="img">
                                                            </div>
                                                            <span>See How It Works</span>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ process-section -->
            </section>
            <!-- ./ about-section -->

            <?php 
            $args = array(  
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => 4
            );
            $service_data = new WP_Query($args);
            if( $service_data->have_posts() ):
                ?>
                <section class="service-section-2 section-padding">
                    <div class="container-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="service-left-content sticky-widget fade-wrapper">
                                    <div class="section-heading">
                                        <p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span
                                            class="left-shape"></span>Our SERVICES</p>
                                            <?php if( $our_service = get_field('service_description') ): ?>
                                                <?php echo $our_service; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="service-btn-anim fade-top">
                                            <a href="<?php echo site_url('services'); ?>" class="bz-primary-btn">View our services</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <div class="service-items fade-wrapper">
                                        <?php
                                        while( $service_data->have_posts() ):$service_data->the_post();
                                            $service_icon = get_field('ob_service_icon');
                                            ?>
                                            <div class="service-item-2 fade-top">
                                                <div class="icon">
                                                    <img src="<?php echo $service_icon['url']; ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <div class="content">
                                                    <p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                                    <p><?php echo wp_trim_words( get_the_content(),15 ); ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
                <!-- ./ service-section -->

                <!-- How We Work -->
                <?php get_template_part('template-parts/common/how-we-work-section'); ?>

                <?php 
                $args = array(  
                    'post_type' => 'testimonial',
                    'post_status' => 'publish',
                    'posts_per_page' => -1 
                );
                $testi_data = new WP_Query($args);

                if( $testi_data->have_posts() ):
                    ?>
                    <section class="testimonial-section-3 overflow-hidden testimonial-padding">
                        <div class="container-2">
                            <div class="section-heading text-center">
                                <p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span
                                    class="left-shape"></span>Testimonial</p>
                                    <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">What Our Clients Say
                                    </h2>
                                </div>
                                <div class="testi-carousel-2 swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                        while( $testi_data->have_posts() ):$testi_data->the_post();
                                            
                                            $designation = get_field('wtn_testimonial_designation');
                                            $rating = get_field('wtn_rating');
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="testi-item-2">
                                                    <div class="testi-top">
                                                        <div class="testi-author content">

                                                            <?php if( has_post_thumbnail() ): ?>
                                                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                                            <?php endif; ?>

                                                            <?php if( the_title() ): ?>
                                                                <p class="name"><?php the_title(); ?>
                                                                <span><?php echo $designation; ?></span>
                                                            </p>
                                                        <?php endif; ?>

                                                    </div>
                                                    <?php if( $rating ): ?>
                                                        <ul class="review">
                                                            <?php for( $i = 1; $i<= $rating; $i++ ){ ?>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </div>
                                                <p><?php the_content(); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <div class="swiper-pagination" style="--bz-color-theme-primary: #EC281C"></div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
                <!-- ./ testimonial-section -->

                <?php if( have_rows('fact_details','options') ): ?>
                    <section class="counter-section section-padding" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/banner/bannere.jpg">
                        <div class="overlay"></div>
                        <div class="shapes">
                            <div class="shape shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/counter-shape-1.png" alt="shape"></div>
                            <div class="shape shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/counter-shape-2.png" alt="shape"></div>
                        </div>
                        <div class="container">
                            <div class="row gy-lg-0 gy-4 fade-wrapper">
                                <?php
                                while( have_rows('fact_details','options') ):the_row();

                                    $fact_title = get_sub_field('fact_title','options');
                                    $fact_image = get_sub_field('fact_image','options');
                                    $fact_count = get_sub_field('number','options');
                                    $fact_range = get_sub_field('fact_range','options');
                                    ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="counter-item fade-top">
                                            <?php if( $fact_image ): ?>
                                             <div class="icon">
                                                <div class="icon-inner">
                                                    <img src="<?php echo $fact_image['url']; ?>" alt="<?php echo $fact_title; ?>">
                                                </div>
                                                <div class="shape"></div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if( $fact_title ): ?>
                                            <div class="counter-content">
                                                <h3 class="title">
                                                    <?php if( $fact_count ): ?>
                                                        <span class="odometer" data-count="<?php echo $fact_count; ?>">0</span>
                                                    <?php endif; ?>
                                                </h3>
                                                <p><?php echo $fact_title; ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!-- Blogs -->
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
                <section class="section-padding">
                    <div class="container">
                        <div class="section-heading text-center">
                            <p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span
                                class="left-shape"></span>News Blog</p>
                                <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Latest News &
                                Articles</h2>
                            </div>
                            <div class="row gy-4 justify-content-center">
                              
                                <?php
                                while( $blogs_data->have_posts() ):$blogs_data->the_post();
                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="post-card fade-top">
                                            <div class="post-thumb">
                                                <?php if( has_post_thumbnail() ): ?>
                                                    <img class="post-thumb" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="post-content-wrap">
                                                <div class="post-content">
                                                    <ul class="post-meta">
                                                        <li><i class="fa-regular fa-calendar"></i><?php echo get_the_date('d M,Y'); ?></li>
                                                    </ul>
                                                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                </div>
                                                <div class="post-bottom">
                                                    <a class="read-more" href="<?php the_permalink(); ?>">Read More<i
                                                        class="fa-solid fa-chevrons-right"></i></a>
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
                    <?php endif; ?>
                    <!-- ./ blog-section -->

                    <?php if( $partners = get_field('brm_partners_images','options') ): ?>
                        <section class="sponsor-section section-padding" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);">
                            <div class="container">
                                <div class="section-heading text-center">
                                    <p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span
                                        class="left-shape"></span>Partner</p>
                                        <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Our Partners</h2>
                                    </div>
                                    <?php if( $partner_text = get_field('partner_text','options') ): ?>
                                        <h3 class="sponsor-text-wrap">
                                            <span></span>
                                            <span class="sponsor-text">
                                                <?php echo $partner_text; ?></span>
                                                <span></span>
                                            </h3>
                                        <?php endif; ?>
                                        <div class="sponsor-carousel swiper">
                                            <div class="swiper-wrapper">
                                             <?php foreach( $partners as $partner ): ?>
                                                <div class="swiper-slide">
                                                    <div class="sponsor-item text-center">
                                                        <a href="#">
                                                            <img src="<?php echo $partner['sizes']['large']; ?>" alt="partner image"></a>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?php endif; ?>
                            <!-- ./ sponsor-section -->

                            <?php
                            get_template_part('template-parts/common/consulting-section'); 
                            get_footer();