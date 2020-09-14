<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustCompany;
use App\company_services;
use App\company_product;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\user_permission;
use App\module;
use App\WebMaterial;
use Auth;
use Redirect;
use DB;
class CompanyProfileController extends Controller
{
    public function viewsite($id="")
    {
        $customer_details = CustCompany::where('id',$id)->first();
        if(empty($customer_details))
        {
            return redirect('/');
        }
        $products=company_product::where('comp_id',$id)->get();
        $services=company_services::where('comp_id',$id)->get();
        $materials=WebMaterial::where('org_id',$id)->get();
        // return response()->json($customer_details);
        return view('static-pages.company-profile')
                ->with('customer_details',$customer_details)
                ->with('services',$services)
                ->with('materials',$materials)
                ->with('products',$products);
    }
    public function viewportal($company_name="")
    {
    //    echo current_url();
        // echo url()->current();
        $enter_url=url()->current();
        $customer_details = CustCompany::where('company_portal_url',$enter_url)->first();
        // return $customer_details;
        // $customer_details = CustCompany::where('company',$company_name)->first();
        // return $customer_details;
        if(empty($customer_details))
        {
            return redirect('/');
        }
        $product=company_product::where('comp_id',$customer_details->id)->get();
        $services=company_services::where('comp_id',$customer_details->id)->get();
        return view('static-pages.company-profile')->with('customer_details',$customer_details)->with('services',$services)->with('product',$product);
    }
    public function web_create_form($id)
    {
        // return $id;
        if(Auth::user()->users_role==3){
            $company = CustCompany ::where('cust_id',$id)->first();
        //   return response()->json($company);
             if($company!="")
            {
            $id=$company->id;
            }else
            {
                return Redirect::back();
            }
        }
        $customer_details = CustCompany::where('id',$id)->first();
        $company_services=company_services::where('comp_id',$id)->get();
        $web_material=DB::table('web_materials')->where('org_id',$id)->get();
        $company_product=company_product::where('comp_id',$id)->get();
        $data['content'] = 'customer.create_company_website';
        // return response()->json([$company_product]); 
        return view('layouts.content', compact('data'))
                ->with('customer_details',$customer_details)
                ->with('web_materials',$web_material)
                ->with('company_product',$company_product)
                ->with('company_services',$company_services);
    }
    public function add_comapany_details_website(Request $request)
    {  
        // return response()->json($request->all());
        // create user for company start
        $userDetail = User::updateOrCreate([
            'id'=>$request->customer_id
        ],[
            'users_role'=>3,
            'user_type'=>3,
            'username'=>$request->comapny_user,
            'name'=>$request->company,
            'password'=>bcrypt($request->comapny_password),
            'email'=>$request->comapny_email
        ]);
        if($userDetail){
            $customer_id = $userDetail->id;
        }else{
            $customer_id = $request->customer_id;
        }
        // set permissions
        $module_edit = ['1'=>'yes','2'=>'no','3'=>'no','4'=>'no','5'=>'no','6'=>'no','7'=>'no','8'=>'yes','9'=>'no'];
        $module_add = ['1'=>'no','2'=>'no','3'=>'no','4'=>'no','5'=>'no','6'=>'no','7'=>'no','8'=>'yes','9'=>'no'];
        foreach ($module_edit as $key => $value) {
            $fetch = user_permission::where('user_id', $customer_id)->where('permission_value', $key)->first();
            if($fetch){
                user_permission::where('user_id', $customer_id)->where('permission_value', $key)->update([
                    'employer_id'=>Session::get('gorgID'),
                    'company_id'=>$request->comp_id,
                    'is_read'=>$value,
                    'is_add'=>$module_add[$key],
                    'is_edit'=> "no",
                    'is_delete'=> "no",
                ]);
            }else{
                $permission = new user_permission();
                $permission->user_id = $customer_id;
                $permission->employer_id = Session::get('gorgID');
                $permission->company_id = $request->comp_id;
                $permission->permission_value = $key;
                $permission->is_read = $value;
                $permission->is_add = "no";
                $permission->is_edit = "no";
                $permission->is_delete = "no";
                $permission->save();
            }
        }
        // create user for company end
      $company_services_details=company_services::where('comp_id',$request->comp_id)->get();
      $company_product__details=company_product::where('comp_id',$request->comp_id)->get();
      $tmp_array_product = [];
      $delete_check_array_product = [];
      $tmp_array_service = [];
      $delete_check_array_service = [];
      foreach ($company_product__details as $tmp_prodcut) {
        array_push($tmp_array_product, $tmp_prodcut->id);
      }      
      foreach ($company_services_details as $tmp_service) {
        array_push($tmp_array_service, $tmp_service->id);
      }      
      // Update Company Description
      if(@$request->comapny_banner!="")
      {
        $banner=$request->comapny_banner->getClientOriginalName();
        request()->comapny_banner->move(public_path('company_doc'), $banner);
      }
      else
      {
        $banner=$request->company_banner_pre;
      }
      if(@$request->comapny_logo!="")
      {
          $comapny_logo=$request->comapny_logo->getClientOriginalName();
          request()->comapny_logo->move(public_path('company_doc'), $comapny_logo);
      }
      else
      {
            $comapny_logo=$request->company_logo_pre;
      }
      
      /* update company customer table records*/
      $customer_company=CustCompany::where('id',$request->comp_id)
                                    ->update([
                                        'company_description'=>$request->company_description,
                                        'company_portal_url'=>$request->company_portal_url,
                                        'banner'=>$banner,
                                        'company_logo'=>$comapny_logo,
                                        'header_color'=>$request->color,
                                        'banner_heading'=>$request->banner_heading,
                                        'banner_description'=>$request->banner_description,
                                        'cust_id'=>$customer_id,
                                        'is_contact_form'=>$request->company_form,
                                        'welcome_heading'=>$request->welcome_heading,
                                        'welcome_desc'=>$request->welcome_desc,
                                        'mate_description'=>$request->mate_description,
                                        'mate_heading'=>$request->mate_heading,
                                        ]);
      /*  Add web materials name*/
         foreach($request->mat_web_name as $mat_key=>$mat_name){
             if($mat_name){
                 $materials = WebMaterial::updateOrCreate([
                    'id'=>$request->mat_web_id[$mat_key],
                    'org_id'=>$request->comp_id
                     ],[
                    'id'=>$request->mat_web_id[$mat_key],
                    'org_id'=>$request->comp_id,
                    'mat_web_name'=>$mat_name,
                    ]); 
             }
        }
        // Update company Section
        if($request->service_id!=null)
        {
            // echo "in";
            // exit;
            foreach ($request->service_id as $key_service => $value_service) {
                if($request->service_id[$key_service]!="")
                {
                    $delete_check_array_service[]=$value_service;
                $add_company_services=company_services::find($request->service_id[$key_service]);
                $add_company_services->services_name= $request->service_name[$key_service];
                $add_company_services->services_heading= $request->services_heading[$key_service];
                $add_company_services->services_description= $request->services_description[$key_service];
                $add_company_services->comp_id= $request->comp_id;
                $add_company_services->status=1;
                $add_company_services->created_by=Session::get('gorgID');
                $add_company_services->save();
                }
                else
                {
                    $add_company_services=new company_services();
                    $add_company_services->services_name= $request->service_name[$key_service];
                    $add_company_services->services_heading= $request->services_heading[$key_service];
                    $add_company_services->services_description= $request->services_description[$key_service];
                    $add_company_services->comp_id= $request->comp_id;
                    $add_company_services->status=1;
                    $add_company_services->created_by=Session::get('gorgID');
                    $add_company_services->save();
                }
                }
        }
        else{
            //Insert new company Service 
            if($request->service_name!="")
            {
            foreach ($request->service_name as $key_service => $value_service) {
                $add_company_services=new company_services();
                $add_company_services->services_name= $request->service_name[$key_service];
                $add_company_services->services_heading= $request->services_heading[$key_service];
                $add_company_services->services_description= $request->services_description[$key_service];
                $add_company_services->comp_id= $request->comp_id;
                $add_company_services->status=1;
                $add_company_services->created_by=Session::get('gorgID');
                $add_company_services->save();
                }
            }
        }
        // echo "wait";
        // exit;
        //Update Company product
        if($request->product_id)
        {
            foreach ($request->product_id as $key_product => $value_prodcut) {
                if($request->product_id[$key_product]!="")
                {
                    $delete_check_array_product[]=$value_prodcut;
                    if(@$request->product_image[$key_product]!="")
                    {
                        $product_image_name=$request->product_image[$key_product]->getClientOriginalName();
                        request()->product_image[$key_product]->move(public_path('company_doc'), $product_image_name);
                        // $product_image_name=$request->product_image_pre[$key_product];
                                            // echo $product_image_name;
                        // exit;
                    }
                    else
                    {
                    // echo $product_image_name;
                    // exit;
                    $product_image_name=$request->product_image_pre[$key_product];
                    }
                    $add_company_product=company_product::find($request->product_id[$key_product]);
                    $add_company_product->product_name= $request->product_name[$key_product];
                    $add_company_product->product_image= $product_image_name;
                    $add_company_product->product_heading= $request->product_heading[$key_product];
                    $add_company_product->product_description=$request->product_description[$key_product];
                    $add_company_product->comp_id= $request->comp_id;
                    $add_company_product->status=1;
                    $add_company_product->created_by=Session::get('gorgID');
                    $add_company_product->update();
                }
                else
                {
                    if(@$request->product_image[$key_product]!="")
                    {
                        $product_image_name=$request->product_image[$key_product]->getClientOriginalName();
                        request()->product_image[$key_product]->move(public_path('company_doc'), $product_image_name);
                    }
                    else
                    {
                        $product_image_name=$request->product_image_pre[$key_product];
                    }
                    // $product_image_name=$request->product_image[$key_product]->getClientOriginalName();
                    $add_company_product=new company_product();
                    $add_company_product->product_name= $request->product_name[$key_product];
                    $add_company_product->product_image= $product_image_name;
                    $add_company_product->product_heading= $request->product_heading[$key_product];
                    $add_company_product->product_description=$request->product_description[$key_product];
                    $add_company_product->comp_id= $request->comp_id;
                    $add_company_product->status=1;
                    $add_company_product->created_by=Session::get('gorgID');
                    $add_company_product->save();
                }

            }
        }
        else
        { 
            // Insert New Company product
            if($request->product_name!="")
            {
            foreach ($request->product_name as $key_product => $value_prodcut) {
                $product_image_name=$request->product_image[$key_product]->getClientOriginalName();
                request()->product_image[$key_product]->move(public_path('company_doc'), $product_image_name);
                $add_company_product=new company_product();
                $add_company_product->product_name= $request->product_name[$key_product];
                $add_company_product->product_image= $product_image_name;
                $add_company_product->product_heading= $request->product_heading[$key_product];
                $add_company_product->product_description=$request->product_description[$key_product];
                $add_company_product->comp_id= $request->comp_id;
                $add_company_product->status=1;
                $add_company_product->created_by=Session::get('gorgID');
                $add_company_product->save();
                }
            }
        }
        $diff_result_prodcut = array_diff($tmp_array_product, $delete_check_array_product);
      $diff_result_service = array_diff($tmp_array_service, $delete_check_array_service);

      foreach ($diff_result_prodcut as $key => $value_product_delete) {
        $company_product_delete = company_product::where('id', $value_product_delete)->delete();
      }
      foreach ($diff_result_service as $key => $value_service_delete) {
        $company_service_delete = company_services::where('id', $value_service_delete)->delete();
      }
      if(Auth::user()->users_role==3){
        return redirect('create/compan_website/'.Auth::user()->id);  
      }
        return redirect('land/customer');
        // $add_company_prodcut=new company_product();
        // $add_company_prodcut->product_name=$request->product_name;
        // $add_company_prodcut->product_heading=$request->product_heading;
        // $add_company_prodcut->product_description=$request->product_description;
        // $add_company_prodcut->=$request->
        // $add_company_prodcut->=$request->
        // $add_company_prodcut->=$request->

    }
    public function contact_customer(Request $request){
        // dd($request->all());       
        DB::table('contact_customers')
                ->insertGetId([
                    'name'        => $request->name,
                    'phone'       => $request->phone,
                    'email'       => $request->email,
                    'message'     => $request->message,
                    'customer_id' => $request->customer_id,
                ]); 
        
        return redirect('comapny-profile/'.$request->customer_id)->with('message', 'Contact Send Successfully.');

    }
}
