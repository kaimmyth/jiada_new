<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }
  .col-sm-12{
    padding-left: 0px !important;
    padding-right: 8px !important;
  }

  @media screen and (max-width: 1366px) {
   .inp{
    width: 52% !important;
  } 

  .inp2{
    width: 59% !important;
  } 

  .frs{
    width: 172px !important;
  }
  label {
    font-weight: 500;
    padding-right: 0px !important;
    font-family: "Roboto", sans-serif;
  }
}
</style>
<style type="text/css">
 .custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 0.1rem;
}
.f-padding{
  margin-bottom: 10px;
}

.justify-content-center {

  -ms-flex-pack: center!important;

  justify-content: inherit !important;

}
.wizard, .tabcontrol {
  display: block;
  width: 100%;
  height: auto !important;
  overflow: scroll;
}

.wizard > .steps > ul > li {
  width: 16%;
}

@media screen and (max-width: 1366px) {
  .wizard > .steps > ul > li {
    width: 16% !important;
    font-size: 11px !important;
  }
}
.wizard > .content {
  background: #ffffff;
  min-height: 500px !important;
  padding: 20px;
}

.side{
  margin-left: 8px;
}
</style>
<div class="content-page">             
  <div class="content">                                             
    <!-- Start content -->             
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title"  style="color: #000;font-weight:200;">&nbsp;<i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Registration : Add <a href="javascript::void(0);"  onclick="history.back();" >Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="{{url('land/registration')}}">Registration</a></li>
            <li class="active"> Registration &nbsp;: &nbsp;Add</li>
          </ol>
        </div>
      </div><hr class="new2">

      <div class="row" id="default-form">
        <div class="col-lg-12">
         <!-- <div class="portlet-widgets text-right">
          <button type="button" id="regFormchange" data-id="2" onclick="wizardForm(this)" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">Registration With Form Wizard</button>
        </div> -->
        <div class="card"style="border-left: 3px solid #386900;box-shadow: 4px 4px #b1b1b1;">
          <div class="card-header" style="background: linear-gradient(to left, #dbf2fd, #ffffff 50%, #ffffff, #ffffff 75%);">
            <form action="{{ URL::to('land/create/registration')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
              @csrf
              <div class="card-body" >
                <h4 style="text-align: center;" ><span id="msg" style="color: #F0560A;"></span></h4>
                <p style="font-size: 17px; font-weight: 700;">Land Details</p>
                <div class="col-md-5">
                  <div class="row form-group">
                    <!--   <label class="col-sm-3 control-label" for="example-input-normal">Search Land</label> -->
                    <div class="col-sm-7">
                      <div class="input-group">
                        <input type="text"id="searchland" name="land_name" class="form-control" placeholder="Search Land">
                        <input type="hidden" name="land_id" id="land_id">
                        <span class="input-group-prepend">
                          <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button> &nbsp;
                          <!-- <button type="button" class="btn waves-effect waves-light btn-outline-primary" onclick="addlandModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Land"><i class="fa fa-plus"></i></button> -->
                        </span>
                      </div>
                      <div id="land_list" ></div>
                    </div>
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4">
                      <p>Plot No. : <b style="color: #F0560A;" id="p_no"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Plot Name :  <b style="color: #F0560A;" id="p_name"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Size :  <b style="color: #F0560A;" id="p_size"></b></p>
                      <input type="hidden" name="" id="p_size2"  >
                    </div>
                    <div class="col-md-6">
                      <p><b style="color: #0AACF0;">Possesion Size  <input type="text" placeholder="Enter value" id="inputval" onkeyup="chkpsige(this.value)"  style="width:72px;" name="dakhal_kabja"><span id="p_uom" style="color: #F70E24;" ></span> </b></p>

                    </div>
                    <div class="col-md-4">
                      <p>Sector :  <b style="color: #F0560A;" id="sect"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Phase :  <b style="color: #F0560A;" id="phas"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Block :  <b style="color: #F0560A;" id="l_block"></b></p>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  function chkpsige(elem) {
                    var chkval = Number(document.getElementById("p_size2").value);
                    var inputval = Number(document.getElementById("inputval").value);
                    if (chkval>=inputval) {   
                     document.getElementById("msg").innerHTML='';                 
                   }else{
                    document.getElementById("msg").innerHTML='The size of the Possession cannot exceed the actual size...!<br>(कब्ज़ा का आकार वास्तविक आकार से अधिक नहीं कर सकते हैं ।)';
                  }
                }
              </script>
              <hr>
              <p style="font-size: 17px; font-weight: 700;">Customer Details</p>
              <span style="color:#F83008; font-weight: 600;" id="NotAloowPccCust"> </span><br><br>
              <div class="col-md-5">
                <div class="row form-group">
                 <div class="col-sm-7">
                  <div class="input-group" style="margin-top: ;">
                    <input type="text" name="cust_name" id="searchcustomer" class="form-control" placeholder="Search Customer" autocomplete="off" >
                    <input type="hidden" name="cust_id" id="cust_id" value="">
                    <span class="input-group-prepend">
                      <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button>&nbsp;
                      <!-- <button type="button" class="btn waves-effect waves-light btn-outline-primary" onclick="addcustomerModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Customer"><i class="fa fa-plus"></i></button> -->
                    </span>
                  </div>
                  <div  id="customer_list" ></div>
                </div>
              </div> 
            </div>
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-3">
                  <p>Company Name : <b style="color: #F0560A" id="c_name"></b></p>
                </div>
                <div class="col-md-3">
                  <p>Type :  <b style="color: #F0560A" id="c_email"></b></p>
                </div>
                <div class="col-md-3">
                  <p>Company Registration No. :  <b style="color: #F0560A" id="c_Regi"></b></p>
                </div>
                <div class="col-md-3">
                  <p>Address :  <b style="color: #F0560A" id="c_company"></b></p>
                </div>
              </div>
            </div>
            <hr>
            <script type="text/javascript">
              function chkdate(elem) {
                var date = document.getElementById("appliDate").value;
                //$(".selector" ).datepicker("setDate", date);
                var today = new Date();
                $('.selector').datepicker({
                  format: 'dd-mm-yyyy',
                  autoclose:true,
                  setDate :date,
                  startDate: date,
                  minDate: date
                }).on('changeDate', function (ev) {
                  $(this).datepicker('hide');
                });
                $('.selector').datepicker('setDate',date);
                $('.selector').keyup(function () {
                  if (this.value.match(/[^0-9]/g)) {
                    this.value = this.value.replace(/[^0-9^-]/g, '');
                  }        
                });
              }
            </script>
            <p style="font-size: 17px; font-weight: 700;">Registration Details</p>
            <div class="row">
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Application No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="application_no" id="application_no"  placeholder="Application No">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Application Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control datepicker" onchange="chkdate(this.value)" placeholder="Application Date" id="appliDate"  placeholder="DD/MM/YYYY" name="application_date">
                  </div>
                </div> 
              </div>
            </div>
            <div class="row">
             <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Possession Date</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control selector datepicker"   name="possession_date"  placeholder="Possession Date" placeholder="DD/MM/YYYY">
                </div>
              </div> 
            </div>
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">SSI Registration Number</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ssi_reg_no" placeholder="SSI Registration Number" >
                </div>
              </div> 
            </div>
          </div>
          <div class="row">              
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Registration No.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="registration_no" placeholder="Registration No" placeholder="">
                </div>
              </div> 
            </div>
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Registration Date.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control datepicker" name="registration_date" placeholder="Registration Date" placeholder="DD/MM/YYYY">
                </div>
              </div> 
            </div>
          </div>

          <div class="row">
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Allotment No.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="allotment_no" placeholder="Allotment No" required="" aria-required="true" >
                </div>
              </div> 
            </div>

            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Allotment Date.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control datepicker" name="allotment_date" required="" placeholder="Allotment Date" aria-required="true"  placeholder="DD/MM/YYYY">
                </div>
              </div> 
            </div>
          </div>

          <hr>


          <p style="font-size: 17px; font-weight: 700;">Lease Details</p>
          <div class="row">
            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Base Rent(In Rs) </label>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="based_rent" id="based_rent" required="" placeholder="₹ 00.00" aria-required="true">
                </div>
              </div> 
            </div>
            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Insurance (In Rs) </label>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="insurance" id="insurance" required="" placeholder="₹ 00.00" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Maintanance (In Rs) </label>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="maintanance" id="maintanance" required="" placeholder="₹ 00.00" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Taxes (In Rs) </label>
                <div class="col-sm-5">
                  <input type="number" class="form-control"   name="taxes" id="taxes" required="" placeholder="₹ 00.00" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Additional Charge (In Rs) </label>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="additional_charge" id="additional_charge" required="" placeholder="₹ 00.00" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Net Payable (In Rs) </label>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="netpaybill" id="netpaybill" required="" placeholder="₹ 00.00" readonly="" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Payment Frequency</label>
                <div class="radio radio-info form-check-inline" style="padding-left: 32px;">
                  <input type="radio" id="inlineRadio1" value="monthly" name="add_net_payable" id="net_payable">
                  <label for="inlineRadio1"> Monthly </label>
                </div>
                <div class="radio form-check-inline">
                  <input type="radio" id="inlineRadio2" value="yearly" name="add_net_payable" id="net_payable" checked="checked" style="width: 195px;">
                  <label for="inlineRadio2"> Yearly </label>
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal"><span id="add_tag_n">Year</span>(s) </label>
                <div class="col-sm-5">
                 <input type="number" class="form-control"name="lease_time"  required="" aria-required="true" style="width: 195px;">
                 <input type="hidden" class="form-control"  name="lease_duration" id="add_time_duration">
               </div>
             </div> 
           </div>

           <div class="col-md-4">
            <div class="row form-group">
              <label class="col-sm-4 control-label" for="example-input-normal">Starting Date </label>
              <div class="col-sm-5">
               <div class="input-group">
                <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="start_date" required="" aria-required="true">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="md md-event"></i></span>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <hr>
      <!--   <p style="font-size: 17px; font-weight: 700;">Payment Info</p>
        <hr>
        <p style="font-size: 17px; font-weight: 700;">Review & Submit</p>
        <hr> -->
        <div class="col-md-12" style="text-align: right;">
          <button type="submit" class="btn btn-outline-primary waves-effect waves-light m-b-5">Submit</button>
        </div>
      </div> <!-- card -->  
    </div> <!-- container -->
  </div> <!-- content -->
