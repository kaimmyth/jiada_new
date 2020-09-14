<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }

  #map {
    height: 600px;  /* The height is 400 pixels */
    width: 100%;  /* The width is the width of the web page */
  }
  #drop-left{
    float:left;
    margin-left: 1em;;
  }
  .stats-left {
    float: left;
    width: 70%;
    background-image: linear-gradient(#bdbdbd, #aaaaaa);
    text-align: center;
    padding: 0px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    -o-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
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
    background-color: #fff;
    border: none;
    border-right: 2px solid #052963;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    -o-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
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

</style>
<div class="content-page">             
  <div class="content">                                                  
    <div class="container-fluid">
      <!--<div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Dashboard</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </div>
      </div>-->

      <div class="row">
       <div class="col-lg-12">
        <div class="row one" style="width: 102%; margin-left:0px;">
         <div class="col-sm-3">
           <div class="alert alert-danger alert-dismissible fade show" id='timesheetinfo' style="display: none;">
             <button type="button" class="close"  aria-label="Close">
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
	@if(Auth::user()->users_role!=3)
      <div class="col-md-3 widget">
        <a target="_blank()" href="{{url('land/listing')}}"  >
          <div class="stats-left ">
            <h4><i class="md md-map" style="color: #c30d00;"></i>&nbsp;Total Lands</h4>
            <h5 style="color: #fff;">View Detail</h5>
          </div>
          <div class="stats-right">
           <label>{{ $totalLeads }} </label>
         </div>
         <div class="clearfix"> </div>
       </a>
     </div>
     <div class="col-md-3 widget states-mdl">
      <a target="_blank()" href="{{url('land/customer')}}" >
        <div class="stats-left">
          <h4><i class="ion-android-add-contact" style=" color: #001796;"></i>&nbsp;Total Customers</h4>
          <h5 style="color: #fff;">View Detail</h5>
        </div>
        <div class="stats-right">
          <label>{{ $totalcustomers }}</label>
        </div>
      </a>
      <div class="clearfix"> </div>
    </div>
    <div class="col-md-3 widget states-thrd">
      <a target="_blank()" href="{{url('ticket')}}">
       <div class="stats-left">
         <h4><i class="md md-storage" style="color: #c30d00;"></i>&nbsp;Total Ticket(s)</h4>
         <h5 style="color: #fff;">View Detail</h5>
       </div>
       <div class="stats-right">
         <label>{{ $totaltickets }}</label>
       </div>
     </a>
     <div class="clearfix"> </div>
   </div>


   <div class="col-md-3 widget states-last">
       <a target="_blank()" href="{{url('today-tickets')}}">
         <div class="stats-left">
           <h4><i class="ion-arrow-shrink" style=" color: #001796;"></i>&nbsp;Today Ticket(s)</h4>
           <h5 style="color: #fff;">View Detail</h5>
         </div>
     <div class="stats-right">                         
       <label>{{ $todaytickets }}</label>
     </div>
     </a>
     <div class="clearfix"> </div>
   </div>
   @endif
   <div class="clearfix"> </div>
 </div>
</div> <hr class="new2">

<!--
<div class="row">
  <div class="col-md-12">
   <div class="row">
    <div class="col-xl-8">
     <div class="portlet" style="border-top: 2px solid #0061af;border-bottom: 2px solid #0061af;">
      <div class="portlet-heading">
        <h3 class="portlet-title text-dark text-uppercase">
          Website Stats
        </h3>
        <div class="portlet-widgets">
          <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
          <span class="divider"></span>
          <a data-toggle="collapse" href="#portlet1"><i class="ion-minus-round"></i></a>
          <span class="divider"></span>
          <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div id="portlet1" class="panel-collapse collapse show">
        <div class="portlet-body">
          <div class="row">
            <div class="col-md-12">
              <div id="website-stats" style="position: relative;height: 320px"></div>
              <div class="row text-center m-t-30">
                <div class="col-sm-4">
                  <h4 class="counter">86,956</h4>
                  <small class="text-muted"> Weekly Report</small>
                </div>
                <div class="col-sm-4">
                  <h4 class="counter">86,69</h4>
                  <small class="text-muted">Monthly Report</small>
                </div>
                <div class="col-sm-4">
                  <h4 class="counter">948,16</h4>
                  <small class="text-muted">Yearly Report</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /Portlet -->
  </div> <!-- end col -->
<!--
  <div class="col-xl-4">
    <div class="portlet"style="border-top: 2px solid #0061af;border-bottom: 2px solid #0061af;">portlet heading
      <div class="portlet-heading">
        <h3 class="portlet-title text-dark text-uppercase">
          Website Stats
        </h3>
        <div class="portlet-widgets">
          <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
          <span class="divider"></span>
          <a data-toggle="collapse" href="#portlet2"><i class="ion-minus-round"></i></a>
          <span class="divider"></span>
          <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div id="portlet2" class="panel-collapse collapse show">
        <div class="portlet-body">
          <div class="row">
            <div class="col-md-12">
              <div id="pie-chart">
                <div id="pie-chart-container" class="flot-chart" style="height: 320px">
                </div>
              </div>

              <div class="row text-center m-t-30">
                <div class="col-sm-6">
                  <h4 class="counter">86,956</h4>
                  <small class="text-muted"> Weekly Report</small>
                </div>
                <div class="col-sm-6">
                  <h4 class="counter">86,69</h4>
                  <small class="text-muted">Monthly Report</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /Portlet -->
  </div> <!-- end col -->
</div> <!-- End row -->
</div>
</div><!--end of row-->

</div>
</div>
</div><!-- end of container fluid-->
</div><!--end of content-->
</div><!--end of content page-->
