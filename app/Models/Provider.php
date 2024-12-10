<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'business_name',
        'maternal_last_name',
        'paternal_last_name',
        'rut',
        'address',
        'phone',
        'email',
        'account_number',
        'bank_name',
        'account_type',
        'status',
        'type',
    ];
}
