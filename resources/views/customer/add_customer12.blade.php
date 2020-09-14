<style type="text/css">
  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 23%;
    box-shadow: 0px 0px 0px #959595;
  }
</style>
<div class="content-page">
 <!-- Start content -->
 <div class="content">
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row" id="dashboard-row">
     <div class="col-sm-12">
      <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;@if(@$editData->id!='') Update Customer Info @else Create Customer @endif / <a href="javascript::void(0);"  onclick="history.back();" >Back</a></h4>
      <ol class="breadcrumb pull-right">
        <li><a href="{{ URL::to('home') }}">Home</a></li>
        <li><a href="">Customer</a></li>
        <li class="active">Add Customer</li>
      </ol>
    </div>
    <script>
     $(document).ready(function(){
       $("#llp").css("display","none"); 
       try{
        $('#e_company_type').change(function(){
          if($('#e_company_type').val() == 'llp' || $('#e_company_type').val() == 'ltd') {
            $("#ltd").css("display","none");
            $("#llp").css("display","block");          
          } else {
            $("#ltd").css("display","block");
            $("#llp").css("display","none"); 
          } 
        });
      }catch(err)
      {
        var error =  err.message;
        alert(error)
      }
    });    
  </script>

</div><hr class="new2">
<div class="row">  
  <div class="col-md-12">
    <div class="card"style="border-left: 3px solid #386900;box-shadow: 4px 4px #b1b1b1;">
      <div class="card-header" style="background: linear-gradient(to left, #bee9fd, #ffffff 50%, #ffffff, #ffffff 75%);">
       <div class="card-body"> 
        <div class="row gutters justify-content-left">
         <form action="{{ URL::to('land/customer/add')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
          @csrf
          <input type="hidden" name="ids" value="{{$editData->id ?? ''}}">
          <input type="hidden" name="preCustId" id="preCustId" value="">
          <input type="hidden" name="pageName" value="maincustomer">

          <div class="card-body">
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group" style="margin-top: -70px;">
                  (<b style="color:#E94810">Note:- </b>If you have already given information, then you search your information by name, email, mobile and select it from the relevant records..)<br>(यदि आपने पहले भी  जानकारी दे चुके  है, तो आप अपनी जानकारी नाम, ईमेल, मोबाइल द्वारा खोजे  और संबंधित रिकॉर्ड से चुनें।)<br>
                </div>
              </div><br>
              <div class="col-md-6">
               <div class="input-group" style="margin-top: -47px;">
                <input type="text" name="cust_name" id="searchcustomer" class="form-control" placeholder="Search" autocomplete="off" >
                <input type="hidden" name="cust_id" id="cust_id" value="{{Session::get('RegCustData')->id ?? ''}}">
                <span class="input-group-prepend">
                  <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>&nbsp;
                </span>
              </div>
              <div  id="customer_list" >  </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              @if(@count(@$shareholderData)!=0)

              @else
              <div class="row">
                <div class="col-md-4"> 
                  <div class="form-group"> 
                    <label for="field-6" class="control-label">Company Type<font color="red">*</font></label>
                    <select class="form-control"  name="company_type" id="e_company_type" required="">
                     @if(@$editData->company_type=='proprietorship')
                     <option  @if(@$editData->company_type=='proprietorship') {{'selected'}} @endif value="proprietorship" >Proprietorship</option>
                     @else                         
                     <option value="">Select Company Type</option>
                     <option @if(@$editData->company_type=='ltd') {{'selected'}} @endif value="ltd"  >PVT.LTD</option>
                     <option  @if(@$editData->company_type=='llp') {{'selected'}} @endif value="llp">LLP</option>
                     <option  @if(@$editData->company_type=='proprietorship') {{'selected'}} @endif value="proprietorship" >Proprietorship</option>
                     @endif
                   </select>
                 </div> 
               </div>  
               <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-6" class="control-label">Company Name<font color="red">*</font></label> 
                  <input type="text" class="form-control" value="{{$editData->company ?? ''}}"  name="company" id="company" required="" aria-required="true" placeholder="" style="width:211%;">
                </div> 
              </div> &nbsp;&nbsp;
              <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-6" class="control-label">Company Reg. No <font color="red">*</font></label> 
                  <input type="text" class="form-control" value="{{$editData->company_reg_no ?? ''}}"  name="company_reg_no" id="company_reg_no"  placeholder="" style="width:211%;">
                </div> 
              </div>                                      
            </div>
            @endif              
            <!-- Start LTD & Proprietorship -->
            @if(@count(@$shareholderData)!=0)
            <form action="{{ URL::to('land/customer/add')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
              @csrf
              <input type="hidden" name="ids" value="{{$editData->id ?? ''}}">
              <input type="hidden" name="pageName" value="maincustomer">
              <div class="row">
                <div class="col-md-4"> 
                  <div class="form-group"> 
                   <label for="field-6" class="control-label">Company Type<font color="red">*</font></label> 
                   @if(@count(@$shareholderData)!=0)
                   <select class="form-control"  name="company_type" id="" required="">
                     <option value="">Select Company Type</option>
                     <option @if(@$editData->company_type=='ltd') {{'selected'}} @endif value="ltd"  >PVT.LTD</option>
                     <option  @if(@$editData->company_type=='llp') {{'selected'}} @endif value="llp">LLP</option>
                   </select>
                   @else
                   <select class="form-control"  name="company_type" id="e_company_type" required="">
                     @if(@$editData->company_type=='proprietorship')
                     <option  @if(@$editData->company_type=='proprietorship') {{'selected'}} @endif value="proprietorship" >Proprietorship</option>
                     @else                         
                     <option value="">Select Company Type</option>
                     <option @if(@$editData->company_type=='ltd') {{'selected'}} @endif value="ltd"  >PVT.LTD</option>
                     <option  @if(@$editData->company_type=='llp') {{'selected'}} @endif value="llp">LLP</option>
                     <option  @if(@$editData->company_type=='proprietorship') {{'selected'}} @endif value="proprietorship" >Proprietorship</option>
                     @endif
                     @endif
                   </select>
                 </div> 
               </div>  
               <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-6" class="control-label">Company Name<font color="red">*</font></label> 
                  <input type="text" class="form-control" value="{{$editData->company ?? ''}}"  name="company" id="company" required="" aria-required="true" placeholder="" style="width:211%;">
                </div> 
              </div> &nbsp;&nbsp;
              <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-6" class="control-label">Company Reg. No <font color="red">*</font></label> 
                  <input type="text" class="form-control" value="{{$editData->company_reg_no ?? ''}}"  name="company_reg_no" id="company_reg_no"  placeholder="" style="width:211%;">
                </div> 
              </div>                                      
            </div>
            <div class="col-md-12" style="margin-left: -10px;"> 
              <div class="form-group"> 
               <label for="field-7" class="control-label">Address</label> 
               <textarea class="form-control" id="address" name="address" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required > {{$editData->address ?? ''}}</textarea> 
             </div> 
           </div> 
           <div class="col-sm-12">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-success">
                  <h3 class="card-title text-white">LLP Director/Share Holder's Info</h3>
                </div>
                <div class="card-body">
                 <table class="form-table" id="customFields">
                  <tr valign="top">
                    <th scope="row"><label for="customFieldName">Director</label></th>
                    <td>
                      <input style="width: 103px;" type="text" class="code" id="customFieldName" value="{{@$editData->f_name ?? ''}}" name="f_name2"  required=""  placeholder="First Name" /> &nbsp;
                      <input style="width: 103px;" type="text" class="code" id="customFieldName" name="l_name2" value="{{@$editData->l_name ?? ''}}" required=""  placeholder="Last Name" /> &nbsp;
                      <input style="width: 100px;" type="text" class="code" id="customFieldName" name="occupation2" value="{{@$editData->occupation ?? ''}}" required=""  placeholder="Occupation " /> &nbsp;
                      <input style="width: 99px;" type="text" class="code dateFilter" id="customFieldName" name="dob2" value="{{@$editData->dob ?? ''}}" required=""  placeholder="DOB" /> &nbsp;
                      <input style="width: 99px;" class="code" id="customFieldName" type="number" value="{{@$editData->mobile ?? ''}}" name="mobile2" maxlength="10" minlength="10" min="2" required=""  placeholder="Contact" /> &nbsp;
                      <input style="width: 136px;" type="email" class="code" id="customFieldName" name="email2" value="{{@$editData->email ?? ''}}" required=""  placeholder="Email " /> &nbsp;
                      <input style="width: 100px;" type="text" class="code" id="customFieldName" name="svalue1" value="{{@$editData->svalue ?? ''}}" required=""  placeholder="Share Value" /> &nbsp;
                      <input style="width: 60px;" type="text" class="code" id="customFieldName" name="svalue_percentage1" value="{{@$editData->svalue_percentage ?? ''}}" required="" max="100" min="2"  placeholder="Share Value(%)" /> &nbsp;
                      <input style="" type="radio" class="code" id="customFieldName"  name="gender2" id="genader"  @if(@$editData->gender=='male') {{'checked'}} @endif value="male" />Male &nbsp;
                      <input style="" type="radio" class="code" id="customFieldName" name="gender2" id="genader"  @if(@$editData->gender=='female') {{'checked'}} @endif value="female" />Female &nbsp;
                      <!--  <a href="javascript::void(0);" class="addCF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Share Holders " onclick="addIncome()"><button type="button" class="btn btn-primary" >Add Share Holder</button></a> -->
                    </td>
                  </tr>
                  @foreach($shareholderData as $key =>$val)

                  <tr valign="top">
                    <th scope="row">
                      <label for="customFieldName">Share Holder</label>
                    </th>
                    <td>
                      <input type="hidden" name="cid[]" value="{{$val->id ?? ''}}">
                      <input style="width: 103px;" type="text" class="code" id="" name="s_fname[]" value="{{$val->f_name ?? ''}}" placeholder="First Name" />
                      <input style="width: 103px;" type="text" class="code" id="" name="s_lname[]" value="{{$val->l_name ?? ''}}" placeholder="Last Name" />
                      <input style="width: 110px;" type="text" class="code" id="" name="s_mobile[]" value="{{$val->mobile ?? ''}}" placeholder="Contact " />
                      <input style="width: 163px;" type="email" class="code s_email" onblur="other()" id="s_email" name="s_email[]" value="{{$val->email ?? ''}}" placeholder="Email " />
                      <input style="width: 100px;" type="text" class="code" id="" name="s_svalue[]" value="{{$val->s_svalue ?? ''}}" required="" aria-required="true"  placeholder="Share Value" /> 
                      <input style="width: 60px;" type="text" class="code" id="" name="s_svalue_percentage[]" value="{{$val->svalue_percentage ?? ''}}" required="" aria-required="true" min="1" max="100" placeholder="Share Value(%)" />&nbsp;&nbsp;<!-- <a href="javascript::void(0);" data-toggle="tooltip" data-placement="top" class="remCF" title="Remove"  ><i class="fas fa-times"  style="color:red;"></i></a> -->
                    </td>
                  </tr>
                  @endforeach

                </table>
              </div><hr class="new2">
            </div>
            <!-- Update Share holder's Info -->
            <div class="col-md-12" style="    text-align: left; margin-bottom: 6px;">
              <button type="submit"   class="btn btn-primary waves-effect waves-light">@if(@$editData->id!='') Update @else Create @endif</button>
            </div>
          </div>
        </div>
      </form>
      @else
      <div id="ltd"  >
        <div class="row" id="s_f_name"> 
          <div class="col-md-4"> 
            <div class="form-group"> 
             <label for="field-1" class="control-label">First Name <font color="red">*</font></label> 
             <input type="text" class="form-control" value="{{@$editData->f_name ?? ''}}" name="f_name" id="f_name" required="" aria-required="true" placeholder=""> 
           </div> 
         </div> 
         <div class="col-md-4"> 
          <div class="form-group"> 
            <label for="field-2" class="control-label">Last Name <font color="red">*</font></label> 
            <input type="text" class="form-control" value="{{$editData->l_name ?? ''}}"  name="l_name" id="l_name" required="" aria-required="true" placeholder=""> 
          </div> 
        </div> 
        <div class="col-md-4"> 
          <div class="form-group"> 
           <label for="field-3" class="control-label">Occupation <font color="red">*</font></label> 
           <input type="text" class="form-control" value="{{$editData->occupation ?? ''}}"  name="occupation" id="occupation" required="" aria-required="true" placeholder="">
         </div> 
       </div> 
     </div>
     <div class="row"> 
      <div class="col-md-4"> 
        <div class="form-group"> 
         <label for="field-4" class="control-label">DOB <font color="red">*</font></label> 
         <input type="text" class="form-control dateFilter"  value="{{$editData->dob ?? ''}}" name="dob" id="dob" required="" aria-required="true" placeholder="DD-MM-YYYY"> 
       </div> 
     </div> 
     <div class="col-md-4"> 
      <div class="form-group"> 
        <label for="field-5" class="control-label">Contact <font color="red">*</font></label> 
        <input  class="form-control onlyNumber" type="text" maxlength="10" minlength="10" min="1" value="{{$editData->mobile ?? ''}}"  name="mobile" id="mobile" required="" aria-required="true" placeholder=""> 
      </div> 
    </div>  
    <div class="col-md-4"> 
      <div class="form-group"> 
        <label for="field-4" class="control-label">Land Line No <font color="red">(optional)</font></label> 
        <input type="text" class="form-control onlyNumber"  value="{{$editData->landline_no ?? ''}}" name="landline_no" id="landline_no"  placeholder=""> 
      </div> 
    </div>        
  </div>
  <div class="row"> 
    <div class="col-md-4"> 
      <div class="form-group no-margin"> 
       <label for="field-6" class="control-label">Email <font color="red">*</font></label> 
       <input type="email" class="form-control" value="{{$editData->email ?? ''}}" name="email" id="email" required="" aria-required="true" placeholder="">
     </div> 
   </div> 

   <div class="col-md-4" id="s_gender"> 
    <div class="form-group"> 
      <p class="control-label"><b>Gender</b> <font color="red">*</font></p>
      <div class="radio radio-info form-check-inline">
        <input type="radio" @if(@$editData->gender=='male') {{'checked'}} @endif name="gender" id="genader" value="male">
        <label for="inlineRadio1"> Male </label>
      </div>
      <div class="radio radio-info form-check-inline">
        <input type="radio" @if(@$editData->gender=='female') {{'checked'}} @endif name="gender" id="genader" value="female">
        <label for="inlineRadio1"> Female </label>
      </div>
    </div>  
  </div> 
