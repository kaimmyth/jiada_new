<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Department extends Model
{
    
    public $timestamps = false;
	protected $primaryKey = 'id';
	protected $table = 'subdepartment';
}
