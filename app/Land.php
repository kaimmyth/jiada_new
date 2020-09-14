<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Land extends Model
{
	use Sortable;
	
	public $timestamps = false;
	public  $table = "lands";
	
}
