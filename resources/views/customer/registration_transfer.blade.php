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
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;">&nbsp;<i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Transfer Registrations</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">customers</a></li>
            <li class="active">customers Transfer</li>
          </ol>
        </div>
      </div>
      <hr class="new2">
      <div class="card card-border card-info">
        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
          <div class="card-body">
            <div class="row"><br><br><br>
              <div class="col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" onclick="TransferLand()" style="float:right;margin-top:0%;"><i class="md md-add-circle-outline"></i> Transfer</button>
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($results!='')
                    @foreach($results as $key => $val)
                    @php
                    if ($val->trans_cust_id!='') {
                    $d = DB::table('customers')->where('id',$val->trans_cust_id)->first();
                    }
                    @endphp
                    <tr>

                      <td><a href="Javascript::void(0);" onclick="Edit_View_Registration({{$val->id}},{{$val->land_id}})">{{$val->application_no ?? ''}}</a></td>
                      <td data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Reg.No" onclick="changeRegistration({{$val->id}})">
                        <font color="red">@if(@$val->registration_no!=''){{$val->registration_no}} @else P0{{$val->id}} @endif </font>
                      </td>
                      <td>{{$val->allotment_no ?? ''}}</td>
                      <td>{{$val->land_name ?? ''}}</td>
                      <td data-toggle="tooltip" data-placement="top" title="" data-original-title="This Registration has been  transferred to {{@$val->f_name ?? ''}} {{@$val->l_name ?? ''}}">{{$val->f_name ?? ''}} {{$val->l_name ?? ''}}
                        <font color="#F22323">({{@$d->f_name ?? ''}} {{@$d->l_name ?? ''}})</font>
                      </td>
                      <td>{{$val->company}}</td>
                      <td>{{ date('M j, Y',strtotime($val->created_at))}}.</td>
                      @if($val->status == 1)
                      <td>
                        <p class="mb-0">
                          <span class="badge badge-success">Active</span>
                        </p>
                      </td>
                      @else
                      <td>
                        <p class="mb-0">
                          <span class="badge badge-danger">Inactive</span>
                        </p>
                      </td>
                      @endif
                      <td class="actions"> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript::void(0);" class="on-default view-row" data-toggle="tooltip" onclick="Edit_View_Registration({{$val->id}},{{$val->land_id}})" data-placement="top" title="" data-original-title="View/Update"><i class="fa fa-eye"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                        <!--  <a href="{{url('land/registration/delete',$val->id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a> -->
                        &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    @endforeach
                    @endif
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
<div class="modal" id="change_regNo">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <h4 style="color: #0892FC">Create Registration Numaber</h4>
      <form action="{{ URL::to('land/create/new-regis-no')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <input type="hidden" name="new_regId" id="new_regId">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="field-1" class="control-label">Enter New Reg. Number</label>
                <input type="text" class="form-control" id="new_regno" name="new_regno">
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  try {

    function changeRegistration(id) {
      $('#change_regNo').modal('show');
      document.getElementById('new_regId').value = id;
    }

    function Registration() {

      $('#add_customer').modal('show');
    }

    function TransferLand() {

      $('#contracttransfer').modal('show');
    }

    function Edit_View_Registration(id,land_id) {
      $("#loader1").css("display", "block");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{url('land/registration/edit/')}}" + '/' + id+'/'+land_id,
        method: "get",
        contentType: 'application/json',
        success: function(data) {
          console.log(data);
          document.getElementById('ids').value = data.leaseDetails.id;
          document.getElementById("plot_no").innerHTML = data.leaseDetails.plot_no;
          document.getElementById("plot_name").innerHTML = data.leaseDetails.land_name;
          document.getElementById("appli_no").innerHTML = data.leaseDetails.application_no;
          document.getElementById("allot_no").innerHTML = data.leaseDetails.registration_no;
          document.getElementById('e_f_name').value = data.leaseDetails.f_name;
          document.getElementById('e_l_name').value = data.leaseDetails.l_name;
          document.getElementById('e_occupation').value = data.leaseDetails.occupation;
          document.getElementById('e_dob').value = data.leaseDetails.dob;
          document.getElementById('e_mobile').value = data.leaseDetails.mobile;
          document.getElementById('e_company').value = data.leaseDetails.company;
          document.getElementById('e_email').value = data.leaseDetails.email;
          document.getElementById('e_gender').value = data.leaseDetails.gender;

          document.getElementById('e_based_rent').value = data.leaseDetails.based_rent;
          document.getElementById('lease_id').value = data.leaseDetails.lease_id;
          document.getElementById('e_taxes').value = data.leaseDetails.tax;
          document.getElementById('time_duration').value = data.leaseDetails.lease_duration;
          document.getElementById('e_insurance').value = data.leaseDetails.insurance;
          document.getElementById('e_maintanance').value = data.leaseDetails.maintanance;
          document.getElementById('e_additional_charge').value = data.leaseDetails.additional_charge;
          document.getElementById('e_netpaybill').value = data.leaseDetails.net_pay;
          document.getElementById('e_yers').value = data.leaseDetails.lease_time;
          document.getElementById('e_start_date').value = data.leaseDetails.start_date;
          var val = data.leaseDetails.net_payable;
          if (val == 'monthly') {
            $('input[name=net_payable][value=' + val + ']').prop('checked', true);
          } else {
            $('input[name=net_payable][value=' + val + ']').prop('checked', true);
          }

          // $.each(data.lease_history,function(i,history){
          //   console.log(history);
          // })
          for(var i=0;i<data.lease_history.length; i++)
          {
            $("#history").append("<tr><td>"+data.lease_history[i].application_no+"</td>"+data.lease_history[i].allotment_no+"</td><td>"+data.lease_history[i].registration_no+"</td><td>"+data.lease_history[i].registration_no+"</td><td>"+data.lease_history[i].application_date+"</td><td>"+data.lease_history[i].allotment_date+"</td><td>"+data.lease_history[i].allotment_date+"</td><td>"+data.lease_history[i].f_name+data.lease_history[i].l_name+"</td><td>"+data.lease_history[i].company+"</td></tr>");
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#e_additional_charge').on('change', function() {
      var value = $(this).val();
      var bs = Number(document.getElementById('e_based_rent').value);
      var tax = Number(document.getElementById('e_taxes').value);
      var ins = Number(document.getElementById('e_insurance').value);
      var mainti = Number(document.getElementById('e_maintanance').value);
      var adi = Number(document.getElementById('e_additional_charge').value);
      var pay = bs + tax + ins + mainti + adi;
      document.getElementById('e_netpaybill').value = pay;
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
<!-- Search contract -->
<script type="text/javascript">
  function Search() {
    $('.searchcontract').on('keyup', function() {
      var query = $(this).val();
      if (query != '') {
        $("#modelloader").css("display", "block");
        $("#customerList").css("display", "none");
        $("#searchcontractData").css("display", "block");
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: "{{url('land/searchtransfercontract/')}}" + '/' + query,
          type: "GET",
          success: function(data) {
            if (data != 0) {
              document.getElementById("searchcontract").style.color = "";

              document.getElementById('transfercustomer_list').innerText = '';
              $('#searchcontractlist').css("display", "block");
              $("#modelloader").css("display", "none");
              $("#customerList").css("display", "none");
              $('#searchcontractData tbody').html(data);
              var c = document.getElementById('cID').value;
              document.getElementById('land_id').value = c;

            } else {
              $('#searchcontractData tbody').html('');
              $('#searchcontractlist').css("display", "none");
              $("#modelloader").css("display", "none");
              $("#customerList").css("display", "none");
              document.getElementById('transfercustomer_list').innerText = 'There are no records related to this search  keyword...!';
            }
          }
        })
      } else {
        $('#transfercustomer_list').html("");
        $("#searchcontractlist").css("display", "none");
        $("#customerList").css("display", "none");
      }
    });
    $(document).on('click', 'td', function() {
      var value = $(this).text();
      $('#transfercustomer_list').html("");
    });
  };
</script>
<script type="text/javascript">
  function SearchCustomer() {
    $('.search').on('keyup', function() {
      var query = $(this).val();
      if (query != '') {
        $('#contrannsfer').css("display", "none");
        $("#modelloader").css("display", "block");
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: "{{url('land/serachtransfercustomers/')}}" + '/' + query,
          type: "GET",
          success: function(data) {
            document.getElementById("csearch").style.color = "";
            $("#modelloader").css("display", "none");
            $('#customer_list').html(data);
          }
        })
      } else {
        $('#customer_list').html("");
      }
    });
    $(document).on('click', 'td', function() {
      var value = $(this).text();
      $('#customer_list').html("");
    });
  };
</script>
<script type="text/javascript">
  function searchtransferContract(id) {
    $("#customerList").css("display", "none")
    $("#searchcontractlist").css("display", "none");
    $('#searchcontracttransfer').modal('show');
  }
</script>

<!-- Transfer Contract -->
<script type="text/javascript">
  function transferContract(elem) {
    var cust_id = $(elem).data("id");
    var app_no = $(elem).data("name");
    var id = elem.id;
    // alert(app_no)
    $("#customerList").css("display", "block");
    $('#contrannsfer').css("display", "none");
    $('#searchcontractData').css("display", "none");
    document.getElementById("searchcontract").style.color = "#FF0000";
    document.getElementById("searchcontract").value = app_no;
    document.getElementById("first_owner").value = cust_id;
    document.getElementById('land_id').value = data.id;
  }
</script>
<script type="text/javascript">
  function addtransfercustomer(id) {
    $("#modelloader").css("display", "block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/transfercustomer/add/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        console.log(data)
        $("#modelloader").css("display", "none");
        var name = document.getElementById('customer_name').innerText = data.f_name + ' ' + data.l_name;
        var email = document.getElementById('customer_email_id').innerText = data.email;
        var phone = data.mobile;
        document.getElementById("csearch").style.color = "#FF0000";
        document.getElementById("csearch").value = name;
        document.getElementById('cust_name').value = name;
        document.getElementById('cust_email').value = email;
        document.getElementById('cust_phone').value = phone;
        document.getElementById("custo_id").value = data.id;
        $('#contrannsfer').css("display", "block");
      }
    });
  }
