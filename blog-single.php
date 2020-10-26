<?php
    include ('path.php');
    $title = "Blog-Single";
    include_once(ROOT_PATH. '/layouts/inc/nav.inc.php');
    include(ROOT_PATH . '/bootstrap/bootstrap.php');
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'blog.php';</script>";
    } else {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Blog Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                        <?php
                            $data = Blog::findBlog($id);
                            if ($data) {
                        ?>
                            <div class="single-post">
                                <div class="feature-img">
                                    <img class="img-fluid" src="layouts/uploads/<?php echo $data[0]['image'];?>" alt="">
                                </div>
                                <div class="blog_details">
                                    <h2>
                                        <?php echo $data[0]['title'];?>
                                    </h2>
                                    <ul class="blog-info-link mt-3 mb-4">
                                        <li><a href="#"><i class="fa fa-user"></i><strong>Author</strong> <?php echo $data[0]['author'];?> </a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> <?php echo @count(Comment::findPostComment($data[0]['id']));?> Comments</a></li>
                                    </ul>
                                    <p class="excert text-justify">
                                        <?php echo $data[0]['body'];?>
                                    </p>
                                </div>
                            </div>
                        <?php
                            }
                        ?>

                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-comments"></i></span> <?php echo @count(Comment::findPostComment($data[0]['id']));?>
                                people comment this</p>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/managementedge"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/managementedge"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/managementedge"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <?php
                            $comments = Comment::findPostComment($id);
                            if ($comments) {
                                if(is_array($comments) || is_object($comments)) {
                                    foreach($comments  as $key => $value) {
                                        $name  = htmlentities($value["name"]);
                                        $email  = $value["email"];
                                        $comment = $value['comment'];
                                        $date  = htmlentities( Format::shortDate($value["created_at"]));
                                        $i ++;
                        ?>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb h2">
                                        <i class="fa fa-user-secret"></i>
<!--                                        <img src="layouts/img/comment/comment_1.png" alt="">-->
                                    </div>
                                    <div class="desc">
                                        <p class="comment text-justify">
                                            <?php echo $comment;?>
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#"><?php echo $name;?></a>
                                                </h5>
                                                <p class="date"><?php echo $date;?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } } } ?>

                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <DIV class="form-contact comment_form" action="" id="commentForm">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <input class="form-control" name="id" id="id"  value="<?php echo $id?>" type="hidden" placeholder="Name">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                  <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="commentClick" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                            </div>
                        </DIV>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Our Services</h4>
                            <ul class="list cat-list">
                                <?php
                                    foreach($getServices  as $key => $value) {
                                        $name  = htmlentities($value["name"]);
                                ?>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?php echo $name;?></p>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php
                                $getData =  Blog::recentBlog(3);
                                if(is_array($getData) || is_object($getData)) {
                                    foreach($getData  as $key => $value) {
                                        $id    = htmlentities($value["id"]);
                                        $title  = htmlentities(Format::textShorten($value["title"], 20));
                                        $filename = $value['image'];
                                        $date  = htmlentities( Format::shortDate($value["created_at"]));
                            ?>
                            <div class="media post_item">
                                <img src="layouts/uploads/<?php echo $filename;?>" alt="post" width="90px" height="70px">
                                <div class="media-body">
                                    <a href="blog-single.php?id=<?php echo  $id;?>">
                                        <h3><?php echo $title;?></h3>
                                    </a>
                                    <p><?php echo $date;?></p>
                                </div>
                            </div>
                            <?php } } ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
<?php
    include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');
?>
<script type="text/javascript" src="layouts/ajax/comment.js"></script>


