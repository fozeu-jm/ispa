<?php get_header(); ?>

<!-- Home -->

<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('images/courses_background.jpg'); ?>)"></div>
    </div>
    <div class="home_content">
        <h1>Filières</h1>
    </div>
</div>


<!-- Filieres -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Nos Filères</h1>
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

<?php get_footer(); ?>