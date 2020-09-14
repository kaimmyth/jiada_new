<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="{{asset('public/assets/css/font-awesome-login.min.css')}}" rel="stylesheet" type="text/css" media="all">
	<link href="{{asset('public/assets/css/style-login.css')}}" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->

</head>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="agile_info" style="    margin-top: 7em;">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>Manage Your Business Account</h1>
					<p style="color:#000;">Donec dictum nisl nec mi lacinia, sed maximus tellus eleifend. Proin molestie cursus sapien ac eleifend.</p>
					<img src="public/images/image.jpg" alt="" />
					<a href="{{url('/')}}"><button class="btn btn-danger btn-block" type="button">Back to Home</button ></a>  
				</div>
			</div>
			<div class="w3_info">
				<h2>Login to your Account</h2>
				<p>Enter your details to login.</p>
				<form class="cmxform form-horizontal tasi-form" id="loginForm" method="POST" action="{{ route('login') }}"  novalidate="novalidate">
					@csrf
					<label>Email Address</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input  id="username" type="text" class="form-control input-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" required="" aria-required="true" autofocus placeholder="Username">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
					</div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input  type="password" id="password"  class="form-control input-lg @error('password') is-invalid @enderror" name="password" required="" aria-required="true" autocomplete="current-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
					</div> 
					<div class="login-check">
						 <label class="checkbox">
						 <input id="checkbox-signup" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup" for="remember">
                                 {{ __('Remember Me') }}
                             </label>
					</div>						
						<button class="btn btn-danger btn-block" type="submit">Login</button >                
				</form>
				
			</div>
		</div>
		<!-- //main content -->
	</div>
</div>
	
</body>
</html>



<script type="text/javascript">

    $(document).ready(function(){       
        $("#login").click(function(){  

            var username = $("#username").val();
            var password = $("#password").val();
         //      var recaptcha = $("#recaptcha").val();
         if(username.trim()==''){                
            $("#username").css("border","1px solid red");
            $("#username").focus();
            return false;
        }else{
            $("#username").css("border","");
        }       

        if(password==''){               
            $("#password").css("border","1px solid red");
            $("#password").focus();
            return false;
        }else{
            $("#password").css("border","");
        }       


        if(username.trim()!='' && password!=''){    
            $("#loader1").css("display","block");   
        }   

    })
    });

</script>