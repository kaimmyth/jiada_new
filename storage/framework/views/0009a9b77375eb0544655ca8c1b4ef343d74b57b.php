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
          <?php if(Auth::user()->users_role==1 || Auth::user()->users_role==2): ?>
          <div class="col-md-3 widget">
            <a target="_blank()" href="<?php echo e(url('land/listing')); ?>">
              <div class="stats-left ">
                <h4><i class="md md-map" style="color: #001796;"></i>&nbsp;Total Lands</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label><?php echo e($totalLeads); ?> </label>
              </div>
              <div class="clearfix"> </div>
            </a>
          </div>
           <?php endif; ?>
           <?php if(Auth::user()->users_role==1): ?>
          <div class="col-md-3 widget states-mdl">
            <a target="_blank()" href="<?php echo e(url('land/customer')); ?>">
              <div class="stats-left">
                <h4><i class="ion-android-add-contact" style=" color: #001796;"></i>&nbsp;Total Customers</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label><?php echo e($totalcustomers); ?></label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          <?php endif; ?>
          <?php if(Auth::user()->users_role==3 || Auth::user()->users_role==2): ?>
          <!--for company-->
          <div class="col-md-3 widget">
            <a target="_blank()" href="<?php echo e(url('today-tickets')); ?>">
              <div class="stats-left ">
                <?php if(Auth::user()->users_role==2): ?>
                    <h4><i class="md md-storage" style="color: #001796;"></i>&nbsp;Today Assign Ticket(s)</h4>
                <?php else: ?>
                    <h4><i class="md md-storage" style="color: #001796;"></i>&nbsp;Today Open Ticket(s)</h4>
                <?php endif; ?>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label><?php echo e($todaytickets); ?> </label>
              </div>
              <div class="clearfix"> </div>
            </a>
          </div>
          <div class="col-md-3 widget states-mdl">
            <a target="_blank()" href="<?php echo e(url('today-close-tickets')); ?>">
              <div class="stats-left">
                <h4><i class="ion-arrow-shrink" style=" color: #001796;"></i>&nbsp;Today Close Ticket(s)</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label><?php echo e($todayticketclose); ?></label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          <?php endif; ?>
          
          <div class="col-md-3 widget states-thrd">
            <a target="_blank()" href="<?php echo e(url('ticket')); ?>">
              <div class="stats-left">
                <h4><i class="md md-storage" style="color:#001796;"></i>&nbsp;Total Ticket(s)</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label><?php echo e($totaltickets); ?></label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          <?php if(Auth::user()->users_role!=2): ?>
          <div class="col-md-3 widget states-last">
            <a target="_blank()" href="<?php echo e(url('message')); ?>">
              <div class="stats-left ">
                <h4><i class="md md-map" style="color:#001796;"></i>&nbsp;Message(s)</h4>
                <h5>View Detail</h5>
              </div>
              <div class="stats-right">
                <label><?php echo e($messages); ?> </label>
              </div>
            </a>
            <div class="clearfix"> </div>
          </div>
          <?php endif; ?>
          <div class="clearfix"> </div>
        </div>
      </div>
      <hr class="new2">

     
    
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
<!--end of content page--><?php /**PATH C:\xampp\htdocs\jiada_new\resources\views/admin/home.blade.php ENDPATH**/ ?>