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
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Customers </h4>
          <ol class="breadcrumb pull-right">
            <!-- <li><a href="#">Home</a></li>
            <li><a href="#">Customers</a></li>
            <li class="active">Customer Listing</li> -->
          </ol>
        </div>
      </div><hr class="new2">

      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-3">
             <div class="alert alert-danger alert-dismissible fade show" id='timesheetinfo' style="display: none;">
              <button type="button" class="close"  aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <b><span id="message"></span></b>
            </div>
          </div>          
        </div>
        <div class="card card-border card-info">
          <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);padding: 0px !important;">
            <div class="card-body">
             <!-- <form method="post" action="{{url('filter-customers')}}" id="FormValidation" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="filterAction" value="listcustomer">
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
                        onclick="window.location.href='{{url('service/customres')}}'">Reset</button>
                      </div>
                    </div>
                  </div>
                </form>-->
                <div class="row"><br><br><br>

                  <div class="col-md-12 col-sm-12 col-12">
                    @if($user_id!=1)
                    @if(@$module_permission['is_add']=='yes')                        
                   <a href="{{url('customer/add')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5"  style="float:right; margin-top: 1%;" ><i class="md md-add-circle-outline"></i> Add</button></a><br>
                   @endif
                   @else
                   <a href="{{url('customer/add')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5"  style="float:right; margin-top: 1%;" ><i class="md md-add-circle-outline"></i> Add</button></a><br>
                   @endif
                   <table id="datatable1" class="table  table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead style="background: #b6e9ff;">
                      <tr>
                       <th> Name</th>
                       <th> Type</th>
                      <th> Address</th>
                      <th style="width: 2%;"> Status</th>
                      <th style="width: 3%;"> Date Created</th>
                       
                       <td  style="width:10% ;background-color: e1f1f9;"></td>
                     </tr>
                   </thead>
                   <tbody>
                    @if($customers_data!='')
                    @foreach($customers_data as $key => $val)
                    <tr>
                      @if($user_id!=1)
                      @if(@$module_permission['is_edit']=='yes')
                     
                      <td><a href="{{url('land/customer/view&edit',$val->id)}}" >@if($val->company!=''){{ $val->company}}  @endif </a></td>
                      @endif
                      @else
                      <td>@if($val->company!=''){{ $val->company }} @endif</td>
                      @endif
                      <td>
                       
                        @if($val->company_type=="llp")
                        LLP
                        @elseif($val->company_type=="ltd")
                        PVT. LTD
                        @elseif($val->company_type=="public")
                        PUBLIC
                        @elseif($val->company_type=="LTD")
                        LTD
                        @elseif($val->company_type=="proprietorship")
                        PROPRIETORSHIP
                        @else
                        
                        @endif
                        
                        </td>
                        
                      <!-- <td>{{ $val->email }}</td>
                      <td>{{ $val->mobile }}</td> -->
                      <td>{{ $val->address ?? '' }}</td>
                      @if($val->status == 1)
                      <td class="text-center">
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
                        <td class="text-right">{{ date('d/m/Y',strtotime($val->created_at)) ?? '' }}</td>
                      <!-- <td>{{ date('M j, Y',strtotime($val->created_at))}}.</td> -->
                      
                      <td class="actions ">
                        <a href="{{url('create/compan_website/'.$val->id)}}" class="on-default view-row" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Create Website"><i class="fa fa-globe"></i></a> 

                        @if($user_id!=1)
                        @if(@$module_permission['is_edit']=='yes')
                        <a href="{{url('land/customer/view&edit',$val->id)}}" class="on-default view-row" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Update"><i class="fas fa-edit"></i></a> 
                        &nbsp;&nbsp;&nbsp;&nbsp; 
                        @endif
                        @else
                        <a href="{{url('land/customer/view&edit',$val->id)}}" class="on-default view-row" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Update"><i class="fas fa-edit"></i></a> 
                        @endif
                        @if($user_id!=1)
                        @if(@$module_permission['is_read']=='yes')                        
                        <a href="{{url('land/customercompany/view/'.$val->id)}}" class="on-default view-row" data-toggle="tooltip"  data-placement="top" title="" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                        &nbsp;&nbsp;&nbsp;&nbsp;    
                        @endif
                        @else
                        <a href="{{url('land/customercompany/view/'.$val->id)}}" class="on-default view-row" data-toggle="tooltip"  data-placement="top" title="" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                        @endif 
                        @if($user_id!=1)
                        @if(@$module_permission['is_delete']=='yes')                        
                        <a href="javascript::void(0);" onclick="delete_customer({{$val->id}})" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" style="color:red;"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        @endif
                        @else
                        <a href="{{url('land/customer/delete/'.$val->id)}}"  class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" style="color:red;"></i></a>
                        @endif
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                  {{ $customers_data->links() }}
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
  try{
    function add_customer() {
     document.getElementById("Form").reset();
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
       $("#loader1").css("display","none");
       $('#edit_customer').modal('show');
     }
   });
  }

  function delete_customer(id) {
    $("#loader1").css("display","block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/customer/delete/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        $('#message').text(data.status); 
        if(data.mark=='1'){
          document.getElementById("message").style.color = "red";
        }else{
          document.getElementById("message").style.color = "#22A308"; 
        }
        $("#loader1").css("display","none");
        $("#timesheetinfo").css("display","block");
        setInterval('location.reload()', 1000);
      }
    });
  }
}catch(err)
{
  var error =  err.message;
  alert(error)
}
</script>

