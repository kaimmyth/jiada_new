<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i
                                class="ion-arrow-right-b"></i> &nbsp;&nbsp; View Customer Info/ <a href="javascript::void(0);"
                                onclick="history.back();">Back</a></h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{ URL::to('home') }}">Home</a></li>
                        <li><a href="{{ URL::to('land/customer') }}">Customer</a></li>
                        <li class="active">View Customer</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-1" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                <span class="d-none d-sm-block">Basic Information</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-1" data-toggle="tab" href="#nav-material" role="tab" aria-controls="profile-1" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                <span class="d-none d-sm-block">Material</span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" id="message-tab-1" data-toggle="tab" href="#profile" role="tab" aria-controls="message-1" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span> @if($edit_company->company_type!='proprietorship')
                                <span class="d-none d-sm-block">Director</span> @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="setting-tab-1" data-toggle="tab" href="#message" role="tab" aria-controls="setting-1" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span> @if($edit_company->company_type!='proprietorship')
                                <span class="d-none d-sm-block">ShareHolder</span> @endif
                            </a>

                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                            <div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Type :
                                            </label>
                                            <span style="text-transform: uppercase;">{{@$edit_company->company_type}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Name :</label>
                                            {{$edit_company->company}}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Registration No :</label>
                                            {{$edit_company->company_reg_no}}
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group no-margin">
                                            <label for="field-7" class="control-label">Unit Address :</label>
                                            {{$edit_company->address}}
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        @if($edit_company->industry_id)
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Industry :
                                            </label>
                                        <?php 
                                            $industries =DB::table('industries')->where('id',$edit_company->industry_id)->first('industires_name');
                                            ?>
                                            {{@$industries->industires_name}}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Turn Over :</label>
                                            {{$edit_company->turn_over}}
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Number of Employees :</label>
                                            {{$edit_company->number_of_employees}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="    margin-top: -0em;">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Established Date :</label>
                                            {{$edit_company->established_date}}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <br>
                                        <br>

                                    </div>
                                </div>
                                <!--end of row-->

                                <!-- Start LTD & Proprietorship -->
                            </div>

                           @if($editData_comp)
                            <div id="proprietorship">
                                <div class="row" id="s_f_name">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">First Name :-
                                            </label>
                                            {{@$editData_comp->f_name}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-2" class="control-label">Last Name :-
                                            </label>
                                            {{$editData_comp->l_name}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-3" class="control-label">Designation :-</label>
                                            {{$editData_comp->occupation}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-4" class="control-label">DOB :-
                                            </label>
                                            {{$editData_comp->dob}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-5" class="control-label">Contact :-
                                            </label>
                                            {{$editData_comp->mobile}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-4" class="control-label">Land Line No :-
                                            </label>
                                            {{$editData_comp->landline_no}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group no-margin">
                                            <label for="field-6" class="control-label">Email :-
                                            </label>
                                            {{$editData_comp->email}}
                                        </div>
                                    </div>

                                    <div class="col-md-4" id="s_gender">
                                        <label for="field-1" class="control-label">Gender :-</label>
                                        {{@$editData_comp->gender}}
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-left: -10px;">
                                    <div class="form-group">
                                        <label for="field-7" class="control-label">Address :-
                                        </label>
                                        {{$editData_comp->address}}
                                    </div>
                                </div>

                            </div>
                            @endif

                        </div>
                        <div class="tab-pane fade" id="nav-material" role="tabpanel" aria-labelledby="nav-material-tab">
                     
                            <div class="row">
                            <div class="col-md-6">	
<b>Input Materials</b>
<br><br>
<table class="table table-borderless">
  <thead>
    <tr>
     
      <th scope="col">Material</th>
      <th scope="col">Material Quantity</th>
      <th scope="col">Material Type</th>
    </tr>
  </thead>
  <tbody>
     @if(count($input_detailsArray)!=0)
		@foreach($input_detailsArray as $key_input=>$value_waste)
	<tr>
	<td>
		@foreach($edit_materials as $edit_material)
			@if(@$input_detailsArray[$key_input]==$edit_material->id) {{ $edit_material->material_name }} @endif
		@endforeach
	</td>
	
	<td>
		@if(@$edit_company->input_materials_quanity!="")
		<?php $material_quantity_array=explode(',',$edit_company->input_materials_quanity);?>
		{{$material_quantity_array[$key_input]}}
		 @else
		 {{0}}
		
		
		@endif
	</td>
	
	<td>
		@if(@$edit_company->input_materials_type)
		<?php 
			$input_materials_type_array=explode(',',$edit_company->input_materials_type);?>
		
			@if($input_materials_type_array[$key_input]=='Hazard' ) Hazard @endif 
			@if($input_materials_type_array[$key_input]=='Non-Hazard' ) Non-Hazard @endif 
		</select>
		@else
		{{0}}
	   
		@endif
	</td>
	
	
	</tr>
	
	@endforeach
	@endif
  </tbody>
</table>
</div>


<div class="col-md-6">	
<b>Waste Materials</b>
<br><br>
<table class="table table-borderless">
  <thead>
    <tr>
     
      <th scope="col">Material</th>
      <th scope="col">Material Quantity</th>
      <th scope="col">Material Type</th>
    </tr>
  </thead>
  <tbody>
     @if(count($waste_materialsArray)!=0)
                @foreach($waste_materialsArray as $key_materials=>$value_waste)
                <tr>
                    <td>
                       
                            @foreach($edit_materials as $edit_material)
                                @if($waste_materialsArray[$key_materials]==$edit_material->id) {{$edit_material->material_name}} @endif 
                            @endforeach
                       
                    </td>
                    @if(@$edit_company->waste_materials_quanity!="")
                    <?php $waste_material_quantity_array=explode(',',$edit_company->waste_materials_quanity);
                        ?>
                    <td>
                        {{$waste_material_quantity_array[$key_materials]}}
                    </td>
                    @else
                   

                    @endif
                    @if(@$edit_company->wase_materials_type)
                    <?php 
                        $wase_materials_type_array=explode(',',$edit_company->wase_materials_type);
                        ?>
                    <td>
                       
                             @if($wase_materials_type_array[$key_materials]=='Hazard' ) Hazard @endif 
                            @if($wase_materials_type_array[$key_materials]=='Non-Hazard' ) Non-Hazard @endif 
                    </td> 
                    @else
                   
                   
                    @endif
                   
                </tr>
                @endforeach
                @endif
  </tbody>
</table>
</div>
            </div>

            </div>

                       
                        <div class="tab-pane fad" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @if(count($directorData)!=0)
                            <div id="items">
                                @foreach(@$directorData as $value_director)
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">FirstName :</label>
                                            {{$value_director->f_name}}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">LastName :</label>
                                            {{@$value_director->l_name}}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Designation :</label>
                                            {{@$value_director->occupation}}
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group no-margin">
                                            <label for="field-7" class="control-label">Address :</label>
                                            {{@$value_director->location}}
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">DOB :</label>
                                            {{@$value_director->dob}}
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Contact :</label>
                                            {{@$value_director->mobile}}
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Email Id :</label>
                                            {{@$value_director->email}}
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">ShareValue :</label>
                                            {{@$value_director->svalue}}
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Share Value(%) :</label>
                                            {{@$value_director->svalue_percentage}}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="field-1" class="control-label">Gender :</label>
                                        {{@$value_director->gender}}
                                    </div>

                                </div>
                                <hr style="height:50px;">
                                <!--end of row-->
                                <!-- </div> -->
                                <!--end of div>-->
                                @endforeach
                            </div>
                            @else
                            <span style="color:red;">No Record Found!!</span>
                            @endif
                            <!-- </div> -->
                        </div>
                      
                      

                        <!--end of third tabs-->
                        <!--end of director tabs-->

                        <!--start of shareholder tab-->
                        
                        <div class="tab-pane fad" id="message" role="tabpanel" aria-labelledby="message-tab">
                            @if(count($shareholderData)!=0)
                            <div id="item" style="margin-top: 1em; margin-left:13px;">
                                <div class="form-group row delete_info">
                                    @foreach($shareholderData as $value)
                                    <div class="row" style="width: 100%;">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">First Name :
                                                        </label>

                                                        {{@$value->f_name}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Last Name :
                                                        </label>
                                                        {{@$value->l_name}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Designation :</label>
                                                        {{@$value->occupation}}
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">DOB :</label>
                                                        {{@$value->dob}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Contact :</label>
                                                        {{@$value->mobile}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Email Id :
                                                        </label>
                                                        {{@$value->email}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Share Value :
                                                        </label>
                                                        {{@$value->svalue}}
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Share Value (%) :
                                                        </label>
                                                        {{@$value->svalue_percentage}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-left: 1px;">
                                                <label for="field-1" class="control-label">Gender :</label>
                                                {{@$value->gender}}
                                            </div>
                                            <br>

                                            <div class="form-group no-margin">
                                                <label for="field-7" class="control-label">Address :</label>
                                                {{@$value->location}}
                                            </div>
                                            <hr style="height:50px;">
                                        </div>

                                    </div>

                                    <!-- </div> -->

                                    <!-- </div> -->
                                    @endforeach

                                </div>

                                <!--end of fourth tabs-->
                                <!--end of shareholder tab-->

                            </div>
                            @else
                            <span style="color:red;">No Record Found!!</span>
                            @endif

                        </div>
                       
                        <!--end of tab content-->
                    </div>
                </div>
                <!--end of tab-row-->

            </div>
        </div>
    </div>
                    </div>
                </div>
                <!--end of tab-row-->

            </div>
        </div>
    </div>