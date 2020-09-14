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
use Cart;
use Session;
use DB;
use Response;
use App\Product_type;
use App\Quantity_type;
use App\Product_category;
use App\Price_type;
use App\Sub_category;
use App\Rent_type;
use App\Lease_type;
use App\EntryMaster;
use App\PccMaster;
use App\Material;
use App\Sub_Department;
use App\User;
use App\Status;
use App\module;
use App\user_permission;
use Crypt;
use Auth;




class MasterController extends Controller
{

	/* Department*/
	public function Department_Listing(Request $request)
	{
		$userData = DB::table('users')->get();
		$departmentData = DB::table('departments')
		->join('users', 'users.id', '=', 'departments.pos_id')
		->select('users.name', 'departments.*')
		->get();
		$data['content'] = 'master.department';
		return view('layouts.content', compact('data'))->with(['departmentData' => $departmentData, 'userData' => $userData]);
		
	}

	public function Add_Department(Request $request)
	{        
		$data = array(
			'department_name' => $request->department_name,
			'description' => $request->description,
			'pos_id' => $request->pos_id,
			'is_active' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatedepartment = DB::table('departments')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Adddepartment = DB::table('departments')->insert($data);
			return back();
		}
	}

	public function Department_Edit(Request $request,$id)
	{
		$data =  DB::table('departments')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Department(Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('departments')->where('id', '=', $id)->delete();
		return back();
	}

	
	

	/* Status*/
	public function Status_Listing(Request $request)
	{
		$userData = DB::table('users')->get();
		$statusData = DB::table('status')
		->join('users', 'users.id', '=', 'status.pos_id')
		->select('users.name', 'status.*')
		->get();
		$data['content'] = 'master.indexstatus';
		return view('layouts.content', compact('data'))->with(['statusData' => $statusData, 'userData' => $userData]);
		
	}

	public function Add_Status(Request $request)
	{        
		$data = array(
			'status_name' => $request->status_name,
			'description' => $request->description,
			'pos_id' => $request->pos_id,
			'is_active' => $request->is_active,
			'created_by'=> Session::get('gorgID')
			
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatedepartment = DB::table('status')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Adddepartment = DB::table('status')->insert($data);
			return back();
		}
	}

	public function Status_Edit(Request $request,$id)
	{
		$data =  DB::table('status')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Status(Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('status')->where('id', '=', $id)->delete();
		return back();
	}

















































	/* sub Department*/
	public function Subdepartment_Listing(Request $request)
	{
		$userData = DB::table('users')->get();
		$departmentData = DB::table('departments')->get();

		$subdepartmentsData = DB::table('subdepartment')
		->join('users', 'users.id', '=', 'subdepartment.pos_id')
		->join('departments', 'departments.id', '=', 'subdepartment.department_id')
		->select('users.name', 'subdepartment.*', 'departments.department_name')
		->get();
		

		// print_r($subdepartmentsData);die;
		$data['content'] = 'master.subdepartment';
		return view('layouts.content', compact('data'))->with(['departmentData' => $departmentData, 'userData' => $userData,'subdepartmentsData' => $subdepartmentsData]);
	}

	public function Add_Subdepartment(Request $request)
	{ 
		$data = array(
			'department_id' => $request->department_id,
			'subdepartment_name' => $request->subdepartment_name,
			'description' => $request->description,
			'pos_id' => $request->pos_id,
			'is_active' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatesubdepartment = DB::table('subdepartment')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addsubdepartment = DB::table('subdepartment')->insert($data);
			return back();
		}
		
	}

	public function Subdepartment_Edit(Request $request,$id)
	{
		$data =  DB::table('subdepartment')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Subdepartment(Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('subdepartment')->where('id', '=', $id)->delete();
		return back();
	}


	/* Category */
	public function Category_Listing()
	{
		$userData = DB::table('users')->get();
		$categorytData = DB::table('category')
		->join('users', 'users.id', '=', 'category.pos_id')
		->select('users.name', 'category.*')
		->get();
		$data['content'] = 'master.category';
		return view('layouts.content', compact('data'))->with(['categorytData' => $categorytData, 'userData' => $userData]);
	}

	public function Add_Category(Request $request)
	{        
		$data = array(
			'category_name' => $request->category_name,
			'description' => $request->description,
			'pos_id' => $request->pos_id,
			'is_active' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatedepartment = DB::table('category')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Adddepartment = DB::table('category')->insert($data);
			return back();
		}
	}

	public function Category_Edit(Request $request,$id)
	{
		$data =  DB::table('category')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Category (Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('category')->where('id', '=', $id)->delete();
		return back();
	}




	/*sub Category */
	public function Subcategory_Listing(Request $request)
	{
		$userData = DB::table('users')->get();
		$categoryData = DB::table('category')->get();

		$subcategorytData = DB::table('subcategory')
		->join('users', 'users.id', '=', 'subcategory.pos_id')
		->join('category', 'category.id', '=', 'subcategory.category_id')
		->select('users.name', 'subcategory.*', 'category.category_name')
		->get();

		$data['content'] = 'master.subcategory';
		return view('layouts.content', compact('data'))->with(['subcategorytData' => $subcategorytData, 'userData' => $userData, 'categoryData' => $categoryData]);
	}

	public function Add_Subcategory(Request $request)
	{        
		$data = array(
			'category_id' => $request->category_id,
			'subcategory_name' => $request->subcategory_name,
			'description' => $request->description,
			'pos_id' => $request->pos_id,
			'is_active' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatedepartment = DB::table('subcategory')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Adddepartment = DB::table('subcategory')->insert($data);
			return back();
		}
	}

	public function Subcategory_Edit(Request $request,$id)
	{
		$data =  DB::table('subcategory')->where('id', $id)->first();;
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Subcategory ($id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('subcategory')->where('id', '=', $id)->delete();
		return back();
	}



	public function PriorityLavels_Listing()
	{
		$priority_levelsData = DB::table('priority_levels')->get();

		$data['content'] = 'master.priority_level';
		return view('layouts.content', compact('data'))->with(['priority_levelsData' => $priority_levelsData]);
	}

	public function Add_PriorityLavels(Request $request)
	{      
		$data = array(
			'priority_name' => $request->priority_name,            
			'is_active' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatepriority_levels = DB::table('priority_levels')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addpriority_levels = DB::table('priority_levels')->insert($data);
			return back();
		}
	}

	public function PriorityLavels_Edit(Request $request,$id)
	{
		$data =  DB::table('priority_levels')->where('id', $id)->first();;
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_PriorityLavels (Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('priority_levels')->where('id', '=', $id)->delete();
		return back();
	}

	/* User*/	

	public function users_listing(Request $request)
	{
		$userData = DB::table('users')->get();

		$data['content'] = 'master.users';
		return view('layouts.content', compact('data'))->with(['userData' => $userData]);
	}
    public function add_users_form()
	{
		$module=module::get();
		// return $module;
		$data['content'] = 'master.add_user';
		return view('layouts.content', compact('data'))->with('module',$module);

	}
	public function add_users(Request $request)
	{      
		$data = array(
			'users_role' => '2',
			'name' => $request->name,
			'email' => $request->email,
			'username' => $request->user_name,
			'phone' => $request->phone,
			'password' => bcrypt($request->password),
			'status' => $request->status,
			'created_at' => date('Y-m-d H:i:s'),
		);

		$add_user=new User();
		$add_user->users_role=2;
		$add_user->name=$request->name;
		$add_user->email=$request->email;
		$add_user->username=$request->user_name;
		$add_user->designation=$request->designation;
		$add_user->phone=$request->phone;
		$add_user->password=bcrypt($request->password);
		$add_user->status=1;
		$add_user->created_at=date('Y-m-d H:i:s');
		$add_user->save();
		// return $add_user;
		$module = $request->module;
			if($add_user!="")
			{
			if($module!="")
			{
				foreach ($module as $key => $value) {
					$permission = new user_permission();
					$permission->user_id = $add_user->id;
					$permission->employer_id = Session::get('gorgID');
					$permission->company_id = Session::get('gorgID');
					$permission->permission_value = $value;
					$permission->is_read = (!empty($request->input('read' . $value))) ? "yes" : "no";
					$permission->is_add = (!empty($request->input('add' . $value))) ? "yes" : "no";
					$permission->is_edit = (!empty($request->input('edit' . $value))) ? "yes" : "no";
					$permission->is_delete = (!empty($request->input('delete' . $value))) ? "yes" : "no";
					$permission->save();
				}
				// return $Adduser;
				
			}
			else
			{
				Session::flash('danger', 'Please Select Module');
				return redirect('users');
			}
		}
		else
		{
			Session::flash('danger', 'User No Created!');
			return redirect('users');
		}
		Session::flash('success', 'Inserted Successfully..!');
		return redirect('users');
	}
	public function update_user(Request $request)
	{
		// return $request->module_permission_id[1];
		// return $permission;
		$add_user= User::find($request->user_id);
		$add_user->users_role=2;
		$add_user->name=$request->name;
		$add_user->email=$request->email;
		$add_user->username=$request->user_name;
		$add_user->designation=$request->designation;
		$add_user->phone=$request->phone;
		$add_user->password=bcrypt($request->password);
		$add_user->status=$request->status;
		$add_user->created_at=date('Y-m-d H:i:s');
		$add_user->save();
		// return $add_user;
		$module = $request->module;
			// if($add_user!="")
			// {
			if($module!="")
			{
				foreach ($module as $key => $value) {
					$permission_update = user_permission::find($request->module_permission_id[$key]);
					$permission_update->user_id = $add_user->id;
					$permission_update->employer_id = Session::get('gorgID');
					$permission_update->company_id = Session::get('gorgID');
					$permission_update->permission_value = $value;
					$permission_update->is_read = (!empty($request->input('read'.$value))) ? "yes" : "no"; 
					$permission_update->is_add = (!empty($request->input('add'.$value))) ? "yes" : "no"; 
					$permission_update->is_edit = (!empty($request->input('edit'.$value))) ? "yes" : "no";
					$permission_update->is_delete = (!empty($request->input('delete'.$value))) ? "yes" : "no";
					$permission_update->save();
					// echo $permission_update;
				}
				// return $permission_update;
				
			}
			else
			{
				Session::flash('danger', 'Please Select Module');
				return redirect('users');
			}
		// }
		Session::flash('success', 'Update Successfully..!');
		return redirect('users');
	}

	public function users_edit(Request $request,$id)
	{
// 		$data =  DB::table('users')->where('id', $id)->first();;
// 		if($data) {
// 			return Response::json($data);
// 		}
		$toReturn['module']=module::get()->toArray();
		$toReturn['data']=  DB::table('users')->where('id', $id)->first();
		$toReturn['permission_record']=user_permission::where('user_id',$id)->get()->toArray();
		// $decrypt= Crypt::decrypt($toReturn['data']->password);  
		// print_r($decrypt);
		// exit;
		$data['content'] = 'master.edit_user';
		return view('layouts.content', compact('data'))->with('toReturn',$toReturn);
	}

	public function delete_users (Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('users')->where('id', '=', $id)->delete();
		return back();
	}

	public function insert_generic(Request $request){
		// print_r($request->generic_id_check);
		if($request->generic_id_check != ''){
			$insertGENERICID = DB::table('users')->where('generic_id',1)->update(['generic_id' => 0]);
			$insertGENERICID = DB::table('users')->where('id',$request->generic_id_check)->update(['generic_id' => 1]);
			Session::flash('success', 'Added as Generic!');
			return back();
		}
	}

	/* entity master*/
	public function Entity_Listing(Request $request)
	{
		$entityData = DB::table('entity_master')->get();
	    $data['content'] = 'master.indexentity';
		return view('layouts.content', compact('data'))->with(['entityData' => $entityData]);
	}

	public function Add_Entity(Request $request)
	{        
		$data = array(
			'entity_name' => $request->entity_name,
			'entity_description' => $request->description,
			'status' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => 1,
			'updated_by' => 1,

		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updateentity = DB::table('entity_master')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addentity= DB::table('entity_master')->insert($data);
			return back();
		}
	}

	public function Edit_Entity(Request $request,$id)
	{
		$data =  DB::table('entity_master')->where('id', $id)->first();;
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_Entity(Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('entity_master')->where('id', '=', $id)->delete();
		return back();
	}



	/* pcc master*/
	public function PccMaster_Listing(Request $request)
	{
		$entryData = DB::table('pcc_master')->get();
	    $data['content'] = 'master.indexpcc';
		return view('layouts.content', compact('data'))->with(['entryData' => $entryData]);
	}

	public function Add_PccMaster(Request $request)
	{        
		$data = array(
			'entry_pcc_name' => $request->entry_pcc_name,
			'pcc_action_name' => $request->pcc_action_name,
			'status' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => 1,
			'updated_by' => 1,

		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatepccentry = DB::table('pcc_master')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addpccentry= DB::table('pcc_master')->insert($data);
			return back();
		}
	}

	public function Edit_PccMaster(Request $request,$id)
	{
		$data =  DB::table('pcc_master')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_PccMaster(Request $request,$id)
	{
		Session::flash('error', 'Deleted Successfully..!');
		$delete = DB::table('pcc_master')->where('id', '=', $id)->delete();
		return back();
	}
	


	/* industries master*/

	public function IndustriesMaster_Listing(Request $request)
	{
		$industriesData = DB::table('industries')->get();
	    $data['content'] = 'master.indexindustries';
		return view('layouts.content', compact('data'))->with(['industriesData' => $industriesData]);
	}

	public function Add_IndustriesMaster(Request $request)
	{        
		$data = array(
			'industires_name' => $request->industries_name,
			'industires_description' => $request->description,
			'status' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => 1,
			'updated_by' => 1,

		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatepccentry = DB::table('industries')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addpccentry= DB::table('industries')->insert($data);
			return back();
		}
	}

	public function Edit_IndustriesMaster(Request $request,$id)
	{
		$data =  DB::table('industries')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_IndustriesMaster(Request $request,$id)
	{
			$deleterecord=DB::table('customer_company')->where('industry_id','=',$id)->get();
			if(count($deleterecord)!=0)
			{
			Session::flash('error', 'Already exits Cannot delete Successfully..!');
			return back();
		}
		else{
			Session::flash('error', 'Deleted Successfully..!');
			$delete = DB::table('industries')->where('id', '=', $id)->delete();
			return back();

		}
		
	}


	// // SUB   industries  Master
	// public function SubindustriesMaster_Listing(Request $request)
	// {
	// 	$userData = DB::table('users')->get();
	// 	$categoryData = DB::table('category')->get();

	// 	$subcategorytData = DB::table('subcategory')
	// 	->join('users', 'users.id', '=', 'subcategory.pos_id')
	// 	->join('category', 'category.id', '=', 'subcategory.category_id')
	// 	->select('users.name', 'subcategory.*', 'category.category_name')
	// 	->get();

	// 	$data['content'] = 'master.indexsubindustries';
	// 	return view('layouts.content', compact('data'))->with(['subcategorytData' => $subcategorytData, 'userData' => $userData, 'categoryData' => $categoryData]);
	// }

	// public function Add_SubindustriesMaster(Request $request)
	// {        
	// 	$data = array(
	// 		'category_id' => $request->category_id,
	// 		'subcategory_name' => $request->subcategory_name,
	// 		'description' => $request->description,
	// 		'pos_id' => $request->pos_id,
	// 		'is_active' => $request->is_active,
	// 		'created_at' => date('Y-m-d H:i:s'),
	// 	);

	// 	if($request->ids != ''){
	// 		Session::flash('success', 'Updated Successfully..!');
	// 		$Updatedepartment = DB::table('subcategory')->where('id', $request->ids)->update($data);
	// 		return back();
	// 	}else{
	// 		Session::flash('success', 'Inserted Successfully..!');
	// 		$Adddepartment = DB::table('subcategory')->insert($data);
	// 		return back();
	// 	}
	// }

	// public function Edit_SubindustriesMaster(Request $request,$id)
	// {
	// 	$data =  DB::table('subcategory')->where('id', $id)->first();;
	// 	if($data) {
	// 		return Response::json($data);
	// 	}
	// }

	// public function  Delete_SubindustriesMaster($id)
	// {
	// 	Session::flash('error', 'Deleted Successfully..!');
	// 	$delete = DB::table('subcategory')->where('id', '=', $id)->delete();
	// 	return back();
	// }



	/* material master*/
	public function MaterialMaster_Listing(Request $request)
	{
		if(Auth::user()->users_role==3){
			$materialsData = DB::table('materials')->where('created_by',Auth::user()->id)->get();
		}else{
			$materialsData = DB::table('materials')->get();
		}
		
	    $data['content'] = 'master.indexmaterial';
		return view('layouts.content', compact('data'))->with(['materialsData' => $materialsData]);
	}

	public function Add_MaterialMaster(Request $request)
	{        
		$data = array(
			'material_name' => $request->material_name,
			'material_description' => $request->description,
			'status' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => Auth::user()->id,
			'updated_by' => Auth::user()->id,

		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatepmaterials = DB::table('materials')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addmaterials= DB::table('materials')->insert($data);
			return back();
		}
	}

	public function Edit_MaterialMaster(Request $request,$id)
	{
		$data =  DB::table('materials')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}

	public function Delete_MaterialMaster(Request $request,$id)
	{
			
			Session::flash('error', 'Deleted Successfully..!');
			$delete = DB::table('materials')->where('id', '=', $id)->delete();
			return back();
				
	}
	/* uom master*/
	public function Uom_Listing(Request $request)
	{
		$uomData = DB::table('uom')->get();
	    $data['content'] = 'master.indexuom';
		return view('layouts.content', compact('data'))->with(['uomData' => $uomData]);
	}

	public function Add_Uom(Request $request)
	{        
		$data = array(
			'uom_name' => $request->uom_name,
			'uom_description' => $request->uom_description,
			'uom_type' => $request->uom_type,
			'status' => $request->is_active,
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => 1,
			'updated_by' => 1,

		);

		if($request->ids != ''){
			Session::flash('success', 'Updated Successfully..!');
			$Updatepmaterials = DB::table('uom')->where('id', $request->ids)->update($data);
			return back();
		}else{
			Session::flash('success', 'Inserted Successfully..!');
			$Addmaterials= DB::table('uom')->insert($data);
			return back();
		}
	}

	public function Uom_Edit(Request $request,$id)
	{
		$data =  DB::table('uom')->where('id', $id)->first();
		if($data) {
			return Response::json($data);
		}
	}


	public function Delete_Uom(Request $request,$id)
	{		
			Session::flash('error', 'Deleted Successfully..!');
			$delete = DB::table('uom')->where('id', '=', $id)->delete();
			return back();
				
	}
}
