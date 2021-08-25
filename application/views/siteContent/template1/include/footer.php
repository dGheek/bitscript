<!-- Footer Area Start -->
<footer class="finves-footer-area">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer">
                        <h3>About Us</h3>
                        <p><?php echo $this->web_model->getTemplateContent('footer', $companyInfo['template'])->value; ?></p>
                        <ul class="footer-about">
                            <li><i class="fa fa-map-marker"></i> <span>Address </span>: <?php echo $this->security->xss_clean($companyInfo['address']) ?> </li>
                            <li><i class="fa fa-phone"></i> <span>Phone </span>: <?php echo $this->security->xss_clean($companyInfo['phone1']) ?></li>
                            <li><i class="fa fa-envelope-o"></i> <span>Email </span>: <?php echo $this->security->xss_clean($companyInfo['email']) ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer">
                        <h3>Usefull Links</h3>
                        <ul class="usefull_links">
                            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="<?php echo base_url(); ?>#about"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                            <li><a href="<?php echo base_url(); ?>#services"><i class="fa fa-angle-double-right"></i>Services</a></li>
                            <li><a href="<?php echo base_url(); ?>#pricing"><i class="fa fa-angle-double-right"></i>Pricing</a></li>
                        </ul>
                        <ul class="usefull_links">
                            <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-angle-double-right"></i>Login</a></li>
                            <li><a href="<?php echo base_url(); ?>signup"><i class="fa fa-angle-double-right"></i>Register</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer">
                        <h3>Subscribe Us</h3>
                        <p>Sign up for our mailing list to get latest updates and offers.</p>
                        <div class="footer-subscribe">
                            <form>
                                <input type="email" placeholder="Email Address" />
                                <button type="submit">GO</button>
                            </form>
                        </div>
                        <div class="footer-follow">
                            <h3>Follow Us</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer">
                        <h3>Opening Hours</h3>
                        <ul class="footer-hours">
                            <li>Mon – Tue<span>10:00 – 18:00</span></li>
                            <li>Wed – Thur<span>10:00 – 17:00</span></li>
                            <li>Fri – Sat<span>10:00 – 12:30</span></li>
                            <li>Saturday<span>10:00 – 12:30</span></li>
                            <li>Sunday<span>Closed</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>Powered By <i class="fa fa-heart"></i> ElgiusTrade</p><!-- Dropdown Option -->
                        <div id="ytWidget"></div>
                        <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
                        <!-- /dropdown option -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


<!--Jquery js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/bootstrap.min.js"></script>
<!-- Raphael JS -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/raphael.min.js"></script>

<!--Owl-Carousel js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/owl.carousel.min.js"></script>
<!--Slicknav js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.slicknav.min.js"></script>
<!--Isotop js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/js/custom-isotop.js"></script>
<!--Magnific js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.magnific-popup.min.js"></script>
<!--Nice Select js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.nice-select.min.js"></script>
<!-- Counter JS -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.counterup.min.js"></script>
<!-- Way Points JS -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/waypoints-min.js"></script>
<!--Main js-->
<script src="<?php echo base_url(); ?>assets/front/assets/js/main.js"></script>
</body>

</html>