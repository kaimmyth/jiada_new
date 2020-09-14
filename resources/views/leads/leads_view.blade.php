  <link href="{{ asset('public/css/progress-wizard.min.css') }}" rel="stylesheet" type="text/css" />

  <style>

    .container {
        width: 100%;
        margin: 2em auto;
    }
    .progress-indicator.custom-complex {
        background-color: #f1f1f1;
        padding: 10px 5px;
        border: 1px solid #ddd;
        border-radius: 10px;
    }
    .progress-indicator.custom-complex > li .bubble {
        height: 12px;
        width: 99%;
        border-radius: 2px;
        box-shadow: inset -5px 0 12px rgba(0, 0, 0, 0.2);
    }
    .progress-indicator.custom-complex > li .bubble:before,
    .progress-indicator.custom-complex > li .bubble:after {
        display: none;
    }

    /* Demo for vertical bars */

    .progress-indicator.stepped.stacked {
        width: 48%;
        display: inline-block;
    }
    .progress-indicator.stepped.stacked > li {
        height: 150px;
    }
    .progress-indicator.stepped.stacked > li .bubble {
        padding: 0.1em;
    }
    .progress-indicator.stepped.stacked > li:first-of-type .bubble {
        padding: 0.5em;
    }
    .progress-indicator.stepped.stacked > li:last-of-type .bubble {
        padding: 0em;
    }

    /* Nocenter */

    .progress-indicator.nocenter.stacked > li {
        min-height: 100px;
    }
    .progress-indicator.nocenter.stacked > li span {
        display: block;
    }
    .progress-indicator>li.process .bubble,
