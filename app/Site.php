<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Site extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }

    public function endpoint()
    {
        return $this->hasMany('App\EndPoint');
    }
}
