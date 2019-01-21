<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outletdetail extends Model
{
    
	protected $fillable = [];

	protected $primaryKey = 'merchant_id';

	protected $keyType = 'string';

	protected $connection = 'mysql2';

	public $incrementing = false;


}
