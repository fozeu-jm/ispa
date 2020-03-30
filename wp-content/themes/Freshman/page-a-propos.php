<?php get_header() ?>


<!-- Home -->
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('images/courses_background.jpg'); ?>)"></div>
    </div>
    <div class="home_content">
        <h1>A propos</h1>
    </div>
</div>

<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <span class="mini-title">The Best</span>
                    <h3 class="abt-title">Nous Sommes ISPA !</h3>
                </div>
            </div>
        </div>
        <div class="row abt-section">
            <div class="col-md-6 abt-text">
                Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. 
                Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, 
                sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, 
                a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum.
            </div>
            <div class="col-md-6 abt-text">
                Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. 
                Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, 
                sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, 
                a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum.
            </div>
        </div>
    </div>
</div>

<!-- #### gallery #### -->
<div style="padding-top: 0px;" class="services page_section">
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
                        $custom = new WP_Query(array(
                            'post_type' => 'page',
                            'p' => 15,
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
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



<?php get_footer(); ?>