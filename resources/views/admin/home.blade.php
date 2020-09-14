<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }

  #map {
    height: 600px;
    /* The height is 400 pixels */
    width: 100%;
    /* The width is the width of the web page */
  }

  #drop-left {
    float: left;
    margin-left: 1em;
    ;
  }

  .stats-left {
    float: left;
    width: 70%;
    background:#fff;
    text-align: center;
    padding: 0px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    -o-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
  }

  .stats-left h4 {
    font-size: 18px;
    color: #000;
    margin-top: 10px;
    font-weight: 400;
  }

  .stats-right {
    float: right;
    width: 30%;
    text-align: center;
    padding: 10px;
    background-color:#bee2ff;
    border: none;
    border-right: 2px solid #052963;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    -o-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    height: 67px;
  }

  #dashboard-row {
    width: 100%;
    margin-left: 0px;
    background: #b6e9ff;
    padding-right: 10px;
    margin-bottom: 10px;
    height: 46px;
    border-left: 5px solid #004e8c;
    border-right: 2px solid #004e8c;
  }

  /* Dashed red border */
  hr.new2 {
    border-top: 1px dashed #000;
  }

  .widget {
    width: 20.5%;
    padding: 0px;
    box-shadow: 1px 3px 6px #0061af29;
}
  
.list-group-item:first-child {
    border-radius: 0px;
    padding: 5px 20px;
    background: #fefefe;
}

.list-group-item {
    border-radius: 0px;
    padding: 5px 20px;
    background: #fefefe;
}

.list-group-item:last-child {
    border-radius: 0px;
    padding: 5px 20px;
    background: #fefefe;
}

.stats-left{
      background:#fff;
}
.stats-left h4 {
    font-size: 16x;
    color: #000;
    margin-top: 10px;
    font-weight: 400;
}
.stats-right label {
    font-size: 17px;
    color: #3E3D3D;
    font-weight: 800;
    margin-top: 1em;
}
.stats-left h5 {
    font-size: 1em;
    color: #000;
}
.states-mdl .stats-left {
    background-color: #ffffff;
}
.states-thrd .stats-left {
    background-color: #ffffff;
}
.states-last .stats-left {
    background-color: #ffffff;
    border: none;
}
  
.content-page>.content {
    margin-bottom: 60px;
    margin-top: 62px;
    padding: 20px 10px 15px 10px;
    background: #eceff1;
}
.progress-bar-pink {
    background-color: #6dc10c;
}

