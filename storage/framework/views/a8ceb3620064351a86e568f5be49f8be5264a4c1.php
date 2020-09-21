<style>
    .card .card-header {
        padding: 1px 20px;
        border: none;
    }

    .form-control {
        -moz-border-radius: 2px;
        -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        -webkit-border-radius: 2px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
        border-radius: 2px;
        border: 1px solid #b3b1b1;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: rgba(0, 0, 0, 0.6);
        font-size: 14px;
        box-shadow: 0px 0px #ffffff;
        width: 100%;
    }
</style>
<div class="content-page">
    <div class="content">
        <!-- Start content -->
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Land Registrations</h4>
                    <ol class="breadcrumb pull-right">
                        <!-- <li><a href="#">Home</a></li>
                        <li><a href="#">Registration</a></li>
                        <li class="active">Registration listing</li> -->
                    </ol>
                </div>
            </div>
            <hr class="new2">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);padding: 0px !important;">
                            <div class="card-body">
                                <div class="row"><br><br><br>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <?php if($user_id!=1): ?>
                                        <?php if(@$module_permission['is_add']=='yes'): ?>
                                        <a href="<?php echo e(url('land/registration_create')); ?>"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                                        <?php endif; ?>
                                        <?php else: ?>
                                        <a href="<?php echo e(url('land/registration_create')); ?>"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5 ttnne" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                                        <?php endif; ?>
                                        <table id="datatable1" class="table  table-bordered dt-responsive" style="border-collapse: collapse; width:100%; border-spacing: 0;">
                                            <thead style="background: #b6e9ff;">
                                                <tr>
                                                    <th style="width: 20%;">Companies</th>
                                                    <th style="width: 10%;">Application No.</th>
                                                    <th style="width: 10%;">Registration No.</th>
                                                    <th style="width: 10%;">Allotment No.</th>
                                                    <th style="width: 10%;">Land Name</th>
                                                    <th style="width: 10%;">Registration Date</th>
                                                    <th style="width: 2%;">Status</th>
                                                    <th style="width: 10%; background-color: e1f1f9;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(count($results)!=0): ?>
                                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td style="text-transform: capitalize;"><?php echo e(@$val->company_name); ?></td>
                                                    
                                                    <td class="text-right"><?php echo e($val->application_no ?? ''); ?></td>
                                                    <td class="text-right"><?php echo e($val->registration_no); ?></td>
                                                    <td class="text-right"><?php echo e($val->allotment_no ?? ''); ?></td>
                                                    <td style="text-transform: capitalize;"><?php echo e($val->land_name ?? ''); ?></td>
                                                    <td class="text-right"><?php echo e(date('d/m/Y',strtotime($val->created_at))); ?></td>
                                                    <?php if($val->status == 1): ?>
                                                    <td class="text-center">
                                                        <p class="mb-0" style="color: green;">
                                                            <span class=""><i class="fas fa-dot-circle"></i></i>
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <?php else: ?>
                                                    <td class="text-center">
                                                        <p class="mb-0" style="color:#e63841 ;">
                                                            <span class=""><i class="fas fa-dot-circle"></i></span>
                                                        </p>
                                                    </td>
                                                    <?php endif; ?>
                                                    <td class="actions">
                                                        <?php if($user_id!=1): ?>
                                                        <?php if(@$module_permission['is_read']=='yes'): ?>
                                                        <a href="javascript::void(0);" class="on-default view-row" onclick="View_Registration(<?php echo e($val->id); ?>)" data-placement="top" title="View "><i class="fa fa-eye"></i></a>
                                                        <?php endif; ?>
                                                        <?php else: ?>
                                                        <a href="javascript::void(0);" class="on-default view-row" onclick="View_Registration(<?php echo e($val->id); ?>)" data-placement="top" title="View "><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
                                                        <?php endif; ?>
                                                        <?php if($user_id!=1): ?>
                                                        <?php if(@$module_permission['is_edit']=='yes'): ?>
                                                        <!-- <a href="javascript::void(0);" id="editpm" onclick="Edit_Registration(<?php echo e($val->id); ?>)" class="on-default remove-row"  title="" data-original-title="Update"><i class="fas fa-pencil-alt"></i></a> -->
                                                        <a href="<?php echo e(url('land/registration_editFetch',$val->id)); ?>" id="editpm" class="on-default remove-row" title="Update" data-original-title="Update"><i class="fas fa-pencil-alt"></i></a>
                                                        <?php endif; ?>
                                                        <?php else: ?>
                                                        <a href="<?php echo e(url('land/registration_editFetch',$val->id)); ?>" id="editpm" class="on-default remove-row" title="Update" data-original-title="Update"><i class="fas fa-pencil-alt"></i></a>
                                                        <?php endif; ?>
                                                        &nbsp;&nbsp;<a href="<?php echo e(url('land/invoice',$val->id)); ?>" class="on-default remove-row" title="Download Invoice" data-original-title="Download Invoice"><i class="fa fa-download"></i></a>
                                                        &nbsp;&nbsp;
                                                        <a href="javascript::void(0);" class="on-default remove-row" onclick="View_history(<?php echo e($val->land_id); ?>)" title="View History" data-original-title="View History"><i class="fa fa-history"></i></a>
                                                        &nbsp;&nbsp;
                                                        <a href="javascript::void(0);" class="on-default remove-row" onclick="transfer_land(<?php echo e($val->id); ?>)" title="Transfer Land" data-original-title="Transfer Land"><i class="fa fa-forward"></i></a>
                                                        &nbsp;&nbsp;

                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                        <?php echo e($results->links()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div> <!-- card -->
        </div> <!-- container -->
    </div> <!-- content -->
    <div class="modal" id="change_regNo">
        <div class="modal-dialog  modal-sm">
            <div class="modal-content">
                <h4 style="color: #0892FC">Create Registration Numaber</h4>
                <form action="<?php echo e(URL::to('land/create/new-regis-no')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="new_regId" id="new_regId">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Enter New Reg. Number</label>
                                    <input type="text" class="form-control" id="new_regno" name="new_regno">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Update</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        try {

            function changeRegistration(id) {
                $('#change_regNo').modal('show');
                document.getElementById('new_regId').value = id;
            }

            function Registration() {

                $('#add_customer').modal('show');
            }

            function View_Registration(id) {
                $("#loader1").css("display", "block");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "<?php echo e(url('land/registration/view/')); ?>" + '/' + id,
                    method: "get",
                    contentType: 'application/json',
                    success: function (data) {
                        $("#customer_details").empty();
                        $("#leaseInvoice_data").empty();
                        console.log(data);
                        for (var i = 0; i < data.leaseInvoice.length; i++) {

                            if (data.leaseInvoice[i].based_rent == null) {
                                data.leaseInvoice[i].based_rent = "N/A";
                            }
                            if (data.leaseInvoice[i].insurance == null) {
                                data.leaseInvoice[i].insurance = "N/A";
                            }
                            if (data.leaseInvoice[i].additional_charge == null) {
                                data.leaseInvoice[i].additional_charge = "N/A";
                            }
                            if (data.leaseInvoice[i].net_payable == null) {
                                data.leaseInvoice[i].net_payable = "N/A";
                            }
                            if (data.leaseInvoice[i].start_date == null) {
                                data.leaseInvoice[i].start_date = "N/A";
                            }
                            if (data.leaseInvoice[i].tax == null) {
                                data.leaseInvoice[i].tax = "N/A";
                            }
                            if (data.leaseInvoice[i].maintanance == null) {
                                data.leaseInvoice[i].maintanance = "N/A";
                            }
                            if (data.leaseInvoice[i].net_pay == null) {
                                data.leaseInvoice[i].net_pay = "N/A";
                            }
                            if (data.leaseInvoice[i].lease_time == null) {
                                data.leaseInvoice[i].lease_time = "N/A";
                            }
                            $("#leaseInvoice_data").append("<tr><td>" + data.leaseInvoice[i].based_rent + "</td><td>" + data.leaseInvoice[i].insurance + "</td><td>" + data.leaseInvoice[i].additional_charge + "</td><td>" + data.leaseInvoice[i].net_payable + "</td><td>" + data.leaseInvoice[i].start_date + "</td><td>" + data.leaseInvoice[i].tax + "</td><td>" + data.leaseInvoice[i].maintanance + "</td><td>" + data.leaseInvoice[i].net_pay + "</td><td>" + data.leaseInvoice[i].lease_time + "</td><td>");
                        }
                        // document.getElementById('ids').value = data.lease_details.Id;
                        // document.getElementById('cust_ids').value = data.leasedata.cust_id;
                        document.getElementById("plot_no").innerHTML = data.lease_details.plot_no;
                        document.getElementById("plot_name").innerHTML = data.lease_details.land_name;
                        document.getElementById("appli_no").innerHTML = data.lease_details.application_no;
                        document.getElementById("allot_no").innerHTML = data.lease_details.allotment_no;
                        document.getElementById('Cutomercompany_type').innerHTML = data.comapany_detail.typeOfUnit;
                        document.getElementById('Cutomercompany_name').innerHTML = data.comapany_detail.nameofUnit;
                        document.getElementById('CutomernameOfPromoteer').innerHTML = data.comapany_detail.nameOfPromoteer;
                        document.getElementById('CutomercantactNo').innerHTML = data.comapany_detail.cantactNo;


                        $("#loader1").css("display", "none");
                        $('#view_registration_customer').modal('show');
                    }
                });
            }

            function View_history(land_id) {
                $("#loader1").css("display", "block");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "<?php echo e(url('land/registration/history/')); ?>" + '/' + land_id,
                    method: "get",
                    contentType: 'application/json',
                    success: function (data) {
                        console.log(data);
                        $("#history_view").empty();
                        for (var i = 0; i < data.lease_history.length; i++) {
                            if (data.lease_history[i].company_name == null) {
                                data.lease_history[i].company_name = "N/A";
                            }
                            if (data.lease_history[i].allotment_no == null) {
                                data.lease_history[i].allotment_no = "N/A";
                            }

                            if (data.lease_history[i].registration_no == null) {
                                data.lease_history[i].registration_no = "N/A";
                            }
                            if (data.lease_history[i].application_date == null) {
                                data.lease_history[i].application_date = "N/A";
                            }

                            if (data.lease_history[i].allotment_date == null) {
                                data.lease_history[i].allotment_date = "N/A";
                            }
                            if (data.lease_history[i].pcc_date == null) {
                                data.lease_history[i].pcc_date = "N/A";
                            }

                            if (data.lease_history[i].transfer_amount == null) {
                                data.lease_history[i].transfer_amount = "N/A";
                            }
                            if (data.lease_history[i].land_price == null) {
                                data.lease_history[i].land_price = "N/A";
                            }
                            $("#history_view").append("<tr><td><a href='<?php echo e(url('land/customercompany/view')); ?>/" + data.lease_history[i].company_id + "'>" + data.lease_history[i].company_name + "</a></td><td>" + data.lease_history[i].allotment_no + "</td><td>" + data.lease_history[i].registration_no + "</td><td>" + data.lease_history[i].application_date + "</td><td>" + data.lease_history[i].application_date + "</td><td>" + data.lease_history[i].allotment_date + "</td><td>" + data.lease_history[i].pcc_date + "</td><td>" + data.lease_history[i].transfer_amount + "</td><td>" + data.lease_history[i].land_price + "</td></tr>");
                        }
                        $("#loader1").css("display", "none");
                        $('#history').modal('show');
                    }
                });
            }

            function transfer_land(land_id) {
                // alert(land_id);
                $("#loader1").css("display", "block");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "<?php echo e(url('land/transfer_land')); ?>" + '/' + land_id,
                    method: "get",
                    contentType: 'application/json',
                    success: function (data) {
                        console.log(data);
                        document.getElementById('lease_id').value = data.id;
                        $("#loader1").css("display", "none");
                        $('#land_transfer').modal('show');
                    }
                });
            }

            function Edit_Registration(id) {

                $("#loader1").css("display", "block");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "<?php echo e(url('land/registration/edit/')); ?>" + '/' + id,
                    method: "POST",
                    contentType: 'application/json',
                    success: function (data) {
                        $("#customer_details").empty();
                        $("#leaseInvoice_data").empty();
                        console.log(data);
                        for (var i = 0; i < data.ltdpvt.length; i++) {
                            if ((data.ltdpvt.company_type) == 'proprietorship') {
                                var customer_type = "Proprietorship";
                            }
                            else {
                                if (data.ltdpvt[i].is_director == 0) {
                                    var customer_type = "Share Holder"
                                }
                                else {
                                    var customer_type = " Director ";
                                }
                            }
                            if (data.ltdpvt[i].f_name == null) {
                                data.ltdpvt[i].f_name = "N/A";
                            }
                            if (data.ltdpvt[i].l_name == null) {
                                data.ltdpvt[i].l_name = "N/A";
                            }
                            if (data.ltdpvt[i].mobile == null) {
                                data.ltdpvt[i].mobile = "N/A";
                            }
                            if (data.ltdpvt[i].company_name == null) {
                                data.ltdpvt[i].company_name = "N/A";
                            }
                            if (data.ltdpvt[i].email == null) {
                                data.ltdpvt[i].email = "N/A";
                            }
                            //   if(data.itdpvt[i].f_name==null)
                            //   {
                            $("#customer_details").append("<tr><td>" + data.ltdpvt[i].f_name + "&nbsp;" + data.ltdpvt[i].l_name + "</td><td>" + customer_type + "</td><td>" + data.ltdpvt[i].mobile + "</td><td>" + data.ltdpvt[i].company + "</td><td>" + data.ltdpvt[i].email + "</td></tr>");
                            //   }
                            //   else
                            //   {
                            //       $("#customer_details").hide();
                            //   }

                        }
                        for (var i = 0; i < data.leaseInvoice.length; i++) {
                            if (data.leaseInvoice[i].based_rent == null) {
                                data.leaseInvoice[i].based_rent = "N/A";
                            }
                            if (data.leaseInvoice[i].insurance == null) {
                                data.leaseInvoice[i].insurance = "N/A";
                            }
                            if (data.leaseInvoice[i].additional_charge == null) {
                                data.leaseInvoice[i].additional_charge = "N/A";
                            }
                            if (data.leaseInvoice[i].net_payable == null) {
                                data.leaseInvoice[i].net_payable = "N/A";
                            }
                            if (data.leaseInvoice[i].start_date == null) {
                                data.leaseInvoice[i].start_date = "N/A";
                            }
                            if (data.leaseInvoice[i].tax == null) {
                                data.leaseInvoice[i].tax = "N/A";
                            }
                            if (data.leaseInvoice[i].maintanance == null) {
                                data.leaseInvoice[i].maintanance = "N/A";
                            }
                            if (data.leaseInvoice[i].net_pay == null) {
                                data.leaseInvoice[i].net_pay = "N/A";
                            }
                            if (data.leaseInvoice[i].lease_time == null) {
                                data.leaseInvoice[i].lease_time = "N/A";
                            }
                            $("#leaseInvoice_data").append("<tr><td>" + data.leaseInvoice[i].based_rent + "</td><td>" + data.leaseInvoice[i].insurance + "</td><td>" + data.leaseInvoice[i].additional_charge + "</td><td>" + data.leaseInvoice[i].net_payable + "</td><td>" + data.leaseInvoice[i].start_date + "</td><td>" + data.leaseInvoice[i].tax + "</td><td>" + data.leaseInvoice[i].maintanance + "</td><td>" + data.leaseInvoice[i].net_pay + "</td><td>" + data.leaseInvoice[i].lease_time + "</td><td>");
                        }
                        document.getElementById('ids').value = data.lease_details.Id;
                        document.getElementById('cust_ids').value = data.leasedata.cust_id;
                        document.getElementById("plot_no").innerHTML = data.lease_details.plot_no;
                        document.getElementById("plot_name").innerHTML = data.lease_details.land_name;
                        document.getElementById("appli_no").innerHTML = data.lease_details.application_no;
                        document.getElementById("allot_no").innerHTML = data.lease_details.allotment_no;
                        // document.getElementById('e_f_name').innerHTML = data.f_name;
                        document.getElementById('Cutomercompany_type').innerHTML = data.lease_details.company_type;
                        document.getElementById('Cutomercompany_name').innerHTML = data.lease_details.company_name;

                        // document.getElementById('e_occupation').innerHTML = data.occupation;
                        // document.getElementById('e_dob').innerHTML = data.dob;
                        // document.getElementById('e_mobile').innerHTML = data.mobile;
                        // document.getElementById('e_company').innerHTML = data.company;
                        // document.getElementById('e_email').innerHTML = data.email;
                        // document.getElementById('e_gender').innerHTML = data.gender;
                        var baserent = data.leasedata.based_rent;
                        var tax = data.leasedata.tax;
                        var luration = data.leasedata.lease_duration;
                        var insurance = data.leasedata.insurance;
                        var maintanance = data.leasedata.maintanance;
                        var addCharge = data.leasedata.additional_charge;
                        var netPay = data.leasedata.net_pay;
                        var lTime = data.leasedata.lease_time;
                        var Sdate = data.leasedata.start_date;
                        var netPayable = data.leasedata.net_payable;

                        $("#EditTrans").css("display", "block");
                        $("#ViewTrans").css("display", "none");
                        $("#submitbtndiv").css("display", "block");

                        // $("#message-tab-2").className = "active";
                        document.getElementById('message-tab-2').target.className = "active";

                        document.getElementById('e_based_rent').value = baserent;
                        document.getElementById('e_taxes').value = tax;
                        document.getElementById('time_duration').value = luration;
                        document.getElementById('e_insurance').value = insurance;
                        document.getElementById('e_maintanance').value = maintanance;
                        document.getElementById('e_additional_charge').value = addCharge;
                        document.getElementById('e_netpaybill').value = netPay;
                        document.getElementById('e_yers').value = lTime;
                        document.getElementById('e_start_date').value = Sdate; tag_n
                        var val = netPayable;
                        if (val == 'monthly') {
                            $('input[name=net_payable][value=' + val + ']').prop('checked', true);
                            document.getElementById('tag_n').innerHTML = 'Month';
                        } else {
                            $('input[name=net_payable][value=' + val + ']').prop('checked', true);
                            document.getElementById('tag_n').innerHTML = 'Year';
                        }
                        document.getElementById('submitbtn').innerHTML = "Update";

                        $("#loader1").css("display", "none");
                        // $('#view_registration_customer').modal('show');
                        // window.location("editSave_registration");
                        return redirect('editSave_registration');
                    }
                });
            }
        } catch (err) {
            var error = err.message;
            alert(error)
        }


    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#e_additional_charge').on('change', function () {
                var value = $(this).val();
                var bs = Number(document.getElementById('e_based_rent').value);
                var tax = Number(document.getElementById('e_taxes').value);
                var ins = Number(document.getElementById('e_insurance').value);
                var mainti = Number(document.getElementById('e_maintanance').value);
                var adi = Number(document.getElementById('e_additional_charge').value);
                var pay = bs + tax + ins + mainti + adi;
                document.getElementById('e_netpaybill').value = pay;
            });

        });

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("input[name$='net_payable']").click(function () {
                var test = $(this).val();
                if (test == 'monthly') {
                    document.getElementById('tag_n').textContent = 'Month';
                    document.getElementById('time_duration').value = 'm';
                } else {
                    document.getElementById('tag_n').textContent = 'Year';
                    document.getElementById('time_duration').value = 'yr';
                }
            });
        });

    </script>

    <!--  Modal content for the above example -->
    <div class="modal fade" id="view_registration_customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">Registration Info</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#"  id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="ids" id="ids">
                    <input type="hidden" name="cust_ids" id="cust_ids">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <ul class="nav nav-tabs tabs" role="tablist">
                                    <li class="nav-item tab">
                                        <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#landView" role="tab" aria-controls="landView" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                            <span class="d-none d-sm-block">Land Details</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#CustView" role="tab" aria-controls="CustView" aria-selected="true">
                                            <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                            <span class="d-none d-sm-block">Customer Details</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" id="message-tab-2" data-toggle="tab" href="#LeaseView" role="tab" aria-controls="LeaseView" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                            <span class="d-none d-sm-block">Lease Details</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="landView" role="tabpanel" aria-labelledby="home-tab-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Plot N :- </label>
                                                    <div class="col-sm-7">
                                                        <b style="color: #F47C11;" id="plot_no"></b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Plot Name :- </label>
                                                    <div class="col-sm-7">
                                                        <b style="color: #F47C11;" id="plot_name"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Application No :- </label>
                                                    <div class="col-sm-7">
                                                        <b style="color: #F47C11;" id="appli_no"></b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Allotment No :- </label>
                                                    <div class="col-sm-7">
                                                        <b style="color: #F47C11;" id="allot_no"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="CustView" role="tabpanel" aria-labelledby="profile-tab-2">
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Company Name :- </label>
                                                    <div class="col-sm-7">
                                                        <b style="color: #F47C11;" id="Cutomercompany_name"></b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Company Type :- </label>
                                                    <div class="col-sm-7" style="text-transform: capitalize;">
                                                        <b style="color: #F47C11;" id="Cutomercompany_type"></b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Person Name :- </label>
                                                    <div class="col-sm-7" style="text-transform: capitalize;">
                                                        <b style="color: #F47C11;" id="CutomernameOfPromoteer"></b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row form-group">
                                                    <label class="col-sm-5 control-label" for="example-input-normal">Contact No.:- </label>
                                                    <div class="col-sm-7" style="text-transform: capitalize;">
                                                        <b style="color: #F47C11;" id="CutomercantactNo"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="tab-pane" id="LeaseView" role="tabpanel" aria-labelledby="message-tab-2">

                                        <div class="col-md-12">

                                            <div id="ViewTrans" class="col-md-12">
                                                <table class="table" style="font-size:10px">
                                                    <thead>
                                                        <tr>
                                                            <th>Based Rent</th>
                                                            <th>Insurance </th>
                                                            <th>Additional Charge.</th>
                                                            <th>Payable Time.</th>
                                                            <th>Starting Date</th>
                                                            <th>Taxes</th>
                                                            <th>Maintanance </th>
                                                            <th>Payment Frequency</th>
                                                            <th>Lease Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="leaseInvoice_data">
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- <div class="row" id="EditTrans" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal">Based Rent</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="based_rent" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_based_rent" required="" aria-required="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal">Taxes</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="taxes" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_taxes" required="" aria-required="true">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal">Insurance</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="insurance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_insurance" required="" aria-required="true"> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal">Maintanance</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="maintanance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_maintanance" required="" aria-required="true"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal">Additional Charge</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="additional_charge" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_additional_charge" required="" aria-required="true">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal">Net Payable</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="netpaybill" id="e_netpaybill" readonly="" required="" aria-required="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal" style="display: flex;">Payment Frequency</label>
                                                            <div class="col-sm-7">
                                                                <div class="radio radio-info form-check-inline">
                                                                    <input type="radio" id="inlineRadio1" value="monthly" name="net_payable" id="months">
                                                                    <label for="inlineRadio1"> Monthly </label>
                                                                </div>
                                                                <div class="radio form-check-inline">
                                                                    <input type="radio" id="inlineRadio2" checked="checked" value="yearly" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="net_payable" id="year">
                                                                    <label for="inlineRadio2"> Yearly </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal"><span id="tag_n">Year</span>(s)</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="lease_time" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_yers" required="" aria-required="true">
                                                                <input type="hidden" class="form-control" name="lease_duration" id="time_duration" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"> </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row form-group">
                                                            <label class="col-sm-12 control-label" for="example-input-normal">Starting Date</label>
                                                            <div class="col-sm-7">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="e_start_date" required="" aria-required="true">
                                                                    <div class="input-group-append">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Based Rent</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <input type="text" class="form-control" name="based_rent" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_based_rent" required="" aria-required="true">
                                                </div>
                                                <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Taxes</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <input type="text" class="form-control" name="taxes" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_taxes" required="" aria-required="true">
                                                </div>
                                                <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Insurance</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <input type="text" class="form-control" name="insurance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_insurance" required="" aria-required="true">
                                                </div> -->
                                                <!-- <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Maintanance</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <input type="text" class="form-control" name="maintanance" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_maintanance" required="" aria-required="true">
                                                </div>
                                                <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Additional Charge</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <input type="text" class="form-control" name="additional_charge" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_additional_charge" required="" aria-required="true">
                                                </div>
                                                <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Payment Frequency</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <input type="text" class="form-control" name="netpaybill" id="e_netpaybill" readonly="" required="" aria-required="true">
                                                </div> -->
                                                <!-- <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Payment Frequency</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <div class="radio radio-info form-check-inline">
                                                        <input type="radio" id="inlineRadio1" value="monthly" name="net_payable" id="months">
                                                        <label for="inlineRadio1"> Monthly </label>
                                                    </div>
                                                    <div class="radio form-check-inline">
                                                        <input type="radio" id="inlineRadio2" checked="checked" value="yearly" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="net_payable" id="year">
                                                        <label for="inlineRadio2"> Yearly </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal"><span id="tag_n">Year</span>(s)</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <input type="text" class="form-control" name="lease_time" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" id="e_yers" required="" aria-required="true">
                                                    <input type="hidden" class="form-control" name="lease_duration" id="time_duration" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                                <div class="col-md-4" style="margin-top: 6px;">
                                                    <label class="col-sm-12 control-label" for="example-input-normal">Starting Date</label>
                                                </div>
                                                <div class="col-md-8" style="margin-top: 6px;">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="e_start_date" required="" aria-required="true">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="md md-event"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!--end of row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="submitbtndiv" style="text-align: right;">
                        <!-- <button type="submit" id="submitbtn" class="btn btn-outline-primary waves-effect waves-light m-b-5">submit</button> -->
                        <button type="button" data-dismiss="modal" class="btn btn-secondary waves-effect m-b-5">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#searchcustomer').on('keyup', function () {
                var query = $(this).val();
                if (query != '') {
                    $("#modelloader").css("display", "block");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "<?php echo e(url('land/serachcustomers/')); ?>" + '/' + query,
                        type: "GET",
                        success: function (data) {
                            $("#modelloader").css("display", "none");
                            $('#customer_list').html(data);
                        }
                    })
                } else {
                    $('#customer_list').html("");
                }
            });
            $(document).on('click', 'td', function () {
                var value = $(this).text();
                $('#customer_list').html("");
                $("#searcherror").css("display", "none");
            });

            /* Land */
            $('#searchland').on('keyup', function () {
                var query = $(this).val();
                if (query != '') {
                    $("#modelloader").css("display", "block");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "<?php echo e(url('land/serachland/')); ?>" + '/' + query,
                        type: "GET",
                        success: function (data) {
                            $("#modelloader").css("display", "none");
                            $('#land_list').html(data);
                        }
                    })
                } else {
                    $('#land_list').html("");
                }
            });
            $(document).on('click', 'td', function () {
                var value = $(this).text();
                $('#land_list').html("");
            });

        });

        function addcustomer(id) {
            $("#modelloader").css("display", "block");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo e(url('land/customer/add/')); ?>" + '/' + id,
                method: "POST",
                contentType: 'application/json',
                success: function (data) {
                    console.log(data)
                    $("#modelloader").css("display", "none");
                    var name = data.f_name + ' ' + data.l_name;
                    var email = data.email;
                    var mobile = data.mobile;
                    document.getElementById("cust_id").value = data.id;
                    document.getElementById("searchcustomer").value = name;
                }
            });
        }

        function addland(id) {
            $("#modelloader").css("display", "block");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo e(url('land/land/add/')); ?>" + '/' + id,
                method: "POST",
                contentType: 'application/json',
                success: function (data) {
                    console.log(data)
                    $("#modelloader").css("display", "none");
                    // document.getElementById("plot_no").value = data.plot_no;
                    document.getElementById("land_id").value = data.id;
                    document.getElementById("searchland").value = data.land_name;
                }
            });
        }

    </script>
    <!-- Add Customers -->

    <div class="modal fade bs-example-modal-lg" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
        <!-- Ajax Page Loader -->
        <div class="preload loaderpopupbox modelloader" id="modelloader" style="display:none;">
            <div class="popup">
                <center>
                    <span class="loader10" style="display:block;"><img src="<?php echo e(url('public/assets/images/loader.gif')); ?>" height="40" /></span>
                </center>
            </div>
        </div>
        <!-- Close -->
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0" id="myLargeModalLabel">Land Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(URL::to('land/create/registration')); ?>" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row form-group">
                                    <label class="col-sm-4 control-label" for="example-input-normal">Customer</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" name="cust_name" id="searchcustomer" class="form-control" placeholder="search" autocomplete="off">
                                            <input type="hidden" name="cust_id" id="cust_id">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                        <div id="customer_list"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row form-group">
                                    <label class="col-sm-4 control-label" for="example-input-normal">Land</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" id="searchland" name="land_name" class="form-control" placeholder="search">
                                            <input type="hidden" name="land_id" id="land_id">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-outline-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                        <div id="land_list"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row form-group">
                                    <label class="col-sm-5 control-label" for="example-input-normal">Application No.</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="application_no">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row form-group">
                                    <label class="col-sm-5 control-label" for="example-input-normal">Application Date.</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control autodate" name="application_date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row form-group">
                                    <label class="col-sm-5 control-label" for="example-input-normal">Allotment No.</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="allotment_no">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="row form-group">
                                    <label class="col-sm-5 control-label" for="example-input-normal">Allotment Date.</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control autodate" name="allotment_date">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Customer Details</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="col-sm-4 control-label" for="example-input-normal">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">First Name</label>
                                                <input type="text" class="form-control" name="f_name" id="f_name" placeholder="First Name" style="width: 129px; margin-right: 5px;" required="" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Last Name</label>
                                                <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Last Name" style="width: 129px;" required="" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top: 6px;">
                                        <label class="col-sm-4 control-label" for="example-input-normal">Gender</label>
                                    </div>
                                    <div class="col-md-9" style="margin-top: 6px;">
                                        <select class="form-control" name="gender" id="genader" required="" aria-required="true">
                                            <option value="">-Select Gender-</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3" style="margin-top: 6px;">
                                        <label class="col-sm-4 control-label" for="example-input-normal">Occupation</label>
                                    </div>
                                    <div class="col-md-9" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="occupation" id="e_occupation" required="">
                                    </div>
                                    <div class="col-md-3" style="margin-top: 6px;">
                                        <label class="col-sm-4 control-label" for="example-input-normal">DOB</label>
                                    </div>
                                    <div class="col-md-9" style="margin-top: 6px;">
                                        <div class="input-group">
                                            <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="dob" id="dob" required="" aria-required="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="md md-event"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top: 6px;">
                                        <label class="col-sm-4 control-label" for="example-input-normal">Contact</label>
                                    </div>
                                    <div class="col-md-9" style="margin-top: 6px;">
                                        <input type="text" class="form-control" placeholder="+91" name="mobile" id="mobile" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-3" style="margin-top: 6px;">
                                        <label class="col-sm-4 control-label" for="example-input-normal">Company</label>
                                    </div>
                                    <div class="col-md-9" style="margin-top: 6px;">
                                        <input type="text" class="form-control" placeholder="" name="company" id="company" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-3" style="margin-top: 6px;">
                                        <label class="col-sm-4 control-label" for="example-input-normal">Email</label>
                                    </div>
                                    <div class="col-md-9" style="margin-top: 6px;">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="" name="email" id="email" required="" aria-required="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-left: 93px; margin-top: 12px;">
                                        <div class="form-group">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">
                                                    Add to contact list
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Lease Details</h4>
                                <hr>
                                <div class="row">
                                    <!-- <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Based Rent</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="based_rent" id="based_rent" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Taxes</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="taxes" id="taxes" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Insurance</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="insurance" id="insurance" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Maintanance</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="maintanance" id="maintanance" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Additional Charge</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="additional_charge" id="additional_charge" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Payment Frequency</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="netpaybill" id="netpaybill" required="" aria-required="true">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Payment Frequency</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1" value="monthly" name="add_net_payable" id="net_payable" checked="checked">
                                            <label for="inlineRadio1"> Monthly </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="yearly" name="add_net_payable" id="net_payable">
                                            <label for="inlineRadio2"> Yearly </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal"><span id="add_tag_n">Year</span>(s)</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <input type="text" class="form-control" name="lease_time" required="" aria-required="true">
                                        <input type="hidden" class="form-control" name="lease_duration" id="add_time_duration">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 6px;">
                                        <label class="col-sm-12 control-label" for="example-input-normal">Starting Date</label>
                                    </div>
                                    <div class="col-md-8" style="margin-top: 6px;">
                                        <div class="input-group">
                                            <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="start_date" required="" aria-required="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="md md-event"></i></span>
                                            </div>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <button type="submit" class="btn btn-outline-primary waves-effect waves-light m-b-5">Save</button>
                <button type="button" class="btn btn-secondary waves-effect m-b-5">Reset</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#additional_charge').on('change', function () {
            var value = $(this).val();
            var bs = Number(document.getElementById('based_rent').value);
            var tax = Number(document.getElementById('taxes').value);
            var ins = Number(document.getElementById('insurance').value);
            var mainti = Number(document.getElementById('maintanance').value);
            var adi = Number(document.getElementById('additional_charge').value);
            var pay = bs + tax + ins + mainti + adi;
            document.getElementById('netpaybill').value = pay;
        });

        $("input[name$='add_net_payable']").click(function () {
            var test = $(this).val();
            if (test == 'monthly') {
                document.getElementById('add_tag_n').textContent = 'Month';
                document.getElementById('add_time_duration').value = 'm';
            } else {
                document.getElementById('add_tag_n').textContent = 'Year';
                document.getElementById('add_time_duration').value = 'yr';
            }
        });

    });

