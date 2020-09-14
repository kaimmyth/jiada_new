<style>
   hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
      border: 1px solid gainsboro;
      border-radius: 5px;
      width: 100%;
   }

   hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
      border: 1px solid gainsboro;
      border-radius: 5px;
      width: 100%;
   }

   .table td {
    text-align: left;
   },
   .table th {
      padding: 0rem !important;
      vertical-align: inherit !important;
      border-top: 1px solid #dee2e6;
      font-size: 13px;
      color: black;
      text-align: center;
   }
   
   .modal .modal-dialog .modal-content {
      -moz-box-shadow: none;
      -webkit-box-shadow: none;
      border-color: #DDDDDD;
      border-radius: 2px;
      box-shadow: none;
      padding: 15px !important;
   }

   .upl img {
      width: 50px;
      margin-left: 22px;
      height: 50px;
   }

   .inp input {
      border: 1px solid #6d6d6d;
      border-radius: 3px;
      height: 23px;
      margin-left: 22px;
      margin-top: 7px;
      width: 60px;
   }
    
    .modal-lg, .modal-xl {max-width: 1000px !important;}
    
    
</style>
<!-- Start content -->
<div class="content-page">
   <div class="content">
      <div class="container-fluid">
         <div class="row" id="dashboard-row">
            <div class="col-sm-12">
               <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i>
                  &nbsp;&nbsp;Tickets</h4>
               <ol class="breadcrumb pull-right">
                  <li><a href="{{ URL::to('home') }}">Home</a></li>
                  <li><a href="{{URL::to('ticket')}}">Tickets</a></li>
                  <li class="active">Online Support: Tickets</li>
               </ol>
            </div>
         </div>
        
         <div class="row">
            <div class="col-md-12">

               <div class="card" style="background:#0333f445;height: 60px;">
                  <div class="card-body">
                     <form action="{{ url('ticket') }}" method="POST" id="FormValidation" enctype="multipart/form-data" style="margin-top: 4px;">
                        @csrf
                        <input type="hidden" name="search_id" id="search_id" value="1">
                        <div class="btn-group">
                           <div class="btn-group">
                              <input class="form-control" id="myInput" type="text" placeholder="Tickets, ID, Subject, POC....">
                           </div>
                        </div>
                        <div class="btn-group">
                           <div class="btn-group">
                              <select class="form-control" id="status_id" name="status_id">
                                 <option value=""> Select Status</option>
                                 <option value="1">Open</option>
                                 <option value="2">Assigned</option>
                                 <option value="3">Closed</option>
                                 <option value="4">On Hold</option>
                                 <option value="5">Reopen</option>
                              </select>
                           </div>
                        </div>
                        <div class="btn-group">
                           <div class="btn-group">
                              <select class="form-control" id="priority_id" name="priority_id">
                                 <option value=""> Select Priority </option>
                                 @foreach($priorityData as $data)
                                 <option value="{{ $data->id }}">{{ $data->priority_name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="btn-group">
                           <select class="form-control" id="category_id" name="category_id">
                              <option value="">Select Category</option>
                              @foreach($categoryData as $data)
                              <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="btn-group">
                           <button type="submit" class="btn waves-effect waves-light btn-info" style="height: 36px;">Search</button>
                           <input type="button" value="Refresh" onClick="location.href=location.href">
                        </div>
                        <div class="btn-group" style="float: right;">
                           @if(Auth::user()->users_role == 3)
                               <a href="{{url('company-ticket-form')}}" class="btn  btn-outline-primary btn-rounded waves-effect waves-light m-b-5" style="margin-top: 4px;">Add &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                           @elseif($user_id==1)
                               <button type="button" class="btn  btn-outline-primary btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-top: 4px;"> Add &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                           @else
                                @if(@$module_permission['is_add']=='yes')
                               <button type="button" class="btn btn-outline-primary  btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-top: 4px;"> Add &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                @endif
                                
                           @endif
                        </div>
                     </form>
                  </div>
               </div>

               

               <div class="row">
                  <div class="col-lg-12">
                     <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                           <table id="datatable1" class="table  table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead style="background: #b6e9ff;">
                                 <tr style="height: 28px;">
                                    <th>Ticket No.</th>
                                    <th data-priority="1">Requester's Information</th>
                                    <th data-priority="1">Subject</th>
                                    <th data-priority="6">Status</th>
                                    <th data-priority="6">Priority</th>
                                    <th data-priority="6">Dept.</th>
                                    <th data-priority="1">POC</th>
                                    <th data-priority="1">Assigned By</th>
                                    <th data-priority="6">Created Date</th>
                                    <td style="width:90px;" data-priority="6" style="background-color: e9f8ff;"></td>
                                 </tr>
                              </thead>
                              <tbody id="myTable">
                                 @foreach($ticketData as $key => $data)
                                 <tr style="height: 28px;">
                                    <td class="text-right">{{$data->ticket_id}}</td>
                                    <td><?php if($data->created_name)
                                            {echo $data->created_name;}
                                            else{echo $data->requester_name.'/';            echo $data->email.'/';
                                                echo $data->phone;}?></td>
                                    <td>{{$data->subject}}</td>
                                    <td>{{$data->status_name}}</td>
                                    <td>{{$data->priority_name}} </td>
                                    <td>{{$data->department_name}}</td>
                                    <td>{{$data->name }} </td>
                                    <td>{{$data->assigned_name}}</td>
                                    <td class="text-right">{{ date('d/m/Y',strtotime($data->created_at))}} &nbsp;</td>
                                    <td>
                                       @if(Auth::user()->users_role == 1)
                                       <a onclick="viewTickethistory({{ @$data->id }},'history')"  data-toggle="tooltip"  data-placement="top" title="" data-original-title="Ticket History" href="javascript::void(0)"><i class="fa fa-history" ></i></a>&nbsp;
                                       @if($user_id!=1)
                                       @if(@$module_permission['is_read']=='yes')  
                                       <a onclick="viewRecords({{ @$data->id }})" href="javascript::void(0)" data-toggle="tooltip"  data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>&nbsp;   
                                       @endif
                                       @else
                                       <a onclick="viewRecords({{ @$data->id }})" href="javascript::void(0)" data-toggle="tooltip"  data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>&nbsp;
                                       @endif
                                       @if($user_id!=1)
                                       @if(@$module_permission['is_edit']=='yes')     
                                       <a onclick="editRecords({{@$data->id}})" href="javascript::void(0)" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                       @endif
                                       @else
                                       <a onclick="editRecords({{@$data->id}})" href="javascript::void(0)" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                       @endif
                                       @if($user_id!=1)
                                       @if(@$module_permission['is_delete']=='yes')     
                                       <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ URL::to('delete/ticket',@$data->id)}}" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                       @endif
                                       @else
                                       <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ URL::to('delete/ticket',@$data->id)}}" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                       @endif
                                       @else
                                       <a onclick="viewTickethistory({{ @$data->id }},'history')" href="javascript::void(0)" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Ticket History"><i class="fa fa-history"></i></a>&nbsp;
                                       @if($user_id!=1)
                                       @if(@$module_permission['is_read']=='yes')  
                                       <a onclick="viewRecords({{ @$data->id }})" href="javascript::void(0)" data-toggle="tooltip"  data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>&nbsp;   
                                       @endif
                                       @else
                                       <a onclick="viewRecords({{ @$data->id }})" data-toggle="tooltip"  data-placement="top" title="" data-original-title="View" href="javascript::void(0)"><i class="fa fa-eye"></i></a>&nbsp;
                                       @endif
                                       @if(Session::get('gorgID') != $data->created_by)
                                       <a onclick="editRecords({{@$data->id}})" href="javascript::void(0)" data-toggle="tooltip"  data-placement="top" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                       @endif
                                       @endif
                                    </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                           {!! $ticketData->links() !!}

                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row -->

               <!--  Modal content for the above example -->
               <div id="ticket-model" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title mt-0" id="myLargeModalLabel">New Customer Ticket</h4>
                           <button type="button" id="buttonhist" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form action="{{ url('add/ticket') }}" method="POST" id="FormValidation" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="ids" id="ids">
                              <input type="hidden" name="created_by" id="created_by">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Name<font style="color:red">*</font></label>
                                             <input type="text" class="form-control" id="requester_name" name="requester_name" value="" placeholder=" Name" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Email<font style="color:red">*</font></label>
                                             <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Phone<font style="color:red">*</font></label>
                                             <input type="text" class="form-control" id="phone" name="phone" value="" placeholder="Phone" maxlength="10" required="">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Department/Category</label>
                                             <select class="form-control" id="department_id" name="department_id">
                                                <option value=""> Select Department </option>
                                                @if($departmentData !='')
                                                @foreach($departmentData as $data)
                                                <option value="{{$data->id}}">{{ $data->department_name}}</option>
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">SubDepartment/SubCategory</label>
                                             <select class="form-control" id="subDept" name="subDept">
                                                <option value=""> Select SubDepartment </option>
                                                @if($subDeptData !='')
                                                @foreach($subDeptData as $data)
                                                <option value="{{$data->id}}">{{ $data->subdepartment_name}}</option>
                                                @endforeach
                                                @endif

                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">POC</label>
                                             <select class="form-control" id="poc_id" name="poc_id" required>
                                                <option value=""> Select POC </option>
                                                @if($userData !='')
                                                @foreach($userData as $data)
                                                @if($data->id > 1)
                                                <option value="{{ $data->id }}" <?php if($data->generic_id==1){echo "selected";} ?>> {{ $data->name}}
                                                </option>
                                                @endif
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Priority</label>
                                             <select class="form-control" id="priority" name="priority">
                                                <option value=""> Select Priority </option>
                                                @if($priorityData !='')
                                                @foreach($priorityData as $data)
                                                <option value="{{ $data->id }}">{{ $data->priority_name}}</option>
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Status</label>
                                             <select class="form-control" id="status_id_chek" name="status_id_chek">
                                                <option value=""> Select Status </option>
                                                @if($statusCheckDATA !='')
                                                @foreach($statusCheckDATA as $data)
                                                @if($data->status_name !='Reopen')
                                                <option value="{{ $data->id }}">{{ $data->status_name}}</option>
                                                @endif
                                                @endforeach
                                                @endif
                                             </select>
                                             <select class="form-control" id="status_id_chek_edit" name="status_id_chek_edit" style="display: none;">
                                                <option value=""> Select Status </option>
                                             </select>

                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">RequestType</label>
                                             <select class="form-control" id="request_type" name="request_type">
                                                <!-- <option value=""> Select RequestType </option> -->
                                                <option value="incident" selected>Incident </option>
                                                <option value="request_for_information">Request For Information</option>
                                                <option value="service_request">Service Request</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Subject</label>
                                             <input type="text" class="form-control" id="subject" name="subject" value="" placeholder="Subject">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Due date</label>
                                             <input type="text" class="form-control dateFilter" id="due_date" name="due_date" value="" placeholder="Select Date" autocomplete="off">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">File No.</label>
                                             <input type="text" class="form-control" id="file_no" name="file_no" value="" placeholder="File No.">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Resolved Date</label>
                                             <input type="text" class="form-control dateFilter" id="resolved_date" name="resolved_date" value="" placeholder="Select Resolved Date">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="sel1">Assigne To</label>
                                             <select class="form-control" id="assigne_to" name="assigne_to">
                                                <option value=""> Select User </option>
                                                @if($userData !='')
                                                @foreach($userData as $data)
                                                @if($data->id > 1)
                                                <option value="{{ $data->id }}" <?php if($data->generic_id==1){echo "selected";} ?>>{{ $data->name}}
                                                </option>
                                                @endif
                                                @endforeach
                                                @endif
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="comment">Description Activity List</label>
                                             <textarea class="form-control" id="descriptionhidden" disabled rows="3" placeholder="Description" id="comment"></textarea>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="comment">Description<font style="color:red">*</font></label>
                                                <textarea class="form-control" id="description" name="description" required="" rows="3" placeholder="Description" id="comment"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="comment">Resolution</label>
                                                <textarea class="form-control" id="resolution" name="resolution" rows="3" placeholder="Resolution" id="comment"></textarea>
                                             </div>
                                          </div>
                                          <!-- <div class="upl row" id="image_preview"></div> -->
                                          <div class="inp row" id="image_name"></div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="sel1">Choose Multiple Files </label>
                                                <input type="file" class="form-control" id="upload_file" name="attachment" onchange="preview_image();" multiple style="width: 42%;" />
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="sel1">Ticket No.<font style="color:red">*</font></label>
                                                <input type="text" class="form-control" id="ticket_id" required="" name="ticket_id" value="" placeholder="Ticket No.">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="submit" id="submitbtn" class="btn btn-primary">Create Ticket</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->

               <!--  View Ticket Model -->
               <!--  View/Update Customer -->
               <div class="modal fade" id="view_ticket" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title mt-0" id="myLargeModalLabel">Tickets Details</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        
                           <input type="hidden" name="ids" id="ids">
                           <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-12">
                                  <ul class="nav nav-tabs" role="tablist">
                                	<li class="nav-item">
                                		<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Details</a>
                                	</li>
                                	<li class="nav-item">
                                		<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">History</a>
                                	</li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                	<div class="tab-pane active" id="tabs-1" role="tabpanel">
                                		<div class="row">
                                		 <div class="col-md-4">
                                    <div class="row form-group">
                                       <label class="col-sm-5 control-label" for="example-input-normal">Ticket Number
                                          :</label>
                                       <div class="col-sm-7">
                                          <b style="color: #F47C11" id="requester_name1"></b>
                                       </div>
                                    </div>
                                 </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">File Number
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="file_no1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Phone :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="phone1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">POC Name
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="poc1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Assigned To
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="assigne_to1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Due date
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="due_date1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Subject
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="subject1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Resolved Date
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="resolved_date1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Email :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="email1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Description
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="description1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Resulation
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="resulation1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Priority
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="priority1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Status :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="status_id_chek1"></b>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="row form-group">
                                               <label class="col-sm-5 control-label" for="example-input-normal">Department
                                                  :</label>
                                               <div class="col-sm-7">
                                                  <b style="color: #F47C11" id="department1"></b>
                                               </div>
                                            </div>
                                         </div>
                                	    </div>
                                	</div>
                                	<div class="tab-pane" id="tabs-2" role="tabpanel">
                                		<div class="row">
                                		    <div class="col-md-12">
                                		        <div class="row">
                            <div class="col-md-4">
                                <p>Ticket No.: <span class="id"></span></p>
                            </div>
                            <div class="col-md-4">
                                <p>Subject:<span class="ticket_sub"></span></p>
                            </div>
                            <div class="col-md-4">
                                <p>Creation Date:<span class="created_date"></span></p>
                            </div>
                        </div>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                           <thead style="background: #b6e9ff;">
                              <tr style="height: 28px;">
                                 <th>Date</th>
                                 <th>Status</th>
                                 <th>Action</th>
                                 <th>Action By</th>
                                 <th>Action Note</th>
                              </tr>
                           </thead>
                           <tbody id="myhistoryTable">
                                <tr style="height: 28px;">
                                 <td class="history_date"> </td>
                                 <td class="ticket_status"> </td>
                                 <td class="assigned_to"> </td>
                                 <td class="assigned_by"> </td>
                                 <td class="description_ticket"> </td>
                              </tr>
                           </tbody>
                        </table>

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

               <div class="modal fade" id="view_ticket_history" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title mt-0" id="myLargeModalLabel">Tickets History Details</h4>
                           <button type="button" id="buttonhist" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Ticket No.: <span class="id"></span></p>
                            </div>
                            <div class="col-md-4">
                                <p>Subject:<span class="ticket_sub"></span></p>
                            </div>
                            <div class="col-md-4">
                                <p>Creation Date:<span class="created_date"></span></p>
                            </div>
                        </div>
                        <table id="datatable-responsive" class="table  table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                           <thead style="background: #b6e9ff;">
                              <tr style="height: 28px;">
                                 <th>Date</th>
                                 <th>Status</th>
                                 <th>Action</th>
                                 <th>Action By</th>
                                 <th>Action Note</th>
                              </tr>
                           </thead>
                           <tbody id="myhistoryTable">
                                <tr style="height: 28px;">
                                 <td class=" text-right history_date"> </td>
                                 <td class="ticket_status"> </td>
                                 <td class="assigned_to"> </td>
                                 <td class="assigned_by"> </td>
                                 <td class="description_ticket"> </td>
                              </tr>
                           </tbody>
                        </table>


                     </div>
                  </div>
               </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!--</div>-->
