<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use App\Land;
use App\Leasedata;
use App\lease_invoice;
use App\enterprise;
use Response;
use Redirect;
use PDF;

class RegistrationController extends Controller
{
    public function Registration(Request $request)
    {
        $results = DB::table('leasedata')->leftJoin('lands', 'lands.id', '=', 'leasedata.land_id')
            ->leftjoin('enterprise', 'enterprise.id', 'leasedata.cust_id')
            ->where(['leasedata.status' => 1])
            ->orderBy('leasedata.id', 'DESC')
            ->select('leasedata.*', 'enterprise.nameofUnit as company_name', 'enterprise.typeOfUnit as company_type', 'lands.land_name', 'leasedata.land_id')->paginate(25);
        // return $results;
        if (Auth::check() && Auth::user()->users_role == 2) {
            $land_permission = Session::get('all_module_permission');
            foreach ($land_permission as $key => $value_land) {
                if ($value_land['permission_value'] == 3) {
                    $module_permission = $value_land;
                }
            }
        }
        $user_id = Session::get('gorgID');

        $data['content'] = 'customer.registration';
        return view('layouts.content', compact('data'))->with(['results' => $results ?? '', 'module_permission' => $module_permission ?? '', 'user_id' => $user_id]);
    }
    public function CreateRegistration(Request $request)
    {
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
        return redirect('land/registration');
    }
    public function registration_editFetch($id)
    {
        $toReturn = array();
        $toReturn['lease_details'] = DB::table('leasedata')
            // ->join('enterprise', 'enterprise.id', '=', 'leasedata.cust_id')
            ->join('lands', 'lands.id', '=', 'leasedata.land_id')
            ->leftjoin('enterprise', 'enterprise.id', 'leasedata.cust_id')
            ->where('leasedata.id', $id)
            ->select(
                'leasedata.*',
                'enterprise.id as customerCopmId',
                'enterprise.typeOfUnit as company_type',
                'enterprise.nameofUnit as company_name',
                'enterprise.company_reg_no as company_reg_no',
                'enterprise.address as address',
                'lands.*',
                'lands.id as LandID',
                'leasedata.id as id'
            )
            ->first();
        $data['content'] = 'customer.editSave_registration';
        return view('layouts.content', compact('data'))->with('toReturn', $toReturn);
    }
    public function registration_editSave(Request $request)
    {
        $editleasedata = Leasedata::find($request->ids);
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
        Session::flash('success', 'Update Success');
        // return redirect('land/customer');
        return redirect('land/registration');
    }
    public function SearchCustomer(Request $request, $query)
    {
        $data = enterprise::where('nameofUnit', 'LIKE', "%{$query}%")
            ->orWhere('company_reg_no', 'LIKE', "%{$query}%")
            ->orWhere('typeOfUnit', 'LIKE', "%{$query}%")
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
                    '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->nameofUnit .  '</a>' . '</td>' .
                    '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->company_reg_no . '</a>' . '</td>' .
                    '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->typeOfUnit . '</a>' . '</td>' .
                    '<td>' . '<a href="javascript::void(0);" class="on-default remove-row" onclick="addcustomer(' . $value->id . ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="add">' . $value->address . '</a>' . '</td>' .
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
    public function AddWizardContractCustomer(Request $request, $id)
    {
        $data = enterprise::where('id', $id)->first();
        return Response::json($data);
    }
    public function searchTransferCustomer(Request $request, $query)
    {
        $data = enterprise::where('nameofUnit', 'LIKE', "%{$query}%")
            ->orWhere('company_reg_no', 'LIKE', "%{$query}%")
            ->orWhere('typeOfUnit', 'LIKE', "%{$query}%")
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
                    '<td>' .  $value->nameofUnit . '</td>' .
                    '<td>' .  $value->company_reg_no .  '</td>' .
                    '<td>' .  $value->typeOfUnit . '</td>' .
                    '<td>' . $value->address . '</td>' .
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
    }
    public function Get_Registration_details($id)
    {
        $toReturn = array();
        $toReturn['lease_details'] = DB::table('leasedata')
            ->join('lands', 'lands.id', '=', 'leasedata.land_id')
            ->leftjoin('enterprise', 'enterprise.id', 'leasedata.cust_id')
            ->where('leasedata.id', $id)->select('leasedata.*', 'leasedata.id as Id', 'enterprise.typeOfUnit as company_type', 'enterprise.nameofUnit as company_name', 'lands.*',  'lands.id as LandID')->first();
        $toReturn['leasedata'] = Leasedata::where('id', $id)->first();
        // $toReturn['leaseInvoice']=lease_invoice::where('land_id',$toReturn['leasedata']->land_id)->get();
        $toReturn['comapany_detail'] = enterprise::where('id', @$toReturn['leasedata']->cust_id)->first();
        $toReturn['leaseInvoice'] = lease_invoice::where('land_id', @$toReturn['leasedata']->land_id)->get();

        return $toReturn;
    }
    public function AddTransferCustomer(Request $request, $id)
    {
        // $toReturn['customer']=Customer::where('comp_id', $id)->first();
        // $data = Customer::where('id', $id)->first();
        $toReturn['Company'] = enterprise::where('id', $id)->first();
        return Response::json($toReturn);
    }
    public function LandInvoice(Request $request, $id)
    {
        $details = DB::table('leasedata')->leftJoin('lands', 'lands.id', 'leasedata.land_id')->leftJoin('enterprise', 'enterprise.id', 'leasedata.cust_id')->where('leasedata.id', $id)->select('enterprise.*', 'enterprise.address as cust_address', 'lands.*', 'lands.pincode as land_pin', 'leasedata.*')->first();
        $data = $details;
        //   return  ['test'=>$data];
        // return view('pdf_view')->with('data',$data);
        $pdf = PDF::loadView('pdf_view', compact('data'));
        $invoice = 'invoice-' . date('d-m-Y');
        return $pdf->download('invoice.pdf');
    }
}
