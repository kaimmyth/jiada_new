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
        <div class="row">
          <div class="col-sm-12">
            <h4 class="pull-left page-title">Customer View</h4>
            <ol class="breadcrumb pull-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Customers</a></li>
              <li class="active">Customers Listing</li>
            </ol>
          </div>
        </div>
        <?php  
          $data = ltrim($directorData);
        ?>
      @if(count($directorData)!=0)
        <div class="row">
          <div class="col-lg-12">
              <div class="col-xl-12">
                  <ul class="nav nav-tabs" role="tablist">
                     
                      <li class="nav-item">
                          <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                              <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                              <span class="d-none d-sm-block"><strong>LLP Director</strong></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="message" aria-selected="false">
                              <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                              <span class="d-none d-sm-block"><strong>Share Holder Info</strong></span>
                          </a>
                      </li>
                     
                  </ul>
                  <div class="tab-content">
                     
                      <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
            <div class="card">
                <div class="card-header" style="background-color: #317eeb;"></div>
                <div class="card-body">
                    <div class="row"><br><br><br>
                      <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone Number</th>
                              <th>Company Name</th>
                              <th>Share value </th>
                              <th>Share Percentage</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($directorData as $key=>$value)
                            <tr>
                              <td>{{@$value['f_name']}},&nbsp;@if($value['l_name']) {{@$value['l_name']}} @endif</td>
                              <td>{{@$value['email']}}</td>
                              <td>{{@$value['mobile']}}</td>
                              <td>{{@$value['company']}}</td>
                              <td>{{@$value['svalue']}}</td>
                              <td>{{@$value['svalue_percentage']}}</td>
                              </tr>   
                            @endforeach     
                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
                      </div>
                      <div class="tab-pane" id="message" role="tabpanel" aria-labelledby="message-tab">
                        
            <div class="card">
                <div class="card-header" style="background-color: #317eeb;"></div>
                <div class="card-body">
                    <div class="row"><br><br><br>
                      <div class="col-md-12 col-sm-12 col-12">
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                            <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Company Name</th>
                            <th>Share value </th>
                            <th>Share Percentage</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach(@$shareholderData as $key=>$value)
                            <tr>
                            <td>{{@$value['f_name']}},&nbsp;@if($value['l_name']) {{@$value['l_name']}} @endif</td>
                            <td>{{@$value['email']}}</td>
                            <td>{{@$value['mobile']}}</td>
                            <td>{{@$value['company']}}</td>
                            <td>{{@$value['svalue']}}</td>
                            <td>{{@$value['svalue_percentage']}}</td>
                            </tr>   
                            @endforeach     
                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
                      </div>
                     
                  </div>
              </div>


             </div>
           </div> <!-- End Row -->
         </div> <!-- card --> 
         @endif
        @if(count($editData_comp)!=0)
         <div class="card">
                <div class="card-header" style="background-color: #317eeb;"></div>
                <div class="card-body">
                    <div class="row"><br><br><br>
                      <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone Number</th>
                              <th>Unit Name</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              @foreach(@$editData_comp as $key_per=>$value)
                              <tr>
                            <td>{{@$editData_comp[$key_per]['f_name']}},&nbsp; {{@$editData_comp[$key_per]['l_name']}}</td>
                            <td>{{@$editData_comp[$key_per]['email']}}</td>
                            <td>{{@$editData_comp[$key_per]['mobile']}}</td>
                            <td>{{@$editData_comp[$key_per]['company']}}</td>
                              </tr>
                              @endforeach
                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div> 
                 </div>                                                
       </div> <!-- container -->
     </div> <!-- content -->
     @endif
     
 