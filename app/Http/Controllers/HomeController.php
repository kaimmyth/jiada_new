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
use App\Ticket;
use Response;
use App\Company;
use App\User;
use App\CustCompany;
use DB;
use Hash;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('role');
  }

  public function UserProfile(Request $request)
  {
    $profileData = Auth()->user();
    $data['content'] = 'admin.user.user-profile';
    return view('layouts.content', compact('data'));
  }

  public function UpdateProfile(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'password' => 'require|min:8',
      'new_password' => 'required|same:password',
      'email' => 'required|email',
    ]);
    if ($validator->fails()) {
      return redirect()->back()
      ->withErrors($validator)
      ->withInput();
    }
    if ($request->c_ids != '') {
      $cdata['org_name'] = $request->name;
      $cdata['email'] = $request->email;
      Company::where('id', $request->c_ids)->update($cdata);
    }
    if ($request->u_ids != '') {
      $udata['username'] = $request->username;
      $udata['email'] = $request->email;
      $udata['password'] = Hash::make($request->password);
      User::where('id', $request->u_ids)->update($udata);
    }
    return back();
  }

  public function Dashboard(Request $request)
  {
    if(Session::get('role')==1){
        $totalcustomers = DB::table('enterprise')->where('status', '1')->count();
        $messages = DB :: table('web_contact')->count();
    }
    if(Session::get('role')==1 || Session::get('role')==2){
        $totalLeads = DB::table('lands')->where('status', '1')->count();
    }
        # code for customer/company dashboard
    $ticketIds=[];
    if(Session::get('role')==2){
        $ticketIds=DB::table('ticket_history')->where('assigned_to',Session::get('gorgID'))->pluck('ticket_id');
    }
    $totaltickets = DB::table('ticket')->where('status_id','!=',3)->where(function($q) use($ticketIds){
        if(Session::get('role')==1){
            $q;
        }
        elseif(Session::get('role')==2){
            $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->count();
    // return response()->json($totaltickets);
    $todayticketsOpen = DB::table('ticket')->where(function($q) use($ticketIds){
        if(Session::get('role')==1){
           $q;
        }
        elseif(Session::get('role')==2){
            $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->whereDate('created_at',date('Y-m-d'))->count();
    $todayCloseTickets = DB::table('ticket')->where(function($q) use($ticketIds) {
        if(Session::get('role')==1){
            $q;
        }
        elseif(Session::get('role')==2){
           $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->where('status_id',3)->whereDate('updated_at',date('Y-m-d'))->count();
    $dueTickets = DB::table('ticket')->where(function($q) use($ticketIds){
        if(Session::get('role')==1){
            $q;
        }
        elseif(Session::get('role')==2){
            $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->where('status_id','!=',3)->count();
    $todayDueTickets = DB::table('ticket')->where(function($q) use($ticketIds){
        if(Session::get('role')==1){
            $q;
        }
        elseif(Session::get('role')==2){
            $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->where('status_id','!=',3)->whereDate('due_date',date('Y-m-d'))->count();
    $tomorrowDueTickets = DB::table('ticket')->where(function($q) use($ticketIds){
        if(Session::get('role')==1){
            $q;
        }
        elseif(Session::get('role')==2){
            $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->where('status_id','!=',3)->whereDate('due_date',date('Y-m-d',strtotime('tomorrow')))->count();
    $OverDueTickets = DB::table('ticket')->where(function($q) use($ticketIds){
        if(Session::get('role')==1){
            $q;
        }
        elseif(Session::get('role')==2){
            $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->where('status_id','!=',3)->whereDate('due_date','<',date('Y-m-d'))->count();
        // first and last date of current week
    $now = Carbon::now();
    $weekStartDate = $now->startOfWeek()->format('Y-m-d');
    $weekEndDate = $now->endOfWeek()->format('Y-m-d');
    $thisWeekDueTickets = DB::table('ticket')->where(function($q) use($ticketIds){
        if(Session::get('role')==1){
            $q;
        }
        elseif(Session::get('role')==2){
            $q->whereIn('id',$ticketIds);
        }else{
            $q->where('created_by',Session::get('gorgID'));
        }
    })->where('status_id','!=',3)->whereDate('due_date','>=',date($weekStartDate))->whereDate('due_date','<=',date($weekEndDate))->count();
        // first and last date of next week
        $nextweek = Carbon::now()->addDays(7);
        $nextWeekStartDate = $nextweek->startOfWeek()->format('Y-m-d');
        $nextWeekEndDate = $nextweek->endOfWeek()->format('Y-m-d');
        // return response()->json([$nextWeekStartDate,$nextWeekEndDate]);
        $nextWeekDueTickets = DB::table('ticket')->where(function($q) use($ticketIds){
            if(Session::get('role')==1){
                $q;
            }
            elseif(Session::get('role')==2){
               $q->whereIn('id',$ticketIds);
            }else{
                $q->where('created_by',Session::get('gorgID'));
            }
        })->where('status_id','!=',3)->whereDate('due_date','>=',date($nextWeekStartDate))->whereDate('due_date','<=',date($nextWeekEndDate))->count();
        $laterDueTickets = DB::table('ticket')->where(function($q) use($ticketIds){
            if(Session::get('role')==1){
                $q;
            }
            elseif(Session::get('role')==2){
               $q->whereIn('id',$ticketIds);
            }else{
                $q->where('created_by',Session::get('gorgID'));
            }
        })->where('status_id','!=',3)->where(function($q) use($nextWeekEndDate) {
                $q->whereDate('due_date','>=',date($nextWeekEndDate))->orWhere('due_date','=',NULL);
        })->count();
        $lastThirtyDaysOpen = DB::table('ticket')->where(function($q) use($ticketIds){
            if(Session::get('role')==1){
                $q;
            }
            elseif(Session::get('role')==2){
                $q->whereIn('id',$ticketIds);
            }else{
                $q->where('created_by',Session::get('gorgID'));
            }
        })->whereDate('created_at','>',Carbon::now()->subDays(30))->count();
        $lastThirtyDaysclose = DB::table('ticket')->where(function($q) use($ticketIds){
            if(Session::get('role')==1){
                $q;
            }
            elseif(Session::get('role')==2){
                $q->whereIn('id',$ticketIds);
            }else{
                $q->where('created_by',Session::get('gorgID'));
            }
        })->where('status_id',3)->whereDate('updated_at','>',Carbon::now()->subDays(30))->count();
        $totalClose = DB::table('ticket')->where(function($q) use($ticketIds){
            if(Session::get('role')==1){
                $q;
            }
            elseif(Session::get('role')==2){
                $q->whereIn('id',$ticketIds);
            }else{
                $q->where('created_by',Session::get('gorgID'));
            }
        })->where('status_id',3)->count();
        if(Session::get('role')==3){
         $messages = DB :: table('contact_customers')->count();   
        }
        if(Session::get('role')==2){
         $messages = 0;   
        }
        $data['content'] = 'admin.home';
        return view('layouts.content', compact('data'))->with(['totalLeads'=>$totalLeads ?? '0', 'totalcustomers'=>$totalcustomers ?? '0', 'totaltickets'=>$totaltickets ?? '0','todaytickets'=>$todayticketsOpen ?? '0','todayticketclose'=>$todayCloseTickets ?? '0','dueTickets'=>$dueTickets ?? '0','todayDueTickets' => $todayDueTickets ?? '0' ,'tomorrowDueTickets' => $tomorrowDueTickets ?? '0' ,'OverDueTickets' => $OverDueTickets ?? '0' , 'thisWeekDueTickets' => $thisWeekDueTickets ?? '0' ,'nextWeekDueTickets' =>$nextWeekDueTickets ?? '0' , 'laterDueTickets' =>$laterDueTickets ?? '0' , 'messages' => $messages ?? '0' , 'lastThirtyDaysOpen' => $lastThirtyDaysOpen ?? '0' ,'lastThirtyDaysclose'=>$lastThirtyDaysclose ?? '0' , 'totalClose' => $totalClose ?? '0']);
  }

  public function index()
  {
    return Redirect::action('HomeController@Dashboard');
  }
  public function barChart()
  {
      $ticketIds=DB::table('ticket_history')->where('assigned_to',Session::get('gorgID'))->pluck('ticket_id');
      if(count($ticketIds)==0){
          $ticketIds =[];
      }
      $monthnum = date('n');
      $lastSixMonths = [];
      $MonthWiseOpentickets = [];
      $MonthWiseClosetickets = [];
      if(date('t')>30){
          for ($i = $monthnum-1; $i < $monthnum+5; $i++) {
             $lastSixMonths[] = date('M Y', strtotime("-".date('d')*$i." day"));
             $MonthWiseOpentickets[] = DB::table('ticket')->whereYear('created_at',date('Y', strtotime("-".date('d')*$i." day")))->whereMonth('created_at',date('n', strtotime("-".date('d')*$i." day")))->count();
             $MonthWiseClosetickets[] = DB::table('ticket')->where('status_id',3)->whereYear('resolved_date',date('Y', strtotime("-".date('d')*$i." day")))->whereMonth('resolved_date',date('n', strtotime("-".date('d')*$i." day")))->count();
        }
      }else{
          for ($i = 0; $i < 6; $i++) {
             $lastSixMonths[] = date('M Y', strtotime("-$i month"));
             $MonthWiseOpentickets[] = DB::table('ticket')->where(function($q) use($ticketIds){
            if(Session::get('role')==1){
                $q;
            }
            elseif(Session::get('role')==2){
                $q->whereIn('id',$ticketIds);
            }else{
                $q->where('created_by',Session::get('gorgID'));
            }
        })->whereYear('created_at',date('Y', strtotime("-".$i." month")))->whereMonth('created_at',date('n', strtotime("-".$i." month")))->count();
             $MonthWiseClosetickets[] = DB::table('ticket')->where(function($q) use($ticketIds){
            if(Session::get('role')==1){
                $q;
            }
            elseif(Session::get('role')==2){
                $q->whereIn('id',$ticketIds);
            }else{
                $q->where('created_by',Session::get('gorgID'));
            }
        })->where('status_id',3)->whereYear('resolved_date',date('Y', strtotime("-".$i." month")))->whereMonth('resolved_date',date('n', strtotime("-".$i." month")))->count();
        }
      }
      
      return response()->json(['lastSixMonths'=>$lastSixMonths,'MonthWiseOpentickets'=>$MonthWiseOpentickets,'MonthWiseClosetickets'=>$MonthWiseClosetickets]);
  }
  public function pieChart()
  {
      if(Session::get('role')!=3){
      $visitors=DB::table('ticket')->whereNull('created_by')->count();
      $jiadaMem=DB::table('ticket')->whereNotNull('created_by')->count();
      return response()->json([['value'=>$visitors,'color'=>"rgb(49,126,235)"],['value'=>$jiadaMem,'color'=>"#60b1cc"]]);
      }
      return response()->json([['value'=>0,'color'=>"rgb(49,126,235)"],['value'=>0,'color'=>"#60b1cc"]]);
  }
}
