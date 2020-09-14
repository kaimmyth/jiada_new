
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
<script type="text/javascript">
  $(document).ready(function () {
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
<div class="content-page">
 <!-- Start content -->
 <div class="content">
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
     <div class="col-sm-12">
      <h4 class="pull-left page-title">@if(@$editData->id!='') Update Land Info @else Create Land @endif / <a href="javascript::void(0);"  onclick="history.back();" >Back</a></h4>
      <ol class="breadcrumb pull-right">
        <li><a href="{{ URL::to('home') }}">Home</a></li>
        <li><a href="{{URL::to('home')}}">land</a></li>
        <li class="active">Add land</li>
      </ol>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
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
          <form action="{{url('land/add')}}" id="basic-form" method="post" autocomplete="off">
            @csrf
            <input type="hidden" name="ids" value="{{$editData->id ?? ''}}">
            <input type="hidden" name="cust_id" value="{{$leaseData->cust_id ?? ''}}">
            <div>
              <h3>Land Details</h3>
              <section style="left: inherit;">                
                <div class="col-md-7">
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
                        <select class="form-control" name="sector" id="sector"  required="" aria-required="true">
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
                        <select class="form-control" name="block" id="block"  required="" aria-required="true">
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
                   <div class="col-md-4"> 
                    <div class="form-group"> 
                      <label for="field-4" class="control-label">Plot No</label> 
                      <input type="text" class="form-control" name="plot_no" id="plot_no" value="{{$editData->plot_no ?? ''}}" placeholder="Numbers" required="" aria-required="true"> 
                    </div> 
                  </div> 
                  <div class="col-md-4"> 
                    <div class="form-group"> 
                      <label for="field-1" class="control-label">Plot Name</label> 
                      <input type="text" class="form-control" name="land_name" id="land_name" value="{{$editData->land_name ?? ''}}" placeholder="Enter Plot Name" required="" aria-required="true"> 
                    </div> 
                  </div> 
                  <div class="col-md-2"> 
                    <div class="form-group"> 
                      <label for="field-1" class="control-label">Select UOM</label> 
                      <select class="form-control"  name="plot_size" id="plot_size" required="" aria-required="true">
                        <option value="">Select UOM</option>
                        <option @if(@$editData->uom=='sq.mtr'){{'selected'}}@endif value="sq.mtr">Square Meter</option>
                        <option @if(@$editData->uom=='sq.inch'){{'selected'}}@endif value="sq.inch">Square Inch</option>
                        <option @if(@$editData->uom=='sq.ft'){{'selected'}}@endif value="sq.ft">Square feet</option>
                        <option @if(@$editData->uom=='acre'){{'selected'}}@endif value="acre">Acre</option>
                        <option @if(@$editData->uom=='hectare'){{'selected'}}@endif value="hectare">Hectare</option>
                      </select>
                    </div> 
                  </div>
                  <div class="col-md-2"> 
                    <div class="form-group"> 
                      <label for="field-1" class="control-label">Size</label> 
                      <input type="text" class="form-control"  name="plot_value" id="plot_value" value="{{$editData->plot_size ?? ''}}" placeholder="Size" required="" aria-required="true"> 
                    </div> 
                  </div>  
                </div>

                <div class="row"> 
                  <div class="col-md-12"> 
                    <div class="form-group no-margin"> 
                      <label for="field-7" class="control-label">Address</label> 
                      <textarea class="form-control autogrow" name="address"  id="address" placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required >{{$editData->address1 ?? ''}}</textarea> 
                    </div> 
                  </div> 

                  <div class="col-md-3"> 
                    <div class="form-group"> 
                      <label for="field-1" class="control-label">City/District</label> 
                      <!-- <input type="text" class="form-control"  placeholder="Ex:-noida,kanpur.." required="" aria-required="true"> -->
                      <select class="form-control"  name="city" id="city" required="" aria-required="true">
                        <option  value="">Select City</option>    
                        <option @if(@$editData->city=='Jamshedpur'){{'selected'}}@endif value="Jamshedpur">Jamshedpur</option>                  
                        <option @if(@$editData->city=='Ranchi'){{'selected'}}@endif value="Ranchi">Ranchi</option>                  
                        <option @if(@$editData->city=='Bokaro'){{'selected'}}@endif value="Bokaro">Bokaro</option>                  
                        <option @if(@$editData->city=='Dhanbad'){{'selected'}}@endif value="Dhanbad">Dhanbad</option>                  
                        <option @if(@$editData->city=='East Singhbhum'){{'selected'}}@endif value="East Singhbhum">East Singhbhum</option>                  
                      </select>
                    </div> 
                  </div> 
                  <div class="col-md-3"> 
                    <div class="form-group"> 
                      <label for="field-2" class="control-label">State/Province</label> 
                      <!--<input type="text" class="form-control"  placeholder="Ex:-delhi,uttar pradesh.." required="" aria-required="true">-->
                      <select class="form-control"  name="state" id="state" required="" aria-required="true">
                        <option value="">Select State</option>  
                        <option @if(@$editData->state=='Jharkhand'){{'selected'}}@endif value="Jharkhand">Jharkhand</option>  
                      </select> 
                    </div> 
                  </div> 

                  <div class="col-md-3"> 
                    <div class="form-group"> 
                      <label for="field-5" class="control-label">Country</label> 
                      <!--<input type="text" class="form-control"  placeholder="Ex:-India,US,UK.." required="" aria-required="true"> -->
                      <select class="form-control"  name="country" id="country" required="" aria-required="true">
                        <option value="">Select Country</option>   
                        <option @if(@$editData->country=='india'){{'selected'}}@endif value="india">India</option>                   
                      </select> 
                    </div> 
                  </div> 

                  <div class="col-md-3"> 
                    <div class="form-group"> 
                      <label for="field-3" class="control-label">Pincode</label> 
                      <input class="form-control" type="number" maxlength="6" minlength="6" min="1" name="pincode" id="pincode" value="{{$editData->pincode ?? ''}}"  placeholder="Ex:-123456" required="" aria-required="true"> 
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
                      <input type="text" name="cust_name" id="searchcustomer" class="form-control" placeholder="search customer" autocomplete="off" >
                      <input type="hidden" name="cust_id" id="cust_id">
                      <span class="input-group-prepend">
                        <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>&nbsp;
                        <button type="button" class="btn waves-effect waves-light btn-primary" onclick="addcustomerModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Customer"><i class="fa fa-plus"></i></button>
                      </span>
                    </div>
                    <div  id="customer_list" ></div>
                  </div>
                </div> 
              </div>
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-3">
                    <p>Name : <b style="color: #F0560A" id="c_name">{{$custData->f_name ?? ''}} {{$custData->l_name ?? ''}}</b></p>
                  </div>
                  <div class="col-md-3">
                    <p>Phone No. :  <b style="color: #F0560A" id="c_mobile">{{$custData->mobile ?? ''}}</b></p>
                  </div>
                  <div class="col-md-3">
                    <p>Email :  <b style="color: #F0560A" id="c_email">{{$custData->email ?? ''}}</b></p>
                  </div>
                  <div class="col-md-3">
                    <p>Company :  <b style="color: #F0560A" id="c_company">{{$custData->company ?? ''}}</b></p>
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
                  <label class="col-sm-3 control-label" for="example-input-normal">Position Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control autodate" name="position_date" placeholder="DD/MM/YYYY">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Registration No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="registration_no" value="{{$leaseData->registration_no ?? ''}}" placeholder="P01">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Ragistration Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control autodate" name="registration_date" value="{{$leaseData->registration_date ?? ''}}" placeholder="Oct 17, 2019.">
                  </div>
                </div> 
              </div>
            </div>
            <div class="row side">
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Application No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="application_no" value="{{$leaseData->application_no ?? ''}}" placeholder="4545">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Application Date.</label>
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
                    <input type="text" class="form-control" name="allotment_no" value="{{$leaseData->allotment_no ?? ''}}" placeholder="45454">
                  </div>
                </div> 
              </div>

              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Allotment Date.</label>
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
                  <label class="col-sm-4 control-label" for="example-input-normal">Net Payable</label>
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
</div>

<!--  Create New Customer -->
<div id="add_customer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <h4 class="modal-title mt-0">Add Customer</h4> 
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
                <input type="text" class="form-control" name="f_name" id="f_name" required="" aria-required="true" placeholder="John"> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-2" class="control-label">Last Name <font color="red">*</font></label> 
                <input type="text" class="form-control" name="l_name" id="l_name" required="" aria-required="true" placeholder="Doe"> 
              </div> 
            </div> 
          </div> 
          <div class="row"> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-3" class="control-label">Occupation <font color="red">*</font></label> 
                <input type="text" class="form-control" name="occupation" id="occupation" required="" aria-required="true" placeholder="occupation"> 
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
                <input type="text" class="form-control" id="field-5" name="mobile" id="mobile" required="" aria-required="true" placeholder="+91"> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Company <font color="red">*</font></label> 
                <input type="text" class="form-control" name="company" id="company" required="" aria-required="true" placeholder="abs"> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Company Type<font color="red">*</font></label> 
                <select class="form-control" name="company_type" id="e_company_type" required="">
                  <option value="">--Select Company Type--</option>
                  <option>LTD</option>
                  <option>LLP</option>
                  <option>Proprietorship</option>
                </select>
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Email <font color="red">*</font></label> 
                <input type="email" class="form-control" name="email" id="email" required="" aria-required="true" placeholder="test@gmail.com"> 
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




<script type="text/javascript">
  $(document).ready(function () {
    $('#searchcustomer').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#modelloader").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/serachcustomers/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#modelloader").css("display","none");
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
      $("#searcherror").css("display","none");
    });

    /* Land */
    $('#searchland').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#modelloader").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/serachland/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#modelloader").css("display","none");
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

  });

  function addcustomer(id) { 
    $("#modelloader").css("display","block");
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
        $("#modelloader").css("display","none");
        var name = data.f_name + ' ' + data.l_name;
        var email  = data.email;
        var mobile = data.mobile;
        var company = data.company;
        document.getElementById("cust_id").value = data.id;
        document.getElementById("searchcustomer").value = name;
        document.getElementById("c_name").innerText = name;
        document.getElementById("c_email").innerText = email;
        document.getElementById("c_mobile").innerText = mobile;
        document.getElementById("c_company").innerText = company;
      }
    });
  }

  function addland(id) {  
    $("#modelloader").css("display","block");
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
        $("#modelloader").css("display","none");   
        var name = data.land_name;     
        document.getElementById("land_id").value = data.id;
        document.getElementById("searchland").value = name;
        document.getElementById("p_no").innerText = data.plot_no;
        document.getElementById("p_name").innerText = name;
        document.getElementById("p_size").innerText = data.plot_size+' '+data.uom;
        document.getElementById("sect").innerText = data.area;
        document.getElementById("phas").innerText = data.sector;
        document.getElementById("l_block").innerText = data.block;

      }
    });
  }

</script>

<script type="text/javascript">
  function viewRecords() {
    alert('helo')
  }
</script>

<script type="text/javascript">
  try{
    function assign_land() {
      document.getElementById("FormValidation").reset();
      $('#assign_land').modal('show');
    }
    function transfer_land() {
      document.getElementById("FormValidation").reset();
      alert('Transfer land')
     // $('#assign_land').modal('show');
   }
   function cancel_land() {
    document.getElementById("FormValidation").reset();
    alert('Cancel land')
 //$('#assign_land').modal('show');
}
}catch(err)
{
  var error =  err.message;
  alert(error)
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