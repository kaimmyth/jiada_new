<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PccMaster extends Model
{
    public $timestamps = false;
	protected $primaryKey = 'id';
	protected $table = 'pcc_master';
}