</div> 
<div class="col-md-12" style="margin-left: -10px;"> 
  <div class="form-group"> 
   <label for="field-7" class="control-label">Address <font color="red">(optional)</font></label> 
   <textarea class="form-control" id="address" name="address" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px"  > {{$editData->address ?? ''}}</textarea> 
 </div> 
</div> 
<div class="col-md-12" style="margin-left: -10px;"> 
  <div class="form-group"> 
    <label for="field-7" class="control-label">Company Address <font color="red">*</font></label> 
    <textarea class="form-control" id="company_addrerss" name="company_addrerss" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required /> {{$editData->company_addrerss ?? ''}}</textarea> 
  </div> 
</div> 
</div>
@endif
<!-- LTD END -->
<div class="col-sm-12">
 <div class="col-lg-12" id="llp" style="display: none;">
  <div class="card">
    <div class="card-header bg-success">
      <h3 class="card-title text-white">LLP Director/Share Holder's Info</h3>
    </div>

    <div class="card-body">
     <table class="form-table" id="customFields">
      <tr valign="top">
        <th scope="row"><label for="customFieldName">Director</label></th>
        <td>
          <input style="width: 103px;" type="text" class="code" id="customFieldName" name="f_name1" value="" required=""  placeholder="First Name" /> &nbsp;
          <input style="width: 103px;" type="text" class="code" id="customFieldName" name="l_name1" value="" required=""  placeholder="Last Name" /> &nbsp;
          <input style="width: 96px;" type="text" class="code" id="customFieldName" name="occupation1" value="" required=""  placeholder="Occupation " /> &nbsp;
          <input style="width: 78px;" type="text" class="code dateFilter" id="customFieldName" name="dob1" value="" required=""  placeholder="DOB" /> &nbsp;
          <input style="width: 99px;" class="code" id="customFieldName" type="number" name="mobile1" maxlength="10" minlength="10" min="1" required=""  placeholder="Contact" /> &nbsp;
          <input style="width: 136px;" type="email" class="code" id="customFieldName" name="email1" value="" required=""  placeholder="Email " /> &nbsp;
          <input style="width: 136px;" type="text" class="code" id="customFieldName" name="svalue" value="" required=""  placeholder="Share Value" /> &nbsp;
          <input style="width: 136px;" type="text" class="code" id="customFieldName" name="svalue_percentage" value="" required="" max="100" min="1"  placeholder="Share Value(%)" /> &nbsp;
          <input style="" type="radio" class="code" id="customFieldName" name="gender1" id="genader" value="male" />Male &nbsp;
          <input style="" type="radio" class="code" id="customFieldName" name="gender1" id="genader" value="female" />Female &nbsp;
          <a href="javascript::void(0);" class="addCF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Share Holders " onclick="addIncome()"><button type="button" class="btn btn-primary" >Add Share Holder</button></a>
        </td>
      </tr>
    </table>
    <div class="col-md-12" style="margin-left: -10px;"> 
      <div class="form-group"> 
       <label for="field-7" class="control-label">Address</label> 
       <textarea class="form-control" id="address" name="address" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required > {{$editData->address ?? ''}}</textarea> 
     </div> 
   </div> 
 </div>
