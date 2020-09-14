<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $fillable = [
		'id',
	];

	protected $primaryKey = 'id';
	public  $table = "customers";
	public $timestamps = false;
}
