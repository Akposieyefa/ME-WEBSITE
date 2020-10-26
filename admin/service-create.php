<?php
    include ('../path.php');
    $title = "Services";
    include(ROOT_PATH . '/layouts/admin/inc/nav.inc.php');
    include(ROOT_PATH . '/bootstrap/bootstrap.php');
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create </strong> Service
            <span class="pull-right"><a href="service-list.php" class="btn btn-info btn-sm">Our Services</a> </span>
        </div>
        <div class="card-body card-block" id="sample">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['service'])) {
                    $cnt = Service::serviceCreate($_POST);
                }
                if (isset($cnt)) {
                    echo $cnt ;
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data"  class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="text-input" class=" form-control-label"><strong>Name</strong></label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="text-input" name="name" placeholder="Enter servcie name " class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Description</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea  name="description" id="textarea-input" rows="9" class="form-control"></textarea>
                    </div>
                </div>

                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Back
                </button>    |
                <button type="submit" class="btn btn-primary btn-sm" name="service">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </form>
        </div>

    </div>

</div><!-- /#right-panel -->
<?php include_once(ROOT_PATH .'/layouts/admin/inc/footer.inc.php');?>


