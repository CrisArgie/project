<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;

    protected $attributes = [
        'user_type' => 'customer'
    ];

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];


    // MUTATOR
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    //RELATIONSHIPS
    public function ictforms()
    {
        return $this->hasMany(IctForms::class, 'users_id', 'id');
    }

    public function repairrequest()
    {
        return $this->hasMany(RepairRequest::class, 'users_id', 'id');
    }

    public function divisions()
    {
        return $this->belongsto(Divisions::class);
    }
}
