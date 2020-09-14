<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Session;
use Response;
use App\Comapny;
use App\TicketHistory;
use App\Ticket;
use App\User;
use DB;
use Hash;
use Auth;

class TicketController extends Controller
{
  public function ticket_listing(Request $request)
  {
      if($request->route()->uri == "today-tickets"){
          $todaydate = "today-tickets" ;
      }elseif($request->route()->uri == "today-close-tickets"){
          $todaydate = "today-close-tickets" ;
      }else{
          $todaydate = '';
      }
   
    if (Auth::check() && (Auth::user()->users_role == 2 || Auth::user()->users_role == 3)) {
      $land_permission = Session::get('all_module_permission');
      foreach ($land_permission as $key => $value_land) {
        if ($value_land['permission_value'] == 8) {
          $module_permission = $value_land;
        }
      }
    }
    $user_id = Session::get('gorgID');
    $userData = DB::table('users')->get();
    $departmentData = DB::table('departments')->where('is_active', '1')->get();
    $categoryData = DB::table('category')->where('is_active', '1')->get();
    $subcategoryData = DB::table('subcategory')->where('is_active', '1')->get();
    $priorityData = DB::table('priority_levels')->where('is_active', '1')->get();
    $statusData = DB::table('ticket')
                        ->where(function($q) use($todaydate){
                            if($todaydate == ''){
                                $q;
                            }else{
                                if($todaydate == "today-tickets"){
                                    $q->whereDate('created_at',date('Y-m-d')); 
                                }
                                if($todaydate == "today-close-tickets"){
                                    $q->whereDate('updated_at',date('Y-m-d'))->where('status_id',3); 
                                }
                            }
                        })->orderBY('created_at','desc')->get();
    $subDeptData = DB::table('subdepartment')->where('is_active', '1')->get();
    $statusCheckDATA = DB::table('status')->where('is_active', '1')->get();
    // return $statusCheckDATA;
    // die;

    if ($request->search_id != '') {
      if ($request->priority_id != '') {
        $ticketData = DB::table('ticket')
          ->where(function($q) use($todaydate){
                    if($todaydate == ''){
                        $q;
                    }else{
                        if($todaydate == "today-tickets"){
                            $q->whereDate('created_at',date('Y-m-d')); 
                        }
                        if($todaydate == "today-close-tickets"){
                            $q->whereDate('updated_at',date('Y-m-d'))->where('status_id',3); 
                        }
                    }
                })
          ->where('priority', $request->priority_id)
          ->orWhere('assigne_to', Session::get('gorgID'))
          ->orderBY('created_at','desc')
          ->get();
        // print_r($ticketData);
        // die;

      } elseif ($request->category_id != '') {
        $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where(function($q) use($todaydate){
                    if($todaydate == ''){
                        $q;
                    }else{
                        if($todaydate == "today-tickets"){
                            $q->whereDate('ticket.created_at',date('Y-m-d')); 
                        }
                        if($todaydate == "today-close-tickets"){
                            $q->whereDate('ticket.updated_at',date('Y-m-d'))->where('ticket.status_id',3); 
                        }
                    }
                })
          ->where('ticket.category', $request->category_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby', 'priority_levels.priority_name', 'ticket.*')
          ->orderBY('ticket.created_at','desc')
          ->get();
      } elseif ($request->status_id != '') {
        $ticketData = DB::table('ticket')
          ->join('users as created', 'created.id', '=', 'ticket.poc_id')
          ->join('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->where(function($q) use($todaydate){
                    if($todaydate == ''){
                        $q;
                    }else{
                        if($todaydate == "today-tickets"){
                            $q->whereDate('ticket.created_at',date('Y-m-d')); 
                        }
                        if($todaydate == "today-close-tickets"){
                            $q->whereDate('ticket.updated_at',date('Y-m-d'))->where('ticket.status_id',3); 
                        }
                    }
                })
          ->where('ticket.status_id', $request->status_id)
          ->orWhere('ticket.assigne_to', Session::get('gorgID'))
          ->select('created.name as createdby', 'priority_levels.priority_name', 'ticket.*')
          ->orderBY('ticket.created_at','desc')
          ->get();
      }
    } else {
      //$ticketData=DB::table('ticket')->where('')
      if (Auth::check() && Auth::user()->users_role == 1) {
        $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->leftjoin('users as assignto', 'assignto.id', '=', 'ticket.assigne_to')
          ->leftjoin('users as assigned_by', 'assigned_by.id', '=', 'ticket.assigned_by')
          // ->leftjoin('status', 'status.id', '=', 'ticket.status_id')
          ->select('users.name as createdby',
            'ticket.*',
            'priority_levels.priority_name',
            'assignto.name as assigne_name',
            'assigned_by.name as assigned_by_name')
          ->where(function($q) use($todaydate){
                    if($todaydate ==''){
                        $q;
                    }else{
                        if($todaydate == "today-tickets"){
                            $q->whereDate('ticket.created_at',date('Y-m-d')); 
                        }
                        if($todaydate == "today-close-tickets"){
                            $q->whereDate('ticket.updated_at',date('Y-m-d'))->where('ticket.status_id',3); 
                        }
                    }
                })
          ->orderBY('ticket.created_at','desc')
          ->get();
      } else if (Auth::check() && Auth::user()->users_role == 2) {
        $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->leftjoin('users as assignto', 'assignto.id', '=', 'ticket.assigne_to')
          ->leftjoin('users as assigned_by', 'assigned_by.id', '=', 'ticket.assigned_by')
          // ->leftjoin('status', 'status.id', '=', 'ticket.status_id')
          ->where(function($q) use($todaydate){
                    if($todaydate == ''){
                        $q;
                    }else{
                        if($todaydate == "today-tickets"){
                            $q->whereDate('ticket.created_at',date('Y-m-d')); 
                        }
                        if($todaydate == "today-close-tickets"){
                            $q->whereDate('ticket.updated_at',date('Y-m-d'))->where('ticket.status_id',3); 
                        }
                    }
                })
          ->where('ticket.assigne_to', Session::get('gorgID'))
          ->orWhere('ticket.created_by', Session::get('gorgID'))
          // ->orwhere('ticket.')
          ->select('users.name as createdby', 'priority_levels.priority_name', 'ticket.*', 'assignto.name as assigne_name', 'assigned_by.name as assigned_by_name')
          ->orderBY('ticket.created_at','desc')
          ->get();
      }else if (Auth::check() && Auth::user()->users_role == 3) {
        $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->leftjoin('users as assignto', 'assignto.id', '=', 'ticket.assigne_to')
          ->leftjoin('users as assigned_by', 'assigned_by.id', '=', 'ticket.assigned_by')
          // ->leftjoin('status', 'status.id', '=', 'ticket.status_id')
          ->where(function($q) use($todaydate){
                   if($todaydate == ''){
                        $q;
                    }else{
                        if($todaydate == "today-tickets"){
                            $q->whereDate('ticket.created_at',date('Y-m-d')); 
                        }
                        if($todaydate == "today-close-tickets"){
                            $q->whereDate('ticket.updated_at',date('Y-m-d'))->where('ticket.status_id',3); 
                        }
                    }
                })
          ->Where('ticket.created_by', Session::get('gorgID'))
          // ->orwhere('ticket.')
          ->select('users.name as createdby', 'priority_levels.priority_name', 'ticket.*', 'assignto.name as assigne_name', 'assigned_by.name as assigned_by_name')
          ->orderBY('ticket.created_at','desc')
          ->get();
      } else {
        $ticketData = DB::table('ticket')
          ->leftjoin('users', 'users.id', '=', 'ticket.poc_id')
          ->leftjoin('priority_levels', 'priority_levels.id', '=', 'ticket.priority')
          ->leftjoin('users as assignto', 'assignto.id', '=', 'ticket.assigne_to')
          ->leftjoin('users as assigned_by', 'assigned_by.id', '=', 'ticket.assigned_by')
          ->where(function($q) use($todaydate){
                   if($todaydate == ''){
                        $q;
                    }else{
                        if($todaydate == "today-tickets"){
                            $q->whereDate('ticket.created_at',date('Y-m-d')); 
                        }
                        if($todaydate == "today-close-tickets"){
                            $q->whereDate('ticket.updated_at',date('Y-m-d'))->where('ticket.status_id',3); 
                        }
                    }
                })
          ->where('ticket.assigne_to', Session::get('gorgID'))
          ->select('users.name as createdby', 'priority_levels.priority_name', 'ticket.*', 'assignto.name as assigne_name', 'assigned_by.name as assigned_by_name')
          ->orderBY('ticket.created_at','desc')
          ->get();
      }
    }

    $data['content'] = 'ticket.listing';
    // return response()->json(['user_id' => @$user_id, 'module_permission' => @$module_permission, 'userData' => $userData, 'ticketData' => $ticketData, 'departmentData' => $departmentData, 'categoryData' => $categoryData, 'subcategoryData' => $subcategoryData, 'priorityData' => $priorityData, 'statusData' => $statusData, 'subDeptData' => $subDeptData, 'statusCheckDATA' => $statusCheckDATA]);
    return view('layouts.content', compact('data'))->with(['user_id' => @$user_id, 'module_permission' => @$module_permission, 'userData' => $userData, 'ticketData' => $ticketData, 'departmentData' => $departmentData, 'categoryData' => $categoryData, 'subcategoryData' => $subcategoryData, 'priorityData' => $priorityData, 'statusData' => $statusData, 'subDeptData' => $subDeptData, 'statusCheckDATA' => $statusCheckDATA]);
  }

