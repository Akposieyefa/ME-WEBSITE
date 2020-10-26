<?php
    include ('../path.php');
    $title = "Project";
    include(ROOT_PATH . '/layouts/admin/inc/nav.inc.php');
    include(ROOT_PATH . '/bootstrap/bootstrap.php');
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'dashboard.php';</script>";
    } else {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong> Project Profile
        </div>
        <div class="card-body card-block" id="sample">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['project-update'])) {
                    $cnt = Project::updateProject($id,$_POST);
                }
                if (isset($cnt)) {
                    echo $cnt ;
                }
            ?>
            <?php
            $data = Project::findProject($id);
            if ($data) {
            ?>
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="text-input" class=" form-control-label"><strong>Project Title</strong></label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="text-input" name="title" value="<?php echo $data[0]['title'];?>" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="text-input" class=" form-control-label"><strong>Organisation Name</strong></label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="text-input" name="organization_name" value="<?php echo $data[0]['organization_name'];?>" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label"><strong>Project Date</strong></label></div>
                    <div class="col-12 col-md-12">
                        <input type="date" name="project_date" value="<?php echo $data[0]['project_date'];?>" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Project Description</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="description" id="textarea-input" rows="9" class="form-control"><?php echo $data[0]['description'];?></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Problem</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="problem" id="textarea-input" rows="5" class="form-control"><?php echo $data[0]['problem'];?></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Project Solution </strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="solution" id="textarea-input" rows="5" class="form-control"><?php echo $data[0]['solution'];?></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Project Result</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="result" id="textarea-input" rows="5" class="form-control"><?php echo $data[0]['result'];?></textarea>
                    </div>
                </div>

                <a href="dashboard.php" type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Back
                </a>    |
                <button type="submit" name="project-update" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Update
                </button>
            </form>
            <?php }?>
        </div>

    </div>

</div><!-- /#right-panel -->
<?php include_once(ROOT_PATH . '/layouts/admin/inc/footer.inc.php');?>



