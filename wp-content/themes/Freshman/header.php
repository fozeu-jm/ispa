<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:700,900' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

    </head>
    <body>

        <div class="super_container">

            <!-- Header -->

            <header class="header d-flex flex-row">
                <div class="header_content d-flex flex-row align-items-center">
                    <!-- Logo -->
                    <div class="logo_container">
                        <div  class="logo">
                            <img style="max-width: 100%" src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="">
                        </div>
                    </div>

                    <!-- Main Navigation -->
                    <nav class="main_nav_container">
                        <div class="main_nav">
                            <ul class="main_nav_list">
                                <li class="main_nav_item <?php if (is_front_page()) {
            echo 'active';
        } ?>">
                                    <a class="item" href="<?php echo site_url(''); ?>">Accueil</a>

                                </li>
                                <li class="main_nav_item <?php if (is_page('a-propos')) {
            echo 'active';
        } ?>"><a class="item" href="<?php echo site_url('/a-propos'); ?>">A propos</a></li>
                                <li class="main_nav_item <?php if (is_page('formation')) {
            echo 'active';
        } ?> "><a class="item" href="<?php echo site_url('/formation'); ?>">Formations</a></li>
                                <li class="main_nav_item has-sub <?php if (is_page('procedure') OR is_page('tarifs')) {
            echo 'active';
        } ?>">
                                    <a class="no-link item" href="#">
                                        Admission
                                        <i style="margin-left: 5px; font-size: 12px;" class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul style="" class="sub_nav_list">
                                        <li class="<?php if (is_page('procedure')) {
            echo 'active';
        } ?>">
                                            <a href="<?php echo site_url('/procedure'); ?>" class="sub-item">Procédure</a>
                                        </li>
                                        <li class="<?php if (is_page('tarifs')) {
            echo 'active';
        } ?>">
                                            <a href="<?php echo site_url('/tarifs'); ?>" class="sub-item">Tarifs et financement</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main_nav_item <?php if (get_post_type() == 'post') {
            echo 'active';
        } ?>"><a href="<?php echo site_url('/actualites'); ?>" class="item">Actualités</a></li>
                                <li class="main_nav_item <?php if (is_page('contact')) {
            echo 'active';
        } ?>"><a href="<?php echo site_url('/contact'); ?>" class="item">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="header_side d-flex flex-row justify-content-center align-items-center">
                    <img src="<?php echo get_theme_file_uri('images/phone-call.svg'); ?>" alt="">
                    <a href="tel:+237677688000"><span>+237 677 68 80 00</span></a>
                </div>

                <!-- Hamburger -->
                <div class="hamburger_container">
                    <i class="fas fa-bars trans_200"></i>
                </div>

            </header>

            <!-- Menu -->
            <div class="menu_container menu_mm">

                <!-- Menu Close Button -->
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>

                <!-- Menu Items -->
                <div class="menu_inner menu_mm">
                    <div class="menu menu_mm">
                        <ul class="menu_list menu_mm">
                            <li class="menu_item menu_mm <?php if (is_front_page()) {
            echo 'active';
        } ?>"><a class="mobile" href="<?php echo site_url(''); ?>">Accueil</a></li>
                            <li class="menu_item menu_mm <?php if (is_page('a-propos')) {
            echo 'active';
        } ?>"><a class="mobile" href="<?php echo site_url('/a-propos'); ?>">A propos</a></li>
                            <li class="menu_item menu_mm <?php if (is_page('formation')) {
            echo 'active';
        } ?>"><a class="mobile" href="<?php echo site_url('/formation'); ?>">Formations</a></li>
                            <li class="menu_item menu_mm m_has <?php if (is_page('procedure') OR is_page('tarifs')) {
            echo 'active';
        } ?>">
                                <a class="no-link sub-link closer mobile" href="#">
                                    Admission
                                    <i style="margin-left: 5px; font-size: 12px;" class="signer fa fa-chevron-down"></i>
                                </a>
                                <ul style="" class="m_sublist">
                                    <li class="sublist <?php if (is_page('procedure')) {
            echo 'active';
        } ?>"><a href="<?php echo site_url('/procedure'); ?>" class="sub-item sub-mobile">Procédure</a></li>
                                    <li class="sublist <?php if (is_page('tarifs')) {
            echo 'active';
        } ?>"><a href="<?php echo site_url('/tarifs'); ?>" class="sub-item sub-mobile">tarfis et financement</a></li>
                                </ul>
                            </li>

                            <li class="menu_item menu_mm <?php if (get_post_type() == 'post') {
            echo 'active';
        } ?>"><a class="mobile" href="<?php echo site_url('actualites'); ?>">Actualités</a></li>
                            <li class="menu_item menu_mm <?php if (is_page('contact')) {
            echo 'active';
        } ?>"><a class="mobile" href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                        </ul>

                        <!-- Menu Social -->

                        <div class="menu_social_container menu_mm">
                            <ul class="menu_social menu_mm">
                                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
