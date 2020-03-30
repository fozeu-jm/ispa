<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
    ?>
    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('images/news_background.jpg)'); ?>"></div>
        </div>
        <div class="home_content">
            <h1 style="text-transform: uppercase;">actualités</h1>
        </div>
    </div>

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Post Column -->

                <div class="col-12">

                    <div class="news_post_container">
                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image">
                                <img src="<?php the_field('post_img'); ?>" alt="ISPA">
                            </div>
                            <div class="news_post_top d-flex flex-column flex-sm-row">
                                <div class="news_post_date_container">
                                    <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                        <div><?php the_time('d') ?></div>
                                        <div><?php the_time('F') ?></div>
                                    </div>
                                </div>
                                <div class="news_post_title_container">
                                    <div class="news_post_title">
                                        <a class="no-link" href="#"><?php the_title(); ?></a>
                                    </div>
                                    <div class="news_post_meta">
                                        <span class="news_post_author"><a href="#">By <?php the_author(); ?></a></span>
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: justify;" class="news_post_text">
                                <?php the_content(); ?>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>


    <?php
}

get_footer();
?>
