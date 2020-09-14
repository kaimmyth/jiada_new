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
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;PCC Application</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pcc</a></li>
            <li class="active">PCC application</li>
          </ol>
        </div>
      </div><hr class="new2">

      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border card-info">
            <div class="card-header" style="background-image: linear-gradient(#effaff, white);"></div>
            <div class="card-body">
              <div class="row"><br><br><br>
                <div class="col-md-12 col-sm-12 col-12">
                  <p style="color:#F4730A;">(Search Land for Registration/Allocate to Customer and searching By :- Land name,Company name, Application no, Application Date.)</p>
                  <input type="hidden" name="filterAction" value="listleads">
                  <div class="row gutters">
                   <!-- <div class="col-md-2"> -->
                    <div class="col-md-2">
                      <div class="row form-group">                         
                        <div class="input-group">                    
                          <input type="text" id="searchland" name="land_name" class="form-control" placeholder="Search By Keyword">
                          <span class="input-group-prepend">
                            <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>
                          </span>                    
                        </div>
                      </div> 
                    </div> &nbsp;&nbsp;&nbsp;  
                    <div class="col-md-2">
                      <div class="row form-group">                         
                        <div class="input-group">                    
                          <input type="text"  id="datepicker" placeholder="Search By Date"  class="form-control" >  
                          <input type="hidden"  name="searchby_date" id="formdate" class="form-control" >                           
                        </div>
                      </div> 
                    </div> 
                    <div class="form-group"style="margin-top:-18px;margin-left: 1em;">                
                      <button class="btn btn-outline-info btn-rounded" onclick="FilterPccDate()" style="margin-top:20px;" type="submit"><i
                       class="fas fa-search"></i> Search</button>
                       <button class="btn btn-outline-info btn-rounded" style="margin-top:20px;" type="button"
                       onclick="window.location.href='{{url('land/pcc-registration')}}'">Reset</button>
                     </div>
                     <div class="form-group" style="margin-left:9px;">
                      <a href="{{url('land/add_pcc')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5"  ><i class="md md-add-circle-outline"></i> Add New PCC</button></a>
                    </div>
                  </div>
                  <div id="l_list" style="display: none;">
                    <table id="land_list" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead  style="background: #b6e9ff;">
                        <tr>
                          <th>Application No.</th>
                          <th>Plot Name</th>
                          <th>Customer Name</th>
                          <th>Company Name</th>
                          <th>Application Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody >

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>                                                
      </div> <!-- container -->
    </div> <!-- content -->
    <script>
      $(document).ready(function () {
        var currentdate = moment().format('DD-MM-YYYY');
        //document.getElementById('datepicker').value = currentdate;
        document.getElementById('formdate').value = currentdate;
        var today1 = new Date();
        $('#datepicker').datepicker({
          format: 'dd-mm-yyyy',
          autoclose: true,
          endDate: "today",
          maxDate: today1
        }).on('changeDate', function(ev) {
          $(this).datepicker('hide');
        });
        $('#datepicker').keyup(function () {
          if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9^-]/g, '');
          }
        });
        $('.timeFilter').timepicker({
          defaultTIme: false
        });
      });
      datepicker.onchange = function(){
        var x = this.value;
        document.getElementById('formdate').value = x;
      }
      function FilterPccDate() {
       var d =  document.getElementById('formdate').value;
       fetch_data(d);

       function fetch_data(from_date)
       {
         var query = from_date;
         if (query != '') { 
           $("#loader1").css("display","block");
           $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
           $.ajax({
            url: "{{url('land/filter-pcc/')}}" + '/' + query+ '?Bydate=1',
            type:"POST",
            success:function (data) {

              document.getElementById('searchland').value='';
              $("#loader1").css("display","none");
              $("#l_list").css("display","block");
              $('#land_list tbody').html(data);
            }
          })
         }else{
           $('#land_list tbody').html(""); 
           $("#l_list").css("display","none");
         }
       }

     }
   </script>

   <!--  Allocate Registration Land -->
   <div class="modal fade bs-example-modal-lg" id="alocate_registration" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mt-0" id="myLargeModalLabel">PCC Registration Form </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ URL::to('land/create/registration')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
          @csrf
          <input type="hidden" name="cust_id" id="cust_id">
          <input type="hidden" name="land_id" id="land_id">
          <input type="hidden" name="pcc_reg" id="pcc_reg" value="1">
          <div class="modal-body">
           <div class="row gutters justify-content-center">
            <div class="card-body">                          
             <p style="font-size: 17px; font-weight: 700;">Land Details</p>
             <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <p>Plot No. : <b style="color: #F0560A;" id="p_no"></b></p>
                </div>
                <div class="col-md-4">
                  <p>Plot Name :  <b style="color: #F0560A;" id="p_name"></b></p>
                </div>
                <div class="col-md-4">
                  <p>Size :  <b style="color: #F0560A;" id="p_size"></b></p>
                </div>
                <div class="col-md-4">
                  <p><b style="color: #0AACF0;">Dakhal Kabjah Rakwa (Possesion Size)</b><input type="text" placeholder="Enter value" name="dakhal_kabja"></p>
                </div>
                <div class="col-md-4">
                  <p>Sector :  <b style="color: #F0560A;" id="sect"></b></p>
                </div>
                <div class="col-md-4">
                  <p>Phase :  <b style="color: #F0560A;" id="phas"></b></p>
                </div>
                <div class="col-md-4">
                  <p>Block :  <b style="color: #F0560A;" id="l_block"></b></p>
                </div>
              </div>
            </div>
            <hr>
            <p style="font-size: 17px; font-weight: 700;">Customer Details</p>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <p>Name : <b style="color: #F0560A" id="c_name"></b></p>
                </div>
                <div class="col-md-6">
                  <p>Phone No. :  <b style="color: #F0560A" id="c_mobile"></b></p>
                </div>
                <div class="col-md-6">
                  <p>Email :  <b style="color: #F0560A" id="c_email"></b></p>
                </div>
                <div class="col-md-6">
                  <p>Company :  <b style="color: #F0560A" id="c_company"></b></p>
                </div>
              </div>
            </div>
            <hr>
            <p style="font-size: 17px; font-weight: 700;">Registration Details</p>
            <div class="row">
            </div>
            <div class="row"> 
             <div class="col-md-6">
              Application No:   <input type="text" style="color: #F0560A;" readonly="" name="application_no" id="appli_no" ><br><br>
              Application Date:   <input type="text" style="color: #F0560A;" readonly="" class="" name="application_date" id="appli_date" placeholder="DD/MM/YYYY"><br><br>
              Allotment No: <input type="text"  name="allotment_no" required="" area-required="true" ><br><br>
              Allotment Date:   <input type="text" class="autodate" name="allotment_date" placeholder="DD/MM/YYYY" required="" area-required="true" ><br><br>
            </div>   
            <div class="col-md-6">
              Possession Date:   <input type="text" class="autodate" name="possession_date" placeholder="DD/MM/YYYY" required="" area-required="true"><br><br>
              SSI Registration Number:   <input type="text"  name="ssi_reg_no" ><br><br>
              Registration No:   <input type="text" name="registration_no" placeholder=""><br><br>
              Ragistration Date: <input type="text" class="autodate" name="registration_date" placeholder="DD/MM/YYYY"><br><br>
            </div>  

          </div>
          <hr>
          <p style="font-size: 17px; font-weight: 700;">Lease Details</p>
          <div class="row">

            <div class="col-md-6">
              Based Rent:   <input type="text" name="based_rent" id="based_rent" ><br><br>
              Insurance:   <input type="text"  name="insurance" id="insurance" ><br><br>
              Maintanance: <input type="text" name="maintanance" id="maintanance" ><br><br>
              Taxes: <input type="text" name="taxes" id="taxes" ><br><br>
              Additional Charge: <input type="text" name="additional_charge" id="additional_charge" ><br><br>
            </div>  
            <div class="col-md-6">
              Total Payable:   <input type="text" style="color: #F0560A;" name="netpaybill" id="netpaybill"  readonly=""><br><br>
              Net Payable:   <input type ="radio" name="add_net_payable" value="monthly" id="net_payable"> Monthly
              <input type ="radio" name="add_net_payable" id="net_payable" value="yearly" checked="checked"> Yearly<br><br>
              <span id="add_tag_n">Year</span>(s) :  <input type="text" name="lease_time" style="width: 195px;">
              <input type="hidden" value="yr"   name="lease_duration" id="add_time_duration"><br><br>
              Starting Date:   <input type="text" class="autodate" name="start_date" id="start_date" placeholder="DD/MM/YYYY"><br><br>
            </div> 
          </div>         
        </div> 
        <!-- card -->  
      </div>
    </div>
    <div class="col-md-12" style="    text-align: right; margin-bottom: 6px;">
      <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
    </div>
  </form>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
  $(document).ready(function () {
    $('#searchland').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#loader1").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/serach_pcc_land/')}}" + '/' + query,
        type:"POST",
        success:function (data) {
          document.getElementById('datepicker').value='';
          $("#loader1").css("display","none");
          $("#l_list").css("display","block");
          $('#land_list tbody').html(data);
        }
      })
     }else{
       $('#land_list tbody').html(""); 
       $("#l_list").css("display","none");
     }
   });

    $('#additional_charge').on('change',function() { 
      var value = $(this).val();
      var bs = Number(document.getElementById('based_rent').value);
      var tax = Number(document.getElementById('taxes').value);
      var ins = Number(document.getElementById('insurance').value);
      var mainti = Number(document.getElementById('maintanance').value);
      var adi = Number(document.getElementById('additional_charge').value);
      var pay = bs+tax+ins+mainti+adi;
      document.getElementById('netpaybill').value=pay;
    });

    $("input[name$='add_net_payable']").click(function() { 
      var test = $(this).val();
      if(test=='monthly'){
        document.getElementById('add_tag_n').textContent ='Month';
        document.getElementById('add_time_duration').value ='m';
      }else{
       document.getElementById('add_tag_n').textContent ='Year';
       document.getElementById('add_time_duration').value ='yr';
     }
   });
  });

  function alocateland(id) 
  {
   $("#loader1").css("display","block");
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
   $.ajax({
    url: "{{url('land/allocate/pcc/')}}" + '/' + id,
    method: "POST",
    contentType: 'application/json',
    success: function(data) {
      console.log(data)
      document.getElementById("cust_id").value = data.cust_id;
      document.getElementById("c_name").innerText = data.f_name + ' ' + data.l_name;
      document.getElementById("c_email").innerText = data.email;
      document.getElementById("c_mobile").innerText = data.mobile;
      document.getElementById("c_company").innerText = data.company;

      document.getElementById("land_id").value = data.land_id;
      document.getElementById("p_no").innerText = data.plot_no;
      document.getElementById("p_name").innerText = data.land_name;
      document.getElementById("p_size").innerText = data.plot_size+' '+data.uom;
      document.getElementById("sect").innerText = data.area;
      document.getElementById("phas").innerText = data.sector;
      document.getElementById("l_block").innerText = data.block;
      document.getElementById("appli_no").value = data.application_no;
      document.getElementById("appli_date").value = data.application_date;

      $('#alocate_registration').modal('show');
      $("#loader1").css("display","none");   

    }
  });
 }
</script>

