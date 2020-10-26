<?php
    include ('path.php');
    $title = "Home";
    include_once(ROOT_PATH. '/layouts/inc/nav.inc.php');
?>
<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>WE PROVIDE WIDE RANGE OF IT SERVICES & <br>
                                TRAINING COURSES</h3>
                            <div class="video_service_btn">
                                <a href="service.php" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>TAKE CARE OF YOUR <br>
                                IT LANDSCAPE</h3>
                            <div class="video_service_btn">
                                <a href="service.php" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- slider_area_end -->

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
                    <a href="about.php" class="boxed-btn3">About Us</a>
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

<?php include_once(ROOT_PATH. '/layouts/inc/experience.inc.php');?>

<!-- case_study_area  -->
<div class="case_study_area">
    <div class="container">
        <div class="border_bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-40">
                        <h3>Projects</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="case_active owl-carousel">
                        <?php
                            $project =  Project::getAllProject();
                            if(is_array($project) || is_object($project)) {
                                foreach($project as $key => $value) {
                                    $id    = htmlentities($value["id"]);
                                    $title  = htmlentities(Format::textShorten($value["title"], 30));
                                    $org_name = $value['organization_name'];
                                    $filename = $value['image'];
                                    $project_date = Format::shortDate($value['project_date']);
                                    $date  =  Format::shortDate($value["created_at"]);
                        ?>
                            <div class="single_case">
                                <div class="case_thumb">
                                    <img src="layouts/projects/<?php echo $filename;?>" alt="">
                                </div>
                                <div class="case_heading">
                                    <span><?php echo $org_name;?></span>
                                    <h3><a href="project-single.php?id=<?php echo  $id;?>"><?php echo $title;?></a></h3>
                                    <small><?php echo $project_date;?></small>
                                </div>
                            </div>
                        <?php } } ?>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_close_btn text-center">
                        <a href="projects.php" class="boxed-btn3-line">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /case_study_area  -->

<!-- accordion  -->
<div class="accordion_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="accordion_thumb">
                    <img src="layouts/img/banner/accordion.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="faq_ask">
                    <h3>Frequently ask</h3>
                    <div id="accordion">
                        <?php
                            $i;
                            $faq =  Faq::getAllFaq();
                            if(is_array($faq) || is_object($faq)) {
                                foreach($faq as $key => $value) {
                                    $id    = htmlentities($value["id"]);
                                    $question  = $value["question"];
                                    $answer = $value['answer'];
                                    $date  =  Format::shortDate($value["created_at"]);
                                    $i++;
                        ?>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#<?php echo $i;?>" aria-expanded="false" aria-controls="<?php echo $i;?>">
                                        <?php echo $question;?>
                                    </button>
                                </h5>
                            </div>
                            <div id="<?php echo $i;?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                <div class="card-body">
                                  <p class="text-justify"><?php echo $answer;?></p>
                                </div>
                            </div>
                        </div>

                        <?php  } } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- accordion  -->

<div class="testimonial_area overlay ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <?php
                        $testimonials =  Testimonial::getAllTestimonial();
                        if(is_array($testimonials) || is_object($testimonials)) {
                            foreach($testimonials as $key => $value) {
                                $id    = htmlentities($value["id"]);
                                $remark  = $value["remark"];
                                $name = $value['name'];
                                $portfolio = $value['portfolio'];
                                $filename = $value['image'];
                                $date  =  Format::shortDate($value["created_at"]);
                    ?>
                    <div class="single_carousel">
                        <div class="single_testmonial text-center">
                            <div class="quote">
                                <img src="layouts/img/svg_icon/quote.svg" alt="">
                            </div>
                            <p><?php echo $remark;?> </p>
                            <div class="testmonial_author">
                                <div class="thumb">
                                    <img src="layouts/testimonials/<?php echo $filename;?>" alt="" class="img img-responsive rounded-circle">
                                </div>
                                <h3><?php echo $name;?></h3>
                                <span><?php echo $portfolio;?></span>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- team_area  -->
<div class="team_area">
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
<?php include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');?>
