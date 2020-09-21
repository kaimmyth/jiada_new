<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\web_contact;
use Mail;
class VisiterContactController extends Controller
{
    public function savecontact(Request $request)
    {
    //   return $request;
        if($request)
        {
        $sent_email_array =array('amit2019.itscient@gmail.com','aiada1972@gmail.com','sumant@itscient.com');
        $email_array_instring=implode(",",$sent_email_array);
        $saveContact=new web_contact();
        $saveContact->name=$request->Name?? "";
        $saveContact->Email=$request->Email?? "";
        $saveContact->Phone=$request->Phone??"";
        $saveContact->Message=$request->Message??"";
        $saveContact->Sent_mail_id=$email_array_instring??"";
        $saveContact->created_by=$request->name??"";
        $saveContact->created_at=date('Y-m-d');
        $saveContact->save();
        $data=array('saveContact' => $saveContact ,'sent_email_array' => $sent_email_array);
        Mail::send('emails.contact_mail', ['data' => $data], function ($message) use ($data) {
            $email_to = $data['sent_email_array'];
            foreach ($email_to as $key => $value) {
                $message->to($email_to[$key]);
            }
            $message->subject("This Is Jiada Visiter Contact");
           
            $message->from($data['saveContact']['Email'], 'Jiada');
        });
        return redirect('homepage');
        // return view('emails.contact_mail')->with('data',$data);
        }
        else
        {
            return redirect('homepage');
        }
    }
}
