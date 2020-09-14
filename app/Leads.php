<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leads extends Model
{

	public $timestamps = false;
	public  $table = "leads";
	protected $fillable = ['country','org_id','title', 'first_name', 'last_name', 'email', 'mobile', 'phone', 'fax', 'company_name', 'website', 'n_o_employee', 'lead_source', 'lead_status', 'lead_owner', 'updated_at', 'deleted_at', 'annual_revenue', 'rating', 'address1', 'address2', 'city_distt', 'state_province', 'pincode', 'description', 'created_at', '_token','status','owner_id'];
	

}
