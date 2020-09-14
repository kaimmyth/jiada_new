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
use Auth;
use App\User;
use App\Leads;
use App\LeadTask;
use App\LeadCall;
use App\LeadEvent;
use App\LeadEmail;
use Cart;
use Session;
use Response;
use DB;
use Hash;
use PDF;

class LeadsController extends Controller
{

  public function index(Request $request)
  {

    if (Auth::check() && Auth::user()->users_role == 3) {
      $results = DB::table('leads')
      ->join('users','users.id','=','leads.owner_id')
      ->where(['leads.status'=>1,'leads.owner_id'=>Session::get('gorgID')])
      ->select('leads.*','users.name as ownername')->get()->toArray();
    }elseif(Auth::check() && Auth::user()->users_role == 1)
    {
      $results = DB::table('leads')
      ->join('users','users.id','=','leads.owner_id')
      ->where(['leads.status'=>1])
      ->select('leads.*','users.name as ownername')->get()->toArray();
    } else {
      $results = DB::table('leads')
      ->join('users','users.id','=','leads.owner_id')
      ->where(['leads.status'=>1,'leads.org_id'=>Session::get('gorgID')])
      ->select('leads.*','users.name as ownername')->get()->toArray();
    }
    $data['content'] = 'leads.listing';
    return view('layouts.content',compact('data'))->with('results',$results ?? '');
  }