</div>
</div>
</div>
@if(@count(@$shareholderData)!=0)
@else
<div class="col-md-12" style="    text-align: left; margin-bottom: 6px;">
  <button type="submit"   class="btn btn-primary waves-effect waves-light">@if(@$editData->id!='') Update @else Create @endif</button>
</div>
</form>

@endif
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
 $('#email').blur(function() {
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  if (testEmail.test(this.value))
  { 
    alert('Success');
  }else{ 
    alert('Please Enter Correct Email Format');  
  }
});

 function other() {
  var currentdate = moment().format('DD-MM-YYYY');
  document.getElementsByClassName('dateFilter').value = currentdate;

  var today1 = new Date();
  $('.dateFilter').datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true,
    endDate: "today",
    maxDate: today1
  }).on('changeDate', function(ev) {
    $(this).datepicker('hide');
  });
  $('.dateFilter').keyup(function() {
    if (this.value.match(/[^0-9]/g)) {
      this.value = this.value.replace(/[^0-9^-]/g, '');
    }
  });
}

$('.s_email').blur(function() {
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  if (testEmail.test(this.value))
  { 
    alert('Success');
  }else{ 
    alert('Please Enter Correct Email Format');  
  }
});

function addcustomer(id)
{ 
 try{
   $("#loader1").css("display","block");
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
   $.ajax({
    url: "{{url('land/customer/add-pcc/')}}" + '/' + id,
    method: "POST",
    contentType: 'application/json',
    success: function(data) {
      console.log(data)        

      $("#loader1").css("display","none");
      var name = data.f_name + ' ' + data.l_name;
      var email  = data.email;
      var mobile = data.mobile;
      var dob = data.company;
      var occupation = data.occupation;
      var address = data.address;
      var gender = data.gender;
      var landline = data.landline_no;
      document.getElementById("preCustId").value = data.id;
      document.getElementById("f_name").value = data.f_name;
      document.getElementById("l_name").value = data.l_name;
      document.getElementById("email").value = email;
      document.getElementById("mobile").value = mobile;
      document.getElementById("dob").value = dob;
      document.getElementById("landline_no").value = landline;
      document.getElementById("occupation").value = occupation;
      document.getElementById("address").innerHTML = address;

      document.getElementById("searchcustomer").style.color = "#FF0000";
      document.getElementById("searchcustomer").value = name;

      if (gender == 'male') {
        $('input[name=gender][value=' + gender + ']').prop('checked', true);
      } else {
        $('input[name=gender][value=' + gender + ']').prop('checked', true);
      }
    }
  });

 }catch(err)
 {
  var error =  err.message;
  alert(error)
}
}

