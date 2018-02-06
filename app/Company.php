<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function site()
    {
        return $this->hasMany(Site::class);
    }

    public function endpoints()
    {
        return $this->hasManyThrough('App\EndPoint', 'App\Site', 'company_id', 'site_id');
    }

}
