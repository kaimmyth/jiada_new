<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustCompany;
use App\Industries;
use App\CompanyType;
use App\LocationZone;
use App\Material;
use App\Enterprise;


class UnitListingController extends Controller
{
    public function get_industries_name(Request $request)
    {
        if(request()->segment(2)){
            $customer_details=Enterprise::where(function ($q)
            {
                $q->whereRaw('find_in_set(?,waste_materials_id)',[request()->segment(2)])
                    ->orWhereRaw('find_in_set(?,input_details_id)',[request()->segment(2)]);
            })->paginate(10);
        //    return response()->json($customer_details);
            $materials = Material::all();
        }else{
            $materials = Material::all();
            $customer_details = Enterprise::paginate(10);
        }
        $industries = Industries::all();
        $company_types = CompanyType::all();
        return view('static-pages.unit',compact('industries','company_types','materials','customer_details'));
    }

    public function search(Request $request)
    {
        $mat_ids=Material::select('material_name AS label','id as value')
                            ->where('material_name','like',$request->input("query","iron").'%')
                            ->get();
        return response()->json($mat_ids);
    }

    public function filter_industry(Request $request)
    {
        ini_set('memory_limit', '-1');
        // return $request;
        // print_r( $request);
        // // print_r( $request->input_material_ids);
        // exit;
        if($request->company_type_ids!="")
        {
        $get_company_type_id = CompanyType::where('id',$request->company_type_ids)->first();
        }
        if($request->waste_material_ids!="")
        {
        $waste_materials_string=implode(",",$request->waste_material_ids);
        $waste_materials_string=$waste_materials_string .",";
        }
        if($request->input_material_ids!="")
        {
        $input_materials_string=implode(",",$request->input_material_ids);
        $input_materials_string=$input_materials_string.",";
        }
         if($request->company_type_ids!="")
        {
        $company_type_ids_string=strtolower($get_company_type_id->company_type);
        }
        // return $company_type_ids_string;
        // print_r($request->company_size[0]);
        $comp_size=explode('-',$request->company_size[0]);
        // print_r($comp_size);
        @$comp_first=$comp_size[0];
        @$comp_second=$comp_size[1];
        @$comp_turn_over=explode('-',$request->turn_over[0]);
        @$comp_turn_over_first=$comp_turn_over[0];
        @$comp_turn_over_first=$comp_turn_over_first+1;
        @$comp_turn_over_second=$comp_turn_over[1];
    //  print_r($waste_materials_string);
    //  print_r($input_materials_string);
    //  print_r($request->turn_over);
    //  exit;
                                // $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->where('turn_over','<=',$comp_turn_over_second)->get();
                                // $toReturn['get_company_details']['details'] = CustCompany::where('number_of_employees','>=',@$comp_first)->orWhere('number_of_employees','<=',@$comp_second)->get();
                                // $toReturn['get_company_details']['details'] = CustCompany::whereIn('industry_id',@$request->industry_ids)->get();
                                // $toReturn['get_company_details']['details'] = CustCompany::where('input_details_id',@$input_materials_string)->get();

                                // if(@$company_type_ids_string)
    //                     {
    //                         $toReturn['get_company_details']['details'] = CustCompany::where('company_type',@$company_type_ids_string)->get();
    //                     }
    // echo "<pre>";  
    // print_r($toReturn['get_company_details']['details']);
    // exit;
    // return $toReturn['get_company_details']['details'];

          if($request->industry_ids!="")
        {
        $industry_id_string=implode(',',$request->industry_ids);
        }
        $toReturn=array();
        $toReturn['get_company_details']=array();
        $toReturn['get_company_details']['details'] = [];
         if(@$waste_materials_string ||@$input_materials_string||$request->industry_ids || @$company_type_ids_string || @$industry_id_string ||@$comp_first || @$request->location_zone || @$comp_turn_over_first  )
            {
                $toReturn=array();
                $toReturn['get_company_details']=array();
                $toReturn['get_company_details']['details'] = [];
                $toReturn['company_details'] = CustCompany::get();
                // $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->orWhere('turn_over','<=',$comp_turn_over_second)->orWhere('address', 'LIKE',"%{$request->location_zone[0]}")->orWhere('number_of_employees','>=',@$comp_first)->orWhere('number_of_employees','<=',@$comp_second)->orWhere('company_type',@$company_type_ids_string)->orWhere('industry_id',@$industry_id_string)->get();
                        if(@$industry_id_string)
                        {
                          $toReturn['get_company_details']['details'] = CustCompany::whereIn('industry_id',@$request->industry_ids)->get();
                        }
                        if(@$waste_materials_string)
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('waste_materials_id',@$waste_materials_string)->get();
                        }
                        if(@$input_materials_string)
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('input_details_id',@$input_materials_string)->get();
                        }
                        if(@$company_type_ids_string)
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('company_type',@$company_type_ids_string)->get();
                        }  
                        if(@$request->company_size[0])
                        {
                                $toReturn['get_company_details']['details'] = CustCompany::where('number_of_employees','>=',@$comp_first)->where('number_of_employees','<=',@$comp_second)->get();
                        }
                        if(@$request->location_zone[0])
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('address', 'LIKE',"%{$request->location_zone[0]}")->get();
                        }
                        if(@$request->turn_over[0])
                        {
                            $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->where('turn_over','<=',$comp_turn_over_second)->get();
                        }

            }
            // $toReturn['get_company_details']['details'] = CustCompany::where('turn_over','>=',$comp_turn_over_first)->where('turn_over','<=',$comp_turn_over_second)->orWhere('address', 'LIKE',"%{$request->location_zone[0]}")->orWhere('number_of_employees','>=',@$comp_first)->orWhere('number_of_employees','<=',@$comp_second)->orWhere('company_type',@$company_type_ids_string)->orWhere('industry_id',@$industry_id_string)->get();

                return $toReturn['get_company_details']['details'];
            // if($get_industry_id || $get_waste_material_id || $get_company_type_id)
            // {
                // $toReturn=array();
                // $toReturn['get_company_details']=array();
                // $toReturn['company_details'] = CustCompany::get();
                //         if(count($get_industry_id)!=0)
                //         {
                //             foreach($get_industry_id as $key_industry=>$value_industry)
                //             {
                //                 // array_push($toReturn['get_company_details'], $toReturn['company_details']->where('industry_id',@$value_industry->id));
                //             $toReturn['get_company_details']['details']=$toReturn['company_details']->where('industry_id',@$value_industry->id);
                //             }
                //         }
                //         if(count($get_waste_material_id)!=0)
                //         {
                //             foreach($get_waste_material_id as $key_material=>$value_material)
                //             {
                //                 // echo $value_material->id;
                //             // array_push($toReturn['get_company_details'],$toReturn['company_details']->where('waste_materials_id',$value_material->id));
                //             $toReturn['get_company_details']['details']= $toReturn['company_details']->where('waste_materials_id',@$value_material->id);

                //             // echo $toReturn['get_company_details'];
                //             }
                //         }
                //         if(count($get_company_type_id)!=0)
                //         {
                //             foreach($get_company_type_id as $key_company=>$value_company)
                //             {
                //                 // array_push($toReturn['get_company_details'],$toReturn['company_details']->where('company_type',@$value_company->id));
                //             $toReturn['get_company_details']['details']= $toReturn['company_details']->where('company_type',@$value_company->id);
                //             }
                //         }  
                    // }
                    // else {
                    //     $toReturn['get_company_details'] =array();
                    // }
                    // echo "<pre>";
                    // print_r($toReturn['get_company_details']['details']);
                    // exit;
                    // return $toReturn;

         
            // return ['get_industry_id' => $get_industry_id,'get_company_details'=>@$get_company_details,'get_company_type_id'=>$get_company_type_id,'get_waste_material_id'=>$get_waste_material_id];
    }
    public function view_all_unit()
    {
        $unit_details=CustCompany::where('status',1)->get()->toArray();
        return $unit_details;
    }
}