<!--  View/Update Customer -->
<div class="modal fade" id="edit_customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" >
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Edit / View Customer</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ URL::to('land/customer/add')}}" method="POST" id="Form" enctype="multipart/form-data" autocomplete="off" >
        @csrf
        <input type="hidden" name="ids" id="ids"  >
        <div class="modal-body">
         <div class="row">
           <div class="col-md-5">
             <div class="row form-group">
              <label class="col-sm-5 control-label" for="example-input-normal">Plot No.</label>
              <div class="col-sm-7">
                <b style="color: #F01260" id="plot_no"></b>
              </div>
            </div>  
          </div>
          <div class="col-md-5">
           <div class="row form-group">
            <label class="col-sm-5 control-label" for="example-input-normal">Plot Name</label>
            <div class="col-sm-7">
              <b style="color: #F0125B" id="plot_name"></b>
            </div>
          </div>  
        </div>
      </div>
      <div class="row">
       <div class="col-md-5">
         <div class="row form-group">
          <label class="col-sm-5 control-label" for="example-input-normal">Application No.</label>
          <div class="col-sm-7">
            <b style="color: #F0125B" id="appli_no"></b>
          </div>
        </div>  
      </div>
      <div class="col-md-5">
       <div class="row form-group">
        <label class="col-sm-5 control-label" for="example-input-normal">Allotment No.</label>
        <div class="col-sm-7">
          <b style="color: #F0125B" id="allot_no"></b>
        </div>
      </div>  
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
     <div class="row">
      <div class="col-md-3">
       <label class="col-sm-4 control-label" for="example-input-normal">Name</label>
     </div>
     <div class="col-md-9">
      <div class="form-inline">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">First Name</label>
          <input type="text" class="form-control" name="f_name" id="e_f_name" placeholder="First Name" style="width: 147px; margin-right: 5px;" required="" >
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Last Name</label>
          <input type="text" class="form-control" name="l_name" id="e_l_name" placeholder="Last Name" style="width: 147px;" required="" >
        </div>
      </div>
    </div>
    <div class="col-md-3" style="margin-top: 6px;">
      <label class="col-sm-4 control-label" for="example-input-normal">Gender</label>
    </div>
    <div class="col-md-9" style="margin-top: 6px;">
      <select class="form-control" name="gender" id="e_gender" required="" >
        <option value="">-Select Gender-</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="col-md-3" style="margin-top: 6px;">
      <label class="col-sm-4 control-label" for="example-input-normal">Occupation</label>
    </div>
    <div class="col-md-9" style="margin-top: 6px;">
      <input type="text" class="form-control"  name="occupation" id="e_occupation" required="" >
    </div>
    <div class="col-md-3" style="margin-top: 6px;">
      <label class="col-sm-4 control-label" for="example-input-normal">DOB</label>
    </div>
    <div class="col-md-9" style="margin-top: 6px;">
     <div class="input-group">
      <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="dob" id="e_dob" required="" >
      <div class="input-group-append">
        <span class="input-group-text"><i class="md md-event"></i></span>
      </div>
    </div>
  </div>
  <div class="col-md-3" style="margin-top: 6px;">
    <label class="col-sm-4 control-label" for="example-input-normal">Contact</label>
  </div>
  <div class="col-md-9" style="margin-top: 6px;">
    <input type="text" class="form-control" placeholder="+91" name="mobile" id="e_mobile" required="" >
  </div>
  <div class="col-md-3" style="margin-top: 6px;">
    <label class="col-sm-4 control-label" for="example-input-normal">Company</label>
  </div>
  <div class="col-md-9" style="margin-top: 6px;">
    <input type="text" class="form-control" placeholder=""  name="company" id="e_company" required="" >
  </div>
  <div class="col-md-3" style="margin-top: 6px;">
    <label class="col-sm-4 control-label" for="example-input-normal" >Email</label>
  </div>
  <div class="col-md-9" style="margin-top: 6px;">
   <div class="input-group">
    <input type="email" class="form-control" placeholder="" name="email" id="e_email" required="" >
    <div class="input-group-append">
      <span class="input-group-text"><i class="fa fa-envelope"></i></span>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12 text-right">
  <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Update</button>
  <button type="button" class="btn btn-secondary waves-effect m-b-5">Reset</button>
