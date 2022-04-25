<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;

    // protected $fillable = [
    //     'user_type',
    //     'first_name',
    //     'last_name',
    //     'email',
    //     'password',
    // ];

    protected $attributes = [
        'user_type' => 'customer'
    ];

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];


    // mutator
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function divisions()
    {
        return $this->hasMany(Divisions::class);
    }
}
