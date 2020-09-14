<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebMaterial extends Model
{
// 	public $timestamps = false;
	public  $table = "web_materials";
	protected $fillable = ['org_id','mat_web_name'];
}