  public function ticket_history($id)
  {
    $data = TicketHistory::where('ticket_id', $id)->get();
    if ($data) {
      return Response::json($data);
    }
  }

  public function Ticket_Form(Request $request)
  {
    if ($request->requester_name != '') {
      $validatedData = Validator::make($request->all(), [
        'requester_name' => 'required',
        'email' => 'required|unique:ticket',
        'phone' => 'required|numeric|digits:10',
        'description' => 'required',
      ])->validate();

      $formData['requester_name'] = $request->requester_name;
      $formData['phone'] = $request->phone;
      $formData['email'] = $request->email;
      $formData['description'] = $request->description;
      $formData['resolution'] = $request->resolution;
      $formData['ip_address'] = $request->ip();
      $formData['created_at'] = date('Y-m-d H:i:s');
      Session::flash('message', 'Ticket Registered');
      $departmentData = DB::table('ticket')->insert($formData);
    }
    return view('contactfrom.contact.form');
  }
  
  
  public function Company_Ticket_Form(Request $request)
  {
    if ($request->requester_name != '') {
      $validatedData = Validator::make($request->all(), [
        'requester_name' => 'required',
        'email' => 'required',
        'phone' => 'required|digits:10',
        'description' => 'required',
      ])->validate();

      $formData['requester_name'] = $request->requester_name;
      $formData['phone'] = $request->phone;
      $formData['email'] = $request->email;
      $formData['description'] = $request->description;
      $formData['resolution'] = $request->resolution;
      $formData['ip_address'] = $request->ip();
      $formData['created_by'] = Auth::user()->id;
      $formData['created_at'] = date('Y-m-d H:i:s');
      Session::flash('message', 'Ticket Registered');
      $departmentData = DB::table('ticket')->insert($formData);
    }
    $data['content'] = 'contactfrom.contact.company_form';
    return view('layouts.content', compact('data'));
  }




