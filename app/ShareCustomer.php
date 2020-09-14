<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareCustomer extends Model
{

	protected $fillable = [
		'id',
	];

	protected $primaryKey = 'id';
	public  $table = "shareholders";
	public $timestamps = false;
}
