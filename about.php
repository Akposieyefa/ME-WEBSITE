<?php
    include ('path.php');
    $title = "About";
    include_once(ROOT_PATH. '/layouts/inc/nav.inc.php');
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- about_info_area start  -->
    <div class="about_info_area plus_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h4><strong>About Management Edge</strong> </h4>
                        <p class="text-justify">
                            We are recognized leader in innovative solutions that assist individuals, organizations and governments excel in business. Our organization provides professional services with specialization in Information Communications Technology, IT service Management, Project Management, Training and consultancy services.
                            We brings together a multi-disciplined team that is able to undertake every aspect of IT infrastructure design development, outsourcing, installation, training and ongoing support
                        </p>
                        <a href="#" class="boxed-btn3">About Us</a>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="layouts/service/about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /about_info_area end  -->

    <div class="col-md-12">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Our Mission</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Maintain in superior quality Information Technology and Management services at all times</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Our Vission</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Assist individuals, organisations and governments excel in business by providing the much needed resources, skills and knowledge
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><br/><br/>

<!-- counter_area  -->
<?php include_once(ROOT_PATH. '/layouts/inc/experience.inc.php');?>
<!-- END OF COUNT AREA-->


    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>What we Do?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $i;
                    foreach($getServices  as $key => $value) {
                        $id    = htmlentities($value["id"]);
                        $name = $value['name'];
                        $desc = Format::textShorten($value['description'],50);
                        $i++;
                ?>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <img src="layouts/img/svg_icon/<?php  echo $i;?>.svg" alt="">
                            </div>
                            <h3><strong><?php echo $name;?></strong></h3>
                            <p><?php echo $desc;?></p>
                            <a href="service.php" class="learn_more">Learn More</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- team_area  -->
    <div class="team_area minus_padding">
        <div class="container">
            <div class="border_bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-40 text-center">
                            <h3>
                                Expert Team
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="layouts/img/team/3.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Milani Mou</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="layouts/img/team/2.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Jasmine Pinky</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="layouts/img/team/1.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Piya Zosoldos</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /team_area  -->

    <!-- Information_area  -->
    <?php
        include_once(ROOT_PATH. '/layouts/inc/info.inc.php');
    ?>
    <!-- /Information_area  end -->
<?php
    include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');
?>

