<?php
    include("../path.php");
    $title = "FAQ";
    include_once(ROOT_PATH . '/layouts/admin/inc/nav.inc.php');
    include_once(ROOT_PATH . '/bootstrap/bootstrap.php');
    if (isset($_GET['del'])) {
        $msg_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
        $delDetail = Faq::deleteFaq($msg_id);
    }
?>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">All FAQ'S</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SN..</th>
                                <th>QUESTION</th>
                                <th>ANSWER</th>
                                <th>DATE</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $getFaq =  Faq::getAllFaq();
                                $i = 0;
                                if(is_array($getFaq) || is_object($getFaq)) {
                                    foreach($getFaq  as $key => $value) {
                                        $id    = htmlentities($value["id"]);
                                        $question  = htmlentities($value["question"]);
                                        $answer  = htmlentities(  Format::textShorten($value["answer"], 20) );
                                        $date  = htmlentities( Format::formatDate($value["created_at"]));
                                        $i ++;
                            ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $question;?></td>
                                        <td><?php echo $answer;?></td>
                                        <td><?php echo $date;?></td>
                                        <td>
                                            <span>
                                                <a class="btn btn-primary btn-sm" href="faq-edit.php?id=<?php echo  $id;?>"> <i class="fa fa-edit"></i></a>
                                            </span>
                                            <span>
                                                <a onclick="return confirm('Are you sure you want to delete this...?')" href="?del=<?php echo $id; ?>" class="btn btn-danger btn-sm"> <i  class="fa fa-trash"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                <?php } } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->

</div><!-- /#right-panel -->

<?php include_once(ROOT_PATH . '/layouts/admin/inc/footer.inc.php');?>

