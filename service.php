<?php
    include ('path.php');
    $title = "Service";
    include_once(ROOT_PATH. '/layouts/inc/nav.inc.php');
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>ME Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Our Services</h3>
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
                            <h3><?php echo $name;?></h3>
                            <p><?php echo $desc;?></p>
                            <a href="#" class="learn_more">More</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

<?php
    include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');
?>
