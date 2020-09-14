
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row" id="dashboard-row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp;Manage Users</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{ URL::to('home') }}">Home</a></li>
                        <li><a href="{{URL::to('home')}}">Master</a></li>
                        <li class="active">Manage Users</li>
                    </ol>
                </div>
            </div>
            <hr class="new2">
            <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <form action="{{url('update/users')}}" method="post">
                                @csrf()
                            <div class="card-header"><h3 class="card-title">Edit User</h3></div>
                                <div class="card-body">
                                   <input type="hidden" value="{{$toReturn['data']->id}}" name="user_id" >
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{@$toReturn['data']->name}}" id="" placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" id="" value="{{@$toReturn['data']->email}}" name="email" placeholder="" required>
                                            </div>
                                    </div> <!-- col-->

                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" id="" value="{{@$toReturn['data']->username}}" name="user_name" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" id="" value="{{@$toReturn['data']->password}}" name="password" placeholder="" required>
                                        </div>
                                </div> <!-- col-->

                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="number" class="form-control" id="" name="phone" value="{{@$toReturn['data']->phone}}" min="1" placeholder="" >
                                    </div>
                                    <div class="form-group"><br>
                                        <label for="">Is Active</label><br>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1" value="1"  value= "@if($toReturn['data']->status==1) checked='checked'  @endif" name="status" >
                                            <label for="inlineRadio1"> Active</label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="0" name="status">
                                            <label for="inlineRadio2">Inactive</label>
                                        </div>
                                    </div>
                            </div> <!-- col-->
                                </div> <!-- End row -->

                                <table class="table table-striped add-edit-table dt-responsive nowrap" id="datatable-editable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Module Name</th>
                                        <th>Read</th>
                                        <th>Add</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($toReturn['module'] as $key => $value) 
                                    <tr> 
                                        <?php $module_permission=DB::table('user_permission')->where('permission_value',$value['ID'])->first();
                                        ?>

                                    <td>{{$value['module_name']}}<input id="text" name="module[]" value="{{$value['ID']}}" type="hidden"> <input type="hidden" name="module_permission_id[]" value="{{$module_permission->ID}}" > </td>
                                    <td><input  name="read{{$value['ID']}}"  value="read"  @if($module_permission->is_read=='yes') checked='checked'  @endif   type="checkbox" ></td>
                                    <td><input  name="add{{$value['ID']}}"  value="add"  @if($module_permission->is_add=='yes') checked='checked'  @endif   type="checkbox"></td>
                                    <td><input  name="edit{{$value['ID']}}"   value="edit" @if($module_permission->is_edit=='yes') checked='checked'  @endif   type="checkbox"></td>
                                    <td><input  name="delete{{$value['ID']}}}" value="delete" @if($module_permission->is_delete=='yes') checked='checked'  @endif   type="checkbox"></td>
                                    <tr>
                                    <tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Update</button>
                                </div>
                            </div><!-- card-body -->
                        </form>
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </div>
</div>