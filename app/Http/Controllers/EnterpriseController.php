<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use Crypt;
use Session;

class EnterpriseController extends Controller
{
    public function list_enterprise()
    {
        $enterprises=Enterprise::where('status',1)->get();
        // return $enterprises;
        $data['content'] = 'customer.list_enterprise';
      return view('layouts.content', compact('data'))->with('enterprises',$enterprises);
    }
    public function view_add()
    {
        $data['content'] = 'customer.add-enterprise';
      return view('layouts.content', compact('data'));
    }
    public function add_enterprise(Request $request)
    {
      if($request->unit_id!="")
      {
          $validator =  $request->validate([
              'nameofUnit' => 'required',
              'cantactNo' => 'required',
              'first_name' => 'required',
            'last_name' => 'required',
              'address' => 'required',
              'district' => 'required',
              'block' => 'required',
              'landType' => 'required',
              'products' => 'required',
              'typeOfUnit' => 'required',
              'regularEmployee' => 'required|max:25|min:1',
              'contractualEmployee' => 'required|max:25|min:1',
              'dailyBasis' => 'required|max:25|min:1',
              'indirectEmployment' => 'required|max:25|min:1',
              'noofFemaleEmployeeDirect' => 'required|max:25|min:1',
              'noofMaleEmployeeDirect' => 'required|max:25|min:1',
              'statusofUnit' => 'required',
          ]);
          $enterprises= Enterprise::find($request->unit_id);
      }else{
        
        $validator =  $request->validate([
            'nameofUnit' => 'required',
            'cantactNo' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:enterprise',
            'address' => 'required',
            'district' => 'required',
            'block' => 'required',
            'landType' => 'required',
            'products' => 'required',
            'typeOfUnit' => 'required',
            'regularEmployee' => 'required|max:25|min:1',
            'contractualEmployee' => 'required|max:25|min:1',
            'dailyBasis' => 'required|max:25|min:1',
            'indirectEmployment' => 'required|max:25|min:1',
            'noofFemaleEmployeeDirect' => 'required|max:25|min:1',
            'noofMaleEmployeeDirect' => 'required|max:25|min:1',
            'statusofUnit' => 'required',
        ]);
        $enterprises=new Enterprise();
      }
        $enterprises->nameofUnit=$request->nameofUnit;

        $enterprises->nameOfPromoteer=$request->first_name." ".$request->last_name;
        $enterprises->first_name=$request->first_name;
        $enterprises->last_name=$request->last_name;
        $enterprises->dateOfDop=$request->dateOfDop;
        $enterprises->cantactNo=$request->cantactNo;
        $enterprises->company_reg_no=$request->company_reg_no;
        $enterprises->company_description=$request->company_description;
        $enterprises->email=$request->email;
        $enterprises->address=$request->address;
        $enterprises->district=$request->district;
        $enterprises->number_of_employees=$request->number_of_employees;
        $enterprises->block=$request->block;
        $enterprises->sector=$request->sector;
        $enterprises->landType=$request->landType;
        $enterprises->products=$request->products;
        $enterprises->typeOfUnit=$request->typeOfUnit;
        $enterprises->regularEmployee=$request->regularEmployee;
        $enterprises->contractualEmployee=$request->contractualEmployee;
        $enterprises->dailyBasis=$request->dailyBasis;
        $enterprises->indirectEmployment=$request->indirectEmployment;
        $enterprises->statusofUnit=$request->statusofUnit;
        $enterprises->noofFemaleEmployeeDirect=$request->noofFemaleEmployeeDirect;
        $enterprises->noofMaleEmployeeDirect=$request->noofMaleEmployeeDirect;
        $enterprises->valueofExport=$request->valueofExport;
        $enterprises->turnOverInFy1=$request->turnOverInFy1 ?? "";
        $enterprises->turnOverInFy2=$request->turnOverInFy2 ?? "";
        $enterprises->investment=$request->investment ?? 0;
        $enterprises->status=1;
        $enterprises->created_by=Auth::user()->id;
        $enterprises->updated_at=date('Y-m-d H:i:s');
        $enterprises->updated_by=Auth::user()->id;
        $enterprises->save();
        return redirect('customer/list-enterprises');
    }
    public function fetch_enterprise($id="")
    {
      $enterprises=Enterprise::where('id',Crypt::decrypt($id))->first();
      if($enterprises=="")
      {
        Session::put('danger',"Something Went Wrong Please Try Again");
        return back();
      }
      $data['content'] = 'customer.add-enterprise';
      return view('layouts.content', compact('data'))->with('enterprises',$enterprises);
    }
    public function delete_enterprises($id="")
    {
      $enterprises=Enterprise::where('id',Crypt::decrypt($id))->first();
      if($enterprises!="")
      {
        $enterprises->status=0;
        $enterprises->save();
        Session::put('success',"Company Details id Deactived");
        return back();
      }
      else
      {
        Session::put('danger',"Something Went Wrong Please Try Again");
        return back();    
      }
    }
}
