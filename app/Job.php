<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model

{
    public function companies()
    {
        return $this->belongsTo(Company::class);
    }

    protected $fillable = [
        'company_id',
        'opening_date',
        'expected_duration',
        'description',
        'payment_amount'
    ];
}
