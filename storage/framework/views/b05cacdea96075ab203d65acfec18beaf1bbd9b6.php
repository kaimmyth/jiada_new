<?php if(auth()->guard()->guest()): ?>

<?php else: ?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta charset="utf-8" />
	<title><?php echo e(config('app.name', 'Dashboard')); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="A fully featured  can be used to build CRM, CMS,PAYROLL etc." name="description" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link rel="shortcut icon" href="<?php echo e(asset('public/assets/images/favicon_1.ico')); ?>">
	<link href="<?php echo e(asset('public/sweetalert2/sweetalert2.css')); ?>" rel="stylesheet" type="text/css">
	<!-- Fontawasom -->
	<link href="<?php echo e(asset('public/assets/fontawesome/css/fontawesome.min.css')); ?>" rel="stylesheet">
	<!-- Plugins css -->
	<link href="<?php echo e(asset('public/assets/plugins/modal-effect/css/component.css')); ?>" rel="stylesheet">
	<!--Form Wizard-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/plugins/jquery-steps/jquery.steps.css')); ?>">

	<!-- Custom Files -->
	<link href="<?php echo e(asset('public/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
	<script src="<?php echo e(asset('public/assets/js/modernizr.min.js')); ?>"></script>

	<!-- Date And TimePicker -->
	<link href="<?php echo e(asset('public/assets/plugins/timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('public/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">

	<!-- DataTables -->
	<link href="<?php echo e(asset('public/assets/plugins/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/plugins/datatables/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/plugins/datatables/fixedHeader.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/plugins/datatables/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/plugins/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/plugins/datatables/scroller.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('public/assets/icons/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<!-- Alert -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
	<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<!-- Google translate  -->
	<!--used for company ticket page only -->
	<link href="<?php echo e(asset('public/form/css/company-main.css')); ?>" rel="stylesheet" type="text/css">
	<!--used for company ticket page only end -->
	<style type="text/css">
		body {
			/*  background: #FFF url("https://i.imgur.com/KheAuef.png") top left repeat-x;*/
			font-family: 'Play', sans-serif;
		}

		#loader {
			display: block;
		}

		#loading {
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 100;
			width: 100vw;
			height: 100vh;
			background-color: rgba(255, 255, 255, 0.5);
			background-image: url(<?php echo e(url('public/assets/images/loader.gif')); ?>);
		background-repeat: no-repeat;
		background-position: center;
		}



		hr.new2 {
			border-top: 1px dashed #000;
		}

		.breadcrumb>li+li:before {
			padding: 0 4px;
			color: #000000;
			content: "/\00a0";
		}

		.topbar .topbar-left {
			background: #a7e4ff;
			float: left;
			height: 70px;
			position: relative;
			width: 240px;
			z-index: 1;
			border: 1px solid #ffffff;
		}

		.content-page>.content {
			margin-bottom: 37px;
			margin-top: 29px;
			padding: 20px 10px 15px 10px;
			background: #eaf4fd;
		}
	</style>
	<style type="text/css">
		.pace-active {
			display: none !important;
		}

		.popupbox {
			background-color: rgba(248, 248, 248, .60);
			position: fixed;
			height: 100%;
			width: 100%;
			z-index: 111;
			top: 0;
		}

		.loaderpopupbox {
			background-color: rgba();
			position: fixed;
			height: 100%;
			width: 100%;
			z-index: 100;
			top: 0;
		}

		.popup {
			margin: 15% 30%;
			padding: 8px;
			position: relative;
			width: 40%;
			border-radius: 5px;
		}

		@media(max-width:767px) {
			.popup {
				margin: 40% 30%;
				width: 40%;
				border-radius: 5px;
			}

			.popupbox .popup .loader12 img {
				width: 100px;
				height: 100px;
			}

			.ml-bg {
				background-position: bottom left;
				background-color: #4cc0bf;
				;
			}

			.loaderpopupbox .popup .loader10 img {
				width: 50px;
				height: 50px;
			}

			.ml-bg {
				background-position: bottom left;
				background-color: #4cc0bf;
				;
			}

			.blank-loader .content-wrapper .flexbox-container {
				display: -webkit-box;
				display: -webkit-flex;
				display: -moz-box;
				display: -ms-flexbox;
				display: block;
				-webkit-box-align: center;
				-webkit-align-items: center;
				-moz-box-align: center;
				-ms-flex-align: center;
				align-items: center;
				height: fit-content;
			}
		}

		.topbar .topbar-left {
			background: #ffffff;
			float: left;
			height: 70px;
			position: relative;
			width: 203px;
			z-index: 1;
			border: 1px solid #317eeb;
		}

		#wrapper.enlarged .topbar .topbar-left {
			width: 93px !important;
		}

		.logo {
			color: #000 !important;
			font-size: 12px;
			font-weight: 600;
			line-height: 18px;
			text-transform: uppercase;
			margin-top: 1em;
		}

		.navbar-default {
			background-color: #317eeb;
			border-radius: 0px;
			border: none;
			-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
			margin-bottom: 0px;
			padding: 0px;
			height: 70px;
		}
	</style>

	<style type="text/css">
		@media  screen and (max-width: 1366px) {
			.side-menu {
				bottom: 0;
				top: 0;
				width: 202px;
				z-index: 3;
				font-size: 11px !important;

			}

			#sidebar-menu ul ul a {
				color: #75798B;
				display: block;
				padding: 10px 25px 10px 65px;
				font-size: 11px !important;
			}

			.content-page {
				margin-left: 198px !important;
				overflow: hidden;
			}
		}

		.popover-body {
			display: none;
		}

		.popover-header {
			display: none;
		}

		.arrow {
			display: none;
		}
	</style>
	<style>
		.outter-wp {
			padding: 1.5em 1.5em;
			margin-bottom: 2em;
		}

		.widget {
			width: 20.5%;
			padding: 0px;
		}

		.widget.states-mdl {
			margin: 0 2%;
		}

		.widget.states-thrd {
			margin-right: 2%;
		}

		.stats-left {
			float: left;
			width: 70%;
			background-color: #c4c4c4;
			text-align: center;
			padding: 0.58em;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			-o-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			-moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);

		}

		.states-mdl .stats-left {
			background-color: #c4c4c4;
		}

		.states-mdl .stats-right {
			border: none;
			border-right: 2px solid #00C6D7;
		}

		.states-last .stats-left {
			background-color: #c4c4c4;
			border: none;
		}

		.states-last.stats-right {
			background-color: #eee;
			border: none;
			border-right: 2px solid #00C6D7;
		}

		.states-thrd .stats-left {
			background-color: #c4c4c4;
		}

		.widget.states-last .stats-right {
			border: none;
			border-right: 2px solid #00C6D7;
		}

		.stats-right {
			float: right;
			width: 30%;
			text-align: center;
			padding: 17px;
			background-color: #eee;
			border: none;
			border-right: 2px solid #052963;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			-o-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			-moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		}

		.stats-left h5 {
			color: #000;
			font-size: 1em;
		}

		.stats-left h4 {
			font-size: 21px;
			color: #000;
			margin-top: 10px;
			font-weight: 400;
		}

		.stats-right label {
			font-size: 2em;
			color: #3E3D3D;
		}

		.col-md-3 {
			-ms-flex: 0 0 25%;
			flex: 0 0 25%;
			max-width: 23%;
			box-shadow: 0px 0px 0px #959595;
		}

		@media (max-width:1024px) {
			.widget {
				width: 49%;
				padding: 0px;
			}

			.widget.states-mdl {
				margin: 0 0% 0 2%;
				margin-bottom: 1.7%;
			}
		}

		@media (max-width:414px) {

			.widget {
				width: 100%;
				padding: 0px;
				float: left;
				margin: 10px 0;
			}

			.widget.states-mdl {
				margin: 0 0% 0 0%;
				margin-bottom: 0;
			}

			.widget.states-last {
				margin: 0;
			}

			.outter-wp {
				padding: 0.5em 1em;
				margin-bottom: 2em;
			}
		}

		.goog-te-banner-frame {
			visibility: hidden !important;
		}

		.goog-logo-link {
			display: none !important;
		}

		.goog-te-gadget {
			font-family: arial;
			font-size: 11px;
			color: #317eeb !important;
			white-space: nowrap;
			margin-top: 22px !important;
		}


		@media (max-width: 1280px) {

			.topbar .topbar-left {
				width: 202px;
			}

		}
	</style>

</head>

<!-- Page Loader  -->

<body class="fixed-left" id="loader">
	<div id="loading"></div>

	<!-- Ajax Page Loader -->
	<div class="preload popupbox loader1" id="loader1" style="display:none;">
		<div class="popup">
			<center>
				<span class="loader12" style="display:block;"><img src="<?php echo e(url('public/assets/images/loader.gif')); ?>" height="40" /></span>
			</center>
		</div>
	</div>
	<!-- Begin page -->
	<div id="wrapper">

		<!-- Top Bar Start -->
		<div class="topbar">
			<!-- LOGO -->
			<div class="topbar-left" style="background: #c8e7ff; border: 2px solid #8BC34A;">
				<div class="text-center">
					<a href="<?php echo e(url('dashboard')); ?>" class="logo">
						<span>
							<p style="margin-top:7px;color:#248957;font-size:30px;margin-right: 34px;"><br>CRIS</p>
						</span></a>
				</div>
			</div>
			<!-- Button mobile view to collapse sidebar menu -->

			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<ul class="list-inline menu-left mb-0">
						<li class="float-left">
							<a href="#" class="button-menu-mobile open-left">
								<i class="ion-arrow-swap"></i>
							</a>
						</li>
						<li class="nav navbar float-left">

							<img src="<?php echo e(asset('public/form/images/toplogo.png')); ?>" style="height:60px;float:left;margin-left: 9px;">
							<form role="search" class="navbar-form">
								<h4 style="margin-top: 16px;color: #fff;">Jharkhand Industrial Area Development Authority</h4>
							</form>

						</li>
					</ul>
					<ul class="nav navbar-right float-right list-inline">
						<?php 
						        $notify =DB::table('ticket')->select('id','requester_name','created_at')->where('is_notify',0)->get(); 
						    ?>
						<?php if(Auth::user()->id==1 && count($notify)): ?>
						<li class="dropdown d-none d-sm-block">
							<a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
								<i class="md md-notifications"></i> <span class="badge badge-pill badge-xs badge-danger"><?php echo count($notify); ?></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-lg">
								<?php $__currentLoopData = $notify; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="list-group">
									<a href="<?php echo e(URL('display-ticket/'.$noti->id)); ?>" class="list-group-item">
										<div class="media">
											<div class="media-left pr-2">
												<i class="md md-storage"></i>
											</div>
											<div class="media-body clearfix">
												<div class="media-heading"><?php echo e($noti->requester_name); ?></div>
												<p class="m-0">
													<small><span class="text-primary">created a new ticket at</span> <?php echo e($noti->created_at); ?> </small>
												</p>
											</div>
										</div>
									</a>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</li>
						<?php endif; ?>
						<li class="dropdown open">
							<?php $logo = DB::table('users')->where('id',Auth::user()->id)->selectRaw("concat('".url('public/images/user_profile/').'/'."',user_image) as logo")->first(); ?>
							<a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
								<img src="<?php if(@$logo->logo!=''): ?> <?php echo e(@$logo->logo); ?> <?php else: ?> <?php echo e(asset('public/assets/images/users/avatar-1.jpg')); ?> <?php endif; ?>" alt="user-img" class="rounded-circle"> &nbsp;&nbsp;<?php echo e(Auth::user()->name); ?> </a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo e(url('user-profile')); ?>" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile</a></li>
								<li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-settings mr-2"></i> Settings</a></li>
								<li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-lock mr-2"></i> Lock screen</a></li>
								<li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();" class="dropdown-item"><i class="md md-settings-power mr-2"></i> <?php echo e(__('Logout')); ?></a></li>
								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
									<?php echo csrf_field(); ?>
								</form>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			
		
			<?php if($errors!=""): ?>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<script>
				$(document).ready(function () {
					swal({
						title: "Error Occured! Error",
						text: "<?php echo e($message); ?>",
						icon: "error",
					});
				});
			</script>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</div>
		<!-- Top Bar End -->

		<!-- Left Menu Panel -->
		<?php echo $__env->make('layouts.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php endif; ?><?php /**PATH C:\xampp\htdocs\jiada_new\resources\views/layouts/header.blade.php ENDPATH**/ ?>