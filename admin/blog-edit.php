<?php
    include ('../path.php');
    $title = "Blog";
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
            <strong>Edit</strong> Blog Post
        </div>
        <div class="card-body card-block" id="sample">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['blog-update'])) {
                    $cnt = Blog::updateBlog($id,$_POST);
                }
                if (isset($cnt)) {
                    echo $cnt ;
                }
            ?>
            <?php
            $data = Blog::findBlog($id);
            if ($data) {
            ?>
            <form action="" method="post"  class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="text-input" class=" form-control-label"><strong>Blog Title</strong></label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="text-input" name="title"  value="<?php echo $data[0]['title'];?>" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="text-input" class=" form-control-label"><strong>Author</strong></label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="text-input" name="author" value="<?php echo $data[0]['author'];?>" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-12">
                        <label for="textarea-input" class=" form-control-label"><strong>Blog Body</strong> </label>
                    </div>
                    <div class="col-12 col-md-12">
                        <textarea id="area4" name="body" id="textarea-input" rows="9" class="form-control"><?php echo $data[0]['body'];?></textarea>
                    </div>
                </div>

                <a href="dashboard.php" type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Back
                </a>    |
                <button type="submit" name="blog-update" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Update
                </button>
            </form>
            <?php }?>
        </div>

    </div>

</div><!-- /#right-panel -->
<?php include_once(ROOT_PATH . '/layouts/admin/inc/footer.inc.php');?>

