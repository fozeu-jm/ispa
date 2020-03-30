<?php get_header(); ?>

<!-- Home -->

<div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'slider',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(<?php echo get_field('slider_backgound'); ?>)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="text-transform: capitalize;" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><?php echo get_field('caption'); ?></h1>
                        </div>
                    </div>
                </div>
            <?php }wp_reset_postdata(); ?>
        </div>

        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>

        <div class="hero_boxes">
            <div class="hero_boxes_inner">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 hero_box_col">
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                                <img src="<?php echo get_theme_file_uri('images/earth-globe.svg'); ?>" class="svg" alt="ISPA">
                                <div class="hero_box_content">
                                    <h2 class="hero_box_title">Admission</h2>
                                    <a href="<?php echo site_url('/procedure'); ?>" class="hero_box_link">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 hero_box_col">
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                                <img src="<?php echo get_theme_file_uri('images/books.svg'); ?>" class="svg" alt="ISPA">
                                <div class="hero_box_content">
                                    <h2 class="hero_box_title">Nos Filières</h2>
                                    <a href="<?php echo site_url('/formation'); ?>" class="hero_box_link">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 hero_box_col">
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                                <img src="<?php echo get_theme_file_uri('images/professor.svg'); ?>" class="svg" alt="ISPA">
                                <div class="hero_box_content">
                                    <h2 class="hero_box_title">ISPA-SUP</h2>
                                    <a href="<?php echo site_url('/a-propos'); ?>" class="hero_box_link">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ####### Welcome Section ###### -->
<?php
while (have_posts()) {
    the_post();
    ?>
    <section class="welcome-section" style="padding: 80px 0 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <h1 style="font-size: 55px; margin-bottom: 15px; color: #009941;"><?php echo get_field('title'); ?></h1>
                    <div style="text-align: justify; color: black;">
                        <?php echo get_field('description'); ?>
                    </div>
                </div>
                <div class="offset-md-1 col-md-7">
                    <img style="max-width: 100%; border-radius: 5px;" src="<?php echo get_field('image'); ?>" alt="ISPA">
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- Filieres -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 class="capital">Nos Filères</h1>
                </div>
            </div>
        </div>

        <div class="row course_boxes">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'filiere',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                $id = get_the_title();
                $link = get_the_permalink();
                ?>
                <!-- Popular Course Item -->
                <div style="margin-bottom: 40px;" class="col-md-6 col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_field('image'); ?>" alt="ISPA">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="<?php echo $link; ?>"><?php the_title() ?></a></div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_name"><span>Nombres de specialités (<?php echo countSpecial($id); ?>)</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <a href="<?php echo $link; ?>"><i class="fa fa-plus plusi"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }wp_reset_postdata(); ?>
        </div>
    </div>		
</div>

<!-- why choose us -->
<div class="register">

    <div class="container-fluid">

        <div class="row row-eq-height">
            <div class="col-lg-6 nopadding">

                <!-- Register -->
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title"><?php echo get_field('titre_1'); ?></h1>
                            <p style="text-align: justify;" class="register_text">
                                <?php echo get_field('why_description'); ?>
                            </p>
                            <!--                        <div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>-->
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 nopadding">
                    <!-- Search -->

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image: linear-gradient(rgba(115, 115, 115, 0.6), rgba(115,115,115, 0.6) ), url(<?php echo get_theme_file_uri('images/search_background.jpg'); ?>);"></div>
                        <div class="search_content text-center">
                            <h1 style="text-transform: uppercase;" class="search_title"><?php echo get_field('titre_2'); ?></h1>
                        <?php } ?>
                        <!-- Accordions -->
                        <div style="margin-top: 57px;" class="elements_accordions">
                            <?php
                            $custom = new WP_Query(array(
                                'post_type' => 'raison',
                                'post_status' => 'publish',
                                'posts_per_page' => '-1',
                            ));
                            while ($custom->have_posts()) {
                                $custom->the_post();
                                ?>
                                <div class="accordion_container">
                                    <div class="accordion d-flex flex-row align-items-center"> <?php the_title(); ?></div>
                                    <div class="accordion_panel">
                                        <p>
                                            <?php the_content(); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php }wp_reset_postdata(); ?>

                        </div>
                    </div> 
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Nos Atout -->
<div style="padding-bottom: 0px;" class="services page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 class="capital">Nos Atouts</h1>
                </div>
            </div>
        </div>

        <div class="course_boxes">
            <div class="slider-container">
                <div class="service-slider owl-carousel">
                    <?php
                    $custom = new WP_Query(array(
                        'post_type' => 'assets',
                        'post_status' => 'publish',
                        'posts_per_page' => '-1',
                    ));
                    while ($custom->have_posts()) {
                        $custom->the_post();
                        ?>
                        <!-- Popular Course Item -->
                        <div class="course_box">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_field('asset_image'); ?>" alt="ISPA">
                                <div class="card-body text-center">
                                    <div style="margin-top: 40px;" class="card-title"><a class="no-link" href="#"><?php the_title(); ?></a></div>
                                    <div style="text-align: justify; font-size: 16px;padding-bottom: 40px; margin-bottom: 40px;" class="card-description">
                                        <?php the_content(); ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } wp_reset_postdata(); ?>
                </div>

            </div>

        </div>

    </div>
    <div style="box-shadow: 0px 0px 45px 10px rgba(0,0,0,0.1);" class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">Prec</span></div>
    <div style="box-shadow: 0px 0px 45px 10px rgba(0,0,0,0.1);" class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">Suiv</span></div>
