<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PccRegistration extends Model
{

	public $timestamps = false;
	protected $primaryKey = 'id';
	protected $table = 'pccdata';
}
