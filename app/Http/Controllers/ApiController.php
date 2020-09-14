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
use Response;
use App\Company;
use App\User;
use App\SstUser;
use App\FstUser;
use App\LocationUser;
use DB;
use Hash;
use Auth;
use Carbon\Carbon;
use App\Land;

class ApiController extends Controller
{

	function siginIn(Request $request)
	{
		$validations=[
			'mobileNumber'=>'required',
			'password'=>'required'			
		];
		$validator=Validator::make($request->all(),$validations);
		if($validator->fails()){
			$response['message']=$validator->errors($validator)->first();
			return response()->json($response,400);
		}
		$accessToken=md5(uniqid(rand()));
		$chkdata=DB::table('locationusers')->where(['phone'=>$request->mobileNumber])->first();
		if($chkdata)
		{
			if(Hash::check($request->password,$chkdata->password)){
				$data = LocationUser::find($chkdata->id);
				$data->longitude = $request->longitude;
				$data->latitude = $request->latitude;
				$data->save();
				$userData = LocationUser::find($data->id);
				$ssType = SstUser::where('user_id',$chkdata->id)->first();
				$fstype = FstUser::where('user_id',$chkdata->id)->first();
				if ($ssType) {
					$usertype = 'SST';
					$usertypecolor = 'RED';
				}elseif($fstype){
					$usertype = 'FST';
					$usertypecolor = 'BLUE';
				}
				$response['message']='LogIn Successfully';
				$response['data']= ['id'=>$userData->id,
				'name'=>$userData->name,
				'email'=>$userData->email,
				'phone'=>$userData->phone,
				'address'=>$userData->address,
				'user_image'=>$userData->user_image,
				'longitude'=>$userData->longitude,
				'latitude'=>$userData->latitude,
				'UserType'=>$usertype ?? '',
				'UserTypeColor'=>$usertypecolor ?? '' 			
				]; 
				return response()->json($response,200);
			}
			else{
				$response['message']='Password Incorrect';
				return response()->json($response,400);
			}
		}else{
			$response['message']='Mobile Number Doest Exists';
			return response()->json($response,400);
		}
	}
	
/* Apis for Android @Ashish Agarwal */ 
	public function signIn(Request $request)
	{
		$validator =Validator::make($request->all(), [
			'username' => 'required',
			'password' => 'required|string',
		]);
		if ($validator->fails()) {
			return response()->json($validator->messages(), 422);
		}
	
		$credentials = request(['username', 'password']);
		if(!Auth::attempt($credentials))
			return response()->json([
				'message' => 'either user id or password is incorrect '
			], 401);
		$user = $request->User();
		$tokenResult = $user->createToken('Personal Access Token');
		$token = $tokenResult->token;
		// if ($request->remember_me)
		//     $token->expires_at = Carbon::now()->addWeeks(1);
		$token->save();
		return response()->json([
			'access_token' => $tokenResult->accessToken,
			'token_type' => 'Bearer',
			'expires_at' => Carbon::parse(
				$tokenResult->token->expires_at
			)->toDateTimeString()
		]);
	
		return response($res->getBody())->withHeaders([
			'Content-Type' => 'appliacation/json'
		]);
	}
	public function logout(Request $request)
	{
		$request->user()->token()->revoke();
			return response()->json([
			'message' => 'Successfully logged out'
		]);
	}
	public function forgetpassword(Request $request){

		// $result=User::select('id','email')->where('email',$request->email)->get();
		// if(count($result)){
		//    $token=Str::random(40);
		//    User::where('email',$request->email)->update(['verifyToken'=>$token]);
		//    $body="click on link for reset password http://localhost:3000/ResetPassword/".$token;
		//    $subject="Forget password Link";
		//    $to='ashish.a@itscient.com'; 
		//    $this->sendmail($body,$subject,$to);
		//     return response()->json(['email'=>$request->email],200);
		// }
		// else{
		//     return response()->json("error");
		// }
	}
	public function changePassword(Request $request)
	{
		$validator =Validator::make($request->all(), [
			'new_password' => 'required|',
		]);
		if ($validator->fails()) {
			return response()->json($validator->messages(), 422);
		}
		$userDetail=User::where('id',$request->user()->id)
					->update([
						'password' => bcrypt($request->new_password),
				]); 
		if($userDetail){
			return response()->json(['msg'=>'record updated'],200);
		}
		else{
			return response()->json(['msg'=>'get error'],401);
		}
	}
	public function userDetail(Request $request)
	{
		if ($request->file('photo') != '') {
			$validator =Validator::make($request->all(), [
				'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
			]);
			if ($validator->fails()) {
				return response()->json($validator->messages(), 422);
			}
			
			$imageName = time() . '.' . request()->photo->getClientOriginalExtension();
			request()->photo->move(public_path('images/users'), $imageName);

			if (file_exists(public_path('images/users/' . $request->user()->photo))) {
			@unlink(public_path('images/users/' . $request->user()->photo));
			}
		} else {
			$imageName = $request->user()->photo;
		}
		$userDetail=User::where('id',$request->user()->id)
								->update([
									'name'=>$request->name,
									'gender'=>$request->gender,
									'dob'=>$request->dob,
									'photo'=>$imageName,
								]);
		if($userDetail){
			return response()->json(['msg'=>'record updated'],200);
		}
		else{
			return response()->json(['msg'=>'get error'],401);
		}
	} 
	public function LandRegistrationList(Request $request){
    	if($request->user()->users_role == 3){
    	    return response()->json(['msg'=>'You are not authorize to seen! please contact to administrator','data'=>[]],422);    
    	}
    	$registrations = DB::table('leasedata')->where('status',1)->get();
    	return response()->json(['msg'=>'success','data'=>$registrations]);
	}
	public function TotalLands(Request $request){
		if($request->user()->users_role == 3){
    	    return response()->json(['msg'=>'You are not authorize to seen! please contact to administrator','data'=>[]],422);    
    	}
    	$lands = Land::where('status',1)->get();
    	return response()->json(['msg'=>'success','data'=>$lands]);
	}
	public function Customers(Request $request){
	    if($request->user()->users_role == 3){
    	    return response()->json(['msg'=>'You are not authorize to seen! please contact to administrator','data'=>[]],422);    
    	}
        $Companies=DB::table('customer_company')->where('status', 1)->get();
    	return response()->json(['msg'=>'success','data'=>$Companies]);
	}
	public function Tickets(Request $request){
	    if($request->user()->users_role == 3){
    	    return response()->json(['msg'=>'You are not authorize to seen! please contact to administrator','data'=>[]],422);    
    	}
        $tickets=DB::table('ticket')->get();
    	return response()->json(['msg'=>'success','data'=>$tickets]);
	}
	public function Messages(Request $request){
        if($request->user()->users_role==1){
            $messages = DB::table('web_contact')->select('name','Email as email','Message as message','Phone as phone')->get();
        }elseif($request->user()->users_role == 3){
            $companyId = CustCompany::where('cust_id',$request->user()->id)->first();
            $messages = DB::table('contact_customers')->where('customer_id', $companyId->id)->get();  
        }
        else{
            # code fot role type 2
            $messages = DB::table('web_contact')->select('name','Email as email','Message as message','Phone as phone')->get();
        }
    	return response()->json(['msg'=>'success','data'=>$messages]);
	}
	public function dashboard(Request $request){
	    if($request->user()->users_role == 3){
    	    return response()->json(['msg'=>'You are not authorize to seen! please contact to administrator','data'=>[]],422);    
    	}
    	$landInventory = DB::table('leasedata')->where('status',1)->count();
    	$lands = Land::where('status',1)->count();
        $tickets=DB::table('ticket')->count();
        $Customers=DB::table('customer_company')->where('status', 1)->count();
    	return response()->json(['msg'=>'success','data'=>['landinventory'=>$landInventory,'total_lands'=>$lands,'total_tickets'=>$tickets,'total_customers'=> $Customers]]);
	}
}