</form>
</div>
</div>
<!--  Wizard Form -->
<div class="row" id="wform" style="display: none;">
  <div class="col-md-12">
 <!--   <div class="portlet-widgets text-right">
    <button type="button" id="regFormchange" data-id="2" onclick="defaultForm(this)" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">Registration With Default Wizard</button>
  </div> -->
  <div class="card">
    <div class="card-header">
     <div class="card-body"> 
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form action="{{ URL::to('land/create/registration')}}" id="basic-form" method="post" autocomplete="off">
        @csrf
        <input type="hidden" name="ids" value="{{$editData->id ?? ''}}">
        <input type="hidden" name="cust_id" value="{{$leaseData->cust_id ?? ''}}">
        <div>
          <h3>Land Details</h3>
          <section style="left: inherit;">                
            <div class="col-md-12">
              <div class="row"> 
                <div class="col-md-5">
                  <div class="row form-group">
                    <label class="col-sm-3 control-label" for="example-input-normal">Search Land</label>
                    <div class="col-sm-5">
                      <div class="input-group">
                        <input type="text" id="wsearchland" name="land_name" class="form-control" placeholder="Search">
                        <input type="hidden" name="land_id" id="wland_id">
                        <span class="input-group-prepend">
                          <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button> &nbsp;
                          <button type="button" title="Add New Land" class="btn waves-effect waves-light btn-outline-primary" onclick="addlandModel()" data-toggle="tooltip" data-placement="top"  data-original-title="Add New Land"><i class="fa fa-plus"></i></button>
                        </span>
                      </div>
                      <div id="wland_list" ></div>
                    </div>
                  </div> 
                </div>
                <div class="col-md-10">
                  <div class="row">
                    <div class="col-md-4">
                      <p>Plot No. : <b style="color: #F0560A;" id="wp_no"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Plot Name :  <b style="color: #F0560A;" id="wp_name"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Size :  <b style="color: #F0560A;" id="wp_size"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Sector :  <b style="color: #F0560A;" id="wsect"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Phase :  <b style="color: #F0560A;" id="wphas"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Block :  <b style="color: #F0560A;" id="wl_block"></b></p>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </section>
          <h3>Customer Information</h3>
          <section style="left: inherit;">
            <p style="font-size: 17px; font-weight: 700; margin-left: 8px;">Customer Details</p>
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Search Customer</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <input type="text" name="cust_name" id="wsearchcustomer" class="form-control" placeholder="search customer" autocomplete="off" >
                    <input type="hidden" name="cust_id" id="wcust_id">
                    <span class="input-group-prepend">
                      <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button>&nbsp;
                      <button type="button" class="btn waves-effect waves-light btn-outline-primary" onclick="addcustomerModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Customer"><i class="fa fa-plus"></i></button>
                    </span>
                  </div>
                  <div  id="wcustomer_list" ></div>
                </div>
              </div> 
            </div>
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-3">
                  <p>Name : <b style="color: #F0560A" id="wc_name">{{$custData->f_name ?? ''}} {{$custData->l_name ?? ''}}</b></p>
                </div>
                <div class="col-md-3">
                  <p>Phone No. :  <b style="color: #F0560A" id="wc_mobile">{{$custData->mobile ?? ''}}</b></p>
                </div>
                <div class="col-md-3">
                  <p>Email :  <b style="color: #F0560A" id="wc_email">{{$custData->email ?? ''}}</b></p>
                </div>
                <div class="col-md-3">
                  <p>Company :  <b style="color: #F0560A" id="wc_company">{{$custData->company ?? ''}}</b></p>
                </div>
              </div>
            </div>
            <hr>
          </section style="left: inherit;">
          <h3>Registration Details</h3>
          <section>
           <p style="font-size: 17px; font-weight: 700; margin-left: 8px;">Registration Details</p>
           <div class="row side">
             <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Possession Date.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control autodate" name="possession_date" placeholder="DD/MM/YYYY">
                </div>
              </div> 
            </div>
          </div>
          <div class="row side">         
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Registration No.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="registration_no" value="{{$leaseData->registration_no ?? ''}}" placeholder="">
                </div>
              </div> 
            </div>
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Ragistration Date.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control autodate" name="registration_date" value="{{$leaseData->registration_date ?? ''}}" placeholder="">
                </div>
              </div> 
            </div>
          </div>
          <div class="row side">
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Application No.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="application_no" value="{{$leaseData->application_no ?? ''}}" placeholder="">
                </div>
              </div> 
            </div>
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Application Date.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control autodate" value="{{$leaseData->application_date ?? ''}}" name="application_date">
                </div>
              </div> 
            </div>
          </div>
          <div class="row side">
            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Allotment No.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="allotment_no" value="{{$leaseData->allotment_no ?? ''}}" placeholder="">
                </div>
              </div> 
            </div>

            <div class="col-md-5">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Allotment Date.</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control autodate" value="{{$leaseData->allotment_date ?? ''}}" name="allotment_date">
                </div>
              </div> 
            </div>
          </div>
          <hr>
        </section>
        <h3>Lease Info</h3>
        <section>
          <p style="font-size: 17px; font-weight: 700; margin-left: 8px;">Lease Details</p>
          <div class="row side">
            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Based Rent <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="based_rent" id="based_rent" value="{{$leaseData->based_rent ?? ''}}" required="" aria-required="true">
                </div>
              </div> 
            </div>
            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Insurance <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="insurance" id="insurance" value="{{$leaseData->insurance ?? ''}}" required="" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Maintanance <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="maintanance" id="maintanance" value="{{$leaseData->maintanance ?? ''}}" required="" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Taxes <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"   name="taxes" id="taxes" value="{{$leaseData->tax ?? ''}}" required="" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Additional Charge <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="additional_charge" id="additional_charge" value="{{$leaseData->additional_charge ?? ''}}" required="" aria-required="true">
                </div>
              </div> 
            </div>
          </div>

          <div class="row side">
            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Net Payable <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="netpaybill" id="netpaybill" value="{{$leaseData->net_pay ?? ''}}" readonly="" required="" aria-required="true">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Payment Frequency</label>
                <div class="radio radio-info form-check-inline" style="padding-left: 32px;">
                  <input type="radio" id="inlineRadio1" value="monthly" name="add_net_payable" @if(@$leaseData->net_payable='monthly') checked="checked" @endif id="net_payable">
                  <label for="inlineRadio1"> Monthly </label>
                </div>
                <div class="radio form-check-inline">
                  <input type="radio" id="inlineRadio2" value="yearly" name="add_net_payable" id="net_payable" @if(@$leaseData->net_payable='yearly') checked="checked" @else checked="checked" @endif style="width: 195px;">
                  <label for="inlineRadio2"> Yearly </label>
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal"><span id="add_tag_n">Year</span>(s) <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="lease_time" value="{{$leaseData->lease_time ?? ''}}"  required="" aria-required="true">
                  <input type="hidden" class="form-control" value="{{$leaseData->lease_duration ?? ''}}"  name="lease_duration" id="add_time_duration">
                </div>
              </div> 
            </div>

            <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Starting Date <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                 <div class="input-group">
                  <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="start_date" value="{{$leaseData->start_date ?? ''}}" required="" aria-required="true">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="md md-event"></i></span>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <hr>
      </section>
      <h3>Payment Info</h3>
      <section>
        <p style="font-size: 17px; font-weight: 700; margin-left: 8px;">Payment Info</p>
      </section>
      <h3>Review & Submit</h3>
      <section style="left: inherit;">
        <p style="font-size: 17px; font-weight: 700; margin-left: 8px;">Review & Submit</p>
      </section>
    </div>
  </form> 
