<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Manage Users</h4>
                    <ol class="breadcrumb pull-right">
                        <!-- <li><a href="{{ URL::to('home') }}">Home</a></li>
                        <li><a href="{{URL::to('home')}}">Master</a></li>
                        <li class="active">Manage Users</li> -->
                    </ol>
                </div>
            </div>
            <hr class="new2">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">

                            <table id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <button type="button" data-toggle="modal" data-target="#generic-model" class="btn btn-purple" style="float:right;margin-top: 0px !important;">Set Generic User<i class="md md-add-circle-outline"></i></button>
                                <!-- <!-- <button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;" onclick="addRecords()">Add <si class="md md-add-circle-outline"></si></button> -->
                                <a href="{{url('add/users/from')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 0px !important;">Add <i class="md md-add-circle-outline"></i></button></a>

                                <thead style="background: #b6e9ff;">
                                    <tr>
                                        <th style="width: 2%;">Sl.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th style="width: 2%;">Status</th>
                                        <th style="width: 2%;">Date Created</th>
                                        <td style="background-color: e1f1f9;"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($userData as $key => $data) @if($data->id >1)
                                    <tr>
                                        <td class="text-right">{{ $key+1}}.&nbsp;</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td class="text-right">{{ $data->phone }}</td>
                                        @if($data->status == 1)
                                        <td class="text-center">
                                            <p class="mb-0" style="color: green;">
                                                <span class=""><i class="fas fa-dot-circle"></i></i>
                                                </span>
                                            </p>
                                        </td>
                                        @else
                                        <td class="text-center">
                                            <p class="mb-0" style="color:#e63841 ;">
                                                <span class=""><i class="fas fa-dot-circle"></i></span>
                                            </p>
                                        </td>
                                        @endif
                                        <td class="text-right">{{ date('d/m/Y',strtotime($data->created_at)) }}</td>
                                        <td class="actions">
                                            <a href="{{url('edit/users/from/'.$data->id)}}" class="on-default edit-row" onclick="editRecords({{$data->id}})" data-toggle="tooltip" data-modal="modal-12" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp;&nbsp;
                                            <a href="{{ URL::to('users/destroy',$data->id)}}" class="on-default remove-row" onclick="return confirm('Are you sure you want to delete this item?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fas fa-trash" style="color:red;"></i></a>
                                        </td>
                                    </tr>
                                    @endif @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end card-body -->
                    </div>
                </div>
                <!-- container -->
            </div>
        </div>
    </div>
</div>
<!-- content -->
<!--- MODEL CALL--->
<div id="department-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0">User info</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('add/users') }}" method="POST" id="FormValidation" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="ids" id="ids">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label"> Name </label>
                                <input type="text" id="name" name="name" class="form-control" required="" aria-required="true" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Email</label>
                                <input type="emial" id="email" name="email" class="form-control" required="" aria-required="true" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">User Name</label>
                                <input type="emial" id="username" name="username" class="form-control" required="" aria-required="true" placeholder="Enter UserName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required="" aria-required="true" placeholder="Enter  Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control" required="" aria-required="true" placeholder="Enter Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p class="control-label"><b>Is Active</b>
                                    <font color="red">*</font>
                                </p>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" value="1" name="status" checked="">
                                    <label for="inlineRadio1"> Active </label>
                                </div>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" value="0" name="status">
                                    <label for="inlineRadio1"> Inactive </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="new2">
                <div class="modal-footer">
                    <button type="submit" id="submitbtn" class="btn btn-outline-primary">Submit</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal eND -->


<div id="generic-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0">Generic User info</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('check_generic')}}" method="POST" id="FormValidation" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="ids" id="ids">
                <div class="modal-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sel1">Generic</label>
                            <select class="select2 form-control" name="generic_id_check" required="">
                                <option value="">-- Select Generic POC --</option>
                                @if($userData !='')
                                @foreach($userData as $data)
                                @if($data->id > 1)
                                <option value="{{ $data->id }}" <?php if($data->generic_id==1){echo "selected";} ?>> {{ $data->name}}</option>
                                @endif
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                </div>
                <hr class="new2">
                <div class="modal-footer">
                    <button type="submit" id="submitbtn" class="btn btn-ouline-primary">Submit</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script type="text/javascript">
    function editRecords(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('users/edit/')}}" + '/' + id,
            method: "POST",
            contentType: 'application/json',
            success: function (data) {
                // console.log(data);
                document.getElementById("ids").value = data.id;
                document.getElementById("name").value = data.name;
                document.getElementById("email").value = data.email;
                document.getElementById("phone").value = data.phone;
                document.getElementById("username").value = data.username;
                document.getElementById("password").value = data.password;
                var val = data.status;
                if (val == 1) {
                    $('input[name=status][value=' + val + ']').prop('checked', true);
                } else {
                    $('input[name=status][value=' + val + ']').prop('checked', true);
                }
                document.getElementById("submitbtn").innerText = 'UPDATE';
                $('#department-model').modal('show');
            }
        });
    }

    function addRecords() {
        document.getElementById("ids").value = '';
        document.getElementById("name").value = '';
        document.getElementById("email").value = '';
        document.getElementById("phone").value = '';
        document.getElementById("username").value = '';
        //  document.getElementById("status").value = '';
        document.getElementById("password").value = '';
        document.getElementById("submitbtn").innerText = 'Save';
        $('#department-model').modal('show');
    }
</script>
<script type="text/javascript">
    function addajax() {
        $.ajax({
            url: 'display.php',
            method: 'post',
            content: 'application/json',
            success: function (data) {
                document.getElementById('ids').value = '';
            }
        });
    }
</script>