<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function jobs()
    {
        return $this->hasMany('App/Job');
    }

    protected $fillable = [
        'job_id',
        'user_id',
        'company_name',
        'company_location',
    ];
}
