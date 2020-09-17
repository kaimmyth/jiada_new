<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $primaryKey = 'id';
	public  $table = "enterprise";
	public $timestamps = false;
}
