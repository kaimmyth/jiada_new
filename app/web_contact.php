<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class web_contact extends Model
{
    public $timestamps = false;
	protected $primaryKey = 'id';
	protected $table = 'web_contact';
}
