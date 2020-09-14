<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadTask extends Model
{

	public $timestamps = false;
	public  $table = "lead_task";
	protected $fillable = ['org_id','id', 'cust_id','subject', 'due_date', 'taskstatus', 'assign_to', 'created_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at', 'status'];
}
