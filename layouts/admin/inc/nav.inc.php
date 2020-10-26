<?php
    include(ROOT_PATH. '/Auth/session.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title;?></title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="../layouts/logo.jpg">

        <link rel="stylesheet" href="../layouts/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../layouts/admin/vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../layouts/admin/vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../layouts/admin/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../layouts/admin/vendors/selectFX/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="../layouts/admin/vendors/jqvmap/dist/jqvmap.min.css">
        <link rel="stylesheet" href="../layouts/admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../layouts/admin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="../layouts/admin/css/niceEdit.css">
        <link rel="stylesheet" href="../layouts/admin/css/slider.css">
        <link rel="stylesheet" href="../layouts/admin/assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>

<body>

<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="dashboard.php"><img src="../layouts/logo.jpg" alt="Logo" class="img img-responsive" width="50px"></a>
            <a class="navbar-brand hidden" href="dashboard.php"><img src="../layouts/logo.jpg" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">My Links</h3><!-- /.menu-title -->

                <li class="">
                    <a href="message-index.php"> <i class="menu-icon fa fa-envelope"></i>Message</a>
                </li>

                <li class="">
                    <a href="blog-create.php"> <i class="menu-icon fa fa-arrow-circle-down"></i>Blog Post</a>
                </li>

                <li class="">
                    <a href="mailing-list.php"> <i class="menu-icon fa fa-comment"></i>Mailing List</a>
                </li>

                <li class="">
                    <a href="mail-create.php"> <i class="menu-icon fa fa-paper-plane"></i>Send Mail</a>
                </li>

                <li class="">
                    <a href="service-create.php"> <i class="menu-icon fa fa-pencil-square"></i>Create Services</a>
                </li>

                <li class="">
                    <a href="project-create.php"> <i class="menu-icon fa fa-paperclip "></i>Create Project</a>
                </li>

                <li class="">
                    <a href="testimonial-create.php"> <i class="menu-icon fa fa-podcast"></i>Create Testimonial</a>
                </li>

                <li class="">
                    <a href="faq-create.php"> <i class="menu-icon fa fa-asterisk"></i>FAQ</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="../layouts/admin/images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="profile.php"><i class="fa fa-user"></i> My Profile</a>
                        <a class="nav-link" href="../Auth/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="" href="../index.php"  id="language" >
                        <i class="flag-icon flag-icon-ng"></i>
                    </a>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

