<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\entity_master;
use App\pcc_master;
use App\pcc_enitity_record;
use  App\manage_pcc_action;
use App\Land;
use App\CustCompany;
use DB;
use Response;

class PccActionController extends Controller
{
    public function pcc_action_list()
    {
        $manage_pcc_action = manage_pcc_action::get();
        $data['content'] = 'pcc.pcc_action_list';
        return view('layouts.content', compact('data'))->with('manage_pcc_action', $manage_pcc_action);
    }
    public function pccform_view()
    {
        $pcc_master = pcc_master::get();
        $entity_master = entity_master::get();
        $data['content'] = 'pcc.pcc_form';
        return view('layouts.content', compact('data'))->with('pcc_master', $pcc_master)->with('entity_master', $entity_master);
    }
    public function pccform_add(Request $request)
    {
      // return $request;
        $manage_pcc_action = new manage_pcc_action();
        $manage_pcc_action->pcc_date = date('Y-m-d', strtotime($request->start_date));
        $manage_pcc_action->pcc_desc = $request->pcc_description;
        $manage_pcc_action->status = 1;
        $manage_pcc_action->save();
        if ($request->pcc_acction) {
            foreach ($request->pcc_acction as $key => $value) {
                $pcc_enitity_record = new pcc_enitity_record();
                $pcc_enitity_record->manage_pcc_id = $manage_pcc_action->id;
                $pcc_enitity_record->pcc_action = $request->pcc_acction[$key];
                $pcc_enitity_record->pcc_enitity = $request->pcc_enitity[$key];
                $pcc_enitity_record->pcc_entity_id=$request->pcc_entity_id[$key];
                $pcc_enitity_record->pcc_Entity_search = $request->pcc_Entity_search[$key];
                $pcc_enitity_record->pcc_Entity_name = $request->pcc_Entity_name[$key];
                $pcc_enitity_record->pcc_comment = $request->pcc_comment[$key];
                $pcc_enitity_record->status = 1;
                $pcc_enitity_record->save();
            }
        }
        return redirect('pcc/pcc_action_view');
    }
    public function pcc_action_view($id = "")
    {
        $manage_pcc_action = manage_pcc_action::where('id', $id)->where('status', 1)->first();
        // return $manage_pcc_action;
        $pcc_enitity_record = pcc_enitity_record::where('manage_pcc_id', $id)->get();
        $current_date = date('Y-m-d');
        // if($manage_pcc_action->pcc_date>=$current_date)
        // {
        //     // return "ok";
        //     $data['content'] = 'pcc.pcc_action_view';
        // return view('layouts.content', compact('data','pcc_enitity_record'));
        // }
        // else {
        //     return "date End";
        // }
        // return $pcc_enitity_record;
        $data['content'] = 'pcc.pcc_action_view';
        return view('layouts.content', compact('data', 'pcc_enitity_record'));
    }
    public function edit_pcc_form($id = "")
    {
      $check_freeze=manage_pcc_action::where('id',$id)->first();
      if($check_freeze->status==2){
        return redirect('pcc/pcc_actionview/'.$id);
      }
      $current_date = date('Y-m-d');
      if($check_freeze->pcc_date<=$current_date)
        {
            return redirect('pcc/pcc_actionview/'.$id);
        }
        $pcc_master = pcc_master::get();
        $entity_master = entity_master::get();
        $toReturn['manage_pcc_action'] = manage_pcc_action::where('id', $id)->where('status', 1)->first();
        $toReturn['pcc_enitity_record'] = pcc_enitity_record::where('manage_pcc_id', $id)->where('status', 1)->get();
        $data['content'] = 'pcc.edit_pcc_form';
        return view('layouts.content', compact('data', 'toReturn'))->with('pcc_master', $pcc_master)->with('entity_master', $entity_master);
    }
  public function pccform_update(Request $request)
  {
    $manage_pcc_action = manage_pcc_action::find($request->manage_pcc_action_id);
    $manage_pcc_action->pcc_date = date('Y-m-d', strtotime($request->start_date));
    $manage_pcc_action->pcc_desc = $request->pcc_description;
    $manage_pcc_action->status = 1;
    $manage_pcc_action->save();
    $pcc_enitity = pcc_enitity_record::where('manage_pcc_id', $request->manage_pcc_action_id)->get();
    $tmp_array = [];
    $delete_check_array = [];
    foreach ($pcc_enitity as $tmp) {
      array_push($tmp_array, $tmp->id);
    }
    foreach ($request->pcc_enitity_record_id as $key => $pcc_value) {
      if ($pcc_value != 'new_record') {
        $delete_check_array[] = $pcc_value;
        if (in_array($pcc_value, $tmp_array)) {
          //update
          $pcc_enitity_record = pcc_enitity_record::find($pcc_value);
          $pcc_enitity_record->manage_pcc_id = $manage_pcc_action->id;
          $pcc_enitity_record->pcc_action = $request->pcc_acction[$key];
          $pcc_enitity_record->pcc_enitity = $request->pcc_enitity[$key];
          $pcc_enitity_record->pcc_entity_id = $request->pcc_entity_id[$key];
          $pcc_enitity_record->pcc_Entity_search = $request->pcc_Entity_search[$key];
          $pcc_enitity_record->pcc_Entity_name = $request->pcc_Entity_name[$key];
          $pcc_enitity_record->pcc_comment = $request->pcc_comment[$key];
          $pcc_enitity_record->status = 1;
          $pcc_enitity_record->save();

        }
      } else {
        $pcc_enitity_record = new pcc_enitity_record();
        $pcc_enitity_record->manage_pcc_id = $manage_pcc_action->id;
        $pcc_enitity_record->pcc_action = $request->pcc_acction[$key];
        $pcc_enitity_record->pcc_enitity = $request->pcc_enitity[$key];
        $pcc_enitity_record->pcc_entity_id = $request->pcc_entity_id[$key];
        $pcc_enitity_record->pcc_Entity_search = $request->pcc_Entity_search[$key];
        $pcc_enitity_record->pcc_Entity_name = $request->pcc_Entity_name[$key];
        $pcc_enitity_record->pcc_comment = $request->pcc_comment[$key];
        $pcc_enitity_record->status = 1;
        $pcc_enitity_record->save();
      }
    }
    $diff_result = array_diff($tmp_array, $delete_check_array);
    foreach ($diff_result as $key => $value) {
      $pcc_enitity_record = pcc_enitity_record::where('id', $value)->delete();
    }
    return redirect('pcc/pcc_action_view');
  }
    public function search_entity($enitity_id = "")
    {
        if($enitity_id==4)
        {
            $search_record=Land::where('is_register',0)->get();
          
            if (count($search_record) != 0) {
                foreach ($search_record as $key => $value) {
                  if ($value->land_name != '') {
                    $output = '<option value="' . $value->id . '">' . $value->land_name . '</option>';
                    //return Response::json($output['phase']);
                    print_r($output);
                  }
                }
              } else {
                $output = '<option value="">Not Found</option>';
                return Response::json($output);
              }
        }
        if($enitity_id==5)
        {
            $search_record=CustCompany::get();
            if (count($search_record) != 0) {
                foreach ($search_record as $key => $value) {
                  if ($value->company != '') {
                    $output = '<option value="' . $value->id . '">' . $value->company . '</option>';
                    //return Response::json($output['phase']);
                    print_r($output);
                  }
                }
              } else {
                $output = '<option value="">Not Found</option>';
                return Response::json($output);
              }
        }
        // $entity_details=entity_master::where('id',$enitity_id);
        // return $search_record;
    }
    public function SearchCustomer(Request $request, $query)
  {
    
      $data=CustCompany::where('company', 'LIKE', "%{$query}%")
        ->orWhere('company_reg_no', 'LIKE', "%{$query}%")
        ->orWhere('company_type', 'LIKE', "%{$query}%")
        ->orWhere('address', 'LIKE', "%{$query}%")
      ->get();
      if (count($data) != 0) {
        $output = '<table id="prodetails" class="table table-bordered mb-0">
      <thead>
      <tr>
      <th>S.No</th>
      <th>Company</th>
      <th>Company Reg. No.</th>
      <th>Company Type</th>
      <th>Address</th>
      </tr>
      </thead>
      <tbody>';
        foreach ($data as $key => $value) {
          $output .= '<tr>' .
            '<td>' . ++$key  . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ',this)" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->company .  '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ',this)" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->company_reg_no . '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ',this)" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->company_type . '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ',this)" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->address. '</a>' . '</td>' .
            '</tr>';
        }
        $output .= '</tbody>
      </table>';
        print_r($output);
      } else {
        $output = '<tr>' . '<td colspan="5" >' . 'No Records Found...!' . '</td>' . '</tr>';
        print_r($output);
      }
    // }
  }
  public function SearchLand(Request $request, $query)
  {

    $data = Land::where('is_register', 0)->where('land_name', 'LIKE', "%{$query}%")
      ->orWhere('plot_no', 'LIKE', "%{$query}%")
      ->get();
    if (count($data) != 0) {
      $output = '<table id="prodetails" class="table table-bordered mb-0">
    <thead>
    <tr>
    <th>Land Name</th>
    <th>Plot No</th>   
    </tr>
    </thead>
    <tbody>';
      foreach ($data as $key => $value) {
        $output .= '<tr>' .
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addland(' . $value->id . ',this)" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->land_name . '</a>' . '</td>' .
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addland(' . $value->id . ',this)" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->plot_no . '</a>' . '</td>' .
          '</tr>';
      }
      $output .= '</tbody>
    </table>';
      print_r($output);
    } else {
      $output = '<tr>' . '<td colspan="5" >' . 'No Records Found...!' . '</td>' . '</tr>';
      print_r($output);
    }
  }

  public function AddwizardSearchLand(Request $request, $id)
  {
    $data = Land::where('id', $id)->first();
    return Response::json($data);
  }
  public function AddContractCustomer(Request $request, $id)
  {
    $Company=DB::table('customer_company')->where('id', $id)->first();
    return Response::json($Company);
  }
  public function freeze_Pcc($id="")
  {
    $update_status=manage_pcc_action::where('id',$id)->update(array('status'=>2));
    return  redirect('pcc/pcc_action_view');
  }
}
