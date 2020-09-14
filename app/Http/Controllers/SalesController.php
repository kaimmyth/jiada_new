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
use App\Leads;
use App\User;
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

class SalesController extends Controller
{

	public function index(Request $request)
	{
		$results = User::where(['org_id'=>Session::get('gorgID'),'status'=>1])->get();
		$data['content'] = 'sales-order.sales_rep_listing';
		return view('layouts.content',compact('data'))->with('results',$results);
	}

	public function CreateUser(Request $request)
	{

		if ($request->isMethod('post')) {
			$insertdata['org_id']   = Session::get('gorgID');
			$insertdata['users_role']   = 3;
			$insertdata['username']   = $request->username;
			$insertdata['password']   = Hash::make($request->password);
			$insertdata['name']  = $request->name;
			$insertdata['email']   = $request->email;
			$insertdata['address']   = $request->address;
			$insertdata['city']   = $request->city_distt;
			$insertdata['state']   = $request->state_provence;
			$insertdata['country']   = $request->country;
			$insertdata['pincode']   = $request->pincode;
			$insertdata['phone']   = $request->phone;
			$insertdata['gender']   = $request->gender;
			$insertdata['ip_address']   = $request->ip();

			if ($request->ids!='') 
			{
				$insertdata['updated_at'] = date("Y-m-d H:i:s");
				User::where('id',$request->ids)->update($insertdata);
				Session::flash('success','Updated Successufully');  
				return Redirect::action('SalesController@index');
			}else
			{ 
				$insertdata['created_at'] = date("Y-m-d H:i:s");
				User::insert($insertdata);
				Session::flash('success','Created Successufully');  
				return Redirect::action('SalesController@index');
			}
		}

		$data['content'] = 'sales-order.add-sales-rep';
		return view('layouts.content',compact('data'));		
	}

	public function SalesUserEdit(User $user,$id)
	{
		$results =  $user->findOrFail($id);
		$data['content'] = 'sales-order.add-sales-rep';
		return view('layouts.content',compact('data'))->with(['results'=>$results]);
	}
}
