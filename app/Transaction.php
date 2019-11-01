<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $table = 'transaction_details';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'completed_at';
}
