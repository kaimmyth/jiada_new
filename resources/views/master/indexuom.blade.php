<div class="content-page">
   <div class="content">
      <div class="container-fluid">
         <!-- Page-Title -->
         <div class="row" id="dashboard-row">
            <div class="col-sm-12">
               <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Manage UoM</h4>
               <ol class="breadcrumb pull-right">
                  <!-- <li><a href="{{ URL::to('home') }}">Home</a></li>
                  <li><a href="{{URL::to('home')}}">Master</a></li>
                  <li class="active">UoM MASTER</li> -->
               </ol>
            </div>
         </div>
         <hr class="new2">
         <div class="row">
            <div class="col-md-12">
               <div class="card card-border card-info">
                  <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                     
                     <button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float: right;margin-top: 1px !important" onclick="addRecords()">Add <i class="md md-add-circle-outline"></i></button>
                     <table id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead style="background: #b6e9ff;">
                           <tr>
                              <th style="width: 2%;">Sl.</th>
                              <th>UoM Name</th>
                              <th>UoM Description</th>
                              <th>UoM Type</th>
                              <th style="width: 2%;">Status</th>
                              <th style="width: 2%;">Date Created</th>
                              <td  style="background-color: e1f1f9;width: 5%;"></td>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($uomData as $key => $data)
                           <tr>
                              <td class="text-right">{{ $key+1 }}.&nbsp;</td>
                              <td>{{$data->uom_name}}</td>
                              <td>{{$data->uom_description}}</td>
                              <td>{{$data->uom_type}}</td>
                              @if($data->status == 1)
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
                              <td class="text-right">{{ date('d/m/Y',strtotime($data->created_at)) }}</td>
                              <td class="actions">
                                 <a href="javascript::void(0)" class="on-default edit-row" onclick="editRecords({{$data->id}})" data-toggle="tooltip" data-modal="modal-12" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                 &nbsp;&nbsp;&nbsp;
                                 <a href="{{ URL::to('uom_master/destroy',$data->id)}}" class="on-default remove-row" onclick="return confirm('Are you sure you want to delete this item?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fas fa-trash" style="color:red;"></i></a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  <!-- end card-body -->
               </div>
            </div>
            <!-- container -->
         </div>
      </div>
   </div>
</div>
<!-- content -->

<!--- MODEL CALL--->
<div id="material-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title mt-0">UoM info</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{ url('add/uom_master') }}" method="POST" id="FormValidation" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="ids" id="ids">
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="field-1" class="control-label"> Name </label>
                        <input type="text" id="uom_name" name="uom_name" class="form-control" required="" aria-required="true" placeholder=" Name">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="field-2" class="control-label"> Description</label>
                        <input id="uom_description" type="text" name="uom_description" class="form-control" required="" aria-required="true" placeholder=" Description">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="sel1"> Type</label>
                        <select class="select2 form-control" name="uom_type" id="uom_type" required="">
                           <option value="">--- Select Type ---</option>                  
                           <option value="Land">Land</option>                 
                           <option value="Material">Material</option>                              
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <p class="control-label"><b>Is Active</b>
                           <font color="red">*</font>
                        </p>
                        <div class="radio radio-info form-check-inline">
                           <input type="radio" value="1" name="is_active" checked="">
                           <label for="inlineRadio1"> Active </label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                           <input type="radio" value="0" name="is_active">
                           <label for="inlineRadio1"> Inactive </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr class="new2">
            <div class="modal-footer">
               <button type="submit" id="submitbtn" class="btn btn-outline-primary">Submit</button>
               <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
         </form>
      </div>
   </div>
</div>

<!-- /.modal eND -->
<script type="text/javascript">
   function editRecords(id) {
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });


      $.ajax({
         url: "{{url('uom_master/edit/')}}" + '/' + id,
         method: "POST",
         contentType: 'application/json',
         success: function (data) {
            // console.log(data);
            document.getElementById("ids").value = data.id;
            document.getElementById("uom_name").value = data.uom_name;
            document.getElementById("uom_description").value = data.uom_description;
            document.getElementById("uom_type").value = data.uom_type;
            var val = data.status;
            if (val == 1) {
               $('input[name=is_active][value=' + val + ']').prop('checked', true);
            } else {
               $('input[name=is_active][value=' + val + ']').prop('checked', true);
            }
            document.getElementById("submitbtn").innerText = 'UPDATE';
            $('#material-model').modal('show');
         }
      });
   }

   function addRecords() {
      document.getElementById("ids").value = '';
      document.getElementById("uom_name").value = '';
      document.getElementById("uom_description").value = '';
      document.getElementById("uom_type").value = '';
      document.getElementById("submitbtn").innerText = 'Save';
      $('#material-model').modal('show');
   }



</script>