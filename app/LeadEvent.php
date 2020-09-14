<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadEvent extends Model
{

	public $timestamps = false;
	public  $table = "lead_event";
	protected $fillable = ['id', 'org_id', 'cust_id','subject', 'taskstatus', 'start_date_time', 'end_date_time', 'location', 'description', 'assign_to', 'created_by', 'deleted_by', 'created_at', 'updated_at', 'deleted_at', 'status'];
}