  public function add_ticket(Request $request)
  {
    // return $request;

    if ($request->hasFile('attachment')) {
      $filename = time() . '.' . request()->attachment->getClientOriginalExtension();
      request()->attachment->move(public_path('ticket_attachment'), $filename);
    }

    if ($request->assigne_to != '') {
      $assigneTo = $request->assigne_to;
    } else {
      $assigneTo = Session::get('gorgID');
    }

    if ($request->ids != '') {
      $CreatedBy = $request->created_by;
    } else {
      $CreatedBy = Session::get('gorgID');
    }
    if ($request->ids != '') {
      $StatusId = $request->status_id_chek_edit;
    } else {
      $StatusId = $request->status_id_chek;
    }


    $data = array(
      'created_by' => $CreatedBy,
      'technician_id' => $request->technician_id,
      'requester_name' => $request->requester_name,
      'email' => $request->email,
      'poc_id' => $request->poc_id,
      'ticket_id' => $request->ticket_id,
      'file_no' => $request->file_no,
      'assigne_to' => $assigneTo,
      'assigned_by' => Session::get('gorgID'),
      'phone' => $request->phone,
      'request_type' => $request->request_type,
      'status_id' => $StatusId,
      'ticket_mode' => $request->ticket_mode,
      'level' => $request->level,
      'category' => $request->category,
      'subcategory_id' => $request->subcategory_id,
      'item' => $request->item,
      'impact' => $request->impact,
      'priority' => $request->priority,
      'department_id' => $request->department_id,
      'subdepartment_id' => $request->subDept,
      //  'subdepartment_id' => $request->subdepartment_id,
      'subject' => $request->subject,
      'description' => $request->description,
      'resolution' => $request->resolution,
      'due_date' => $request->due_date !== null ? date('Y-m-d', strtotime($request->due_date)) : null,
      'resolved_date' => $request->resolved_date !== null ? date('Y-m-d', strtotime($request->resolved_date)) : null,
      'attachment' => @$filename,
      'ip_address' => $request->ip(),

    );

    if ($request->ids != '') {
      Session::flash('success', 'Updated Success.!');
      $data['updated_at'] = date('Y-m-d H:i:s');
      // if($ticket_status == 1){$data['assigne_to'] = null;}
      $updatedStatusdata = DB::table('ticket')->where('id', $request->ids)->value('status_id');
      $updatedAssigneddata = DB::table('ticket')->where('id', $request->ids)->value('assigne_to');
      $updateddescriptionddata = DB::table('ticket')->where('id', $request->ids)->value('description');

      $ticketData = DB::table('ticket')->where('id', $request->ids)->update($data);

      if ($updatedAssigneddata != $assigneTo || $updatedStatusdata != $StatusId || $updateddescriptionddata != $request->description) {
        $historyData = array(
          'assigned_by' => Session::get('gorgID'),
          'assigned_to' => $assigneTo,
          'ticket_id' =>  $request->ids,
          'ticket_description' => $request->description,
          'assigned_date' =>  date('Y-m-d H:i:s'),
        );
        $ticketData = DB::table('ticket_history')->insert($historyData);
      }
      return back();
    } elseif ($request->form_id != '') {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insert($data);
      return "wait";
      return back();
    } else {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insertGetId($data);
      // return "wait2";
      $historyData = array(
        'assigned_by' => Session::get('gorgID'),
        'assigned_to' => $assigneTo,
        'ticket_id' =>  $ticketData,
        'ticket_description' => $request->description,
        'assigned_date' =>  date('Y-m-d H:i:s'),
      );

      $ticketData = DB::table('ticket_history')->insert($historyData);

      return redirect()->back();
    }
  }




