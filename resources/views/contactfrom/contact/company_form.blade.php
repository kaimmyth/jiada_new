	<div class="content-page">
		<div class="content">
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
				<form  method="POST" enctype="multipart/form-data" action="{{url('company-ticket-form')}}" class="contact100-form validate-form">
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
							    <?php 
							        $readonly='';
							        if($email){
							            $readonly="readonly";    
							        } 
							    ?>
								<input class="input100" type="text" value="{{$email}}" <?php echo $readonly; ?>  name="email" placeholder="Email">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="col-md-4">
							<div class="wrap-input100 validate-input" data-validate = "Phone is required">
							    <?php 
							        $phone_readonly='';
							        if($phone){
							            $phone_readonly="readonly";    
							        } 
							    ?>
								<input class="input100" type="text" value="{{$phone}}" <?php echo $phone_readonly; ?> name="phone" placeholder="Phone">
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
	<script src="{{asset('public/form/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/form/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/form/js/main.js')}}"></script>