<!--</div>-->
<!--</div>-->




<script type="text/javascript">
   function editRecords(id) {
    //   alert(id);
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "{{ url('edit/ticket/') }}" + '/' + id,
         method: "POST",
         contentType: 'application/json',
         success: function (data) {
            //  console.log(data);
            document.getElementById("ids").value = data.ticket.id;
            document.getElementById("request_type").value = data.ticket.request_type;
            document.getElementById("requester_name").value = data.ticket.requester_name;
            document.getElementById("email").value = data.ticket.email;
            document.getElementById("phone").value = data.ticket.phone;
            document.getElementById("status_id_chek").value = data.ticket.status_id;
            document.getElementById("poc_id").value = data.ticket.poc_id;
            
            //  document.getElementById("ticket_mode").value = data.ticket.ticket_mode;
            //  document.getElementById("level").value = data.ticket.level;
            //  document.getElementById("category").value = data.ticket.category;
            //  document.getElementById("subcategory").value = data.ticket.subcategory_id;
            //  document.getElementById("impact").value = data.ticket.impact;
            document.getElementById("priority").value = data.ticket.priority;
            document.getElementById("department_id").value = data.ticket.department_id;
            document.getElementById("subDept").value = data.ticket.subdepartment_id;
            document.getElementById("due_date").value = data.ticket.due_date;
            document.getElementById("resolved_date").value = data.ticket.resolved_date;
            document.getElementById("subject").value = data.ticket.subject;
            // document.getElementById("description").value = data.ticket.description;
            //  document.getElementById("descriptionhidden").value = data.ticket.description;
            document.getElementById("resolution").value = data.ticket.resolution;
            document.getElementById("file_no").value = data.ticket.file_no;
            document.getElementById("assigne_to").value = data.ticket.assigne_to;
            
            // document.getElementById("assigned_by").value = data.ticket.assigned_by;
            // alert(data);
            document.getElementById("created_by").value = data.ticket.created_by;
            document.getElementById("ticket_id").value = data.ticket.ticket_id;
           
            if(data.ticket.ticket_id){
                $("#ticket_id").prop("readonly", true);    
            }
            document.getElementById("submitbtn").innerText = 'UPDATE';
            document.getElementById("myLargeModalLabel").innerText = 'Update Customer Ticket';
            
            var status_val = data.ticket.status_id;
            if (status_val == 3) {
               $("#requester_name").prop("readonly", true);
               $("#email").prop("readonly", true);
               $("#phone").prop("readonly", true);
               $("#department_id").prop("readonly", true);
               $("#subDept").prop("readonly", true);
               $("#poc_id").prop("readonly", true);
               $("#priority").prop("readonly", true);
               $("#request_type").prop("readonly", true);
               $("#subject").prop("readonly", true);
               $("#due_date").prop("readonly", true);
               $("#file_no").prop("readonly", true);
               $("#resolved_date").prop("readonly", true);
               $("#resolution").prop("readonly", true);
               $("#ticket_id").prop("readonly", true);

            }
            if (status_val != "") {
               $("#status_id_chek").hide();
               $('#status_id_chek_edit').show();
            }
            if (status_val == 1) {
               $('#status_id_chek_edit').html('<option value="1">Open</option><option value="2">Assigned</option><option value="4">On Hold</option><option value="3">Closed</option>');
            }
            else if (status_val == 2) {
               $('#status_id_chek_edit').html('<option value="2">Assigned</option><option value="4">On Hold</option><option value="3">Closed</option>');
            }
            else if (status_val == 4) {
               $('#status_id_chek_edit').html('<option value="4">On Hold</option><option value="2">Assigned</option><option value="3">Closed</option>');
            }
            else if (status_val == 3) {
               $('#status_id_chek_edit').html('<option value="3">Closed</option><option value="5">Reopen</option>');
            }
            else if (status_val == 5) {
               $('#status_id_chek_edit').html('<option value="5">Reopen</option><option value="2">Assigned</option><option value="4">On Hold</option><option value="3">Closed</option>');
            }

            $('#descriptionhidden').val("");
            for (i = 0; i < data.ticket_history.length; i++) {
               var index_key = i + 1;
               $('#descriptionhidden').val($('#descriptionhidden').val() + index_key + " " + data.ticket_history[i].ticket_description + '(' + data.ticket_history[i].name + ')\n');

            }
            $('#ticket-model').modal('show');
         }
      });
   }
