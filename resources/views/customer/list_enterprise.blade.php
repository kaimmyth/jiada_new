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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Customers </h4>
                    <ol class="breadcrumb pull-right">
                    </ol>
                </div>
            </div>
            <hr class="new2">

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="alert alert-danger alert-dismissible fade show" id='timesheetinfo' style="display: none;">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <b><span id="message"></span></b>
                            </div>
                        </div>
                    </div>
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);padding: 0px !important;">
                            <div class="card-body">
                                
                                <div class="row"><br><br><br>

                                    <div class="col-md-12 col-sm-12 col-12">
                                        <a href="{{url('customer/add-enterprises')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right; margin-top: 1%;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                                        <table id="datatable1" class="table  table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="background: #b6e9ff;">
                                                <tr>
                                                    <th> Name</th>
                                                    <th> Type</th>
                                                    <th> Address</th>
                                                    <th style="width: 2%;"> Status</th>
                                                    <th style="width: 3%;"> Date Created</th>
                                                    <td style="width:10% ;background-color: e1f1f9;"></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div> <!-- card -->
        </div> <!-- container -->
    </div> <!-- content -->
    