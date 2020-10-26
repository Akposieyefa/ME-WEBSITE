<?php
    include ('../path.php');
    $title = "Projects";
    include(ROOT_PATH . '/layouts/admin/inc/nav.inc.php');
    include_once(ROOT_PATH . '/bootstrap/bootstrap.php');
    if (isset($_GET['del'])) {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
        $delDetail = Project::deleteProject($id);
    }
?>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Projects</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>NO...</th>
                                <th>PROJECT TITLE</th>
                                <th>PROJECT DATE</th>
                                <th>DATE</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $getData =  Project::getAllProject();

                            $i = 0;
                            if(is_array($getData) || is_object($getData)) {
                                foreach($getData  as $key => $value) {
                                    $id    = htmlentities($value["id"]);
                                    $title  = htmlentities(Format::textShorten($value["title"], 20));
                                    $p_date  = htmlentities( Format::formatDate($value["project_date"]));
                                    $date  = htmlentities( Format::formatDate($value["created_at"]));
                                    $i ++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $title;?></td>
                                        <td><?php echo $p_date;?></td>
                                        <td><?php echo $date;?></td>
                                        <td>
                                        <span>
                                               <a class="btn btn-info btn-sm" href="message-show.php?id=<?php echo  $id;?>"> <i class="fa fa-eye"></i></a>
                                         </span>
                                            <span>
                                                <a class="btn btn-primary btn-sm" href="project-edit.php?id=<?php echo  $id;?>"> <i class="fa fa-edit"></i></a>
                                         </span>
                                            <span>
                                            <a onclick="return confirm('Are you sure you want to delete this...?')" href="?del=<?php echo $id; ?>" class="btn btn-danger btn-sm"> <i  class="fa fa-trash"></i></a>
                                         </span>
                                        </td>
                                    </tr>
                                <?php } }  ?>
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


