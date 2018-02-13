<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EndPoint extends Model
{
    public function endPoint()
    {
        return $this->belongsTo(Site::class,'site_id','id');
    }
}
