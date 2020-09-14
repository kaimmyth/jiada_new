<style>
    .form-group {
        margin-bottom: 19px;
    }

    #wrapper {
        overflow: hidden;
        width: 100%;
        background: #eaf4fd;
    }

    .content-page>.content {

        background: #eceff1;
    }

    .plss1 {
        float: left;
        font-size: 20px;
        margin-top: 1em;
    }

    .plss4 {
        font-size: 20px;
        margin-top: 1em;
    }

    #mat_web_append {
        width: 70%;
        margin-left: 1em;
    }

    #dashboard-row {
        width: 99%;
        margin-left: 6px;
        background: #e6e6e6;
        padding-right: 10px;
        margin-bottom: 10px;
        height: 46px;
        border-left: 2px solid #004e8c;
        border-right: 2px solid #004e8c;
    }

    @media (max-width: 1280px) {
        .plss1 {
            float: left !important;
            position: relative;
            left: 8%;
            top: -25px;
            font-size: 20px;
        }
    }

    @media (max-width: 1440px) {

        .plss1 {
            float: left !important;
            position: relative;
            left: 8%;
        }

    }
</style>
<!--------------------->
<div class="content-page">
    <div class="content">
        <!-- <div class="container-fluid"> -->
        <!-- <div action="{{ URL::to('land/customer/add')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off"> -->

        @csrf
        <div class="row" id="dashboard-row">
            <div class="col-md-12">
                <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;@if(@$editData->id!='') Update Customer Info @elseif(Auth::user()->users_role==3) Customize Web @else Create Customer @endif / <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                <ol class="breadcrumb pull-right">
                    <!-- @if(Auth::user()->users_role==3)
                    <li><a href="{{ URL::to('home') }}">Dashboard</a></li>
                    <li><a href="">Customize Web</a></li>
                    @else
                    <li><a href="{{ URL::to('home') }}">Home</a></li>
                    <li><a href="">Customer</a></li>
                    <li class="active">Add Customer</li>
                    @endif -->
                </ol>
            </div>
        </div>
        <form action="{{url('add/company_website')}}" method="post" enctype="multipart/form-data">
            @csrf()
            <!-- <div class="tab-pane fade" id="company_website" role="tabpanel" aria-labelledby="nav-material-tab"> -->
            <div class="card" style="padding: 1em;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden" name="comp_id" value="{{$customer_details->id}}">
                            <label for="field-6" class="control-label">Unit Name<font color="red">*</font></label>
                            <input type="text" readonly class="form-control" name="company" id="company" value="{{$customer_details->company}}" required="" aria-required="true" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Unit Website<font color="red">*</font></label>
                            <input type="text" class="form-control" name="company_portal_url" id="company" value="{{$customer_details->company_portal_url}}" required="" aria-required="true" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Unit Description</label>
                            <textarea name="company_description" class="form-control" style="height: 36px;">{{$customer_details->company_description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ashish code Start -->
            <div class="card-body">
                <h4 style="border-bottom: 1px dashed#999;">Welcome Section</h4>
                <div class="card" style="padding: 1em;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Welcome Heading</label>
                                @if($customer_details->welcome_heading)
                                <input type="text" class="form-control" name="welcome_heading" readonly value="{{ $customer_details->welcome_heading}}" aria-required="true">
                                @else
                                <input type="text" class="form-control" name="welcome_heading" value=" " aria-required="true">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Welcome description</label>
                                @if($customer_details->welcome_desc)
                                <textarea class="form-control" rows="4" cols="50" name="welcome_desc" id="welcome_desc">{{$customer_details->welcome_desc}}</textarea>
                                @else
                                <textarea class="form-control" rows="4" cols="50" name="welcome_desc" id="welcome_desc"></textarea>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 style="border-bottom: 1px dashed#999;">Materials</h4>
                <div class="card" style="padding: 1em;">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 0em;padding: 1em;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Material Heading</label>
                                    @if($customer_details->mate_heading)
                                    <input type="text" class="form-control" name="mate_heading" readonly value="{{ $customer_details->mate_heading}}" aria-required="true">
                                    @else
                                    <input type="text" class="form-control" name="mate_heading" value=" " aria-required="true">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Material Head Description</label>
                                    @if($customer_details->mate_description)
                                    <textarea class="form-control" rows="4" cols="50" name="mate_description" id="mate_description">{{$customer_details->mate_description}}</textarea>
                                    @else
                                    <textarea class="form-control" rows="4" cols="50" name="mate_description" placeholder="Material description" id="mate_description"></textarea>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @if(count($web_materials)!=0)
                            @foreach($web_materials as $key_material => $material)
                            <div class="row">
                                <div class="form-group">
                                    <input type="hidden" name="mat_web_id[]" value="{{$material->id}}">
                                    <label for="field-6" class="control-label">Material Name</label>
                                    <input type="text" class="form-control" name="mat_web_name[]" id="mat_web_name" value="{{$material->mat_web_name}}" aria-required="true" placeholder="">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-outline-danger delete-button-web-material"><i class="fa fa-times" title="Remove"></i></button>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="hidden" name="mat_web_id[]">
                                        <label for="field-6" class="control-label">Material Name</label>
                                        <input type="text" class="form-control" name="mat_web_name[]" id="mat_web_name" aria-required="true" placeholder="Material Name">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-outline-danger delete-button-web-material" style="height: 34px;margin-top: 16px;"><i class="fa fa-times" title="Remove"></i></button>
                                </div>

                                <div class=" plss1">
                                    <tr>
                                        <span style="text-align:right;" colspan="2"><i class="fa fa-plus-circle" title="Add More" aria-hidden="true" style="color:green;" onclick="web_mat_section();"></i></span>
                                    </tr>
                                </div>
                                <div id="mat_web_append"></div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!--<div class="card-header">-->
                <h4 style="border-bottom: 1px dashed#999;">Customize Website</h4>
                <!--</div>-->
                <div class="card" style="padding: 1em;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Banner</label>
                                <input type="file" class="form-control" name="comapny_banner" aria-required="true">
                                @if($customer_details->banner)
                                <input type="hidden" name="company_banner_pre" value="{{$customer_details->banner}}">
                                <a href="{{-- url('public/company_doc/'.$customer_details->banner) --}}">{{$customer_details->banner}}</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Company Logo</label>
                                <input type="file" class="form-control" name="comapny_logo" aria-required="true">
                                @if($customer_details->company_logo)
                                <input type="hidden" name="company_logo_pre" value="{{$customer_details->company_logo}}">
                                <a href="{{-- url('public/company_doc/'.$customer_details->company_logo) --}}">{{$customer_details->company_logo}}</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Header Color</label>
                                <input type="text" class="form-control" name="color" id="color" value="{{$customer_details->header_color}}" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Banner Header</label>
                                <input type="text" class="form-control" name="banner_heading" id="header_heading" value="{{$customer_details->banner_heading}}" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Contact Form</font></label>
                                <select class="form-control" name="company_form" aria-required="true">
                                    @if($customer_details->is_contact_form)
                                    <option value="0">disable</option>
                                    <option value="1" selected>enable</option>
                                    @else
                                    <option value="0" selected>disable</option>
                                    <option value="1">enable</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Banner Description</font></label>
                                <textarea class="form-control" rows="1" cols="50" name="banner_description" placeholder="Banner description" id="header_description">@if($customer_details->banner_description) {{$customer_details->banner_description}} @endif</textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <!--<div class="card-header">-->
                @if(Auth::user()->users_role==3)
                <h4 style="border-bottom: 1px dashed#999;">Manage Account</h4>
                @else
                <h4 style="border-bottom: 1px dashed#999;">Create Account</h4>
                @endif

                <!--</div>-->
                <div class="card" style="padding: 1em;">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="field-6" class="control-label">User Name<font color="red">*</font></label>

                                @if($customer_details->login_details != "not found")
                                <input type="text" class="form-control" name="comapny_user" readonly value="{{ $customer_details->login_details->username}}" aria-required="true">
                                @else
                                <input type="text" class="form-control" name="comapny_user" required="" value=" " aria-required="true">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Email<font color="red">*</font></label>
                                @if($customer_details->login_details!='not found')
                                <input type="email" class="form-control" name="comapny_email" readonly aria-required="true" value="{{$customer_details->login_details->email}}">
                                @else
                                <input type="email" class="form-control" name="comapny_email" required="" value=" " aria-required="true">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                @if(Auth::user()->users_role==3)
                                <label for="field-6" class="control-label">Change Password<font color="red">*</font></label>
                                @else
                                <label for="field-6" class="control-label">Password<font color="red">*</font></label>
                                @endif
                                <input type="password" class="form-control" name="comapny_password" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Confirm Password<font color="red">*</font></label>
                                <input type="password" class="form-control" name="comapny_Confirm_password" required="" aria-required="true">
                                <input type="hidden" name="customer_id" value="{{$customer_details->cust_id}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ashish code End -->
            <div class="card-body">
                <!--<div class="card-header">-->
                <h4 style="border-bottom: 1px dashed#999;">Services</h4>
                <!--</div>-->
                @if(count($company_services)!=0)
                @foreach($company_services as $key_services => $value_services)
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="service_id[]" value="{{$value_services->id}}">
                                <label for="field-6" class="control-label">Service Name</label>
                                <input type="text" class="form-control" name="service_name[]" id="service_name" value="{{$value_services->services_name}}" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Heading</label>
                                <input type="text" class="form-control" name="services_heading[]" value="{{$value_services->services_heading}}" aria-required="true" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Services Description</label>
                            <textarea class="form-control" name="services_description[]" value="{{$value_services->services_description}}">{{$value_services->services_description}}</textarea>
                            <!-- <input type="text" class="form-control"  name="services_description" id="services_description" required="" aria-required="true" placeholder=""> -->
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-danger delete-button-material"><i class="fa fa-times" title="Remove"></i></button>
                </div>
                @endforeach
                @else
                <div class="card" style="padding: 1em;">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="hidden" name="service_id[]">
                                <label for="field-6" class="control-label">Service Name</label>
                                <input type="text" class="form-control" name="service_name[]" id="service_name" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Heading</label>
                                <input type="text" class="form-control" name="services_heading[]" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Description</label>
                                <textarea class="form-control" name="services_description[]"></textarea>
                                <!-- <input type="text" class="form-control"  name="services_description" id="services_description" required="" aria-required="true" placeholder=""> -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-outline-danger delete-button-material" style="    margin-top: 1em;"><i class="fa fa-times" title="Remove"></i></button>
                        </div>
                        <div class="col-md-3">
                            <div class="plss4">
                                <tr>
                                    <span style="text-align:right;" colspan="2">
                                        <i class="fa fa-plus-circle" aria-hidden="true" style="color:green;" title="Add More" onclick="service_section();"></i>
                                    </span>
                                </tr>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row" id="service_iteams_append"></div>

                        </div>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <!--<div class="card-header">-->
                    <h4 style="border-bottom: 1px dashed#999;">Products</h4>
                    <!--</div>-->
                    @if(count($company_product)!=0)
                    @foreach($company_product as $key_product=>$value_product)
                    <div class="row">
                        <div class="card" style="padding: 1em;">

                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="product_id[]" value="{{$value_product->id}}">
                                        <label for="field-6" class="control-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name[]" value="{{$value_product['product_name']}}" id="service_name" aria-required="true" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Heading</label>
                                        <input type="text" class="form-control" name="product_heading[]" value="{{$value_product['product_heading']}}" aria-required="true" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Image</label>
                                        <input type="file" class="form-control" name="product_image[]" aria-required="true" multiple="">
                                        @if($value_product['product_heading']!="")
                                        <input type="hidden" name="product_image_pre[]" value="{{$value_product['product_image']}}">
                                        <a href="{{url('public/company_doc/'.$value_product['product_image'])}}">{{$value_product['product_image']}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Description</label>
                                        <textarea class="form-control" name="product_description[]">{{$value_product['product_description']}}</textarea>
                                    </div>
                                </div>
                                <div >
                                    <button type="button" class="btn btn-outline-danger delete-button-material"><i class="fa fa-times" title="Remove"></i></button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="card" style="padding: 1em;">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="product_id[]">

                                        <label for="field-6" class="control-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name[]" id="service_name" aria-required="true" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Heading</label>
                                        <input type="text" class="form-control" name="product_heading[]" aria-required="true" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Image</label>
                                        <input type="file" class="form-control" name="product_image[]" aria-required="true" placeholder="" multiple="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Description</label>
                                        <textarea class="form-control" name="product_description[]"></textarea>
                                    </div>
                                </div>
                                <div >
                                    <button type="button" class="btn btn-outline-danger delete-button-material" style="margin-top: 1em;"><i class="fa fa-times" title="Remove"></i></button>
                                </div>
                            </div>
                            @endif
                            <div class="row" id="product_section_append" class="product_append">
                            </div>
                            <div class=" plss1" style="margin-top: 0em;">
                                <tr>
                                    <span style="text-align:right;" colspan="2">
                                        <i class="fa fa-plus-circle" aria-hidden="true" title="Add More" style="color:green;" onclick="product_section();"></i>
                                    </span>
                                </tr>
                            </div>
                        </div>
                    </div>

                    <!-- </div>
            </div>   -->
                    <!-- </div>
            </div> -->
                    <div class="col-md-10">
                        <center><input type="submit" class="btn btn-outline-primary" value="Submit" style=" padding: 6px 22px; font-size: 14px;"></center>
                        <!--<input type="submit" class="btn btn-outline-primary" value="Submit">-->
                    </div>
        </form>
    </div>
</div>
</div>
<script>
    function product_section() {
        var product_item = `<div class="row" style="width: 100%;margin-left: 0em;">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" name="product_id[]">
                                    <label for="field-6" class="control-label">Product  Name<font color="red">*</font></label>
                                    <input type="text" class="form-control" name="product_name[]" id="service_name" required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Product  Heading<font color="red">*</font></label>
                                    <input type="text" class="form-control"  name="product_heading[]"  required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Product  Image<font color="red">*</font></label>
                                    <input type="file" class="form-control"  name="product_image[]"  required="" aria-required="true" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Product Description<font color="red">*</font></label>
                                    <textarea class="form-control" name="product_description[]"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-outline-danger delete-button-material" > <i class="fa fa-times" title="Remove"></i></button>
                            </div>
                    </div>`;
        $("#product_section_append").append(product_item);
    }
</script>
<script>
    function web_mat_section() {
        var web_mat_iteams = `<div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="hidden" name="mat_web_id[]" >
                                    <label for="field-6" class="control-label">Material Name<font color="red">*</font></label>
                                    <input type="text" class="form-control"  name="mat_web_name[]" id="mat_web_name" aria-required="true" placeholder="Material Name">
                                </div>

                            </div>
                                <button type="button" class="btn btn-outline-danger delete-button-web-material pull-right " style="height: 35px;margin-top: 1em;" ><i class="fa fa-times" title="Remove"></i></button>
                        </div>`;
        $("#mat_web_append").append(web_mat_iteams);
    }
    function service_section() {
        var service_iteams = `<div class="row" style="width: 100%;margin-left: 0em;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="hidden" name="service_id[]" >
                                        <label for="field-6" class="control-label">Service  Name<font color="red">*</font></label>
                                        <input type="text" class="form-control"  name="service_name[]" id="service_name" required="" aria-required="true" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Services Heading<font color="red">*</font></label>
                                        <input type="text" class="form-control"  name="services_heading[]"  required="" aria-required="true" placeholder="">
                                    </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Services Description<font color="red">*</font></label>
                                    <textarea class="form-control" name="services_description"></textarea>
                                    <!-- <input type="text" class="form-control"  name="services_description[]" id="services_description" required="" aria-required="true" placeholder=""> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-outline-danger delete-button-material " title="Remove"><i class="fa fa-times" title="Remove"></i></button>
                            </div>
                        </div>
                        `;
        $("#service_iteams_append").append(service_iteams);
    }
</script>
<script>
    $(document).ready(function () {
        $("body").delegate(".delete-button-material", "click", function () {
            $(this).closest(".row").remove();
        });
        $("body").delegate(".delete-button-material", "click", function () {
            $(this).closest(".row").remove();
        });
        $("body").delegate(".delete-button-web-material", "click", function () {
            $(this).closest(".col-md-10").remove();
        });
    });
</script>