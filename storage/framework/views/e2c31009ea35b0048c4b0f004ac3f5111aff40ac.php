<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo e(URL::to('land/customer/add')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="row" id="dashboard-row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;Customer :&nbsp;<?php if(@$editData->id!=''): ?> Edit  Info <?php else: ?> Add  <?php endif; ?> / <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                        <ol class="breadcrumb pull-right">
                            <!-- <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('land/customer')); ?>">Customer</a></li>
                            <li class="active"> Customer : Add</li> -->
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav nav-tabs nav-justified" role="tablist" style="background: #b6e9ff;color: #000;font-weight: 600;font-size: 16px;">
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

                                <a class="nav-link" id="message-tab-1" style="display:none" data-toggle="tab" href="#profile" role="tab" aria-controls="message-1" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                    <span class="d-none d-sm-block">Director</span>
                                </a>

                            </li>
                            <li class="nav-item">

                                <a class="nav-link" id="setting-tab-1" style="display:none" data-toggle="tab" href="#message" role="tab" aria-controls="setting-1" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                    <span class="d-none d-sm-block">ShareHolder</span>
                                </a>

                            </li>
                        </ul>
                        <div class="tab-content" style="background-image: linear-gradient(#e1f1f9, white);"> 

                            <!--start of basic info-->
                            <div class="tab-pane show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                                <div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Unit Type
                                                    <font color="red">*</font></label>
                                                <select class="form-control" name="company_type" id="e_company_type" required="" onchange="company_type_name()">
                                                    <?php if(@$editData->company_type=='proprietorship'): ?>
                                                    <option <?php if(@$editData->
                                                        company_type=='proprietorship'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="proprietorship" >Proprietorship
                                                    </option>
                                                    <?php else: ?>
                                                    <option value="-Select-">--Select--</option>
                                                    <option <?php if(@$editData->company_type=='ltd'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="ltd" >PVT.LTD
                                                    </option>
                                                    <option <?php if(@$editData->company_type=='llp'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="llp">LLP
                                                    </option>
                                                     <option <?php if(@$editData->company_type=='LTD'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="LTD">LTD
                                                    </option>
                                                    <option <?php if(@$editData->company_type=='public'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="public">PUBLIC
                                                    </option>
                                                    <option <?php if(@$editData->
                                                        company_type=='proprietorship'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="proprietorship" >Proprietorship
                                                    </option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Unit Name
                                                    <font color="red">*</font></label>
                                                <input type="text" class="form-control" value="<?php echo e($editData->company ?? ''); ?>" name="company" id="company" required="" aria-required="true" placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Unit Reg. No <font color="red">*</font></label>
                                                <input type="text" class="form-control" value="<?php echo e($editData->company_reg_no ?? ''); ?>" name="company_reg_no" id="company_reg_no" required="" aria-required="true" placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group no-margin">
                                                <label for="field-7" class="control-label">Unit Address</label>
                                                <textarea class="form-control autogrow address" rows="9" name="company_addrerss" id="address" placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal;"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="    margin-top: -12em;">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Industry
                                                    <font color="red">*</font></label>
                                                <select class="form-control" name="industry" id="industry" required="">
                                                    <option value="">---Select---</option>
                                                    <?php $__currentLoopData = $industriesData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($industries->id); ?>">
                                                        <?php echo e($industries->industires_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Sub Industry</label>
                                                <select class="form-control" name="sub_industry" id="sub_industry">
                                                    <option value="">---Select---</option>
                                                    <?php $__currentLoopData = $subindustryData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subindustry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($subindustry->id); ?>">
                                                        <?php echo e($subindustry->sub_industry_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Turn Over</label>
                                                <input type="text" class="form-control" name="turn_over" min="1" id="turn_over">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Number of Employees</label>
                                                <input type="text" class="form-control" name="number_of_employees" id="number_of_employees" min="1">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row" style="    margin-top: -0em;">


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Established Date</label>
                                                <input type="text" class="form-control dateFilter" name="established_date" id="dob">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Company Logo</label>
                                                <input type="file" class="form-control " name="company_logo" id="dob">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Company Email</label>
                                                <input type="email" class="form-control " name="company_email" required id="dob">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of row-->

                                    <!-- Start LTD & Proprietorship -->
                                    <?php if(@count(@$shareholderData)!=0): ?>

                                    <div class="col-md-4" style="float:left;">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Company Type<font color="red">*</font></label>
                                            <?php if(@count(@$shareholderData)!=0): ?>
                                            <select class="form-control" name="company_type" id="" required="">
                                                <option value="">Select Company Type</option>
                                                <option <?php if(@$editData->company_type=='ltd'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="LTD" >PVT.LTD</option>
                                                <option <?php if(@$editData->company_type=='llp'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="LLP">LLP</option>
                                            </select>
                                            <?php else: ?>
                                            <select class="form-control" name="company_type" id="e_company_type" required="">
                                                <?php if(@$editData->company_type=='proprietorship'): ?>
                                                <option <?php if(@$editData->company_type=='proprietorship'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="proprietorship" >Proprietorship
                                                </option>
                                                <?php else: ?>
                                                <option value="">Select Company Type</option>
                                                <option <?php if(@$editData->company_type=='ltd'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="LTD" >PVT.LTD</option>
                                                <option <?php if(@$editData->company_type=='llp'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="LLP">LLP</option>
                                                <option <?php if(@$editData->company_type=='proprietorship'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="PROPRIETORSHIP" >Proprietorship
                                                </option>
                                                <?php endif; ?> <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="float:left;">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Name<font color="red">*</font></label>
                                            <input type="text" class="form-control" value="<?php echo e($editData->company ?? ''); ?>" name="company" id="company" required="" aria-required="true" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="float:left;">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Unit Reg. No
                                                <font color="red">*</font></label>
                                            <input type="text" class="form-control" value="<?php echo e($editData->company_reg_no ?? ''); ?>" name="company_reg_no" id="company_reg_no" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-left: -10px;">
                                        <div class="form-group">
                                            <label for="field-7" class="control-label">Address</label>
                                            <textarea class="form-control" id="address" name="company_addrerss" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required> <?php echo e($editData->address ?? ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <?php endif; ?>

                                <!-- for proprietorship-->
                                <div id="proprietorship" style="display:none">
                                    <div class="row" id="s_f_name">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">First Name <font color="red">*</font></label>
                                                <input type="text" class="form-control" value="<?php echo e(@$editData->f_name ?? ''); ?>" name="f_name" id="f_name" required="" aria-required="true" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Last Name <font color="red">*</font></label>
                                                <input type="text" class="form-control" value="<?php echo e($editData->l_name ?? ''); ?>" name="l_name" id="l_name" required="" aria-required="true" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Designation <font color="red">*</font></label>
                                                <input type="text" class="form-control" value="<?php echo e($editData->occupation ?? ''); ?>" name="occupation" id="occupation" required="" aria-required="true" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-4" class="control-label">DOB <font color="red">*</font></label>
                                                <input type="text" class="form-control dateFilter" value="<?php echo e($editData->dob ?? ''); ?>" name="dob" id="dob" required="" aria-required="true" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-5" class="control-label">Contact <font color="red">*</font></label>
                                                <input class="form-control onlyNumber" type="text" maxlength="10" minlength="10" min="1" value="<?php echo e($editData->mobile ?? ''); ?>" name="mobile" id="mobile" required="" aria-required="true" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-4" class="control-label">Land Line No
                                                    <font color="red">(optional)</font></label>
                                                <input type="text" class="form-control onlyNumber" value="<?php echo e($editData->landline_no ?? ''); ?>" name="landline_no" id="landline_no" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group no-margin">
                                                <label for="field-6" class="control-label">Email <font color="red">*</font></label>
                                                <input type="email" class="form-control" value="<?php echo e($editData->email ?? ''); ?>" name="email" id="email" required="" aria-required="true" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-4" id="s_gender">
                                            <div class="form-group">
                                                <p class="control-label"><b>Gender</b>
                                                    <font color="red">*</font>
                                                </p>
                                                <div class="radio radio-info form-check-inline">
                                                    <input type="radio" <?php if(@$editData->gender=='male'): ?> <?php echo e('checked'); ?> <?php endif; ?> name="gender" id="genader" value="male">
                                                    <label for="inlineRadio1"> Male </label>
                                                </div>
                                                <div class="radio radio-info form-check-inline">
                                                    <input type="radio" <?php if(@$editData->gender=='female'): ?> <?php echo e('checked'); ?> <?php endif; ?> name="gender" id="genader" value="female">
                                                    <label for="inlineRadio1"> Female </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-left: -10px;">
                                        <div class="form-group">
                                            <label for="field-7" class="control-label">Address <font color="red">(optional)</font></label>
                                            <textarea class="form-control" id="address" name="address" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px"> <?php echo e($editData->address ?? ''); ?></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--end of div>-->
                        </div>
                        <!--end of first tabs-->
                        <!--end of basic info-->



                        <!--start of material tab-->

                        <div class="tab-pane fade" id="nav-material" role="tabpanel" aria-labelledby="nav-material-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <thead>
                                            <label for="input_materials" class="control-label">Input Materials</label>
                                        </thead>
                                        <tbody id="get_input_materials">
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="input_details[]" id="input_details">
                                                        <option value="">---Select Input Materials---
                                                        </option>
                                                        <?php $__currentLoopData = $Materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($Material->id); ?>">
                                                            <?php echo e($Material->material_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="input_materials_quanity[]" class="form-control" placeholder="Input Material Quanitity">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="input_materials_type[]" id="input_details">
                                                        <option value="">---Select Materials Type---</option>
                                                        <option value="Hazard">Hazard</option>
                                                        <option value="Non-Hazard"> Non-Hazard</option>
                                                    </select>

                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger delete-but btnton-material">Remove</button>
                                                </td>
                                                <td style="text-align:right;" colspan="2"><i class="fa fa-plus-circle" aria-hidden="true" style="color:green;" onclick="input_materials();"></i></td>

                                            </tr>

                                        </tbody>
                                      

                                    </table>
                                </div>
                                <div class="col-md-5">
                                    <table class="table">
                                        <thead>
                                            <label for="waste_materials" class="control-label">Waste Materials</label>

                                        </thead>
                                        <tbody id="get_waste_materials">
                                            <tr>

                                                <td>
                                                    <select class="form-control" name="waste_materials[]" id="waste_materials">
                                                        <option value="">---Select Waste Materials---
                                                        </option>
                                                        <?php $__currentLoopData = $Materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($Material->id); ?>">
                                                            <?php echo e($Material->material_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="waste_materials_quanity[]" class="form-control" placeholder="Waste Materials Quanitity">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="wase_materials_type[]" id="input_details">
                                                        <option value="">---Select Materials Type---</option>
                                                        <option value="Hazard">Hazard</option>
                                                        <option value="Non-Hazard"> Non-Hazard</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger delete-but btnton-material">Remove</button>
                                                </td>
                                                <td style="text-align:right;" colspan="2"><i class="fa fa-plus-circle" aria-hidden="true" style="color:green;" onclick="waste_materials();"></i></td>


                                            </tr>

                                        </tbody>
                                    
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!--end of second tabs-->
                        <!--end of material tab-->

                        <!--start of director tabs-->
                        <div class="tab-pane fad" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div id="items" style="margin-top: 1em; margin-left:13px;">
                                <!-- <div id="items">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">FirstName</label>
                                            
                                                <input type="text" class="form-control" name="Dierctor_firstname[]" id="" value="" placeholder="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">LastName</label>
                                                <input type="text" class="form-control" name="Director_last_name[]" id="" value="" placeholder="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Designation</label>
                                                <input type="text" class="form-control" name="Director_occupation_name[]" id="" value="" placeholder="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group no-margin">
                                                <label for="field-7" class="control-label">Address</label>
                                                <textarea class="form-control autogrow address" rows="9" name="Directoraddress[]" id="address" placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="    margin-top: -12em;">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">DOB</label>
                                                <input type="text" class="form-control dateFilter datepicker" name="Director_dob[]" id="" value="" placeholder="DD-MM-YYYY" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Contact</label>
                                                <input type="text" class="form-control onlyNumber" maxlength="10" minlength="10" min="1" name="Director_contact[]" id="" value="" placeholder="" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Email Id</label>
                                                <input type="email" class="form-control" name="Director_email_id[]" id="" value="" placeholder="" aria-required="true">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row" style="    margin-top: -0em;">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">ShareValue</label>
                                                <input type="text" class="form-control onlyNumber" min="1" name="Director_share_value[]" id="" value="" placeholder="" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Share Value(%)</label>
                                                <input type="text" class="form-control onlyNumber" min="1" name="director_share_value_per[]" placeholder="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <br>
                                            <br>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" value="male" name="directorgender[]">
                                                <label>Male</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" value="female" name="directorgender[]">
                                                <label>Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="button5 btn_remov btne btn-danger">Remove</button><br><br>
                                </div> -->


                            </div>
                            <!--end of div>-->
                            <button id="add" class="btn btn-outline-primary add-more button-yellow uppercase" type="button">+ Add More</button>

                        </div>
                        <!--end of third tabs-->
                        <!--end of director tabs-->

                        <!--start of shareholder tab-->

                        <div class="tab-pane fad" id="message" role="tabpanel" aria-labelledby="message-tab">

                            <div id="item" style="margin-top: 1em; margin-left:13px;">
                                <!-- <div id="item">
                <div class="form-group row delete_info">
                    <div class="row" style="width: 100%;">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">First Name
                                        </label>
                                        <input type="text" class="form-control" name="shareholder_f_name[]" id="" value="" placeholder="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Last Name
                                        </label>
                                        <input type="text" class="form-control" name="shareholder_l_name[]" id="" value="" placeholder="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Designation</label>
                                        <input type="text" class="form-control" name="shareholder_occupation_name[]" id="" value="" placeholder="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">DOB</label>
                                        <input type="text" class="form-control dateFilter" name="shareholder_dob[]" id="" value="" placeholder="DD-MM-YYYY" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Contact</label>
                                        <input type="text" class="form-control onlyNumber" maxlength="10" minlength="10" min="1" name="shareholder_contact[]" id="" value="" placeholder="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Email Id
                                        </label>
                                        <input type="email" class="form-control" name="shareholder_email_id[]" id="" value="" placeholder="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Share Value
                                        </label>
                                        <input type="text" class="form-control onlyNumber" name="shareholder_share_value[]" min="1" id="" value="" placeholder="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Share Value (%)</label>
                                        <input type="text" class="form-control onlyNumber" name="shareholder_share_per[]" min="1" placeholder="" aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 1px;">
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" value="male" name="shareholdergender[]" >
                                    <label>Male</label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" value="female" name="shareholdergender[]">
                                    <label>Female</label>
                                </div>
                            </div>
                            <br>

                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Address</label>
                                <textarea class="form-control autogrow address" name="shareholderaddress[]" id="address" placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px"></textarea>
                            </div>
                        </div>

                    </div>

                </div>
                <button type="button" class="button5 btn_remov btne btn-danger">Remove</button><br><br>
            </div> -->

                            </div>
                            <button id="adds" class="btn btn-outline-primary add-more button-yellow uppercase" type="button">+ Add More</button>
                        </div>
                        <!--end of fourth tabs-->
                        <!--end of shareholder tab-->
                    </div>
                    <!--end of tab content-->
                </div>

        </div>
        <!--end of tab-row-->

        <?php if(@count(@$shareholderData)!=0): ?> <?php else: ?>
        <div class="col-md-12" style="    text-align: left; margin-bottom: 6px;">
            <button type="submit" class="btn btn-outline-primary waves-effect waves-light" onclick="return company_share_value()">Submit</button>
        </div>
        </form>

        <?php endif; ?>

    </div>
</div>
</div>

<script>
    $(document).ready(function () {
        $(".delete").hide();
        j = 0;
        //when the Add Field button is clicked
        $("#add").click(function (e) {
            j++;
            // alert(j);
            var data = `
                  <div id="items">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">First Name</label>
                          <input type="text" class="form-control" name="Dierctor_firstname[]" id="" value="" placeholder=""  aria-required="true">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">Last Name</label>
                          <input type="text" class="form-control" name="Director_last_name[]" id="" value="" placeholder=""  aria-required="true">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">Designation</label>
                          <input type="text" class="form-control" name="Director_occupation_name[]" id="" value="" placeholder=""  aria-required="true">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">DOB</label>
                          <input type="text" class="form-control datepicker "  name="Director_dob[]" id="" value="" placeholder="DD-MM-YYYY"  aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">Contact</label>
                          <input type="text" class="form-control onlyNumber" maxlength="10" minlength="10" min="1" name="Director_contact[]" id="" value="" placeholder=""  aria-required="true">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">Email Id</label>
                          <input type="email" class="form-control" name="Director_email_id[]" id="" value="" placeholder=""  aria-required="true">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">Share Value</label>
                          <input type="text" class="form-control onlyNumber" min="1"  name="Director_share_value[]" id="" value="" placeholder=""  aria-required="true">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="field-1" class="control-label">Share Value (%)</label>
                          <input type="text" class="form-control onlyNumber"  min="1" name="director_share_value_per[]"  placeholder=""  aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row" style="margin-left: 1px;">
                      <div class="radio radio-info form-check-inline">
                        <input type="radio"  value="male" checked name="directorgender[` + j + `]">
                        <label >Male</label>
                      </div>
                      <div class="radio form-check-inline">
                        <input type="radio"  value="female" name="directorgender[` + j + `]">
                        <label >Female</label>
                      </div>
                    </div><br>

                    <div class="form-group no-margin">
                      <label for="field-7" class="control-label">Address</label>
                      <textarea class="form-control autogrow address" name="Directoraddress[]" id="address" placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" ></textarea>
                    </div>
                    <button type="button"  class="button5 btn_remove btn  btn-danger">Remove</button><br><br>	
                  </div>
                  </div>`;
            $('#items').append(data);
            datepicker_fun();
        });
        $(document).on('click', '.btn_remove', function () {
            $(this).closest('#items').remove();
        })
    });
</script>
<script>
    $(document).ready(function () {
        $(".delete").hide();
        ii = 0;
        //when the Add Field button is clicked
        $("#adds").click(function (e) {
            ii++;
            // alert(i);
            var data = `                                                
                 <div id="item" style="margin-top: 1em;">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">First Name</label>
                                <input type="text" class="form-control" name="shareholder_f_name[]" id="" value="" placeholder=""  aria-required="true">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Last Name</label>
                                <input type="text" class="form-control" name="shareholder_l_name[]" id="" value="" placeholder=""  aria-required="true">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Designation</label>
                                <input type="text" class="form-control" name="shareholder_occupation_name[]" id="" value="" placeholder=""  aria-required="true">
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">DOB</label>
                                <input type="text" class="form-control datepicker"  name="shareholder_dob[]" id="" value="" placeholder="DD-MM-YYYY"  aria-required="true">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Contact</label>
                                <input type="text" class="form-control onlyNumber"  maxlength="10" minlength="10" min="1" name="shareholder_contact[]" id="" value="" placeholder=""  aria-required="true">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Email Id</label>
                                <input type="email" class="form-control" name="shareholder_email_id[]" id="" value="" placeholder=""  aria-required="true">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Share Value</label>
                                <input type="text" class="form-control onlyNumber" min="1"  name="shareholder_share_value[]" id="" value="" placeholder=""  aria-required="true">
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="field-1" class="control-label">Share Value (%)</label>
                                <input type="text" class="form-control onlyNumber" min="1" name="shareholder_share_per[]"  placeholder=""  aria-required="true">
                              </div>
                            </div>
                          </div>
                            <div class="row" style="margin-left: 1px;">
                            <div class="radio radio-info form-check-inline">
                              <input type="radio"  value="male" checked  name="shareholdergender[` + ii + `]">
                              <label >Male</label>
                            </div>
                            <div class="radio form-check-inline">
                              <input type="radio"   value="Female" name="shareholdergender[` + ii + `]">
                              <label >Female</label>
                            </div>
                          </div><br>

                          <div class="form-group no-margin" >
                            <label for="field-7" class="control-label">Address</label>
                            <textarea class="form-control autogrow address" name="shareholderaddress[]" id="address"  placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required></textarea>
                          </div>
                          <button type="button"  class="button5  btn_remov btne btn-danger">Remove</button><br><br>
                          </div>
                    </div>`;
            $('#item').append(data);
            datepicker_fun();

        });
        $(document).on('click', '.btn_remove', function () {
            $(this).closest('#item').remove();
        })
    });
</script>

<script type="text/javascript">
    $('#email').blur(function () {
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        // if (testEmail.test(this.value)) {
        //     alert('Success');
        // } else {
        //     alert('Please Enter Correct Email Format');
        // }
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
        }).on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });
        $('.dateFilter').keyup(function () {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9^-]/g, '');
            }
        });
    }

    $('.s_email').blur(function () {
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        if (testEmail.test(this.value)) {
            alert('Success');
        } else {
            alert('Please Enter Correct Email Format');
        }
    });

    function addcustomer(id) {
        try {
            $("#loader1").css("display", "block");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo e(url('land/customer/add-pcc/')); ?>" + '/' + id,
                method: "POST",
                contentType: 'application/json',
                success: function (data) {
                    console.log(data)

                    $("#loader1").css("display", "none");
                    var name = data.f_name + ' ' + data.l_name;
                    var email = data.email;
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

        } catch (err) {
            var error = err.message;
            alert(error)
        }
    }

    function input_materials() {
        var input_material = `<tr>

            <td>
                    <select class="form-control"name="input_details[]" id="input_details" required>
                            <option value="">---Select Input
                                Materials---</option>
                                <?php $__currentLoopData = $Materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($Material->id); ?>">
                                    <?php echo e($Material->material_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </td>
                        <td>
                            <input type="text"  name="input_materials_quanity[]" class="form-control" placeholder="Input Materials Quanitity" required >
                        </td>
                        <td>
                            <select class="form-control" name="input_materials_type[]" id="input_details"  required>
                                                            <option value="">---Select  Materials Type---</option>
                                <option value="Hazard">Hazard</option>
                                <option value="Non-Hazard"> Non-Hazard</option>
                            </select>
                            </td>
                        <td><button type="button" class="btn btn-danger delete-but btnton-material">Remove</button></td>
                            </tr>`;
        $("#get_input_materials").append(input_material);
    }

    function waste_materials() {
        var waste_material = `<tr>

                              <td> <select class="form-control" name="waste_materials[]" id="waste_materials" required>
                              <option value="">---Select Waste Materials---</option>
                              <?php $__currentLoopData = $Materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($Material->id); ?>">
                                <?php echo e($Material->material_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                              </td>
                              <td>
                                <input type="text"  name="waste_materials_quanity[]" class="form-control" placeholder="Waste Materials Quanitity" required >
                              </td>
                              <td>
                                    <select class="form-control" name="wase_materials_type[]" id="input_details" required>
                                                                                    <option value="">---Select  Materials Type---</option>
                                        <option value="Hazard">Hazard</option>
                                        <option value="Non-Hazard"> Non-Hazard</option>
                                    </select>
                              </td>
                              <td><button type="button" class="btn btn-danger delete-but btnton-material">Remove</button></td>
                            </tr>`;

        $("#get_waste_materials").append(waste_material);

    }

    // delete button
    $(document).ready(function () {
        $("#get_input_materials").delegate(".delete-button-material", "click", function () {
            $(this).closest("tr").remove();
        });
        $("#get_waste_materials").delegate(".delete-button-material", "click", function () {
            $(this).closest("tr").remove();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#searchcustomer').on('keyup', function () {
            try {
                var query = $(this).val();
                if (query != '') {
                    document.getElementById("searchcustomer").style.color = "";
                    $("#loader1").css("display", "block");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "<?php echo e(url('land/serachcustomers/')); ?>" + '/' + query,
                        type: "GET",
                        success: function (data) {
                            $("#loader1").css("display", "none");
                            $('#customer_list').html(data);
                        }
                    })
                } else {
                    $('#customer_list').html("");
                }
            } catch (err) {
                var error = err.message;
                alert(error)
            }
        });
        $(document).on('click', 'td', function () {
            var value = $(this).text();
            $('#customer_list').html("");
        });
        $(".addCF").click(function () {
            $("#customFields").append(
                '<tr valign="top"><th scope="row"><label for="customFieldName">Share Holder</label></th><td><input style="width: 103px;" type="text" class="code" id="" name="s_fname[]" value="" placeholder="First Name" /> &nbsp;<input style="width: 103px;" type="text" class="code" id="" name="s_lname[]" value="" placeholder="Last Name" /> &nbsp;<input style="width: 99px;" type="text" class="code" id="" name="s_mobile[]" value="" placeholder="Contact " /> &nbsp;<input style="width: 136px;" type="email" class="code" onblur="other()" id="s_email" name="s_email[]" value="" placeholder="Email " /> &nbsp;<input style="width: 136px;" type="text" class="code" id="" name="s_svalue[]" value=""  aria-required="true"  placeholder="Share Value" /> &nbsp;<input style="width: 136px;" type="text" class="code" id="" name="s_svalue_percentage[]" value="" required="" aria-required="true" min="1" max="100" placeholder="Share Value(%)" />&nbsp;&nbsp;<a href="javascript::void(0);" data-toggle="tooltip" data-placement="top" class="remCF" title="Remove"  ><i class="fas fa-times"  style="color:red;"></i></a></td></tr>'
            );
        });
        $("#customFields").on('click', '.remCF', function () {
            $(this).parent().parent().remove();
        });

    });
</script>
<script>
    function company_type_name() {
        // alert("fgfgfg");
        temp = document.getElementById('e_company_type').value;
        if (temp == 'proprietorship') {
            document.getElementById("proprietorship").style.display = "block";
            // document.getElementById("llp_ltd").style.display = "none";
            document.getElementById("message-tab-1").style.display = "none";
            document.getElementById("setting-tab-1").style.display = "none";
        }
        else if (temp == '-Select-') {
            document.getElementById("proprietorship").style.display = "none";
            document.getElementById("message-tab-1").style.display = "none";
            document.getElementById("setting-tab-1").style.display = "none";
        }
        else {
            document.getElementById("proprietorship").style.display = "none";
            // document.getElementById("llp_ltd").style.display = "block";
            document.getElementById("message-tab-1").style.display = "block";
            document.getElementById("setting-tab-1").style.display = "block";
        }

    };
</script>

<script>
    $(function () {
        $(".datepicker").datepicker();
    });
</script>
<script>
    // $( function() {
    function datepicker_fun() {
        $(".datepicker").datepicker();
    }
    // } );
</script>
<script type="text/javascript">
    $(document).ready(function () {
        // $(".address").onclick(function(){
        // $(".address").on("click", function(){
        $("body").delegate(".address", "click", function () {
            var dper = $("input[name='director_share_value_per[]']");
            var sper = $("input[name='shareholder_share_per[]']");
            // for(i=0;i<=dper.length;i++)
            // {
            //   $dtemp=dper[i].value;
            // }
            for (i = 0; i <= sper.length; i++) {
                $sper = sper[i].value;
            }
            alert($sper);
        });
    });
</script>

<script>

    // function company_type_name() {
    //         // alert("fgfgfg");
    //         temp = document.getElementById('e_company_type').value;
    //           if (temp == 'proprietorship') {
    //               return true;
    //           }
    //           else
    //           {
    //               company_share_value();
    //           }

    // }

    function company_share_value() {
        if ($("#e_company_type").val() != "proprietorship") {
            var dper = $("input[name='director_share_value_per[]']");
            var sper = $("input[name='shareholder_share_per[]']");


            stemp = [];
            share_per = 0;
            for (j = 0; j < sper.length; j++) {
                stemp.push(sper[j].value);
                if (sper[j].value) {
                    share_per = share_per + parseInt(sper[j].value);
                }
            }
            dtemp = [];
            depart_per = 0;
            for (i = 0; i < dper.length; i++) {
                dtemp.push(dper[i].value);
                if (dper[i].value) {
                    depart_per = depart_per + parseInt(dper[i].value);
                }
            }
            total_share_per = 0;
            total_share_per = parseInt(depart_per) + parseInt(share_per);
            if (total_share_per == 100) {
                return true;
            }
            else {
                if (confirm('Your Share Value Percentage Is Not 100 % Do You Want To  Save ')) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        else {
            return true;
        }
    }



</script><?php /**PATH D:\xampp\htdocs\jiada\resources\views/customer/add_customer.blade.php ENDPATH**/ ?>