</script>

<!--Transfer Contract -->
<div class="modal fade bs-example-modal-lg" id="contracttransfer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <!-- Ajax Page Loader -->
  <div class="preload loaderpopupbox modelloader" id="modelloader" style="display:none;">
    <div class="popup">
      <center>
        <span class="loader10" style="display:block;"><img src="{{url('public/assets/images/loader.gif')}}" height="30" /></span>
      </center>
    </div>
  </div>
  <!-- Close -->
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Registration Transfer Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Close Loader -->
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="md-form mt-0">
                  (<b style="color:#E94810">Note:- </b>Search Registration for transfer with Land Name,Company,Customer, Registration No)<br><br>
                  <input class="form-control searchcontract" onclick="Search()" autocomplete="off" id="searchcontract" type="text" placeholder="Search Registration" aria-label="Search" autofocus>
                </div>&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>
                <br>
                <br>
                <div id="transfercustomer_list" style="color: red;"></div>
              </div>
              <br><br><br>
              <div class="col-sm-12">
                <div class="table-responsive" id="searchcontractlist" style="display: none;">
                  <table id="searchcontractData" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Registration No</th>
                        <th>Land Name</th>
                        <th>Customer Name</th>
                        <th>Company</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Customer -->
        <div class="card" id="customerList" style="display: none;">
          <!-- Ajax Page Loader -->
          <div class="preload loaderpopupbox modelloader" id="modelloader" style="display:none;">
            <div class="popup">
              <center>
                <span class="loader10" style="display:block;"><img src="{{url('public/assets/images/loader.gif')}}" height="70" /></span>
              </center>
            </div>
          </div>
          <!-- Close -->
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="md-form mt-0">
                  (<b style="color:#E94810">Note:- </b>Search customer for transfer Registration with Name, Email, Phone, Mobile)<br><br>
                  <input class="form-control search" onclick="SearchCustomer()" autocomplete="off" id="csearch" type="text" placeholder="Search Customer" aria-label="Search" autofocus>
                </div>&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>
                <br>
                <br>
                <div id="customer_list"></div>
              </div>
              <br><br><br>
              <div class="col-sm-12">
                <div class="" id="contrannsfer" style="display: block;">
                <form action="{{url('land/ragistration/transfer')}}" method="post">
                  @csrf
                  <div class="row">
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Application No.</label>
                              <input type="text" class="form-control" placeholder="Application No" name="application_no">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Allotment No</label>
                              <input type="text" class="form-control" placeholder="Allotment No" name="allotment_no">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Registration No</label>
                              <input type="text" class="form-control"  placeholder="Registration No" name="registration_no">
                          </div>
                      </div>

                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Application Date</label>
                              <input type="text"  class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="application_date">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Allotment Date</label>
                              <input type="text" class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="allotment_date">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Registration Date</label>
                              <input type="text" class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="registration_date">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Customer Name</label>
                              <input type="text" class="form-control" placeholder="Customer Name"   name="cust_name" id="cust_name">
                          </div>
                      </div>

                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Email</label>
                              <input type="text"  class="form-control" placeholder="example@gmail.com" name="cust_email" id="cust_email">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">PCC Date</label>
                              <input type="text" class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="pcc_date">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Transfer Amount</label>
                              <input type="text"  class="form-control" placeholder="" name="transfer_amount">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Land Price</label>
                              <input type="text" class="form-control" placeholder="" name="land_price">
                          </div>
                      </div>

                      <div class="col-md-3"><br><br>
                          <div class="form-group">
                             
                              <!-- <input type="checkbox" name="all_tearm"> -->
                              <div class="checkbox checkbox-info">
                                  <input id="checkbox4" type="checkbox" name="all_tearm">
                                  <label for="checkbox4">
                                      All Trems
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <button role="button" type="submit" class="btn btn-primary">Transfer</button> 
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal -->


