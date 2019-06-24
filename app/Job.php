<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'company_id',
        'opening_data',
        'expected_duration',
        'description',
        'payment_amount'
    ];
}