  public function getsublist(Request $request)
  {
    $subcatlist = DB::table("subcategory")
      ->where("category_id", $request->category)
      ->select('subcategory.subcategory_name', 'subcategory.id')
      ->get();

    return response()->json($subcatlist);
  }



  //fetching the department data acc to poc //rohit
  public function getpoclist(Request $request, $departmentID = "")
  {

    $toReturn['pocList'] = DB::table("departments")
      ->leftjoin('users', 'users.id', '=', 'departments.pos_id')
      ->where('departments.id', $departmentID)
      ->select('users.id as userId', 'users.name as userName')
      ->get();

    $toReturn['subdepartment'] = DB::table("subdepartment")
      ->where('department_id', $departmentID)
      ->select('subdepartment_name as subDeptName', 'id as subDeptId')
      ->get();
    // print_r($toReturn);
    return response()->json($toReturn);
  }


  //fetching the assign by data acc to status //rohit
  public function get_Statuslist(Request $request, $StatusID = "")
  {
    $StatusFetched = DB::table("status")
      ->where('status.id', $StatusID)
      ->select('users.id as userid', 'users.name as uName')
      ->get();

    return response()->json($StatusFetched);
  }


  public function delete_ticket($id)
  {
    Session::flash('error', 'Deleted Successfully..!');
    $delete = DB::table('ticket')->where('id', '=', $id)->delete();
    return back();
  }