</script>


<div class="modal fade bd-example-modal-lg" id="history" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <table class="table" style="font-size:10px">
                <thead>
                    <tr>

                        <th>Company Name</th>
                        <th>Allotment No.</th>
                        <th>Registration No.</th>
                        <th>Application Date.</th>
                        <th>Allotment Date.</th>
                        <th>Registration Date.</th>

                        <th>Pcc Date</th>
                        <th>Transfer Amount</th>
                        <th>Land Price</th>

                        <!-- <th>Company Type</th> -->
                    </tr>
                </thead>
                <tbody id="history_view">
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="land_transfer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Land Transfer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Customer -->
            <div class="card" id="customerList" style="display: block;">
                <!-- Ajax Page Loader -->
                <div class="preload loaderpopupbox modelloader" id="modelloader" style="display:none;">
                    <div class="popup">
                        <center>
                            <span class="loader10" style="display:block;"><img src="<?php echo e(url('public/assets/images/loader.gif')); ?>" height="70" /></span>
                        </center>
                    </div>
                </div>
                <!-- Close -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="md-form mt-0">
                                (<b style="color:#E94810">Note:- </b>Search customer for transfer Registration with Name, Email, Phone, Mobile)<br><br>
                                <input class="form-control search" onclick="SearchCustomer()" autocomplete="off" id="csearch" type="text" placeholder="Search Customer" aria-label="Search" autofocus>
                            </div>&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>
                            <br>
                            <br>
                            <div id="customer_transfer_list"></div>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="col-sm-12">
                        <div class="" id="contrannsfer" style="display: none;">
                            <form action="<?php echo e(url('land/ragistration/transfer')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">

                                            <label for="field-1" class="control-label">Application No.</label>
                                            <input type="hidden" name="cusID" id="custo_id">
                                            <!-- <input type="hidden" name="cust_email" id="cust_email"> -->
                                            <input type="hidden" name="cust_phone" id="cust_phone">
                                            <input type="hidden" name="customer_name" id="customer_name">
                                            <input type="hidden" name="customer_email_id" id="customer_email_id">
                                            <input type="hidden" name="lease_id" id="lease_id">
                                            <input type="text" class="form-control" placeholder="Application No" name="application_no">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Allotment No</label>
                                            <input type="text" class="form-control" placeholder="Allotment No" name="allotment_no">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Registration No</label>
                                            <input type="text" class="form-control" placeholder="Registration No" name="registration_no">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Application Date</label>
                                            <input type="text" class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="application_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Allotment Date</label>
                                            <input type="text" class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="allotment_date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Registration Date</label>
                                            <input type="text" class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="registration_date">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">PCC Date</label>
                                            <input type="text" class="form-control dateFilter" type="text" placeholder="dd-mm-yyyy" name="pcc_date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Transfer Amount</label>
                                            <input type="text" class="form-control" placeholder="" name="transfer_amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Land Price</label>
                                            <input type="text" class="form-control" placeholder="" name="land_price">
                                        </div>
                                    </div>

                                    <div class="col-md-3"><br><br>
                                        <div class="form-group">

                                            <!-- <input type="checkbox" name="all_tearm"> -->
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox4" type="checkbox" name="all_tearm">
                                                <label for="checkbox4">
                                                    All Trems
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p style="font-size: 17px; font-weight: 700;">Lease Details</p>
                                <!-- <div class="row">
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-3 control-label" for="example-input-normal">Base Rent </label>
                                          <div class="col-sm-4">
                                            <input type="number" class="form-control"  name="based_rent" id="based_rent" required="" aria-required="true">
                                          </div>
                                        </div> 
                                      </div>
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-4 control-label" for="example-input-normal">Insurance </label>
                                          <div class="col-sm-4">
                                            <input type="number" class="form-control"  name="insurance" id="insurance" required="" aria-required="true">
                                          </div>
                                        </div> 
                                      </div>
                          
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-4 control-label" for="example-input-normal">Maintanance </label>
                                          <div class="col-sm-4">
                                            <input type="number" class="form-control"  name="maintanance" id="maintanance" required="" aria-required="true">
                                          </div>
                                        </div> 
                                      </div>
                          
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-3 control-label" for="example-input-normal">Taxes </label>
                                          <div class="col-sm-4">
                                            <input type="number" class="form-control"   name="taxes" id="taxes" required="" aria-required="true">
                                          </div>
                                        </div> 
                                      </div>
                          
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-4 control-label" for="example-input-normal">Additional Charge </label>
                                          <div class="col-sm-4">
                                            <input type="number" class="form-control"  name="additional_charge" id="additional_charge" required="" aria-required="true">
                                          </div>
                                        </div> 
                                      </div>
                        
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-4 control-label" for="example-input-normal">Payment Frequency </label>
                                          <div class="col-sm-4">
                                            <input type="number" class="form-control"  name="netpaybill" id="netpaybill" required="" readonly="" aria-required="true">
                                          </div>
                                        </div> 
                                      </div>
                          
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-3 control-label" for="example-input-normal">Payment Frequency</label>
                                          <div class="radio radio-info form-check-inline" style="padding-left: 32px;">
                                            <input type="radio" id="inlineRadio1" value="monthly" name="add_net_payable" id="net_payable">
                                            <label for="inlineRadio1"> Monthly </label>
                                          </div>
                                          <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="yearly" name="add_net_payable" id="net_payable" checked="checked" style="width: 195px;">
                                            <label for="inlineRadio2"> Yearly </label>
                                          </div>
                                        </div> 
                                      </div>
                          
                                      <div class="col-md-4">
                                        <div class="row form-group">
                                          <label class="col-sm-4 control-label" for="example-input-normal"><span id="add_tag_n">Year</span>(s) </label>
                                          <div class="col-sm-4">
                                           <input type="number" class="form-control"name="lease_time"  required="" aria-required="true">
                                           <input type="hidden" class="form-control"  name="lease_duration" id="add_time_duration">
                                         </div>
                                       </div> 
                                     </div>
                        
                                     <div class="col-md-4">
                                      <div class="row form-group">
                                        <label class="col-sm-4 control-label" for="example-input-normal">Starting Date </label>
                                        <div class="col-sm-4">
                                         <div class="input-group">
                                          <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="start_date" required="" aria-required="true">
                                          <div class="input-group-append">
                                            <span class="input-group-text"><i class="md md-event"></i></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div> 
                                  </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Base Rent </label>
                                            <input type="number" class="form-control" name="based_rent" id="based_rent" required="" aria-required="true">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Insurance </label>
                                            <input type="number" class="form-control" name="insurance" id="insurance" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Maintanance </label>
                                            <input type="number" class="form-control" name="maintanance" id="maintanance" required="" aria-required="true">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Taxes </label>
                                            <input type="number" class="form-control" name="taxes" id="taxes" required="" aria-required="true"> </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Additional Charge </label>
                                            <input type="number" class="form-control" name="additional_charge" id="additional_charge" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Net Payable </label>
                                            <input type="number" class="form-control" name="netpaybill" id="netpaybill" required="" readonly="" aria-required="true">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Payment Frequency</label><br>
                                            <div class="radio radio-info form-check-inline" style="padding-left: 32px;">
                                                <input type="radio" id="inlineRadio1" value="monthly" name="add_net_payable" id="net_payable">
                                                <label for="inlineRadio1"> Monthly </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="yearly" name="add_net_payable" id="net_payable" checked="checked" style="width: 195px;">
                                                <label for="inlineRadio2"> Yearly </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal"><span id="add_tag_n">Year</span>(s) </label>
                                            <input type="number" class="form-control" name="lease_time" required="" aria-required="true">
                                            <input type="hidden" class="form-control" name="lease_duration" id="add_time_duration">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-input-normal">Starting Date </label>
                                            <input type="text" class="form-control autodate" placeholder="mm/dd/yyyy" name="start_date" id="start_date" required="" aria-required="true">

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button role="button" type="submit" class="btn btn-outline-primary">Transfer</button>
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
<script type="text/javascript">
    $(document).ready(function () {
        $('#additional_charge').on('change', function () {
            var value = $(this).val();
            var bs = Number(document.getElementById('based_rent').value);
            var tax = Number(document.getElementById('taxes').value);
            var ins = Number(document.getElementById('insurance').value);
            var mainti = Number(document.getElementById('maintanance').value);
            var adi = Number(document.getElementById('additional_charge').value);
            var pay = bs + tax + ins + mainti + adi;
            document.getElementById('netpaybill').value = pay;
        });

        $("input[name$='add_net_payable']").click(function () {
            var test = $(this).val();
            if (test == 'monthly') {
                document.getElementById('add_tag_n').textContent = 'Month';
                document.getElementById('add_time_duration').value = 'm';
            } else {
                document.getElementById('add_tag_n').textContent = 'Year';
                document.getElementById('add_time_duration').value = 'yr';
            }
        });

    });
