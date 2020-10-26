<?php
    include ('../path.php');
    $title = "Dashboard";
    include(ROOT_PATH . '/layouts/admin/inc/nav.inc.php');
    include_once(ROOT_PATH . '/bootstrap/bootstrap.php');
?>

    <div class="content mt-3">

        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success </span> You have successfully logged in as <?php echo strtolower($_SESSION['session']['email']) ;?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>


        <div class="col-sm-6 col-lg-4">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="mailing-list.php">Mailing List</a>
                                <a class="dropdown-item" href="mail-create.php">Send Mail Blast</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count"><?php echo count(Mailing::getAllMail());?></span>
                    </h4>
                    <p class="text-light">Mailing List</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart2"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-4">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="message-index.php">Message</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count"><?php echo count(Contact::getAllContact());?></span>
                    </h4>
                    <p class="text-light">Messages</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart2"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <!--/.col-->


        <div class="col-sm-6 col-lg-4">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="blog-create.php">Create Blog</a>
                                <a class="dropdown-item" href="blog-index.php">Blog Index</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count"><?php echo count(Blog::getAllBlog());?></span>
                    </h4>
                    <p class="text-light">Blog Post</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart2"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <!--/.col-->

    </div> <!-- .content -->

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Welcome to Management Edge Limited</strong>
                        </div>
                        <div class="card-body">
                            <div class="slider" id="main-slider" >
                                <div class="slider-wrapper">
                                    <img src="../layouts/admin/images/img/blog-5.jpg" alt="First" class="slide"  />
                                    <img src="../layouts/admin/images/img/blog-6.jpg" alt="Second" class="slide" />
                                    <img src="../layouts/admin/images/img/classes-5.jpg" alt="Third" class="slide" />
                                    <img src="../layouts/admin/images/img/classes-2.jpg" alt="Forth" class="slide" />
                                    <img src="../layouts/admin/images/img/classes-3.jpg" alt="Fifth" class="slide" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

</div><!-- /#right-panel -->

<?php include_once(ROOT_PATH . '/layouts/admin/inc/footer.inc.php');?>

