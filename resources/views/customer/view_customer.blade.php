
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

@media screen and (max-width: 1366px) {
.wizard > .steps > ul > li {
    width: 16% !important;
    font-size: 11px !important;
}
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
 <!-- Start content -->
 <div class="content">
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
     <div class="col-sm-12">
      <h4 class="pull-left page-title">@if(@$editData->id!='') Update Land Info @else Create Land @endif / <a href="javascript::void(0);"  onclick="history.back();" >Back</a></h4>
      <ol class="breadcrumb pull-right">
        <!-- <li><a href="{{ URL::to('home') }}">Home</a></li>
        <li><a href="">Customer</a></li>
        <li class="active">View Customer</li> -->
      </ol>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
         <div class="card-body"> 
          <form id="basic-form" action="#">
            <div>
              <h3>Customer Information</h3>
              <section style="left: inherit;">
                <p style="font-size: 17px; font-weight: 700; margin-left: 8px;">Customer Details</p>
                <div class="col-md-10">
                  <div class="row">
                    <div class="col-md-3">
                      <p>Name : <b style="color: #F0560A" id="c_name"></b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Phone No. :  <b style="color: #F0560A" id="c_mobile"></b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Email :  <b style="color: #F0560A" id="c_email"></b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Company :  <b style="color: #F0560A" id="c_company"></b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Occupation  : <b>Designer</b></p>
                    </div>
                    <div class="col-md-3">
                      <p>DOB :  <b>28-10-2019</b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Gender :  <b>Male</b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Address :  <b>Noida sec -62 , 201301</b></p>
                    </div>
                  </div>
                </div>
                <hr>
              </section>
              <h3>Land Details</h3>
              <section style="left: inherit;">
               <p style="font-size: 17px; font-weight: 700; margin-left: 8px;">Land Details</p>
              <div class="col-md-10">
                <div class="row side">
                  <div class="col-md-4">
                    <p>Plot No. : <b style="color: #F0560A;" id="p_no"></b></p>
                  </div>
                  <div class="col-md-4">
                    <p>Plot Name :  <b style="color: #F0560A;" id="p_name"></b></p>
                  </div>
                  <div class="col-md-4">
                    <p>Size :  <b style="color: #F0560A;" id="p_size"></b></p>
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
                  <div class="col-md-4">
                    <p>Address : <b>Noida sec -62 , 201301</b></p>
                  </div>
                  <div class="col-md-4">
                    <p>City/District :  <b>Jamshedpur</b></p>
                  </div>
                  <div class="col-md-4">
                    <p>State/Province :  <b>Jharkhand</b></p>
                  </div>
                  <div class="col-md-4">
                    <p>Country :  <b>India</b></p>
                  </div>
                  <div class="col-md-4">
                    <p>Pincode :  <b>201301</b></p>
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
                  <label class="col-sm-3 control-label" for="example-input-normal">Registration No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="registration_no" placeholder="P01">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Ragistration Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control autodate" name="registration_date" placeholder="Oct 17, 2019.">
                  </div>
                </div> 
              </div>
            </div>


            <div class="row side">
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Application No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="application_no" placeholder="4545">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Application Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control autodate" name="application_date">
                  </div>
                </div> 
              </div>
            </div>
            <div class="row side">
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Allotment No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="allotment_no" placeholder="45454">
                  </div>
                </div> 
              </div>

              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Allotment Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control autodate" name="allotment_date">
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
                    <input type="text" class="form-control"  name="based_rent" id="based_rent" required="" aria-required="true">
                  </div>
                </div> 
              </div>
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Insurance <span style="color: red;">*</span></label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="insurance" id="insurance" required="" aria-required="true">
                  </div>
                </div> 
              </div>

              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Maintanance <span style="color: red;">*</span></label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="maintanance" id="maintanance" required="" aria-required="true">
                  </div>
                </div> 
              </div>

              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Taxes <span style="color: red;">*</span></label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"   name="taxes" id="taxes" required="" aria-required="true">
                  </div>
                </div> 
              </div>

              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Additional Charge <span style="color: red;">*</span></label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="additional_charge" id="additional_charge" required="" aria-required="true">
                  </div>
                </div> 
              </div>
            </div>

            <div class="row side">
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Net Payable <span style="color: red;">*</span></label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="netpaybill" id="netpaybill" required="" aria-required="true">
                  </div>
                </div> 
              </div>

              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Net Payable</label>
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
                  <label class="col-sm-4 control-label" for="example-input-normal"><span id="add_tag_n">Year</span>(s) <span style="color: red;">*</span></label>
                  <div class="col-sm-5">
                   <input type="text" class="form-control"name="lease_time"  required="" aria-required="true">
                   <input type="hidden" class="form-control"  name="lease_duration" id="add_time_duration">
                 </div>
               </div> 
             </div>

             <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-3 control-label" for="example-input-normal">Starting Date <span style="color: red;">*</span></label>
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


<!--  Modal content for the above example -->
<div class="modal fade" id="assign_land" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Land Register</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ URL::to('land/create/assign-customer')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
        @csrf
        <input type="hidden" name="land_id" id="land_id" class="form-control" placeholder="" readonly="" value="{{$editData1->id ?? $editData->id ?? ''}}" readonly>
        <div class="modal-body">
         <div class="row">
           <div class="col-md-5">
             <div class="row form-group">
              <label class="col-sm-5 control-label" for="example-input-normal">Plot No.</label>
              <div class="col-sm-7">
               <b style="color: #F01260"> {{$editData1->plot_no ?? $editData->plot_no ?? ''}}</b>
             </div>
           </div>  
         </div>
         <div class="col-md-5">
           <div class="row form-group">
            <label class="col-sm-5 control-label" for="example-input-normal">Plot Name</label>
            <div class="col-sm-7">
              <b style="color: #F0125B">{{ucwords($editData1->land_name ?? $editData->land_name ?? '')}}</b>
            </div>
          </div>  
        </div>
      </div>
      <div class="row">
       <div class="col-md-5">
         <div class="row form-group">
          <label class="col-sm-5 control-label" for="example-input-normal">Application No.</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="application_no">
          </div>
        </div>  
      </div>
      <div class="col-md-5">
       <div class="row form-group">
        <label class="col-sm-5 control-label" for="example-input-normal">Application Date.</label>
        <div class="col-sm-7">
          <input type="text" class="form-control autodate" name="application_date">
        </div>
      </div>  
    </div>
  </div>
  <div class="row">
    <div class="col-md-5">
     <div class="row form-group">
      <label class="col-sm-5 control-label" for="example-input-normal">Allotment No.</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="allotment_no">
      </div>
    </div>  
  </div>

  <div class="col-md-5">
   <div class="row form-group">
    <label class="col-sm-5 control-label" for="example-input-normal">Allotment Date.</label>
    <div class="col-sm-7">
      <input type="text" class="form-control autodate" name="allotment_date">
    </div>
  </div>  
</div>
<div class="col-md-5">
 <div class="row form-group">
  <label class="col-sm-5 control-label" for="example-input-normal">Registration No.</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="registration_no">
  </div>
</div>  
</div>
<div class="col-md-5">
 <div class="row form-group">
  <label class="col-sm-5 control-label" for="example-input-normal">Registration Date.</label>
  <div class="col-sm-7">
    <input type="text" class="form-control autodate" name="registration_date">
  </div>
</div>  
</div>
</div>


<div class="row">
  <div class="col-md-6">
    <h4>Customer Details</h4>
    <hr>
    <div class="row">
      <div class="col-md-3">
       <label class="col-sm-4 control-label" for="example-input-normal">Name</label>
     </div>
     <div class="col-md-9">
      <div class="form-inline">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">First Name</label>
          <input type="text" class="form-control" name="f_name" id="f_name" placeholder="First Name" style="width: 129px; margin-right: 5px;" required="" aria-required="true">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Last Name</label>
          <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Last Name" style="width: 129px;" required="" aria-required="true">
        </div>
      </div>
    </div>
    <div class="col-md-3" style="margin-top: 6px;">
      <label class="col-sm-4 control-label" for="example-input-normal">Gender</label>
    </div>
    <div class="col-md-9" style="margin-top: 6px;">
      <select class="form-control" name="gender" id="genader" required="" aria-required="true">
        <option value="">-Select Gender-</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="col-md-3" style="margin-top: 6px;">
      <label class="col-sm-4 control-label" for="example-input-normal">Occupation</label>
    </div>
    <div class="col-md-9" style="margin-top: 6px;">
      <input type="text" class="form-control" name="occupation" id="occupation" required="" aria-required="true">
            <!-- <select class="form-control"  name="occupation" id="occupation" required="" aria-required="true">
              <option value="">-</option>
              <option value=""></option>
              <option value=""></option>
            </select> -->
          </div>
          <div class="col-md-3" style="margin-top: 6px;">
            <label class="col-sm-4 control-label" for="example-input-normal">DOB</label>
          </div>
          <div class="col-md-9" style="margin-top: 6px;">
           <div class="input-group">
            <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="dob" id="dob" required="" aria-required="true">
            <div class="input-group-append">
              <span class="input-group-text"><i class="md md-event"></i></span>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="margin-top: 6px;">
          <label class="col-sm-4 control-label" for="field-3">Contact</label>
        </div>
        <div class="col-md-9" style="margin-top: 6px;">
          <input class="form-control" type="number" maxlength="10" minlength="10" min="1" name="mobile" id="mobile"  placeholder="+91" required="" aria-required="true"> 
        </div>
        <div class="col-md-3" style="margin-top: 6px;">
          <label class="col-sm-4 control-label" for="example-input-normal">Company</label>
        </div>
        <div class="col-md-9" style="margin-top: 6px;">
          <input type="text" class="form-control" placeholder=""  name="company" id="company" required="" aria-required="true">
        </div>
        <div class="col-md-3" style="margin-top: 6px;">
          <label class="col-sm-4 control-label" for="example-input-normal" >Email</label>
        </div>
        <div class="col-md-9" style="margin-top: 6px;">
         <div class="input-group">
          <input type="email" class="form-control" placeholder="" name="email" id="email" required="" aria-required="true">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
          </div>
        </div>
      </div>
      <div class="col-md-7" style="margin-left: 93px; margin-top: 12px;">
        <div class="form-group">
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
              Add to contact list
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="col-md-6">
    <h4>Lease Details</h4>
    <hr>
    <div class="row">
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Based Rent</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <input type="text" class="form-control"  name="based_rent" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="based_rent" required="" aria-required="true">
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Taxes</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <input type="text" class="form-control"  name="taxes" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="taxes" required="" aria-required="true">
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Insurance</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <input type="text" class="form-control"  name="insurance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="insurance" required="" aria-required="true">
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Maintanance</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <input type="text" class="form-control"  name="maintanance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="maintanance" required="" aria-required="true">
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Additional Charge</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <input type="text" class="form-control"  name="additional_charge" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="additional_charge" required="" aria-required="true">
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <input type="text" class="form-control"  name="netpaybill" id="netpaybill" readonly="" required="" aria-required="true">
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <div class="radio radio-info form-check-inline">
          <input type="radio" id="inlineRadio1" value="monthly" name="net_payable" id="months" >
          <label for="inlineRadio1"> Monthly </label>
        </div>
        <div class="radio form-check-inline">
          <input type="radio" id="inlineRadio2" checked="checked" value="yearly" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="net_payable" id="year">
          <label for="inlineRadio2"> Yearly </label>
        </div>
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal"><span id="tag_n">Year</span>(s)</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
        <input type="text" class="form-control"  name="lease_time" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="yers" required="" aria-required="true">
        <input type="hidden" class="form-control"  name="lease_duration" id="time_duration" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="yers" >
      </div>
      <div class="col-md-4" style="margin-top: 6px;">
        <label class="col-sm-12 control-label" for="example-input-normal">Starting Date</label>
      </div>
      <div class="col-md-8" style="margin-top: 6px;">
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
</div>
<div class="col-md-12" style="text-align: right;">
  <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Save</button>
  <button type="button" class="btn btn-secondary waves-effect m-b-5">Reset</button>
</div>
</form>
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
            <div class="col-md-4"> 
              <div class="form-group"> 
                <label for="field-5" class="control-label">Contact <font color="red">*</font></label> 
                <input type="text" class="form-control" id="field-5" name="mobile" id="mobile" required="" aria-required="true" placeholder="+91"> 
              </div> 
            </div> 
            <div class="col-md-4"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Company <font color="red">*</font></label> 
                <input type="text" class="form-control" name="company" id="company" required="" aria-required="true" placeholder="abs"> 
              </div> 
            </div> 
            <div class="col-md-4"> 
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
                    <option value="NA">NA</option>
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
                    <option value="NA">NA</option>
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
                    <option value="NA">NA</option>
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
                <input type="text" class="form-control" name="plot_no" id="plot_no" value="" placeholder="Numbers" required="" aria-required="true"> 
              </div> 
            </div> 
            <div class="col-md-4"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Plot Name</label> 
                <input type="text" class="form-control" name="land_name" id="land_name" value="" placeholder="Enter Plot Name" required="" aria-required="true"> 
              </div> 
            </div> 
            <div class="col-md-2"> 
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
                <input type="text" class="form-control"  name="plot_value" id="plot_value" value="" placeholder="Size" required="" aria-required="true"> 
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
                <input type="text" class="form-control" name="pincode" id="pincode" value=""  placeholder="Ex:-123456" required="" aria-required="true"> 
              </div> 
            </div> 
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12" style="    text-align: right; margin-bottom: 6px;">
  <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
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