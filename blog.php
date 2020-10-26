<?php
    include ('path.php');
    $title = "Blog";
    include_once(ROOT_PATH. '/layouts/inc/nav.inc.php');
    include_once(ROOT_PATH . '/bootstrap/bootstrap.php');
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>ME Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="row">
                            <?php
                                $getData =  Blog::getAllBlog();

                                $i = 0;
                                if(is_array($getData) || is_object($getData)) {
                                    foreach($getData  as $key => $value) {
                                        $id    = htmlentities($value["id"]);
                                        $title  = Format::textShorten($value["title"], 20);
                                        $body  = $value["body"];
                                        $filename = $value['image'];
                                        $date  = htmlentities( Format::shortDate($value["created_at"]));
                                        $i ++;
                            ?>
                            <article class="blog_item col-md-4">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="layouts/uploads/<?php echo $filename;?>" alt="" height="200px">
                                    <a href="blog-single.php?id=<?php echo  $id;?>" class="blog_item_date">
                                        <p>
                                            <?php echo $date;?>
                                        </p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog-single.php?id=<?php echo  $id;?>">
                                        <h2><?php echo $title;?></h2>
                                    </a>
<!--                                    <p class="text-justify">-->
<!--                                        --><?php //echo Format::textShorten($body, 20);?>
<!--                                    </p>-->
                                    <ul class="blog-info-link mt-3 mb-4">
                                        <li> <a href="#"><i class="fa fa-comments"></i> <?php echo  @count(Comment::findPostComment($id));?> Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            <?php } }?>
                        </div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
<?php
    include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');
?>

