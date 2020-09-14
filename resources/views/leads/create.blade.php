<link rel="stylesheet" href="https://www.jquery-az.com/jquery/style-2.css">
<link rel="stylesheet" href="https://www.jquery-az.com/jquery/css/intlTelInput/intlTelInput.css">
<link rel="stylesheet" href="https://www.jquery-az.com/jquery/css/intlTelInput//demo.css">
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Create Lead / <a href="javascript::void(0);" onclick="history.back()">Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="{{url('leads')}}">Leads</a></li>
            <li class="active">Create Lead</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <!-- Basic example -->
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header"><h3 class="card-title">Lead Details</h3></div>
            <div class="card-body">
             <form action="{{url('leads/create')}}" method="post"  id="FormValidation" >
              @csrf
              <input type="hidden" name="ids" value="{{@$results->id ?? ''}}">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <p class="control-label"><b>Lead Status</b>
                        </p>
                        <div class="radio radio-info form-check-inline">
                          <input type="radio" value="Unqualified" name="lead_status" checked="checked" >
                          <label for="inlineRadio1">unqualified</label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                          <input type="radio" id="" value="new" name="lead_status">
                          <label for="inlineRadio1">New</label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                          <input type="radio" value="working" name="lead_status">
                          <label for="inlineRadio1">Working</label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                          <input type="radio" id="" value="nurturing" name="lead_status">
                          <label for="inlineRadio1">Nurturing</label>
                        </div>
                        <div class="radio radio-info form-check-inline">
                          <input type="radio" id="" value="qualified" name="lead_status">
                          <label for="inlineRadio1">Qualified</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="field-2" class="control-label">Lead Owner <font color="red">*</font>
                        </label>
                        <select class="select2 form-control" required=""  aria-required="true" id="lead_owner" name="lead_owner" >
                          <option value="">-Select-</option>
                          @foreach($users as $key => $user)                          
                          <option @if(@$results->lead_owner=='admin') selected="selected"  @endif value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">                   
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="field-2" class="control-label">Customer Title</label>
                        <div class="form-group">
                          <select class="select2 form-control" required="" aria-required="true" id="title" name="title" >
                            <option value="">-Select-</option>
                            <option  @if(@$results->title=='ceo') selected="selected"  @endif value="ceo">CEO</option>
                            <option  @if(@$results->title=='vp') selected="selected"  @endif value="vp">VP</option>
                            <option  @if(@$results->title=='manager') selected="selected"  @endif value="manager">Manager</option>
                            <option  @if(@$results->title=='sales manager') selected="selected"  @endif value="sales manager">Sales Manager</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
                       <label class="control-label" >First Name</label>
                       <input type="text" class="form-control ss3" id="first_name" value="{{@$results->first_name ?? ''}}" name="first_name" placeholder="First Name " required="" aria-required="true" >
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                      <label class="control-label" >Last Name</label>
                      <input type="text" class="form-control ss5" id="last_name" name="last_name" value="{{@$results->last_name ?? ''}}" placeholder="Last Name" required="" aria-required="true" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label">Company <font color="red">*</font>
                      </label>
                      <input type="text" name="company_name" id="company_name" value="{{@$results->company_name ?? ''}}"  class="form-control"  placeholder="Company Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label">Website</label>
                      <input type="text" name="website" id="website" value="{{@$results->website ?? ''}}" class="form-control"  placeholder="www.google.com">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label">Email <font color="red">*</font>
                      </label>
                      <input type="email" name="email" id="email" value="{{@$results->email ?? ''}}" class="form-control" required=""
                      aria-required="true" onblur="validateEmail(this);" placeholder="abc@gmail.com" autocorrect="on" autocapitalize="off">
                      <strong id="emailResponse" style="font-size:12px;"></strong>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label">Fax <font color="red">*</font>
                      </label>
                      <input type="text" name="fax" id="fax" maxlength="17" value="{{@$results->fax ?? ''}}" class="form-control"  placeholder="Fax no.">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label">Mobile Number <font color="red">*</font>
                      </label>
                      <input type="text" id="mobile1" name="mobile" value="{{@$results->mobile ?? ''}}"  class="form-control" required=""
                      aria-required="true" placeholder="mobile no." onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  maxlength="10" title="Mobile number with 0-9 and remaing 9 digit with 0-9" autocorrect="on" autocapitalize="off">
                      <strong id="mobileResponse" style="font-size:12px;"></strong>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label">Phone Number <font color="red">*</font>
                      </label>
                      <input type="text" name="phone" id="phone1" value="{{@$results->phone ?? ''}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  maxlength="15"  class="form-control" required=""
                      aria-required="true" placeholder="phone no.">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label sett">No. of Employee <font color="red">*</font>
                      </label>
                      <input type="number" id="n_o_employee" value="{{@$results->n_o_employee ?? ''}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  maxlength="5"  class="form-control" name="n_o_employee" placeholder="NOP"
                      min="0">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label">Lead Source</label>
                      <select class="select2 form-control" name="lead_source" id="lead_source" value="{{@$results->lead_source ?? ''}}"  required="" aria-required="true">
                        <option value="">Choose</option>
                        <option  @if(@$results->lead_source=='google adword') selected="selected"  @endif value="google adword">Google adword</option>
                        <option  @if(@$results->lead_source=='partner') selected="selected"  @endif value="partner">Partner</option>
                        <option  @if(@$results->lead_source=='employee') selected="selected"  @endif value="employee">Employee</option>
                        <option  @if(@$results->lead_source=='other') selected="selected"  @endif value="other">Other</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="field-2" class="control-label sett">Annual Revenue <font color="red">*</font>
                      </label>
                      <input type="text" name="annual_revenue" id="annual_revenue" value="{{@$results->annual_revenue ?? ''}}" class="form-control"  placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <p class="control-label"><b>Rating</b>
                      </p>
                      <div class="radio radio-info form-check-inline">
                        <input type="radio" value="cold" name="rating" checked="checked">
                        <label for="inlineRadio1">Cold</label>
                      </div>
                      <div class="radio radio-info form-check-inline">
                        <input type="radio" id="demo" value="hot" name="rating">
                        <label for="inlineRadio1">Hot</label>
                      </div>
                      <div class="radio radio-info form-check-inline">
                        <input type="radio" value="warm" name="rating">
                        <label for="inlineRadio1">Warm</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
               <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="field-2" class="control-label">Address <font color="red">*</font>
                    </label>
                    <textarea class="form-control" rows="3" id="address1" name="address1"  placeholder="Address" required>{{@$results->address1 ?? ''}}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="field-2" class="control-label"></label>
                    <input type="text" class="form-control" value="{{$results->city_distt ?? ''}}" name="city_distt" id="city_distt" required="" aria-required="true" placeholder="City / District" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="field-2" class="control-label"></label>
                    <input type="text" class="form-control" value="{{$results->state_province ?? ''}}" name="state_province" id="state_province" required="" aria-required="true" placeholder="State / Province" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="field-2" class="control-label"></label>
                    <input type="text" class="form-control" value="{{$results->pincode ?? ''}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  maxlength="6" name="pincode" id="pincode" required="" aria-required="true" placeholder="Pincode ">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="field-2" class="control-label"></label>
                    <select class="select2 form-control" name="country" id="country" required="" aria-required="true">
                      <option value="">Choose Country</option>
                      <option @if(@$results->country=='india') selected="selected"  @endif value="india">India</option>
                      <option value=""> </option>
                      <option value=""> </option>
                      <option value=""> </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="field-2" class="control-label">Description</label>
                    <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description"  required >{{@$results->description ?? ''}}</textarea>
                  </div>
                </div>
              </div>
            </div>           
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group" style="float: right;">              
               <button class="btn btn-success waves-effect waves-light flt" type="submit"
               style="margin-right: 10px;">Submit</button>               
               <button class="btn btn-secondary waves-effect flt" type="reset">Reset</button>
             </div>
           </div>
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
<script>
  function validateEmail(emailField){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField.value) == false)
    {
      $("#emailResponse").html('<font color="red">Please Enter  Valid Email</font>');
      $("#email").focus();
      return false;
    }else{
      $("#emailResponse").html('<font color="green"></font>');

      return true;
    }
    return true;
  }
</script>
<script>
  function validatePhone(phoneField){
    var reg = /^\d{10}$/;
    if (reg.test(phoneField.value) == false && phoneField.length==10)
    { 
      $("#mobileResponse").html('<font color="green"></font>');
      return true;
    }else{
      $("#mobileResponse").html('<font color="red">Please Enter  Valid 9 digit with 0-9</font>');
      $("#mobile").focus();
      return false;
    }
    return true;
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://www.jquery-az.com/jquery/js/intlTelInput/intlTelInput.js"></script>
<script>
  $("#phone").intlTelInput({
  });
  $("#mobile").intlTelInput({
  });
</script>