</script>
<script type="text/javascript">
    function SearchCustomer() {
        $('.search').on('keyup', function () {
            var query = $(this).val();
            // alert(query);
            if (query != '') {
                $('#contrannsfer').css("display", "none");
                $("#modelloader").css("display", "block");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "<?php echo e(url('land/serachtransfercustomers/')); ?>" + '/' + query,
                    type: "GET",
                    success: function (data) {
                        document.getElementById("csearch").style.color = "";
                        $("#modelloader").css("display", "none");
                        $('#customer_transfer_list').html(data);
                    }
                })
            } else {
                $('#customer_transfer_list').html("");
            }
        });
        $(document).on('click', 'td', function () {
            var value = $(this).text();
            $('#customer_transfer_list').html("");
        });
    };
</script>
<script type="text/javascript">
    function addtransfercustomer(id) {
        $("#modelloader").css("display", "block");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "<?php echo e(url('land/transfercustomer/add/')); ?>" + '/' + id,
            method: "POST",
            contentType: 'application/json',
            success: function (data) {
                console.log(data)
                $("#modelloader").css("display", "none");
                document.getElementById('customer_name').value = data.Company.nameofUnit;
                document.getElementById("custo_id").value = data.Company.id;
                $('#contrannsfer').css("display", "block");
            }
        });
    }
</script><?php /**PATH C:\xampp\htdocs\jiada_new\resources\views/customer/registration.blade.php ENDPATH**/ ?>