<!--  Modal content for the above example -->
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
                <li class="nav-item tab">
                  <a class="nav-link" id="history-tab-2" data-toggle="tab" href="#history-2" role="tab" aria-controls="message-2" aria-selected="false">
                    <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                    <span class="d-none d-sm-block">History</span>
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
                <div class="tab-pane show active" id="history-2" role="tabpanel" aria-labelledby="history-tab-2">
                <table class="table" style="font-size:10px">
                <thead>
                  <tr>
                    <th>Application No.</th>
                    <th>Allotment No.</th>
                    <th>Registration  No.</th>
                    <th>Application Date.</th>
                    <th>Allotment Date.</th>
                    <th>Registration Date.</th>
                    <th>Customer Name</th>
                    <th>Company Name</th>
                    <!-- <th>Company Type</th> -->
                  </tr>
                </thead >

                <tbody id="history">
                </tbody>
                </table>  
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

<script type="text/javascript">
  $(document).ready(function() {
    $('#searchcustomer').on('keyup', function() {
      var query = $(this).val();
      if (query != '') {
        $("#modelloader").css("display", "block");
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: "{{url('land/serachcustomers/')}}" + '/' + query,
          type: "GET",
          success: function(data) {
            $("#modelloader").css("display", "none");
            $('#customer_list').html(data);
          }
        })
      } else {
        $('#customer_list').html("");
      }
    });
    $(document).on('click', 'td', function() {
      var value = $(this).text();
      $('#customer_list').html("");
      $("#searcherror").css("display", "none");
    });

    /* Land */
    $('#searchland').on('keyup', function() {
      var query = $(this).val();
      if (query != '') {
        $("#modelloader").css("display", "block");
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: "{{url('land/serachland/')}}" + '/' + query,
          type: "GET",
          success: function(data) {
            $("#modelloader").css("display", "none");
            $('#land_list').html(data);
          }
        })
      } else {
        $('#land_list').html("");
      }
    });
    $(document).on('click', 'td', function() {
      var value = $(this).text();
      $('#land_list').html("");
    });

  });

  function addcustomer(id) {
    $("#modelloader").css("display", "block");
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
        $("#modelloader").css("display", "none");
        var name = data.f_name + ' ' + data.l_name;
        var email = data.email;
        var mobile = data.mobile;
        document.getElementById("cust_id").value = data.id;
        document.getElementById("searchcustomer").value = name;
      }
    });
  }

  function addland(id) {
    $("#modelloader").css("display", "block");
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
        $("#modelloader").css("display", "none");
        // document.getElementById("plot_no").value = data.plot_no;
        document.getElementById("land_id").value = data.id;
        document.getElementById("searchland").value = data.land_name;
      }
    });
  }
