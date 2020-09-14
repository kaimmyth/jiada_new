<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\user;
use App\Leads;
use Session;
use App\module;
use App\user_permission;
use App\CustCompany;

class CheckRole
{

    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            Session::put('role', Auth::user()->users_role);    
        }
        if (Auth::check() && Auth::user()->users_role == 1) {
        $odata = Auth::user()->id;
        //$odata = Company::where('users_id',$authID)->first();
        if ($odata) {
            Session::put('gorgID',$odata);
        }else{
            Session::put('gorgID',1);
        }       
        return $next($request);

        }
        elseif (Auth::check() && Auth::user()->users_role == 2) {
        
        $odata = Auth::user()->id;
       // $odata = User::where('users_id',$authID)->first();
       $all_module_permission=user_permission::where('user_id',$odata)->get()->toArray();
       $permission_record=user_permission::where('user_id',$odata)->where('is_read','yes')->get()->toArray();
       $permission_record_add=user_permission::where('user_id',$odata)->where('is_add','yes')->get()->toArray();
       $permission_record_edit=user_permission::where('user_id',$odata)->where('is_edit','yes')->get()->toArray();
       $permission_record_delete=user_permission::where('user_id',$odata)->where('is_delete','yes')->get()->toArray();
    //    return $odata;
    //    echo "<pre>";
       $module_id=array();
       $module_view_id=array();
       foreach($permission_record as $key_per=>$value)
       {
        $module_id[]=$value['permission_value'];
       }
        // print_r($module_id); die;
        Session::put('module_id',$module_id);
        Session::put('permission_value',$permission_record);
        Session::put('permission_record_add',$permission_record_add);
        Session::put('permission_record_edit',$permission_record_edit);
        Session::put('permission_record_delete',$permission_record_delete);
        Session::put('all_module_permission',$all_module_permission);
        Session::put('gorgID',$odata);
        return $next($request);
        }
        elseif (Auth::check() && Auth::user()->users_role == 3) {
        $odata = Auth::user()->id;
       $all_module_permission=user_permission::where('user_id',$odata)->get()->toArray();
       $permission_record=user_permission::where('user_id',$odata)->where('is_read','yes')->get()->toArray();
       $permission_record_add=user_permission::where('user_id',$odata)->where('is_add','yes')->get()->toArray();
       $permission_record_edit=user_permission::where('user_id',$odata)->where('is_edit','yes')->get()->toArray();
       $permission_record_delete=user_permission::where('user_id',$odata)->where('is_delete','yes')->get()->toArray();
       $module_id=array();
       $module_view_id=array();
       foreach($permission_record as $key_per=>$value)
       {
        $module_id[]=$value['permission_value'];
       }
        Session::put('module_id',$module_id);
        Session::put('permission_value',$permission_record);
        Session::put('permission_record_add',$permission_record_add);
        Session::put('permission_record_edit',$permission_record_edit);
        Session::put('permission_record_delete',$permission_record_delete);
        Session::put('all_module_permission',$all_module_permission);
        Session::put('gorgID',$odata);
        return $next($request);
        }
        elseif (Auth::check() && Auth::user()->users_role == 4) {
        $authID = Auth::user()->id;
        $odata = Leads::where('owner_id',$authID)->first();
        if ($odata) {
           Session::put('gorgID',$odata->owner_id);
       }else{
        Session::put('gorgID',$authID);
        }         
        return $next($request);
    }
        else {
        return redirect('portal');
        }
    }
}
