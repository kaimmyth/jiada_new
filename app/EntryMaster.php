<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryMaster extends Model
{
    public $timestamps = false;
	protected $primaryKey = 'id';
	protected $table = 'entry_master';
}
