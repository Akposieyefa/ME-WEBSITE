    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="index.php">
                                    <img src="layouts/logo.jpg" alt="" class="img img-responsive" width="60px">
                                </a>
                            </div>
                            <p>
                                Suite 03, Maina Court,Herbert Macaulay Way, Central Business District, Abuja.
                            </p>
                            <p>
                                <a href="#">info@managementedgeltd.com</a> <br>
                                09-291-7877 <br>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/managementedge">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/managementedge">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/managementedge">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <?php
                                    if(is_array($getServices) || is_object($getServices)) {
                                        foreach($getServices  as $key => $value) {
                                            $id    = htmlentities($value["id"]);
                                            $name  = htmlentities($value["name"]);
                                            $i ++;
                                            ?>
                                            <li><a href="service.php"><?php echo $name;?></a></li>
                               <?php } } ?>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Links
                            </h3>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php"> Contact</a></li>
                                <li><a href="project.php">Project</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <div action="#" class="newsletter_form">
                                <input type="email" id="emailNewsLetter" placeholder="Enter your mail">
                                <button type="submit" id="mailingListClick">Subscribe</button>
                            </div>
                            <p class="newsletter_text">
                                To get latest news and update keep connected with us by signing up to our mailing list.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by <a href="https://colorlib.com" target="_blank">Management Edge </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->


    <!-- JS here -->
    <script src="layouts/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="layouts/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="layouts/js/popper.min.js"></script>
    <script src="layouts/js/bootstrap.min.js"></script>
    <script src="layouts/js/owl.carousel.min.js"></script>
    <script src="layouts/js/isotope.pkgd.min.js"></script>
    <script src="layouts/js/ajax-form.js"></script>
    <script src="layouts/js/waypoints.min.js"></script>
    <script src="layouts/js/jquery.counterup.min.js"></script>
    <script src="layouts/js/imagesloaded.pkgd.min.js"></script>
    <script src="layouts/js/scrollIt.js"></script>
    <script src="layouts/js/jquery.scrollUp.min.js"></script>
    <script src="layouts/js/wow.min.js"></script>
    <script src="layouts/js/nice-select.min.js"></script>
    <script src="layouts/js/jquery.slicknav.min.js"></script>
    <script src="layouts/js/jquery.magnific-popup.min.js"></script>
    <script src="layouts/js/plugins.js"></script>
    <script src="layouts/js/gijgo.min.js"></script>
    <script src="layouts/js/slick.min.js"></script>
    <!--contact js-->
    <script src="layouts/js/contact.js"></script>
    <script src="layouts/js/jquery.ajaxchimp.min.js"></script>
    <script src="layouts/js/jquery.form.js"></script>
    <script src="layouts/js/jquery.validate.min.js"></script>
    <script src="layouts/js/mail-script.js"></script>

    <script src="layouts/js/main.js"></script>
    <script type="text/javascript" src="layouts/ajax/mailinglist.js"></script>
</body>

</html>