</div>  <!-- End card-body -->
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  function wizardForm(elem)
  {
    $("#wform").css("display","block");
    $("#default-form").css("display","none");

  }
  function defaultForm(elem)
  {
    $("#wform").css("display","none");
    $("#default-form").css("display","block");
  }
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $('#additional_charge').on('change',function() { 
      var value = $(this).val();
      var bs = Number(document.getElementById('based_rent').value);
      var tax = Number(document.getElementById('taxes').value);
      var ins = Number(document.getElementById('insurance').value);
      var mainti = Number(document.getElementById('maintanance').value);
      var adi = Number(document.getElementById('additional_charge').value);
      var pay = bs+tax+ins+mainti+adi;
      document.getElementById('netpaybill').value=pay;
    });

    $("input[name$='add_net_payable']").click(function() { 
      var test = $(this).val();
      if(test=='monthly'){
        document.getElementById('add_tag_n').textContent ='Month';
        document.getElementById('add_time_duration').value ='m';
      }else{
       document.getElementById('add_tag_n').textContent ='Year';
       document.getElementById('add_time_duration').value ='yr';
     }
   });

  });
</script>

<script type="text/javascript">
  try{
    function addcustomerModel() { 
     $('#add_customer').modal('show');
   }
   function addlandModel() {
    $('#add_land').modal('show');
  }
}catch(err)
{
  var error =  err.message;
  alert(error)
}