</script>



<script type="text/javascript">
   function viewRecords(id) {
      // alert(id);
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "{{ url('view/ticket/') }}" + '/' + id,
         method: "POST",
         contentType: 'application/json',
         success: function (data) {
            document.getElementById("requester_name1").innerHTML = data.ticket.requester_name;
            document.getElementById("file_no1").innerHTML = data.ticket.file_no;
            document.getElementById("email1").innerHTML = data.ticket.email;
            document.getElementById("phone1").innerHTML = data.ticket.phone;
            document.getElementById("poc1").innerHTML = data.ticket.name;
            document.getElementById("assigne_to1").innerHTML = data.ticket.name;
            document.getElementById("due_date1").innerHTML = data.ticket.due_date;
            document.getElementById("resolved_date1").innerHTML = data.ticket.resolved_date;
            document.getElementById("subject1").innerHTML = data.ticket.subject;
            document.getElementById("description1").innerHTML = data.ticket.description;
            document.getElementById("priority1").innerHTML = data.ticket.priority_name;
            document.getElementById("status_id_chek1").innerHTML = data.ticket.status_name;
            document.getElementById("department1").innerHTML = data.ticket.department_name;
            document.getElementById("resulation1").innerHTML = data.ticket.resolution;
            //document.getElementById("category1").innerHTML = data.ticket.category_name;
            //.getElementById("subcategory1").innerHTML = data.ticket.subcategory_name;
            viewTickethistory(id,"view");
            $('#view_ticket').modal('show');
         }
      });
   }
