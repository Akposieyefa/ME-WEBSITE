<?php
    include ('path.php');
    $title = "Project-Single";
    include_once(ROOT_PATH. '/layouts/inc/nav.inc.php');
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'projects.php';</script>";
    } else {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Case Study</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>s
    <!--/ bradcam_area  -->

<div class="case_details_area">
    <div class="container">
        <div class="border_bottom">
            <div class="row ">
                <?php
                    $data = Project::findProject($id);
                    if ($data) {
                ?>
                <div class="col-xl-12">
                    <div class="details_title">
                        <span><?php echo $data[0]['organization_name'];?></span>
                        <h3><?php echo $data[0]['title'];?></h3>
                        <small><?php echo Format::shortDate($data[0]['project_date']);?></small>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="case_thumb">
                        <img src="layouts/projects/<?php echo $data[0]['image'];?>" alt="">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="details_main_wrap">
                        <p class="details_info text-justify">
                            <?php echo $data[0]['description'];?>
                        </p>
                        <div class="single_details">
                            <span>Problem</span>
                            <p class="text-justify"><?php echo $data[0]['problem'];?></p>
                        </div>
                        <div class="single_details">
                            <span>Solution</span>
                            <p class="text-justify"><?php echo $data[0]['solution'];?></p>
                        </div>
                        <div class="single_details">
                            <span>Result</span>
                            <p class="text-justify"> <?php echo $data[0]['result'];?></p>
                        </div>
                        <div class="single_details mb-60">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> Twitter </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-instagram"></i> Instagram </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php }?>

            </div>
        </div>
    </div>
</div>



<!-- Information_area  -->
    <?php
        include_once(ROOT_PATH. '/layouts/inc/info.inc.php');
    ?>
    <!-- /Information_area  end -->

<?php
    include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');
?>


