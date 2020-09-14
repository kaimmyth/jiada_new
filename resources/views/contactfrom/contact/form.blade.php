<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>{{ config('app.name', 'Ticket Form') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="A fully featured  can be used to build CRM, CMS,PAYROLL etc." name="description" />
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/form/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/form/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/form/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/form/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/form/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/form/css/main.css')}}">
	<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100">
		<center><div class="row head">
			<div class="col-md-2"> <a href="#"><img src="{{asset('public/form/images/log.png')}}" alt="logo" class="img-responsive" style="width: 65%;"> </a> </div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 text"> 
						<h3 style="font-weight: 600;">Jharkhand Industrial Area Development Authority</h3>
						<p> </p>
					</div>
				</div>
			</div>
			<div class="col-md-2"> <a href="#"><img src="{{asset('public/form/images/momentum.png')}}" alt="logo" class="img-responsive" style="margin-top: 20px; width: 100%;"> </a> </div>
		</div></center>
		<hr class="border-design">
		<div class="container">

			<div class="wrap-contact100">
				@if(Session::has('message'))
				<div class="alert alert-success wrap-input100">
					{{ Session::get('message')}}
				</div>				
				@endif
				@if ($errors->any())
				<div class="alert alert-danger wrap-input100">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div><br />
				@endif
				<!-- <div class="contact100-pic js-tilt" data-tilt>
					<img src="{{asset('public/form/images/img-01.png')}}" alt="IMG">
				</div> -->				
				<form  method="POST" enctype="multipart/form-data" action="{{url('ticket-form')}}" class="contact100-form validate-form">
					@csrf
					<div class="row frm">
						<div class="col-md-12">
							<span class="contact100-form-title" style="text-align: center;">
								Grievance & Support 
							</span>
						</div>
						
						<div class="col-md-4">
							<div class="wrap-input100 validate-input" data-validate = "Name is required">
								<input class="input100" type="text" name="requester_name" placeholder="Name">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="col-md-4">
							<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<input class="input100" type="text" name="email" placeholder="Email">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="col-md-4">
							<div class="wrap-input100 validate-input" data-validate = "Phone is required">
								<input class="input100" type="text" name="phone" placeholder="Phone">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-mobile" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="col-md-12">
							<div class="wrap-input100 validate-input" data-validate = "Description is required">
								<textarea class="input100" name="description" placeholder="Description"></textarea>
								<span class="focus-input100"></span>
							</div>
						</div>

						<div class="col-md-12">
							<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><p style="color: #048dce;">Add Attachment</p></a>
						</div>
						

						<div class="col-md-2">
							<div class="container-contact100-form-btn">
								<button class="contact100-form-btn">
									Submit
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="col-md-12 text-center">
			Copyright © 2019 All rights reserved. <br>Content Owned,Provide and Updated by Jharkhand Industrial Area Development Authority  </div>
			<!--div class="col-lg-6 col-md-6 col-sm-6 text-right">Design, Developed & Hosted By : <a href="http://www.dreamtechindia.co.in:8443/" target="_blank">Dreamtech Software & Services Pvt Ltd.</a></div-->
		</div>
	</footer>


	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title mt-0" id="mySmallModalLabel">Add Attachment</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12" style="margin-bottom: 10px;">
						<input type="text" class="form-control" placeholder="Document Name" value="" id="example-text-input">
					</div>

					<div class="col-md-12" style="margin-bottom: 10px;">
						<input type="file" class="form-control" placeholder="file" value="" id="example-text-input">
					</div>
					<div class="col-md-12" style="text-align: right;">
						<button class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



	<!--===============================================================================================-->
	<script src="{{asset('public/form/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/form/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/form/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/form/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/form/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('public/form/js/main.js')}}"></script>

</body>
</html>
