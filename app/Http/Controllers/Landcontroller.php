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
use Response;
use DB;
use Hash;
use Auth;
use PDF;
use App\PccRegistration;
use App\Land;
use App\AllLocationzone;
use App\AllLocationphase;
use App\AllLocationblock;
use App\Customer;
use App\Leasedata;
use App\ShareCustomer;
use App\CustCompany;
use App\lease_invoice;
use App\Industries;
use App\InputDetails;
use App\WasteMaterials;
use App\SubIndustry;
use App\Material;

class Landcontroller extends Controller
{
  public function index()
  {
    try {
      $lovationdata = AllLocationzone::all();
      if(Auth::check() && Auth::user()->users_role == 2)
      {
        $land_permission=Session::get('all_module_permission');
        foreach($land_permission as $key=>$value_land)
        {
          if($value_land['permission_value']==2)
          {
            $module_permission=$value_land;
          }
        }
      }
    $user_id=Session::get('gorgID');
    // return $user_id;
      // print_r($module_permission);
      // exit;
      // return $land_permission;
      $landdata = Land::where('status',1)->orderBy('id','DESC')->paginate(25);
      $data['content'] = 'land.lands';
      return view('layouts.content', compact('data'))->with(['lovationdata' => $lovationdata, 'landdata' => $landdata,'module_permission'=>@$module_permission,'user_id'=>@$user_id]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function AddLands1(Request $request)
  {
    try {
      if ($request->area != '') {
        if ($request->file('documents') != '') {
          //  request()->validate([
          //   'documents' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

          // ]);
          $DocName = time() . '.' . request()->documents->getClientOriginalExtension();
          request()->documents->move(public_path('landdocuments'), $DocName);
          if (file_exists(public_path('landdocuments/' . $request->new_documents))) {
            @unlink(public_path('landdocuments/' . $request->new_documents));
          }
        } else {
          $DocName = $request->new_documents;
        }

        if ($request->ids != '') {
          $insertData = Land::find($request->ids);
        } else {
          $insertData = new Land();
        }
        $insertData->area = $request->area;
        $insertData->sector = $request->sector;
        $insertData->block = $request->block;
        $insertData->land_name = $request->land_name;
        $insertData->plot_no = $request->plot_no;
        $insertData->plot_size = $request->plot_value;
        $insertData->city = $request->city;
        $insertData->documents = $DocName;
        $insertData->uom = $request->plot_size;
        $insertData->state = $request->state;
        $insertData->pincode = $request->pincode;
        $insertData->country = $request->country;
        $insertData->longitute = $request->longitute;
        $insertData->latitute = $request->latitute;
        $insertData->address1 = $request->address;
        if ($request->ids != '') {
          $insertData->updated_at = date('Y-m-d');
          $insertData->update();
          $editData1 = Land::find($request->ids);
          $editData = Land::where('id', $request->ids)->first();
          Session::flash('success', ' SuccessFully Updated');
        } else {
          $insertData->created_at = date('Y-m-d');
          $insertData->save();
          $RegLandData = Land::find($insertData->id);
          Session::flash('success', ' SuccessFully Created');
        }

        if ($request->pageName == 'mainland') {
          return Redirect::action('Landcontroller@index');
        } else {
          Session::put('RegLandData', $RegLandData);
          return back();
        }
      }
      $zone = AllLocationzone::all();
      $phase = AllLocationphase::all();
      $block = AllLocationblock::all();

      $data['content'] = 'land.add_land';
      return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block, 'editData1' => $editData1 ?? '', 'editData' => $editData ?? '']);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }
  public function AddLands(Request $request)
  {
    
    try {
      if ($request->area != '') {
        if ($request->file('documents') != '') {
          $DocName = time() . '.' . request()->documents->getClientOriginalExtension();
          request()->documents->move(public_path('landdocuments'), $DocName);
          if (file_exists(public_path('landdocuments/' . $request->new_documents))) {
            @unlink(public_path('landdocuments/' . $request->new_documents));
          }
        } else {
          $DocName = $request->new_documents;
        }

        if ($request->ids != '') {
          $insertData = Land::find($request->ids);
        } else {
          $insertData = new Land();
        }
        $insertData->area = $request->area;
        $insertData->sector = $request->sector;
        $insertData->block = $request->block;
        $insertData->land_name = $request->land_name;
        $insertData->plot_no = $request->plot_no;
        $insertData->plot_size = $request->plot_value;
        $insertData->city = $request->city;
        $insertData->documents = $DocName;
        $insertData->uom = $request->plot_size;
        $insertData->state = $request->state;
        $insertData->pincode = $request->pincode;
        $insertData->country = $request->country;
        $insertData->longitute = $request->longitute;
        $insertData->latitute = $request->latitute;
        $insertData->address1 = $request->address;
        $insertData->address2 = $request->address2;
        if ($request->ids != '') {
          $insertData->updated_at = date('Y-m-d');
          $insertData->update();
          $editData1 = Land::find($request->ids);
          $editData = Land::where('id', $request->ids)->first();
          Session::flash('success', ' SuccessFully  Updated ');
          return redirect('land/listing');

        } else {
          $insertData->created_at = date('Y-m-d');
          $insertData->save();
          $RegLandData = Land::find($insertData->id);
          Session::flash('success', 'SuccessFully Created');
          return redirect('land/listing');

        }

        if ($request->pageName == 'mainland') {
          return Redirect::action('Landcontroller@index');
        } else {
          Session::put('RegLandData', $RegLandData);
          // return back();
          return redirect('land/listing');

        }
      }
      // return redirect('land/listing');
      $zone = AllLocationzone::all();
      $phase = AllLocationphase::all();
      $block = AllLocationblock::all();

      $data['content'] = 'land.add_land';
      return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block, 'editData1' => $editData1 ?? '', 'editData' => $editData ?? '']);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function UpdateLand(Request $request, $id)
  {
    try {
      $zone = AllLocationzone::all();
      $phase = AllLocationphase::all();
      $block = AllLocationblock::all();
      $landdata = Land::all();
      $editData = Land::findOrFail($id);
      $leaseData = Leasedata::where('land_id', @$editData->id)->first();
      $custData = Customer::where('id', @$leaseData->cust_id)->first();
      $data['content'] = 'land.add_land';
      return view('layouts.content', compact('data'))->with(['custData' => $custData, 'leaseData' => $leaseData, 'editData' => $editData, 'zone' => $zone, 'phase' => $phase, 'block' => $block, 'landdata' => $landdata]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }
  public function view_land_details($id="")
  {
    $toReturn['Land_details']=Land::where('id',$id)->first();
    $toReturn['land_lease_details']=Leasedata::where('id',$id)->get();
    $toReturn['lease_history']=Leasedata::
    leftjoin('customer_company','customer_company.id','leasedata.cust_id')
    ->orderBy('leasedata.id','DESC')
    ->where('leasedata.land_id', $id)->select('leasedata.*', 'leasedata.id as Id', 'customer_company.company as company_name','customer_company.id as company_id')->get()->toArray();
  // return Response::json($toReturn);
  // echo "<pre>";
  // print_r($toReturn);
  // exit;
    return $toReturn;
  }
  public function delete_land($id="")
  {
    // $land=Land::where('id',$id)->update(array('status'=>0));
    $land=Land::where('id',$id)->delete();
    Session::flash('danger', 'Land Delete Success');
    return redirect('land/listing');
  }
  public function AddCustomer(Request $request)
  {

    $zone = AllLocationzone::all();
    $phase = AllLocationphase::all();
    $block = AllLocationblock::all();
    $industriesData=Industries::where('status','1')->get();
    // $inputdetailsData=InputDetails::get();
    // $wastematerialsData=WasteMaterials::get();
    $Materials=Material::get();
    $subindustryData=SubIndustry::get();
    
    $data['content'] = 'customer.add_customer';
    return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block,'industriesData'=>$industriesData,'Materials'=>$Materials,'subindustryData'=>$subindustryData]);
  }

  public function ViewCustomer(Request $request)
  {

    $zone = AllLocationzone::all();
    $phase = AllLocationphase::all();
    $block = AllLocationblock::all();
    $industriesData=Industries::all();
    // $inputdetailsData=InputDetails::all();
    // $wastematerialsData=WasteMaterials::all();
    $Materials=Material::all();
    $subindustryData=SubIndustry::all();
   

    $data['content'] = 'customer.view_customer';
    return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block,'Materials'=>$Materials,'subindustryData'=>$subindustryData]);
  }

  public function Get_Phase_Name($id)
  {

    $data = AllLocationphase::where('zone_id', $id)->select('id', 'phase')->get();

    if (count($data) != 0) {
      foreach ($data as $key => $value) {
        if ($value->phase != '') {
          $output['phase'] = '<option value="' . $value->id . '">' . $value->phase . '</option>';
          //return Response::json($output['phase']);
          print_r($output['phase']);
        }
      }
    } else {
      $output['phase'] = '<option value="">Not Found</option>';
      return Response::json($output);
    }
  }



