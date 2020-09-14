<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadEmail extends Model
{

	public $timestamps = false;
	public  $table = "lead_email";
	protected $fillable = ['id', 'cust_id','email','org_id', 'name', 'subject', 'message', 'created_by', 'deleted_by', 'created_at', 'updated_at', 'deleted_at', 'status'];
}
