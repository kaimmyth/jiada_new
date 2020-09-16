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
        <!-- <div action="<?php echo e(URL::to('land/customer/add')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off"> -->

        <?php echo csrf_field(); ?>
        <div class="row" id="dashboard-row">
            <div class="col-md-12">
                <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;<?php if(@$editData->id!=''): ?> Update Customer Info <?php elseif(Auth::user()->users_role==3): ?> Customize Web <?php else: ?> Create Customer <?php endif; ?> / <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                <ol class="breadcrumb pull-right">
                    <!-- <?php if(Auth::user()->users_role==3): ?>
                    <li><a href="<?php echo e(URL::to('home')); ?>">Dashboard</a></li>
                    <li><a href="">Customize Web</a></li>
                    <?php else: ?>
                    <li><a href="<?php echo e(URL::to('home')); ?>">Home</a></li>
                    <li><a href="">Customer</a></li>
                    <li class="active">Add Customer</li>
                    <?php endif; ?> -->
                </ol>
            </div>
        </div>
        <form action="<?php echo e(url('add/company_website')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <!-- <div class="tab-pane fade" id="company_website" role="tabpanel" aria-labelledby="nav-material-tab"> -->
            <div class="card" style="padding: 1em;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden" name="comp_id" value="<?php echo e($customer_details->id); ?>">
                            <label for="field-6" class="control-label">Unit Name<font color="red">*</font></label>
                            <input type="text" readonly class="form-control" name="company" id="company" value="<?php echo e($customer_details->nameofUnit); ?>" required="" aria-required="true" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Unit Website<font color="red">*</font></label>
                            <input type="text" class="form-control" name="company_portal_url" id="company" value="<?php echo e($customer_details->company_portal_url); ?>" required="" aria-required="true" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Unit Description</label>
                            <textarea name="company_description" class="form-control" style="height: 36px;"><?php echo e($customer_details->company_description); ?></textarea>
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
                                <?php if($customer_details->welcome_heading): ?>
                                <input type="text" class="form-control" name="welcome_heading" readonly value="<?php echo e($customer_details->welcome_heading); ?>" aria-required="true">
                                <?php else: ?>
                                <input type="text" class="form-control" name="welcome_heading" value=" " aria-required="true">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Welcome description</label>
                                <?php if($customer_details->welcome_desc): ?>
                                <textarea class="form-control" rows="4" cols="50" name="welcome_desc" id="welcome_desc"><?php echo e($customer_details->welcome_desc); ?></textarea>
                                <?php else: ?>
                                <textarea class="form-control" rows="4" cols="50" name="welcome_desc" id="welcome_desc"></textarea>
                                <?php endif; ?>

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
                                    <?php if($customer_details->mate_heading): ?>
                                    <input type="text" class="form-control" name="mate_heading" readonly value="<?php echo e($customer_details->mate_heading); ?>" aria-required="true">
                                    <?php else: ?>
                                    <input type="text" class="form-control" name="mate_heading" value=" " aria-required="true">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Material Head Description</label>
                                    <?php if($customer_details->mate_description): ?>
                                    <textarea class="form-control" rows="4" cols="50" name="mate_description" id="mate_description"><?php echo e($customer_details->mate_description); ?></textarea>
                                    <?php else: ?>
                                    <textarea class="form-control" rows="4" cols="50" name="mate_description" placeholder="Material description" id="mate_description"></textarea>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php if(count($web_materials)!=0): ?>
                            <?php $__currentLoopData = $web_materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_material => $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <div class="form-group">
                                    <input type="hidden" name="mat_web_id[]" value="<?php echo e($material->id); ?>">
                                    <label for="field-6" class="control-label">Material Name</label>
                                    <input type="text" class="form-control" name="mat_web_name[]" id="mat_web_name" value="<?php echo e($material->mat_web_name); ?>" aria-required="true" placeholder="">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-outline-danger delete-button-web-material"><i class="fa fa-times" title="Remove"></i></button>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
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
                            <?php endif; ?>
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
                                <?php if($customer_details->banner): ?>
                                <input type="hidden" name="company_banner_pre" value="<?php echo e($customer_details->banner); ?>">
                                <a href=""><?php echo e($customer_details->banner); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Company Logo</label>
                                <input type="file" class="form-control" name="comapny_logo" aria-required="true">
                                <?php if($customer_details->company_logo): ?>
                                <input type="hidden" name="company_logo_pre" value="<?php echo e($customer_details->company_logo); ?>">
                                <a href=""><?php echo e($customer_details->company_logo); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Header Color</label>
                                <input type="text" class="form-control" name="color" id="color" value="<?php echo e($customer_details->header_color); ?>" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Banner Header</label>
                                <input type="text" class="form-control" name="banner_heading" id="header_heading" value="<?php echo e($customer_details->banner_heading); ?>" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Contact Form</font></label>
                                <select class="form-control" name="company_form" aria-required="true">
                                    <?php if($customer_details->is_contact_form): ?>
                                    <option value="0">disable</option>
                                    <option value="1" selected>enable</option>
                                    <?php else: ?>
                                    <option value="0" selected>disable</option>
                                    <option value="1">enable</option>
                                    <?php endif; ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Banner Description</font></label>
                                <textarea class="form-control" rows="1" cols="50" name="banner_description" placeholder="Banner description" id="header_description"><?php if($customer_details->banner_description): ?> <?php echo e($customer_details->banner_description); ?> <?php endif; ?></textarea>
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
                <?php if(count($company_services)!=0): ?>
                <?php $__currentLoopData = $company_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_services => $value_services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="service_id[]" value="<?php echo e($value_services->id); ?>">
                                <label for="field-6" class="control-label">Service Name</label>
                                <input type="text" class="form-control" name="service_name[]" id="service_name" value="<?php echo e($value_services->services_name); ?>" aria-required="true" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Services Heading</label>
                                <input type="text" class="form-control" name="services_heading[]" value="<?php echo e($value_services->services_heading); ?>" aria-required="true" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Services Description</label>
                            <textarea class="form-control" name="services_description[]" value="<?php echo e($value_services->services_description); ?>"><?php echo e($value_services->services_description); ?></textarea>
                            <!-- <input type="text" class="form-control"  name="services_description" id="services_description" required="" aria-required="true" placeholder=""> -->
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-danger delete-button-material"><i class="fa fa-times" title="Remove"></i></button>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
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
                        <?php endif; ?>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <!--<div class="card-header">-->
                    <h4 style="border-bottom: 1px dashed#999;">Products</h4>
                    <!--</div>-->
                    <?php if(count($company_product)!=0): ?>
                    <?php $__currentLoopData = $company_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_product=>$value_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row col-md-12">
                        <div class="card" style="padding: 1em;">

                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="product_id[]" value="<?php echo e($value_product->id); ?>">
                                        <label for="field-6" class="control-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name[]" value="<?php echo e($value_product['product_name']); ?>" id="service_name" aria-required="true" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Heading</label>
                                        <input type="text" class="form-control" name="product_heading[]" value="<?php echo e($value_product['product_heading']); ?>" aria-required="true" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Image</label>
                                        <input type="file" class="form-control" name="product_image[]" aria-required="true" multiple="">
                                        <?php if($value_product['product_heading']!=""): ?>
                                        <input type="hidden" name="product_image_pre[]" value="<?php echo e($value_product['product_image']); ?>">
                                        <a href="<?php echo e(url('public/company_doc/'.$value_product['product_image'])); ?>"><?php echo e($value_product['product_image']); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Product Description</label>
                                        <textarea class="form-control" name="product_description[]"><?php echo e($value_product['product_description']); ?></textarea>
                                    </div>
                                </div>
                                <div >
                                    <button type="button" class="btn btn-outline-danger delete-button-material"><i class="fa fa-times" title="Remove"></i></button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="card" style="padding: 1em;">

                            <div class="row col-md-12">
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
                            <?php endif; ?>
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

                    </div>
            </div>  
                    </div>
            </div>
                    <div class="col-md-10">
                        <center><input type="submit" class="btn btn-outline-primary" value="Submit" style=" padding: 6px 22px;margin-top: -93px;font-size: 14px;"></center>
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
</script><?php /**PATH D:\xampp\htdocs\jiada_new\resources\views/customer/create_company_website.blade.php ENDPATH**/ ?>