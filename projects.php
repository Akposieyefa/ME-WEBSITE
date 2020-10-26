<?php
    include ('path.php');
    $title = "Project";
    include_once(ROOT_PATH. '/layouts/inc/nav.inc.php');
    include_once(ROOT_PATH . '/bootstrap/bootstrap.php');
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Projects</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- case_study_area  -->
    <div class="case_study_area case_page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-menu text-center">
                        <button class="active" data-filter="*">All Our Projects</button>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <?php
                    $getData =  Project::getAllProject();
                    if(is_array($getData) || is_object($getData)) {
                        foreach($getData  as $key => $value) {
                            $id    = htmlentities($value["id"]);
                            $title  = htmlentities(Format::textShorten($value["title"], 30));
                            $org_name = $value['organization_name'];
                            $filename = $value['image'];
                            $project_date = Format::shortDate($value['project_date']);
                            $date  =  Format::shortDate($value["created_at"]);
                ?>
                    <div class="col-xl-4 grid-item cat1 cat3">
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
                    </div>
                <?php } } ?>
            </div>
        </div>
    </div>
    <!-- /case_study_area  -->

    <!-- Information_area  -->
    <?php
        include_once(ROOT_PATH. '/layouts/inc/info.inc.php');
    ?>
    <!-- /Information_area  end -->

<?php
    include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');
?>