</script>
<!-- Add Customers -->

<div class="modal fade bs-example-modal-lg" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <!-- Ajax Page Loader -->
  <div class="preload loaderpopupbox modelloader" id="modelloader" style="display:none;">
    <div class="popup">
      <center>
        <span class="loader10" style="display:block;"><img src="{{url('public/assets/images/loader.gif')}}" height="40" /></span>
      </center>
    </div>
  </div>
  <!-- Close -->
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Land Register</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ URL::to('land/create/registration')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Customer</label>
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" name="cust_name" id="searchcustomer" class="form-control" placeholder="search" autocomplete="off">
                    <input type="hidden" name="cust_id" id="cust_id">
                    <span class="input-group-prepend">
                      <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                  <div id="customer_list"></div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Land</label>
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" id="searchland" name="land_name" class="form-control" placeholder="search">
                    <input type="hidden" name="land_id" id="land_id">
                    <span class="input-group-prepend">
                      <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                  <div id="land_list"></div>
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
                  <input type="text" class="form-control" name="registration_no">
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
                  <input type="text" class="form-control" name="occupation" id="e_occupation" required="">
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
                  <label class="col-sm-4 control-label" for="example-input-normal">Contact</label>
                </div>
                <div class="col-md-9" style="margin-top: 6px;">
                  <input type="text" class="form-control" placeholder="+91" name="mobile" id="mobile" required="" aria-required="true">
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
                <div class="col-md-12" style="margin-left: 93px; margin-top: 12px;">
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
                  <input type="text" class="form-control" name="based_rent" id="based_rent" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Taxes</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="taxes" id="taxes" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Insurance</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="insurance" id="insurance" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Maintanance</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="maintanance" id="maintanance" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Additional Charge</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="additional_charge" id="additional_charge" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="netpaybill" id="netpaybill" required="" aria-required="true">
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <div class="radio radio-info form-check-inline">
                    <input type="radio" id="inlineRadio1" value="monthly" name="add_net_payable" id="net_payable" checked="checked">
                    <label for="inlineRadio1"> Monthly </label>
                  </div>
                  <div class="radio form-check-inline">
                    <input type="radio" id="inlineRadio2" value="yearly" name="add_net_payable" id="net_payable">
                    <label for="inlineRadio2"> Yearly </label>
                  </div>
                </div>
                <div class="col-md-4" style="margin-top: 6px;">
                  <label class="col-sm-12 control-label" for="example-input-normal"><span id="add_tag_n">Year</span>(s)</label>
                </div>
                <div class="col-md-8" style="margin-top: 6px;">
                  <input type="text" class="form-control" name="lease_time" required="" aria-required="true">
                  <input type="hidden" class="form-control" name="lease_duration" id="add_time_duration">
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

    $("input[name$='add_net_payable']").click(function() {
      var test = $(this).val();
      if (test == 'monthly') {
        document.getElementById('add_tag_n').textContent = 'Month';
        document.getElementById('add_time_duration').value = 'm';
      } else {
        document.getElementById('add_tag_n').textContent = 'Year';
        document.getElementById('add_time_duration').value = 'yr';
      }
    });

  });
</script>