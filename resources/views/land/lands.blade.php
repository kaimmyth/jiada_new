<style>
  hr.new2 {
  border-top: 1px dashed #000;
}

</style>
<div class="content-page">
 <!-- Start content -->
 <div class="content">
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row" id="dashboard-row">
      <div class="col-sm-12">
        <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Land Inventory</h4>
        <ol class="breadcrumb pull-right">
          <!-- <li><a href="{{ URL::to('home') }}">Home</a></li>
          <li><a href="{{URL::to('#')}}">land</a></li>
          <li class="active">Land Inventory</li> -->
        </ol>
      </div>
    </div><hr class="new2">

    <div class="row">
      <div class="col-md-12">
        <div class="card card-border card-info">
        <div class="card-header" style="background-image: linear-gradient(#e1f1f9, white);">
          <div class="card-body" style="    margin-top: -16px;">
           @if($user_id!=1)
            @if(@$module_permission['is_add']=='yes')
            <a href="{{url('land/add')}}" ><button  id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5"  data-toggle="modal" style="float:right; margin-top: 19px;"><i class="md md-add-circle-outline"></i> Add</button></a>
           @endif
           @else
           <a href="{{url('land/add')}}" ><button  id="addToTable" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5 "  data-toggle="modal" style="float:right; margin-top: 10px !important;"><i class="md md-add-circle-outline"></i> Add</button></a>
           @endif
          </div>
     
           <table  id="datatable1" class="table  table-bordered dt-responsive"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
           <thead style="background: #b6e9ff;">
            <tr>
              <th>Name</th>
              <th>Plot No</th>
              <th> Size</th>
             
              <th>Address</th>
              <th style="width: 5px;">Status</th>
              <th style="width: 2%;"> Date Created</th>
              <td  style="background-color: e1f1f9;width: 10px;"></td>
            </tr>
          </thead>
          <tbody>
            @foreach($landdata as $key=>$val)
            <tr>
              <td>{{$val->land_name}}</td>
              @if($user_id!=1)
                @if(@$module_permission['is_edit']=='yes')
                <td class="text-right"><a href="{{url('land/edit',$val->id)}}">{{$val->plot_no}}</a></td>
                @else
                <td class="text-right">{{$val->plot_no}}</td>
                @endif
              @else
              <td class="text-right"><a href="{{url('land/edit',$val->id)}}">{{$val->plot_no}}</a></td>
              @endif
              <td class="text-right">{{$val->plot_size}} {{$val->uom}}</td>
              
              <td>  <span title="{{$val->address1}} &nbsp; {{$val->address2}} &nbsp;{{$val->area}},{{$val->sector}},{{$val->block}}">{{$val->address1}}</span></td>
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
              <td class="text-right"> {{ date('d/m/Y',strtotime($val->created_at))}}</td>
              <td class="actions">
                @if($user_id!=1)
                @if(@$module_permission['is_edit']=='yes')
                <a href="{{url('land/edit',$val->id)}}"  data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                &nbsp;
                @endif
                @else
                <a href="{{url('land/edit',$val->id)}}"  data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                &nbsp;
                @endif
                @if($user_id!=1)
                @if(@$module_permission['is_view']=='yes')
                <a href="javascript::void(0);"  data-toggle="tooltip" data-placement="top" title="View" data-original-title="View" onclick="viweland({{$val->id}})"><i class="fa fa-eye"></i></a>
                &nbsp;
                @endif
                @else
                <a href="javascript::void(0);"  data-toggle="tooltip" data-placement="top" title="View" data-original-title="View" onclick="viweland({{$val->id}})"><i class="fa fa-eye"></i></a>
                @endif
                @if($user_id!=1)
                @if(@$module_permission['is_delete']=='yes')
                <!-- <a href="javascript::void(0)" onclick="viewRecords({{$val->id}})" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a> -->
                 &nbsp;
               <a href="{{url('land/delete/'.$val->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><i class="fas fa-trash"></i></a> 
                @endif
                @else
                &nbsp;

                <a href="{{url('land/delete/'.$val->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><i class="fas fa-trash"></i></a> 
                @endif
              </td>            
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $landdata->links() !!}

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<div class="modal fade bd-example-modal-lg" id="view_land_details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Land Info</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-xl-12">
              <div class="row">
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Plot No :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="plot_no"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Plot Name :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="plot_name"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Plot Size :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="plot_size"></b>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Area :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="area"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="row form-group">
                          <label class="col-sm-5 control-label" for="example-input-normal">Sector :- </label>
                          <div class="col-sm-7">
                              <b style="color: #F47C11;" id="sector"></b>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Block :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="block"></b>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Address :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="address"></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row form-group">
                        <label class="col-sm-5 control-label" for="example-input-normal">Is  land  Register  :- </label>
                        <div class="col-sm-7">
                            <b style="color: #F47C11;" id="is_land_register"></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="row form-group">
                      <label class="col-sm-5 control-label" for="example-input-normal">Is land Transfer  :- </label>
                      <div class="col-sm-7">
                          <b style="color: #F47C11;" id="is_land_transfer"></b>
                      </div>
                  </div>
              </div>
              <!-- <div>
                <h2>Land Tranfer History</h2>
                <table>
                  <thead>
                    <tr>
                      <th>
                        
                      </th>
                    </tr>
                  </thead>
                </table>

              </div> -->
            </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function viweland(id) {
    $.ajax({
          url: "{{url('land/viewland/')}}" + '/' + id,
          method: "get",
          contentType: 'application/json',
          success: function (data) {
            console.log(data);
            if(data.Land_details.is_register==1)
            {
              var Register="Yes";
            }
            else
            {
              var Register="No";
            }
            $("#plot_no").text(data.Land_details.plot_no);
            $("#plot_name").text( data.Land_details.land_name);
            $("#plot_size").text( data.Land_details.plot_size);
            $("#area").text( data.Land_details.area);
            $("#sector").text( data.Land_details.sector);
            $("#block").text( data.Land_details.block);
            $("#address").text( data.Land_details.address1);
            $("#is_land_register").text(Register);
            $("#is_land_transfer").text( data.Land_details.is_transfer);
            // for(i=0;data.land_lease_details.length;i++)
            // {
            //   $("#land_transfer_history").append("<tr><td>"++)
            // }
            $('#view_land_details').modal('show');
          }
    });
  }
</script>