<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='users';

    protected $fillable = [
        'name','surname','company_id', 'role','cellphone' ,'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }

    public function role()
    {
        return $this->belongsTo(role::class,'role','id');
    }
}
