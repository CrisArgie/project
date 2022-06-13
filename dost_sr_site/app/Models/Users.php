<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, SoftDeletes;

    protected $with = ['repairrequest', 'ictforms', 'divisions'];
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
