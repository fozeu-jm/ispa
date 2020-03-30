<?php get_header(); ?>


<!-- Home -->
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('images/courses_background.jpg'); ?>)"></div>
    </div>
    <div class="home_content">
        <h1>PROCÉDURE D'ADMISSION</h1>
    </div>
</div>


<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Admissibilité sur étude de dossier</h1>
                </div>
            </div>
        </div>
        <div class="row abt-section">
            <div style="color: black;" class="col-12 procedure">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                ?>
            </div>
            <div class="col-12">
                <span style="font-size: 18px; color: black; margin-right: 10px;">Telecharger la fiche d'inscription : </span>
                <div style="display: inline-block;" class="button button_1 register_button mx-auto trans_200 text-center">

                    <a href="<?php echo get_theme_file_uri('assets/fiche individuelle.pdf'); ?>">
                        Telecharger
                        <i style="margin-left: 5px;" class="fa fa-download" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>



<?php get_footer(); ?>