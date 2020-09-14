<style>
    body {
        padding: 0;
        margin: 0;

    }

    .report_wrapper {
        line-height: 12px;
    }

    @media screen and (max-width:746px) {
        .report_wrapper {
            line-height: 8px;
        }
    }

    .panel-heading:hover {
        background-color: #dddbdb;
    }
</style>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <form action="{{ URL::to('customer/save-enterprises')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="row" id="dashboard-row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title" style="color: #000; font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;Customer :&nbsp; Add / <a href="javascript::void(0);" onclick="history.back();">Back</a></h4>
                        <ol class="breadcrumb pull-right">
                        </ol>
                    </div>
                </div>
                <!----------------------------------------form starts from here---------------------------------->
                <!--------------------------------first row-------------------------------------->
                <div class="row col-md-12">
                    <div class="col-md-12">
                        <h4> Basic Details</h4></br></br></br>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label>Name Of Unit / Enterprise:&nbsp;</label>
                            <input type="text" class="form-control" name="nameofUnit" id="nameofUnit">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label>Date Of DOP:&nbsp;</label>
                            <input type="date" class="form-control" name="dateofDOP" id="dateofDOP">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label>Name Of Promoter: &nbsp;</label>
                            <input type="email" class="form-control" name="nameOfPromoteer" id="nameOfPromoteer">
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
                            <label>Contact No:&nbsp;</label>
                            <input type="text" class="form-control" name="cantactNo" id="cantactNo">
                            <br><br>
                            <label>District:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" class="form-control" name="district" id="district">
                            <br><br>
                            <label>Sector:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" class="form-control" name="sector" id="sector">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br>
                            <label>Email:&nbsp;</label>
                            <input type="text" class="form-control" name="email" id="email">
                            <br><br>
                            <label>Block:&nbsp;</label>
                            <input type="text" class="form-control" name="block" id="block">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Address:&nbsp;</label>
                            <input type="text" class="form-control" name="address" id="address">
                            <br><br>
                            <label>Land Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select class="form-control" name="landType" id="landType">
                                <option>--select--</option>
                                <option>Goverment</option>
                                <option>Private</option>
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
                            <label>Regular Employee:&nbsp;</label>
                            <input type="text" class="form-control" name="regularEmployee" id="regularEmployee">
                            <br>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <div class="form-group">
                            <label> Contractual Employee:&nbsp;</label>
                            <input type="text" class="form-control" name="contractualEmployee" id="contractualEmployee">
                        </div>

                    </div>

                    <div class="col-md-4">
                        <br>
                        <div class="form-group">
                            <label>Daily Basis Employee: &nbsp;</label>
                            <input type="email" class="form-control" name="dailyBasis" id="dailyBasis">
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
                            <label>Product:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" name="products" class="form-control" id="products">
                            <br><br>
                            <label>TurnOver FY 17-18:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" class="form-control" name="turnOverInFy1" id="turnOverInFy1">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Type Of Unit:&nbsp;</label>
                            <select class="form-control" name="typeOfUnit" id="typeOfUnit">
                                <option>--select--</option>
                                <option>Mega</option>
                                <option>Small</option>
                                <option>Micro</option>
                            </select>
                            <br><br>
                            <label>Turn Over (FY 18-19):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" class="form-control" name="turnOverInFy2" id="turnOverInFy1">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <br><br>
                            <label>Investment:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" class="form-control" name="investment" id="investment">
                            <br><br>
                            <label>Indirect Employment:&nbsp;</label>
                            <input type="text" class="form-control" name="indirectEmployment" id="indirectEmployment">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Of Male Employee(Direct):&nbsp;</label>
                            <input type="text" class="form-control" name="noofMaleEmployeeDirect" id="noofMaleEmployeeDirect">
                            <br><br>
                            <label>Status Of Unit:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <select class="form-control" name="statusofUnit" id="statusofUnit">
                                <option>--select--</option>
                                <option>Operational</option>
                                <option>Closed</option>
                                <option>Sick</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Of Female Employee(Direct):&nbsp; </label>
                            <input type="text" class="form-control" name="noofFemaleEmployeeDirect" id="noofFemaleEmployeeDirect">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Value Of Export:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <input type="text" class="form-control" name="valueofExport" id="valueofExport">
                        </div>
                    </div>
                </div>
                <div class="row col-md-12" style="text-align: left; margin-bottom: 6px;">
                    <center><button type="submit" class="btn btn-primary waves-effect waves-light" onclick="return company_share_value()"> Create
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
</script>