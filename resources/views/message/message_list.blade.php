<style>
   hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
      border: 1px solid gainsboro;
      border-radius: 5px;
      width: 100%;
   }

   hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
      border: 1px solid gainsboro;
      border-radius: 5px;
      width: 100%;
   }

   .table td,
   .table th {
      padding: 0rem !important;
      vertical-align: inherit !important;
      border-top: 1px solid #dee2e6;
      font-size: 13px;
      color: black;
      text-align: center;
   }

   .modal .modal-dialog .modal-content {
      -moz-box-shadow: none;
      -webkit-box-shadow: none;
      border-color: #DDDDDD;
      border-radius: 2px;
      box-shadow: none;
      padding: 15px !important;
   }

   .upl img {
      width: 50px;
      margin-left: 22px;
      height: 50px;
   }

   .inp input {
      border: 1px solid #6d6d6d;
      border-radius: 3px;
      height: 23px;
      margin-left: 22px;
      margin-top: 7px;
      width: 60px;
   }
</style>
<!-- Start content -->
<div class="content-page">
   <div class="content">
      <div class="container-fluid">
      
         <div class="row">
            <div class="col-md-12">
         
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                           <table id="datatable1" class="table  table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead style="background: #b6e9ff;">
                                 <tr style="height: 28px;">
                                    <th style="width: 2%;">Sl.</th>
                                    <th>Name</th>
                                    <th data-priority="1">Email</th>
                                    <th data-priority="1">Phone</th>
                                    <th data-priority="1">Message</th>
                                 </tr>
                              </thead>
                              <tbody id="myTable">
                                 @foreach($messages as $key => $data)
                                 <tr style="height: 28px;">
                                     
                                    <td class="text-right">{{$key+1}}.&nbsp;</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td class="text-right">{{$data->phone }} &nbsp;</td>
                                    <td>{{$data->message }} </td>
                                 
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                           {!! $messages->links() !!}

                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row -->

            </div>
         </div>
      </div>
   </div>
</div>