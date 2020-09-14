<!DOCTYPE html>
<html lang="en">

<head>
    <title>jiada</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!--// Meta tag Keywords -->

    <!-- Recent Trips section css files-->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/owl.carousel.css')); ?>" type="text/css" media="all">
    <link href="<?php echo e(url('public/static-pages-assets/css/owl.theme.css')); ?>" rel="stylesheet">
    <!-- //Recent Trips section css files -->

    <!-- Testimonials -->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/flexslider.css')); ?>" type="text/css" media="screen" />
    <!-- //Testimonials -->

    <!-- css files -->

    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/bootstrap.css')); ?>">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/style.css')); ?>" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/font-awesome.css')); ?>">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gabriela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">

</head>

<body>

    <?php echo $__env->make("static-pages.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	

    <!-- Slider -->
    <section class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <!-- <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="banner-dott">
                            <div class="container">
                                <div class="slider-info">
                                    <h2>Travel is the only thing</h2>
                                    <h4>You buy, makes you richer</h4>
                                    <div class="w3ls-button">
                                        <a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
                                    </div>
                                    <div class="bannergrids">
                                        <div class="col-md-4">
                                            <div class="grid1">
                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                <p>lorem ipsum dolor sit amet consectetur adipiscing</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="grid1">
                                                <i class="fa fa-ship" aria-hidden="true"></i>
                                                <p>lorem ipsum dolor sit amet consectetur adipiscing</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="grid1">
                                                <i class="fa fa-bus" aria-hidden="true"></i>
                                                <p>lorem ipsum dolor sit amet consectetur adipiscing</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
                <li>
                    <div class="w3layouts-banner-top">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>The best view comes after</h3>
								<h4>The hardest climb</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top3">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>Travel tends to magnify</h3>
								<h4>Human emotions</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>Travel brings power & love</h3>
								<h4>Back to your life</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top4">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>Don't call it a dream</h3>
								<h4>Call it a plan</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </section>
    <!-- //Slider -->

    <!-- About section -->
    <section class="about" id="mission" style="background:#fff;">
        <div class="container">
            <!-- <h3 class="heading">About Us</h3> -->
				<div class="col-md-12" style=" line-height: 28px;color: #212121;letter-spacing: .5px;font-size: 16px;text-transform: capitalize;padding-top: 1em;padding-bottom: 1em;font-family: 'Overlock', cursive;">
					<p>Jharkhand Industrial Area Development Authority
					 is committed for planned development of industrial area and promotion of industries and matters appurtenant thereto under its command area. After acquisition of land either through the route of land acquisition laws or otherwise, the Authority shall determine the rate for allotment to the intending applicants keeping in view the land cost, expenditure incurred and expected expenditure to be incurred towards contour survey and plan layout, levelling of land and erection of boundary wall, construction of roads, sewerage and drainage, installation of street lighting, administrative cost and interest on capital investment, at the prevalent rate of the year in which the land vested in Jharkhand Industrial Area Development Authority</p>
				</div>
            <!-- <div class="clearfix"></div> -->
        </div>
    </section>
	<!-- //About section -->
	
  <!-- Managemet Team Section -->
	<!--<section class="Management" id="management-team" style="background: #3b5998;">-->
	<!--	<div class="container"><br><br>-->
	<!--			   <div class="row pt-lg-5 pt-md-5 pt-sm-4 pt-3" style="margin-top: 3em;margin-bottom: 3em;">-->
	<!--				  <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">-->
	<!--					 <div class="team-position">-->
	<!--						<div class="icon-wthree-top">-->
	<!--						   <img src="<?php echo e(url('public/static-pages-assets/images/t1.jpg')); ?>" alt="" class="img-fluid">-->
	<!--						</div>-->
	<!--						<div class="team-text-wthree">-->
	<!--						   <h4>-->
	<!--							  Sam Deo-->
	<!--						   </h4><br>-->
	<!--						   <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing</p>-->
	<!--						</div>-->
							
	<!--					 </div>-->
	<!--				  </div>-->
	<!--				  <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">-->
	<!--					 <div class="team-position">-->
	<!--						<div class="icon-wthree-top">-->
	<!--						   <img src="<?php echo e(url('public/static-pages-assets/images/t2.jpg')); ?>" alt="" class="img-fluid">-->
	<!--						</div>-->
	<!--						<div class="team-text-wthree">-->
	<!--						   <h4>-->
	<!--							  Max Will-->
	<!--						   </h4><br>-->
	<!--						   <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing</p>-->
	<!--						</div>-->
						
	<!--					 </div>-->
	<!--				  </div>-->
	<!--				  <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">-->
	<!--					 <div class="team-position">-->
	<!--						<div class="icon-wthree-top">-->
	<!--						   <img src="<?php echo e(url('public/static-pages-assets/images/t3.jpg')); ?>" alt="" class="img-fluid">-->
	<!--						</div>-->
	<!--						<div class="team-text-wthree">-->
	<!--						   <h4>-->
	<!--							  Ray Son-->
	<!--						   </h4><br>-->
	<!--						   <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing</p>-->
	<!--						</div>-->
						
	<!--					 </div>-->
	<!--				  </div>-->
	<!--				  <div class="col-lg-3 col-md-6 col-sm-6 ser-icon text-center">-->
	<!--					 <div class="team-position">-->
	<!--						<div class="icon-wthree-top">-->
	<!--						   <img src="<?php echo e(url('public/static-pages-assets/images/t4.jpg')); ?>" alt="" class="img-fluid">-->
	<!--						</div>-->
	<!--						<div class="team-text-wthree">-->
	<!--						   <h4>-->
	<!--							  Zone Hill-->
	<!--						   </h4><br>-->
	<!--						   <p class="mt-3">Lorem ipsum dolor sit amet, </p>-->
	<!--						</div>-->
							
	<!--					 </div>-->
	<!--				  </div>-->
	<!--			   </div>-->
 <!--               </div>-->
	<!--    </section>-->
	<!-- end of Managemet Team Section-->

	<!--Regional Office -->
	<section class="regional" id="regional-office" style="    background: #e0eaff;padding: 3em;">
		<div class="container-fluid">
            <div class="feature-grids row text-center">
                <div class="col-lg-3 gd-bottom one">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">JIADA Regional Office Ranchi</h3><br>
                        <p> 5th Floor,  RIADA Bhawan Namkum, <br/> Namkum Industrial Area, Lowadih, Ranchi - 834010, Jharkhand, India <br></p>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">
                            JIADA Regional Office Bokaro</h3><br>
                        <p> 1st Floor,  BIADA Bhawan Balidih,Bokaro Industrial Area, Bokaro Jharkhand, India</p>

                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">JIADA Regional Office Adityapur</h3><br>
                        <p>BOKARO INDUSTRIAL AREA , BALIDIH PHASE -1</p>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">JIADA Regional Office SANTHAL PARGANA</h3>
                        <p>Singhania 43, Saraiyahat, Dumka.</p>
                    </div>
                </div>
            </div>        
		</div>
	</section>
    <!--end of Regional Office -->

    
     <!--gallery section-->
     <section class="gallery" id="gallery" style="padding: 3em; background: #3b5998;">
        <div class="container">
            <h3 class="heading" style="color: #fff;">Gallery</h3>
            <div class="row">
                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g1.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g1.png')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g2.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g2.png')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g3.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g3.jpg')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g4.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g4.jpg')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g5.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g5.jpg')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g6.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g6.png')); ?>" alt="img" style="width:150px"></a>
                </div>
            </div><!--rnd of row--><br>

            <div class="row">
                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g7.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g7.png')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g8.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g8.png')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g9.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g9.png')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g13.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g13.jpg')); ?>" alt="img" style="width:150px"></a>

                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g11.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g11.png')); ?>" alt="img" style="width:150px"></a>
                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g12.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g12.png')); ?>" alt="img" style="width:150px"></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g10.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g10.jpg')); ?>" alt="img" style="width:150px"></a>

                </div>

                <div class="col-md-2">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g14.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g14.jpg')); ?>" alt="img" style="width:150px"></a>
                </div>
            </div>
        </div>
    </section>

     <!--end od gallery-->

     <!--start of career-->
     <!-- <section class="career" id="career" style="padding:1em;background: #488304;height: 54px;">
        <div class="containe-fluid">
            <div class="col-md-10">
                <h3 style="color: #fff; font-weight: 100;"><marquee>Brows for Job Opening</marquee></h3>
            </div>
            
        </div>
    </section> -->


     <!--end of career-->



    

    <!--start of contact us-->
    <section class="contact" id="contact" style="background:#fff;padding: 3em;">
        <div class="container">
            <div class="row contact_information">
                <div class="col-md-6 contact_left">
                    <div class="contact_border p-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29428.620968223302!2d86.13331090993144!3d22.781051162712004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e4bc5e8ba913%3A0xc6059e37d017d3d5!2sAdityapur%2C%20Jamshedpur%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1576911922002!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="contact_right p-lg-5 p-4" style="padding: 3em;">
                        <form action="<?php echo e(url('/savecontact')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="w3_agileits_contact_left">
                                <h3 class="mb-3">Contact form</h3>
                                <input type="text" name="Name" placeholder="Your Name" required="">
                                <input type="email" name="Email" placeholder="Your Email" required="">
                                <input type="text" name="Phone" placeholder="Phone Number" required="">
                                <textarea name="Message" placeholder="Your Message Here..." required=""></textarea>
                            </div>
                            <div class="w3_agileits_contact_right">
                                <button type="submit">Submit</button>
                            </div>
                            <!-- <div class="clearfix"> </div> -->
                        </form>
                    </div>
                </div>
              </div>
            </div>
    </section>

     <!--end of contact -->
     <?php echo $__env->make("static-pages.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>

</html><?php /**PATH D:\xampp\htdocs\jiada\resources\views/static-pages/index.blade.php ENDPATH**/ ?>