</script>
<!--  Create New Customer -->
<div id="add_customer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <h4 class="modal-title mt-0">Add New Customer</h4> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <form action="{{ URL::to('land/customer/add')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
        @csrf
        <div class="modal-body"> 
          <div class="row"> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">First Name <font color="red">*</font></label> 
                <input type="text" class="form-control" name="f_name" id="f_name" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-2" class="control-label">Last Name <font color="red">*</font></label> 
                <input type="text" class="form-control" name="l_name" id="l_name" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
          </div> 
          <div class="row"> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-3" class="control-label">Occupation <font color="red">*</font></label> 
                <input type="text" class="form-control" name="occupation" id="occupation" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-4" class="control-label">DOB <font color="red">*</font></label> 
                <input type="text" class="form-control autodate" name="dob" id="dob" required="" aria-required="true" placeholder="DD-MM-YYYY"> 
              </div> 
            </div> 
          </div> 
          <div class="row">          
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-5" class="control-label">Contact <font color="red">*</font></label> 
                <input  type="number" maxlength="10" minlength="10" min="1" class="form-control" name="mobile" id="mobile" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Email <font color="red">*</font></label> 
                <input type="email" class="form-control" name="email" id="email" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Company Type<font color="red">*</font></label> 
                <select class="form-control" name="company_type" id="e_company_type" required="">
                  <option value="">Select Company Type</option>
                  <option value="ltd">LTD</option>
                  <option value="llp">LLP</option>
                  <option value="proprietorship">Proprietorship</option>
                </select>
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Company <font color="red">*</font></label> 
                <input type="text" class="form-control" name="company" id="company" required="" aria-required="true" placeholder=""> 
              </div> 
            </div>
            <div class="col-md-6"> 
              <div class="form-group"> 
                <p class="control-label"><b>Gender</b> <font color="red">*</font></p>
                <div class="radio radio-info form-check-inline">
                  <input type="radio" name="gender" id="genader" value="male">
                  <label for="inlineRadio1"> Male </label>
                </div>
                <div class="radio radio-info form-check-inline">
                  <input type="radio" name="gender" id="genader" value="female">
                  <label for="inlineRadio1"> Female </label>
                </div>
              </div>  
            </div> 
          </div> 
          <div class="row"> 
            <div class="col-md-12"> 
              <div class="form-group no-margin"> 
                <label for="field-7" class="control-label">Address</label> 
                <textarea class="form-control" id="address" name="address" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required > </textarea> 
              </div> 
            </div> 
          </div> 
        </div> 
        <div class="modal-footer"> 
          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
          <button type="submit" class="btn btn-info waves-effect waves-light">Save</button> 
        </div> 
      </form>
    </div> 
  </div>
</div><!-- /.modal -->



<!--  Create New Land -->
<div class="modal fade bs-example-modal-lg" id="add_land" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Create New Land</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('land/add')}}" method="post"  id="FormValidation"  required="" aria-required="true">
        @csrf
        <div class="modal-body">
         <div class="row gutters justify-content-center">
          <div class="card-body">                          
            <div class="row">
              <div class="col-sm-12">
               <div class="row"> 
                <div class="col-md-4"> 
                 <div class="form-group"> 
                  <label for="field-4" class="control-label">Sector/Zone</label> 
                  <select class="form-control" name="area" id="area" required="" aria-required="true">
                    <option value="">Select Sector/Zone</option>
                    @foreach($zone as $key=>$val)
                    @if($val->sector_zone!='')
                    <option value="{{$val->sector_zone}}" @if(@$val->sector_zone==@$editData->area){{'selected'}} @endif>{{$val->sector_zone}}</option>
                    @endif
                    @endforeach  
                  </select>
                </div> 
              </div> 
              <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-4" class="control-label">Phase</label> 
                  <select class="form-control" name="sector" id="sector">
                    <option value="">Select Phase</option>
                    @foreach($phase as $key=>$val)
                    @if($val->phase!='')
                    <option value="{{$val->phase}}" @if(@$val->phase==@$editData->sector ?? ''){{'selected'}} @endif >{{$val->phase}}</option>
                    @endif
                    @endforeach  
                  </select>
                </div> 
              </div> 
              <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-4" class="control-label">Block</label> 
                  <select class="form-control" name="block" id="block">
                    <option value="">Select Block</option>
                    @foreach($block as $key=>$val)
                    @if($val->block!='')
                    <option value="{{$val->block}}" @if(@$val->block==@$editData->block ?? ''){{'selected'}} @endif >{{$val->block}}</option>
                    @endif
                    @endforeach  
                  </select>
                </div> 
              </div> 
            </div>
            <div class="row"> 
             <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-4" class="control-label">Plot No</label> 
                <input type="text" class="form-control" name="plot_no" id="plot_no" value="" placeholder="" required="" aria-required="true"> 
              </div> 
            </div> 
            <div class="col-md-4"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Plot Name</label> 
                <input type="text" class="form-control" name="land_name" id="land_name" value="" placeholder="" required="" aria-required="true"> 
              </div> 
            </div> 
            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Select UOM</label> 
                <select class="form-control"  name="plot_size" id="plot_size" required="" aria-required="true">
                  <option value="">Select UOM</option>
                  <option value="sq.mtr">Square Meter</option>
                  <option value="sq.inch">Square Inch</option>
                  <option value="sq.ft">Square feet</option>
                  <option value="acre">Acre</option>
                  <option value="hectare">Hectare</option>
                </select>
              </div> 
            </div>
            <div class="col-md-2"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Size</label> 
                <input type="text" class="form-control"  name="plot_value" id="plot_value" value="" placeholder="" required="" aria-required="true"> 
              </div> 
            </div>  
          </div>
          <div class="row"> 
            <div class="col-md-12"> 
              <div class="form-group no-margin"> 
                <label for="field-7" class="control-label">Address</label> 
                <textarea class="form-control autogrow" name="address"  id="address" placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required ></textarea> 
              </div> 
            </div> 

            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">City/District</label> 
                <!-- <input type="text" class="form-control"  placeholder="Ex:-noida,kanpur.." required="" aria-required="true"> -->
                <select class="form-control"  name="city" id="city" required="" aria-required="true">
                  <option  value="">Select City</option>    
                  <option  value="Jamshedpur">Jamshedpur</option>                  
                  <option value="Ranchi">Ranchi</option>                  
                  <option value="Bokaro">Bokaro</option>                  
                  <option value="Dhanbad">Dhanbad</option>                  
                  <option  value="East Singhbhum">East Singhbhum</option>                  
                  <option  value="Saraikela kharsawan">Saraikela kharsawan</option>                  
                </select>
              </div> 
            </div> 
            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-2" class="control-label">State/Province</label> 
                <!--<input type="text" class="form-control"  placeholder="Ex:-delhi,uttar pradesh.." required="" aria-required="true">-->
                <select class="form-control"  name="state" id="state" required="" aria-required="true">
                  <option value="">Select State</option>  
                  <option value="Jharkhand">Jharkhand</option> 
                </select> 
              </div> 
            </div> 

            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-5" class="control-label">Country</label> 
                <!--<input type="text" class="form-control"  placeholder="Ex:-India,US,UK.." required="" aria-required="true"> -->
                <select class="form-control"  name="country" id="country" required="" aria-required="true">
                  <option value="">Select Country</option>  
                  <option value="india">India</option>   
                </select> 
              </div> 
            </div> 

            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-3" class="control-label">Pincode</label> 
                <input type="text" class="form-control" name="pincode" id="pincode" type="number" maxlength="6" minlength="6" min="1"  placeholder="" required="" aria-required="true"> 
              </div> 
            </div> 
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12" style="    text-align: right; margin-bottom: 6px;">
  <button type="submit" class="btn btn-outline-primary waves-effect waves-light">Create</button>
