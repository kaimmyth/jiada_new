<style>
    .card .card-header {
      padding: 1px 20px;
      border: none;
    }
    .col-sm-12{
      padding-left: 0px !important;
      padding-right: 8px !important;
    }
  
    @media screen and (max-width: 1366px) {
     .inp{
      width: 52% !important;
    } 
  
    .inp2{
      width: 59% !important;
    } 
  
    .frs{
      width: 172px !important;
    }
    label {
      font-weight: 500;
      padding-right: 0px !important;
      font-family: "Roboto", sans-serif;
    }
  }
  </style>
  <style type="text/css">
   .custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 0.1rem;
  }
  .f-padding{
    margin-bottom: 10px;
  }
  
  .justify-content-center {
  
    -ms-flex-pack: center!important;
  
    justify-content: inherit !important;
  
  }
  .wizard, .tabcontrol {
    display: block;
    width: 100%;
    height: auto !important;
    overflow: scroll;
  }
  
  .wizard > .steps > ul > li {
    width: 16%;
  }
  
  @media screen and (max-width: 1366px) {
    .wizard > .steps > ul > li {
      width: 16% !important;
      font-size: 11px !important;
    }
  }
  .wizard > .content {
    background: #ffffff;
    min-height: 500px !important;
    padding: 20px;
  }
  
  .side{
    margin-left: 8px;
  }
  </style>
  <div class="content-page">             
    <div class="content">                                             
      <!-- Start content -->             
      <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row" id="dashboard-row">
          <div class="col-sm-12">
            <h4 class="pull-left page-title"  style="color: #000;font-weight:200;">&nbsp;<i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Registration : Edit <a href="javascript::void(0);"  onclick="history.back();" >Back</a></h4>
            <ol class="breadcrumb pull-right">
              <!-- <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('land/registration')}}">Registration</a></li>
              <li class="active"> Registration : Edit</li> -->
            </ol>
          </div>
        </div><hr class="new2">
  
        <div class="row" id="default-form">
          <div class="col-lg-12">
           
          <div class="card"style="border-left: 3px solid #386900;box-shadow: 4px 4px #b1b1b1;">
            <div class="card-header" style="background: linear-gradient(to left, #dbf2fd, #ffffff 50%, #ffffff, #ffffff 75%);">
              <form action="{{ URL::to('land/editSave/registration')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
                @csrf
                <div class="card-body" >
                  <h4 style="text-align: center;" ><span id="msg" style="color: #F0560A;"></span></h4>
                  <p style="font-size: 17px; font-weight: 700;">Land Details</p>
                  <!-- <div class="col-md-5">
                    <div class="row form-group">
                      <div class="col-sm-7">
                        <div class="input-group">
                          <input type="text"id="searchland" name="land_name" class="form-control" placeholder="Search Land">k
                          <input type="hidden" name="land_id"  id="land_id">
                          <span class="input-group-prepend">
                            <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button> &nbsp;
                          </span>
                        </div>
                        <div id="land_list" ></div>
                      </div>
                    </div> 
                  </div> -->
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <input type="hidden" name="land_id"  id="land_id">
                        <p>Plot No. : <b style="color: #F0560A;" id="p_no">{{$toReturn['lease_details']->plot_no}}</b></p>
                        <!-- <p>Plot No. : <input type="text" name="p_no" value="{{$toReturn['lease_details']->plot_no}}" id="p_no"></p> -->
                        <input type="hidden" name="land_ids" value="{{$toReturn['lease_details']->land_id}}" id="land_ids">
                      </div>
                      <div class="col-md-4">
                        <p>Plot Name :  <b style="color: #F0560A;" id="p_name">{{$toReturn['lease_details']->land_name}}</b></p>
                        <!-- <p>Plot Name :   <input type="text" name="p_name" value="{{$toReturn['lease_details']->land_name}}" id="p_name"></p> -->
                      </div>
                      <div class="col-md-4">
                        <p>Size :  <b style="color: #F0560A;" id="p_size">{{$toReturn['lease_details']->plot_size}}</b></p>
                        <!-- <p>Size :  <input type="text" name="p_size" value="{{$toReturn['lease_details']->plot_size}}" id="p_size"></p> -->
                        <input type="hidden" name="" id="p_size2"  >
                      </div>
                      <div class="col-md-4">
                        <!-- <p><b style="color: #0AACF0;">Possesion Size  <input type="text" readonly placeholder="Enter value" value="{{$toReturn['lease_details']->dakhal_kabja}}" id="inputval" onkeyup="chkpsige(this.value)"  style="width:72px;" name="dakhal_kabja"><span id="p_uom" style="color: #F70E24;" ></span> </b></p> -->
                        <p>Possesion Size :  <b style="color: #F0560A;" id="inputval">{{$toReturn['lease_details']->dakhal_kabja}}</b></p>
                      </div>
                      <div class="col-md-4">
                        <p>Sector :  <b style="color: #F0560A;" id="sect">{{$toReturn['lease_details']->sector}}</b></p>
                        <!-- <p>Sector :  <input type="text" name="sect" value="{{$toReturn['lease_details']->sector}}" id="sect"></p> -->
                      </div>
                      <div class="col-md-4">
                        <p>Phase :  <b style="color: #F0560A;" id="phas">{{$toReturn['lease_details']->area}}</b></p>
                        <!-- <p>Phase :  <input type="text" name="phas" value="{{$toReturn['lease_details']->area}}" id="phas"></p> -->
                      </div>
                      <div class="col-md-4">
                        <p>Block :  <b style="color: #F0560A;" id="l_block">{{$toReturn['lease_details']->block}}</b></p>
                        <!-- <p>Block :  <input type="text" name="l_block" value="{{$toReturn['lease_details']->block}}" id="l_block"></p> -->
                      </div>
                    </div>
                  </div>
                  <script type="text/javascript">
                    function chkpsige(elem) {
                      var chkval = Number(document.getElementById("p_size2").value);
                      var inputval = Number(document.getElementById("inputval").value);
                      if (chkval>=inputval) {   
                       document.getElementById("msg").innerHTML='';                 
                     }else{
                      document.getElementById("msg").innerHTML='The size of the Possession cannot exceed the actual size...!<br>(कब्ज़ा का आकार वास्तविक आकार से अधिक नहीं कर सकते हैं ।)';
                    }
                  }
                </script>
                <hr>
                <p style="font-size: 17px; font-weight: 700;">Customer Details</p>
                <!-- <span style="color:#F83008; font-weight: 600;" id="NotAloowPccCust"> </span><br><br> -->
                <!-- <div class="col-md-5">
                  <div class="row form-group">
                   <div class="col-sm-7">
                    <div class="input-group" style="margin-top: -47px;">
                      <input type="text" name="cust_name" id="searchcustomer" class="form-control" placeholder="Search Customer" autocomplete="off" >
                      <input type="hidden" name="cust_id" value="{{$toReturn['lease_details']->customerCopmId}}" id="cust_id" >
                      <span class="input-group-prepend">
                        <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button>&nbsp;
                      </span>
                    </div>
                    <div  id="customer_list" ></div>
                  </div>
                </div> 
              </div> -->
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3">
                    <input type="hidden" name="cust_id" value="{{$toReturn['lease_details']->customerCopmId}}" id="cust_id" >
                    <p>Company Name : <b style="color: #F0560A" id="c_name">{{$toReturn['lease_details']->company_name}}</b></p>
                    <!-- <p>Company Name : <input type="text" name="c_name" value="{{$toReturn['lease_details']->company_name}}" id="c_name"></p> -->
                  </div>
                  <div class="col-md-3">
                    <p>Type :  <b style="color: #F0560A" id="c_email">{{$toReturn['lease_details']->company_type}}</b></p>
                    <!-- <p>Type :  <input type="text" name="c_email" value="{{$toReturn['lease_details']->company_type}}" id="c_email"></p> -->
                  </div>
                  <div class="col-md-3">
                    <p>Company Registration No. :  <b style="color: #F0560A" id="c_Regi">{{$toReturn['lease_details']->company_reg_no}}</b></p>
                    <!-- <p>Company Registration No. :  <input type="text" name="c_Regi" value="{{$toReturn['lease_details']->company_reg_no}}" id="c_Regi"></p> -->
                  </div>
                  <div class="col-md-3">
                    <p>Address :  <b style="color: #F0560A" id="c_company">{{$toReturn['lease_details']->address}}</b></p>
                    <!-- <p>Address :  <input type="text" name="c_company" value="{{$toReturn['lease_details']->address}}" id="c_company"></p> -->
                  </div>
                </div>
              </div>
              <hr>
              <script type="text/javascript">
                function chkdate(elem) {
                  var date = document.getElementById("appliDate").value;
                  //$(".selector" ).datepicker("setDate", date);
                  var today = new Date();
                  $('.selector').datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose:true,
                    setDate :date,
                    startDate: date,
                    minDate: date
                  }).on('changeDate', function (ev) {
                    $(this).datepicker('hide');
                  });
                  $('.selector').datepicker('setDate',date);
                  $('.selector').keyup(function () {
                    if (this.value.match(/[^0-9]/g)) {
                      this.value = this.value.replace(/[^0-9^-]/g, '');
                    }        
                  });
                }
              </script>
              <p style="font-size: 17px; font-weight: 700;">Registration Details</p>
              <div class="row">
                <div class="col-md-5">
                  <div class="row form-group">
                    <label class="col-sm-3 control-label" for="example-input-normal">Application No.</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="application_no" placeholder="Application No" value="{{$toReturn['lease_details']->application_no}}" id="application_no"  placeholder="">
                      <input type="hidden" name="ids" value="{{$toReturn['lease_details']->id}}" id="ids" value="">
                    </div>
                  </div> 
                </div>
                <div class="col-md-5">
                  <div class="row form-group">
                    <label class="col-sm-4 control-label" for="example-input-normal">Application Date.</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control datepicker" placeholder="Application Date" value="{{$toReturn['lease_details']->application_date}}" onchange="chkdate(this.value)" id="appliDate"  name="application_date">
                    </div>
                  </div> 
                </div>
              </div>
              <div class="row">
               <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Possession Date</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control  datepicker selector" placeholder="Possession Date" value="{{$toReturn['lease_details']->possession_date}}"   name="possession_date"  placeholder="DD/MM/YYYY">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">SSI Registration Number</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="SSI Registration Number" value="{{$toReturn['lease_details']->ssi_reg_no}}" name="ssi_reg_no" >
                  </div>
                </div> 
              </div>
            </div>
            <div class="row">              
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Registration No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Registration No" value="{{$toReturn['lease_details']->registration_no}}" name="registration_no" placeholder="">
                  </div>
                </div> 
              </div>
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Registration Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control datepicker " placeholder="Registration Date" value="{{$toReturn['lease_details']->registration_date}}" name="registration_date" placeholder="">
                  </div>
                </div> 
              </div>
            </div>
  
            <div class="row">
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Allotment No.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="allotment_no" placeholder="Allotment No" value="{{$toReturn['lease_details']->allotment_no}}" placeholder=""  aria-required="true" >
                  </div>
                </div> 
              </div>
  
              <div class="col-md-5">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Allotment Date.</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control datepicker " placeholder="Allotment Date" name="allotment_date" value="{{$toReturn['lease_details']->allotment_date}}"  aria-required="true" >
                  </div>
                </div> 
              </div>
            </div>
  
            <hr>
  
  
            <p style="font-size: 17px; font-weight: 700;">Lease Details</p>
            <div class="row">
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Base Rent(In Rs) </label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" value="{{$toReturn['lease_details']->based_rent}}" placeholder="₹ 00.00" name="based_rent" id="based_rent"  aria-required="true">
                  </div>
                </div> 
              </div>
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Insurance(In Rs) </label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" value="{{$toReturn['lease_details']->insurance}}" placeholder="₹ 00.00"  name="insurance" id="insurance"  aria-required="true">
                  </div>
                </div> 
              </div>
  
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Maintanance(In Rs) </label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" value="{{$toReturn['lease_details']->maintanance}}" placeholder="₹ 00.00"  name="maintanance" id="maintanance"  aria-required="true">
                  </div>
                </div> 
              </div>
  
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Taxes(In Rs) </label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" value="{{$toReturn['lease_details']->tax}}" placeholder="₹ 00.00"   name="taxes" id="taxes"  aria-required="true">
                  </div>
                </div> 
              </div>
  
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Additional Charge(In Rs) </label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" value="{{$toReturn['lease_details']->additional_charge}}" placeholder="₹ 00.00"  name="additional_charge" id="additional_charge"  aria-required="true">
                  </div>
                </div> 
              </div>
  
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal">Net Payable(In Rs)  </label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" value="{{$toReturn['lease_details']->net_pay}}" placeholder="₹ 00.00"  name="netpaybill" id="netpaybill"  readonly="" aria-required="true">
                  </div>
                </div> 
              </div>
  
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-3 control-label" for="example-input-normal">Payment Frequency</label>
                  <div class="radio radio-info form-check-inline" style="padding-left: 32px;">
                    <input type="radio" id="inlineRadio1" value="monthly" @if($toReturn['lease_details']->net_payable=='monthly') checked="checked" @endif  name="add_net_payable" >
                    <label for="inlineRadio1"> Monthly </label>
                  </div>
                  <div class="radio form-check-inline">
                    <input type="radio" id="inlineRadio2" value="yearly" name="add_net_payable"  @if($toReturn['lease_details']->net_payable=='yearly') checked="checked" @endif  style="width: 195px;">
                    <label for="inlineRadio2"> Yearly </label>
                  </div>
                </div> 
              </div>
  
              <div class="col-md-4">
                <div class="row form-group">
                  <label class="col-sm-4 control-label" for="example-input-normal"><span id="add_tag_n">Year</span>(s) </label>
                  <div class="col-sm-5">
                   <input type="number" class="form-control" name="lease_time" id="lease_time_duration"  value="{{$toReturn['lease_details']->lease_time}}"  style="width: 195px;">
                   <input type="hidden" class="form-control"  name="lease_duration" id="add_time_duration">
                 </div>
               </div> 
             </div>
  
             <div class="col-md-4">
              <div class="row form-group">
                <label class="col-sm-4 control-label" for="example-input-normal">Starting Date </label>
                <div class="col-sm-5">
                 <div class="input-group">
                  <input type="text" class="form-control"  value="{{$toReturn['lease_details']->start_date}}" placeholder="mm/dd/yyyy" name="start_date" id="start_date"  aria-required="true">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="md md-event"></i></span>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <hr>
          <div class="col-md-12" style="text-align: right;">
            <button type="submit" class="btn btn-outline-primary waves-effect waves-light m-b-5">Submit</button>
          </div>
        </div> <!-- card -->  
      </div> <!-- container -->
    </div> <!-- content -->
  </form>
  </div>
  </div>

  

  </div>

  <script type="text/javascript">
    function wizardForm(elem)
    {
      $("#wform").css("display","block");
      $("#default-form").css("display","none");
  
    }
    function defaultForm(elem)
    {
      $("#wform").css("display","none");
      $("#default-form").css("display","block");
    }
  </script>
  
  <script type="text/javascript">
    $(document).ready(function () {
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
  </script>
  
  <script type="text/javascript">
    try{
      function addcustomerModel() { 
       $('#add_customer').modal('show');
     }
     function addlandModel() {
      $('#add_land').modal('show');
    }
  }catch(err)
  {
    var error =  err.message;
    alert(error)
  }
  
  </script>

  
  
  
 
  
  <script type="text/javascript">
   try{
    function Registration() {
  
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
        console.log(data);
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
  
        document.getElementById('e_based_rent').value = data.based_rent;
        document.getElementById('lease_id').value = data.lease_id;
        document.getElementById('e_taxes').value = data.tax;
        document.getElementById('time_duration').value = data.lease_duration;
        document.getElementById('e_insurance').value = data.insurance;
        document.getElementById('e_maintanance').value = data.maintanance;
        document.getElementById('e_additional_charge').value = data.additional_charge;
        document.getElementById('e_netpaybill').value = data.net_pay;
        document.getElementById('e_yers').value = data.lease_time;
        document.getElementById('e_start_date').value = data.start_date;
        var val = data.net_payable;
        if (val == 'monthly') {
          $('input[name=net_payable][value=' + val + ']').prop('checked', true);
        } else {
          $('input[name=net_payable][value=' + val + ']').prop('checked', true);
        }
  
        $("#loader1").css("display","none");
        $('#edit_customer').modal('show');
      }
    });
  }
  }catch(err)
  {
    var error =  err.message;
    alert(error)
  }
  </script>

  <script type="text/javascript">
   $(document).ready(function () {
    $('#e_additional_charge').on('change',function() {
      var value = $(this).val();
      var bs = Number(document.getElementById('e_based_rent').value);
      var tax = Number(document.getElementById('e_taxes').value);
      var ins = Number(document.getElementById('e_insurance').value);
      var mainti = Number(document.getElementById('e_maintanance').value);
      var adi = Number(document.getElementById('e_additional_charge').value);
      var pay = bs+tax+ins+mainti+adi;
      document.getElementById('e_netpaybill').value=pay;
    });
  
  });
  </script>
  
  <script type="text/javascript"> 
    $(document).ready(function() {
      $("input[name$='net_payable']").click(function() {
        var test = $(this).val();
        if(test=='monthly'){
          document.getElementById('tag_n').textContent ='Month';
          document.getElementById('time_duration').value ='m';
        }else{
         document.getElementById('tag_n').textContent ='Year';
         document.getElementById('time_duration').value ='yr';
       }
     });
    });
  </script>
  
  
  <script type="text/javascript">
    $(document).ready(function () {
      $('#searchcustomer').on('keyup',function() {
        var query = $(this).val();
        if (query != '') { 
         $("#loader1").css("display","block");
         $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
         $.ajax({
          url: "{{url('land/serachcustomers/')}}" + '/' + query,
          type:"GET",
          success:function (data) {
            $("#loader1").css("display","none");
            $('#customer_list').html(data);
          }
        })
       }else{
         $('#customer_list').html(""); 
       }
     });
      $(document).on('click', 'td', function(){
        var value = $(this).text();
        $('#customer_list').html("");
      });
  
  
      /* Wizard Customer*/
  
      $('#wsearchcustomer').on('keyup',function() {
        var query = $(this).val();
        if (query != '') { 
         $("#loader1").css("display","block");
         $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
         $.ajax({
          url: "{{url('land/wserachcustomers/')}}" + '/' + query,
          type:"GET",
          success:function (data) {
            $("#loader1").css("display","none");
            $('#wcustomer_list').html(data);
          }
        })
       }else{
         $('#wcustomer_list').html(""); 
       }
     });
      $(document).on('click', 'td', function(){
        var value = $(this).text();
        $('#wcustomer_list').html("");
      });
  
      /* Land */
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
          url: "{{url('land/serachland/')}}" + '/' + query,
          type:"GET",
          success:function (data) {
            $("#loader1").css("display","none");
            $('#land_list').html(data);
          }
        })
       }else{
         $('#land_list').html(""); 
       }
     });
      $(document).on('click', 'td', function(){
        var value = $(this).text();
        $('#land_list').html("");
      });
  
  
      $('#wsearchland').on('keyup',function() {
        var query = $(this).val();
        if (query != '') { 
         $("#loader1").css("display","block");
         $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
         $.ajax({
          url: "{{url('land/wserachland/')}}" + '/' + query,
          type:"GET",
          success:function (data) {
            $("#loader1").css("display","none");
            $('#wland_list').html(data);
          }
        })
       }else{
         $('#wland_list').html(""); 
       }
     });
      $(document).on('click', 'td', function(){
        var value = $(this).text();
        $('#wland_list').html("");
      });
  
  
  
    });
  
    function addcustomer(id) { 
      $("#loader1").css("display","block");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{url('land/customer/add/')}}" + '/' + id,
        method: "POST",
        contentType: 'application/json',
        success: function(data) {
          console.log(data)
          if (data==0)
          {
           $("#loader1").css("display","none");
           document.getElementById("NotAloowPccCust").innerText = 'This client is already registered.';
           document.getElementById("cust_id").value = '';
           document.getElementById("searchcustomer").value ='';
           document.getElementById("c_name").innerText = '';
           document.getElementById("c_email").innerText = '';
           document.getElementById("c_company").innerText = '';
         }else{  
          document.getElementById("NotAloowPccCust").innerText = '';
          $("#loader1").css("display","none");
          var company_reg_no = data.company_reg_no;
          var company  = data.company;
          var company_type = data.company_type;
          var address = data.address;
          document.getElementById("cust_id").value = data.id;
          document.getElementById("searchcustomer").value = company;
          document.getElementById("c_name").innerText = company;
          document.getElementById("c_email").innerText = company_type;
          
          document.getElementById("c_company").innerText = address;
          document.getElementById("c_Regi").innerText = company_reg_no;
  
        }
      }
    });
    }
  
    /* Wizard Customer */
    function waddcustomer(id) { 
      $("#loader1").css("display","block");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{url('land/wcustomer/add/')}}" + '/' + id,
        method: "POST",
        contentType: 'application/json',
        success: function(data) {
          console.log(data)
          $("#loader1").css("display","none");
          var name = data.f_name + ' ' + data.l_name;
          var email  = data.email;
          var mobile = data.mobile;
          var company = data.company;
          document.getElementById("wcust_id").value = data.id;
          document.getElementById("wsearchcustomer").value = name;
          document.getElementById("wc_name").innerText = name;
          document.getElementById("wc_email").innerText = email;
          document.getElementById("wc_mobile").innerText = mobile;
          document.getElementById("wc_company").innerText = company;
        }
      });
    }
  
  
  
    function addland(id) {  
      $("#loader1").css("display","block");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{url('land/land/add/')}}" + '/' + id,
        method: "POST",
        contentType: 'application/json',
        success: function(data) {
          console.log(data)
          $("#loader1").css("display","none");   
          var name = data.land_name;     
          document.getElementById("land_id").value = data.id;
          document.getElementById("searchland").value = name;
          document.getElementById("p_no").innerText = data.plot_no;
          document.getElementById("p_name").innerText = name;
          document.getElementById("p_size").innerText = data.plot_size+' '+data.uom;
          document.getElementById("p_size2").value = data.plot_size;
          document.getElementById("p_uom").innerText = data.uom;
          document.getElementById("sect").innerText = data.area;
          document.getElementById("phas").innerText = data.sector;
          document.getElementById("l_block").innerText = data.block;
  
        }
      });
    }
    function addlandwizard(id) {  
      $("#loader1").css("display","block");
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{url('land/land/wizard/add/')}}" + '/' + id,
        method: "POST",
        contentType: 'application/json',
        success: function(data) {
          console.log(data)
          $("#loader1").css("display","none");   
          var name = data.land_name;     
          document.getElementById("wland_id").value = data.id;
          document.getElementById("wsearchland").value = name;
          document.getElementById("wp_no").innerText = data.plot_no;
          document.getElementById("wp_name").innerText = name;
          document.getElementById("wp_size").innerText = data.plot_size+' '+data.uom;
          document.getElementById("wsect").innerText = data.area;
          document.getElementById("wphas").innerText = data.sector;
          document.getElementById("wl_block").innerText = data.block;
  
        }
      });
    }
  </script>
    <script>
      $( function() {
        $( ".datepicker" ).datepicker();
      } );
      </script>
  