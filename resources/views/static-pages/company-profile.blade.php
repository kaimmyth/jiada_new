<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
  <title>Company Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

  <!-- //Default-JavaScript-File -->
  <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public/assets/css/profile.css')}}">
  <link rel="stylesheet" href="{{url('public/static-pages-assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{url('public/static-pages-assets/css/font-awesome.css')}}">

</head>
<style>
  .navbar-default .navbar-nav>li>a {
    color: #fff;
  }

  .abcd {
    width: 10%;
    position: absolute;
  }

  .abcd img {
    height: 54px;
  }


  .abcd2 {
    width: 12%;
    position: absolute;
    left: 44%;
  }

  .abcd2 img {
    height: 54px;
  }

  footer {
    background: #3f51b5;
    width: 100%;
    padding: 7px 0 1px 0;
}

.hiit{margin-top: 62px !important;}
/*-- banner --*/ 
.w3ls-banner{ 
	-webkit-background-size:cover;
	-moz-background-size:cover; 
	background-size:cover;
	position: relative;
    min-height: 550px;
} 


</style>
<!-- Head -->

<!-- Scrolling Nav JavaScript -->
<script
  src="https://demo.w3layouts.com/demos_new/template_demo/26-12-2017/blista-demo_Free/1662002773/web/js/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- banner -->
  @if($customer_details->banner)
    <div id="home"  class="w3ls-banner" style="background:url({{url('public/company_doc').'/'.$customer_details->banner}}) no-repeat center 0px;background-size: 100% 100%;">
  @else
    <div id="home" class="w3ls-banner" style="background:url('https://demo.w3layouts.com/demos_new/template_demo/08-01-2019/demo_Free/1969077679/web/images/banner.jpg') no-repeat center 0px;background-size: 100% 100%;">
  @endif
    <!-- header -->
    <div class="header-w3layouts">
      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">company</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1 style="margin-top: -11px;">

              <a class="navbar-brand" href="{{Request::url()}}">
                @if($customer_details->company_logo)
                <div class="abcd">
                  <img src="{{url('public/company_doc').'/'.$customer_details->company_logo}}" onerror="this.src='{{url('public/company_logo/default_company_logo.png')}}'"/>
                </div>
                @else
                <i class="fa fa-crosshairs" aria-hidden="true"></i>Company
                @endif
              </a>
            </h1>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right cl-effect-15">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              <li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
              <li><a class="page-scroll scroll" href="#home">Home</a></li>
              <li><a class="page-scroll scroll" href="#about">About</a></li>
              @if(count($services))
              <li><a class="page-scroll scroll" href="#services">Services</a></li>
              @endif
              
              @if(count($products))
              <li><a class="page-scroll scroll" href="#team">Product</a></li>
              @endif
              @if($customer_details->mate_heading)
              <li><a class="page-scroll scroll" href="#gallery">Material Detail</a></li>
              @endif
              @if($customer_details->is_contact_form)
              <li><a class="page-scroll scroll" href="#contact">Contact</a></li>
              @endif
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
    </div>
    <!-- //header -->
    <!--banner-->
    <!--Slider-->
    <div class="w3l_banner_info">
      <div class=" slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider3">
            <li>
              <div class="slider_banner_info">
                @if($customer_details->banner_heading)
                <h4>{{$customer_details->banner_heading}}</h4>
                @endif

                @if($customer_details->banner_description)
                <p>{{$customer_details->banner_description}}</p>
                @endif
              </div>

            </li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
      <!--//Slider-->

    </div>
    <!--//banner-->

  </div>
  <!-- //banner -->

  <!-- about -->
  <div class="about" id="about">
    <div class="agile-about w3ls-section text-center">
      <div class="container">
        <h3 class="heading-agileinfo">{{$customer_details->welcome_heading}}<span>{{$customer_details->welcome_desc}}</span></h3>
        <div class="agileits-about-grid">
          <p>{{$customer_details->company_description}}</p>
        </div>
      </div>
    </div>

  </div>
  <!-- //about -->


  <!-- services -->
  @if(count($services))
  <?php 
    if(count($services)==1){
        $col="col-md-12";
    }elseif(count($services)==2){
        $col="col-md-6";
    }else{
        $col="col-md-4";
    }
  ?>
  <div id="services" class="services">
    <div class="services">
      <h3 class="heading-agileinfo">Services<span>That performs mechanical work using </span></h3>
      <div class="container">
        
        <div class="row services-top-grids">
          @foreach($services as $services)
          <div class="{{$col}}">
            <div class="grid1">
              <span class="fa fa-fire"></span>
              <h4>{{$services->services_heading}}</h4>
              <p>{{str_limit($services->services_description, 120)}}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>

  </div>