</div>


<!-- #### gallery #### -->
<div style="" class="services page_section">
    <div class="container">
        <div style="margin-bottom: 20px;" class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 style="text-transform: capitalize;">ISPA en image</h1>
                </div>
            </div>
        </div>

        <div style="padding-top: 40px;" class="row text-center">
            <div class="col-lg-9 mx-auto">
                <div class="full-width gallery-container">
                    <div class="gallery-slider owl-carousel zoom-gallery" >
                        <?php
                        while (have_posts()) {
                            the_post();
                            $images = acf_photo_gallery('gallery', get_the_ID());
                            $img_count = count($images);
                            $counter = 0;
                            for ($counter = 0; $counter < $img_count; $counter++) {
                                ?>
                                <a href="<?php echo $images[$counter]['full_image_url'] ?>" title="<?php echo $images[$counter]['title'] ?>">
                                    <img src="<?php echo $images[$counter]['full_image_url'] ?>" alt="ISPA">
                                </a>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div style="box-shadow: 0px 0px 45px 10px rgba(0,0,0,0.1);" class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">Prec</span></div>
            <div style="box-shadow: 0px 0px 45px 10px rgba(0,0,0,0.1);" class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">Suiv</span></div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="testimonials page_section">
    <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url(<?php echo get_theme_file_uri('images/testimonials_background.jpg'); ?>)"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 class="capital">Nos Témoinages</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider">

                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'testimonial',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            ?>
                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <div class="testimonials_text">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="<?php the_field('test_img'); ?>" alt="ISPA">
                                        </div>
                                        <div class="testimonial_name"><?php the_title(); ?></div>
                                        <div class="testimonial_title"><?php the_field('test_title'); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } wp_reset_postdata(); ?>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- Events -->
<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 style="text-transform: uppercase;">Nos Actualités</h1>
                </div>
            </div>
        </div>

        <div class="event_items">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Event Item -->
                <div class="row event_item">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">

                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day"><?php the_time('d') ?></div>
                                    <div class="event_month"><?php the_time('F') ?></div>
                                </div>
                            </div>

                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"><a class="trans_200" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <div style="text-transform: uppercase;" class="event_location"><?php the_author(); ?></div>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    <img src="<?php the_field('post_img'); ?>" alt="ISPA">
                                </div>
                            </div>

                        </div>	
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>

        </div>

    </div>
</div>





<?php get_footer(); ?>