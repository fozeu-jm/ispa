<?php
get_header();
$title = get_the_title();
?>

<!-- Home -->
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('images/courses_background.jpg'); ?>)"></div>
    </div>
    <div class="home_content tested">
        <h1><?php the_title(); ?></h1>
    </div>
</div>


<!-- Filieres -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Nos Specialités - <?php echo $title; ?></h1>
                </div>
            </div>
        </div>

        <div class="row course_boxes">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'speciality',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                $related = get_field('related_field');
                foreach ($related as $special) {
                    if (get_the_title($special) == $title) {
                        ?>
                        <!-- Popular Course Item -->
                        <div style="margin-bottom: 40px;" class="col-md-6 col-lg-4 course_box">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_field('speciality_img'); ?>" alt="ISPA">
                                <div class="card-body text-center">
                                    <div class="card-title"><a class="no-link" href="#"><?php echo the_title(); ?></a></div>
                                </div>
                                <div class="green-back price_box d-flex flex-row align-items-center">
                                    <div style="margin: auto; ">
                                        <a style="color: white; font-size: 20px;" href="<?php echo site_url('/procedure'); ?>"> 
                                            Inscrivez-vous 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }wp_reset_postdata();
            ?>
        </div>
    </div>		
</div>

<?php get_footer(); ?>