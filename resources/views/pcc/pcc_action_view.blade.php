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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Pcc Agenda View</h4>
                </div>
            </div>
            <hr class="new2">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <div class="card-body">
                                <div class="row"><br><br><br>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="background: #b6e9ff;">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Agenda</th>
                                                    <th>Entity.</th>
                                                    <!-- <th>Entity Reference</th> -->
                                                    <th>Entity Name</th>
                                                    <th>Comments</th>

                                                    <th>Status</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                    @if($pcc_enitity_record)
                                                    @foreach($pcc_enitity_record as $key=>$value)

                                                    <?php 
                                                     $action_name=DB::table('pcc_master')->where('id',$value['pcc_action'])->first();
                                                     $Entity_name=DB::table('entity_master')->where('id',$value['pcc_enitity'])->first();
                                                    ?>   
                                                    <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td><input type="hidden" name="entry_pcc_name[]" value="{{@$action_name->entry_pcc_name}}"> {{@$action_name->entry_pcc_name}}</td>
                                                    <td> <input type="hidden" name="entity_name[]" value="{{@$action_name->entity_name}}">{{@$Entity_name->entity_name}}</td>
                                                    <td> <input type="hidden" name="pcc_Entity_name[]" value="{{@$value['pcc_Entity_name']}}">{{@$value['pcc_Entity_name']}}</td>
                                                    <td> <input type="hidden" name="pcc_comment[]" value="{{@$value['pcc_comment']}}">{{@$value['pcc_comment']}}</td>
                                                    <td>
                                                        <select class="form-control" name="status[]" >
                                                            <option value="1">Complete</option>
                                                            <option value="2">InComplete</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control" name="Remarks[]" ></td>
                                                </tr>
                                                    @endforeach
                                                    @endif

                                            </tbody>
                                            
                                        </table>
                                        <div>
                                            <input type="submit" style="float: right;margin-top:20px ;" class="btn btn-primary" name="Submit" value="Complete"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div> <!-- card -->
        </div> <!-- container -->
    </div> <!-- content -->