</div>
</form>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
 try{
  function Registration() {

   $('#add_customer').modal('show');
 }

 function Edit_Customer(id) {
  $("#loader1").css("display","block");
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url: "{{url('land/customer/edit/')}}" + '/' + id,
    method: "POST",
    contentType: 'application/json',
    success: function(data) {
      console.log(data);
      document.getElementById('ids').value = data.id;
      document.getElementById("plot_no").innerHTML = data.plot_no;
      document.getElementById("plot_name").innerHTML = data.land_name;
      document.getElementById("appli_no").innerHTML = data.appli_no;
      document.getElementById("allot_no").innerHTML = data.allot_no;
      document.getElementById('e_f_name').value =data.f_name;
      document.getElementById('e_l_name').value = data.l_name;
      document.getElementById('e_occupation').value = data.occupation;
      document.getElementById('e_dob').value = data.dob;
      document.getElementById('e_mobile').value = data.mobile;
      document.getElementById('e_company').value = data.company;
      document.getElementById('e_email').value = data.email;
      document.getElementById('e_gender').value = data.gender;

      document.getElementById('e_based_rent').value = data.based_rent;
      document.getElementById('lease_id').value = data.lease_id;
      document.getElementById('e_taxes').value = data.tax;
      document.getElementById('time_duration').value = data.lease_duration;
      document.getElementById('e_insurance').value = data.insurance;
      document.getElementById('e_maintanance').value = data.maintanance;
      document.getElementById('e_additional_charge').value = data.additional_charge;
      document.getElementById('e_netpaybill').value = data.net_pay;
      document.getElementById('e_yers').value = data.lease_time;
      document.getElementById('e_start_date').value = data.start_date;
      var val = data.net_payable;
      if (val == 'monthly') {
        $('input[name=net_payable][value=' + val + ']').prop('checked', true);
      } else {
        $('input[name=net_payable][value=' + val + ']').prop('checked', true);
      }

      $("#loader1").css("display","none");
      $('#edit_customer').modal('show');
    }
  });
}
}catch(err)
{
  var error =  err.message;
  alert(error)
}
</script>
<script type="text/javascript">
 $(document).ready(function () {
  $('#e_additional_charge').on('change',function() {
    var value = $(this).val();
    var bs = Number(document.getElementById('e_based_rent').value);
    var tax = Number(document.getElementById('e_taxes').value);
    var ins = Number(document.getElementById('e_insurance').value);
    var mainti = Number(document.getElementById('e_maintanance').value);
    var adi = Number(document.getElementById('e_additional_charge').value);
    var pay = bs+tax+ins+mainti+adi;
    document.getElementById('e_netpaybill').value=pay;
  });

});
</script>

