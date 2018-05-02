<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fail extends Model
{
	protected $dates = [
		'failed_at',
	];
}
