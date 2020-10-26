<?php
    include ('path.php');
    $title = "Contact";
    include(ROOT_PATH. '/layouts/inc/nav.inc.php');
    include(ROOT_PATH. '/bootstrap/bootstrap.php');
?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">

                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Maina Court, Herbert Macaulay Way%20of%20san%20nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        <a href="https://ytify.com"></a>
                    </div>
                    <style>
                        .mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}
                    </style>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-7">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send-contact'])) {
                            $cnt = Contact::contactCreate($_POST);
                        }
                        if (isset($cnt)) {
                            echo $cnt ;
                        }
                    ?>
                    <form class="form-contact contact_form" action="" method="post" id="" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select name="service_id" id="service_id" class="form-control form-control-lg">
                                        <option value="">Subject</option>
                                        <?php
                                            foreach($getServices  as $key => $value) {
                                                $id    = htmlentities($value["id"]);
                                                $name  = htmlentities($value["name"]);
                                        ?>
                                            <option value="<?php echo $id;?>"><?php echo $name;?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn" name="send-contact">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Central Business District</h3>
                            <p class="text-justify">
                                Suite 03, Maina Court,Herbert Macaulay Way, Central Business District, Abuja.
                            </p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>09-291-7877</h3>
                            <p>Mon to Fri 8am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>info@manangementedgeltd.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
<?php
    include_once(ROOT_PATH. '/layouts/inc/footer.inc.php');
?>
