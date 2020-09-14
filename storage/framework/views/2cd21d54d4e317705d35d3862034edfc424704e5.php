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

    <!-- //web-fonts -->

</head>
<style>
	.sub-main-w3 h3 {
    font-size: 24px;
    letter-spacing: 1px;
    text-transform: capitalize;
	color: #0a8ea0;
}
.sub-main-w3 input[type="text"], .sub-main-w3 input[type="email"], .sub-main-w3 input[type="password"] {
    outline: none;
    font-size: 15px;
    border: none;
    border: 1px solid #ddd;
    background: rgba(255, 255, 255, 0.21);
    width: 100%;
    box-sizing: border-box;
    color: #333;
    padding: 7px 20px;
    letter-spacing: 1px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}
.sub-main-w3 input[type="submit"] {
    color: #fff;
    background: #0a8ea0;
    border: none;
    width: 100%;
    padding: .7em 0em;
    outline: none;
    font-size: 17px;
    cursor: pointer;
    letter-spacing: 1px;
    text-transform: capitalize;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    margin-top: 2em;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}
.sub-main-w3 input[type="submit"]:hover {
    background: #333;
}
.icon1, .icon2 {
    position: relative;
    margin-top: 1.3em;
}
.rem-w3 {
    margin: 1.5em 0;
}
/*-- social-icons --*/
.sub-main-w3 {
    padding: 3em 3em;
   box-shadow: 8px 9px 17px 5px #4b5dbd6e;
    background: #fff;
}
.sub-main-w3 p {
    margin: 0;
    margin-top: 0.5em;
    font-size: 17px;
    letter-spacing: .5px;
}
.sub-main-w3 p a {
	color: #30c39e;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
    float: left;
    margin-top: -1em;
    padding: 0.4em;
}
img:hover {
    box-shadow: 0 0 0px 0px rgba(0, 140, 186, 0.5);
}
img {
    border: 0px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width:100%;
}
/*-- //social-icons --*/ 
</style>

<body>

    <?php echo $__env->make("static-pages.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<section class="signin py-5" style="background-image: linear-gradient(#d0d7ff, white);padding: 2em;padding-top: 6em;">
		<div class="container">
			<div class="row main-content-agile">
				<div class="col-md-6">	
					<div class="sub-main-w3 text-center">	
						<h3><u>Have a Problem ?</u></h3>
						<p class="mt-2 mb-4">Please Submit Your Request Here</p>
						<?php if(@Session::get('user_data_message')!=""): ?>
						<?php $message=Session::get('user_data_message');
						   $user_display_mess="Your Request  No Is "." ".$message; 
						   session()->forget('user_data_message');?>
						   <?php echo e($user_display_mess); ?>

						<?php endif; ?>
						<form action="<?php echo e(url('add_ticket_by_user')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
							<div class="icon1">
								<label>Name</label>
								<input type="text" class="form-control" name="requester_name" id="" required="" placeholder="Write Your Name Here"/>
							</div>
							<div class="icon1">
								<label>Email</label>
								<input type="email" class="form-control" name="email" id="" required="" placeholder="Write Your Email Id Here"/>
							</div>
							<div class="icon2">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" id="" required="" placeholder="eg. +91-0000 000 000"/>
							</div>
							<div class="icon2">
								<label>Description</label>
								<textarea class="form-control" id="description" name="description" rows="3" placeholder="Write Your Detail Here"></textarea>							
							</div>

							<div class="icon1">
								<label>Choose File</label>
								<input type="file" class="form-control" name="attachment" id=""/>
								<p style="float: left;margin-top: 1px;font-size: 16px;">please Upload file if You Have Any Query.</p>
							</div>
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php echo e(url('public/static-pages-assets/images/banner.png')); ?>" class="img-responsive"/>
				</div>
			</div>
		</div>
	</section>
    

    <?php echo $__env->make("static-pages.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\xampp\htdocs\jiada\resources\views/static-pages/ticket.blade.php ENDPATH**/ ?>