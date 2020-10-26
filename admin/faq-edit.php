<?php
    include ('../path.php');
    $title = "FAQ";
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
            <strong>Edit </strong> Frequently ask questions <span class="pull-right"><a href="faq-index.php" class="btn btn-info btn-sm">FAQ</a> </span>
        </div>
        <div class="card-body card-block" id="sample">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['faq-update'])) {
                $cnt = Faq::updateFaq($id,$_POST);
            }
            if (isset($cnt)) {
                echo $cnt ;
            }
            ?>
            <?php
            $data = Faq::findFaq($id);
            if ($data) {
            ?>
                <form action="" method="post"  class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <label for="text-input" class=" form-control-label"><strong>Name</strong></label>
                        </div>
                        <div class="col-12 col-md-12">
                            <input type="text" id="text-input" name="question" value="<?php echo $data[0]['question'];?>" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-12">
                            <label for="textarea-input" class=" form-control-label"><strong>Description</strong> </label>
                        </div>
                        <div class="col-12 col-md-12">
                            <textarea  name="answer" id="textarea-input" rows="9" class="form-control"><?php echo $data[0]['answer'];?></textarea>
                        </div>
                    </div>

                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Back
                    </button>    |
                    <button type="submit" class="btn btn-primary btn-sm" name="faq-update">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                </form>
            <?php } ?>
        </div>

    </div>

</div><!-- /#right-panel -->
<?php include_once(ROOT_PATH .'/layouts/admin/inc/footer.inc.php');?>


