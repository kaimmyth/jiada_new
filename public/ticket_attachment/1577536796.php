<!DOCTYPE html>
<html lang="en">

<head>
    <title>jiada</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!--// Meta tag Keywords -->

    <!-- Recent Trips section css files-->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/owl.carousel.css')}}" type="text/css" media="all">
    <link href="{{url('public/static-pages-assets/css/owl.theme.css')}}" rel="stylesheet">
    <!-- //Recent Trips section css files -->

    <!-- Testimonials -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/flexslider.css')}}" type="text/css" media="screen" />
    <!-- //Testimonials -->

    <!-- css files -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/font-awesome.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gabriela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">

    <!-- //web-fonts -->

</head>

<body>

    @include("static-pages.header")

    <!-- Shop -->
    <div class="container-fluid" style="width: 80%;">
    <div class="innerf-pages section" style="padding: 2em;">
        <!--search-->
        <div class="col-md-12" id="searchbar">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" style="    width: 96%;">
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit">Go</button>  
                 </div>
              </div>
        </div>
        <!--end of search-->
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<!-- grid left -->
				<div class="side-bar col-lg-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							Industry</h3>
                        <ul style="height: 100px;overflow-y: scroll;">
                        @foreach($industries as $industry)
							<li>
								<input type="checkbox" class="checked" name="industry_name[]" onclick="ajaxFunc()" value="{{$industry->id}}">
								<label for="industry_name">{{$industry->industires_name}}</label>
							</li>
						@endforeach	
                            

						</ul>
					</div>
				
					<!-- discounts -->
					<!-- <div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Turn Over(in Crore Rs.)</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="turn_over[]" id="turn_over1" onclick="ajaxFunc()" value="1">
								<label for="size1">0 - 1cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="turn_over[]" id="turn_over2" onclick="ajaxFunc()" value="2">
								<label for="size2">1 - 5cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="turn_over[]" id="turn_over3" onclick="ajaxFunc()" value="3">
								<label for="size3">5 - 100cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="turn_over[]" id="turn_over4" onclick="ajaxFunc()" value="4">
								<label for="size4">100 - 500cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="turn_over[]" id="turn_over5" onclick="ajaxFunc()" value="5">
								<label for="size5">500+</label>
							</li>
						</ul>
					</div> -->
                    <!-- //discounts -->
                    
                    	<!--preference -->
					<!-- <div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Company Size</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="company_size[]" id="company_size1" value="1" onclick="ajaxFunc()">
								<label for="arr1">10 - 50</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="company_size[]" id="company_size2" value="2" onclick="ajaxFunc()">
								<label for="arr2">50 - 100</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="company_size[]" id="company_size3" value="3" onclick="ajaxFunc()">
								<label for="arr3">100 - 200</label>
							</li>

						</ul>
					</div> -->
					<!-- // preference -->
					<!-- Binding -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Company Type</h3>
						<div class="d-flex">
							<ul>
                              @foreach($company_types as $company_type)
								<li>
									<input type="radio" class="checked" name="comp_type[]" id="comp_type" value="{{$company_type->id}}" onclick="ajaxFunc()">
									<label for="color1">{{$company_type->company_type}}</label>
								</li>
                               @endforeach

								
							</ul>
						</div>
					</div>
                    <!-- //Binding -->		
                    
                    <!-- JIADA Region -->
					<!-- <div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">JIADA Region</h3>
						<div class="d-flex">
							<ul>
                           
								<li>
									<input type="checkbox" class="checked" name="location_zone[]" id="location_zone" value="1" onclick="ajaxFunc()">
									<label for="color1">Adityapur</label>
								</li>
                                <li>
									<input type="checkbox" class="checked" name="location_zone[]" id="location_zone" value="2" onclick="ajaxFunc()">
									<label for="color1">Dhanbad</label>
								</li>
                                <li>
									<input type="checkbox" class="checked" name="location_zone[]" id="location_zone" value="3" onclick="ajaxFunc()">
									<label for="color1">Jamshedpur</label>
								</li>
                               
								
							</ul>
						</div>
					</div> -->
					<!-- //JIADA Region -->	


                    <div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Waste Materials</h3>
						<div class="d-flex">
							<ul>
                           @foreach($materials as $material)
								<li>
									<input type="checkbox" class="checked" name="material_name[]" id="material_name" value="{{$material->id}}" onclick="ajaxFunc()">
									<label for="color1">{{$material->material_name }}</label>
								</li>
                             @endforeach  
                               
								
							</ul>
						</div>
					</div>	
				</div>
                <!-- //grid left -->



            <div class="col-md-9" style="margin-top: -1em; width: 70%">


           
            <div class="job-post-main row my-3" id="company_details">
                @foreach($customer_details as $key_comp => $value_comp)
                <div class="col-md-9 job-post-info text-left" style="margin-top:10px;" >
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                    <h4>
                            <a href="http://itscient.com/automobile"></a>
                        </h4>
                        <p class="my-2">{{$value_comp['company']}}</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> {{$value_comp['company_type']}}</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>{{$value_comp['address']}}</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i>{{$value_comp['turn_over']}}</li>
                                
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="http://itscient.com/automobile" class="aply-btn ">View Profile</a>
                </div>
                @endforeach
            </div>
            
            <!--//job2-->
            <!--/job3-->

        </div>
       

            </div>
        </div>
    </div>
