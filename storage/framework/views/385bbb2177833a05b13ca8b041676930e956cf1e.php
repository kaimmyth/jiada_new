

    <!-- footer start here -->
    <section class="footer-agile">
        <div class="container">
            <div class="footer-btm-agileinfo">

                <div class="col-md-3 col-xs-12 footer-grid w3social">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="">Website Policies</a></li>
                        <li><a href="" class="scroll">Terms & Condition</a></li>
                        <li><a href="" class="scroll">Privacy Policy</a></li>
                        <li><a href="" class="scroll">Copyright Policy</a></li>
                        <li><a href="" class="scroll">Disclaimer</a></li>
                        <li><a href="" class="scroll">Web Information Manager</a></li>

                    </ul>
                </div>
                <div class="col-md-3 col-xs-12 footer-grid w3social">
                    <h3>Industrial Area</h3>
                    <ul>
                        <li><a href="">Jharkhand</a></li>
                        <li><a href="" class="scroll">Ranchi</a></li>
                        <li><a href="" class="scroll">Bokaro</a></li>
                        <li><a href="" class="scroll">Namkum</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-12 footer-grid w3social">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="" class="scroll">About</a></li>
                        <li><a href="" class="scroll">Resource</a></li>
                        <li><a href="" class="scroll">Career</a></li>
                        <li><a href="" class="scroll">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-12 footer-grid" id="contact">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><i class="fa fa-phone"></i> +91-651 2460125 </li>
                        <!-- <li><i class="fa fa-fax"></i>+12 222 333 2365</li> -->
                        <li><i class="fa fa-map-marker"></i>Jharkhand Industrial Area Development Authority,<br/>Jharkhand - 834010<br/></li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:jiada.rnc@gmail.com">jiada.rnc@gmail.com</a></li>
                        <li><i class="fa fa-globe"></i><a href="http://jiada.baba.software">jiada.baba.software</a></li>
                    </ul>
                </div>
                

                

                <div class="clearfix"> </div>
            </div>
            <div class="footer-agilem">
                <div class="col-sm-8 col-xs-9 copy-w3lsright">
                    <p>JAIDA © 2019 IT-SCIENT </a>
                    </p>
                </div>
                <div class="col-sm-4 col-xs-6 social-w3licon">
                    <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- //footer end here -->

    <!-- js-scripts -->

    <!-- js -->

    <script type="text/javascript" src="<?php echo e(url('public/static-pages-assets/js/jquery-2.1.4.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/static-pages-assets/js/bootstrap.js')); ?>"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->

    <!--  Testimonials js-->
    <script defer src="<?php echo e(url('public/static-pages-assets/js/jquery.flexslider.js')); ?>"></script>
    <!--Start-slider-script-->
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
	<!--End-slider-script-->
	


    <!-- //Recent Trips js file-->

    <!-- start-smoth-scrolling -->
    <script src="<?php echo e(url('public/static-pages-assets/js/SmoothScroll.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/static-pages-assets/js/move-top.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/static-pages-assets/js/easing.js')); ?>"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->

    <!-- Banner-js -->
    <script src="<?php echo e(url('public/static-pages-assets/js/responsiveslides.min.js')); ?>"></script>
    <script>
        $(function() {
            $("#slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- //Baneer-js -->

    <!-- script for fonts --
		<script>
		$(document).ready(function() {

		var fontSize = $(window).width()/50;
		$('body').css('font-size', fontSize);

		$(window).resize(function() {
		var fontSize = $(window).width()/50;
		$('body').css('font-size', fontSize);
		});

		});
		</script>
	<!-- //script for fonts -->

    <!-- //js-scripts -->
    
 
	

<?php /**PATH D:\xampp\htdocs\jiada_new\resources\views/static-pages/footer.blade.php ENDPATH**/ ?>