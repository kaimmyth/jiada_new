<style>
    body {
        padding: 0;
        margin: 0;

    }

    .report_wrapper {
        line-height: 12px;
    }

    @media  screen and (max-width:746px) {
        .report_wrapper {
            line-height: 8px;
        }
    }
    label {
		font-weight: 500;
		font-family: "Roboto", sans-serif;
		color: #003a69;
		line-height: initial!important;
	}
    .panel-heading:hover {
        background-color: #dddbdb;
    }
</style>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo e(URL::to('customer/save-enterprises')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="row" id="dashboard-row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;Customer :&nbsp;<?php if(@$enterprises->id): ?> <?php echo e("Edit"); ?> <?php else: ?> <?php echo e('Add'); ?>  <?php endif; ?>  / <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                        <ol class="breadcrumb pull-right">
                        </ol>
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-12">
                        <h4> Basic Details</h4></br></br></br>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label>Name Of Unit / Enterprise:&nbsp; <font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control" name="nameofUnit" value="<?php echo e(@$enterprises->nameofUnit); ?>" required id="nameofUnit">
                            <input type="hidden" class="form-control" name="unit_id" value="<?php echo e(@$enterprises->id); ?>"  id="unit_id">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label>Date Of DOP:&nbsp;</label>
                            <input type="date" class="form-control" value="<?php echo e(@$enterprises->dateOfDop); ?>" name="dateOfDop" id="dateOfDop">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label>First Name: &nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control"  value="<?php echo e(@$enterprises->first_name); ?>" name="first_name" required id="first_name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label>Last Name: &nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control"  value="<?php echo e(@$enterprises->last_name); ?>" name="last_name" required id="last_name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label>Company Reg No: &nbsp;</label>
                            <input type="text" class="form-control"  value="<?php echo e(@$enterprises->company_reg_no); ?>" name="company_reg_no"  id="company_reg_no">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label>Company Description: &nbsp;</label>
                            <textarea class="form-control"   name="company_description"  id="company_description"><?php echo e(@$enterprises->company_description); ?></textarea>
                        </div>
                    </div>
                </div>
                <br><br>
                <!----------------------------second row ----------------------------------------->
                <div class="row col-md-12">
                    <div class="col-md-12">
                        <h4> Contact Details</h4></br></br></br>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Contact No:&nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control" min="1" value="<?php echo e(@$enterprises->cantactNo); ?>" required name="cantactNo" id="cantactNo">
                            <br><br>
                            <label>District:&nbsp;<font style="color: red;font-size:large;">*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <select class="form-control" name="district"  id="district" required>
                                <option>--select--</option>
                                <option <?php if(@$enterprises->district=="Jamshedpur"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Jamshedpur</option>
                                <option <?php if(@$enterprises->district=="Seraikela"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Seraikela</option>
                                <option <?php if(@$enterprises->district=="East Singhbhum"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>East Singhbhum</option>
                            </select>
                            <br><br>
                            <label>Sector:&nbsp;<font style="color: red;font-size:large;">*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" class="form-control" value="<?php echo e(@$enterprises->sector); ?>" required name="sector" id="sector">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br>
                            <label>Email:&nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="email" class="form-control" value="<?php echo e(@$enterprises->email); ?>" required name="email" id="email">
                            <br><br>
                            <label>Block:&nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control" value="<?php echo e(@$enterprises->block); ?>" required name="block" id="block">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Address:&nbsp;</label>
                            <textarea class="form-control"  name="address" id="address"><?php echo e(@$enterprises->address); ?></textarea>
                            <br><br>
                            <label>Land Type:&nbsp;<font style="color: red;font-size:large;">*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select class="form-control" name="landType"  id="landType" required>
                                <option>--select--</option>
                                <option <?php if(@$enterprises->landType=="Goverment"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Goverment</option>
                                <option <?php if(@$enterprises->landType=="Private"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Private</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Direct Employment:</h4> </br> </br></br>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <br>
                            <label>Regular Employee:&nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control" min="1" value="<?php echo e(@$enterprises->regularEmployee); ?>" required name="regularEmployee" id="regularEmployee">
                            <br>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <div class="form-group">
                            <label> Contractual Employee:&nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control" min="1" value="<?php echo e(@$enterprises->contractualEmployee); ?>" required name="contractualEmployee" id="contractualEmployee">
                        </div>

                    </div>

                    <div class="col-md-4">
                        <br>
                        <div class="form-group">
                            <label>Daily Basis Employee: &nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control" min="1" value="<?php echo e(@$enterprises->dailyBasis); ?>" required name="dailyBasis" id="dailyBasis">
                        </div>
                        <br> <br>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Company Details</h4></br></br></br>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Product:&nbsp;<font style="color: red;font-size:large;">*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" name="products" class="form-control" value="<?php echo e(@$enterprises->products); ?>" id="products" required>
                            <br><br>
                            <label>TurnOver FY 17-18:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" min="1" class="form-control" value="<?php echo e(@$enterprises->turnOverInFy1); ?>" name="turnOverInFy1" id="turnOverInFy1">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Type Of Unit:&nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <select class="form-control" name="typeOfUnit" id="typeOfUnit" required>
                                <option>--select--</option>
                                <option <?php if(@$enterprises->typeOfUnit=="Mega"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Mega</option>
                                <option <?php if(@$enterprises->typeOfUnit=="Small"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Small</option>
                                <option <?php if(@$enterprises->typeOfUnit=="Micro"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Micro</option>
                            </select>
                            <br><br>
                            <label>Turn Over (FY 18-19):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" class="form-control" min="1" value="<?php echo e(@$enterprises->turnOverInFy2); ?>" name="turnOverInFy2" id="turnOverInFy1">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Investment:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" class="form-control" name="investment" value="<?php echo e(@$enterprises->investment); ?>" id="investment">
                            <br><br>
                            <label>Indirect Employment:&nbsp;<font style="color: red;font-size:large;">*</font></label>
                            <input type="text" class="form-control"  min="1" required value="<?php echo e(@$enterprises->indirectEmployment); ?>" name="indirectEmployment" id="indirectEmployment">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Of Male Employee(Direct):&nbsp;</label>
                            <input type="text" class="form-control" min="1" value="<?php echo e(@$enterprises->noofMaleEmployeeDirect); ?>" required name="noofMaleEmployeeDirect" id="noofMaleEmployeeDirect">
                            <br><br>
                            <label>Status Of Unit:&nbsp;<font style="color: red;font-size:large;">*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <select class="form-control" name="statusofUnit"  required id="statusofUnit">
                                <option>--select--</option>
                                <option <?php if(@$enterprises->statusofUnit=="Operational"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Operational</option>
                                <option <?php if(@$enterprises->statusofUnit=="Closed"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Closed</option>
                                <option <?php if(@$enterprises->statusofUnit=="Sick"): ?> <?php echo e("Selected"); ?> <?php endif; ?>>Sick</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Of Female Employee(Direct):&nbsp; </label>
                            <input type="text" class="form-control" min="1" value="<?php echo e(@$enterprises->noofFemaleEmployeeDirect); ?>" required name="noofFemaleEmployeeDirect" id="noofFemaleEmployeeDirect">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Value Of Export:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" class="form-control" value="<?php echo e(@$enterprises->valueofExport); ?>" name="valueofExport" id="valueofExport">
                        </div>
                    </div>
                </div>
                <div class="row col-md-12" style="text-align: left; margin-bottom: 6px;">
                    <center><button type="submit" class="btn btn-primary waves-effect waves-light" > Submit
                        </button></center>
                </div>
                <!-------------------------------------------form ends here------------------------------------------>
            </form>
        </div>
    </div>

</div>

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
</script><?php /**PATH D:\xampp\htdocs\jiada_new\resources\views/customer/add-enterprise.blade.php ENDPATH**/ ?>