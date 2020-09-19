<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="{{url('public/login_assest/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-deep_purple.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/login_assest/css/style.css')}}">

    <title>Jiada  Login</title>
    <style>
        .mdl-textfield__label {
            margin-bottom: 0;
            color: #4e5050;
            font-weight: normal;
        }
        
        .mdl-textfield--floating-label.is-focused .mdl-textfield__label,
        .mdl-textfield--floating-label.is-dirty .mdl-textfield__label {
            text-transform: uppercase
        }
        
        .has-feedback label~.form-control-feedback {
            top: 15px;
        }
        
        .mdl-textfield {
            width: 100%;
        }
        
        .mdl-checkbox__label {
            cursor: text;
            font-size: 12px;
            float: left;
            color: #b0b3b4;
            font-weight: normal;
        }
        
        .mdl-checkbox__box-outline {
            border: 1px solid #b0b3b4;
        }
        
        .mdl-textfield__input {
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.48);
            display: block;
            font-size: 16px;
            margin: 0;
            padding: 4px 0;
            width: 100%;
            background: 0 0;
            text-align: left;
            color: inherit;
            font-weight: bold;
        }
        
        .mdl-switch__label {
            float: left;
            font-weight: normal;
            color: #4e5050;
            font-size: 14px;
        }

        .carousel-btns{
            margin-bottom:0px;
        }

        /* .col-md-5 {
            border:1px solid black;
        }

        .col-md-12 {
            border:1px solid black;
        } */

        .imgcontainer img {
            height:150px;
        }  

        .imgcontainer2 img {
            height:40px;
            margin:20px 0px;
        }
        
        canvas {
  display: block;
  vertical-align: bottom;
}

#particles-js {
    width: 100vw;
    height: 100vh;
    background: #00356B;
    margin-top: -2em;
    overflow: hidden;
}
#particle {
    background: linear-gradient(to top, #03A9F4,#673AB7, #3F51B5);
  position:fixed;
  position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;
  z-index:0; 
}

p {
    font-size: 14px;
    letter-spacing: 0;
    margin: 0 0 16px;
    text-align: center;
}
#overlay {
  position: relative;
}
.mdl-textfield__input {
    border: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.48);
    display: block;
    font-size: 16px;
    margin: 0;
    padding: 4px 0;
    width: 85%;
    background: 0 0;
    text-align: left;
    color: inherit;
  font-weight:100;
}
@media(max-width: 500px){
    #particles-js{
            overflow: unset;
        }
    }
    @media(max-width: 780px){
    #particles-js{
            overflow: unset;
        }
    }
    </style>
</head>