  public function AreaLocation(Request $request)
  {
    try {
      if ($request->checkrequest == 'createarea') {
        $data = new AllLocationzone();
        $data->sector_zone = $request->area;
        $data->created_at = date('Y-m-d');
        $data->save();
        Session::flash('success', ' Successfully Zone Added');
        return back();
      } elseif ($request->checkrequest == 'createsector') {
        $data = new AllLocationphase();
        $data->zone_id = $request->zone_id;
        $data->phase = $request->sector;
        $data->created_at = date('Y-m-d');
        $data->save();
        Session::flash('success', ' Successfully Phase Added');
        return back();
      } elseif ($request->checkrequest == 'createblock') {
        $data = new AllLocationblock();
        $data->phase_id = $request->phase_id;
        $data->block = $request->block;
        $data->created_at = date('Y-m-d');
        $data->save();
        Session::flash('success', 'Successfully Block Added');
        return back();
      }

      $TableData = AllLocationzone::all();
      $phaseData = DB::table('location_phase')->join('location_zone', 'location_zone.id', '=', 'location_phase.zone_id')->select('location_phase.*', 'location_zone.sector_zone')->get();
      $blockData = DB::table('location_block')->join('location_phase', 'location_phase.id', '=', 'location_block.phase_id')->select('location_block.*', 'location_phase.phase')->get();
      $data['content'] = 'land.area_location';
      return view('layouts.content', compact('data'))->with(['tableData' => $TableData,  'phaseData' => $phaseData, 'blockData' => $blockData]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /* By haresh*/
  public function delete_sector_zone($id)
  {
    $delete = DB::table('location_zone')->where('id', '=', $id)->delete();
    Session::flash('error', 'Deleted Successfully..!');
    return Redirect::back();
  }

  public function delete_sector_phase($id)
  {
    $delete = DB::table('location_phase')->where('id', '=', $id)->delete();
    Session::flash('error', 'Deleted Successfully..!');
    return Redirect::back();
  }

  public function delete_sector_block($id)
  {
    $delete = DB::table('location_block')->where('id', '=', $id)->delete();
    Session::flash('error', 'Deleted Successfully..!');
    return Redirect::back();
  }

  public function sector_zone_edit($id)
  {
    $data =  DB::table('location_zone')->where('id', $id)->first();;
    if ($data) {
      return Response::json($data);
    }
  }

  public function update_sector_zone(Request $request)
  {
    $data = array(
      'sector_zone' => $request->area,
      'updated_at' => date('Y-m-d H:i:s'),
    );
    $update = DB::table('location_zone')->where('id', '=', $request->ids)->update($data);
    Session::flash('success', 'Update Successfully..!');
    return Redirect::back();
  }

  public function edit_phase($id)
  {
    $data =  DB::table('location_phase')->where('id', $id)->first();;
    if ($data) {
      return Response::json($data);
    }
  }

  public function update_sector_phase(Request $request)
  {
    $data = array(
      'zone_id' => $request->zone_id,
      'phase' => $request->sector,
      'updated_at' => date('Y-m-d H:i:s'),
    );
    $update = DB::table('location_phase')->where('id', '=', $request->phaseId)->update($data);
    Session::flash('success', 'Update Successfully..!');
    return Redirect::back();
  }

  public function edit_block($id)
  {
    $data =  DB::table('location_block')
      ->join('location_phase', 'location_phase.zone_id', '=', 'location_block.phase_id')
      ->where('location_block.id', $id)
      ->select('location_block.*', 'location_phase.phase')
      ->first();
    if ($data) {
      return Response::json($data);
    }
  }

  public function update_sector_block(Request $request)
  {
    $data = array(
      'phase_id' => $request->block_zone,
      'block' => $request->block,
      'updated_at' => date('Y-m-d H:i:s'),
    );
    $update = DB::table('location_block')->where('id', '=', $request->blockId)->update($data);
    Session::flash('success', ' Successfully Updated!');
    return Redirect::back();
  }

  //----------Amit-----
  public function viewtransfer_land($land_id)
  {
    $results=Leasedata::where('id',$land_id)->first();
    return $results;
  }
  public function Get_Registration_details($id)
  {
    $toReturn=array();
    $toReturn['lease_details']= DB::table('leasedata')
      ->join('lands', 'lands.id', '=', 'leasedata.land_id')
      ->leftjoin('customer_company','customer_company.id','leasedata.cust_id')
      ->where('leasedata.id', $id)->select('leasedata.*', 'leasedata.id as Id', 'customer_company.company_type as company_type' ,'customer_company.company as company_name' ,'lands.*',  'lands.id as LandID')->first();
    $toReturn['leasedata']=Leasedata::where('id',$id)->first();
    // $toReturn['leaseInvoice']=lease_invoice::where('land_id',$toReturn['leasedata']->land_id)->get();
    $toReturn['comapany_detail']=CustCompany::where('id',@$toReturn['leasedata']->cust_id)->first();
    $toReturn['leaseInvoice']=lease_invoice::where('land_id',@$toReturn['leasedata']->land_id)->get();
    if($toReturn['comapany_detail']->company_type=='proprietorship')
    {
      $toReturn['ltdpvt'] = Customer::where('comp_id', $toReturn['comapany_detail']->id)->where('is_proprietor',1) ->orderBy('id','Desc')->get();
    }
    else
    {
    $toReturn['ltdpvt']=Customer::where('comp_id', $toReturn['leasedata']->cust_id)->where('is_proprietor',0)->orderBy('id','Desc')->get();
    }
    return $toReturn;
  }
  public function Get_Registration_history($land_id)
  {
      $toReturn['lease_history']=Leasedata::join('lands', 'lands.id', '=', 'leasedata.land_id')
      ->leftjoin('customer_company','customer_company.id','leasedata.cust_id')
      ->orderBy('leasedata.id','DESC')
      ->where('leasedata.land_id', $land_id)->select('leasedata.*', 'leasedata.id as Id', 'customer_company.company as company_name','customer_company.id as company_id','lands.*', 'lands.id as LandID')->get()->toArray();
    return Response::json($toReturn); 
  }
  public function Get_Registration_info($id,$land_id)
  {
    $toReturn['leaseDetails'] = DB::table('leasedata')
      ->join('customers', 'customers.id', '=', 'leasedata.cust_id')
      ->join('lands', 'lands.id', '=', 'leasedata.land_id')
      ->where('leasedata.id', $id)->select('leasedata.*', 'leasedata.id as Id', 'customers.*', 'lands.*', 'customers.id as custID', 'lands.id as LandID')->first();
      $toReturn['lease_history']=Leasedata::join('customers', 'customers.id', '=', 'leasedata.cust_id')
      ->join('lands', 'lands.id', '=', 'leasedata.land_id')
      ->where('leasedata.land_id', $land_id)->select('leasedata.*', 'leasedata.id as Id', 'customers.*', 'lands.*', 'customers.id as custID', 'lands.id as LandID')->get()->toArray();
    return Response::json($toReturn);
  }


  public function Create_Registration(Request $request)
  {

    $zone = AllLocationzone::all();
    $phase = AllLocationphase::all();
    $block = AllLocationblock::all();
    $landdata = Land::all();
    $data['content'] = 'customer.create_registration';
    return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block]);
  }

  public function Registration_Delete($id)
  {

    Leasedata::findOrFail($id)->delete();
    Session::flash('error', 'Delete Success');
    return back();
  }

  public function Registration(Request $request)
  {
    try {
      $results = DB::table('leasedata')->leftJoin('lands', 'lands.id', '=', 'leasedata.land_id')
      ->leftjoin('customer_company','customer_company.id','leasedata.cust_id')
      ->leftJoin('customers', 'customers.id', 'leasedata.cust_id')
        ->where(['leasedata.status' => 1])
        ->orderBy('customer_company.id','DESC')
        ->select('leasedata.*', 'customers.f_name', 'customers.l_name', 'customers.company','customer_company.company as company_name','customer_company.company_type as company_type' , 'lands.land_name','leasedata.land_id')->orderBy('leasedata.id','DESC')->paginate(25);
// return $results;
      if(Auth::check() && Auth::user()->users_role == 2)
        {
        $land_permission=Session::get('all_module_permission');
        foreach($land_permission as $key=>$value_land)
        {
          if($value_land['permission_value']==3)
          {
            $module_permission=$value_land;
          }
        }
      }
      $user_id=Session::get('gorgID');

      $data['content'] = 'customer.registration';
      return view('layouts.content', compact('data'))->with(['results' => $results ?? '','module_permission'=>$module_permission ??'','user_id'=>$user_id]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /* PCC */
  public function Pcc_Registration(Request $request)
  {
    try {
      $results = DB::table('pccdata')
        ->leftJoin('lands', 'lands.id', '=', 'pccdata.land_id')
        ->leftJoin('customers', 'customers.id', '=', 'pccdata.cust_id')
        ->where(['pccdata.status' => 1])
        ->select('pccdata.*', 'customers.f_name', 'customers.l_name', 'customers.company', 'lands.land_name')->get();

      $data['content'] = 'customer.pcc_registration';
      return view('layouts.content', compact('data'))->with(['results' => $results ?? '']);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function Create_Pcc_Registration(Request $request)
  {


    $zone = AllLocationzone::all();
    $phase = AllLocationphase::all();
    $block = AllLocationblock::all();
    $landdata = Land::all();
    $data['content'] = 'customer.create_pcc_registration';
    return view('layouts.content', compact('data'))->with(['zone' => $zone, 'phase' => $phase, 'block' => $block]);
  }

  public function PccRegistration(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'land_id' => 'required',
      'select_cust_id' => 'required',
      'application_no' => 'required',
      'application_date' => 'required',
    ]);

    if ($validator->fails()) {
      return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }
    if ($request->select_cust_id != '' && $request->land_id != '') {
      for ($i = 0; $i < count($request->select_cust_id); $i++) {
        $data = new PccRegistration();
        $data->org_id = Session::get('gorgID');
        $data->land_id = $request->land_id;
        $data->cust_id = $request->select_cust_id[$i];
        $data->application_no = $request->application_no[$i];
        $data->application_date = $request->application_date[$i];
        $data->created_at = date('Y-m-d');
        $data->save();
        $t[] = $i;
      }
      Session::flash('success', "<b style='color:#FFFFFF0; font-size: 20;'>" . count($t) . "</b>" . ' Pcc Added Success.');
      return Redirect::action('Landcontroller@Pcc_Registration');
    }
  }

  public function LandInvoice(Request $request, $id)
  {

    $details = DB::table('leasedata')->leftJoin('lands', 'lands.id', 'leasedata.land_id')->leftJoin('customers', 'customers.id', 'leasedata.cust_id')->where('leasedata.id', $id)->select('customers.*', 'customers.address as cust_address', 'lands.*', 'lands.pincode as land_pin', 'leasedata.*')->first();

    $data = $details;
    // return view('pdf_view')->with('data',$data);

    $pdf = PDF::loadView('pdf_view', compact('data'));
    $invoice = 'invoice-' . date('d-m-Y');
    return $pdf->download($invoice . '.pdf');
  }

  public function PccLand(Request $request, $query)
  {

    if ($request->Bydate == 1) {
      $dquery = date('Y-m-d', strtotime($query));
      $landName = PccRegistration::where('application_date', $dquery)->get();
      // print_r($landName[0]->land_id);die();
      $data = DB::table('pccdata')->join('lands', 'pccdata.land_id', 'lands.id')->join('customers', 'customers.id', 'pccdata.cust_id')->where('pccdata.land_id', @$landName[0]->land_id)->orWhere('pccdata.cust_id', @$landName[0]->cust_id)->select('pccdata.*', 'customers.*', 'lands.*', 'pccdata.id as pccID')->get();
    } else {
      $landName = Land::where('land_name', 'LIKE', "%{$query}%")->where('lands.is_register', '=', 0)->get();
      $data = DB::table('lands')->join('pccdata', 'pccdata.land_id', 'lands.id')->join('customers', 'customers.id', 'pccdata.cust_id')->where('pccdata.land_id', @$landName[0]->id)->orWhere('pccdata.application_no', 'LIKE', "%{$query}%")->orWhere('customers.company', 'LIKE', "%{$query}%")->select('pccdata.*', 'customers.*', 'lands.*', 'pccdata.id as pccID')->get();
    }
    //print_r($data);die();
    if (count($data) != 0) {
      foreach ($data as $key => $value) {
        if ($value->application_date != '') {
          $create_date = date('M j, Y', strtotime($value->application_date));
        }
        $output = '<tr>' .
          '<td>' . $value->application_no . '</td>' .
          '<td>' . $value->land_name . '</td>' .
          '<td>' . $value->f_name . ' ' . $value->l_name . '</td>' .
          '<td>' . $value->company . '</td>' .
          '<td>' . @$create_date . '</td>' .
          '<td title="Allocate Customer">' . '<a href="javascript::void(0);" class="on-default view-row" onclick="alocateland(' . $value->pccID . ')" data-toggle="tooltip" data-placement="top" title="Allocate Customer" data-original-title="View Report"><i class="fas fa-angle-double-right"></i></a>' . '</td>' .
          '</tr>';
        print_r($output);
      }
    } else {
      $output = '<tr>' . '<td colspan="6" >' . 'No Records Found...!' . '</td>' . '</tr>';
      print_r($output);
    }
  }


  public function Allocate_Pcc(Request $request, $id)
  {
    $data = DB::table('lands')->join('pccdata', 'pccdata.land_id', 'lands.id')->join('customers', 'customers.id', 'pccdata.cust_id')->where('pccdata.id', $id)->select('pccdata.*', 'customers.f_name', 'customers.l_name', 'customers.company', 'customers.id as cust_id', 'customers.email', 'customers.mobile', 'lands.land_name', 'lands.id as land_id', 'lands.plot_no', 'lands.plot_size', 'lands.uom', 'lands.area', 'lands.sector', 'lands.block')->first();
    return Response::json($data);
  }

  public function AddPccCustomer(Request $request, $id)
  {

    Session::forget('RegCustData');
    $data = Customer::where('id', $id)->first();
    return Response::json($data);
    //  $chkpcc = PccRegistration::where('cust_id',$id)->first();
    //  if ($chkpcc) {
    //    $data = '0';
    //    return Response::json($data);
    //  }else{
    //   $data = Customer::where('id',$id)->first();
    //   return Response::json($data);
    // }

  }

  /* End PCC REGISTRATION */
  /* Transfer Start */

  public function Create_Transfer_Registration(Request $request)
  {
    // return $request;
    $data['cust_id'] = $request->cusID;
    $data['trans_cust_id'] = $request->first_owner;
    $data['is_transfer'] = 1;
    //$data['transfer_date'] =date('Y-m-d');
    $data['pcc_date'] = date('Y-m-d', strtotime($request->pcc_date));
    $data['transfer_amount'] = $request->transfer_amount;
    $data['land_price'] = $request->land_price;
    $leaseData = Leasedata::where('id', $request->lease_id)->orderBy('land_id','desc')->where('status',1)->first();
    Leasedata::where('id', $request->lease_id)->orderBy('land_id','desc')->update(array('status' => 0));
    $leaseData_add = new Leasedata();
    $leaseData_add->org_id = Session::get('gorgID');
    $leaseData_add->cust_id = $request->cusID;
    $leaseData_add->land_id = $leaseData->land_id;
    $leaseData_add->application_no = $request->application_no;
    $leaseData_add->application_date = $request->application_date;
    $leaseData_add->allotment_no = $request->allotment_no;
    $leaseData_add->allotment_date = $request->allotment_date;
    $leaseData_add->registration_no = $request->registration_no;
    $leaseData_add->possession_date = $leaseData->possession_date;
    $leaseData_add->ssi_reg_no = $leaseData->ssi_reg_no;
    $leaseData_add->dakhal_kabja = $leaseData->dakhal_kabja;
    $leaseData_add->is_pcc = $leaseData->pcc_reg ?? 0;
    $leaseData_add->based_rent = $request->based_rent;
    $leaseData_add->insurance = $request->insurance;
    $leaseData_add->maintanance = $request->maintanance;
    $leaseData_add->additional_charge = $request->additional_charge;
    $leaseData_add->net_payable = $request->add_net_payable;
    $leaseData_add->tax = $request->taxes;
    $leaseData_add->net_pay = $request->netpaybill;
    $leaseData_add->lease_time = $request->lease_time;
    $leaseData_add->lease_duration = $request->lease_duration;
    $leaseData_add->start_date = $request->start_date;
    $leaseData_add->trans_cust_id = $request->first_owner;
    $leaseData_add->is_transfer = 1;
    $leaseData_add->transfer_date = date('Y-m-d');
    if($request->pcc_date!="")
    {
    $leaseData_add->pcc_date = date('Y-m-d', strtotime($request->pcc_date));
    }
    else
    {
      $leaseData_add->pcc_date ="";
    }
    $leaseData_add->transfer_amount = $request->transfer_amount ?? 0;
    $leaseData_add->land_price = $request->land_price;
    $leaseData_add->created_at = date('Y-m-d');
    $leaseData_add->save();
    $lease_invoice = new lease_invoice();
    $lease_invoice->org_id = Session::get('gorgID');
    $lease_invoice->lease_data_id = $leaseData_add->id;
    $lease_invoice->cust_id = $request->cust_ids;
    $lease_invoice->land_id = $leaseData->land_id;
    $lease_invoice->based_rent = $request->based_rent;
    $lease_invoice->insurance = $request->insurance;
    $lease_invoice->maintanance = $request->maintanance;
    $lease_invoice->additional_charge = $request->additional_charge;
    $lease_invoice->net_payable = $request->net_payable;
    $lease_invoice->tax = $request->taxes;
    $lease_invoice->net_pay = $request->netpaybill;
    $lease_invoice->lease_time = $request->lease_time;
    $lease_invoice->lease_duration = $request->lease_duration;
    $lease_invoice->start_date = date('Y-m-d', strtotime($request->start_date));
    $lease_invoice->created_at = date('Y-m-d');
    $lease_invoice->status = 1;
    $lease_invoice->save();
    // return $leaseData_add;
    Session::flash('success', 'Transfer Successfully');
    return back();
  }



  public function Registration_Transfer(Request $request)
  {
    try {
      $results = DB::table('leasedata')
        ->leftJoin('lands', 'lands.id', '=', 'leasedata.land_id')
        ->leftJoin('customers', 'customers.id', '=', 'leasedata.cust_id')
        ->where(['leasedata.is_transfer' => 1, 'leasedata.status' => 1])
        ->select('leasedata.*', 'customers.f_name', 'customers.l_name', 'customers.company', 'lands.land_name','leasedata.land_id')->get();

      $data['content'] = 'customer.registration_transfer';
      // return $results;
      return view('layouts.content', compact('data'))->with(['results' => $results ?? '']);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function SerachTransferContract(Request $request, $query)
  {

    if ($request->ajax()) {
      // $data = Leasedata::where('application_no', 'LIKE', '%' . $query . '%')
      // ->orWhere('registration_no', 'LIKE', '%' . $query . '%')->get();

      $landName = Land::where('land_name', 'LIKE', "%{$query}%")->get();
      $data = DB::table('lands')->join('leasedata', 'leasedata.land_id', 'lands.id')
      ->join('customers', 'customers.id', 'leasedata.cust_id')
      ->where('leasedata.land_id', @$landName[0]->id)
      ->orWhere('leasedata.registration_no', 'LIKE', "%{$query}%")
      ->orWhere('customers.company', 'LIKE', "%{$query}%")
      ->select('leasedata.*', 'customers.*', 'customers.id as custID', 'lands.*', 'leasedata.id as pccID')->get();

      if (count($data) != 0) {
        foreach ($data as $key => $value) {
          $output = '<tr>' .
            '<td>' . ++$key  . '</td>' .
            '<td>' . $value->registration_no . '</td>' .
            '<td>' . $value->land_name . '</td>' .
            '<td>' . $value->f_name . ' ' . $value->l_name . '</td>' .
            '<td>' . $value->company . '</td>' .
            '<td title="Choose One application For Transfer">' . '<a href="javascript::void(0);" class="on-default remove-row" data-id="' . $value->custID . '" id="' . $value->id . '" data-name="' . $value->application_no . '" onclick="transferContract(this)" data-toggle="tooltip" data-placement="top" title="Choose One application For Transfer" data-original-title="add"><b>Select Application <i class="fas fa-forward"></i></b></a>' . '</td>' . '</tr>' . '<input type="hidden" name="cID" id="cID" value="' . $value->id . '" >
      ';
          print_r($output);
        }
      } else {
        $output = '<tr>' . '<td colspan="6" >' . 'No Records Found...!' . '</td>' . '</tr>';
        print_r($output);
      }
    }
  }

  public function searchTransferCustomer(Request $request, $query)
  {
    // if ($request->ajax()) {

      // $data = Customer::where('f_name', 'LIKE', "%{$query}%")
      //   ->orWhere('l_name', 'LIKE', "%{$query}%")
      //   ->orWhere('email', 'LIKE', "%{$query}%")
      //   ->orWhere('mobile', 'LIKE', "%{$query}%")->get();
        $data=CustCompany::where('company', 'LIKE', "%{$query}%")
        ->orWhere('company_reg_no', 'LIKE', "%{$query}%")
        ->orWhere('company_type', 'LIKE', "%{$query}%")
        ->orWhere('address', 'LIKE', "%{$query}%")
      ->get();

      // if (count($data) != 0) {
      //   $output = '<table id="prodetails" class="table table-bordered mb-0">
      // <thead>
      // <tr>
      // <th>Sr. No</th>
      // <th>Customer Name</th>
      // <th>Customer Phone</th>
      // <th>Customer Email</th>
      // <th>Action</th>
      // </tr>
      // </thead>
      // <tbody>';
      //   foreach ($data as $key => $value) {
      //     $output .= '<tr>' .
      //       '<td>' . ++$key  . '</td>' .
      //       '<td>' . $value->f_name . ' ' . $value->l_name . '</td>' .
      //       '<td>' . $value->mobile . '</td>' .
      //       '<td>' . $value->email . '</td>' .
      //       '<td title="Choose One Customer For Transfer" style="text-align: center;" >' . '<a href="javascript::void(0);" style="font-size: 20px;" class="on-default remove-row" onclick="addtransfercustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="Choose One Customer For Transfer" data-original-title="add">  <i class="fas fa-plus"></i></a>' . '</td>' . '</tr>';
      //   }
      //   $output .= '</tbody>
      // </table>';
      //   print_r($output);
      // } else {
      //   $output = '<tr>' . '<td colspan="5" >' . 'No Records Found...!' . '</td>' . '</tr>';
      //   print_r($output);
      // }
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
              '<td>' .  $value->company. '</td>' .
              '<td>' .  $value->company_reg_no .  '</td>' .
              '<td>' .  $value->company_type . '</td>' .
              '<td>' .$value->address. '</td>' .
              '<td title="Choose One Customer For Transfer" style="text-align: center;" >' . '<a href="javascript::void(0);" style="font-size: 20px;" class="on-default remove-row" onclick="addtransfercustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="Choose One Customer For Transfer" data-original-title="add">  <i class="fas fa-plus"></i></a>' . '</td>' . '</tr>';

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

  public function AddTransferCustomer(Request $request, $id)
  {
    // $toReturn['customer']=Customer::where('comp_id', $id)->first();
    // $data = Customer::where('id', $id)->first();
    $toReturn['Company']=CustCompany::where('id',$id)->first();
    return Response::json($toReturn);
  }

  /* Transfer End */

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
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addland(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->land_name . '</a>' . '</td>' .
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addland(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->plot_no . '</a>' . '</td>' .
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

  public function SearchPccLand(Request $request, $query)
  {

    $data = Land::where('land_name', 'LIKE', "%{$query}%")
      ->orWhere('plot_no', 'LIKE', "%{$query}%")->get();
    if (count($data) != 0) {
      $output = '<table id="prodetails" class="table table-bordered mb-0">
  <thead>
  <tr>
  <th>Id</th>
  <th>Land Name</th>
  <th>Plot No</th>   
  </tr>
  </thead>
  <tbody>';
      foreach ($data as $key => $value) {
        $output .= '<tr>' .
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addland(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->id . '</a>' . '</td>' .
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addland(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->land_name . '</a>' . '</td>' .
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addland(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->plot_no . '</a>' . '</td>' .
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


  public function WizardSearchLand(Request $request, $query)
  {

    $data = Land::where('land_name', 'LIKE', "%{$query}%")
      ->orWhere('plot_no', 'LIKE', "%{$query}%")->get();
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
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addlandwizard(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->land_name . '</a>' . '</td>' .
          '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addlandwizard(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->plot_no . '</a>' . '</td>' .
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


  public function SearchCustomer(Request $request, $query)
  {
    // if ($request->ajax()) {
      
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
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->company .  '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->company_reg_no . '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->company_type . '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->address. '</a>' . '</td>' .
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

  /* Wizard */
  public function WizardSearchCustomer(Request $request, $query)
  {
    if ($request->ajax()) {
      $data = Customer::where('f_name', 'LIKE', "%{$query}%")
        ->orWhere('l_name', 'LIKE', "%{$query}%")
        ->orWhere('email', 'LIKE', "%{$query}%")
        ->orWhere('mobile', 'LIKE', "%{$query}%")->get();
      if (count($data) != 0) {
        $output = '<table id="prodetails" class="table table-bordered mb-0">
      <thead>
      <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      </tr>
      </thead>
      <tbody>';
        foreach ($data as $key => $value) {
          $output .= '<tr>' .
            '<td>' . ++$key  . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="waddcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->f_name . ' ' . $value->l_name . '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="waddcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->mobile . '</a>' . '</td>' .
            '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="waddcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->email . '</a>' . '</td>' .
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
  }



  public function AddSearchLand(Request $request, $id)
  {
    Session::forget('RegLandData');
    $data = Land::where('id', $id)->first();
    return Response::json($data);
  }

  public function AddwizardSearchLand(Request $request, $id)
  {
    $data = Land::where('id', $id)->first();
    return Response::json($data);
  }

  public function AddContractCustomer(Request $request, $id)
  {
    //  $chkpcc = Leasedata::where('cust_id',$id)->first();
    //  if ($chkpcc) {
    //    $data = '0';
    //    return Response::json($data);
    //  }else{
    //   $data = Customer::where('id',$id)->first();
    //   return Response::json($data);
    // }
    Session::forget('RegCustData');
    $Company=DB::table('customer_company')->where('id', $id)->first();
    return Response::json($Company);
  }

  public function AddWizardContractCustomer(Request $request, $id)
  {
    $data = Customer::where('id', $id)->first();
    return Response::json($data);
  }

  public function Customers_Listing(Request $request)
  {
    try {
      if(Auth::check() && Auth::user()->users_role == 2)
      {
      $land_permission=Session::get('all_module_permission');
      foreach($land_permission as $key=>$value_land)
      {
         if($value_land['permission_value']==3)
         {
          $module_permission=$value_land;
         }
      }
    }
    $user_id=Session::get('gorgID');
      $Company=DB::table('customer_company')->where('status', 1)->orderBy('id','DESC')->paginate(25);
      $data['content'] = 'customer.manage_customers';
      return view('layouts.content', compact('data'))->with(['customers_data' => $Company ?? '','module_permission'=>$module_permission ??'','user_id'=>$user_id]);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function Edit_Customers($id)
  {
    if(Auth::user()->users_role == 3){
      $edit_company=CustCompany::where('cust_id', Session::get('gorgID'))->first();
      $edit_materials = Material::where('created_by', Session::get('gorgID'))->get();
    }else{
      $edit_company=CustCompany::where('id', $id)->first();
      $edit_materials = Material::get();
    }
    
    // return $edit_company;
    $editData = Customer::where('comp_id', $edit_company->id)->where('is_proprietor',1)->first();
    $shareholderData=Customer::where('comp_id', $edit_company->id)->where('is_director',0)->where('is_proprietor',0)->get();
    $directorData=Customer::where('comp_id', $edit_company->id)->where('is_director',1)->where('is_proprietor',0)->get();
    
    $datas = CustCompany::leftJoin('industries','customer_company.industry_id','=','industries.id')
                          ->leftJoin('materials','customer_company.input_details_id','=','materials.id')
                          ->select('customer_company.*','materials.material_name')
                          ->get();
     $edit_industry = Industries::get();
     $edit_remove = Customer::where('comp_id', $edit_company->id)->get('id');
    //  return $edit_remove;
    
    $input_detailsArray=explode(',',$edit_company->input_details_id);
   
    $waste_materialsArray=explode(',',$edit_company->waste_materials_id);
   
     array_pop($input_detailsArray);
     array_pop($waste_materialsArray);
    if ($edit_company) {
      $data['content'] = 'customer.edit_customer';
      return view('layouts.content', compact('data','datas','edit_industry','edit_materials','input_detailsArray','waste_materialsArray','edit_remove'))->with(['editData' => @$editData, 'shareholderData' => @$shareholderData,'directorData' => $directorData,'edit_company' => $edit_company]);
    }
    else
    {
      return "Data Not Found";
    }
  }
  public function update_customer(Request $request)
  {
    
    //   return $request;
        if($request->company_logo!="")
        {
        $company_logo_name=$request->company_logo->getClientOriginalName();
        request()->company_logo->move(public_path('company_logo'), $company_logo_name);
        }
        else
        {
          $company_logo_name=$request->company_logo_pre;
        }
          $custCompany= CustCompany::find($request->ids);
          $custCompany->company = $request->company;
          $custCompany->company_reg_no = $request->company_reg_no;
          $custCompany->address = $request->company_addrerss;
          $custCompany->company_type = $request->company_type;
          $custCompany->company_email=$request->company_email ?? "";
          $custCompany->updated_at = date('Y-m-d H:i:s');
          $custCompany->sub_industry_id = $request->sub_industry;
          $custCompany->company_logo=$company_logo_name??"";
          $custCompany->turn_over = $request->turn_over;
          $wase_materials_type=$input_materials_quanity=$input_materials_type=$waste_materials_quanity="";
          if($request->input_materials_quanity!="")
          {
          $input_materials_quanity=implode(",",$request->input_materials_quanity);
          }
          if($request->input_materials_type!="")
          {
          $input_materials_type=implode(",",$request->input_materials_type);
          }
          if($request->waste_materials_quanity!="")
          {
          $waste_materials_quanity=implode(",",$request->waste_materials_quanity);
          }
          if($request->wase_materials_type)
          {
          $wase_materials_type=implode(",",$request->wase_materials_type);
          }
          $custCompany->input_materials_quanity=$input_materials_quanity?? "";
          $custCompany->input_materials_type=$input_materials_type ?? "";
          $custCompany->waste_materials_quanity=$waste_materials_quanity ?? "";
          $custCompany->wase_materials_type=$wase_materials_type?? "";
          $custCompany->number_of_employees = $request->number_of_employees;
         
          $custCompany->unit_size = $request->unit_size;
          if($request->established_date)
          {
            $custCompany->established_date = date("Y-m-d", strtotime($request->established_date));
          }
          else{
            $request->established_date="";
          }
          if($request->input_details=="")
          {
            $custCompany->input_details_id="";
          }
          else{
            $count = count($request->input_details);
            $tmp=""; 
          if($count>1){
              for($i=0;$i<$count;$i++){
                  $tmp.=$request->input_details[$i].",";
              }
          }
          else{
              $tmp.=$request->input_details[0].",";
          }
          $custCompany->input_details_id=rtrim($tmp, ':');
        
          }

          if($request->waste_materials=="")
          {
            $custCompany->waste_materials_id = "";
          }
          else{
            $count = count($request->waste_materials);
            $tmp_waste_material=""; 
            if($count>1){
                for($i=0;$i<$count;$i++){
                    $tmp_waste_material.=$request->waste_materials[$i].",";
                   
                }
            }
            else{
                $tmp_waste_material.=$request->waste_materials[0].",";
            }
            $custCompany->waste_materials_id=rtrim($tmp_waste_material, ':');
          }
          $custCompany->status=1;
          $custCompany->save();
          // return $custCompany;
          if($request->company_type=='proprietorship')
          {
            if($request->custids=="")
            {
              $custData=new Customer();
              $custData->org_id = Session::get('gorgID');
              $custData->comp_id=$custCompany->id;
              $custData->is_proprietor=1;
              $custData->f_name =@ $request->f_name;
              $custData->l_name = @$request->l_name;
              $custData->gender = @$request->gender;
              $custData->occupation =@ $request->occupation;
              $custData->dob = @$request->dob;
              $custData->mobile = @$request->mobile;
              $custData->landline_no = @$request->landline_no;
              $custData->company = @$request->company;
              $custData->company_reg_no = @$request->company_reg_no;
              $custData->company_type = @$request->company_type;
              $custData->email = @$request->email;
              $custData->address = @$request->address;
              $custData->company_addrerss=@$request->company_addrerss;
              $custData->updated_at = date('Y-m-d');
              $custData->save();
            }
            else
            {
            $custData=Customer::findOrFail($request->ids);
            $custData->org_id = Session::get('gorgID');
            $custData->comp_id=@$custCompany->id;
            $custData->is_proprietor=1;
            $custData->f_name = @$request->f_name;
            $custData->l_name = @$request->l_name;
            $custData->gender = @$request->gender;
            $custData->occupation =@ $request->occupation;
            $custData->dob =@ $request->dob;
            $custData->mobile = @$request->mobile;
            $custData->landline_no =@ $request->landline_no;
            $custData->company =@ $request->company;
            $custData->company_reg_no = @$request->company_reg_no;
            $custData->company_type = @$request->company_type;
            $custData->email = @$request->email;
            $custData->address = @$request->address;
            $custData->company_addrerss=@$request->company_addrerss;
            $custData->updated_at = date('Y-m-d');
            $custData->save();
            }
          Session::flash('success', 'Update Success');
          return redirect('land/customer');
          }
          if(!empty($request->shareholder_f_name))
          {
          for ($i = 0; $i < count($request->shareholder_f_name); $i++) {
            if(!empty($request->shareholder_id[$i]))
            {
              $scustData =Customer::find($request->shareholder_id[$i]);
              $scustData->org_id = Session::get('gorgID');
              $scustData->f_name = $request->shareholder_f_name[$i];
              $scustData->comp_id=$custCompany->id;
              $scustData->occupation=@$request->shareholder_occupation_name[$i];
              $scustData->dob=$request->shareholder_dob[$i];
              $scustData->l_name = @$request->shareholder_l_name[$i];
              $scustData->mobile =@ $request->shareholder_contact[$i];
              $scustData->company = @$request->company;
              $scustData->is_proprietor=0;
              $scustData->gender  =@$request->shareholdergender[$i];
              $scustData->location=@$request->shareholderaddress[$i];
              $scustData->company_reg_no = @$request->company_reg_no;
              $scustData->company_type = @$request->company_type;
              $scustData->email = @$request->shareholder_email_id[$i];
              $scustData->is_director=0;
              $scustData->svalue = @$request->shareholder_share_value[$i];
              $scustData->svalue_percentage = @$request->shareholder_share_per[$i];
              $scustData->save();
            }
          else
          {
              $scustData =new Customer();
              $scustData->org_id = Session::get('gorgID');
              $scustData->f_name = @$request->shareholder_f_name[$i];
              $scustData->comp_id=@$custCompany->id;
              $scustData->occupation=@$request->shareholder_occupation_name[$i];
              $scustData->dob=@$request->shareholder_dob[$i];
              
              $scustData->l_name =@ $request->shareholder_l_name[$i];
              $scustData->mobile = @$request->shareholder_contact[$i];
              $scustData->company = @$request->company;
              $scustData->is_proprietor=0;
              $scustData->gender  =@$request->shareholdergender[$i];
              $scustData->location=@$request->shareholderaddress[$i];
              $scustData->company_reg_no =@ $request->company_reg_no;
              $scustData->company_type = @$request->company_type;
              $scustData->email = @$request->shareholder_email_id[$i];
              $scustData->is_director=0;
              $scustData->svalue = @$request->shareholder_share_value[$i];
              $scustData->svalue_percentage = @$request->shareholder_share_per[$i];
              $scustData->save();
          }            
          }
        }
        if(!empty($request->Dierctor_firstname))
        {
          for ($i = 0; $i < count($request->Dierctor_firstname); $i++) {
            if(!empty($request->Director_id[$i]))
            {
            $dcustData =Customer::find($request->Director_id[$i]);
            $dcustData->org_id = Session::get('gorgID');
            $dcustData->comp_id=$custCompany->id;
            $dcustData->f_name = @$request->Dierctor_firstname[$i];
            $dcustData->l_name = @$request->Director_last_name[$i];
            $dcustData->mobile = @$request->Director_contact[$i];
            $dcustData->occupation=@$request->Director_occupation_name[$i];
            $dcustData->dob=@$request->Director_dob[$i];
            $dcustData->is_proprietor=0;
            $dcustData->location=@$request->Directoraddress[$i];
            $dcustData->gender  =@$request->directorgender[$i];
            $dcustData->company = $request->company;
            $dcustData->company_reg_no = $request->company_reg_no;
            $dcustData->company_type = $request->company_type;
            $dcustData->email = $request->Director_email_id[$i];
            $dcustData->is_director=1;
            $dcustData->svalue = $request->Director_share_value[$i];
            $dcustData->svalue_percentage = $request->director_share_value_per[$i];
            $dcustData->save();
            }
            else
            {
            $dcustData =new Customer();
            $dcustData->org_id = Session::get('gorgID');
            $dcustData->comp_id=$custCompany->id;
            $dcustData->f_name = $request->Dierctor_firstname[$i];
            $dcustData->l_name = $request->Director_last_name[$i];
            $dcustData->mobile = $request->Director_contact[$i];
            $dcustData->occupation=$request->Director_occupation_name[$i];
            $dcustData->dob=$request->Director_dob[$i];
            $dcustData->is_proprietor=0;
            $dcustData->location=$request->Directoraddress[$i];
            $dcustData->gender  =@$request->directorgender[$i];
            $dcustData->company = $request->company;
            $dcustData->company_reg_no = $request->company_reg_no;
            $dcustData->company_type = $request->company_type;
            $dcustData->email = $request->Director_email_id[$i];
            $dcustData->is_director=1;
            $dcustData->svalue = $request->Director_share_value[$i];
            $dcustData->svalue_percentage = $request->director_share_value_per[$i];
            $dcustData->save();
            }
          }
        }
// return $custCompany->id;

        // to_delete directors, share holders
        if($request->to_delete_directors_ids){
          $to_delete_directors_ids = rtrim($request->to_delete_directors_ids, ",");
          $to_delete_directors_ids = explode(",", $to_delete_directors_ids);
          Customer::whereIn('id',$to_delete_directors_ids)->delete();
        }
        if($request->to_delete_share_holder_ids){
          $to_delete_share_holder_ids = rtrim($request->to_delete_share_holder_ids, ",");
          $to_delete_share_holder_ids = explode(",", $to_delete_share_holder_ids);
          Customer::whereIn('id',$to_delete_share_holder_ids)->delete();
        }
        
        Session::flash('success', 'Update Success');
        return redirect('land/customer');
    // $shareholderData = ShareCustomer::where('cust_id', $editData->id)->where('is_director',0)->get();
    // $directorData = ShareCustomer::where('cust_id', $editData->id)->where('is_director',1)->get();
    
  }
  public function view_company_customers($id="")
  {
    // return $id;
     if($id=="null")
    {
      return Redirect::back();
    }
    // $Company=CustCompany::where('id', $id)->first();
    $edit_company=CustCompany::where('id', $id)->first();
    // return $Company;
    // $editData = Customer::where('comp_id',$Company->id)->where('is_proprietor',1)->get();

    // $shareholderData = ShareCustomer::where('comp_id', $Company->id)->where('is_director',0)->get();
    // $directorData = ShareCustomer::where('comp_id', $Company->id)->where('is_director',1)->get();
    // // return $editData;
    $editData = Customer::where('comp_id', $edit_company->id)->where('is_proprietor',1)->first();
    $shareholderData=Customer::where('comp_id', $edit_company->id)->where('is_director',0)->where('is_proprietor',0)->get();
    $directorData=Customer::where('comp_id', $edit_company->id)->where('is_director',1)->where('is_proprietor',0)->get();
    $edit_industry = Industries::get();
    $edit_materials = Material::get();
    $input_detailsArray=explode(',',$edit_company->input_details_id);
    $waste_materialsArray=explode(',',$edit_company->waste_materials_id);
     array_pop($input_detailsArray);
     array_pop($waste_materialsArray);
    // echo "<pre>";
    // print_r($editData);
    // exit;
    // return $directorData;
    $data['content'] = 'customer.view_company_customer';
    return view('layouts.content', compact('data','edit_company','edit_industry','edit_materials','input_detailsArray','waste_materialsArray'))->with(['editData_comp' => $editData, 'shareholderData' => $shareholderData,'directorData' => $directorData]);

  }

  public function AddCustomers1(Request $request)
  {
    print_r($request->all());
    die();
    try {
      if ($request->company != '') {
        if ($request->ids != '') {
          $custData = Customer::findOrFail($request->ids);
        } else {
          $custData = new Customer();
        }
        $custData->org_id = Session::get('gorgID');
        $custData->f_name = $request->f_name;
        $custData->l_name = $request->l_name;
        $custData->gender = $request->gender;
        $custData->occupation = $request->occupation;
        $custData->dob = $request->dob;
        $custData->mobile = $request->mobile;
        $custData->company = $request->company;
        $custData->company_reg_no = $request->company_reg_no;
        $custData->company_type = $request->company_type;
        $custData->email = $request->email;
        $custData->svalue = $request->svalue;
        $custData->address = $request->address;
        if ($request->ids != '') {
          $custData->updated_at = date('Y-m-d');
          $custData->update();
          Session::flash('success', 'Update Success');
          return Redirect::action('Landcontroller@Customers_Listing');
        } else {
          $custData->created_at = date('Y-m-d');
          $custData->save();
          $RegCustData = Customer::find($custData->id);
          Session::put('RegCustData', $RegCustData);
          Session::flash('success', 'Add Success');
        }
        if ($request->pageName == "maincustomer") {
          return Redirect::action('Landcontroller@Customers_Listing');
        } else {
          return back();
        }
      }
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }
  public function AddCustomers2(Request $request)
  {

    print_r($request->all());die();

    try {

      if ($request->preCustId != '') {
        $custData = Customer::findOrFail($request->preCustId);
        $custData->org_id = Session::get('gorgID');
        $custData->f_name = $request->f_name2;
        $custData->l_name = $request->l_name2;
        $custData->gender = $request->gender2;
        $custData->occupation = $request->occupation2;
        $custData->dob = $request->dob2;
        $custData->mobile = $request->mobile2;
        $custData->landline_no = $request->landline_no;
        $custData->company = $request->company;
        $custData->company_reg_no = $request->company_reg_no;
        $custData->company_type = $request->company_type;
        $custData->email = $request->email2;
        $custData->svalue = $request->svalue1;
        $custData->svalue_percentage = $request->svalue_percentage1;
        $custData->address = $request->address;
        $custData->updated_at = date('Y-m-d');
        $custData->update();

        $custCompany = new CustCompany();
        $custCompany->cust_id = $custData->id;
        $custCompany->company = $request->company;
        $custCompany->address = $request->company_addrerss;
        $custCompany->company_reg_no = $request->company_reg_no;
        $custCompany->company_type = $request->company_type;
        $custCompany->created_at = date('Y-m-d H:i:s');
        $custCompany->save();
        Session::flash('success', 'Create Success');
        return Redirect::action('Landcontroller@Customers_Listing');
      }

      if ($request->ids != '' && $request->f_name2 != '') {
        if ($request->f_name2 != '' && $request->l_name2 != '' && $request->svalue1 != '' && $request->svalue_percentage1 != '') {
          $custData = Customer::findOrFail($request->ids);
          $custData->org_id = Session::get('gorgID');
          $custData->f_name = $request->f_name2;
          $custData->l_name = $request->l_name2;
          $custData->gender = $request->gender2;
          $custData->occupation = $request->occupation2;
          $custData->dob = $request->dob2;
          $custData->mobile = $request->mobile2;
          $custData->landline_no = $request->landline_no;
          $custData->company = $request->company;
          $custData->company_reg_no = $request->company_reg_no;
          $custData->company_type = $request->company_type;
          $custData->email = $request->email2;
          $custData->svalue = $request->svalue1;
          $custData->svalue_percentage = $request->svalue_percentage1;
          $custData->address = $request->address;
          $custData->update();
          $custCompany = CustCompany::where('cust_id', $custData->id);
          $custCompany->cust_id = $custData->id;
          $custCompany->company = $request->company;
          $custCompany->company_reg_no = $request->company_reg_no;
          $custCompany->address = $request->company_addrerss;
          $custCompany->company_type = $request->company_type;
          $custCompany->updated_at = date('Y-m-d H:i:s');
          $custCompany->update();
          if ($request->s_fname != '') {
            for ($i = 0; $i < count($request->s_fname); $i++) {
              $scustData = ShareCustomer::findOrFail($request->cid[$i]);
              $scustData->org_id = Session::get('gorgID');
              $scustData->f_name = $request->s_fname[$i];
              $scustData->l_name = $request->s_lname[$i];
              $scustData->mobile = $request->s_mobile[$i];
              $scustData->company = $request->company;
              $scustData->company_reg_no = $request->company_reg_no;
              $scustData->company_type = $request->company_type;
              $scustData->email = $request->s_email[$i];
              $scustData->s_svalue = $request->s_svalue[$i];
              $scustData->svalue_percentage = $request->s_svalue_percentage[$i];
              $scustData->update();
            }
          }
          Session::flash('success', 'Update Success');
          return Redirect::action('Landcontroller@Customers_Listing');
        }
      }

      if ($request->company != '') {
        if ($request->ids != '') {
          $custData = Customer::findOrFail($request->ids);
        } else {
          $custData = new Customer();
        }
        if ($request->f_name1 != '' && $request->l_name1 != '' && $request->svalue != '' && $request->svalue_percentage != '') {
          $custData->org_id = Session::get('gorgID');
          $custData->f_name = $request->f_name1;
          $custData->l_name = $request->l_name1;
          $custData->gender = $request->gender1;
          $custData->occupation = $request->occupation1;
          $custData->dob = $request->dob1;
          $custData->landline_no = $request->landline_no;
          $custData->mobile = $request->mobile1;
          $custData->company = $request->company;
          $custData->company_reg_no = $request->company_reg_no;
          $custData->company_type = $request->company_type;
          $custData->email = $request->email1;
          $custData->svalue = $request->svalue;
          $custData->svalue_percentage = $request->svalue_percentage;
          $custData->address = $request->address;
        } else {
          $custData->org_id = Session::get('gorgID');
          $custData->f_name = $request->f_name;
          $custData->l_name = $request->l_name;
          $custData->gender = $request->gender;
          $custData->occupation = $request->occupation;
          $custData->dob = $request->dob;
          $custData->landline_no = $request->landline_no;
          $custData->mobile = $request->mobile;
          $custData->company = $request->company;
          $custData->company_reg_no = $request->company_reg_no;
          $custData->company_type = $request->company_type;
          $custData->email = $request->email;
          $custData->address = $request->address;
        }

        if ($request->ids != '') {
          $custData->updated_at = date('Y-m-d');
          $custData->update();
          Session::flash('success', 'Update Success');
          return Redirect::action('Landcontroller@Customers_Listing');
        } else {
          $custData->created_at = date('Y-m-d');
          $custData->save();
          $custCompany = CustCompany::where('cust_id', $custData->id);
          $custCompany->cust_id = $custData->id;
          $custCompany->company = $request->company;
          $custCompany->company_reg_no = $request->company_reg_no;
          $custCompany->address = $request->company_addrerss;
          $custCompany->company_type = $request->company_type;
          $custCompany->updated_at = date('Y-m-d H:i:s');
          $custCompany->update();
          $RegCustData = Customer::find($custData->id);
          Session::put('RegCustData', $RegCustData);
          if ($request->s_fname != '') {
            for ($i = 0; $i < count($request->s_fname); $i++) {
              $scustData = new ShareCustomer();
              $scustData->org_id = Session::get('gorgID');
              $scustData->p_id = $custData->id;
              $scustData->f_name = $request->s_fname[$i];
              $scustData->l_name = $request->s_lname[$i];
              $scustData->mobile = $request->s_mobile[$i];
              $scustData->company = $request->company;
              $scustData->company_reg_no = $request->company_reg_no;
              $scustData->company_type = $request->company_type;
              $scustData->email = $request->s_email[$i];
              $scustData->s_svalue = $request->s_svalue[$i];
              $scustData->svalue_percentage = $request->s_svalue_percentage[$i];
              $scustData->save();
            }
          }


          Session::flash('success', 'Add Success');
          if ($request->pageName == 'maincustomer') {
            return Redirect::action('Landcontroller@Customers_Listing');
          } else {
            return back();
          }
        }
      }
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }
  public function AddCustomers(Request $request)
  {

     

        //  return $request;
        //  echo $request->established_date;
        //  exit;
        $company_logo_name="";
        if($request->company_logo)
        {
        $company_logo_name=$request->company_logo->getClientOriginalName();
        request()->company_logo->move(public_path('company_logo'), $company_logo_name);
        }
          $custCompany=new CustCompany();
          // $custCompany->cust_id ="";
          $custCompany->company = $request->company;
          $custCompany->company_reg_no = $request->company_reg_no;
          $custCompany->address = $request->company_addrerss;
          $custCompany->company_type = $request->company_type;
          $custCompany->industry_id = $request->industry;
          $custCompany->company_logo=$company_logo_name??"";
          $custCompany->company_email=$request->company_email ?? "";
          
          if($request->established_date)
          {
            $custCompany->established_date = date("Y-m-d", strtotime($request->established_date));
          }
          else{
            $request->established_date="";
          }

          $custCompany->sub_industry_id = $request->sub_industry;
          $custCompany->turn_over = $request->turn_over;
          $custCompany->number_of_employees = $request->number_of_employees;
          $custCompany->unit_size = $request->unit_size;
          $wase_materials_type=$input_materials_quanity=$input_materials_type=$waste_materials_quanity="";
          if($request->input_materials_quanity!="")
          {
          $input_materials_quanity=implode(",",$request->input_materials_quanity);
          }
          if($request->input_materials_type!="")
          {
          $input_materials_type=implode(",",$request->input_materials_type);
          }
          if($request->waste_materials_quanity!="")
          {
          $waste_materials_quanity=implode(",",$request->waste_materials_quanity);
          }
          if($request->wase_materials_type!="")
          {
          $wase_materials_type=implode(",",$request->wase_materials_type);
          }
          $custCompany->input_materials_quanity=$input_materials_quanity?? "";
          $custCompany->input_materials_type=$input_materials_type ?? "";
          $custCompany->waste_materials_quanity=$waste_materials_quanity ?? "";
          $custCompany->wase_materials_type=$wase_materials_type?? "";
          if($request->input_details=="")
          {
            $custCompany->input_details_id="";
          }
          else{
            $count = count($request->input_details);
            $tmp=""; 
          if($count>1){
              for($i=0;$i<$count;$i++){
                  $tmp.=$request->input_details[$i].",";
              }
          }
          else{
              $tmp.=$request->input_details[0].",";
          }
          $custCompany->input_details_id=rtrim($tmp, ':');
          }

         
          if($request->waste_materials=="")
          {
            $custCompany->waste_materials_id = "";
          }
          else{
            $count = count($request->waste_materials);
            $tmp_waste_material=""; 
            if($count>1){
                for($i=0;$i<$count;$i++){
                    $tmp_waste_material.=$request->waste_materials[$i].",";
                }
            }
            else{
                $tmp_waste_material.=$request->waste_materials[0].",";
            }
            $custCompany->waste_materials_id=rtrim($tmp_waste_material, ':');
          }
          $custCompany->updated_at = date('Y-m-d H:i:s');
          $custCompany->status=1;
          $custCompany->save();
          // return $custCompany;
          if($request->company_type=='proprietorship')
          {
            $custData=new Customer();
            $custData->org_id = Session::get('gorgID');
            $custData->comp_id=$custCompany->id;
            $custData->is_proprietor=1;
            $custData->f_name = $request->f_name;
            $custData->l_name = $request->l_name;
            $custData->gender = $request->gender;
            $custData->occupation = $request->occupation;
            $custData->dob = $request->dob;
            $custData->mobile = $request->mobile;
            $custData->landline_no = $request->landline_no;
            $custData->company = $request->company;
            $custData->company_reg_no = $request->company_reg_no;
            $custData->company_type = $request->company_type;
            $custData->email = $request->email;
            $custData->address = $request->address;
            $custData->company_addrerss=$request->company_addrerss;
            $custData->updated_at = date('Y-m-d');
            $custData->save();
          Session::flash('success', 'Add Success');
          return redirect('land/customer');
          }
          if(!empty($request->shareholder_f_name))
          {
          for ($i = 0; $i < count($request->shareholder_f_name); $i++) {
            $scustData = new ShareCustomer();
            $scustData->org_id = Session::get('gorgID');
            $scustData->f_name = $request->shareholder_f_name[$i];
            $scustData->comp_id=$custCompany->id;
            $scustData->cust_id=$custCompany->id;
            $scustData->p_id=$custCompany->id;
            $scustData->occupation=$request->shareholder_occupation_name[$i];
            $scustData->dob=$request->shareholder_dob[$i];
            $scustData->l_name = $request->shareholder_l_name[$i];
            $scustData->mobile = $request->shareholder_contact[$i];
            $scustData->company = $request->company;
            $scustData->gender  =@$request->shareholdergender[$i];
            $scustData->location=@$request->shareholderaddress[$i];
            $scustData->company_reg_no = $request->company_reg_no;
            $scustData->company_type = $request->company_type;
            $scustData->email = $request->shareholder_email_id[$i];
            $scustData->is_director=0;
            $scustData->s_svalue = $request->shareholder_share_value[$i];
            $scustData->svalue_percentage = $request->shareholder_share_per[$i];
            $scustData->save();
            $custData = new Customer();
            $custData->org_id = Session::get('gorgID');
            $custData->f_name = $request->shareholder_f_name[$i];
            $custData->comp_id=$custCompany->id;
            $custData->occupation=$request->shareholder_occupation_name[$i];
            $custData->dob=$request->shareholder_dob[$i];
            $custData->l_name = $request->shareholder_l_name[$i];
            $custData->mobile = $request->shareholder_contact[$i];
            $custData->company = $request->company;
            $custData->gender  =@$request->shareholdergender[$i];
            $custData->location=$request->shareholderaddress[$i];
            $custData->company_reg_no = $request->company_reg_no;
            $custData->company_type = $request->company_type;
            $custData->email = $request->shareholder_email_id[$i];
            $custData->is_director=0;
            $custData->svalue = $request->shareholder_share_value[$i];
            $custData->svalue_percentage = $request->shareholder_share_per[$i];
            $custData->save();
            

            
          }
        }
        if(!empty($request->Dierctor_firstname))
        {
          for ($i = 0; $i < count($request->Dierctor_firstname); $i++) {
            $dcustData = new ShareCustomer();
            $dcustData->org_id = Session::get('gorgID');
            $dcustData->comp_id=$custCompany->id;
            $dcustData->cust_id=$custCompany->id;
            $dcustData->p_id=$custCompany->id;
            $dcustData->f_name = $request->Dierctor_firstname[$i];
            $dcustData->l_name = $request->Director_last_name[$i];
            $dcustData->mobile = $request->Director_contact[$i];
            $dcustData->occupation=$request->Director_occupation_name[$i];
            $dcustData->dob=$request->Director_dob[$i];
            $dcustData->location=$request->Directoraddress[$i];
            $dcustData->gender  =@$request->directorgender[$i];
            $dcustData->company = $request->company;
            $dcustData->company_reg_no = $request->company_reg_no;
            $dcustData->company_type = $request->company_type;
            $dcustData->email = $request->Director_email_id[$i];
            $dcustData->is_director=1;
            $dcustData->s_svalue = $request->Director_share_value[$i];
            $dcustData->svalue_percentage = $request->director_share_value_per[$i];
            $dcustData->save();
            $custData = new Customer();
            $custData->org_id = Session::get('gorgID');
            $custData->comp_id=$custCompany->id;
            $custData->f_name = $request->Dierctor_firstname[$i];
            $custData->l_name = $request->Director_last_name[$i];
            $custData->mobile = $request->Director_contact[$i];
            $custData->occupation=$request->Director_occupation_name[$i];
            $custData->dob=$request->Director_dob[$i];
            $custData->location=$request->Directoraddress[$i];
            $custData->gender  =@$request->directorgender[$i];
            $custData->company = $request->company;
            $custData->company_reg_no = $request->company_reg_no;
            $custData->company_type = $request->company_type;
            $custData->email = $request->Director_email_id[$i];
            $custData->is_director=1;
            $custData->svalue = $request->Director_share_value[$i];
            $custData->svalue_percentage = $request->director_share_value_per[$i];
            $custData->save();
          }
        }
          Session::flash('success', 'Add Success');
          return redirect('land/customer');
    // return $dcustData;
  }
 

  public function CreateNewRegNo(Request $request)
  {
    $leaseData = Leasedata::findOrFail($request->new_regId);
    $leaseData->registration_no = $request->new_regno;
    $leaseData->update();
    Session::flash('success', 'Success');
    return back();
  }


  public function Delete_Customer($id)
  {
      
    // Customer::findOrFail($id)->delete();
    $custCompany=CustCompany::where('id',$id)->first();
    $cutomer=Customer::where('comp_id',$id)->get();
    foreach($cutomer as $value)
    {
      $delete_customer=Customer::where('id',$value['id'])->delete();
    }
    $custCompany=CustCompany::where('id',$id)->delete();
    $cutomer=Customer::where('comp_id',$id)->get();
    Session::flash('danger', 'Success');
    return redirect('land/customer');
    // $data['status'] = 'Delete Success';
    // $data['mark'] = '1';
    // return Response::json($data);
  }

  public function CreateRegistration(Request $request)
  {
    try {
      if ($request->cust_id != '') {
        Land::where('id', $request->land_id)->update(['is_register' => 1]);
        $leaseData = new Leasedata();
        $leaseData->org_id = Session::get('gorgID');
        $leaseData->cust_id = $request->cust_id;
        $leaseData->land_id = $request->land_id;
        $leaseData->application_no = $request->application_no;
        $leaseData->application_date = $request->application_date;
        $leaseData->allotment_no = $request->allotment_no;
        $leaseData->allotment_date = $request->allotment_date;
        $leaseData->registration_no = $request->registration_no;
        $leaseData->possession_date = $request->possession_date;
        $leaseData->ssi_reg_no = $request->ssi_reg_no;
        $leaseData->dakhal_kabja = $request->dakhal_kabja;
        $leaseData->is_pcc = $request->pcc_reg ?? 0;
        $leaseData->based_rent = $request->based_rent;
        $leaseData->insurance = $request->insurance;
        $leaseData->maintanance = $request->maintanance;
        $leaseData->additional_charge = $request->additional_charge;
        $leaseData->net_payable = $request->add_net_payable;
        $leaseData->tax = $request->taxes;
        $leaseData->net_pay = $request->netpaybill;
        $leaseData->lease_time = $request->lease_time;
        $leaseData->lease_duration = $request->lease_duration;
        $leaseData->start_date = $request->start_date;
        $leaseData->created_at = date('Y-m-d');
        $leaseData->save();
        $lease_invoice = new lease_invoice();
        $lease_invoice->org_id = Session::get('gorgID');
        $lease_invoice->lease_data_id = $leaseData->id;
        $lease_invoice->cust_id = $request->cust_ids;
        $lease_invoice->land_id = $leaseData->land_id;
        $lease_invoice->based_rent = $request->based_rent;
        $lease_invoice->insurance = $request->insurance;
        $lease_invoice->maintanance = $request->maintanance;
        $lease_invoice->additional_charge = $request->additional_charge;
        $lease_invoice->net_payable = $request->add_net_payable;
        $lease_invoice->tax = $request->taxes;
        $lease_invoice->net_pay = $request->netpaybill;
        $lease_invoice->lease_time = $request->lease_time;
        $lease_invoice->lease_duration = $request->lease_duration;
        $lease_invoice->start_date = date('Y-m-d', strtotime($request->start_date));
        $lease_invoice->created_at = date('Y-m-d');
        $lease_invoice->status = 1;
        $lease_invoice->save();
        Session::flash('success', 'Registration Success');
        return Redirect::action('Landcontroller@Registration');
      } else {
        if ($request->land_id != '') {
          $custData = new Customer();
          $custData->org_id = Session::get('gorgID');
          $custData->land_id = $request->land_id;
          $custData->f_name = $request->f_name;
          $custData->l_name = $request->l_name;
          $custData->gender = $request->gender;
          $custData->occupation = $request->occupation;
          $custData->dob = $request->dob;
          $custData->mobile = $request->mobile;
          $custData->company = $request->company;
          $custData->email = $request->email;
          $custData->created_at = date('Y-m-d');
          $custData->save();
          $cust_id = DB::getPdo()->lastInsertId();
        }
        if ($cust_id != '') {
          $leaseData = new Leasedata();
          $leaseData->org_id = Session::get('gorgID');
          $leaseData->cust_id = $cust_id;
          $leaseData->land_id = $request->land_id;
          $leaseData->application_no = $request->application_no;
          $leaseData->allotment_no = $request->allotment_no;
          $leaseData->based_rent = $request->based_rent;
          $leaseData->insurance = $request->insurance;
          $leaseData->maintanance = $request->maintanance;
          $leaseData->additional_charge = $request->additional_charge;
          $leaseData->net_payable = $request->add_net_payable;
          $leaseData->tax = $request->taxes;
          $leaseData->net_pay = $request->netpaybill;
          $leaseData->lease_time = $request->lease_time;
          $leaseData->lease_duration = $request->lease_duration;
          $leaseData->start_date = $request->start_date;
          $leaseData->created_at = date('Y-m-d');
          $leaseData->save();
          $lease_invoice = new lease_invoice();
          $lease_invoice->org_id = Session::get('gorgID');
          $lease_invoice->lease_data_id = $leaseData->id;
          $lease_invoice->cust_id = $request->cust_ids;
          $lease_invoice->land_id = $leaseData->land_id;
          $lease_invoice->based_rent = $request->based_rent;
          $lease_invoice->insurance = $request->insurance;
          $lease_invoice->maintanance = $request->maintanance;
          $lease_invoice->additional_charge = $request->additional_charge;
          $lease_invoice->net_payable = $request->add_net_payable;
          $lease_invoice->tax = $request->taxes;
          $lease_invoice->net_pay = $request->netpaybill;
          $lease_invoice->lease_time = $request->lease_time;
          $lease_invoice->lease_duration = $request->lease_duration;
          $lease_invoice->start_date = date('Y-m-d', strtotime($request->start_date));
          $lease_invoice->created_at = date('Y-m-d');
          $lease_invoice->status = 1;
          $lease_invoice->save();
          Session::flash('success', 'Registration Success');
          return Redirect::action('Landcontroller@Registration');
        }
      }
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function AssignCustomer(Request $request)
  {
    // print_r($request->all());die();
    try {
      if ($request->ids != '') {
        $leaseData = Leasedata::findOrFail($request->ids);
        $leaseData->cust_id = $request->cust_ids;
        $leaseData->based_rent = $request->based_rent;
        $leaseData->insurance = $request->insurance;
        $leaseData->maintanance = $request->maintanance;
        $leaseData->additional_charge = $request->additional_charge;
        $leaseData->net_payable = $request->net_payable;
        $leaseData->tax = $request->taxes;
        $leaseData->net_pay = $request->netpaybill;
        $leaseData->lease_time = $request->lease_time;
        $leaseData->lease_duration = $request->lease_duration;
        $leaseData->start_date = $request->start_date;
        $leaseData->created_at = date('Y-m-d');
        $leaseData->save();
        $lease_invoice = new lease_invoice();
        $lease_invoice->org_id = Session::get('gorgID');
        $lease_invoice->lease_data_id = $leaseData->id;
        $lease_invoice->cust_id = $request->cust_ids;
        $lease_invoice->land_id = $leaseData->land_id;
        $lease_invoice->based_rent = $request->based_rent;
        $lease_invoice->insurance = $request->insurance;
        $lease_invoice->maintanance = $request->maintanance;
        $lease_invoice->additional_charge = $request->additional_charge;
        $lease_invoice->net_payable = $request->net_payable;
        $lease_invoice->tax = $request->taxes;
        $lease_invoice->net_pay = $request->netpaybill;
        $lease_invoice->lease_time = $request->lease_time;
        $lease_invoice->lease_duration = $request->lease_duration;
        $lease_invoice->start_date = date('Y-m-d', strtotime($request->start_date));
        $lease_invoice->created_at = date('Y-m-d');
        $lease_invoice->status = 1;
        $lease_invoice->save();
        Session::flash('success', 'Update success');
        return Redirect::back();

        //  if ($request->cust_ids!='') {
        //   $custData = Customer::findOrFail($request->cust_ids);
        //   $custData->f_name = $request->f_name;
        //   $custData->l_name = $request->l_name;
        //   $custData->gender = $request->gender;
        //   $custData->occupation = $request->occupation;
        //   $custData->dob = $request->dob;
        //   $custData->mobile = $request->mobile;
        //   $custData->company = $request->company;
        //   $custData->email = $request->email;
        //   $custData->created_at = date('Y-m-d');
        //   $custData->update();       
        //   Session::flash('success','Update success');        
        //   return Redirect::back();
        // }
      } else {
        if ($request->land_id != '') {
          $custData = new Customer();
          $custData->land_id = $request->land_id;
          $custData->f_name = $request->f_name;
          $custData->l_name = $request->l_name;
          $custData->gender = $request->gender;
          $custData->occupation = $request->occupation;
          $custData->dob = $request->dob;
          $custData->mobile = $request->mobile;
          $custData->company = $request->company;
          $custData->email = $request->email;
          $custData->created_at = date('Y-m-d');
          $custData->save();
          $cust_id = DB::getPdo()->lastInsertId();
        }
        if ($cust_id != '') {
          $leaseData = new Leasedata();
          $leaseData->cust_id = $cust_id;
          $leaseData->land_id = $request->land_id;
          $leaseData->application_no = $request->application_no;
          $leaseData->application_date = $request->application_date;
          $leaseData->allotment_no = $request->allotment_no;
          $leaseData->allotment_date = $request->allotment_date;
          $leaseData->registration_no = $request->registration_no;
          $leaseData->based_rent = $request->based_rent;
          $leaseData->insurance = $request->insurance;
          $leaseData->maintanance = $request->maintanance;
          $leaseData->additional_charge = $request->additional_charge;
          $leaseData->net_payable = $request->net_payable;
          $leaseData->tax = $request->taxes;
          $leaseData->net_pay = $request->netpaybill;
          $leaseData->lease_time = $request->lease_time;
          $leaseData->lease_duration = $request->lease_duration;
          $leaseData->start_date = $request->start_date;
          $leaseData->created_at = date('Y-m-d');
          $leaseData->save();
          $lease_invoice = new lease_invoice();
          $lease_invoice->org_id = Session::get('gorgID');
          $lease_invoice->lease_data_id = $leaseData->id;
          $lease_invoice->cust_id = $request->cust_ids;
          $lease_invoice->land_id = $leaseData->land_id;
          $lease_invoice->based_rent = $request->based_rent;
          $lease_invoice->insurance = $request->insurance;
          $lease_invoice->maintanance = $request->maintanance;
          $lease_invoice->additional_charge = $request->additional_charge;
          $lease_invoice->net_payable = $request->net_payable;
          $lease_invoice->tax = $request->taxes;
          $lease_invoice->net_pay = $request->netpaybill;
          $lease_invoice->lease_time = $request->lease_time;
          $lease_invoice->lease_duration = $request->lease_duration;
          $lease_invoice->start_date = date('Y-m-d', strtotime($request->start_date));
          $lease_invoice->created_at = date('Y-m-d');
          $lease_invoice->status = 1;
          $lease_invoice->save();
          Session::flash('success', 'Assign success');
          Session::forget('land_id');
          return Redirect::Action('Landcontroller@index');
        }
      }
    } catch (\Exception $e) {

      return $e->getMessage();
    }
  }




  
  public function transfer_history()
  {
    $toReturn['leasedata'] = Leasedata::get()->toArray();
    try {
      $results = leasedata::leftJoin('lands', 'lands.id', '=', 'leasedata.land_id')
        ->leftJoin('customers', 'customers.id', '=', 'leasedata.cust_id')
        ->where(['leasedata.is_transfer' => 1])
        ->select('leasedata.*', 'customers.f_name', 'customers.l_name', 'customers.company', 'lands.land_name')->get();
      $data['content'] = 'customer.transfer_history';
      return view('layouts.content', compact('data'))->with('toReturn', $results);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }


  public function registration_editFetch($id)
  {
    $toReturn=array();
    $toReturn['lease_details']= DB::table('leasedata')
      // ->join('customers', 'customers.id', '=', 'leasedata.cust_id')
      ->join('lands', 'lands.id', '=', 'leasedata.land_id')
      ->leftjoin('customer_company','customer_company.id','leasedata.cust_id')
      ->where('leasedata.id',$id)
      ->select('leasedata.*', 'customer_company.id as customerCopmId',
      'customer_company.company_type as company_type',
      'customer_company.company as company_name' ,
      'customer_company.company_reg_no as company_reg_no' ,
      'customer_company.address as address' ,
      
      'lands.*','lands.id as LandID', 'leasedata.id as id')
      ->first();
    
    //   $toReturn['leasedata']=Leasedata::where('id',$id)->first();
    // // $toReturn['leaseInvoice']=lease_invoice::where('land_id',$toReturn['leasedata']->land_id)->get();
    // $toReturn['comapany_detail']=CustCompany::where('id',@$toReturn['leasedata']->cust_id)->first();
    // $toReturn['leaseInvoice']=lease_invoice::where('land_id',@$toReturn['leasedata']->land_id)->get();
    
    // if($toReturn['comapany_detail']->company_type=='proprietorship')
    // {
    //   $toReturn['ltdpvt'] = Customer::where('comp_id', $toReturn['comapany_detail']->id)->where('is_proprietor',1) ->orderBy('id','Desc')->get();
    // }
    // else
    // {
    // $toReturn['ltdpvt']=Customer::where('comp_id', $toReturn['leasedata']->cust_id)->where('is_proprietor',0)->orderBy('id','Desc')->get();
    // }
    // echo "<pre>";print_r($toReturn);
    // exit;
    $data['content'] = 'customer.editSave_registration';
    
    return view('layouts.content', compact('data'))->with('toReturn', $toReturn);
  }

  public function registration_editSave(Request $request)
  {

      // return $request;
      $editleasedata= Leasedata::find($request->ids);
      $editleasedata->application_no = $request->application_no;
      $editleasedata->application_date = $request->application_date;
      $editleasedata->possession_date = $request->possession_date;
      $editleasedata->ssi_reg_no = $request->ssi_reg_no;
      $editleasedata->registration_no = $request->registration_no;
      $editleasedata->registration_date = $request->registration_date;
      $editleasedata->allotment_no = $request->allotment_no;
      $editleasedata->allotment_date = $request->allotment_date;
      $editleasedata->based_rent = $request->based_rent;
      $editleasedata->tax = $request->taxes;
      $editleasedata->insurance = $request->insurance;
      $editleasedata->maintanance = $request->maintanance;
      $editleasedata->additional_charge = $request->additional_charge;
      $editleasedata->net_payable = $request->add_net_payable;
      $editleasedata->net_pay = $request->netpaybill;
      $editleasedata->lease_time = $request->lease_time;
      $editleasedata->start_date = $request->start_date;
      $editleasedata->updated_at = date('Y-m-d H:i:s');
      $editleasedata->save();
      // if($request->land_ids != null)
      // {
      //   $editlands= Land::find($request->land_ids);
      //   $editlands->sector = $request->sect;
      //   $editlands->block = $request->l_block;
      //   $editlands->land_name = $request->p_name;
      //   $editlands->plot_no = $request->p_no;
      //   $editlands->plot_size = $request->p_size;
      //   $editlands->area = $request->phas;
      //   $editlands->updated_at = date('Y-m-d H:i:s');
      //   $editlands->save();
      // }
      // if($request->cust_id != null)
      // {
      //   $editlands= CustCompany::find($request->cust_id);
      //   $editlands->company = $request->c_name;
      //   $editlands->company_type = $request->c_email;
      //   $editlands->company_reg_no = $request->c_Regi;
      //   $editlands->address = $request->c_company;
      //   $editlands->updated_at = date('Y-m-d H:i:s');
      //   $editlands->save();
      // }
    Session::flash('success', 'Update Success');
    // return redirect('land/customer');
    return redirect('land/registration');
    
  }
}