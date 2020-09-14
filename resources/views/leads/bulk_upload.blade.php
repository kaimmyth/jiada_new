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
          <h4 class="pull-left page-title">Bulk Upload Leads</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{url('dashboard')}}">Home</a></li>
            <li><a href="{{url('leads')}}">leads</a></li>
            <li class="active">Upload Leads</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" style="background-color: #317eeb;"></div>
            <div class="card-body">
             <div class="row gutter">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display:block; margin:auto;float:none;">
                <div class="panel">
                  <div class="panel-heading">
                    <h4>{!! ucwords(\Session::get('message')) !!}</h4>
                  </div>
                  <div class="panel-body">
                    <form id="FormValidation" method="post" action="{{action('LeadsController@BulkUploadLeads')}}?{{csrf_token()}}"  enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <div class="row gutter">
                          <div class="col-md-6">
                            <input type="file" name="uploadfile" id="uploadfile" required="" accept=".csv" class="form-control" required="" aria-required="true">
                            <span id="message"></span>
                          </div>
                          <div class="col-md-6">
                            <button type="submit" name="submit" value="upload_csv" id="upload" class="btn btn-info waves-effect waves-light">Upload</button>
                            <a href="{{asset('public/format/leads upload format.csv')}}" class="btn btn-info waves-effect waves-light"> <i class="fa fa-download"></i> Download Format</a>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6">
                          <button class="btn btn-default waves-effect" type="button" onclick="history.back()">Back</button>
                        </div>
                      </div>     
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
</div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){       
    $("#upload").click(function(){ 
      var val = $("#uploadfile").val();
      if(val.trim()!=''){  
       $("#loader1").css("display","block");   
     }  
   })
  });
</script>