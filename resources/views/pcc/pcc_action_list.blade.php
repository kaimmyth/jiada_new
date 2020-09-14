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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Pcc Agenda List</h4>
                   
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
                                        <a href="{{url('pcc/pcc_from')}}"><button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5" style="float:right;margin-top: 1%;"><i class="md md-add-circle-outline"></i> Add</button></a><br>
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="background: #b6e9ff;">
                                                <tr>
                                                    <th>Pcc Date</th>
                                                    <th>Pcc Description</th>
                                                    <th>Status.</th>
                                                    <th>View Pcc</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($manage_pcc_action)
                                              @foreach($manage_pcc_action as $key =>$value)
                                              <tr>
                                              <th><a href="{{url('pcc/edit_from/'.$value['id'])}}"> {{date('M j, Y',strtotime(@$value['pcc_date']))}}</a></th>
                                              <th>{{@$value['pcc_desc']}}</th>
                                              @if(@$value->status == 1)
                                              <td>
                                                  <p class="mb-0">
                                                      <span class="badge badge-success">Agenda </span>
                                                  </p>
                                              </td>
                                              @elseif(@$value->status == 2)
                                              <td>
                                                  <p class="mb-0">
                                                      <span class="badge badge-primary">Freeze</span>
                                                  </p>
                                              </td>
                                              
                                              @elseif(@$value->status == 3)
                                              <td>
                                                  <p class="mb-0">
                                                      <span class="badge badge-warning">In Progress</span>
                                                  </p>
                                              </td>
                                              @else
                                              <td>
                                                  <p class="mb-0">
                                                      <span class="badge badge-success">Complete</span>
                                                  </p>
                                              </td>
                                              @endif
                                              <td> <a href="{{url('pcc/pcc_actionview/'.$value['id'])}}"><span><i class="fa fa-eye" aria-hidden="true"></i>
                                              </span></a></td>
                                            </tr>
                                              @endforeach
                                              @endif
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