</style>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Leads Information / <a href="javascript::void(0);" onclick="history.back()">Back</a></h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{url('dashboard')}}">Home</a></li>
                        <li><a href="{{url('leads/view')}}">leads</a></li>
                        <li class="active">Leads info</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 das">
                                    <img src="{{asset('public/assets/images/avatar.png')}}" class="set" alt="Avatar"
                                    style="width:150px">
                                </div>

                                <div class="col-md-4">
                                    <h3>{{$results->first_name}} {{$results->last_name}}</h3>
                                    <p class="mail">{{$results->email}}</p>
                                    <p class="phn">{{$results->mobile}}</p>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{url('leads/edit',$results->id)}}"> <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5"  style="float: right;">Edit</button></a>
                                </div>                                
                                <div class="container">
                                    <ul class="progress-indicator" style="font-size: 100%;">
                                        <li @if($results->lead_status=='Unqualified') class="completed" @else class="process"  @endif >
                                            <span class="bubble "></span><b>Unqualified</b>
                                        </li>
                                        <li @if($results->lead_status=='new') class="completed" @else class="process"  @endif>
                                            <span class="bubble"></span>New
                                        </li>

                                        <li @if($results->lead_status=='working') class="completed" @else class="process"  @endif>
                                            <span class="bubble"></span>Working
                                        </li>
                                        <li @if($results->lead_status=='nurturing') class="completed" @else class="process"  @endif>
                                            <span class="bubble"></span>Nurturing
                                        </li>
                                        <li @if($results->lead_status=='qualified') class="completed" @else class="process"  @endif>
                                            <span class="bubble"></span>Qualified
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="portlet">
                        <div class="portlet-heading portlet-default">
                            <h3 class="portlet-title">
                                Leads Details
                            </h3>
                            <div class="portlet-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                <span class="divider"></span>
                                <a data-toggle="collapse" href="#bg-success" title="Minimize"><i class="ion-minus-round"></i></a>
                                <span class="divider"></span>
                                <!-- <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a> -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="bg-success" class="panel-collapse collapse show">
                            <div class="portlet-body">
                             <div class="container1" style="text-align: -webkit-left;">
                                <div class="row">
                                  <div class="col-md-6" style="border: 1px solid black;">
                                    <label>Name :</label> <span> {{$results->first_name ?? ""}} {{$results->last_name ?? ""}}  </span>
                                </div>
                                <div class="col-md-6" style="border: 1px solid black;">
                                    <label>Phone :</label> &nbsp; <span> {{$results->phone ?? ""}} </span>
                                </div>
                            </div>
                        </div>
                        <div class="container1" style="text-align: -webkit-left;">
                            <div class="row">
                              <div class="col-md-6" style="border: 1px solid black;">
                                <label> Email :</label> <span> {{$results->email ?? ""}} </span>
                            </div>
                            <div class="col-md-6" style="border: 1px solid black;">
                                <label>Mobile :</label> &nbsp; <span> {{$results->mobile ?? ""}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="container1" style="text-align: -webkit-left;">
                        <div class="row">
                          <div class="col-md-6" style="border: 1px solid black;">
                            <label> Website :</label> <span> {{$results->website ?? ""}} </span>
                        </div>
                        <div class="col-md-6" style="border: 1px solid black;">
                            <label>Company  :</label> &nbsp; <span> {{ucwords($results->company_name ?? "")}} </span>
                        </div>
                    </div>
                </div>              
                <div class="container1" style="text-align: -webkit-left;">
                    <div class="row">
                      <div class="col-md-6" style="border: 1px solid black;">
                        <label> Fax :</label> <span> {{$results->fax ?? ""}} </span>
                    </div>
                    <div class="col-md-6" style="border: 1px solid black;">
                        <label>No. Of Employees :</label> &nbsp; <span> {{$results->n_o_employee ?? ""}} </span>
                    </div>
                </div>
            </div>
            <div class="container1" style="text-align: -webkit-left;">
                <div class="row">
                  <div class="col-md-6" style="border: 1px solid black;">
                    <label> Lead Owner :</label> <span> {{ucwords($results->user->name ?? "")}} </span>
                </div>
                <div class="col-md-6" style="border: 1px solid black;" id="leadsStatus" >
                    <label>Lead Status :</label> &nbsp; <span style="color: #007bff; font-size: 15px;"> {{strtoupper($results->lead_status ?? "" )}} </span>
                </div>
            </div>
        </div>
        <div class="container1" style="text-align: -webkit-left;">
            <div class="row">
              <div class="col-md-6" style="border: 1px solid black;">
                <label> Rating :</label> <span> {{strtoupper($results->rating ?? "")}} </span>
            </div>
            <div class="col-md-6" style="border: 1px solid black;">
                <label>Annual Revenue :</label> &nbsp; <span> {{$results->annual_revenue ?? ""}} </span>
            </div>
        </div>
    </div>
    <div class="container1" style="text-align: -webkit-left;">
        <div class="row">
          <div class="col-md-6" style="border: 1px solid black;">
            <label> Lead Source :</label> <span> {{$results->lead_source ?? ""}} </span>
        </div>
        <div class="col-md-6" style="border: 1px solid black;">
            <label>Industry :</label> &nbsp; <span> Education </span>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-12">
    <div class="portlet">
        <div class="portlet-heading portlet-default">
            <h3 class="portlet-title">
                Address Details
            </h3>
            <div class="portlet-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                <span class="divider"></span>
                <a data-toggle="collapse" href="#bg-warning" title="Minimize"><i class="ion-minus-round"></i></a>
                <span class="divider"></span>
                <!--   <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a> -->
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="bg-warning" class="panel-collapse collapse show">
            <div class="portlet-body">
               <div class="container1" style="text-align: -webkit-left;">
                <div class="row">
                  <div class="col-md-6" style="border: 1px solid black;">
                    <label> Address :</label> <span> {{$results->address1 ?? ""}} </span>
                </div>
                <div class="col-md-6" style="border: 1px solid black;">
                    <label>City :</label> &nbsp; <span> {{$results->city_distt ?? ""}} </span>
                </div>
            </div>
        </div>
        <div class="container1" style="text-align: -webkit-left;">
            <div class="row">
              <div class="col-md-6" style="border: 1px solid black;">
                <label> State :</label> <span> {{$results->state_province ?? ""}} </span>
            </div>
            <div class="col-md-6" style="border: 1px solid black;">
                <label>Zip/Postal Code :</label> &nbsp; <span> {{$results->pincode ?? ""}} </span>
            </div>
        </div>
    </div>
    <div class="container1" style="text-align: -webkit-left;">
        <div class="row">
          <div class="col-md-6" style="border: 1px solid black;">
            <label> Country :</label> <span> {{$results->country ?? ""}} </span>
        </div>
        <div class="col-md-6" style="border: 1px solid black;">
            <label> Description :</label> &nbsp; <span> {{$results->description ?? ""}} </span>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript"> 
    $(document).ready(function () { 
      try {
        var status = $("#leadsStatus span").html();



    }catch(err)
    {
      var error =  err.message;
      alert(error);
  }
});

</script>

<script type="text/javascript"> 
    $(document).ready(function () { 
     try {
        $("#calls").css("display","block");
        $("#createCall").addClass('active');
        document.getElementById('eventName').setAttribute('onclick','newCall()');
        $("#createCall").click(function () { 
            $("#createCall").addClass('active');
            $("#createTask").removeClass('active');
            $("#createEvent").removeClass('active');
            $("#createEmail").removeClass('active');
            document.getElementById("eventName").innerText='New Call';
            document.getElementById('eventName').setAttribute('onclick','newCall()');
            $("#calls").css("display","block");
            $("#tasks").css("display","none");
            $("#events").css("display","none");
            $("#email").css("display","none");
        }); 
        $("#createTask").click(function () { 
            $("#createCall").removeClass('active');
            $("#createTask").addClass('active');
            $("#createEvent").removeClass('active');
            $("#createEmail").removeClass('active');
            document.getElementById("eventName").innerText='New Task';
            document.getElementById('eventName').setAttribute('onclick','newTask()'); 
            $("#tasks").css("display","block");
            $("#events").css("display","none");
            $("#calls").css("display","none");
            $("#email").css("display","none");
        }); 
        $("#createEvent").click(function () { 
            $("#createCall").removeClass('active');
            $("#createTask").removeClass('active');
            $("#createEvent").addClass('active');
            $("#createEmail").removeClass('active');
            document.getElementById("eventName").innerText='New Event';
            document.getElementById('eventName').setAttribute('onclick','newEvent()');
            $("#events").css("display","block");
            $("#email").css("display","none");
            $("#calls").css("display","none");
            $("#tasks").css("display","none");
        }); 
        $("#createEmail").click(function () { 
            $("#createCall").removeClass('active');
            $("#createTask").removeClass('active');
            $("#createEvent").removeClass('active');
            $("#createEmail").addClass('active');
            document.getElementById("eventName").innerText='New Email';
            document.getElementById('eventName').setAttribute('onclick','newEmail()');
            $("#email").css("display","block");
            $("#tasks").css("display","none");
            $("#calls").css("display","none");
            $("#events").css("display","none");

        }); 
    }catch(err)
    {
      var error =  err.message;
      alert(error)
  }
}); 
</script> 
<div class="col-xl-12">
    <div class="portlet">
        <div class="portlet-heading portlet-default"> 
            <h3 class="portlet-title">
                <button type="button" id="createCall" class="btn btn-outline-info btn-rounded m-b-5">Calls</button> <button type="button" id="createTask" class="btn btn-outline-info btn-rounded m-b-5">Tasks</button> <button type="button" id="createEvent" class="btn btn-outline-info btn-rounded m-b-5">Events</button> <button type="button" id="createEmail" class="btn btn-outline-info btn-rounded m-b-5">Emails</button>
            </h3>
            <div class="portlet-widgets">
                <button type="button" id="eventName" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">New Call</button>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="bg-primary" class="panel-collapse collapse show">
            <div class="portlet-body">
              <div class="table-responsive" id="calls" style="display: none;" >
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Call Type</th>
                            <th>Call Purpose</th>
                            <th>Call Details</th>
                            <th>Call Duration</th>
                            <th>Owner</th>
                            <th>Lead Name</th>
                            <th>Contact Name</th>
                            <th>Account Name</th>
                            <th>Opportunity Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results->leadcalldata as $key => $val)
                        <tr>
                            <td>{{$val->subject}}</td>
                            <td>{{ucwords($val->calltype)}}</td>
                            <td>{{ucwords($val->call_purpose)}}</td>
                            <td>{{ucwords($val->call_details)}}</td>                                
                            <td>@if($val->minute!=''){{ucwords($val->minute)}}min, {{ucwords($val->second)}}sec. @else 0min ,0sec. @endif</td>
                            <td>{{ucwords($val->owner)}}</td>
                            <td>{{ucwords($results->first_name ?? "")}} {{ucwords($results->last_name ?? "")}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="table-responsive" id="tasks" style="display: none;" >
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Due Date</th>
                            <th>Assign To</th>
                            <th>Status</th>
                            <th>Contact Name</th>
                            <th>Lead Name</th>
                            <th>Account Name</th>
                            <th>Opportunity Name</th>
                            <th>Module</th>

                        </tr>
                    </thead>
                    <tbody>
                     @foreach(@$results->leadtaskdata as $key => $val)
                     <tr>                           
                        <td rowspan="2">{{$val->subject}}</td>
                        <td>{{date('M j,Y',strtotime($val->due_date))}}</td>
                        <td>{{$val->assign_to}}</td>
                        <td>{{$val->taskstatus}}</td>                        
                        <td></td>
                        <td>{{$results->first_name ?? ""}} {{$results->last_name ?? ""}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-responsive" id="events" style="display: none;" >
           <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Start Date-Time</th>
                    <th>End Date-Time</th>
                    <th>Location</th>
                    <th>Assign To</th>
                    <th>Status</th>
                    <th>Lead Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results->leadeventdata as $key => $val)
                <tr>
                    <td>{{ucwords($val->subject)}}</td>
                    <td>{{ucwords($val->description)}}</td>
                    <td>{{date('M j, Y',strtotime($val->start_date_time))}}</td>
                    <td>{{date('M j, Y',strtotime($val->end_date_time))}}</td>
                    <td>{{ucwords($val->location)}}</td>
                    <td>{{ucwords($val->assign_to)}}</td>
                    <td>{{ucwords($val->taskstatus)}}</td>
                    <td>{{$results->first_name ?? ""}} {{$results->last_name ?? ""}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="table-responsive" id="email" style="display: none;" >
     <table class="table table-bordered mb-0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Rec-ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results->leademaildata as $key => $val)
            <tr>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->subject}}</td>
                <td>{{$val->message}}</td>
                <td>{{rand(111111111111,99999999999999)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
</div>
</div>
<div class="col-xl-6">
    <div class="portlet">
        <div class="portlet-heading portlet-default"> 
            <h3 class="portlet-title">
                Notes
            </h3>
            <div class="portlet-widgets">
                <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">Add Notes</button>
                &nbsp;&nbsp;&nbsp;
                <a data-toggle="collapse" href="#bg-default" title="Minimize"><i class="ion-minus-round"></i></a>
                <span class="divider"></span>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="bg-default" class="panel-collapse collapse show">
            <div class="portlet-body">
             <blockquote class="blockquote blockquote-reverse mb-0">
                <p style="float: left; font-size: 20px;">Test</p><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">25-Sep-2019 16:50:12 <cite title="Source Title">by Admin User</cite></footer>
            </blockquote>
        </div>
    </div>
</div>
</div>
<div class="col-xl-6">
    <div class="portlet">
        <div class="portlet-heading portlet-default"> 
            <h3 class="portlet-title">
             Attachments / Files
         </h3>
         <div class="portlet-widgets">
            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">Add Attachement/File</button>
            &nbsp;&nbsp;&nbsp;
            <a data-toggle="collapse" href="#bg-default1" title="Minimize"><i class="ion-minus-round"></i></a>
            <span class="divider"></span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="bg-default1" class="panel-collapse collapse show">
        <div class="portlet-body">
         <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Attachedment</th>
                        <th>Contact Name</th>
                        <th>Lead Name</th>                        
                        <th>Opportunity Name</th>                        
                        <th>Account Name</th>                        
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">Test</td>
                        <td>desert.jpg</td>
                        <td>Neeraj Kumar</td>
                        <td>Haresh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<!-- Notes Listing -->
<div class="col-xl-12">
    <div class="portlet">
        <div class="portlet-heading portlet-default"> 
            <h3 class="portlet-title">
             Products
         </h3>
         <div class="portlet-widgets">
            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">Add Product</button>
            &nbsp;&nbsp;&nbsp;
            <a data-toggle="collapse" href="#bg-default1" title="Minimize"><i class="ion-minus-round"></i></a>
            <span class="divider"></span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="bg-default1" class="panel-collapse collapse show">
        <div class="portlet-body">
         <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>Product Names</th>
                        <th>Product Code</th>
                        <th>Vendor</th>
                        <th>Unit Price</th>                        
                        <th>Tax</th>                        
                        <th>Taxable</th>                        
                        <th>Lead Name</th>
                        <th>Contact Name</th>
                        <th>Account Name</th>
                        <th>Lead Name</th>
                        <th>Opportunity Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>test</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td>Testing</td>
                   </tr>
               </tbody>
           </table>
       </div>
   </div>
</div>
</div>
</div>
<!-- End -->
<!-- Campaigns -->
<div class="col-xl-12">
    <div class="portlet">
        <div class="portlet-heading portlet-default"> 
            <h3 class="portlet-title">
             Campaigns
         </h3>
         <div class="portlet-widgets">
            <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">Select Campaign</button>
            &nbsp;&nbsp;&nbsp;
            <a data-toggle="collapse" href="#bg-default1" title="Minimize"><i class="ion-minus-round"></i></a>
            <span class="divider"></span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="bg-default1" class="panel-collapse collapse show">
        <div class="portlet-body">
         <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>Campaign Names</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Expected Revenu</th>                        
                        <th>Status</th>                        
                        <th>Active</th>                        
                        <th>Action Staus</th>
                        <th>Contact Name</th>
                        <th>Account Name</th>
                        <th>Lead Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>test</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td>Testing</td>
                   </tr>
               </tbody>
           </table>
       </div>
   </div>
</div>
</div>
</div>
<!-- End -->
</div>
</div>
</div>
<script type="text/javascript">
    function newCall() {
      document.getElementById("FormValidation").reset();
      $('#create-call').modal('show');
  }
  function newTask() {
     $('#create-task').modal('show');
 }
 function newEvent() {
     $('#create-event').modal('show');
 }
 function newEmail() {
  $('#create-email').modal('show');
}
</script>

<script type="text/javascript"> 
    $(document).ready(function () { 
     $("#current_call").click(function () {        
         $("#currentCall").css("display","block");
         $("#scheduleCall").css("display","none");
         $("#completedCall").css("display","none");         
     });

     $("#completed_call").click(function () {
       $("#completedCall").css("display","block");
       $("#currentCall").css("display","none");
       $("#scheduleCall").css("display","none");

   });
     $("#schedule_call").click(function () {
      $("#scheduleCall").css("display","block");
      $("#completedCall").css("display","none");
      $("#currentCall").css("display","none");
  });
 });
</script>

<!-- Email Model -->
<div id="create-email" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Create Email</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <form action="{{ URL::to('leads/view/create/calleventtaskemail')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
                @csrf
                <input type="hidden" name="checkrequest" value="createemail" >
                <input type="hidden" name="email" value="{{$results->email ?? ''}}">
                <input type="hidden" name="cust_id" value="{{$results->id}}">
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="name" class="control-label">Name <font color="red">*</font></label> 
                                <input type="text" class="form-control" id="name"  value="{{$results->first_name ?? ''}} {{$results->last_name ?? ''}}"  name="name" placeholder="Name" required="" aria-required="true"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="subject" class="control-label">Subject <font color="red">*</font></label> 
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="" aria-required="true"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label for="field-2" class="control-label">Message <font color="red">*</font></label>
                                <textarea class="form-control autogrow" name="message" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required="" aria-required="true" >  
                                </textarea> 
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
</div>
<!-- /.modal -->


<!-- Event Model -->
<div id="create-event" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Create Event</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <form action="{{ URL::to('leads/view/create/calleventtaskemail')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
                @csrf
                <input type="hidden" name="checkrequest" value="createevent" >
                <input type="hidden" name="cust_id" value="{{$results->id}}">
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="subject" class="control-label">Subject <font color="red">*</font></label> 
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required=""
                                aria-required="true"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label for="field-2" class="control-label">Description <font color="red">*</font></label>
                                <textarea class="form-control autogrow" name="description" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required="" aria-required="true" >  
                                </textarea> 
                            </div>
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                           <div class="form-group">
                            <p class="control-label"><b>Status</b></p>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" value="Planned" id="outbound" name="taskstatus" checked="checked">
                                <label for="inlineRadio1">Planned</label>
                            </div>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inbound" name="taskstatus" value="Held">
                                <label for="inlineRadio1">Held </label>
                            </div>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inbound" name="taskstatus" value="Not Held">
                                <label for="inlineRadio1">Not Held </label>
                            </div>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inbound" name="taskstatus" value="Cancelled">
                                <label for="inlineRadio1">Cancelled </label>
                            </div>
                        </div>
                    </div> 
                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="assign_to" class="control-label">Start Date Time <font color="red">*</font></label> 
                                <input type="text" name="start_date_time" id="start_date_time" class="form-control autodate"  placeholder="DD/MM/YYYY" autocomplete="off" required="" aria-required="true">
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="assign_to" class="control-label">End Date Time <font color="red">*</font></label> 
                                <input type="text" name="end_date_time" id="end_date_time" class="form-control autodate"  placeholder="DD/MM/YYYY" autocomplete="off" required="" aria-required="true">
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="assign_to" class="control-label">Location <font color="red">*</font></label> 
                                <input type="text" name="location" id="location" class="form-control " autocomplete="off" required="" aria-required="true">
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label for="assign_to" class="control-label">Assign To <font color="red">*</font></label> 
                                <select class="select2 form-control" name="assign_to" id="assign_to" required="" aria-required="true">
                                    <option value="">select</option>
                                    <option value="adminuser">Admin User</option>
                                </select>
                            </div> 
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
</div>
<!-- /.modal -->

<!-- Call Model -->
<div id="create-call" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Create Call</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <form action="{{ URL::to('leads/view/create/calleventtaskemail')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
                @csrf
                <input type="hidden" name="checkrequest" value="createcall" >
                <input type="hidden" name="cust_id" value="{{$results->id}}">
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="subject" class="control-label">Subject <font color="red">*</font></label> 
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required=""
                                aria-required="true"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="call_purpose" class="control-label">Call Perpose <font color="red">*</font></label> 
                                <select class="select2 form-control" name="call_purpose" id="call_purpose" required="" aria-required="true">
                                    <option value="">select</option>
                                    <option value="prospecting">Prospecting</option>
                                    <option value="administrative">Administrative</option>
                                    <option value="negotiation">Negotiation</option>
                                    <option value="demo">Demo</option>
                                    <option value="project">Project</option>
                                    <option value="desk">Desk</option>
                                </select>
                            </div> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="phone" class="control-label">Phone Number</label> 
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required=""
                                aria-required="true"> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                           <div class="form-group">
                            <p class="control-label"><b>Call Type</b></p>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" value="outbound" id="outbound" name="calltype" checked="checked">

                                <label for="inlineRadio1"> Outbound</label>
                            </div>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inbound" name="calltype" value="inbound">
                                <label for="inlineRadio1">Inbound </label>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-12"> 
                       <div class="form-group">
                          <p class="control-label"><b>Call Details</b><font color="red">*</font></p>
                          <div class="radio radio-info form-check-inline">
                            <input type="radio" id="current_call" value="Current Call" name="call_details" >
                            <label for="inlineRadio1">Current Call</label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                            <input type="radio" id="completed_call" value="Completed Call" name="call_details" >
                            <label for="inlineRadio1"> Completed Call </label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                            <input type="radio" id="schedule_call" value="Schedule Call" name="call_details" >
                            <label for="inlineRadio1"> Schedule Call </label>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Current Call -->
            <div class="row" id="currentCall" style="display: none;" > 
                <div class="col-md-12"> 
                    <div class="form-group"> 
                       <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox"  >
                        <label for="checkbox2">
                            Start
                        </label>
                    </div>
                </div> 
            </div> 
            <div class="col-md-6"> 
                <div class="form-group"> 
                    <label for="assign_to" class="control-label">Call Timer </label> 
                    <input type="text" name="call_timer" class="form-control">
                </div> 
            </div> 
        </div> 

        <!-- Schedule Call -->
        <div class="row" id="scheduleCall" style="display: none;">
           <div class="col-md-6"> 
            <div class="form-group">
                <label for="field-2" class="control-label">Call Start Time<font color="red">*</font></label>
                <input type="text" name="call_start_time" id="call_start_time" value="" class="form-control autodate"  placeholder="DD/MM/YYYY" autocomplete="off" required="" aria-required="true" >
            </div>                
        </div> 
        <div class="col-md-6">
            <div class="form-group"> 
                <label for="assign_to" class="control-label">Owner </label> 
                <select class="select2 form-control" name="owner" id="owner" >
                    <option value="">select</option>
                    <option value="adminuser">Admin User</option>
                </select>
            </div> 
        </div>
    </div>
    <!-- Complete Call -->
    <div class="row" id="completedCall" style="display: none;"> 
        <div class="col-md-6"> 
            <div class="form-group">
                <label for="field-2" class="control-label">Call Start Time<font color="red">*</font></label>
                <input type="text" name="due_date" id="due_date" value="" class="form-control autodate"  placeholder="DD/MM/YYYY" autocomplete="off"  >
            </div>                
        </div> 
        <div class="col-md-6">
            <div class="form-group"> 
                <label for="assign_to" class="control-label">Minutes </label> 
                <input type="text" name="minute" class="form-control" >
            </div> 
        </div>
        <div class="col-md-6">
            <div class="form-group"> 
                <label for="assign_to" class="control-label">Seconds </label> 
                <input type="text" name="second" class="form-control" >
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
</div>
<!-- /.modal -->

<!-- Task Model -->
<div id="create-task" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title mt-0">Create Task</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <form action="{{ URL::to('leads/view/create/calleventtaskemail')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
                @csrf
                <input type="hidden" name="checkrequest" value="createtask" >
                <input type="hidden" name="cust_id" value="{{$results->id}}">
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="subject" class="control-label">Subject <font color="red">*</font></label> 
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required=""
                                aria-required="true"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label for="field-2" class="control-label">Due Date<font color="red">*</font></label>
                                <input type="text" name="due_date" id="due_date" value="" class="form-control autodate"  placeholder="DD/MM/YYYY" autocomplete="off" required="" aria-required="true" >
                            </div>
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                           <div class="form-group">
                            <p class="control-label"><b>Status</b></p>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" value="Planned" id="outbound" name="taskstatus" checked="checked">
                                <label for="inlineRadio1">Planned</label>
                            </div>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inbound" name="taskstatus" value="Held">
                                <label for="inlineRadio1">Held </label>
                            </div>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inbound" name="taskstatus" value="Not Held">
                                <label for="inlineRadio1">Not Held </label>
                            </div>
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inbound" name="taskstatus" value="Cancelled">
                                <label for="inlineRadio1">Cancelled </label>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group"> 
                            <label for="assign_to" class="control-label">Assign To <font color="red">*</font></label> 
                            <select class="select2 form-control" name="assign_to" id="assign_to" required="" aria-required="true">
                                <option value="">select</option>
                                <option value="adminuser">Admin User</option>
                            </select>
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
</div>
<!-- /.modal -->