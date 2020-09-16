<style>
  hr.new2 {
    border-top: 1px dashed #000;
  }

  .card {
    -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    border-radius: 0px;
    border: 0px solid whitesmoke;
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }
  label {
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    line-height:initial;
}
</style>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Land: &nbsp; @if(@$editData->id!='') Edit  @else Add  @endif / <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <!-- <li><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="{{URL::to('land/listing')}}">land</a></li>
            <li class="active">Add land</li> -->
          </ol>
        </div>
      </div>
      <hr class="new2">

      <div class="row">
        <div class="col-md-12">
          <div class="card" style="border-left: 3px solid #386900;box-shadow: 4px 4px #b1b1b1;">
            <div class="card-header" style="background: linear-gradient(to left, #bee9fd, #ffffff 50%, #ffffff, #ffffff 75%);">
              <div class="card-body">

                <div class="row gutters justify-content-left">
                  <form action="{{url('land/add')}}" method="post" id="FormValidation" required="" aria-required="true" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="ids" value="{{$editData->id ?? ''}}">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-4" class="control-label">Area/Zone</label>
                                <select class="form-control" name="area" id="area" required="" aria-required="true">
                                  <option value="">Select Zone</option>
                                  @foreach($zone as $key=>$val)
                                  @if($val->sector_zone!='')
                                  <option value="{{$val->sector_zone}}" @if(@$val->sector_zone==@$editData->area){{'selected'}} @endif>{{$val->sector_zone}}</option>
                                  @endif
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-4" class="control-label">Sector/Phase</label>
                                <select class="form-control" name="sector" id="sector">
                                  <option value="">Select Sectors</option>
                                  @foreach($phase as $key=>$val)
                                  @if($val->phase!='')
                                  <option value="{{$val->phase}}" @if(@$val->phase==@$editData->sector ?? ''){{'selected'}} @endif >{{$val->phase}}</option>
                                  @endif
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
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
                                <input type="text" class="form-control" name="plot_no" id="plot_no"   value="{{$editData->plot_no ?? ''}}" placeholder="Numbers" required="" aria-required="true">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Plot Name</label>
                                <input type="text" class="form-control" name="land_name" id="land_name" value="{{$editData->land_name ?? ''}}" placeholder="Enter Plot Name" required="" aria-required="true">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Select UoM</label>
                                <select class="form-control" name="plot_size" id="plot_size" required="" aria-required="true">
                                  <option value="">Select UOM</option>
                                  <option @if(@$editData->uom=='sq.mtr'){{'selected'}}@endif value="sq.mtr">Square Meter</option>
                                  <option @if(@$editData->uom=='sq.inch'){{'selected'}}@endif value="sq.inch">Square Inch</option>
                                  <option @if(@$editData->uom=='sq.ft'){{'selected'}}@endif value="sq.ft">Square feet</option>
                                  <option @if(@$editData->uom=='acre'){{'selected'}}@endif value="acre">Acre</option>
                                  <option @if(@$editData->uom=='hectare'){{'selected'}}@endif value="hectare">Hectare</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Size</label>
                                <input type="text" class="form-control" name="plot_value" id="plot_value"  min="1" value="{{$editData->plot_size ?? ''}}" placeholder="Size" required="" aria-required="true">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Address Line 1</label>
                                <textarea class="form-control autogrow" name="address" id="address" placeholder="Write your address Line 1  here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required>{{$editData->address1 ?? ''}}</textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Address Line 2</label>
                                <textarea class="form-control autogrow" name="address2" id="address2" placeholder="Write your address Line 2 here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required>{{$editData->address2 ?? ''}}</textarea>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">City/District</label>
                                <!-- <input type="text" class="form-control"  placeholder="Ex:-noida,kanpur.." required="" aria-required="true"> -->
                                <select class="form-control" name="city" id="city" required="" aria-required="true">
                                  <option value="">Select City</option>
                                  <option @if(@$editData->city=='Jamshedpur'){{'selected'}}@endif value="Jamshedpur">Jamshedpur</option>
                                  <option @if(@$editData->city=='Ranchi'){{'selected'}}@endif value="Ranchi">Ranchi</option>
                                  <option @if(@$editData->city=='Bokaro'){{'selected'}}@endif value="Bokaro">Bokaro</option>
                                  <option @if(@$editData->city=='Dhanbad'){{'selected'}}@endif value="Dhanbad">Dhanbad</option>
                                  <option @if(@$editData->city=='Saraikela kharsawan'){{'selected'}}@endif value="Saraikela kharsawan">Saraikela kharsawan</option>
                                  <option @if(@$editData->city=='East Singhbhum'){{'selected'}}@endif value="East Singhbhum">East Singhbhum</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-2" class="control-label">State/Province</label>
                                <!--<input type="text" class="form-control"  placeholder="Ex:-delhi,uttar pradesh.." required="" aria-required="true">-->
                                <select class="form-control" name="state" id="state" required="" aria-required="true">
                                  <option value="">Select State</option>
                                  <option @if(@$editData->state=='Jharkhand'){{'selected'}}@endif value="Jharkhand">Jharkhand</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-5" class="control-label">Country</label>
                                <!--<input type="text" class="form-control"  placeholder="Ex:-India,US,UK.." required="" aria-required="true"> -->
                                <select class="form-control" name="country" id="country" required="" aria-required="true">
                                  <option value="">Select Country</option>
                                  <option @if(@$editData->country=='india'){{'selected'}}@endif value="india">India</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-3" class="control-label">Pincode</label>
                                <input class="form-control" type="number" maxlength="6"   minlength="6" min="1" name="pincode" id="pincode" value="{{$editData->pincode ?? ''}}" placeholder="Ex:-123456" required="" aria-required="true">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="field-3" class="control-label">Documents</label>
                                <input class="form-control" type="file" name="documents" id="documents" value="{{$editData->documents ?? ''}}" placeholder="" aria-required="true" multiple="">
                                @if(@$editData->documents)
                                <a href="{{url('public/landdocuments/'.$editData->documents)}}">{{$editData->documents}}</a>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-1"> </div>
                            <div class="col-md-3" style="margin-left: 4.5%;">
                              <div class="form-group">
                                <label for="field-3" class="control-label">latitute</label>
                                <input class="form-control" type="number" name="latitute" id="latitute" min="1" value="{{$editData->latitute ?? ''}}" placeholder=""  aria-required="true">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-3" class="control-label">longitute</label>
                                <input class="form-control" type="number" name="longitute" id="longitute" min="1" value="{{$editData->longitute ?? ''}}" placeholder=""  aria-required="true">
                              </div>
                            </div>

                          </div>


                        </div>
                      </div>

                    </div>
                    <hr class="new2">

                </div>
                <div class="col-md-12" style="    text-align: left; margin-bottom: 6px;">
                  <center><button type="submit" class="btn btn-outline-primary waves-effect waves-light m-b-5">Submit</button></center>
                </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  try {
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
  } catch (err) {
    var error = err.message;
    alert(error)
  }
