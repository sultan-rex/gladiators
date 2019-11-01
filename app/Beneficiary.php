<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
	protected $table = 'beneficiary_details';
	const CREATED_AT = 'created_at';
}
