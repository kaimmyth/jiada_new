<style>
    .phn {
        font-size: 15px;
    }

    .mail {
        font-size: 16px;
        color: darkblue;
    }

    .das {
        flex: 0 0 16.666667%;
        max-width: 11.666667%;
    }

    .set {
        border-radius: 50%;
    }

    .container {
        width: -webkit-fill-available;
    }

    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
        width: 230px;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Leads Information</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{url('dashboard')}}">Home</a></li>
                        <li><a href="{{url('leads/view')}}">leads</a></li>
                        <li class="active">Leads info</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 das">
                                    <img src="{{asset('public/assets/images/avatar.png')}}" class="set" alt="Avatar"
                                        style="width:150px">
                                </div>

                                <div class="col-md-4">
                                    <h3>Mr. Rakesh Singh</h3>
                                    <p class="mail">abc@gmail.com</p>
                                    <p class="phn">+919325632563</p>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" style="float: right;">Edit</button>
                                </div>

                                


                                <div class="container">
                                    <div class="stepwizard">
                                        <div class="stepwizard-row setup-panel">
                                            <div class="stepwizard-step">
                                                <a href="#step-1"><button
                                                        class="btn btn-primary btn-circle btn-circle-sm m-1"><i
                                                            class="fa fa-circle"
                                                            style="font-size:24px color:white"></i></button></a>
                                                <p>Unqualified</p>
                                            </div>
                                            <div class="stepwizard-step">
                                                <a href="#step-2"><button class="btn btn-primary btn-circle btn-circle-sm m-1"><i class="fa fa-circle" disabled="disabled" style="font-size:24px color:white"></i></button></a>
                                                <p>New</p>
                                            </div>

                                            <div class="stepwizard-step">
                                                <a href="#step-3"><button class="btn btn-primary btn-circle btn-circle-sm m-1"><i class="fa fa-circle" disabled="disabled"
                                                        style="font-size:24px color:white"></i></button></a>
                                                <p>Working</p>
                                            </div>

                                            <div class="stepwizard-step">
                                                <a href="#step-4"><button class="btn btn-primary btn-circle btn-circle-sm m-1"><i class="fa fa-circle" disabled="disabled"
                                                        style="font-size:24px color:white"></i></button></a>
                                                <p>Nurturing</p>
                                            </div>


                                            <div class="stepwizard-step">
                                                <a href="#step-5"><button class="btn btn-primary btn-circle btn-circle-sm m-1"><i class="fa fa-circle" disabled="disabled" style="font-size:24px color:white"></i></button></a>
                                                <p>Qualified</p>
                                            </div>


                                        </div>

                                    </div>

                                    <form role="form">
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <h3> Lead Details</h3>
                                                    <table class="table table-bordered">

                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <td>Mr. Rakesh Singh</td>
                                                                <th>Phone</th>
                                                                <td>+91 7896541236</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Email</th>
                                                                <td>abc@gmail.com</td>
                                                                <th>Mobile</th>
                                                                <td>+91 7896541236</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Website</th>
                                                                <td>www.google.com</td>
                                                                <th>Company</th>
                                                                <td>NIIT</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Fax</th>
                                                                <td>-</td>
                                                                <th>No. Of Employees</th>
                                                                <td>-</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Lead Owner</th>
                                                                <td>Admin User</td>
                                                                <th>Lead Status</th>
                                                                <td>New</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Rating</th>
                                                                <td>Cold</td>
                                                                <th>Anual Revenue</th>
                                                                <td>-</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Lead Source</th>
                                                                <td>-</td>
                                                                <th>Industry</th>
                                                                <td>Banking</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button class="btn btn-primary nextBtn btn-lg pull-right"
                                                        type="button">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-2">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <h3> Step 2</h3>
                                                    <div class="form-group">
                                                        <label class="control-label">Company Name</label>
                                                        <input maxlength="200" type="text" required="required"
                                                            class="form-control" placeholder="Enter Company Name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Company Address</label>
                                                        <input maxlength="200" type="text" required="required"
                                                            class="form-control" placeholder="Enter Company Address" />
                                                    </div>
                                                    <button class="btn btn-primary nextBtn btn-lg pull-right"
                                                        type="button">Next</button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row setup-content" id="step-3">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <h3> Step 3</h3>
                                                    <div class="form-group">
                                                        <label class="control-label">Company Name</label>
                                                        <input maxlength="200" type="text" required="required"
                                                            class="form-control" placeholder="Enter Company Name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Company Address</label>
                                                        <input maxlength="200" type="text" required="required"
                                                            class="form-control" placeholder="Enter Company Address" />
                                                    </div>
                                                    <button class="btn btn-primary nextBtn btn-lg pull-right"
                                                        type="button">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row setup-content" id="step-4">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <h3> Step 4</h3>
                                                    <div class="form-group">
                                                        <label class="control-label">Company Name</label>
                                                        <input maxlength="200" type="text" required="required"
                                                            class="form-control" placeholder="Enter Company Name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Company Address</label>
                                                        <input maxlength="200" type="text" required="required"
                                                            class="form-control" placeholder="Enter Company Address" />
                                                    </div>
                                                    <button class="btn btn-primary nextBtn btn-lg pull-right"
                                                        type="button">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row setup-content" id="step-5">
                                            <div class="col-xs-12">
                                                <div class="col-md-12">
                                                    <h3> Step 5</h3>
                                                    <button class="btn btn-success btn-lg pull-right"
                                                        type="submit">Finish!</button>
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
    </div>
</div>

<script>
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>