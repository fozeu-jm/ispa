<?php get_header(); ?>

<!-- Home -->
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('images/contact_background.jpg'); ?>)"></div>
    </div>
    <div class="home_content">
        <h1>Contact</h1>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- Contact Form -->
                <div class="contact_form">
                    <div class="contact_title">Contactez-nous</div>

                    <div class="contact_form_container">
                        <?php
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                        ?>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="about">
                    <div class="about_title">Rejoignez L'ISPA</div>
                    <p class="about_text">
                        In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, 
                        vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus 
                        tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus 
                        risus facilisis ultricies. Etiam eu purus nec eros varius luctus.
                    </p>

                    <div class="contact_info">
                        <ul>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <i style="font-size: 18px; color: #009941;" class="fa fa-map-marker"></i>
                                </div>
                                Cameroun Yaounde, Nkomkana
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <i style="font-size: 18px; color: #009941;" class="fa fa-mobile"></i>
                                </div>
                                +237 677 68 80 00
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <i style="font-size: 18px; color: #009941;" class="fa fa-envelope"></i>
                                </div>contact@ispa-sup.com
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<?php get_footer(); ?>