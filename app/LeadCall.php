<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadCall extends Model
{

	public $timestamps = false;
	public  $table = "lead_call";
	protected $fillable = ['id', 'cust_id','org_id', 'subject', 'call_purpose', 'phone', 'calltype', 'call_details', 'call_timer', 'call_start_time', 'owner', 'minute', 'second', 'created_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at', 'status'];
}