</div>




  
   
    <!-- footer start here -->
     <!-- footer start here -->
     <section class="footer-agile">
        <div class="container">
            <div class="footer-btm-agileinfo">
                <div class="col-md-6 col-xs-12 footer-grid w3social">
                    <h3>About us</h3>
                    <p class="footer-p1">JIADA, is responsible for the development of industrial areas in the State of Jharkhand. The administrative set up consists of a Head Office located at Ranchi and is supported by regional offices at Adityapur, Bokaro, Ranchi and Dumka. JIADA is responsible for acquisition of land, development of infrastructure facilities like road, drainage, water supply, public utilities, etc.</p>
                </div>
                <div class="col-md-3 col-xs-12 footer-grid">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><i class="fa fa-phone"></i> +91-651 2460125 </li>
                        <!-- <li><i class="fa fa-fax"></i>+12 222 333 2365</li> -->
                        <li><i class="fa fa-map-marker"></i>Jharkhand Industrial Area Development Authority,<br>5th Floor RIADA Bhawan Namkum, <br/>Lowadih, Ranchi<br/>Jharkhand - 834010<br/></li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:jiada.rnc@gmail.com">jiada.rnc@gmail.com</a></li>
                        <li><i class="fa fa-globe"></i><a href="http://jiada.baba.software">jiada.baba.software</a></li>
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
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assetsjs/bootstrap.js')}}"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->

	<script src="{{url('public/static-pages-assets/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>



    <script src="{{url('public/static-pages-assets/js/owl.carousel.js')}}"></script>
    <!-- Recent Trips Script-->
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay: true,
                items: 3,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [414, 4]

            });

        });
    </script>
    <!-- //Recent Trips section Script-->
    <!-- //Recent Trips js file-->

    <!-- start-smoth-scrolling -->
    <script src="{{url('public/static-pages-assets/js/SmoothScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/easing.js')}}"></script>
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
    <script src="{{url('public/static-pages-assets/js/responsiveslides.min.js')}}"></script>
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

    
    
<script>
function ajaxFunc(){
var industry_ids = $("input[name='industry_name[]']:checked").map(function(){
    return $(this).val();
}).get();
var company_type_ids = $("input[name='comp_type[]']:checked").map(function(){
    return $(this).val();
}).get();
var material_ids = $("input[name='material_name[]']:checked").map(function(){
    return $(this).val();
}).get();
if((industry_ids!="") || (company_type_ids!="") || (material_ids!=""))
{
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});
$.ajax({
    url:"{{url('unit-listing/industry-filter')}}",
    data: {'industry_ids':industry_ids,'company_type_ids':company_type_ids,'material_ids':material_ids},
    method:"GET",
    contentType:'application/json',
    dataType:"json",
    beforeSend: function(data){
        $(".loader").fadeIn(300);
    },
    error:function(xhr){
        alert("error"+xhr.status+","+xhr.statusText);
        $(".loader").fadeOut(300);
    },
    success:function(data){
            $("#company_details").html("");
            for(var i=0;i<data.length;i++)
            {
                $("#company_details").append(`<div class="col-md-9 job-post-info text-left">
                <div class="job-post-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="job-single-sec">
                <h4>
                    <a href="http://itscient.com/automobile"></a>
                    </h4>
                   
                    <h4 class="my-2">`+data[i].company+`</h4>
                    <ul class="job-list-info">
                        <li>
                            <i class="fas fa-briefcase"></i> Comera</li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>`+data[i].address+`</li>
                        <li>
                            <i class="fas fa-rupee-sign"></i>30000 - 50000 / Annum</li>
                    </ul>
                    
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 job-single-time text-right">
                <a href="http://itscient.com/automobile" class="aply-btn ">View Profile</a>
            </div><br><br><br>`);
            }
            $(".loader").fadeOut(300);
    }
});
}
else{
    $("#company_details").html("No Record Found !!");
}
}
    </script>


</body>

</html>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->

	<script src="{{url('public/static-pages-assets/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>



    <script src="{{url('public/static-pages-assets/js/owl.carousel.js')}}"></script>
    <!-- Recent Trips Script-->
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay: true,
                items: 3,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [414, 4]

            });

        });
    </script>
    <!-- //Recent Trips section Script-->
    <!-- //Recent Trips js file-->

    <!-- start-smoth-scrolling -->
    <script src="{{url('public/static-pages-assets/js/SmoothScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/easing.js')}}"></script>
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
    <script src="{{url('public/static-pages-assets/js/responsiveslides.min.js')}}"></script>
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
	


</body>

</html>