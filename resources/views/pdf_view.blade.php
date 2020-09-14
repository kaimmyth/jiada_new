<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0/css/bootstrap.min.css">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0/js/bootstrap.min.js"></script> 
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even) {
			background-color: #dddddd;
		}
		#ssp {
			text-align: right
		}
		.tr {
			text-align: right;
		}
		.tl {
			text-align: left;
		}
		.st{
			border: none;
			padding: 0px;
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="content">
		<div class="container-fluid">
			<!-- Page-Title -->
			<center>
				<div class="row">
					<div class="col-md-12">
						<div class="card" style="width:100%;">
							<div class="card-body">
								<form method="post" action="#" id="FormValidation" enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col-md-12">
											<h2 style="color: #F6420B"> JIADA  </h2>
											<p style="color: #1D73BC;">[ Office no-726, Ithome Tower-B, sect-62, Noida ]</p>
										</div>

										<div class="col-md-12" style="margin-bottom: 10px;">
											<h3 style="color: #F00D4D">Invoice </h3>
										</div>
										<hr>
										<div class="col-md-12">
											<table>
												<tr>
													<td class="st">
														<b>Customer ID:&nbsp;<span style="color: #1D73BC;"># S0-00172</span></b><br>
														<i>Invoice No:&nbsp;<span style="color: #1D73BC;">{{rand(1111111111,999999999)}}.</span></i><br>
														<i>Invoice Date:&nbsp;<span style="color: #1D73BC;">{{date('M j, Y')}}.</span></i>
													</td>
													<td class="st" style="text-align: right;">
														<h4><b>BILLING ADDRESS</b></h4>
														<i>Name :&nbsp;<span style="color: #1D73BC;">{{$data->f_name ?? ''}} {{$data->l_name ?? ''}}.</span></i><br>
														<i>Mobile :&nbsp;<span style="color: #1D73BC;">{{$data->mobile ?? ''}}.</span></i><br>
														<i>Company Name :&nbsp;<span style="color: #1D73BC;">{{$data->company ?? ''}}.</span></i><br>
														<i>Address :&nbsp;<span style="color: #1D73BC;">{{$data->cust_address ?? ''}}</span></i>
													</td>
												</tr>

												<tr>
													<td class="st">
														<i>Land Name :&nbsp;<span style="color: #1D73BC;">{{$data->land_name ?? ''}}.</span></i><br>
														<i>Plot No :&nbsp;<span style="color: #1D73BC;">{{$data->plot_no ?? ''}}.</span></i><br>
														<i>Plot Size :&nbsp;<span style="color: #1D73BC;">{{$data->plot_size ?? ''}} {{$data->uom ?? ''}}.</span></i><br>
														<i>Address :&nbsp;<span style="color: #1D73BC;">{{$data->address1 ?? ''}},<br>{{$data->city ?? ''}},{{$data->state ?? ''}}-{{$data->pincode ?? ''}}</span></i>
													</td>
													<!-- <td class="st" style="text-align: right;">
														<h4><b>SHIPPING ADDRESS</b></h4>
														<h5 style="color: #1D73BC;">942 Shady GroveRd5<br>MEMPHIS, TN<br>
														U.S.A. - 4117.</h5>
													</td> -->
												</tr>
											</table>
										</div>
									</div>
									<table class="table table-bordered mb-0" style="margin-top: 20px;">
										<thead>
											<tr>
												<th style="font-size: 12px;">SN.</th>
												<th style="font-size: 12px;">Base Rent</th>
												<th style="font-size: 12px;">Tax</th>
												<th style="font-size: 12px;">Insurance</th>
												<th style="font-size: 12px;">Maintanance</th>
												<th style="font-size: 12px;">Additional Charge</th>
												<th style="font-size: 12px;">Net Payable</th>
												<th style="font-size: 12px;">Net Pay</th>
												<th style="font-size: 12px;">Lease Time</th>
												<th style="font-size: 12px;">Start Date</th>

											</tr>
										</thead>
										<tbody>										
											<tr>
												<td style="font-size: 11px;">1</td>
												<td style="font-size: 11px;">{{$data->based_rent}}</td>
												<td style="font-size: 11px;">{{$data->tax}}</td>
												<td style="font-size: 11px;">{{$data->insurance}}</td>
												<td style="font-size: 11px;">{{$data->maintanance}}</td>
												<td style="font-size: 11px;">{{$data->additional_charge}}</td>
												<td style="font-size: 11px;">{{ucwords($data->net_payable)}}</td>
												<td style="font-size: 11px;">{{$data->net_pay}}</td>
												<td style="font-size: 11px;">{{$data->lease_time}} @if($data->lease_duration=='m') months. @else year. @endif</td>
												<td style="font-size: 11px;">{{date('M j,Y',strtotime($data->start_date))}}.</td>
											</tr>

										</tbody>
									</table>
								</div>
								<table>
									<thead>
										<tr>
											<th style="border: none !important;text-align: left;">Dated As : <span style="color: #1D73BC;">{{date('M j, Y')}}.</span></th>
											<!-- <th style="border: none !important;text-align: right;">Total Amount : <span style="color: #1D73BC;"></span></th> -->
										</tr>
									</thead>
								</table>

								<table style="margin-top: 20px;">
									<thead>
										<tr>
											<th style="border: none !important; text-align: left;color: #F6420B;">Employee Signature: </th>
											<th style="border: none !important; text-align: right;color: #F6420B;">Director Signature:</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</center>
				<center style="margin-top: 280px;" >
					<strong style="color: #1D73BC;">Thank You for Your Business</strong><br>
					<strong>if any question this invoice please contact</strong>
					<p>Name, Phone , email@address.com</p>
				</center>
			</div>
		</div>
	</body>

	</html>