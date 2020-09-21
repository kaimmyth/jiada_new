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
use App\CustCompany;
use DB;
use Session;
use Hash;
use Auth;

class MessageController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function message_form(Request $request)
  {
    //   return response()->json();
    if(Auth::user()->users_role==1){
      $messages = DB::table('web_contact')->select('name','Email as email','Message as message','Phone as phone')->orderBy('id','DESC')->paginate(25);  
      $data['content'] = 'message.message_list';
      return view('layouts.content', compact('data'))->with(['user_id' => @$user_id, 'messages' => @$messages]);
    }else{
      Session::put('danger',"You Are UnAuthorised");
      return back(); 
    }
    
  }

}