</style>
<div class="content-page">
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
          <div class="row one" style="width: 102%; margin-left:0px;">
            <div class="col-sm-3">
              <div class="alert alert-danger alert-dismissible fade show" id='timesheetinfo' style="display: none;">
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <b><span id="message"></span></b>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="custom-widget">
        <div class="row one" style="width: 102%; margin-left:0px;">
          @if(Auth::user()->users_role==1 || Auth::user()->users_role==2)
          <div class="col-md-3 widget">
            <a target="_blank()" href="{{url('land/listing')}}">
              <div class="stats-left ">
                <h4><i class="md md-map" style="color: #001796;"></i>&nbsp;Total Lands</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label>{{ $totalLeads }} </label>
              </div>
              <div class="clearfix"> </div>
            </a>
          </div>
           @endif
           @if(Auth::user()->users_role==1)
          <div class="col-md-3 widget states-mdl">
            <a target="_blank()" href="{{url('land/customer')}}">
              <div class="stats-left">
                <h4><i class="ion-android-add-contact" style=" color: #001796;"></i>&nbsp;Total Customers</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label>{{ $totalcustomers }}</label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          @endif
          @if(Auth::user()->users_role==3 || Auth::user()->users_role==2)
          <!--for company-->
          <div class="col-md-3 widget">
            <a target="_blank()" href="{{url('today-tickets')}}">
              <div class="stats-left ">
                @if(Auth::user()->users_role==2)
                    <h4><i class="md md-storage" style="color: #001796;"></i>&nbsp;Today Assign Ticket(s)</h4>
                @else
                    <h4><i class="md md-storage" style="color: #001796;"></i>&nbsp;Today Open Ticket(s)</h4>
                @endif
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label>{{ $todaytickets }} </label>
              </div>
              <div class="clearfix"> </div>
            </a>
          </div>
          <div class="col-md-3 widget states-mdl">
            <a target="_blank()" href="{{url('today-close-tickets')}}">
              <div class="stats-left">
                <h4><i class="ion-arrow-shrink" style=" color: #001796;"></i>&nbsp;Today Close Ticket(s)</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label>{{ $todayticketclose }}</label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          @endif
          
          <div class="col-md-3 widget states-thrd">
            <a target="_blank()" href="{{url('ticket')}}">
              <div class="stats-left">
                <h4><i class="md md-storage" style="color:#001796;"></i>&nbsp;Total Ticket(s)</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label>{{ $totaltickets }}</label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          @if(Auth::user()->users_role!=2)
          <div class="col-md-3 widget states-last">
            <a target="_blank()" href="{{url('message')}}">
              <div class="stats-left ">
                <h4><i class="md md-map" style="color:#001796;"></i>&nbsp;Message(s)</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label>{{ $messages }} </label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          @endif
          <div class="clearfix"> </div>
        </div>
      </div>
      <hr class="new2">

      <!-- for graph  -->
      <div class="row" style="background: #e6e6e6;">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                @if(Session::get('role')==1)
                <div class="col-lg-4 col-md-4 ">
                  <h5 style=" text-align: center; background: #0061af; color: #fff; padding: 6px; font-weight: normal;">
                   Today Ticket report</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <a target="_blank()" href="{{url('today-tickets')}}">
                          <h4>&nbsp;&nbsp;&nbsp;<i class="md md-map" style="color:#001796;"></i>&nbsp;Open Ticket(s) <span>{{ $todaytickets }} </span></h4>
                          <center><h5>View Detail</h5></center>
                        
                      </a>
                    </div>
                    <div class="col-lg-6">
                      <a target="_blank()" href="{{url('today-close-tickets')}}">
                          <h4><i class="ion-arrow-shrink" style=" color: #001796;"></i>&nbsp;Closed Ticket(s)&nbsp;<span>{{ $todayticketclose }}</span></h4>
                          <center><h5>View Detail</h5></center>
                      </a>
                    </div>
                    
                  </div>
                </div>
                @endif
                <div class="col-lg-4">
                  <h5 style=" text-align: center; background: #0061af; color: #fff; padding: 6px; font-weight: normal;">
                    Ticket Due Times</h5>
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Total Due Ticket(s)
                      <span class="badge badge-primary badge-pill">{{ $dueTickets }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Overdue
                      <span class="badge badge-primary badge-pill">{{$OverDueTickets}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Today
                      <span class="badge badge-danger badge-pill">{{$todayDueTickets}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Tomorrow
                      <span class="badge badge-warning badge-pill">{{$tomorrowDueTickets}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      This Week
                      <span class="badge badge-dark badge-pill">{{$thisWeekDueTickets}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Next Week
                      <span class="badge badge-success badge-pill">{{$nextWeekDueTickets}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Later
                      <span class="badge badge-success badge-pill">{{$laterDueTickets}}</span>
                    </li>

                  </ul>
                </div>
                <div class="col-md-4 col-xl-4i">
                      <h5 style=" text-align: center; background: #0061af; color: #fff; padding: 6px; font-weight: normal;">
                        Last 30 days</h5>
                      <p style=" font-weight: 800; margin: 0px;">{{$lastThirtyDaysOpen}}</p>
                      <h5 style=" font-size: 11px; margin: 0px 0 2px 0;color: #6f6d6d;">Open/Total Tickets <span class="pull-right">@if($totaltickets){{number_format($lastThirtyDaysOpen /$totaltickets*100,2)}} % @endif</span></h5>
                      <div class="progress">
                        <div class="progress-bar progress-bar-pink wow animated progress-animated" role="progressbar"
                          aria-valuenow="{{$lastThirtyDaysOpen /$totaltickets*100}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$lastThirtyDaysOpen /$totaltickets*100}}%">@if($totaltickets)
                          {{number_format($lastThirtyDaysOpen /$totaltickets*100,2)}}%
                          @endif
                        </div>
                      </div>
                      <p style=" font-weight: 800; margin: 0px;">{{$lastThirtyDaysclose}}</p>
                      <h5 style=" font-size: 11px; margin: 0px 0 2px 0;color: #6f6d6d;">Closed/Total Closed <span class="pull-right">{{ $totalClose ? number_format($lastThirtyDaysclose /$totalClose*100,2) : 0}}%
                      </span></h5>
                      <div class="progress">
                        <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar"
                          aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: {{$totalClose ? number_format($lastThirtyDaysclose /$totalClose*100,2) : 0}}%">
                          48%
                        </div>
                      </div>
                </div>
             
                @if(Session::get('role')==3 || Session::get('role')==2)
                <div class="col-md-8 col-xl-8i">
          <div class="card card-border card-primary">

            
            <h5 style=" text-align: center; background: #0061af; color: #fff; padding: 6px; font-weight: normal;">
              Open Tickets v/s Closed Tickets</h5>

            <div class="card-body">
              <canvas id="bar" data-type="Bar" height="300" width="800"></canvas>
              <!-- display statics by legend class -->
              <div class="legend" style="position: absolute;top: 26px;width: 100%;">
                <div
                  style="position: absolute; width: 102px; height: 57px; top: 14px; left: 37px; background-color: rgb(255, 255, 255); ">
                </div>
                <table style="position:absolute;top:24px;left:37px;;font-size:smaller;color:#545454">
                  <tbody style="background: #bfbcbc; line-height: 19px;">
                    <tr>
                      <td class="legendColorBox">
                        <div style="border:1px solid #ccc;padding:1px">
                          <div style="width:4px;height:0;border:5px solid #6e8cd7;overflow:hidden">
                          </div>
                        </div>
                      </td>
                      <td class="legendLabel">Closed Tickets</td>
                    </tr>
                    <tr>
                      <td class="legendColorBox">
                        <div style="border:1px solid #ccc;padding:1px">
                          <div style="width:4px;height:0;border:5px solid #ec407a;overflow:hidden"></div>
                        </div>
                      </td>
                      <td class="legendLabel">Open Tickets</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
                @endif

              </div> <!-- end row -->
            </div> <!-- card-body -->
          </div> <!-- card -->
        </div>

      </div>
    
    </div>


  </div> <!-- end col -->
</div> <!-- End row -->
</div>
</div>
<!--end of row-->

</div>
</div>
</div><!-- end of container fluid-->
</div>
<!--end of content-->
</div>
<!--end of content page-->