<script type="text/javascript"> 
  $(document).ready(function() {
    $("input[name$='net_payable']").click(function() {
      var test = $(this).val();
      if(test=='monthly'){
        document.getElementById('tag_n').textContent ='Month';
        document.getElementById('time_duration').value ='m';
      }else{
       document.getElementById('tag_n').textContent ='Year';
       document.getElementById('time_duration').value ='yr';
     }
   });
  });
</script>


<script type="text/javascript">
  $(document).ready(function () {
    $('#searchcustomer').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#loader1").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/serachcustomers/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#loader1").css("display","none");
          $('#customer_list').html(data);
        }
      })
     }else{
       $('#customer_list').html(""); 
     }
   });
    $(document).on('click', 'td', function(){
      var value = $(this).text();
      $('#customer_list').html("");
    });


    /* Wizard Customer*/

    $('#wsearchcustomer').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#loader1").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/wserachcustomers/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#loader1").css("display","none");
          $('#wcustomer_list').html(data);
        }
      })
     }else{
       $('#wcustomer_list').html(""); 
     }
   });
    $(document).on('click', 'td', function(){
      var value = $(this).text();
      $('#wcustomer_list').html("");
    });

    /* Land */
    $('#searchland').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#loader1").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/serachland/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#loader1").css("display","none");
          $('#land_list').html(data);
        }
      })
     }else{
       $('#land_list').html(""); 
     }
   });
    $(document).on('click', 'td', function(){
      var value = $(this).text();
      $('#land_list').html("");
    });


    $('#wsearchland').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#loader1").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/wserachland/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#loader1").css("display","none");
          $('#wland_list').html(data);
        }
      })
     }else{
       $('#wland_list').html(""); 
     }
   });
    $(document).on('click', 'td', function(){
      var value = $(this).text();
      $('#wland_list').html("");
    });



  });

  function addcustomer(id) { 
    $("#loader1").css("display","block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/customer/add/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        console.log(data)
        if (data==0)
        {
         $("#loader1").css("display","none");
         document.getElementById("NotAloowPccCust").innerText = 'This client is already registered.';
         document.getElementById("cust_id").value = '';
         document.getElementById("searchcustomer").value ='';
         document.getElementById("c_name").innerText = '';
         document.getElementById("c_email").innerText = '';
         document.getElementById("c_company").innerText = '';
       }else{  
        document.getElementById("NotAloowPccCust").innerText = '';
        $("#loader1").css("display","none");
        var company_reg_no = data.company_reg_no;
        var company  = data.company;
        var company_type = data.company_type;
        var address = data.address;
        document.getElementById("cust_id").value = data.id;
        document.getElementById("searchcustomer").value = company;
        document.getElementById("c_name").innerText = company;
        document.getElementById("c_email").innerText = company_type;
        
        document.getElementById("c_company").innerText = address;
        document.getElementById("c_Regi").innerText = company_reg_no;

      }
    }
  });
  }

  /* Wizard Customer */
  function waddcustomer(id) { 
    $("#loader1").css("display","block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/wcustomer/add/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        console.log(data)
        $("#loader1").css("display","none");
        var name = data.f_name + ' ' + data.l_name;
        var email  = data.email;
        var mobile = data.mobile;
        var company = data.company;
        document.getElementById("wcust_id").value = data.id;
        document.getElementById("wsearchcustomer").value = name;
        document.getElementById("wc_name").innerText = name;
        document.getElementById("wc_email").innerText = email;
        document.getElementById("wc_mobile").innerText = mobile;
        document.getElementById("wc_company").innerText = company;
      }
    });
  }



  function addland(id) {  
    $("#loader1").css("display","block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/land/add/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        console.log(data)
        $("#loader1").css("display","none");   
        var name = data.land_name;     
        document.getElementById("land_id").value = data.id;
        document.getElementById("searchland").value = name;
        document.getElementById("p_no").innerText = data.plot_no;
        document.getElementById("p_name").innerText = name;
        document.getElementById("p_size").innerText = data.plot_size+' '+data.uom;
        document.getElementById("p_size2").value = data.plot_size;
        document.getElementById("p_uom").innerText = data.uom;
        document.getElementById("sect").innerText = data.area;
        document.getElementById("phas").innerText = data.sector;
        document.getElementById("l_block").innerText = data.block;

      }
    });
  }
  function addlandwizard(id) {  
    $("#loader1").css("display","block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/land/wizard/add/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        console.log(data)
        $("#loader1").css("display","none");   
        var name = data.land_name;     
        document.getElementById("wland_id").value = data.id;
        document.getElementById("wsearchland").value = name;
        document.getElementById("wp_no").innerText = data.plot_no;
        document.getElementById("wp_name").innerText = name;
        document.getElementById("wp_size").innerText = data.plot_size+' '+data.uom;
        document.getElementById("wsect").innerText = data.area;
        document.getElementById("wphas").innerText = data.sector;
        document.getElementById("wl_block").innerText = data.block;

      }
    });
  }
</script>
 <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
  </script>
  
