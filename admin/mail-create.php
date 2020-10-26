<?php
    include ('../path.php');
    $title = "Mail";
    include(ROOT_PATH . '/layouts/admin/inc/nav.inc.php');
    include(ROOT_PATH . '/bootstrap/bootstrap.php');
?>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Send Mail</strong> Blast
            </div>
            <div class="card-body card-block" id="sample">
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send-mail'])) {
                        $cnt = Mailing::mailBlast($_POST);
                    }
                    if (isset($cnt)) {
                        echo $cnt ;
                    }
                ?>
                <form action="" method="post"  class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <label for="text-input" class=" form-control-label"><strong>Subject</strong></label>
                        </div>
                        <div class="col-12 col-md-12">
                            <input type="text" id="text-input" name="subject" placeholder="Enter mail blast subject " class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <label for="textarea-input" class=" form-control-label"><strong>Message</strong> </label>
                        </div>
                        <div class="col-12 col-md-12">
                            <textarea id="area4" name="body" id="textarea-input" rows="9" class="form-control"></textarea>
                        </div>
                    </div>

                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Back
                    </button>    |
                    <button type="submit" name="send-mail" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Send
                    </button>
                </form>
            </div>

        </div>

    </div><!-- /#right-panel -->
<?php include_once(ROOT_PATH .'/layouts/admin/inc/footer.inc.php');?>


