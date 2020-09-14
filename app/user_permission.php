<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_permission extends Model
{
    public $timestamps = false;
    protected $table = "user_permission";
    protected $primaryKey = 'ID';
}