</script>

<script type="text/javascript">
  $(document).ready(function(){
   $('#searchcustomer').on('keyup',function() {
    try{
      var query = $(this).val();
      if (query != '') { 
        document.getElementById("searchcustomer").style.color = "";
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
   }catch(err)
   {
    var error =  err.message;
    alert(error)
  }
});
   $(document).on('click', 'td', function(){
    var value = $(this).text();
    $('#customer_list').html("");
  });
   $(".addCF").click(function(){
    $("#customFields").append('<tr valign="top"><th scope="row"><label for="customFieldName">Share Holder</label></th><td><input style="width: 103px;" type="text" class="code" id="" name="s_fname[]" value="" placeholder="First Name" /> &nbsp;<input style="width: 103px;" type="text" class="code" id="" name="s_lname[]" value="" placeholder="Last Name" /> &nbsp;<input style="width: 99px;" type="text" class="code" id="" name="s_mobile[]" value="" placeholder="Contact " /> &nbsp;<input style="width: 136px;" type="email" class="code" onblur="other()" id="s_email" name="s_email[]" value="" placeholder="Email " /> &nbsp;<input style="width: 136px;" type="text" class="code" id="" name="s_svalue[]" value="" required="" aria-required="true"  placeholder="Share Value" /> &nbsp;<input style="width: 136px;" type="text" class="code" id="" name="s_svalue_percentage[]" value="" required="" aria-required="true" min="1" max="100" placeholder="Share Value(%)" />&nbsp;&nbsp;<a href="javascript::void(0);" data-toggle="tooltip" data-placement="top" class="remCF" title="Remove"  ><i class="fas fa-times"  style="color:red;"></i></a></td></tr>');
  });
   $("#customFields").on('click','.remCF',function(){
    $(this).parent().parent().remove();
  });

 });
</script>

