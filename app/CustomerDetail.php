<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $table = 'customer_details';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