  public function edit_ticket($id)
  {
    $toReturn['ticket'] = Ticket::where('ticket.id', $id)->first();
    $toReturn['ticket_history'] =TicketHistory::where('ticket_id', $id)->get();
    if ($toReturn) {
      return Response::json($toReturn);
    }
  }
  public function view_oss_touser()
  {
    return view('static-pages.ticket');
  }
  public function add_ticket_by_user(Request $request)
  {
    if ($request->hasFile('attachment')) {
      $filename = time() . '.' . request()->attachment->getClientOriginalExtension();
      request()->attachment->move(public_path('ticket_attachment'), $filename);
    }

    if ($request->assigne_to != '') {
      $assigneTo = $request->assigne_to;
    } else {
      $assigneTo = Session::get('gorgID');
    }

    if ($request->ids != '') {
      $CreatedBy = $request->created_by;
    } else {
      $CreatedBy = Session::get('gorgID');
    }
    if ($request->ids != '') {
      $StatusId = $request->status_id_chek_edit;
    } else {
        if($request->status_id_chek){
          $StatusId = $request->status_id_chek;      
        }else{
           $StatusId = 1 ;       
        }
    }


    $data = array(
      'created_by' => $CreatedBy,
      'technician_id' => $request->technician_id,
      'requester_name' => $request->requester_name,
      'email' => $request->email,
      'poc_id' => $request->poc_id,
      'ticket_id' => $request->ticket_id,
      'file_no' => $request->file_no,
      'assigne_to' => $assigneTo,
      'assigned_by' => Session::get('gorgID'),
      'phone' => $request->phone,
      'request_type' => $request->request_type,
      'status_id' => $StatusId,
      'ticket_mode' => $request->ticket_mode,
      'level' => $request->level,
      'category' => $request->category,
      'subcategory_id' => $request->subcategory_id,
      'item' => $request->item,
      'impact' => $request->impact,
      'priority' => $request->priority,
      'department_id' => $request->department_id,
      'subdepartment_id' => $request->subDept,
      //  'subdepartment_id' => $request->subdepartment_id,
      'subject' => $request->subject,
      'description' => $request->description,
      'resolution' => $request->resolution,
      'due_date' => $request->due_date !== null ? date('Y-m-d', strtotime($request->due_date)) : null,
      'resolved_date' => $request->resolved_date !== null ? date('Y-m-d', strtotime($request->resolved_date)) : null,
      'attachment' => @$filename,
      'ip_address' => $request->ip(),

    );
//   return response()->json(date('15 M Y', strtotime("-1 month")));
    if ($request->ids != '') {
      Session::flash('success', 'Updated Success.!');
      $data['updated_at'] = date('Y-m-d H:i:s');
      // if($ticket_status == 1){$data['assigne_to'] = null;}
      $updatedStatusdata = DB::table('ticket')->where('id', $request->ids)->value('status_id');
      $updatedAssigneddata = DB::table('ticket')->where('id', $request->ids)->value('assigne_to');
      $updateddescriptionddata = DB::table('ticket')->where('id', $request->ids)->value('description');

      $ticketData = DB::table('ticket')->where('id', $request->ids)->update($data);

      if ($updatedAssigneddata != $assigneTo || $updatedStatusdata != $StatusId || $updateddescriptionddata != $request->description) {
        $historyData = array(
          'assigned_by' => Session::get('gorgID'),
          'assigned_to' => $assigneTo,
          'ticket_id' =>  $request->ids,
          'ticket_description' => $request->description,
          'assigned_date' =>  date('Y-m-d H:i:s'),
        );
        $ticketData = DB::table('ticket_history')->insert($historyData);
      }
      return back();
    } elseif ($request->form_id != '') {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insert($data);
      return "wait";
      return back();
    } else {
      Session::flash('success', 'Ticket Genrate Successfully..!');
      $data['created_at'] = date('Y-m-d H:i:s');
      $ticketData = DB::table('ticket')->insertGetId($data);
      // return "wait2";
      $historyData = array(
        'assigned_by' => Session::get('gorgID'),
        'assigned_to' => $assigneTo,
        'ticket_id' =>  $ticketData,
        'ticket_description' => $request->description,
        'assigned_date' =>  date('Y-m-d H:i:s'),
      );

      $ticketData_history = DB::table('ticket_history')->insert($historyData);
      // return $ticketData;
      Session::put('user_data_message',$ticketData);
      // return Redirect::route('ticket_page, $ticketData');
      // return view('static-pages.ticket')->with('message', $ticketData);
      return redirect('ticket_page');
    }
  }
}
