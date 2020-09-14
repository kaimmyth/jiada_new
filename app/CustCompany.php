<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class CustCompany extends Model
{

	protected $fillable = ['id'];
	protected $primaryKey = 'id';
	public  $table = "customer_company";
	public $timestamps = false;
	protected $appends = ['login_details'];

	public function getLoginDetailsAttribute()
	{
		$details=User::select('username','users_role','name','password','email')->where('id',$this->attributes['cust_id'])->first();
		if($details){
			return $details;
		}
		return 'not found';
	}
}
