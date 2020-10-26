<?php
    include ('../path.php');
    $title = "Project";
    include(ROOT_PATH . '/layouts/admin/inc/nav.inc.php');
    include(ROOT_PATH . '/bootstrap/bootstrap.php');
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create</strong> Project Profile
            <span class="pull-right"><a href="project-list.php" class="btn btn-info btn-sm">Our Projects</a> </span>
        </div>
        <div class="card-body card-block" id="sample">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['project-create'])) {
                $cnt = Project::projectCreate($_POST);
            }
            if (isset($cnt)) {
                echo $cnt ;
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="text-input" class=" form-control-label"><strong>Project Title</strong></label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="text-input" name="title" placeholder="Enter Project Title " class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="text-input" class=" form-control-label"><strong>Organisation Name</strong></label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="text-input" name="organization_name" placeholder="Organisation Name" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label"><strong>Project Image</strong></label></div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="image" value="image" name="image" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label"><strong>Project Date</strong></label></div>
                    <div class="col-12 col-md-12">
                        <input type="date" name="project_date" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Project Description</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="description" id="textarea-input" rows="9" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Problem</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="problem" id="textarea-input" rows="5" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Project Solution </strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="solution" id="textarea-input" rows="5" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Project Result</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="result" id="textarea-input" rows="5" class="form-control"></textarea>
                    </div>
                </div>

                <a href="dashboard.php" type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Back
                </a>    |
                <button type="submit" name="project-create" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </form>
        </div>

    </div>

</div><!-- /#right-panel -->
<?php include_once(ROOT_PATH . '/layouts/admin/inc/footer.inc.php');?>


