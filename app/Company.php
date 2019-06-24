<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'job_id',
        'user_id',
        'company_name',
        'company_location',
    ];
}