  public function FilterLeads(Request $request)
  {

    if ($request->keyword!='') 
    {
      $keyword = $request->keyword; 
      if ($request->filterAction=='listleads') {
       $fillterdata = Leads::where(['status'=>1])
       ->where(function($query) use ($keyword){
         $query->where('first_name', 'LIKE', '%'.$keyword.'%');
         $query->orWhere('email', 'LIKE', '%'.$keyword.'%');
         $query->orWhere('phone', 'LIKE', '%'.$keyword.'%');
         $query->orWhere('mobile', 'LIKE', '%'.$keyword.'%');
       })->get();

       $data['content'] = 'leads.listing';
       return view('layouts.content',compact('data'))->with('results',$fillterdata);
     }
   }else{
    if($request->input('from_date') != null && $request->input('to_date') != null)
    {
      $sdate = date("Y-m-d 00:00:00", strtotime($request->input('from_date')));
      $edate = date("Y-m-d 23:59:59", strtotime($request->input('to_date')));

      if ($request->filterAction=='listleads') 
      {
        $fillterdata =  Leads::where(['status'=>1])
        ->whereBetween('created_at', [$sdate, $edate])->get();        
        $data['content'] = 'leads.listing';
        return view('layouts.content',compact('data'))->with('results',$fillterdata);
      }
    }
  }
}


public function Create(Request $request)
{


  if ($request->ids!='') {
    if ($request->isMethod('post')) {
      $data = Leads::findOrFail($request->ids);           
      $updatedata=$request->all(); 
      $updatedata['org_id']= Session::get('gorgID');
      $updatedata['owner_id']= $request->lead_owner;
      $updatedata['updated_at']= date("Y-m-d H:i:s");
      $data->update($updatedata); 
      Session::flash('success','Updated Successufully');  
      return Redirect::action('LeadsController@index');
    }
  } else {
    if ($request->isMethod('post')) {
      $data = new Leads;           
      $inserdata=$request->all(); 
      $inserdata['org_id']= Session::get('gorgID');
      $inserdata['owner_id']= $request->lead_owner;
      $data->create($inserdata); 
      Session::flash('success','Created Successufully');  
      return Redirect::action('LeadsController@index');
    }
  }

  $user = User::where(['status'=>1,'org_id'=>Session::get('gorgID')])->get();
  $data['content'] = 'leads.create';
  return view('layouts.content',compact('data'))->with(['users'=>$user]);
}


public function edit(Leads $leads,$id)
{
 $results =  $leads->findOrFail($id);
 $user = User::where('status',1)->get();
 $data['content'] = 'leads.create';
 return view('layouts.content',compact('data'))->with(['results'=>$results,'users'=>$user]);
}


public function LeadsView(Leads $leads,$id)
{
  $results =  $leads->findOrFail($id);
  $results->leadtaskdata = LeadTask::where(['cust_id'=>$id,'status'=>1])->get();
  $results->leadcalldata = LeadCall::where(['cust_id'=>$id,'status'=>1])->get();
  $results->leadeventdata = LeadEvent::where(['cust_id'=>$id,'status'=>1])->get();
  $results->leademaildata = LeadEmail::where(['cust_id'=>$id,'status'=>1])->get();
  $results->user = User::findOrFail($results->owner_id);
  $data['content'] = 'leads.leads_view';
  return view('layouts.content',compact('data'))->with('results',$results);
}


public function distroy(Leads $leads,$id)
{
  $d =  $leads->findOrFail($id);
  $d->deleted_at = date('Y-m-d H:i:s');
  $d->status = 0;
  $d->update();
  Session::flash('error','Deleted Successfully');
  return back();
}


public function CreateEventTaskCallEmail(Request $request)
{

 if ($request->checkrequest=='createtask') 
 {
  $data = new LeadTask;           
  $inserdata=$request->all(); 
  $inserdata['org_id']= Session::get('gorgID');
  $inserdata['created_by']= Session::get('gorgID');
  $inserdata['created_at'] = date('Y-m-d H:i:s');
  $data->create($inserdata); 
  Session::flash('success','Lead Task Created Successufully');  
  return Redirect::Back();

} elseif($request->checkrequest=='createcall')
{
  $data = new LeadCall;           
  $inserdata=$request->all(); 
  $inserdata['org_id']= Session::get('gorgID');
  $inserdata['created_by']= Session::get('gorgID');
  $inserdata['created_at'] = date('Y-m-d H:i:s');
  $data->create($inserdata); 
  Session::flash('success','Lead Call Created Successufully');  
  return Redirect::Back();

} elseif($request->checkrequest=='createevent')
{
  $data = new LeadEvent;           
  $inserdata=$request->all(); 
  $inserdata['org_id']= Session::get('gorgID');
  $inserdata['created_by']= Session::get('gorgID');
  $inserdata['start_date_time']= date('Y-m-d H:i:s',strtotime($request->start_date_time));
  $inserdata['end_date_time']= date('Y-m-d H:i:s',strtotime($request->end_date_time));
  $inserdata['created_at'] = date('Y-m-d H:i:s');
  $data->create($inserdata); 
  Session::flash('success','Lead Event Created Successufully');  
  return Redirect::Back();

} elseif($request->checkrequest=='createemail')
{
  $data = new LeadEmail;           
  $inserdata=$request->all(); 
  $inserdata['org_id']= Session::get('gorgID');
  $inserdata['created_by']= Session::get('gorgID');
  $inserdata['created_at'] = date('Y-m-d H:i:s');
  $data->create($inserdata); 
  Session::flash('success','Lead Email Created Successufully');  
  return Redirect::Back();
}

}


public function BulkUploadLeads(Request $request)
{
 if ($request->isMethod('post')) 
 {
  if($_FILES["uploadfile"]["size"] > 0 && $request->submit=='upload_csv')
  {
    try
    {
     $filename=$_FILES["uploadfile"]["tmp_name"]; 
     $file = fopen($filename, "r");

     $i=0;
     while (($csv_data = fgetcsv($file, 100000, ",")) !== FALSE)
     {
      if($i>0)
      {       

        $csvData['owner_id'] = Auth::user()->id;
        $csvData['lead_owner'] = Auth::user()->id;
        $csvData['org_id'] = Session::get('gorgID');
        $csvData['title'] =  trim($csv_data[0]);
        $csvData['first_name'] = trim($csv_data[1]);
        $csvData['last_name'] = trim($csv_data[2]);
        $csvData['email'] = trim($csv_data[3]);
        $csvData['mobile'] = trim($csv_data[4]);
        $csvData['phone'] = trim($csv_data[5]);
        $csvData['fax'] = trim($csv_data[6]);
        $csvData['company_name'] = trim($csv_data[7]);
        $csvData['website'] = trim($csv_data[8]);
        $csvData['n_o_employee'] = trim($csv_data[9]);
        $csvData['lead_source'] = trim($csv_data[10]);
        $csvData['lead_status'] = trim($csv_data[11]);
        $csvData['annual_revenue'] = trim($csv_data[12]);
        $csvData['rating'] = trim($csv_data[13]);
        $csvData['address1'] = trim($csv_data[14]);
        $csvData['address2'] = trim($csv_data[15]);
        $csvData['city_distt'] = trim($csv_data[16]);
        $csvData['country'] = trim($csv_data[17]);
        $csvData['state_province'] = trim($csv_data[18]);
        $csvData['pincode'] = trim($csv_data[19]);
        $csvData['description'] = trim($csv_data[20]);
        $csvData['feedback'] = trim($csv_data[21]);
        Leads::insert($csvData);
        $all[] = $i++;
      } 
      $i++;
    } 
  }catch (Exception $e) {
    report($e);
    return false;
  }
  Session::flash('message',count($all).' Records Uploaded Successfully!!');
  return back();
  exit();
}
}

$data['content'] = 'leads.bulk_upload';
return view('layouts.content',compact('data'));

}

}