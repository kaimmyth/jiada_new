<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }
</style>
<div class="content-page">             
  <div class="content">                                             
    <!-- Start content -->             
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Manage Leads</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">leads</a></li>
            <li class="active">Leads Listing</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" style="background-color: #317eeb;"></div>
            <div class="card-body">
              <form method="post" action="{{url('filter-leads')}}" id="FormValidation" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="filterAction" value="listleads">
                <div class="row gutters">
                  <div class="col-md-1">
                    <div class="form-group">
                      <label class="control-label">From Date </label>
                      <input name="from_date" class="form-control autodate"  
                      placeholder="dd-mm-yy" type="text" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="form-group">
                      <label class="control-label">To Date </label>
                      <input name="to_date" class="form-control autodate"  
                      placeholder="dd-mm-yy" type="text" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="control-label">Search with keyword </label>
                      <input name="keyword" class="form-control"  
                      placeholder="Ex:-name,Id,phone,email.." type="text" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label"> </label>
                      <button class="btn btn-outline-info btn-rounded" style="margin-top: 30px;" type="submit"><i
                        class="fas fa-search"></i> Search</button>
                        <button class="btn btn-outline-info btn-rounded" style="margin-top: 30px;" type="button"
                        onclick="window.location.href='{{url('leads')}}'">Reset</button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="row"><br><br><br>
                  <div class="col-md-12 col-sm-12 col-12">
                    <a href="{{url('leads/create')}}"><button type="button" class="btn btn-primary" style="float:right;margin-top: 1%;" ><i class="md md-add-circle-outline"></i> Add</button></a><br>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Website</th>
                          <th>Lead Status</th>
                          <th>Lead Owner</th>
                          <th>Create Date</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($results as $key => $val)
                        <tr>
                          <td>{{$val->first_name}} {{$val->last_name}}</td>
                          <td>{{$val->email}}</td>
                          <td>{{$val->phone}}</td>
                          <td>{{$val->website}}</td>
                          <td>{{$val->lead_status}}</td>
                          <td>{{$val->ownername ?? ''}}</td>
                          <td>@if($val->created_at!=''){{date('M j, Y ', strtotime($val->created_at))}}@endif.</td>
                          <td class="actions">
                          <!--  <a href="{{url('leads/edit',$val->id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil-alt"></i></a>
                           &nbsp;&nbsp;&nbsp;&nbsp;         -->      
                           <a href="{{url('leads/view',$val->id)}}" class="on-default view-row"  data-toggle="tooltip" data-placement="top" title="" data-original-title="View">View Lead</a>
                           &nbsp;&nbsp;&nbsp;&nbsp; 
                           @if(Session::get('gorgID')==1)  
                           <a href="{{url('leads/distroy',$val->id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                           @endif
                           &nbsp;&nbsp;&nbsp;&nbsp;
                         </tr>
                         @endforeach
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div> <!-- End Row -->
       </div> <!-- card -->                                                  
     </div> <!-- container -->
   </div> <!-- content -->
   <script type="text/javascript">
     function viewRecords(id) {
      $("#loader1").css("display","block");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{url('leads/view/')}}" + '/' + id,
        method: "POST",
        contentType: 'application/json',
        success: function (data) {
        //console.log(data);
        document.getElementById("v_name").innerHTML = data.first_name+' '+data.last_name;
        document.getElementById("v_title").innerHTML = data.title;
        document.getElementById("v_mobile").innerHTML = data.mobile;
        document.getElementById("v_phone").innerHTML = data.phone;
        document.getElementById("v_email").innerHTML = data.email;
        document.getElementById("v_companyname").innerHTML = data.company_name;
        document.getElementById("v_website").innerHTML = data.website;
        document.getElementById("v_city_distt").innerHTML = data.city_distt;
        document.getElementById("v_state_province").innerHTML = data.state_province;
        document.getElementById("v_pincode").innerHTML = data.pincode;
        document.getElementById("v_country").innerHTML = data.country;
        document.getElementById("v_lead_owner").innerHTML = data.lead_owner;
        document.getElementById("v_n_o_employee").innerHTML = data.n_o_employee;
        document.getElementById("v_lead_source").innerHTML = data.lead_source;
        document.getElementById("v_lead_status").innerHTML = data.lead_status;
        document.getElementById("v_annual_revenue").innerHTML = data.annual_revenue;
        document.getElementById("v_rating").innerHTML = data.rating;
        document.getElementById("v_address1").innerHTML = data.address1;
        document.getElementById("v_address2").innerHTML = data.address2;
        document.getElementById("v_created_date").innerHTML = data.created_at;
        if (data.status == 0) { document.getElementById("v_status").innerHTML = 'Disable'; } else { document.getElementById("v_status").innerHTML = 'Enable'; }
        $('.viewRecords').modal('show');
        $("#loader1").css("display","none");
      }
    });
    }
  </script>

  <!-- View Model -->
  <style type="text/css">
    p{
      padding-left: 10;
    }
  </style>
  <div class="modal fade viewRecords" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <p><strong>Leads Info</strong></p>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="widget reviews-section-average table-responsive">
            <table class="table table-bordered" border="0">
              <tbody>
                <tr>
                  <td style="width: 50%;">
                    <p><strong>Title</strong></p>
                  </td>
                  <td>
                    <p id="v_title"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Name</strong></p>
                  </td>
                  <td>
                    <p id="v_name"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Mobile</strong></p>
                  </td>
                  <td>
                    <p id='v_mobile'></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Phonne Number</strong></p>
                  </td>
                  <td>
                    <p id='v_phone'></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Email ID</strong></p>
                  </td>
                  <td>
                    <p id="v_email"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Company Name</strong></p>
                  </td>
                  <td>
                    <p id="v_companyname"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Website</strong></p>
                  </td>
                  <td>
                    <p id="v_website"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>City/District</strong></p>
                  </td>
                  <td>
                    <p id="v_city_distt"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>State/Province</strong></p>
                  </td>
                  <td>
                    <p id="v_state_province"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Pincode</strong></p>
                  </td>
                  <td>
                    <p id="v_pincode"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Country</strong></p>
                  </td>
                  <td>
                    <p id="v_country"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Lead Owner</strong></p>
                  </td>
                  <td>
                    <p id="v_lead_owner"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>No Of Employee</strong></p>
                  </td>
                  <td>
                    <p id="v_n_o_employee"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Lead Source</strong></p>
                  </td>
                  <td>
                    <p id="v_lead_source"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Lead Status</strong></p>
                  </td>
                  <td>
                    <p id="v_lead_status"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Annual_Revenue</strong></p>
                  </td>
                  <td>
                    <p id="v_annual_revenue"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Rating</strong></p>
                  </td>
                  <td>
                    <p id="v_rating"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Address-1</strong></p>
                  </td>
                  <td>
                    <p id="v_address1"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Address-2</strong></p>
                  </td>
                  <td>
                    <p id="v_address2"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Created Date</strong></p>
                  </td>
                  <td>
                    <p id="v_created_date"></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>Status</strong></p>
                  </td>
                  <td>
                    <p id="v_status"></p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
     <button style="float: right;" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
   </div>
 </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
