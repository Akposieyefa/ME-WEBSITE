<?php
    include(ROOT_PATH. '/App/Classes/Service.class.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="layouts/logo.jpg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="layouts/css/bootstrap.min.css">
    <link rel="stylesheet" href="layouts/css/owl.carousel.min.css">
    <link rel="stylesheet" href="layouts/css/magnific-popup.css">
    <link rel="stylesheet" href="layouts/css/font-awesome.min.css">
    <link rel="stylesheet" href="layouts/css/themify-icons.css">
    <link rel="stylesheet" href="layouts/css/nice-select.css">
    <link rel="stylesheet" href="layouts/css/flaticon.css">
    <link rel="stylesheet" href="layouts/css/gijgo.css">
    <link rel="stylesheet" href="layouts/css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="layouts/css/slicknav.css">
    <link rel="stylesheet" href="layouts/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Welcome to Management Edge Limited</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> info@managementedgeltd.ng</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i>  09-291-7877</a></li>
                                    </ul>
                                </div>
                                <div class="social_media_links">
                                    <a href="https://www.facebook.com/managementedge">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://www.twitter.com/managementedge">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="https://www.instagram.com/managementedge">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="layouts/logo.jpg" alt="" class="img img-responsive" width="60px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="service.php">Services <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <?php
                                                        $getServices    =  Service::getAllService();
                                                        $i = 0;
                                                        if(is_array($getServices) || is_object($getServices)) {
                                                            foreach($getServices  as $key => $value) {
                                                            $id    = htmlentities($value["id"]);
                                                            $name  = htmlentities($value["name"]);
                                                            $i ++;
                                                    ?>
                                                    <li><a href="service.php"><?php echo $name;?></a></li>
                                                    <?php } } ?>
                                                </ul>
                                            </li>
                                            <li><a href="projects.php">Project</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="http:\\lms.managementedgeltd.com">ME-Learning</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->