<body  id="particles-js">
   
    <div id="particle"></div>
    <div id="overlay">
    <div class="container">
        <div class="center-block">
            <div class="col-lg-4 no-padding" style="z-index:1">
                <div class="mlt-content">
                    <div class="imgcontainer">
                       <a href="http://baba.software/index.php"><img src="{{url('public/login_assest/img/baba logo.png')}}" alt="logo"/></a>
                    </div>
                   
                    <ul class="nav nav-tabs">
                       <!-- <li class="active"><a href="#register" data-toggle="tab">Register</a></li>-->
                        <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                      
                        <div class="tab-pane fade in active" id="login">
                            <form action="{{url('login')}}" method="post">
                                @csrf
                                <center>
                                    <div>
                                        <!-- for register login -->
                                        @if(!empty($success))
                                        <div class="alert alert-info alert-dismissible" style="margin-left:25px;margin-right:25px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{$success}}
                                        </div>
                                        @endif
                                        <!-- for register login -->
                                        @if(!empty($error))
                                        <div class="alert alert-info alert-dismissible" style="margin-left:25px;margin-right:25px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{$error}}
                                        </div>
                                           
                                        @endif
                                    </div>
                                <div class="col-lg-12 col-lg-offset-1 col-lg-offset-right-1 col-md-12 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        <!-- <label class="mdl-textfield__label" for="usernameAddress">username Address</label> -->
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-lg-offset-1 col-lg-offset-right-1 col-md-12 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right " >
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                        </div>
                                </div>
                                <div class="col-lg-12 col-lg-offset-1 col-lg-offset-right-1 col-md-12 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right {{ $errors->has('CaptchaCode') ? ' has-error' : '' }} " >
                                        <div   class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            {!! captcha_image_html('LoginCaptcha') !!}<br>
                                            <input type="text" class="form-control" name="CaptchaCode" id="CaptchaCode" style="padding: 1.6em;">
                                            @if ($errors->has('CaptchaCode'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('CaptchaCode') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                </div>
                                <div class="col-lg-12 col-lg-offset-1 col-lg-offset-right-1 col-md-12 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right " style="margin-top: -49px;">
                                    <button class="btn lt-register-btn">login <i class="icon-right "></i></button>
                                </div><BR>

                                <!-- <div class="imgcontainer2">
                                    <a href="http://paatham.in/"><img src="img/paatham new.png" alt="logo"/></a>
                                 </div> -->
                                 <div class="col-md-12 mt-2" style="padding: 1em;">
                                    <a href="http://baba.software/privacy.php" style="color: rgb(12, 11, 11);">Privacy Policy</a> | <a href="http://baba.software/terms-condition.php" style="color: rgb(12, 11, 11);">Terms of Use</a><br>
                                 </div>
                                </center>
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 no-padding">
                <div class="mlt-carousel">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive center-block" src="{{url('public/login_assest/img/payroll.png')}}" alt="step1">
                                <div style="padding: 2em;">
                                    <p style=" color:#fff; text-align: center;">Payroll Baba is a comprehensive payroll software that maintains salary information and settings, taking inputs from various sources and produces 100% accurate payroll.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="{{url('public/login_assest/img/crm.png')}}" alt="step2">
                                <div style="padding: 2em;">
                                    <p style=" color:#fff; text-align: center;">Best Automated CRM Software for Business Growth. Get started in minutes below — it’s 100% free.</p>
                                </div> 
                            </div>
                            <div class="item" style="background: #eda0c4;">
                                <img class="img-responsive center-block" src="{{url('public/login_assest/img/recruitment.png')}}" alt="step3">
                                <div style="padding: 2em;">
                                    <p style=" color:#fff; text-align: center;margin-top: -3em;">Modern Recruiting Tools To Automate The Hiring Process By Making It Easier For Your Team To Share, View And Collaborate On Your Candidate Pipeline.</p>
                                </div>
                                
                            </div>
                            <div class="item" style="background: #0ba5a3;">
                                <img class="img-responsive center-block" src="{{url('public/login_assest/img/lms.png')}}" alt="step4">
                                <div style="padding: 2em;">
                                    <p style=" color:#fff; text-align: center;margin-top: -3em;">Baba Software is the powerfully simple way for teams to learn and deliver even bigger result. With Baba, you can up skill your teams into modern roles and improve workflow efficiency.</p>
                                </div>
                            </div>
                            <div class="item" style="background: #a3ca71;">
                                <img class="img-responsive center-block" src="{{url('public/login_assest/img/ar.png')}}" alt="step5">
                                <div style="padding: 2em;">
                                    <p style=" color:#fff; text-align: center;margin-top: -3em;">Baba Software is a provider of cloud-based Accounts receivable software.</p>
                                </div>
                            </div>
                            <div class="item" style="background: #fde7f4;">
                                <img class="img-responsive center-block" src="{{url('public/login_assest/img/sales1.png')}}" alt="step6">
                                <div style="padding: 2em;">
                                    <p style=" color:#000; text-align: center;margin-top: -3em;">A Simple SALES Built To Acquire, Engage And Retain Customers. Get Started In Minutes Below — It’s 100% Free.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-btns">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            
                           
                        </ol>
                    </div>
                    <!--mlt-carousel-->
                </div>
            </div>
            <!--center-block-->

            <div class="col-md-12 text-center" style="color:rgb(250, 248, 248); padding-top:50px;">
                Jiada ©  BABA Software. All rights reserved.
            </div>
        </div>
        
           
        <!--container-->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script src="{{url('public/login_assest/node_modules/jquery/dist/jquery.min.js ')}}"></script>
    <script src="{{url('public/login_assest/node_modules/bootstrap/dist/js/bootstrap.min.js ')}}"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <script>
        //Google analytics.
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79865537-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        //Form validation.
        $('form').validate({
            rules: {
                fname: {
                    minlength: 3,
                    maxlength: 15,
                }
            },
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(id_attr).removeClass('icon-ok-circled2').addClass('icon-cancel-circled2');
            },
            unhighlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(id_attr).removeClass('icon-cancel-circled2').addClass('icon-ok-circled2');
            },
        });
    </script>
<script>
    var options = {"particles":{"number":{"value":99,"density":{"enable":true,"value_area":552.4033491425909}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":3},"image":{"src":"img/github.svg","width":70,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":2,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1.5782952832645452,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false};
particlesJS("particle", options);

</script>
<script>
$( document ).ready(function() {
    $(".BDC_CaptchaDiv").css('width',"280px");
    $(".BDC_CaptchaDiv").css('height',"50px");
    $(".BDC_CaptchaDiv").css('position',"relative");
    $("#LoginCaptcha_CaptchaIconsDiv").css('left',"269px");
    $("#LoginCaptcha_CaptchaIconsDiv").css('width',"24px !important");
    $("#LoginCaptcha_CaptchaIconsDiv").css('position',"absolute");
    $("#LoginCaptcha_CaptchaIconsDiv").css('top',0);
});
</script>
</body>

</html>