</script>

<script type="text/javascript">
   function viewTickethistory(id,type) {
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "{{ url('ticket/history') }}" + '/' + id,
         method: "POST",
         contentType: 'application/json',
         success: function (data) {
            $('.id').attr('colspan',1);
            $(".id").html('');
            $(".assigned_by").html('');
            $(".assigned_to").html('');
            $(".ticket_status").html('');
            $(".description_ticket").html('');
            $(".created_date").html('');
            $(".ticket_sub").html('');
            $(".history_date").html('');
            if(data.length){
                  $.each(data, function (index, value) {
                      if(index==0){
                        //   display only one time
                        // alert(index);
                        $(".id").append(this.ticket_no ? this.ticket_no : '');        
                        $(".created_date").append(this.created_date + '<br>');
                        $(".ticket_sub").append(this.subject + '<br>');
                      }
                  $(".history_date").append(this.assigned_date + '<br>');
                  $(".assigned_by").append(this.assign_by + '<br>');
                  $(".assigned_to").append(this.assign_to + '<br>');
                  $(".ticket_status").append(this.status_id + '<br>');
                  $(".description_ticket").append(this.ticket_description + '<br>');
                  if(type=='history'){
                      $('#view_ticket_history').modal('show');
                  }
                }); 
            }else{
                // alert("else"+data.length);
                $('.id').attr('colspan',6);
                $(".id").append('Do not have Ticket History' + '<br>');
                if(type=='history'){
                      $('#view_ticket_history').modal('show');
                  } 
            }
         }
      });
   }