</div>
</form>
</div>
</div>
</div>




<!--  Add Customer -->
<div class="modal fade" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Add Customer</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ URL::to('land/customer/add')}}" method="POST" id="Form" enctype="multipart/form-data" autocomplete="off" >
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
             <div class="row">
              <div class="col-md-3">
               <label class="col-sm-4 control-label" for="example-input-normal">Name</label>
             </div>
             <div class="col-md-9">
              <div class="form-inline">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">First Name</label>
                  <input type="text" class="form-control" name="f_name" id="f_name" placeholder="First Name" style="width: 147px; margin-right: 5px;" required="" >
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Last Name</label>
                  <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Last Name" style="width: 147px;" required="" >
                </div>
              </div>
            </div>
            <div class="col-md-3" style="margin-top: 6px;">
              <label class="col-sm-4 control-label" for="example-input-normal">Gender</label>
            </div>
            <div class="col-md-9" style="margin-top: 6px;">
              <select class="form-control" name="gender" id="genader" required="" >
                <option value="">-Select Gender-</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="col-md-3" style="margin-top: 6px;">
              <label class="col-sm-4 control-label" for="example-input-normal">Occupation</label>
            </div>
            <div class="col-md-9" style="margin-top: 6px;">
              <input type="text" class="form-control"  name="occupation" id="occupation" required="" >
          <!-- <select class="form-control"  name="occupation" id="occupation" required="" >
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
          <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="dob" id="dob" required="" >
          <div class="input-group-append">
            <span class="input-group-text"><i class="md md-event"></i></span>
          </div>
        </div>
      </div>
      <div class="col-md-3" style="margin-top: 6px;">
        <label class="col-sm-4 control-label" for="example-input-normal">Contact</label>
      </div>
      <div class="col-md-9" style="margin-top: 6px;">
        <input type="text" class="form-control" placeholder="+91" name="mobile" id="mobile" required="" >
      </div>
      <div class="col-md-3" style="margin-top: 6px;">
        <label class="col-sm-4 control-label" for="example-input-normal">Company</label>
      </div>
      <div class="col-md-9" style="margin-top: 6px;">
        <input type="text" class="form-control" placeholder=""  name="company" id="company" required="" >
      </div>
      <div class="col-md-3" style="margin-top: 6px;">
        <label class="col-sm-4 control-label" for="example-input-normal" >Email</label>
      </div>
      <div class="col-md-9" style="margin-top: 6px;">
       <div class="input-group">
        <input type="email" class="form-control" placeholder="" name="email" id="email" required="" >
        <div class="input-group-append">
          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-12 text-right">
  <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Save</button>
  <button type="button" class="btn btn-secondary waves-effect m-b-5">Reset</button>
</div>
</form>
</div>
</div>
</div>