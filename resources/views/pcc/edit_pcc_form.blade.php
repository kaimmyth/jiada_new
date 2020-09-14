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
                    <h4 class="pull-left page-title" style="color: #000;font-weight:200;"><i class="ion-arrow-right-b"></i> &nbsp;&nbsp; Edit Pcc Agenda </h4>
                   
                </div>
            </div>
            <hr class="new2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-border card-info">
                        <div class="card-header" style="background-image: linear-gradient(#e9f8ff, white);">
                            <div class="card-body">
                                <div class="row"><br><br><br>
                                    <form action="{{url('pcc/pcc_from/update')}}" method="post">
                                        @csrf
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Pcc Date <font color="red">*</font></label>
                                            <input type="hidden" name="manage_pcc_action_id" value="{{$toReturn['manage_pcc_action']->id}}">
                                            <input type="text" class="form-control datepicker"  name="start_date" id="company" required="" aria-required="true" value="{{date('d-m-Y',strtotime($toReturn['manage_pcc_action']->pcc_date))}}" placeholder="" style="width:50%;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="field-6" class="control-label">Pcc Description <font color="red">*</font></label>
                                        <input type="text" class="form-control"  name="pcc_description" id="company_reg_no" value="{{$toReturn['manage_pcc_action']->pcc_desc}}" placeholder="" style="width:93%;">
                                        </div>
                                    </div>
                                    <div>

                                        <a href="{{url('pcc/pcc_agenda/freeze/'.$toReturn['manage_pcc_action']->id)}}" >
                                            <input type="button" name="freeze_Pcc" value="Freeze">
                                        </a>
                                    </div>
                                    
                                    <table id="basic-datatables" class=" table order-list" style="margin-top: 10px;">
                                        <thead style="background: #cedcff">
                                                <tr>
                                                    <th>#</th>
                                                   <th>Agenda</th>
                                                   <th>Entity</th>
                                                   <th>Entity Search</th>
                                                   <th>Entity Name   </th>
                                                   <th>Comments</th>
                                                   <th>Remove</th>
                                                </tr>
                                        </thead>
                                        <tbody id="item">
                                            @if($toReturn['pcc_enitity_record'])
                                            @foreach($toReturn['pcc_enitity_record'] as $key=>$value_pcc)
                                                  <tr> 
                                                    <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$key+1}} <span id="new_record_no"></span> </th>
                                                    <input type="hidden" class="entity_id" value="{{$value_pcc['id']}}" name="pcc_enitity_record_id[]">
                                                    <th>
                                                    <select class="form-control" name="pcc_acction[]">
                                                        @foreach($pcc_master as $value)
                                                            <option @if($value_pcc['pcc_action']==$value['id']) {{'selected'}} @endif value="{{$value['id']}}"  >{{$value['entry_pcc_name']}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    </th>
                                                    <th> 
                                                        <select class="form-control" name="pcc_enitity[]">
                                                            @foreach($entity_master as $value)
                                                                <option @if($value_pcc['pcc_enitity']==$value['id']) {{'selected'}} @endif value="{{$value['id']}}">{{$value['entity_name']}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                    <th style="height:50px">
                                                        <!-- <input type="text" name="pcc_Entity_search[]"  class="form-control" > -->
                                                        <input type="text"  name="pcc_Entity_search[]" required id="quanitiy" value="{{$value_pcc['pcc_Entity_search']}}" class="form-control" onkeyup="Select_pcc_enitity(this)" placeholder="Search Entity Name ">
                                                        <div class="land_list"></div>
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" name="pcc_Entity_name[]" required value=" {{$value_pcc['pcc_Entity_name']}}" style="width: 80%;" >
                                                        <input type="hidden" name="pcc_entity_id[]" value="{{$value_pcc['pcc_entity_id']}}">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" value="{{$value_pcc['pcc_comment']}}"  name="pcc_comment[]" style="width: 80%;" >
                                                    </th>
                                                   <td> <button type="button"   class="ibtnDel btn btn-md btn-danger delete-button-material"><span> <i class="fa fa-trash" aria-hidden="true"></i></span>&nbsp;Delete</button></td>
                                                </tr> 
                                            @endforeach
                                            @endif
                                            </tbody id="item">
                                        <tbody>
                                            <tr>
                                                <td colspan="8"><button type="button" class="btn btn-icon btn-primary btn-round btn-xs"  value="Add Row" id="adds" style="float: right;"><i class="fa fa-plus"></i></button> </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                <input type="submit" name="creat_pcc" class="btn btn-primary" >
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                </div> <!-- End Row -->
            </div> <!-- card -->
        </div> <!-- container -->
    </div> <!-- content -->
    <script>
        $( function() {
          $( ".datepicker" ).datepicker();
        } );
    </script>
       <script>
        $(document).ready(function() {
          $(".delete").hide();
          j=0;
          //when the Add Field button is clicked
          $("#adds").click(function(e) {
            j++;
            indete=j+1;
            // alert(i);
            var data = `   
            <tr>
                <th>`+indete+`</th>
                <th>
                <select class="form-control" name="pcc_acction[]">
                    @foreach($pcc_master as $value)
                        <option value="{{$value['id']}}">{{$value['entry_pcc_name']}}
                        </option>
                    @endforeach
                </select>
                </th>
                <th> 
                    <input type="hidden" value="new_record" name="pcc_enitity_record_id[]">
                    <select class="form-control" name="pcc_enitity[]">
                        @foreach($entity_master as $value)
                            <option value="{{$value['id']}}">{{$value['entity_name']}}
                            </option>
                        @endforeach
                    </select>
                </th>
                <th style="height:50px">
                    <input type="text" name="pcc_Entity_search[]" required onkeyup="Select_pcc_enitity(this)"  placeholder="Search Entity Name" class="form-control" >
                    <div class="land_list"></div>
                </th>
                <th>
                    <input type="text" class="form-control" name="pcc_Entity_name[]" required style="width: 80%;" >
                    <input type="hidden" name="pcc_entity_id[]" >

                </th>
                <th>
                    <input type="text" class="form-control" name="pcc_comment[]" required style="width: 80%;" >
                </th>
                <td><button type="button" class="ibtnDel btn btn-md btn-danger delete-button-material"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</button></td>
            </tr>`;
        $('#item').append(data);
          });
         
        });
      </script>
      <script>
      $(document).ready(function(){
        $( "#item" ).delegate( ".delete-button-material", "click", function() {
          $(this).closest("tr").remove();
        });
       
      });
    </script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
          $('.delete-button-material').on('click', function() {
              alert("fdfdf");
              id=$('.entity_id').val();
              alert(id);
                $.ajax({
                  url: "{{url('pcc/action_form/enitity')}}" + '/' + id,
                  type: "GET",
                  success: function(data) {
                  }
                })
             
          });
        });
      </script> -->
      <script>
 
      </script>
      <script>
        function Select_pcc_enitity(e)
        {
          var query = $(e).val();
          var tr_object = $(e).closest("tr");
          enitity_id=$(tr_object).find("select[name='pcc_enitity[]']").val();
          if(enitity_id==4)
          {
              if (query != '') { 
                  $.ajax({
                      url: "{{url('pcc/searchLand')}}" + '/' + query,
                      type:"GET",
                      success:function (data) {
                          console.log(data);
                          // $(tr_object).children('.land_list').html(data);
                          $(tr_object).find(".land_list").html(data);
                      }
                  });
              }else{
                  $(tr_object).find('.land_list').html(""); 
              }
          }else if(enitity_id==5)
          {
              if (query != '') { 
              $.ajax({
              url: "{{url('pcc/searchcompany')}}" + '/' + query,
              type:"GET",
              success:function (data) {
                  $(tr_object).find('.land_list').html(data);
              }
              });
          }else{
              $(tr_object).find('.land_list').html(""); 
          }
      }
      else{
          $(tr_object).find('.land_list').html("Enitity No Found")
      }
  }

   </script>
  <script>
  function addland(id,e) {  
      var tr_object = $(e).parents("tr");
      $.ajax({
      url: "{{url('pcc/getland')}}" + '/' + id,
      method: "get",
      success: function(data) {
          $(tr_object[1]).find("input[name='pcc_Entity_name[]']").val(data.land_name);
          $(tr_object[1]).find("input[name='pcc_entity_id[]']").val(data.id);
      }
      });
  }
  function addcustomer(id,e) { 
      var tr_object = $(e).parents("tr");
      $.ajax({
      url: "{{url('pcc/getcompany')}}" + '/' + id,
      method: "get",
      success: function(data) {
          $(tr_object[1]).find("input[name='pcc_Entity_name[]']").val(data.company);
          $(tr_object[1]).find("input[name='pcc_entity_id[]']").val(data.id);
     
      }
      });
}
  </script>