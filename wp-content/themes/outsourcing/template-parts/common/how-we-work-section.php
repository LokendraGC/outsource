
<?php if( have_rows('how_we_work_details','options') ): ?>
<section class="testimonial-padding">
    <div class="process-wrapper">
        <div class="process-section">
            <div class="shapes">
                <div class="shape shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/process-shape-1.png" alt="shape"></div>
                <div class="shape shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/process-shape-2.png" alt="shape"></div>
                <div class="shape shape-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/process-shape-3.png" alt="shape"></div>
                <div class="shape shape-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/process-shape-4.png" alt="shape"></div>
            </div>
            <div class="container-2">
                <div class="section-heading text-center white-content">
                    <p class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span
                        class="left-shape"></span>Work Proocess</p>
                        <h2 class="section-title" data-text-animation data-split="word" data-duration="1">How we work for
                        you</h2>
                    </div>
                    <div class="row fade-wrapper process-wrap">

                     <?php
                     $count = 1;
                     while( have_rows('how_we_work_details','options') ):the_row();

                        $how_we_title = get_sub_field('ob_h_title','options');
                        $how_we_icon = get_sub_field('ob_w_image','options');

                        ?>
                        <div class="col-lg-2 col-md-6 <?php echo $count == 1 ? 'offset-lg-1' : ''; ?>">
                            <div class="process-card text-center fade-top">
                                <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/process-arrow-1.png" alt="arrow"></div>
                                <?php if( $how_we_icon ): ?>
                                    <div class="icon">
                                        <img src="<?php echo $how_we_icon['url']; ?>" alt="<?php echo $how_we_title; ?>">
                                        <span class="number">0<?php echo $count; ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if( $how_we_title ): ?>
                                <div class="content">
                                    <p class="title"><?php echo $how_we_title; ?></p>
                                </div>
                            <?php endif; ?>
                            </div>
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
<?php 
endif;