</script>

<script type='text/javascript'>
   $(document).ready(function () {
      var currentdate = moment().format('DD-MM-YYYY');
      document.getElementsByClassName('dateFilter').value = currentdate;

      var today1 = new Date();
      $('.dateFilter').datepicker({
         format: 'dd-mm-yyyy',
         autoclose: true,
         maxDate: today1
      }).on('changeDate', function (ev) {
         $(this).datepicker('hide');
      });
      $('.dateFilter').keyup(function () {
         if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9^-]/g, '');
         }
      });
   });
</script>
<script>
   $(document).ready(function () {
      $("#myInput").on("keyup", function () {
         var value = $(this).val().toLowerCase();
         $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
      });
   });
</script>

<!-- <script type="text/javascript">
   $('#category').change(function(){
      var categoryID = $(this).val(); 
      // alert('category');   
      if(categoryID){
       $.ajax({
          type:"GET",
          url:"{{url('get_subid')}}?category="+categoryID,
          success:function(data){               
           if(data)
           {
              $("#subcategory").empty();
              $("#subcategory").append('<option>Select</option>');
              $.each(data,function(key,value){
               $("#subcategory").append('<option value="'+value['id']+'">'+value['subcategory_name']+'</option>');
            });
           }
           else
           {
              $("#subcategory").empty();
           }
        }
     });
    }    
 });
