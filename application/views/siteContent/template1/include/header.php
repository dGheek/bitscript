<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="<?php echo $this->security->xss_clean($this->siteDescription) ?>">
    <meta name="keywords" content="<?php echo $this->security->xss_clean($this->siteKeywords) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $pageTitle ?></title>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo base_url(); ?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->favicon ?>" />

    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/bootstrap.css">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/font-awesome.min.css">
    <!--Magnific css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/magnific-popup.css">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/owl.theme.default.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/animate.min.css">
    <!--Nice Select css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/nice-select.css">
    <!--Slicknav css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/slicknav.min.css">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/style.css">
    <!--Responsive css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/responsive.css">
</head>

<body>

    <!-- Header Area Start -->
    <header class="finves-header-area">
        <!-- Header Top Area Start -->
        <div class="finves-header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header-top-left">
                            <p><i class="fa fa-envelope-o"></i><?php echo $this->security->xss_clean($companyInfo['email']) ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header-top-right">
                            <div class="header-top-auth">
                                <a href="<?php echo base_url() ?>login"><i class="fa fa-user"></i>SignIn</a>
                            </div>
                            <div class="header-top-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Area End -->
        <!-- Logo Area Start -->
        <div class="finves-logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="site-logo">
                            <a href="<?php echo base_url(); ?>">
                                <img id="dark-logo" class="logo-img logo-small hidden" src="<?php echo $this->security->xss_clean($this->logoDark); ?>" alt="logo">
                            </a>
                        </div>
                        <!-- Responsive Menu Start -->
                        <div class="finves-responsive-menu"></div>
                        <!-- Responsive Menu End -->
                    </div>
                    <div class="col-lg-7">
                        <div class="mainmenu">
                            <nav>
                                <ul id="navigation_menu">
                                    <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                                    <li><a href="<?php echo base_url() ?>#about">About us</a></li>
                                    <li><a href="<?php echo base_url() ?>#services">Services</a></li>
                                    <li><a href="<?php echo base_url() ?>#pricing">Pricing</a> </li>
                                    <li><a href="<?php echo base_url() ?>login">Login</a></li>
                                    <li><a href="<?php echo base_url() ?>signup">Register</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="header-action">
                            <a href="<?php echo base_url() ?>signup">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logo Area End -->
    </header>
    <!-- Header Area End -->