</script>

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
      <form action="{{ URL::to('land/create/assign-customer')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
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
                  <input class="form-control" type="number" maxlength="10" minlength="10" min="1" name="mobile" id="mobile" placeholder="+91" required="" aria-required="true">
                </div>
                <div class="col-md-3" style="margin-top: 6px;">
                  <label class="col-sm-4 control-label" for="example-input-normal">Company</label>
                </div>
                <div class="col-md-9" style="margin-top: 6px;">
                  <input type="text" class="form-control" placeholder="" name="company" id="company" required="" aria-required="true">
                </div>
                <div class="col-md-3" style="margin-top: 6px;">
                  <label class="col-sm-4 control-label" for="example-input-normal">Email</label>
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


            <script type="text/javascript">
              $(document).ready(function() {
                $('#additional_charge').on('change', function() {
                  var value = $(this).val();
                  var bs = Number(document.getElementById('based_rent').value);
                  var tax = Number(document.getElementById('taxes').value);
                  var ins = Number(document.getElementById('insurance').value);
                  var mainti = Number(document.getElementById('maintanance').value);
                  var adi = Number(document.getElementById('additional_charge').value);
                  var pay = bs + tax + ins + mainti + adi;
                  document.getElementById('netpaybill').value = pay;
                });
              });
            </script>

            <script type="text/javascript">
              $(document).ready(function() {
                $("input[name$='net_payable']").click(function() {
                  var test = $(this).val();
                  if (test == 'monthly') {
                    document.getElementById('tag_n').textContent = 'Month';
                    document.getElementById('time_duration').value = 'm';
                  } else {
                    document.getElementById('tag_n').textContent = 'Year';
                    document.getElementById('time_duration').value = 'yr';
                  }
                });
              });
            </script>

            <div class="col-md-6">
              <h4>Lease Details</h4>
              <hr>
              <div class="row">
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Based Rent</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="based_rent" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="based_rent" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Taxes</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="taxes" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="taxes" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Insurance</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="insurance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="insurance" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Maintanance</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="maintanance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="maintanance" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Additional Charge</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="additional_charge" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="additional_charge" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="netpaybill" id="netpaybill" readonly="" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <div class="radio radio-info form-check-inline">
                    <input type="radio" id="inlineRadio1" value="monthly" name="net_payable" id="months">
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
                  <input type="text" class="form-control" name="lease_time" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="yers" required="" aria-required="true">
                  <input type="hidden" class="form-control" name="lease_duration" id="time_duration" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="yers">
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