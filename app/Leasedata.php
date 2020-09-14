<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leasedata extends Model
{

	public $timestamps = false;
	protected $primaryKey = 'id';
	protected $table = 'leasedata';
}
