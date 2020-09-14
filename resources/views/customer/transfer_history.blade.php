<style>
  hr.new2 {
    border-top: 1px dashed #000;
  }
</style>
<div class="content-page">
  <div class="content">
    <!-- Start content -->
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;">&nbsp;<i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Transfer History</h4>
          <ol class="breadcrumb pull-right">
            <!-- <li><a href="#">Home</a></li>
            <li><a href="#">Customer</a></li>
            <li class="active">Transfer History</li> -->
          </ol>
        </div>
      </div>
      <hr class="new2">
      <div class="card card-border card-info">
        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
          <div class="card-body">
            <div class="row"><br><br><br>
              <div class="col-md-12 col-sm-12 col-12">
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead style="background: #b6e9ff;">
                    <tr>
                      <th>Application No.</th>
                      <th>Registration No.</th>
                      <th>Allotment No.</th>
                      <th>Plot Name</th>
                      <th>Customer Name</th>
                      <th>Company Name</th>
                      <th>Registration Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($toReturn as $key=>$value)
                    @php
                    if ($value['trans_cust_id']!='') {
                    $d = DB::table('customers')->where('id',$value['trans_cust_id'])->first();
                    }
                    @endphp
                    <tr>
                        <td class="text-right">{{$value['application_no']}}</td>
                        <td class="text-right">{{$value['registration_no']}}</td>
                        <td class="text-right">{{$value['allotment_no']}}</td>
                        <td>{{$value['land_name']}}</td>
                        <td data-toggle="tooltip" data-placement="top" title="" data-original-title="This Registration has been  transferred to {{@$value['f_name'] ?? ''}} {{@$value['l_name'] ?? ''}}">{{$value['f_name'] ?? ''}} {{$value['l_name'] ?? ''}}
                        <font color="#F22323">({{@$d->f_name ?? ''}} {{@$d->l_name ?? ''}})</font>
                      </td>
                        <td>{{$value['company']}}</td>
                        <td class="text-right">{{ date('d/m/Y',strtotime($value['created_at']))}}</td>
                        @if($value['status'] == 1)
                        <td  class="text-center">
                            <p class="mb-0" style="color: green;">
                                <span class=""><i class="fas fa-dot-circle"></i></i>
                                </span>
                            </p>
                        </td>
                        @else
                        <td class="text-center">
                            <p class="mb-0" style="color:#e63841 ;">
                                <span class=""><i class="fas fa-dot-circle"></i></span>
                            </p>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


      </div> <!-- card -->
    </div> <!-- card -->
  </div> <!-- container -->
</div> <!-- content -->
<script>
  function Edit_View_Registration(id) {
      $("#loader1").css("display", "block");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{url('land/registration/edit/')}}" + '/' + id,
        method: "POST",
        contentType: 'application/json',
        success: function(data) {
          console.log(data);
          document.getElementById('ids').value = data.id;
          document.getElementById("plot_no").innerHTML = data.plot_no;
          document.getElementById("plot_name").innerHTML = data.land_name;
          document.getElementById("appli_no").innerHTML = data.application_no;
          document.getElementById("allot_no").innerHTML = data.registration_no;
          document.getElementById('e_f_name').value = data.f_name;
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

          $("#loader1").css("display", "none");
          $('#edit_customer').modal('show');
        }
      });
    }
  } catch (err) {
    var error = err.message;
    alert(error)
  }
</script>