@endif

  <!-- //services -->
  <!-- products start -->
  @if(count($products))
 <div class="Product-mnn">
    <div class="container">
        <div class="col-lg-12">
            <h1 class="theme-heading">Product(s)</h1>
        </div>
         @foreach($products as $product)
          <div class="col-md-4 col-sm-6">
            <div class="product-list-left-effect">
              <img src="{{ url('public/company_doc').'/'.$product->product_image}}" alt="" onerror="this.src='{{url('public/company_logo/default_product.jpg')}}'">
              <div class="product-overlay">
                <h4>{{$product->product_name}}</h4>
                <!--<p>sdfsdf</p>-->
              </div>
            </div>
          </div>
         @endforeach
        </div>
      </div>
  @endif
  <!-- //team -->
  <!-- gallery -->
  <div class="gallery" id="gallery">
    @if($customer_details->mate_heading)
    <div class="welcome">
      <div class="container">

        <div class="w3_welcome_grids">
          <div class="col-md-6 w3_welcome_grid_left">
            <h5>{{$customer_details->mate_heading}}</h5>
            <p>{{$customer_details->mate_description}}</p>
            <!--start material section-->
            <div class="panel-group welcome_panel" id="accordion" role="tablist" aria-multiselectable="true">
              @foreach($materials as $mat_key=>$material)
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{$mat_key}}">
                  <h4 class="panel-title asd">
                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                      href="#collapse{{$mat_key}}" aria-expanded="false" aria-controls="collapse{{$mat_key}}">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                        class="glyphicon glyphicon-minus" aria-hidden="true"></i>{{$material->mat_web_name}}
                    </a>
                  </h4>
                </div>
                <div id="collapse{{$mat_key}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$mat_key}}"
                  aria-expanded="false" style="height: 0px;">
                  <div class="panel-body panel_text">
                    <!--Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla-->
                    <!--pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit-->
                    <!--anim id est laborum.-->
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!--end material section-->
          </div>
          <div class="col-md-6 w3_welcome_grid_right">
            <img
              src="https://demo.w3layouts.com/demos_new/template_demo/28-04-2017/agrico_farm-demo_Free/461741071/web/images/2.jpg"
              alt="">
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    @endif
  </div>

  <!-- //gallery -->
  <!-- contact -->
  @if($customer_details->is_contact_form)
  
  <div class="contact" id="contact">

    <section class="contact-wthree py-sm-5 py-4" id="contact">
      <div class="container pt-lg-5">
        <div class="title-desc text-center pb-sm-3">
          <h3 class="main-title-w3pvt">contact us</h3>
          <!--<p>Inspired By Passion. Driven By Results.</p>-->
        </div>
        <div class="row mt-4">
          <div class="col-lg-5 text-center">
            <h5 class="cont-form">get in touch</h5>
            <div class="row flex-column" style="margin-top: -1em;">
              <div class="contact-w3">
                <span class="fa fa-envelope-open  mb-3"></span>
                <div class="d-flex flex-column" style="margin-top: 1em;">
                @if($customer_details->company_email)
                  <a href="mailto:example@email.com" class="d-block">{{$customer_details->company_email}}</a>
                @else
                  <p>not mention</p>
                @endif
                </div>
              </div>
              <div class="contact-w3 my-4">
                <span class="fa fa-phone mb-3"></span>
                <div class="d-flex flex-column" style="margin-top: 1em;">
                  @if($customer_details->mobile || $customer_details->land_line)
                      <p>{{$customer_details->mobile}}</p>
                      <p>{{$customer_details->land_line}}</p>
                  @else
                    <p>not mention</p>
                  @endif
                </div>
              </div>
              <div class="contact-w3">
                <span class="fa fa-home mb-3"></span>
                <address style="margin-top: 1em;">
                  <!--<p>71 Pilgrim Avenue <br>44 Shirley Ave.<br> Goldfield Rd. Broome St, Newyork.</p>-->
                  <?php
                  $add_arr = explode (",", $customer_details->address);
                  ?>
                  @if(count($add_arr))
                   <p>
                      @foreach($add_arr as $address)
                        {{$address}}<br>
                      @endforeach
                    </p>
                  @endif
                </address>
              </div>
            </div>

          </div>
          <div class="col-lg-7">
            <h5 class="cont-form">contact form</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                
            @endif
            <div class="contact-form-wthreelayouts">
              <form action="{{ url('contact_customer') }}" method="post" class="register-wthree">
                  @csrf
                  <br><br>
                <div class="form-group">
                  <label>
                    Your Name
                  </label>
                  <input type="hidden" name="customer_id" value="{{ $customer_details->id }}">
                  <input class="form-control" type="text" placeholder="Johnson" name="name" required="" id="name" maxlength="100" minlength="3">
                </div>
                <div class="form-group">
                  <label>
                    Mobile
                  </label>
                  <input class="form-control" type="text" placeholder="xxxx xxxxx" name="phone" required="" id="phone" maxlength="15" minlength="8">
                </div>
                <div class="form-group">
                  <label>
                    Email
                  </label>
                  <input class="form-control" type="email" placeholder="example@email.com" name="email" required="" id="email" maxlength="100" minlength="3">
                </div>
                <div class="form-group">
                  <label>
                    Your message
                  </label>
                  <textarea placeholder="Type your message here" name="message" class="form-control" required=""></textarea>
                </div>
                <div class="form-group mb-0">
                  <button type="submit"
                    class="btn btn-w3layouts btn-block  bg-theme1 color-white w-100 font-weight-bold text-uppercase"
                    style="background: #3f51b5;color: #fff;" onclick="return validate();">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endif
  <footer class="text-center py-5">

    <!-- logo -->
    

    @if($customer_details->company_logo)
    <div class="abcd2 text-center">
        <img src="{{url('public/company_doc').'/'.$customer_details->company_logo}}" onerror="this.src='{{url('public/company_logo/default_company_logo.png')}}'"/>
    </div>
    @else
    <h2 class="logo2 text-center ">
      <a href="{{Request::url()}}">
        <span class="fa fa-leaf"></span> Company Name
      </a>
    </h2>
    @endif

    <!-- //logo -->

    <!-- social icons -->
    @if($customer_details->company_logo)
    <div class="footercopy-social my-4 hiit">
    @else
      <div class="footercopy-social my-4">
    @endif
      <ul>
        <li>
          <a href="#">
            <span class="fa fa-facebook-square"></span>
          </a>
        </li>
        <li class="mx-2">
          <a href="#">
            <span class="fa fa-twitter-square"></span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <span class="fa fa-google-plus-square"></span>
          </a>
        </li>
        <li class="mx-2">
          <a href="#">
            <span class="fa fa-linkedin-square"></span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="fa fa-rss-square"></span>
          </a>
        </li>
        <li class="ml-2">
          <a href="#">
            <span class="fa fa-pinterest-square"></span>
          </a>
        </li>
      </ul>
    </div>
    <!-- //social icons -->
    <!-- copyright -->
    <div class="w3l-copy text-center">
      <p class="text-da" style="color:#fff;">© 2019 All rights reserved | Powered By
        <a href="">IT-SCIENT</a>
      </p>
    </div>
    <!-- //copyright -->

  </footer>

  </div>
  <!-- //contact -->

  <script type="text/javascript" src="{{url('public/static-pages-assets/js/jquery-2.1.4.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/static-pages-assets/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/static-pages-assets/js/responsiveslides.min.js')}}"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>

  <script type="text/javascript" src="{{url('public/static-pages-assets/js/SmoothScroll.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/static-pages-assets/js/move-top.js')}}"></script>
  <script type="text/javascript" src="{{url('public/static-pages-assets/js/easing.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>

  <!-- scrolling script -->
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
      });
    });
  </script>
  <script>
  function validate()                                    
    { 
      var phone = document.getElementById('phone');   
      if (phone.value == "")                           
      { 
        window.alert("Please enter your phone number."); 
        phone.focus();
        return false; 
      } 
      else if(isNaN(phone.value) )
      {
        window.alert("please enter numbers only");
        phone.focus();
        return false; 
      }  
    }
</script>
  <!-- //scrolling script -->

  <!-- Head -->
</body>

</html>