</script> -->

<!-- here department accc to poc list  and assign to change rohit yestyerday -->
<script type="text/javascript">
   $('#department_id').change(function () {
      var departmentID = $(this).val();
      // alert(id);
      if (departmentID) {
         $.ajax({
            type: "GET",
            url: "{{url('get_pocid/')}}" + '/' + departmentID,
            success: function (data) {
               if (data) {
                  $("#poc_id").empty();
                  //   $("#poc_id").append('<option>Select POC</option>');
                  $("#assigne_to").empty();
                  //   $("#assigne_to").append('<option>Select User</option>');
                  $("#subDept").empty();
                  //   $("#subDept").append('<option value="">Select Sub Department</option>');
                  $.each(data.pocList, function (key, value) {
                     $("#poc_id").append('<option value="' + value['userId'] + '">' + value['userName'] + '</option>');
                     $("#assigne_to").append('<option value="' + value['userId'] + '">' + value['userName'] + '</option>');
                  });

                  $.each(data.subdepartment, function (key, value) {
                     $("#subDept").append('<option value="' + value['subDeptId'] + '">' + value['subDeptName'] + '</option>');
                  });
               }
               else {
                  $("#name").empty();
               }
            }
         });
      }
   });
</script>

<!-- here department accc to poc list  and assign to change rohit yestyerday -->
<script type="text/javascript">
   $('#status_id_chek').change(function () {
      var StatusID = $(this).val();
      //  alert(StatusID);
      if (StatusID) {
         $.ajax({
            type: "GET",
            url: "{{url('get_statusid/')}}" + '/' + StatusID,
            success: function (data) {
               if (data) {
                  $("#assigne_to").empty();
                  $("#assigne_to").append('<option>Select User</option>');
                  $.each(data, function (key, value) {
                     $("#assigne_to").append('<option value="' + value['userid'] + '">' + value['uName'] + '</option>');
                  });
               }
               else {
                  $("#name").empty();
               }
            }
         });
      }
   });
</script>



<script>
   $(document).ready(function () {
      $('form').ajaxForm(function () {
         alert("Uploaded SuccessFully");
      });
   });

   function preview_image() {
      var total_file = document.getElementById("upload_file").files.length;
      for (var i = 0; i < total_file; i++) {
         $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'><br>");
         $('#image_name').append("<input type='text' class='form-controll' name='img_name[]'> <br>");
      }
   }
</script>
<!--- Auto compleate off script -->
<script type="text/javascript">
   $("form").attr('autocomplete', 'off');
</script>

<!-- <script>
$(document).ready(function(){
  $("button").click(function(){
    $("#myTable").remove();
  });
});
</script> -->

<script type="text/javascript">
   $(document).ready(function () {
      $("#buttonhist").click(function () {
         location.reload(true);
      });
   });
</script>

<!-- <script>
    $(document).ready(
            function() {
                setInterval(function() {
                    var randomnumber = Math.floor(Math.random() * 100);
                    $('#myhistoryTable').text(
                            'I am getting refreshed every 3 seconds..! Random Number ==> '
                                    + randomnumber);
                }, 3000);
            });
</script> -->