<div class="modal fade" id="edit_customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">(View/Edit) Registeration</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ URL::to('land/create/assign-customer')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <input type="hidden" name="ids" id="ids">
        <input type="hidden" name="lease_id" id="lease_id">
        <div class="modal-body">
          <div class="row">
            <div class="col-xl-12">
              <ul class="nav nav-tabs tabs" role="tablist">
                <li class="nav-item tab">
                  <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#home-2" role="tab" aria-controls="home-2" aria-selected="false">
                    <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                    <span class="d-none d-sm-block">Land Details</span>
                  </a>
                </li>
                <li class="nav-item tab">
                  <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab" aria-controls="profile-2" aria-selected="true">
                    <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                    <span class="d-none d-sm-block">Customer Details</span>
                  </a>
                </li>
                <li class="nav-item tab">
                  <a class="nav-link" id="message-tab-2" data-toggle="tab" href="#message-2" role="tab" aria-controls="message-2" aria-selected="false">
                    <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                    <span class="d-none d-sm-block">Lease Details</span>
                  </a>
                </li>

              </ul>
              <div class="tab-content">
                <div class="tab-pane show active" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Plot No.</label>
                        <div class="col-sm-7">
                          <b style="color: #252525" id="plot_no"></b>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Plot Name</label>
                        <div class="col-sm-7">
                          <b style="color: #252525" id="plot_name"></b>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Application No.</label>
                        <div class="col-sm-7">
                          <b style="color: #252525" id="appli_no"></b>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Allotment No.</label>
                        <div class="col-sm-7">
                          <b style="color: #252525" id="allot_no"></b>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-3">
                        <label class="col-sm-4 control-label" for="example-input-normal">Name</label>
                      </div>
                      <div class="col-md-9">
                        <div class="form-inline">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">First Name</label>
                            <input type="text" class="form-control" name="f_name" id="e_f_name" placeholder="First Name" style="width: 129px; margin-right: 5px;" required="" aria-required="true">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Last Name</label>
                            <input type="text" class="form-control" name="l_name" id="e_l_name" placeholder="Last Name" style="width: 129px;" required="" aria-required="true">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style="margin-top: 6px;">
                        <label class="col-sm-4 control-label" for="example-input-normal">Gender</label>
                      </div>
                      <div class="col-md-9" style="margin-top: 6px;">
                        <select class="form-control" name="gender" id="e_gender" required="" aria-required="true">
                          <option value="">-Select Gender-</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                      <div class="col-md-3" style="margin-top: 6px;">
                        <label class="col-sm-4 control-label" for="example-input-normal">Occupation</label>
                      </div>
                      <div class="col-md-9" style="margin-top: 6px;">
                        <input type="text" class="form-control" name="occupation" id="e_occupation" required="">
                      </div>
                      <div class="col-md-3" style="margin-top: 6px;">
                        <label class="col-sm-4 control-label" for="example-input-normal">DOB</label>
                      </div>
                      <div class="col-md-9" style="margin-top: 6px;">
                        <div class="input-group">
                          <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="dob" id="e_dob" required="" aria-required="true">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style="margin-top: 6px;">
                        <label class="col-sm-4 control-label" for="example-input-normal">Contact</label>
                      </div>
                      <div class="col-md-9" style="margin-top: 6px;">
                        <input type="text" class="form-control" placeholder="+91" name="mobile" id="e_mobile" required="" aria-required="true">
                      </div>
                      <div class="col-md-3" style="margin-top: 6px;">
                        <label class="col-sm-4 control-label" for="example-input-normal">Company</label>
                      </div>
                      <div class="col-md-9" style="margin-top: 6px;">
                        <input type="text" class="form-control" placeholder="" name="company" id="e_company" required="" aria-required="true">
                      </div>
                      <div class="col-md-3" style="margin-top: 6px;">
                        <label class="col-sm-4 control-label" for="example-input-normal">Email</label>
                      </div>
                      <div class="col-md-9" style="margin-top: 6px;">
                        <div class="input-group">
                          <input type="email" class="form-control" placeholder="" name="email" id="e_email" required="" aria-required="true">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                          </div>
                        </div>
                      </div>
                      <!--  <div class="col-md-7" style="text-align:center; margin-top: 6px;">
                  <div class="form-group">
                  <div class="checkbox checkbox-primary">
                  <input id="checkbox1" type="checkbox">
                  <label for="checkbox1">
                  Add to contact list
                  </label>
                  </div>
                  </div>
                </div> -->
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="message-2" role="tabpanel" aria-labelledby="message-tab-2">
                  <div class="col-md-12">
                    <h4>Lease Details</h4>
                    <hr>
                    <div class="row">
                      <div class="col-md-4" style="margin-top: 6px;">
                        <label class="col-sm-12 control-label" for="example-input-normal">Based Rent</label>
                      </div>
                      <div class="col-md-8" style="margin-top: 6px;">
                        <input type="text" class="form-control" name="based_rent" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_based_rent" required="" aria-required="true">
                      </div>
                      <div class="col-md-4" style="margin-top: 6px;">
                        <label class="col-sm-12 control-label" for="example-input-normal">Taxes</label>
                      </div>
                      <div class="col-md-8" style="margin-top: 6px;">
                        <input type="text" class="form-control" name="taxes" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_taxes" required="" aria-required="true">
                      </div>
                      <div class="col-md-4" style="margin-top: 6px;">
                        <label class="col-sm-12 control-label" for="example-input-normal">Insurance</label>
                      </div>
                      <div class="col-md-8" style="margin-top: 6px;">
                        <input type="text" class="form-control" name="insurance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_insurance" required="" aria-required="true">
                      </div>
                      <div class="col-md-4" style="margin-top: 6px;">
                        <label class="col-sm-12 control-label" for="example-input-normal">Maintanance</label>
                      </div>
                      <div class="col-md-8" style="margin-top: 6px;">
                        <input type="text" class="form-control" name="maintanance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_maintanance" required="" aria-required="true">
                      </div>
                      <div class="col-md-4" style="margin-top: 6px;">
                        <label class="col-sm-12 control-label" for="example-input-normal">Additional Charge</label>
                      </div>
                      <div class="col-md-8" style="margin-top: 6px;">
                        <input type="text" class="form-control" name="additional_charge" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_additional_charge" required="" aria-required="true">
                      </div>
                      <div class="col-md-4" style="margin-top: 6px;">
                        <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
                      </div>
                      <div class="col-md-8" style="margin-top: 6px;">
                        <input type="text" class="form-control" name="netpaybill" id="e_netpaybill" readonly="" required="" aria-required="true">
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
                        <input type="text" class="form-control" name="lease_time" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_yers" required="" aria-required="true">
                        <input type="hidden" class="form-control" name="lease_duration" id="time_duration" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                      </div>
                      <div class="col-md-4" style="margin-top: 6px;">
                        <label class="col-sm-12 control-label" for="example-input-normal">Starting Date</label>
                      </div>
                      <div class="col-md-8" style="margin-top: 6px;">
                        <div class="input-group">
                          <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="e_start_date" required="" aria-required="true">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12" style="text-align: right;">
          <!-- <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Update</button>
                    <button type="button" class="btn btn-secondary waves-effect m-b-5">Reset</button> -->
        </div>
      </form>
    </div>
  </div>
</div>